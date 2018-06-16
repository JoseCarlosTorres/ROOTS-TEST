<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href='sample.css'>
        <link rel="shortcut icon" href="">
    </head>
    <body>
        <div class="sidebar-wrapper">
            
        </div>
        <div class="gallery" id="name">
            
          <?php
          echo "Nombre: ".$_GET['name']."<br>";
          echo "Genero: ".$_GET['gender']."<br>";
          echo "Especie: ".$_GET['species']."<br>";
          echo "Peso: ".$_GET['mass']."kg <br>";
          echo "Altura: ".$_GET['height']."cm";
          ?>
        </div>
        <script>
            
        </script>
    </body>
</html>
