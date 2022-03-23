<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Funções!</title>
</head>

<body class="container">
    <h1>Exemplo de funções</h1>
    <?= date("d/M/Y"); ?>
    <!-- função date d/m/Y = 23/03/2022, D/m/Y = Qua/3/2022, D/M/Y = Qua/Mar/2022, d/m/y = 23/03/22 -->
    <br />
    <?= date("H:i:s"); ?>
    <!-- função date com H pega a hora no formato 24Hrs se com h pega a hora no formato 12Hrs -->
    <br />
    <?php
    $valor = 10004.789;
    echo "R$" . (number_format($valor, 2, ',', '.'));
    ?>
    <?php
    function formatarNumero($numero)
    {
        echo "<br/>R$" . (number_format($numero, 2, ',', '.'));
    }
    function retornarNumero($numero)
    {
        return "<br/>R$" . (number_format($numero, 2, ',', '.'));
    }
    formatarNumero(1000003.1234);
    formatarNumero(100007.1258);
    formatarNumero(1000000010.1694);
    echo retornarNumero(2000.777);
    $numero = retornarNumero(150.66);
    echo $numero;
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