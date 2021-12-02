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
            $Model = new MenuModel();
            $Model->setNazov($_POST['nazov']);
            $Model->setZlozenie($_POST['zlozenie']);
            $Model->setImg($_POST['img']);
            $Model->setCena($_POST['cena']);
            $Model->save();
            $this->vratMenu("?c=home&a=menu","");
        }else {
            $this->vratMenu("?c=home&a=menu","Zadali ste zle parametre");
        }
    }

    public function vymaz()
    {
        $Model = MenuModel::getOne($_GET['id']);
        $Model->delete();
        $this->vratMenu("?c=home&a=menu","");
    }

    public function vratMenu($cesta, $sprava)
    {
        if ($sprava == ""){
            header("Location:$cesta");
        }else {
            header("Location:$cesta&error=$sprava");
        }
    }

    public function uprav(){
        $Model = MenuModel::getOne($_GET['id']);
        $Model->setNazov($_POST['nazov']);
        $Model->setZlozenie($_POST['zlozenie']);
        $Model->setImg($_POST['img']);
        $Model->setCena($_POST['cena']);
        $Model->save();
        $this->vratMenu("?c=home&a=menu","");
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
