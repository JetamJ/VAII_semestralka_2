<?php

namespace App;

use http\Env\Request;

class Prihlasenie
{
    public static function prihlasit($meno, $status, $id){
        $_SESSION['meno'] = $meno;
        $_SESSION['status'] = $status;
        $_SESSION['id'] = $id;
    }

    public static function odhlasit(){
        unset($_SESSION['meno']);
    }

    public static function jePrihlaseny(){
        return isset($_SESSION['meno']);
    }

    public static function getMeno(){
        if(Prihlasenie::jePrihlaseny()){
            return $_SESSION['meno'];
        }
    }

    public static function jeAdmin(){
        return isset($_SESSION['status']);
    }

    public static function getId(){
        return ($_SESSION['id']);
    }
}