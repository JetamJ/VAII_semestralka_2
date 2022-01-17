<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\AControllerBase;
use App\Models\MenuModel;
use App\Models\OtvarackyModel;
use App\Models\PobockyModel;
use App\Models\RegistraciaModel;
use App\Prihlasenie;
use App\Controllers\AControllerPresmeruj;

/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
class HomeController extends AControllerPresmeruj
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
            $this->presmeruj("?c=home&a=menu","");
        }else {
            $this->presmeruj("?c=home&a=menu","Zadali ste zle udaje");
        }
    }

    public function vymaz()
    {
        $menu = MenuModel::getOne($_GET['id']);
        try{
            $menu->delete();
        }catch (\Exception $e){
            return $this->json(['err' => $e->getMessage()]);
        }
        return $this->json(true);
    }



    public function uprav(){
        if ($this->kontrola($_POST['nazov'],$_POST['zlozenie'],$_POST['img'],$_POST['cena'])) {
            $Model = MenuModel::getOne($_GET['id']);
            $Model->setNazov($_POST['nazov']);
            $Model->setZlozenie($_POST['zlozenie']);
            $Model->setImg($_POST['img']);
            $Model->setCena($_POST['cena']);
            $Model->save();
            $this->presmeruj("?c=home&a=menu", "");
        } else {
            $this->presmeruj("?c=home&a=menu","Zadali ste zle udaje");
        }
    }

    public function kontrola($nazov, $zlozenie, $img, $cena){
        if (empty($nazov) || !is_string($nazov)) {
            return false;
        }
        if (empty($zlozenie) || !is_string($zlozenie)) {
            return false;
        }
        if (empty($img) || !is_string($img)) {
            return false;
        }
        if (empty($cena) || !is_string($cena) ) {
            return false;
        }
        return true;
    }

}




