<?php

class ClankyPresenter extends BasePresenter
{
    private $articleRepository;

    /** @persistent */
    public $page=1;

    public function __construct(\Nette\DI\Container $container, ArticleRepository $articles){
        parent::__construct($container);

        $this->articleRepository = $articles;
    }

    public function handleAddArticle(){
        $data = array(
            'title'  => 'XZáznam '.time(),
            'content' => 'Toto je popis'
        );

        $this->articleRepository->addArticle($data);
        $this->redirect('this');
    }

    public function handleUpdateArticle($id){
        $data = array(
            'title'  => 'XZáznam '.time(),
        );

        $this->articleRepository->updateArticle($id, $data);
        $this->redirect('this');
    }


    public function renderDefault(){
        $this->template->articles = $this->articleRepository->getArticles();//->fetchPairs('id');//->page($this->page, 3);
        //dump( $this->articleRepository->getTestResult()->fetchPairs('id') );
    }

}
