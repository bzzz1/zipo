<?php

class Article extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
	public $primaryKey = 'article_id';
// /*------------------------------------------------
// | READ
// ------------------------------------------------*/
	public static function readAllArticles() {
		$articles = Article::orderBy('time', 'ASC');
		$articles = $articles->get();
		return $articles;
	}
}