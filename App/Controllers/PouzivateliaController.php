<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Models\RegistraciaModel;
use App\Prihlasenie;
use mysqli;


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

    public function profil()
    {
        return $this->html(
            []
        );
    }

    public function upravProfil()
    {
        return $this->html(
            []
        );
    }

    public function zoznamPouzivatelov()
    {
        return $this->html(
            []
        );
    }


    public function zaregistruj()
    {
        if($this->kontrola($_POST['meno'],$_POST['priezvisko'],$_POST['email'],$_POST['heslo'])){
            $this->kontrolaEmail($_POST['email']);
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
        }else{
            $this->presmeruj("?c=pouzivatelia&a=registracia", "Zadali ste neplatne udaje");
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

    public function kontrola($meno, $priezvisko, $email, $heslo){
        if (empty($meno) || !is_string($meno)) {
            return false;
        }
        if (empty($priezvisko) || !is_string($priezvisko)) {
            return false;
        }
        if (empty($email) || !is_string($email)) {

            return false;
        }
        if (empty($heslo) || !is_string($heslo) ) {
            return false;
        }
        return true;
    }

    public function kontrola2($meno, $priezvisko, $email, $telefon, $adresa){
        if (empty($meno) || !is_string($meno)) {
            return false;
        }
        if (empty($priezvisko) || !is_string($priezvisko)) {
            return false;
        }
        if (empty($email) || !is_string($email)) {

            return false;
        }
        if (!is_string($telefon) ) {
            return false;
        }
        if (!is_string($adresa) ) {
            return false;
        }
        return true;
    }

    public function kontrolaEmail($email){
        $data = RegistraciaModel::getAll('email = ?', [$_POST['email']]);
        if($data[0]->email == $email){
            $this->presmeruj("?c=pouzivatelia&a=registracia", "Takyto email sa uz pouziva");
        }
    }

    public function upravFotku(){
        if(isset($_FILES['subor'])){
            if($_FILES["subor"]["error"] == UPLOAD_ERR_OK){
                $tmp_name = $_FILES["subor"]["tmp_name"];
                $name = time()."_".$_FILES["subor"]["name"];
                $path = Configuration::UPLOAD_DIR."/$name";
                move_uploaded_file($tmp_name, $path);

                $data = \App\Models\RegistraciaModel::getOne(\App\Prihlasenie::getId());
                $data->setProfilovka($name);
                $data->save();
            }
        }
        $this->presmeruj("?c=pouzivatelia&a=profil", "");
    }

    public function vymazUcet(){
        $ucet = RegistraciaModel::getOne($_GET['id']);
        $ucet->delete();
        $this->odhlasenie();
        $this->presmeruj("?c=home&a=index", "");
    }

    public function upravUcet(){
        if($this->kontrola2($_POST['meno'],$_POST['priezvisko'],$_POST['email'],$_POST['telefon'],$_POST['adresa'])) {
            $ucet = RegistraciaModel::getOne($_GET['id']);
            $ucet->setMeno($_POST['meno']);
            $ucet->setPriezvisko($_POST['priezvisko']);
            $ucet->setEmail($_POST['email']);
            $ucet->setTelefon($_POST['telefon']);
            $ucet->setAdresa($_POST['adresa']);
            $ucet->save();
            $this->presmeruj("?c=pouzivatelia&a=profil", "");
        } else {
            $this->presmeruj("?c=pouzivatelia&a=profil", "Zadali ste zle udaje");
        }
    }
}
