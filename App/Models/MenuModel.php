<?php

namespace App\Models;

use App\Core\Model;




class MenuModel extends Model
{
    public $id;
    public $nazov;
    public $zlozenie;
    public $img;
    public $cena;

    public function __construct()
    {
        $this->id = 0;
        $this->nazov = null;
        $this->zlozenie = null;
        $this->img = null;
        $this->cena = null;
    }

    static public function setDbColumns()
    {
        return ['id','nazov', 'zlozenie', 'img', 'cena'];
    }

    static public function setTableName()
    {
        return 'menu';
    }

    public function getNazov()
    {
        return $this->nazov;
    }

    public function setNazov($nazov): void
    {
        $this->nazov = $nazov;
    }

    public function getZlozenie()
    {
        return $this->zlozenie;
    }

    public function setZlozenie($zlozenie): void
    {
        $this->zlozenie = $zlozenie;
    }

    public function getCena()
    {
        return $this->cena;
    }

    public function setCena($cena): void
    {
        $this->cena = $cena;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img): void
    {
        $this->img = $img;
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