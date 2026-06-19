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
    <H1>Tabuada</H1>
   
    <label for="inputa"> Valor </label>
    <input type="text" id="inputa" name="num" value="<?php if (isset($_GET["num"])){echo $_GET["num"];}?>">
    <br>
    <input type="submit" name="Calcular">

</form>


<div class="container">
    <?php
         if (!isset($_GET["num"])){
            exit();
        }
        if (trim($_GET["num"])=="" ){
            exit();
        }  

       
        function tabuada ($num){
        for ($i = 1; $i <= 10; $i++) {
            echo "$num*$i=".$num*$i."<br>";
            }
        }
        tabuada($_GET["num"]);

       
       

    ?>
</div>