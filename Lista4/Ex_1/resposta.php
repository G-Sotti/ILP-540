<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Lista 4!</title>
</head>

<body class="container">
  <h1>Ex 1!</h1>
  <?php
  if ($_POST) {
    for ($i = 0; $i <= $voltas; $i++) {
      $volta[$i] = $_POST["volta$i"];
      $tempo[$i] = $_POST["tempo$i"];

    //Abaixo a estrutra para criar um cookie nome + variável + tempo de duração (time() + (86400 * 1),"/") para 1 dia
    /*setcookie("volta$i", $volta[$i], $tempo[$i], time() + (86400 * 1), "/");*/

      session_start();
      if (($volta[$i] >= 1) && ($tempo[$i] > "00:00")) {
        $_SESSION["volta"] = $volta;
        $_SESSION["tempo"] = $tempo;
        $_SESSION["acesso"] = true;
        echo "Volta: " . $_SESSION["volta"] . "<br/>";
        echo "Tempo: " . $_SESSION["tempo"] . "<br/>";
        echo '<br/><a href="sair.php">Sair</a>';
      } else {
        header('Location: index.php');
        exit;
      }
    }
  }else {
    session_start();
    if ($_SESSION['acesso'] == true) {
      echo "Volta: " . $_SESSION["volta"] . "<br/>";
      echo "Tempo: " . $_SESSION["tempo"] . "<br/>";
      echo '<br/><a href="sair.php">Sair</a>';
    } else {
      header('Location: index.php');
      exit;
    }
  }
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