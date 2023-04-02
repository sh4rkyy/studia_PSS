<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('register', 'RegisterCtrl');

Utils::addRoute('personList', 'PersonListCtrl', ["pracownik"]);
Utils::addRoute('personListPart', 'PersonListCtrl', ["pracownik"]);

Utils::addRoute('userInfo', 'UserInfoCtrl', ["user", "pracownik"]);

Utils::addRoute('karnet', 'KarnetCtrl', ["user", "pracownik"]);

Utils::addRoute('personEdit', 'PersonEditCtrl', ["user", "pracownik"]);
Utils::addRoute('personSave', 'PersonEditCtrl', ["user", "pracownik"]);
Utils::addRoute('personDeactive', 'PersonEditCtrl', ["pracownik"]);
Utils::addRoute('personActivate', 'PersonEditCtrl', ["pracownik"]);

Utils::addRoute('hello', 'HelloCtrl');