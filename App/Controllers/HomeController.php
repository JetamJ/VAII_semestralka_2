<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\AControllerBase;
use App\Models\MenuModel;
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

    public function profil()
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
            $this->presmeruj("?c=home&a=menu","Zadali ste zle parametre");
        }
    }

    public function vymaz()
    {
        $Model = MenuModel::getOne($_GET['id']);
        $Model->delete();
        $this->presmeruj("?c=home&a=menu","");
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
            $this->presmeruj("?c=home&a=menu","Zadali ste zle parametre");
        }
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
        $this->presmeruj("?c=home&a=profil", "");
    }
}
