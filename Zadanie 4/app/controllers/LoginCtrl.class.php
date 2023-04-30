<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use core\Validator;
use app\forms\LoginForm;

class LoginCtrl
{

    public $form;
    public $role;
    private $id_roli;
    private $password;
    private $active;
    private $role_active;
    private $id;
    private $karnet;
    private $karnetDate;
    private $date;
    private $newDate;

    public function __construct()
    {
        $this->form = new LoginForm();
    }

    public function getParams()
    {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
    }

    public function validate()
    {
        if (!(isset($this->form->login) && isset($this->form->pass)))
        {
            return false;
        }

        $v = new Validator();

        $v->validate($this->form->login, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
            'min_length' => 5,
            'max_length' => 50,
            'validator_message' => 'Login musi zawierać pomiędzy 3 a 50 znaków'
        ]);

        $v->validate($this->form->pass, [
            'trim' => true,
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
            'min_length' => 5,
            'max_length' => 50,
            'validator_message' => 'Hasło musi zawierać pomiędzy 3 a 50 znaków'
        ]);

        if (App::getMessages()
            ->isError()) return false;

        $search_params['login'] = $this->form->login;
        $where = & $search_params;

        SessionUtils::store('nazwa', $this->form->login);

        try
        {
            $active = App::getDB()->get("uzytkownicy", "aktywny", $where);
            $password = App::getDB()->get("uzytkownicy", "haslo", $where);
            $id = App::getDB()->get("uzytkownicy", "id_uzytkownika", $where);
            $karnet = App::getDB()->get("czlonkostwo", "id_uzytkownika", ["id_uzytkownika" => $id]);
            $id_roli = App::getDB()->get("katalog_uzytkownicy", "ID_roli", ["id_uzytkownika" => $id]);
            $role = App::getDB()->get("katalog", "nazwa_roli", ["ID_roli" => $id_roli]);
            $role_active = App::getDB()->get("katalog", "aktywna", ["ID_roli" => $id_roli]);
            SessionUtils::store('id', $id);
        }

        catch(\PDOException $e)
        {
            Utils::addErrorMessage('Błąd - Nie można pobrać rekordów');
            if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
        }

        if ($karnet != '')
        {
            try
            {
                $karnetDate = App::getDB()->get("czlonkostwo", "Data_rozpoczecia", ["id_uzytkownika" => $id]);
            }
            catch(\PDOException $e)
            {
                Utils::addErrorMessage('Błąd - Nie można pobrać rekordów');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
            }

            $date = date("Y/m/d");
            $newDate = date('Y-m-d', strtotime($date . ' - 1 months'));

            if ($karnetDate > $newDate)
            {
            }
            else
            {
                try
                {
                    App::getDB()->delete("czlonkostwo", ["id_uzytkownika" => $id]);
                }
                catch(\PDOException $e)
                {
                    Utils::addErrorMessage('Błąd - Nie można pobrać rekordów');
                    if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
                }
            }
        }

        if ($active == 1 && $role_active == 1)
        {
            SessionUtils::store('rola', $role);
            
            if (password_verify($this->form->pass, $password))
            {
                RoleUtils::addRole($role);
            }
            else
            {
                Utils::addErrorMessage('Błędne dane logowania');
            }
            return !App::getMessages()->isError();
        }
        else if ($active == '')
        {
            Utils::addErrorMessage('Użytkownik nie istnieje');
        }
        else if ($role_active == '')
        {
            Utils::addErrorMessage('Rola użytkownika nie istnieje');
        }
        else if ($active == 0) 
        {
            Utils::addErrorMessage('Użytkownik jest nieaktywny');
        }
        else if ($role_active == 0) 
        {
            Utils::addErrorMessage('Rola użytkownika jest nieaktywna');
        }
    }

    public function action_loginShow()
    {
        $this->generateView();
    }

    public function action_login()
    {
        $this->getParams();
        if ($this->validate())
        {
            if (RoleUtils::inRole("pracownik"))
            {
                App::getRouter()->redirectTo("personList");
            }
            else
            {
                App::getRouter()->redirectTo("userInfo");
            }
        }
        else
        {
            $this->generateView();
        }
    }

    public function action_logout()
    {
        session_destroy();
        SessionUtils::remove('nazwa');
        SessionUtils::remove('rola');
        SessionUtils::remove('id');
        App::getRouter()->redirectTo('hello');
    }

    public function generateView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('rola', $this->role);
        App::getSmarty()->display('LoginView.tpl');
    }
}

