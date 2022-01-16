<?php

namespace App\Controllers;

use App\Models\RegistraciaModel;
use App\Prihlasenie;


class PouzivateliaController extends AControllerPresmeruj
{

    public function index()
    {}

    public function login()
    {
        return $this->html(
            []
        );
    }

    public function registracia()
    {
        return $this->html(
            []
        );
    }


    public function zaregistruj()
    {
        if ($_POST['heslo'] == $_POST['heslo2']) {
            $Model = new RegistraciaModel();
            $Model->setMeno($_POST['meno']);
            $Model->setPriezvisko($_POST['priezvisko']);
            $Model->setEmail($_POST['email']);
            $Model->setHeslo(password_hash($_POST['heslo'], PASSWORD_DEFAULT));
            $Model->save();
            $this->presmeruj("?c=pouzivatelia&a=login", "");
        } else {
            $this->presmeruj("?c=pouzivatelia&a=registracia", "Zadali ste nespravne heslo");
        }
    }

    public function prihlasenie(){
        $heslo = $_POST['heslo'];
        $data = RegistraciaModel::getAll('email = ?', [$_POST['email']]);
        if (password_verify($heslo, $data[0]->heslo)){
            Prihlasenie::prihlasit($data[0]->meno, $data[0]->status, $data[0]->id);
            $this->presmeruj("?c=home&a=index","");
            return;
        }
        $this->presmeruj("?c=pouzivatelia&a=login","Zadali ste nespravne prihlasovacie udaje");
    }

    public function odhlasenie(){
        Prihlasenie::odhlasit();
        $this->presmeruj("?c=home&a=index","");
    }
}
