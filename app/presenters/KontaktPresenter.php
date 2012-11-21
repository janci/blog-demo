<?php
use Nette\Forms\Form;

class KontaktPresenter extends BasePresenter
{
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

        return $form;
    }

}
