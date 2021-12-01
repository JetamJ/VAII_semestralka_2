<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Models\MenuModel;

/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
class HomeController extends AControllerBase
{

    public function index()
    {
        return $this->html(
            []
        );
    }

    public function menu()
    {
        return $this->html(MenuModel::getAll());
    }

    public function kontakt()
    {
        return $this->html(
            []
        );
    }

    public function pridajPolozku()
    {
        return $this->html(
            []
        );
    }

    public function upravPolozku()
    {
        return $this->html(
            []
        );
    }

    public function pridaj()
    {
        if ($this->kontrola($_POST['nazov'],$_POST['zlozenie'],$_POST['img'],$_POST['cena'])) {
            $art = new MenuModel();
            $art->setNazov($_POST['nazov']);
            $art->setZlozenie($_POST['zlozenie']);
            $art->setImg($_POST['img']);
            $art->setCena($_POST['cena']);
            $art->save();
            $this->vratMenu();
        }else {
            $this->vratMenu();
        }
    }

    public function vymaz()
    {
        $art = MenuModel::getOne($_GET['id']);
        $art->delete();
        $this->vratMenu();
    }

    public function vratMenu()
    {
        header("Location:?c=home&a=menu");
        die();
    }

    public function uprav(){
        $art = MenuModel::getOne($_GET['id']);
        $art->setNazov($_POST['nazov']);
        $art->setZlozenie($_POST['zlozenie']);
        $art->setImg($_POST['img']);
        $art->setCena($_POST['cena']);
        $art->save();
        $this->vratMenu();
    }

    public function kontrola($nazov, $zlozenie, $img, $cena){
        if ($nazov == null){
            return false;
        }elseif ($zlozenie == null){
            return false;
        }elseif ($img == null){
            return false;
        }elseif ($cena == null){
            return false;
        }else {
            return true;
        }
    }
}
