<?php
function transformar($dato){//paso de argumento por valor
return $dato."transformado";
}

function calcularTotal($unidades, $precio, $iva){
    $subtotal=$unidades*$precio;
    $cuotaIva=$subtotal*$iva;
    $total=$subtotal+$cuotaIva;
    return $total;
}

function calcularTotal2($unidades, $precio, $tipoOperacion){
    $subtotal=$unidades*$precio;
    $cuotaIva=0;
    if($tipoOperacion=="normal"){
        $cuotaIva=$subtotal*0.21;
    }
    elseif($tipoOperacion=="reducido"){
        $cuotaIva=$subtotal*0.1;
    }
    else{
        $cuotaIva=$subtotal*0.04;
    }
    $total=$subtotal+$cuotaIva;
    return $total;
}

function manipularString($mensaje){
    return "En mayúscula ".strtoupper($mensaje);
}

function primeraMayuscula($dato){
    //retorna el dato con la primera letra en mayúscula
    return ucfirst($dato);
}

function reemplazar($valorBuscado,$valorReemplazado,$cadena){
    //le das que buscas una a, y que muestre una e
    return str_replace($valorBuscado,$valorReemplazado,$cadena);
}

function mostrarMes($fecha){
    //envias la fecha y retornas el mes en castellano

}

function info(){
    //muestre la versión de php y la versión del servidor
    echo phpversion();
    echo "<br>";
    echo apache_get_version();
}

function numeroPrimo($numero){
    //retorna si el número introducido es primo o no

}

function bisiesto($año){
    //retorna si el año es bisiesto o no

}

