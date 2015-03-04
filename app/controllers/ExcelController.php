<?php
class MyReadFilter implements PHPExcel_Reader_IReadFilter {
	public function readCell($column, $row, $worksheetName = '') {
		global $limit;
		global $DELTA;
		if ($row >= $limit-$DELTA+1 && $row <= $limit) {
			return true;
		}
		return false;
	}
}

class ExcelController extends BaseController {
	public function excelImport() {
		function timer_start() { // add error timing
			global $__start;
			date_default_timezone_set('Europe/Kiev');
			// echo 'Start at: '.date('H:i:s');
			$__start = microtime(true); 
		}
		function memuse($line = 'unknown') {
			echo "</br>memory_get_usage(true) on line $line</br>";
			echo round(memory_get_usage(true)/1024/1024, 2);
			echo ' Mb</br>';
		}
		function mempeak($line = 'unknown') {
			$round = round(memory_get_peak_usage(true)/1024/1024, 2);	
			return "</br>Максимальная загрузка памяти: ".$round.' Mb</br>';
		}
		
		function timer_stop() {
			global $__start;
			$__time = microtime(true) - $__start;
			return '</br>Время работы скрипта: '.round($__time, 2).' с</br>';
		}

		timer_start();

		set_time_limit(10*60);
		ini_set('memory_limit', '256M');
		$memoryCacheSizeMb = 10;
		$excel_file = HELP::$EXCEL_IMPORT_DIR.DIRECTORY_SEPARATOR.'excel.xlsx';
		$STOP = 100; // the row that has higher index than the last one
		global $DELTA;
		$DELTA = 100;
		$SKIP = 2; // amount of rows to be skiped
		global $limit;
		$errors = [];
		$messages = [];
		$added = 0;

		/*------------------------------------------------
		| RETRIEVE DATA
		------------------------------------------------*/ 
		$categories = [
			'Механическое_en',
			'Тепловое_en',
			'Холодильное_en',
			'Посудомоечное_en',
			'Механическое_ru',
			'Тепловое_ru',
			'Холодильное_ru',
			'Посудомоечное_ru'
		];
		$cat_subcats = Subcat::getSubcatsTitlesByCategory();
		$codes = Item::lists('code');
		$producers = Producer::lists('producer');

		/*------------------------------------------------
		| Read chunks of xlsx
		------------------------------------------------*/
		$objReader = new PHPExcel_Reader_Excel2007();
		$objReader->setReadDataOnly(TRUE);

		/*------------------------------------------------
		| Enabling Caching
		------------------------------------------------*/
		$cacheMethod=PHPExcel_CachedObjectStorageFactory::cache_to_phpTemp;
		$cacheSettings=array("memoryCacheSize"=>"$memoryCacheSizeMb"."MB");
		PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings);

		for ($limit=$SKIP+$DELTA; $limit<=$STOP+$DELTA; $limit+=$DELTA) {
			$objReader->setReadFilter(new MyReadFilter());
			$objPHPExcel = $objReader->load($excel_file);
			$objWorksheet = $objPHPExcel->getActiveSheet();
			// remove empty rows that were skiped ???
			// $objWorksheet->removeRow(1, $SKIP);
			/*------------------------------------------------
			| Get max column and row indexes
			------------------------------------------------*/
			$highestRow = $objWorksheet->getHighestRow(); // e.g. 10
			$highestColumnLetter = $objWorksheet->getHighestColumn(); // e.g 'F'
			$highestColumn = PHPExcel_Cell::columnIndexFromString($highestColumnLetter); // e.g. 5

			/*------------------------------------------------
			| WRITE TO DB
			------------------------------------------------*/
			for ($row=1+$SKIP; $row<=$highestRow; ++$row) {
				$message = '';
				$error = '';

				$code 			= $objWorksheet->getCellByColumnAndRow(0, $row)->getValue();		
				$title 			= $objWorksheet->getCellByColumnAndRow(1, $row)->getValue();
				$description 	= $objWorksheet->getCellByColumnAndRow(2, $row)->getValue();	
				$price 			= $objWorksheet->getCellByColumnAndRow(3, $row)->getValue();
				$currency 		= $objWorksheet->getCellByColumnAndRow(4, $row)->getValue();
				$hit 			= $objWorksheet->getCellByColumnAndRow(5, $row)->getValue();
				$special 		= $objWorksheet->getCellByColumnAndRow(6, $row)->getValue();
				$category 		= $objWorksheet->getCellByColumnAndRow(7, $row)->getValue();
				$subcat 		= $objWorksheet->getCellByColumnAndRow(8, $row)->getValue();
				$producer 		= $objWorksheet->getCellByColumnAndRow(9, $row)->getValue();
				$procurement 	= $objWorksheet->getCellByColumnAndRow(10, $row)->getValue();	

				// category
				if (!in_array($category, $categories)) {
					$error .= 'Вы ввели неверную категорию. ';
				}

				// subcat 
				if (!in_array($subcat, $cat_subcats[$category])) {
					$created_subcat = Subcat::create(['subcat'=>$subcat, 'category'=>$category]);
					$cat_subcats[$category][] = $subcat;
					$message .= 'Добавлена новая подкатегория '.$subcat.' в категорию '.$category.'. ';
				}

				// producer
				if (!in_array($producer, $producers)) {
					$created_producer = Producer::create(['producer'=>$producer]);
					$producers[] = $producer;
					$message .= 'Добавлен новый производитель '.$producer.'. ';
				}

				// code
				if (in_array($code, $codes)) {
					$error .= 'Товар с кодом '.$code.' уже существует! ';
				}

				// price
				if (!is_float($price)) {
					$error .= 'Цена должна быть числом. ';
				} else if ($price < 0) {
					$error .= 'Цена не может быть отрицательной! ';
				}

				// hit, cpecial, procurement
				if (!($hit == 0 || $hit == 1)) {
					$error .= 'Поле Хит продаж должно иметь значение 0 - нет, 1 - да. ';
				}
				if (!($special == 0 || $special == 1)) {
					$error .= 'Поле Спецпредложение должно иметь значение 0 - нет, 1 - да. ';
				}
				if (!($procurement == 0 || $procurement == 1)) {
					$error .= 'Поле Наличие должно иметь значение 0 - нет, 1 - да. ';
				}

				if ($error) {
					$errors[] = $row.' строка. '.$error;
					continue;
				} else {
					// add item to db
					$fields = [
						'code' 			=> $code,
						'title' 		=> $title,
						'description'   => ($description) ? $description : 'Для данного товара описание отсутствует.',
						'price' 		=> $price,
						'currency' 		=> $currency,
						'hit' 			=> $hit,
						'special' 		=> $special,
						'subcat_id' 	=> isset($created_subcat) ? $created_subcat->subcat_id : $subcat,
						'producer_id'	=> isset($created_producer) ? $created_producer->producer_id : $producer,
						'procurement' 	=> $procurement,
					];

					try {
						$item = Item::create($fields);
						$caught = false;
					} catch (Exception $e) {
						$error .= 'UNCAUGHT EXCEPTION! ';
						$errors[] = $row.' строка. '.$error;
						$caught = true;
						continue;
					} 

					// add code only if no exception thrown
					if (!$caught) {
						$codes[] = $item->code;
					}
				}

				if ($message) {
					$messages[] = $row.' строка. '.$message;
				}

				// number of added items
				$added++;
			}
			$objPHPExcel->disconnectWorksheets();
			unset($objPHPExcel);
		}

		timer_stop();
		mempeak();

		return View::make('admin/admin_import_status')->with([
			'errors' 	=> $errors,
			'messages'  => $messages,
			'added'		=> $added,
			'SKIP'		=> $SKIP,
			'missed'	=> $row-$SKIP-1-$added,
			'time'		=> timer_stop(),
			'mempeak'	=> mempeak(),
		]);
	}
}