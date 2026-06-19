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
    <H1>Par ou Impar</H1>
   
    <label for="inputa"> Valor </label>
    <input type="text" id="inputa" name="a" value="<?php if (isset($_GET["a"])){echo $_GET["a"];}?>">
    <br>
    <input type="submit" name="Enviar">

</form>


<div class="container">
    <?php
         if (!isset($_GET["a"])){
            exit();
        }
        if (trim($_GET["a"])=="" ){
            exit();
        }  
        $valor=$_GET["a"];
        if($valor%2==0){
            echo "O numero $valor é par";
        }else {
            echo "O numero $valor é impar";
        }

       
       

    ?>
</div>