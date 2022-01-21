<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejemplos con funciones y estucturas de control</h2>
    <?php
    require_once("repositorio.php");
    echo "<h3>Ejercicio 1</h3>";
    $resultado=transformar("un texto");
    echo $resultado;
    $totalFactura =calcularTotal(100,4.95,0.21);
    echo "<h4>el total de la factura es ".$totalFactura." € (iva incluido)</h4>";
    $totalFactura2 =calcularTotal2(100,4.95,"reducido");
    echo "<h4>el total de la factura es ".$totalFactura2." € (iva incluido)</h4>";
    $mensajeResultado=manipularString("En un lugar de la mancha");
    echo $mensajeResultado;
    

    $mensajeMayuscula=primeraMayuscula("hola buenos días");
    echo "<br>".$mensajeMayuscula;

    $resultadoReemplazar=reemplazar("a","e","reemplazo con a");
    echo "<br>".$resultadoReemplazar;

    echo "<br>";
    $resultadoInfo=info("La versión actual de PHP es");
    echo $resultadoInfo;
?>
</body>
</html>