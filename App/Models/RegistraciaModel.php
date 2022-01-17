<?php

namespace App\Models;

use App\Core\Model;




class RegistraciaModel extends Model
{
    public $id;
    public $meno;
    public $priezvisko;
    public $email;
    public $heslo;
    public $status;
    public $profilovka;
    public $telefon;
    public $adresa;

    public function __construct()
    {
        $this->id = 0;
        $this->meno = null;
        $this->priezvisko = null;
        $this->email = null;
        $this->heslo = null;
        $this->status = null;
        $this->profilovka = null;
        $this->telefon = null;
        $this->adresa = null;
    }

    static public function setDbColumns()
    {
        return ['id','email', 'meno', 'priezvisko',  'heslo', 'status', 'profilovka','telefon','adresa'];
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

    /**
     * @return null
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * @param null $telefon
     * @return RegistraciaModel
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;
        return $this;
    }

    /**
     * @return null
     */
    public function getAdresa()
    {
        return $this->adresa;
    }

    /**
     * @param null $adresa
     * @return RegistraciaModel
     */
    public function setAdresa($adresa)
    {
        $this->adresa = $adresa;
        return $this;
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return RegistraciaModel
     */
    public function setId(int $id): RegistraciaModel
    {
        $this->id = $id;
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }

    public function getProfilovka()
    {
        return $this->profilovka;
    }

    public function setProfilovka($profilovka): void
    {
        $this->profilovka = $profilovka;
    }
}