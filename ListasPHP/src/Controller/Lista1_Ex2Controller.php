<?php


namespace Usuario\ListasPhp\Controller;


class ExercicioController
{

    public static function exibir(){
        require_once("../src/View/L1Ex2.php");
    }
    public static function exibirResultado(){
        $valkg = $_POST['valkg'];
        $valconsu = $_POST['valconsu'];

        $mult = $valkg * $valconsu;

        echo "<br/>O valor a ser pago é R$$mult";

        require_once("../src/View/L1Ex2.php");
    }

}