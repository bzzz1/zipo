<?php

class PdfController extends BaseController {
	public function all_pdf() {
		return View::make('all_pdf')->with([
			'pdf_producers' => Producer::has('pdf')->get(),
			'articles'		=> Article::readAllArticles(),
			'recents'		=> Recent::readAllRecents(),
			'env' 			=> 'catalog'
		]);
	}

	public function all_pdf_by_prod() {
		return View::make('all_pdf_by_prod')->with([
			'producer'	=> Producer::find(Input::get('producer_id')),
			'pdfs'		=> Pdf::allPdfByProd(Input::get('producer_id')),
			'articles'	=> Article::readAllArticles(),
			'recents'	=> Recent::readAllRecents(),
			'env' 		=> 'catalog'
		]);
	}

	public function one_pdf() {
		return View::make('one_pdf')->with([
			'producer'	=> Producer::find(Input::get('producer_id')),
			'items'		=> Item::with('producer', 'subcat')->has('pdfs')->get(),
			'pdf'		=> Pdf::find(Input::get('pdf_id')),
			'articles'	=> Article::readAllArticles(),
			'recents'	=> Recent::readAllRecents(),
			'env' 		=> 'catalog'
		]);
	}

	public function load_pdf() {
		if (Input::hasFile('file')) {
			$file = Input::file('file');
			$destinationPath = HELP::$PDF_IMPORT_DIR;
			$extension = $file->getClientOriginalExtension();
			if ($extension != 'pdf') {
				return Redirect::to('/admin')->withErrors('Выбранный файл должен иметь формат .pdf');
			}

			$filename = 'pdf_'.time().'.'.$extension;

			$fields = Input::all();
			$fields['file'] = $filename;
			$rules = [
				'good'	=> 'required|unique:pdfs,good'
			];

			$validator = Validator::make($fields, $rules);
			if ($validator->fails()) {
				return Redirect::back()->withInput()
					->withErrors('Товар с таким названием уже существует. Название должено быть уникальным!');
			} else {
				$file->move($destinationPath, $filename);
				$item = Pdf::create($fields);
				return Redirect::back()->with('message', 'Pdf файл успешно загружен!');
			}
		} else {
			return Redirect::to('/admin')->withErrors('Pdf файл не выбран!');
		}
	}

	public function list_pdf() {
		return View::make('admin/admin_pdfs')->with([
			'pdfs'		=> Pdf::all(),
			'producers' => Producer::all(),
		]);
	}

	public function delete_pdf() {
		Pdf::destroy(Input::get('pdf_id'));
		return Redirect::back();
	}

	public function update_pdf() {
		$fields = Input::all();
		$pdf_id = Input::get('pdf_id');

		// unset($fields['_token']);
		$pdf = Pdf::find($pdf_id)->update($fields);
		return Redirect::back()->with('message', 'Элемент изменен успешно.');



		// $article_id = Input::get('article_id');
		// $photo = Input::get('photo');
		// $old = Input::get('old');
		// unset($fields['old']);
		// $today = date("Y-m-d", time());
		// $fields['time'] = $today;
		
		// // createnig and updting
		// if ($photo != 'no_photo.png' && $photo != $old) {
		// 	if ($old != 'no_photo.png') {
		// 		$filepath = HELP::$ITEM_PHOTO_DIR.DIRECTORY_SEPARATOR.$old;
		// 		File::delete($filepath);
		// 		$fields['photo'] = 'no_photo.png';
		// 	}

		// 	$old = HELP::$ITEM_PHOTO_DIR.DIRECTORY_SEPARATOR.$photo;
		// 	$extension = File::extension($old);
		// 	$filename = 'photo_'.time().'.'.$extension;
		// 	$new = HELP::$ITEM_PHOTO_DIR.DIRECTORY_SEPARATOR.$filename;
		// 	rename($old, $new);
		// 	$fields['photo'] = $filename;
		// }

		// // deleting photo
		// if ($photo == 'no_photo.png' && $old != 'no_photo.png') {
		// 	$filepath = HELP::$ITEM_PHOTO_DIR.DIRECTORY_SEPARATOR.$old;
		// 	File::delete($filepath);
		// 	$fields['photo'] = 'no_photo.png';
		// }


		// if ($article_id) {
		// 	$message = 'Новость '.$article->title.' изменена! <a href='.URL::to('/admin/change_article?article_id='.$article->article_id).' class="alert-link">Назад</a>';
		// 	return Redirect::to('/admin/change_article')->with('message', $message);
		// } else {
		// 	$message = 'Новость '.$article->title.' добавлена! <a href='.URL::to('/admin/change_article?article_id='.$article->article_id).' class="alert-link">Назад</a>';
		// }
	}

	public function item_pdfs() {
		return View::make('admin/admin_item_pdfs')->with([
			'pdf'		=> Pdf::find(Input::get('pdf_id')),
			'items'		=> Pdf::find(Input::get('pdf_id'))->items()->get(),
			'producer'	=> Producer::find(Input::get('producer_id')),
		]);
	}

	public function delete_item_from_pdf() {
		$item_id = Input::get('item_id');
		$pdf_id = Input::get('pdf_id');
		Pdf::find($pdf_id)->items()->detach($item_id);
		return Redirect::back();
	}

	public function ajax_change_pdf() {
		$ids = Input::get('ids');
		$pdf_id = Input::get('pdf_id');

		Pdf::find($pdf_id)->items()->detach($ids);
		Pdf::find($pdf_id)->items()->attach($ids);
		return Response::json($ids);
	}
}