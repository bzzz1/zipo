<?php

class PdfController extends BaseController {
	public function all_pdf() {
		return View::make('all_pdf')->with([
			'cats_producers'=> Producer::getPdfProducersByCategory(),
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

	public function all_pdf_by_cat() {
		return View::make('all_pdf_by_prod')->with([
			'producer'	=> Producer::find(Input::get('producer_id')),
			'pdfs'		=> Pdf::allPdfByCat(),
			'articles'	=> Article::readAllArticles(),
			'recents'	=> Recent::readAllRecents(),
			'env' 		=> 'catalog'
		]);
	}

	public function one_pdf() {
		$pdf_id = Input::get('pdf_id');
		return View::make('one_pdf')->with([
			'producer'	=> Producer::find(Input::get('producer_id')),
			'items'		=> Item::with('producer', 'subcat')->whereHas('pdfs', function($query) use ($pdf_id) {$query->where('item_pdf.pdf_id', $pdf_id);})->get(),
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
			if (! ($extension == 'pdf' || $extension == 'doc' || $extension == 'docx')) {
				return Redirect::to('/admin')->withErrors('Выбранный файл должен иметь формат .pdf, .doc или .docx');
			}

			$filename = 'pdf_'.time().'.'.$extension;

			$fields = Input::all();
			$fields = array_map('trim', Input::only('good'));
			unset($fields['category']);
			$fields['file'] = $filename;
			$rules = [
				'good'	=> 'required|unique:pdfs,good'
			];

			$validator = Validator::make($fields, $rules);
			if ($validator->fails()) {
				return Redirect::back()->withInput()
					->withErrors('Товар с таким названием уже существует. Название должно быть уникальным!');
			} else {
				$file->move($destinationPath, $filename);
				$item = Pdf::create($fields);
				return Redirect::back()->with('message', 'Pdf файл успешно загружен!')->withInput();
			}
		} else {
			return Redirect::to('/admin')->withErrors('Pdf файл не выбран!');
		}
	}

	public function list_pdf() {
		return View::make('admin/admin_pdfs')->with([
			'pdfs'		=> Pdf::orderBy('good', 'asc')->get(),
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

		$pdf = Pdf::find($pdf_id)->update($fields);
		return Redirect::back()->with('message', 'Элемент изменен успешно.');
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

		$pdf_items = Pdf::find($pdf_id)->items(); 
		$items = Pdf::find($pdf_id)->items; 

		foreach ($items as $item) { 
			$item_id = $item->item_id; 
			if (in_array($item_id, $ids)) { 
			$attached_ids[] = $item_id; 
			} 
		} 

		$pdf_items->attach($ids); 
			if (isset($attached_ids)) { 
			$pdf_items->detach($attached_ids); 
		} 

		return Response::json($ids); 
	}
}