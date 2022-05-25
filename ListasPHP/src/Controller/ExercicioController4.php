<?php


namespace Usuario\ListasPhp\Controller;


class ExercicioController4
{

    public static function exibir()
    {
        require_once("../src/View/Lista1_Ex4.php");
    }
    public static function exibirResultado()
    {
        $num = $_POST['num'];

        if ($num > 0)
          echo "<br/>O valor é positivo!";
      
        else if ($num == 0)
          echo "<br/>O valor é 0!";
        else
          echo "<br/>O valor é negativo!";      

        require_once("../src/View/Lista1_Ex4.php");
    }
}
