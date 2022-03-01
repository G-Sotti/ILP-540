<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, word!</title>
  </head>
  <body>
    <h1>Cálculos</h1>
    <?php 
        $valor1 = $_POST['valor1']; 
        $valor2 = $_POST['valor2'];
        $soma = $valor1 + $valor2;
        $sub = $valor1 - $valor2;
        $mult = $valor1 * $valor2;
        $div = $valor1 / $valor2;
        
        if (($valor1 % 2) == 0)
            echo "O valor 1 é: $valor1 e ele é par";
        else
            echo "O valor 1 é: $valor1 e ele é impar";

        if (($valor2 % 2) == 0)
            echo "<br/>O valor 2 é: $valor2 e ele é par";
        else
            echo "<br/>O valor 2 é: $valor2 e ele é impar";

        echo "<br/> A soma deles é: $soma <br/>A subtração deles é: $sub 
        <br/>A multiplicação deles é: $mult <br/>A divisão deles é: $div";
           
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>