<?php


namespace Usuario\ListasPhp\Controller;


class ExercicioController3
{

    public static function exibir()
    {
        require_once("../src/View/Lista1_Ex3.php");
    }
    public static function exibirResultado()
    {
        $num = $_POST['num'];

        if ($num > 10)
            echo "<br/>O valor é maior que 10!!!";
        else if ($num == 10)
            echo "<br/>O valor é 10!!!!";
        else
            echo "<br/>O valor é menor que 10!!!";

        require_once("../src/View/Lista1_Ex3.php");
    }
}
