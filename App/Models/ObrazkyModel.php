<?php

namespace App\Models;

use App\Core\Model;




class ObrazkyModel extends Model
{
    public $id;
    public $cesta;


    public function __construct()
    {
        $this->id = 0;
        $this->cesta = null;
    }

    static public function setDbColumns()
    {
        return ['id','cesta'];
    }

    static public function setTableName()
    {
        return 'obrazky';
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
     * @return MenuModel
     */
    public function setId(int $id): MenuModel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return null
     */
    public function getCesta()
    {
        return $this->cesta;
    }

    /**
     * @param null $cesta
     * @return MenuModel
     */
    public function setCesta($cesta)
    {
        $this->cesta = $cesta;
        return $this;
    }


}