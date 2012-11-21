<?php
namespace Blog\Controls;

use Nette\Utils\Html;
class GoogleMap extends \Nette\Application\UI\Control
{
    private $googleLink;
    public function __construct(){
        $this->googleLink = Html::el('a');
        $this->googleLink->addStyle('color','#0000FF');
        $this->googleLink->addStyle('text-align', 'left');
        $this->googleLink->setText('View Larger Map');
        $this->googleLink->href = 'https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Brezno,+Slovakia&amp;aq=0&amp;oq=Brezno&amp;sll=37.0625,-95.677068&amp;sspn=40.732051,56.513672&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Brezno,+Slovakia&amp;ll=48.813138,19.643555&amp;spn=0.019782,0.036478&amp;z=14&amp;iwloc=A';
    }

    public function getGoogleExternalLink() {
        return $this->googleLink;
    }


    public function setLargeMapDescription($description){
        $this->googleLink->setText($description);
        //$this->template->largeMapDescription = $description;
    }
    public function setTitle($title){
        $this->template->title = $title;
    }

    public function render($param=null){
        /* @var $template \Nette\Templating\FileTemplate */
        $template = $this->getTemplate();
        $template->externalLink = $this->googleLink;
        $template->setFile(dirname(__FILE__).DIRECTORY_SEPARATOR.'template.latte');
        $template->render();
    }

}
