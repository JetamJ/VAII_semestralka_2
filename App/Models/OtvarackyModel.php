<?php

namespace App\Models;

use App\Core\Model;




class OtvarackyModel extends Model
{
    public $id;
    public $cas_od;
    public $cas_do;
    public $den;
    public $id_pobocka;
    public $zatvorene;

    public function __construct()
    {
        $this->id = 0;
        $this->cas_od = null;
        $this->cas_do = null;
        $this->den = null;
        $this->id_pobocka = null;
        $this->zatvorene = 0;
    }

    static public function setDbColumns()
    {
        return ['id','cas_od', 'cas_do', 'den', 'id_pobocka', 'zatvorene'];
    }

    static public function setTableName()
    {
        return 'otvaracie_hodiny';
    }

    /**
     * @return int
     */
    public function getZatvorene(): int
    {
        return $this->zatvorene;
    }

    /**
     * @param int $zatvorene
     * @return OtvarackyModel
     */
    public function setZatvorene(int $zatvorene): OtvarackyModel
    {
        $this->zatvorene = $zatvorene;
        return $this;
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
     * @return PobockyModel
     */
    public function setId(int $id): PobockyModel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return null
     */
    public function getCasOd()
    {
        return $this->cas_od;
    }

    /**
     * @param null $cas_od
     * @return PobockyModel
     */
    public function setCasOd($cas_od)
    {
        $this->cas_od = $cas_od;
        return $this;
    }

    /**
     * @return null
     */
    public function getCasDo()
    {
        return $this->cas_do;
    }

    /**
     * @param null $cas_do
     * @return PobockyModel
     */
    public function setCasDo($cas_do)
    {
        $this->cas_do = $cas_do;
        return $this;
    }

    /**
     * @return null
     */
    public function getDen()
    {
        return $this->_den;
    }

    /**
     * @param null $den
     * @return PobockyModel
     */
    public function setDen($den)
    {
        $this->_den = $den;
        return $this;
    }

    /**
     * @return null
     */
    public function getIdPobocka()
    {
        return $this->id_pobocka;
    }

    /**
     * @param null $id_pobocka
     * @return PobockyModel
     */
    public function setIdPobocka($id_pobocka)
    {
        $this->id_pobocka = $id_pobocka;
        return $this;
    }


}