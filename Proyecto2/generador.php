<?php
///Primeramente vamos a crear una constante
define ("NUM_MAX_VAL", 13);

function generar($min, $max){
    $valor = mt_rand($min, $max) / 10;
    return $valor;
}
///Luego crearemos un archivo con valores
$archivo = fopen("datos.txt","w") or die("No se pudo crear archivo");

/// Un ciclo que creara 13 valores en un archivo de texto
for ($i = 0; $i < NUM_MAX_VAL; $i++) {
    $dato = generar(30, 90);
    if ($i == NUM_MAX_VAL-1){
        fwrite($archivo, $dato);  
    }
    else{
        fwrite($archivo, $dato."\n");
    }
        
}
echo "Archivo escrito";



?>