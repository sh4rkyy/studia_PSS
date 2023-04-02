<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\PersonSearchForm;

class PersonListCtrl
{

    private $form;
    private $records;

    public function __construct()
    {
        $this->form = new PersonSearchForm();
    }

    public function getParams()
    {
        $this->form->nazwisko = ParamUtils::getFromRequest('sf_nazwisko');
    }

    public function validate()
    {
        $v = new Validator();
        if (App::getMessages()->isError()) App::getRouter()->redirectTo('personList');
        return !App::getMessages()->isError();
        if (App::getMessages()->isError()) return false;
    }

    public function load_data()
    {
        $this->getParams();
        if ($this->validate())
        {
            $search_params['nazwisko'] = $this->form->nazwisko;
            $where = & $search_params;
            $where["ORDER"] = "nazwisko";

            if ($this->form->nazwisko != "")
            {
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
                            ], ["nazwisko" => $this->form->nazwisko]);

                }
                catch(\PDOException $e)
                {
                    Utils::addErrorMessage('Błąd - Nie można pobrać rekordów');
                    if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
                }
            }
            else
            {
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
                    ]);
                }
                catch(\PDOException $e)
                {
                    Utils::addErrorMessage('Błąd - Nie można pobrać rekordów');
                    if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
                }
            }
        }
    }

    public function action_personList()
    {
        $this->load_data();
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('uzytkownicy', $this->records);
        App::getSmarty()->display('PersonList.tpl');
    }

    public function action_personListPart()
    {
        $this->load_data();
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('uzytkownicy', $this->records);
        App::getSmarty()->display('PersonListTable.tpl');
    }

}

