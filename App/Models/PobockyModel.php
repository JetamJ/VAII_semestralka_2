<?php

namespace App\Models;

use App\Core\Model;




class PobockyModel extends Model
{
    public $id;
    public $mesto;
    public $poloha;
    public $email;
    public $telefon;

    public function __construct()
    {
        $this->id = 0;
        $this->mesto = null;
        $this->poloha = null;
        $this->email = null;
        $this->telefon = null;
    }

    static public function setDbColumns()
    {
        return ['id','mesto', 'poloha', 'email', 'telefon'];
    }

    static public function setTableName()
    {
        return 'pobocky';
    }

    public function getMesto()
    {
        return $this->mesto;
    }

    public function setMesto($mesto): void
    {
        $this->mesto = $mesto;
    }

    public function getPoloha()
    {
        return $this->poloha;
    }

    public function setPoloha($poloha): void
    {
        $this->poloha = $poloha;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getTelefon()
    {
        return $this->telefon;
    }

    public function setTelefon($telefon): void
    {
        $this->telefon = $telefon;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
}