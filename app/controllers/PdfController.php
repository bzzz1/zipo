<?php
class PdfController extends BaseController {
	public function all_pdf() {
		return View::make('all_pdf')->with([
			'pdf_producers' => Producer::allPdfs(),
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
}

 // Item::with(['producer' => function($query) {$query->select(['producer'])->get();}])->has('pdfs')->get()