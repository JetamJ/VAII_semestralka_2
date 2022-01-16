<?php

namespace App\Controllers;

use App\Core\AControllerBase;


abstract class AControllerPresmeruj extends AControllerBase
{
    protected function presmeruj($cesta, $sprava)
    {
        if ($sprava == ""){
            header("Location:$cesta");
        }else {
            header("Location:$cesta&error=$sprava");
        }
    }
}
