<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\PersonSearchForm;

class UserInfoCtrl
{

    private $login;
    public $rola;

    public function action_userInfo()
    {
        $login = SessionUtils::load('nazwa', true);
        $rola = SessionUtils::load('rola', true);

        $search_params['login'] = $login;
        $where = & $search_params;

        try
        {
            $this->records = App::getDB()->select("czlonkostwo", [
                "[<]uzytkownicy"=>["id_uzytkownika" => "ID_uzytkownika"],
                "[>]karnet"=>["ID_karnetu" => "ID_karnetu"]],[
                "uzytkownicy.id_uzytkownika",
                "uzytkownicy.imie",
                "uzytkownicy.nazwisko",
                "uzytkownicy.nr_tel",
                "uzytkownicy.pesel",
                "uzytkownicy.aktywny",
                "czlonkostwo.Data_rozpoczecia",
                "czlonkostwo.Data_zakonczenia",
                "karnet.Nazwa_karnetu"
                    ], $where);
        }
        catch(\PDOException $e)
        {
            Utils::addErrorMessage('Błąd - Nie można pobrać rekordów');
            if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('uzytkownicy', $this->records);
        App::getSmarty()->assign('rola', $rola);
        App::getSmarty()->display('UserInfoView.tpl');
    }

}