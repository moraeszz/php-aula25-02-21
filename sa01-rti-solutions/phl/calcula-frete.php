<?php

    if(!isset($_GET["origem"])
     || !isset($GET["destino"]) 
     || !isset($GET["distancia"]) 
     || !isset($GET["pedagios"])){

        // redirecionar o usuario para a tela index.php
        header("location: index.php");
     }

    $origem = $_GET["origem"];
    $destino = $_GET["destino"];
    $distancia = $_GET["distancia"];
    $pedagios = $_GET["pedagios"];

    $custoPedagio = $pedagios = 9.4;
    $custoDistancia = $distancia * 6;

    $custoTotal = $custoPedagio + $custoDistancia;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Frete PHL</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
    <!-- Se o valor do pedagio for maior que 100 exibir em vermelho -->
     <?php
        if($custoPedagio > 100){
            echo "<h1 style='color: red'>Valor dos pedágios: R$ <em> $custoPedagio <em></h1>";
        }else{
            echo "<h1>Valor dos pedágios: R$ <em> $custoPedagio <em></h1>";
        }
      ?>  
    <h1 style="color: red">Valor dos Pedágios: R$ <em>100,00<em></h1>
    <h1> A viagem de <?= $origem ?> à <?= $destino ?> irá custar o valor total de R$ <em><?= number_format($custoTotal, 2, ",", ".") ?>.</em></h1>
</body>
</html>