<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\Validator;
use app\forms\RegisterForm;

class RegisterCtrl
{

    private $form;
    private $id;

    public function __construct()
    {
        $this->form = new RegisterForm();
    }

    public function getParams()
    {
        $this->form->id = ParamUtils::getFromRequest('id');
        $this->form->imie = ParamUtils::getFromRequest('imie');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
        $this->form->nrtel = ParamUtils::getFromRequest('nrtel');
        $this->form->pesel = ParamUtils::getFromRequest('pesel');
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
        $this->form->pass_repeat = ParamUtils::getFromRequest('pass_repeat');
    }

    public function validate()
    {

        if (!(isset($this->form->imie) && isset($this->form->nazwisko) && isset($this->form->nrtel) && isset($this->form->pesel) && isset($this->form->login) && isset($this->form->pass)
                && isset($this->form->pass_repeat)))
        {
            return false;
        }

        $v = new Validator();

        $v->validate($this->form->imie, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Imię jest wymagane',
            'min_length' => 5,
            'max_length' => 50,
            'validator_message' => 'Imię musi zawierać pomiędzy 5 a 50 znaków'
        ]);

        $v->validate($this->form->nazwisko, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Nazwisko jest wymagane',
            'min_length' => 5,
            'max_length' => 50,
            'validator_message' => 'Nazwisko musi zawierać pomiędzy 5 a 50 znaków'
        ]);

        $v->validate($this->form->nrtel, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Numer telefonu jest wymagany',
            'min_length' => 9,
            'max_length' => 9,
            'int' => true,
            'validator_message' => 'Numer telefonu musi zawierać 9 cyfr'
        ]);

        $v->validate($this->form->pesel, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Pesel jest wymagany',
            'min_length' => 11,
            'max_length' => 11,
            'int' => true,
            'validator_message' => 'Pesel musi zawierać 11 cyfr'
        ]);

        $v->validate($this->form->login, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
            'min_length' => 5,
            'max_length' => 50,
            'validator_message' => 'Login musi zawierać pomiędzy 5 a 50 znaków'
        ]);

        $v->validate($this->form->pass, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
            'min_length' => 5,
            'max_length' => 50,
            'validator_message' => 'Hasło musi zawierać pomiędzy 5 a 50 znaków'
        ]);
        
        $v->validate($this->form->pass_repeat, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Powtórzone hasło jest wymagane',
            'min_length' => 5,
            'max_length' => 50,
            'validator_message' => 'Powtórzone hasło musi zawierać pomiędzy 5 a 50 znaków'
        ]);

        if (App::getMessages()
            ->isError()) return false;

        return !App::getMessages()
            ->isError();
    }

    public function action_registerShow()
    {
        $this->generateView();
    }

    public function action_register()
    {
        $this->getParams();
        $hashpass = password_hash($this->form->pass, PASSWORD_DEFAULT);
        if ($this->validate() && $this->form->pass == $this->form->pass_repeat)
        {
            try
            {
                App::getDB()->insert("uzytkownicy", [
                    "imie" => $this->form->imie,
                    "nazwisko" => $this->form->nazwisko,
                    "nr_tel" => $this->form->nrtel,
                    "pesel" => $this->form->pesel,
                    "login" => $this->form->login,
                    "haslo" => $hashpass,
                        ]);
            }
            catch(\PDOException $e)
            {
                Utils::addErrorMessage('Podany PESEL lub Login znajduje się już w bazie danych');
                App::getRouter()->forwardTo('register');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
            }

            App::getRouter()->forwardTo('login');
        }
        
        else if($this->form->pass != $this->form->pass_repeat)    
        {   
            Utils::addErrorMessage('"Hasło" i "Powtórz Hasło" nie zawiera takich samych wartości');
            $this->generateView();
        } 
        
        else
        {
            $this->generateView();
        }
    }

    public function generateView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('RegisterView.tpl');
    }
}