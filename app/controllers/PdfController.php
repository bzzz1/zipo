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
			'pdfs'	=> Pdf::all(),
		]);
	}

	public function delete_pdf() {
		Pdf::destroy(Input::get('pdf_id'));
		return Redirect::back();
	}

	public function ajax_change_pdf() {
		$ids = Input::get('ids');
		$pdf_id = Input::get('pdf_id');

		Pdf::find($pdf_id)->items()->attach($ids);
		return Response::json($ids);
	}
}