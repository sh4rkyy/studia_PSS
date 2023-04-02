<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class KarnetCtrl
{

    private $login;
    private $id;
    private $date;
    private $newDate;
    private $karnet;

    public function action_karnet()
    {
        $login = SessionUtils::load('nazwa', true);
        $karnetActive = SessionUtils::load('karnetActive', true);

        $search_params['login'] = $login;
        $where = & $search_params;

        try
        {
            $id = App::getDB()->get("uzytkownicy", "id_uzytkownika", $where);
            $karnet = App::getDB()->get("czlonkostwo", "ID_uzytkownika", ["ID_uzytkownika" => $id]);
        }
        catch(\PDOException $e)
        {
            Utils::addErrorMessage('Błąd - Nie można pobrać rekordów');
            if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
        }

        $date = date("Y/m/d");
        $newDate = date('Y-m-d', strtotime($date . ' + 1 months'));

        if ($karnet == '')
        {
            if (isset($_POST['open']))
            {
                try
                {
                    App::getDB()->insert("czlonkostwo", ["id_uzytkownika" => $id, "ID_karnetu" => '1', "Data_rozpoczecia" => $date, "Data_zakonczenia" => $newDate]);
                    App::getRouter()->redirectTo("userInfo");
                }
                catch(\PDOException $e)
                {
                    Utils::addErrorMessage('Błąd - Nie można wstawić rekordów');
                    if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
                }
            }
            else if (isset($_POST['student']))
            {
                try
                {
                    App::getDB()->insert("czlonkostwo", ["id_uzytkownika" => $id, "ID_karnetu" => '2', "Data_rozpoczecia" => $date, "Data_zakonczenia" => $newDate]);
                    App::getRouter()->redirectTo("userInfo");
                }
                catch(\PDOException $e)
                {
                    Utils::addErrorMessage('Błąd - Nie można wstawić rekordów');
                    if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
                }
            }
            else if (isset($_POST['senior']))
            {
                try
                {
                    App::getDB()->insert("czlonkostwo", ["id_uzytkownika" => $id, "ID_karnetu" => '3', "Data_rozpoczecia" => $date, "Data_zakonczenia" => $newDate]);
                    App::getRouter()->redirectTo("userInfo");
                }
                catch(\PDOException $e)
                {
                    Utils::addErrorMessage('Błąd - Nie można wstawić rekordów');
                    if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
                }
            }
        }
        else
        {
            Utils::addErrorMessage('Karnet został juz przez Ciebie zakupiony.');
            App::getRouter()->forwardTo("userInfo");
        }
        App::getSmarty()->display('KarnetView.tpl');
    }
}