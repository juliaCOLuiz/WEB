<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            font-size: 30pt;
        }
    </style>
</head>
<body>

    
</body>
</html>
<form method="GET">
    <H1>Informe o intervalo</H1>
   
    <label for="inputa"> Valor Mínimo</label>
    <input type="text" id="inputa" name="a" value="<?php if (isset($_GET["a"])){echo $_GET["a"];}?>">
    <br>
    <label for="inputa"> Valor Maximo</label>
    <input type="text" id="inputb" name="b" value="<?php if (isset($_GET["b"])){echo $_GET["b"];}?>">>

    <input type="submit" name="Enviar">

</form>


<div class="container">
    <?php
         if (!isset($_GET["a"]) || !isset($_GET["b"])){
            exit();
        }
        if (trim($_GET["a"])=="" || trim($_GET["b"])==""){
            exit();
        }  

        $valormin=$_GET["a"];
        $valormax=$_GET["b"];
        $random= rand($valormin,$valormax);
        echo $random;

    ?>
</div>