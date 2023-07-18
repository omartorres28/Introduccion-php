<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>
<body>
<h1>Estructuras de control</h1>;

<?php
    // if, if-else
    echo "<h1>if</h1>";

    //Ejemplo 1
    $color = "rojo";
    if($color = "rojo");
    {
        print("Efectivamente el color el rojo");
    }
    echo "<br>";
    //Ejemplo2
    $x = 10;
    $y = 15;
    if($x == $y)
    {
        print("x e y son iguales");
    }
    elseif($x > $y)
    {
        print("x es mayor que y");
    }
    elseif($x < $y)
    {
        print("x es menor que y");
    }
 // while
    //Indica que mientras no se cumplan una determinada condicion no se saldra del bucle y no saltara a la siguiente linea de codigo.
    
    echo "<h1>while</h1>";

    //Ejemplo
    $x = 10;
    while(--$x)
    {
        echo "<big>";
        echo "<b>";
        print("Numero: ".$x);
        echo "<br>";
        echo "<hr>";
    }
    // do-while
    
    // for
    // Sera utilizado para ejecutar un bucle un determinado numero de veces hasta que se cumpla una condicion.
    echo "<h1>for</h1>";
    echo "<br>";

    for($x=5; $x<=10; $x++)
    {
        print("Numero: ".$x."<br>");
    }

    //require
    //Sirve para subir archivo en nuestras paginas y solo sera nesecario hacer referencia 
    //a este archivo con la instruccion requiere. se usa principalmente para definir variables.
    // Y ESTAS ESTARAN LISTAS UNA VEZ HAGAMOS UNA llamada al archivo donde esten guardadas

    // include
    // El funcionamiento es igual que la funcion require con la diferencia de que si puede procesar el codigo tantas veces como la llamemos a esa pagina externa.

    echo "<h1>include</h1>";
    echo "<br>";
    include("variables.php");
    echo "<br>";
    print("$x"."$z"."$y");

    //switch
    //Se utiliza para comprobar un dato entre varias posibilidades
    //Ejemplo
    echo "<h1>switch</h1>";
    echo "<br>";
    $color = "negro";
    switch($color)
    {
        case "blanco";
            $sector = "claro";
            break;
        case "naranja";
            $sector = "normal";
            break; 
        case "negro";
            $sector = "oscuro";
            break;       

    }
    print($sector);



?>
</body>
</html>