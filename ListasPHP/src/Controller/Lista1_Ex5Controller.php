<?php


namespace Usuario\ListasPhp\Controller;


class ExercicioController
{

    public static function exibir()
    {
        require_once("../src/View/L1Ex5.php");
    }
    public static function exibirResultado()
    {
        $nt1 = $_POST['nt1'];
        $nt2 = $_POST['nt2'];
        $nt3 = $_POST['nt3'];
        $nt4 = $_POST['nt4'];
      
        $media = (($nt1 + $nt2 + $nt3 + $nt4) / 4);
        echo "<br/>A média do aluno é: $media";
        if ($media >= 7)
          echo "<br/>O aluno está aprovado!";
        else
          echo "<br/>O aluno está reprovado!";  

        require_once("../src/View/L1Ex5.php");
    }
}
