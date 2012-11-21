<?php
namespace Blog\Controls;

class GoogleMap extends \Nette\Application\UI\Control
{
    public function setTitle($title){
        $this->template->title = $title;
    }

    public function render($param=null){
        /* @var $template \Nette\Templating\FileTemplate */
        $template = $this->getTemplate();
        $template->setFile(dirname(__FILE__).DIRECTORY_SEPARATOR.'template.latte');
        $template->render();
    }

}
