<?php

namespace App;

use http\Env\Request;

class Prihlasenie
{
    public static function prihlasit($meno){
        $_SESSION['meno'] = $meno;
    }

    public static function odhlasit(){
        unset($_SESSION['meno']);
    }

    public static function jePrihlaseny(){
        return isset($_SESSION['meno']);
    }

}