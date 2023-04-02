<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use core\SessionUtils;
use app\forms\PersonEditForm;

class PersonEditCtrl
{

    private $form;
    public $rola;

    public function __construct()
    {
        $this->form = new PersonEditForm();
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

    public function validateSave()
    {
        if (!(isset($this->form->imie) && isset($this->form->nazwisko) && isset($this->form->nrtel) && isset($this->form->login) && isset($this->form->pass) && isset($this->form->pass_repeat)))
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
            'max_length' => 50,
            'validator_message' => 'Hasło musi zawierać pomiędzy 5 a 50 znaków'
        ]);
        
        $v->validate($this->form->pass_repeat, [
            'trim' => true,
            'max_length' => 50,
            'validator_message' => 'Powtórzone hasło musi zawierać pomiędzy 5 a 50 znaków'
        ]);

        if (App::getMessages()->isError()) return false;

        return !App::getMessages()->isError();
    }

    public function validateEdit()
    {
        $v = new Validator();
        $rola = SessionUtils::load('rola', true);
        $this->form->id = $v->validateFromCleanURL(1, ['int' => true, 'required' => true, 'validator_message' => 'Parametr powinien być liczbą całkowitą']);
        if (App::getMessages()->isError())
        {
            if ($rola == 'pracownik') App::getRouter()->redirectTo('personList');
            else App::getRouter()
                ->redirectTo('userInfo');
        }
        return !App::getMessages()->isError();
    }

    public function validateID()
    {
        $public_id = SessionUtils::load('id', true);
        $rola = SessionUtils::load('rola', true);
        $id = (int)$this->form->id;
        if ($public_id != $id && $rola == 'user')
        {
            App::getRouter()->forwardTo('userInfo');
        }
        return !App::getMessages()->isError();
    }

    public function action_personEdit()
    {
        $this->getParams();
        if ($this->validateEdit())
        {
            if ($this->validateID())
            {
                try
                {
                    $record = App::getDB()->get("uzytkownicy", "*", ["id_uzytkownika" => $this->form->id]);
                    $this->form->id = $record['id_uzytkownika'];
                    $this->form->imie = $record['imie'];
                    $this->form->nazwisko = $record['nazwisko'];
                    $this->form->nrtel = $record['nr_tel'];
                    $this->form->pesel = $record['pesel'];
                    $this->form->login = $record['login'];
                }
                catch(\PDOException $e)
                {
                    Utils::addErrorMessage('Błąd - Nie można odczytać rekordu');
                    if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
                }
            }
            $this->generateView();
        }
    }

    public function action_personDeactive()
    {
        $this->getParams();
        if ($this->validateEdit())
        {
            $search_params['id_uzytkownika'] = $this->form->id;
            $where = & $search_params;

            try
            {
                App::getDB()->update("uzytkownicy", ["aktywny" => 0], $where);
                Utils::addInfoMessage('Pomyślnie deaktywowano użytkownika');
            }
            catch(\PDOException $e)
            {
                Utils::addErrorMessage('Błąd - Nie można zdezaktywować użytkownika');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('personList');
    }

    public function action_personActivate()
    {
        $this->getParams();
        if ($this->validateEdit())
        {
            $search_params['id_uzytkownika'] = $this->form->id;
            $where = & $search_params;

            try
            {
                App::getDB()->update("uzytkownicy", ["aktywny" => 1], $where);
                Utils::addInfoMessage('Pomyślnie aktywowano użytkownika');
            }
            catch(\PDOException $e)
            {
                Utils::addErrorMessage('Błąd - Nie można aktywować użytkownika');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('personList');
    }

    public function action_personSave()
    {
        $this->getParams();
        $hash_pass = password_hash($this->form->pass, PASSWORD_DEFAULT);
        if ($this->validateSave() && $this->form->pass == "")
        {
            try
            {
                App::getDB()->update("uzytkownicy", [
                    "imie" => $this->form->imie,
                    "nazwisko" => $this->form->nazwisko,
                    "nr_tel" => $this->form->nrtel,
                    "login" => $this->form->login,
                    ], ["id_uzytkownika" => $this->form->id
                    ]);

                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            }
            catch(\PDOException $e)
            {
                Utils::addErrorMessage('Błąd - Nie można zapisać rekordu');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
            }
            $rola = SessionUtils::load('rola', true);

            if ($rola == "pracownik")
            {
                App::getRouter()->forwardTo('personList');
            }
            else
            {
                App::getRouter()->forwardTo('userInfo');
            }
        }
        else if ($this->validateSave() && $this->form->pass != "" && $this->form->pass == $this->form->pass_repeat)
        {
            try
            {
                App::getDB()->update("uzytkownicy", [
                    "imie" => $this->form->imie,
                    "nazwisko" => $this->form->nazwisko,
                    "nr_tel" => $this->form->nrtel,
                    "login" => $this->form->login,
                    "haslo" => $hash_pass
                    ], ["id_uzytkownika" => $this->form->id
                    ]);

                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            }
            catch(\PDOException $e)
            {
                Utils::addErrorMessage('Błąd - Nie można zapisać rekordu');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
            }
            $rola = SessionUtils::load('rola', true);

            if ($rola == "pracownik")
            {
                App::getRouter()->forwardTo('personList');
            }

            else
            {
                App::getRouter()->forwardTo('userInfo');
            }
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
        $rola = SessionUtils::load('rola', true);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('rola', $rola);
        App::getSmarty()->display('PersonEdit.tpl');
    }

}

