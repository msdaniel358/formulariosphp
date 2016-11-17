<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="datos.php" method="POST">
            Nombre: <input type="text" name="nombre">
            <br>
            Edad <input type="number" name="edad">
            <br>
            Ciudad <select name="ciudad">
                <option>Barcelona</option>
                <option>Girona</option>
                <option>Lleida</option>
                <option>Tarragona</option>
            </select>
            sexo:
            Hombre<input type="radio" name="sexo" value="hombre">
            <br>
            Mujer <input type="radio" name="sexo" value="mujer">
            <br>
            <input type="submit" name="enviar" value="enviar datos">



        </form>
    </body>
</html>
