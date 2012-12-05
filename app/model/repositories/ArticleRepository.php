<?php

class ArticleRepository
{
    private $connection;

    public function __construct(\Nette\Database\Connection $connection) {
        $this->connection = $connection;
    }

    public function getTestResult(){
        return $this->connection->table('author')->where('article:id',1)->fetch();
        //$var->fetch();
    }

    public function getArticles(){
        return $this->connection->table('article');
    }

    public function addArticle($data){
        $this->connection->table('article')->insert($data) ;
        return $this;
    }

    public function updateArticle($id, $data){
        $this->connection
            ->table('article')
            ->find($id)
            ->update($data);
    }


}
