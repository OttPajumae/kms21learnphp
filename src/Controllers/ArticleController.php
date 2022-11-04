<?php

namespace App\Controllers;

use app\DB;
use App\Models\Article;


class ArticleController {
    public function index(){
        $db = new DB();
        $articles = $db->all('articles', Article::class);
        
        view('articles/index', compact('articles'));
    }
}