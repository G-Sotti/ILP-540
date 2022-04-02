<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista 3!</title>
</head>

<body>
  <h1>Ex3 IMC!</h1>
  <?php
  $altura = $_POST['alt'];
  $peso = $_POST['peso'];
  {
    $imc = 0;
    $imc = $peso / ($altura * $altura);
    if ($imc <= 18.5) {
      echo "Seu IMC $imc, você está abaixo do peso!<br/>";
    } else if ($imc >= 18.6 and $imc <= 24.9) {
      echo "Seu IMC $imc, você está no peso ideal (parabéns)!<br/>";
    } else if ($imc >= 25 and $imc <= 29.9) {
      echo "Seu IMC $imc, você está levemente acima do peso!<br/>";
    } else if ($imc >= 30 and $imc <= 34.9) {
      echo "Seu IMC $imc, obesidade grau I!<br/>";
    } else if ($imc >= 35 and $imc <= 39.9) {
      echo "Seu IMC $imc, obesidade grau II (severa)!<br/>";
    } else 
      echo "Seu IMC $imc, Obesidade grau III (mórbida)!<br/>";
  }
  ?>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>