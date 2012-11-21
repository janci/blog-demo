<?php
use Nette\Forms\Form;
use Blog\Controls\GoogleMap;

class KontaktPresenter extends BasePresenter
{
    public function createComponentGMap(){
        $googleMap = new GoogleMap();
        $googleMap->setTitle("Tu sa nachádzame...");
        return $googleMap;
    }

    public function createComponentContactForm(){
        $form = new \Nette\Application\UI\Form();
        $form->addText('name', 'Meno a priezvisko:');
        $form->addText('email', 'Váš email:');
        $form->addTextArea('message', 'Správa:');
        $form->addSubmit('submit', 'Odoslať správu');

        $form['name']->addRule(Form::FILLED, 'Meno a priezvisko je povinný údaj');
        $form['email']->addRule(Form::FILLED, 'Email je povinný údaj.');
        $form['message']->addRule(Form::FILLED, 'Správa je povinný údaj.');
        $form['email']->addRule(Form::EMAIL, 'Email nemá správny formát');

        $form->onSuccess[] = array($this, 'sendEmail');

        return $form;
    }

    public function sendEmail(\Nette\Application\UI\Form $form) {
        $values = $form->getValues();

        $options = array(
            'host' => 'smtp.gmail.com',
            'username' => 'prednaska@janci.net',
            'password' => 'mrkvaAHrasok',
            'secure' => 'ssl'
        );

        $html = '<i>'.$values->message.'</i><br /><br />'.$values->name;

        $email = new \Nette\Mail\Message();
        $email->setMailer(new \Nette\Mail\SmtpMailer($options));
        $email->setFrom('prednaska@janci.net');
        $email->addReplyTo($values->email);
        $email->setSubject('Kontakt z blog.sk');
        $email->addTo('posta.janci@gmail.com');
        $email->setHtmlBody($html);
        $email->send();

        $this->redirect('this');
    }

}
