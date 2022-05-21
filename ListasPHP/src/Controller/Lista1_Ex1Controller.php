<?php


namespace Usuario\ListasPhp\Controller;


class ExercicioController
{

    public static function exibir(){
        require_once("../src/View/l1ex1.php");
    }
    public static function exibirResultado(){
        $valprod = $_POST['valprod'];
        $valpag = $_POST['valpag'];
        if ($valpag > $valprod) {
            $sub = $valpag - $valprod;
            echo "<br/>O troco é: R$$sub";
        } else if ($valpag == $valprod) {
            echo "<br/>Não existe valor de troco pois o valor pago é o mesmo valor do produto!";
        } else
            echo "<br/>O valor pago é menor que o valor do produto!";
        require_once("../src/View/l1ex1.php");
    }

}