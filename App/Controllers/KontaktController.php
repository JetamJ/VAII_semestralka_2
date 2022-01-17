<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\AControllerBase;
use App\Models\MenuModel;
use App\Models\ObrazkyModel;
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
class KontaktController extends AControllerPresmeruj
{

    public function index()
    {
    }


    public function kontakt()
    {
        return $this->html(
            []
        );
    }


    public function getPobocka(){
        $kontakt = PobockyModel::getAll('id = ?', [$_POST['id']]);
        $otvaracky = OtvarackyModel::getAll('id_pobocka = ?', [$_POST['id']]);
        $data = ['kontakt'=>$kontakt[0] ?? [], 'otvaracky'=> $otvaracky];
        return $this->json($data);
    }

    public function zatvor(){
        $otvaracky = OtvarackyModel::getAll('id_pobocka = ?', [$_GET['id']]);
        foreach ($otvaracky as $otvaracie_hodiny){
            $otvaracie_hodiny->setZatvorene(1);
            $otvaracie_hodiny->save();
        }
        $data = ['otvaracky'=> $otvaracky];
        return $this->json($data);
    }

    public function otvor(){
        $otvaracky = OtvarackyModel::getAll('id_pobocka = ?', [$_GET['id']]);
        foreach ($otvaracky as $otvaracie_hodiny){
            $otvaracie_hodiny->setZatvorene(0);
            $otvaracie_hodiny->save();
        }
        $data = ['otvaracky'=> $otvaracky];
        return $this->json($data);
    }

    public function pridajFotku(){
        if(isset($_FILES['subor'])){
            if($_FILES["subor"]["error"] == UPLOAD_ERR_OK){
                $tmp_name = $_FILES["subor"]["tmp_name"];
                $name = time()."_".$_FILES["subor"]["name"];
                $path = Configuration::UPLOAD_DIR."/$name";
                move_uploaded_file($tmp_name, $path);

                $data = new ObrazkyModel();
                $data->setCesta("semestralka/assets/img/$name");
                $data->save();
            }
        }
        $this->presmeruj("?c=kontakt&a=kontakt", "");
    }
}




