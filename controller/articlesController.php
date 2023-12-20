<?php
include_once('model/articlesModel.php');

class ArticlesController
{

    private $model;
    public function __construct()
    {
        $this->model = new ArticlesModel;
    }

    public function getArticles()
    {
        $articles=$this->model->getArticles();
        include_once('view/series.php');
    }

    public function getArticlesByID()
    {
        $articles=$this->model->getArticles();
        include_once('view/13reasonwhy.php');
    }
    public function getArticlescb()
    {
        $articles=$this->model->getArticles();
        include_once('view/cb.php');
    }
    public function getArticlesob()
    {
        $articles=$this->model->getArticles();
        include_once('view/ob.php');
    }
    public function getArticlestlou()
    {
        $articles=$this->model->getArticles();
        include_once('view/tlou.php');
    }
    public function getArticlestwd()
    {
        $articles=$this->model->getArticles();
        include_once('view/twd.php');
    }
}

