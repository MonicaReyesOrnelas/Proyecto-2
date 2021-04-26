<?php 

//crearemos variable con el nombre del archivo
$nombreAr = "datos.txt";

//abrimos el archivo
$archivo = fopen($nombreAr,"r") or die("No se puede abrir archivo");

$arreglo = array();

//leemos archivo
while(!feof($archivo)){
    $arreglo [] = fgets($archivo);
}
//cerramos archivo
fclose($archivo);

//exploramos  la variable $arreglo
var_dump($arreglo);

//funcion sum-> suma los elementos de un arreglo
$suma = array_sum($arreglo);
echo "<br>".$suma;

//funcion count-> contabiliza el numero de elementos
// de un arreglo
$numElementos = count($arreglo);
echo "<br>".$numElementos;

//calcular promedio
$media = $suma / $numElementos;
echo "<br>".$media;

// funcion max-> devuelve el valor mas grande de un arreglo
$G = max($arreglo);

// funcion min-> devuelve el valor mas pequeño de un arreglo
$P = min($arreglo);

//funcion que devuelve el valor más alejado segun el problema
function masAlejado($p, $g, $m) {
    $n1 = $g - $m;
    $n2 = $m - $p;
    if ($n1 > $n2){
        return $g;
    }
    else{
        return $p;
    }
}

//llamamos a la funcion masAlejado
$valor_alejado = masAlejado($P, $G, $media);
echo "<br>".$valor_alejado;

//funcion array_search->  devuelve la posicion 
// de un valor a buscar
$posicion = array_search($valor_alejado,$arreglo);
echo "<br>".$posicion;

//cambiamos el valor a -1
$arreglo[$posicion] = -1;
echo "<br>".var_dump($arreglo);

//funcion que deveuelve el nuevo promedio segun proyecto
function nuevoPromedio($arr){
    //inicializamos variable
    $sum = 0;

    //recorremos arreglo 
    foreach ($arr as $valor) {
        if ($valor != -1){
            $sum += $valor;
        }
    }
    //calculamos promedio nuevo sin tomar en cuenta
    // una posicion
    $prom = $sum / (count($arr) - 1) ;
    return $prom;
}
$promedioN = nuevoPromedio($arreglo);
echo "<br>".$promedioN;


?>