<?php

namespace App\Models;

use App\Core\Model;




class RegistraciaModel extends Model
{
    public $meno;
    public $priezvisko;
    public $email;
    public $heslo;
    public $status;

    public function __construct()
    {
        $this->meno = null;
        $this->priezvisko = null;
        $this->email = null;
        $this->heslo = null;
        $this->status = null;
    }

    static public function setDbColumns()
    {
        return ['email', 'meno', 'priezvisko',  'heslo', 'status'];
    }

    static public function setTableName()
    {
        return 'pouzivatelske_udaje';
    }

    public function getMeno()
    {
        return $this->meno;
    }

    public function setMeno($meno): void
    {
        $this->meno = $meno;
    }

    public function getPriezvisko()
    {
        return $this->priezvisko;
    }

    public function setPriezvisko($priezvisko): void
    {
        $this->priezvisko = $priezvisko;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getHeslo()
    {
        return $this->heslo;
    }

    public function setHeslo($heslo): void
    {
        $this->heslo = $heslo;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }


}