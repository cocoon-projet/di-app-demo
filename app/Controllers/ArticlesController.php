<?php
namespace App\Controllers;

use App\Repositories\ArticleRepository;
/**
 * Articles Controller
 */
class ArticlesController
{
    private $article;

    public function __construct(ArticleRepository $article)
    {
        $this->article = $article;
    }
    /**
     * Index action
     *
     * @return View
     */
    public function index()
    {
        $articles = $this->article->all();
        return \View::render('index', ['articles' => $articles]);
    }
    /**
     * Show action
     *
     * @param [type] $id
     * @return View
     */
    public function show($id)
    {
        $article = $this->article->find($id);
        return \View::render('show', ['article' => $article]);
    }
}
