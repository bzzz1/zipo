<?php

class Article extends Eloquent {
	protected $guarded = [];
	public $timestamps = false;
	protected $primaryKey = 'article_id';
// /*------------------------------------------------
// | READ
// ------------------------------------------------*/
	public static function readAllArticles() {
		$articles = Article::orderBy('time', 'ASC');
		$articles = $articles->get();
		return $articles;
	}
}