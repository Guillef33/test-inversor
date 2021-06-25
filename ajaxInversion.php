<?php 


$link = new PDO ("mysql:host=localhost;dbname=inversor_guille","root","");


$riesgo = $_GET["riesgo"];
$inversionInicial = $_GET["inversionInicial"];

if ($riesgo == "bajo"){
    // 65 % DE LA INVERSION INICIAL EN ACTIVOS RIESGO BAJO
    // 25 % DE LA INVERSION INICIAL EN ACTIVOS RIESGO MODERADO
    // 10 % DE LA INVERSION INICIAL EN ACTIVOS RIESGO ARRIESGADO

    // Primero hay que traer de la base de datos los activos de riesgo bajo
    $queryBajo = $link->prepare("SELECT * FROM activos WHERE risk  = 'bajo'  ORDER BY performance DESC");
    $queryBajo->execute(); 
    $resBajo = $queryBajo->fetchAll();

    $cantidadFilasResBajo = count($resBajo);

    $inversionBajo = $inversionInicial * 0.65;
    $inversionModerado = $inversionInicial * 0.30;
    $inversionArriesgado = $inversionInicial * 0.05;

    foreach ($resBajo as $key => $value) {
        $resBajo[$key]["monto"] = $inversionBajo / $cantidadFilasResBajo;
    }
   // var_dump($cantidadFilasResBajo);
   // var_dump($inversionBajo);
   // var_dump($resBajo);

        // Primero hay que traer de la base de datos los activos de riesgo bajo
        $queryModerado = $link->prepare("SELECT * FROM activos WHERE risk  = 'moderado'  ORDER BY performance DESC");
        $queryModerado->execute(); 
        $resModerado = $queryModerado->fetchAll();
    
        $cantidadFilasResModerado = count($resModerado);
    
        foreach ($resModerado as $key => $value) {
            $resModerado[$key]["monto"] = $inversionModerado / $cantidadFilasResModerado;
        }

        var_dump($resModerado);


    


    /*
    $array = [0,"guille",true,NULL,30,"12-3-21"];
    $array[1]

    $arrayMulti = ["ema"=>[0,20,"activo"],"guille"=>[1,32,"inactiva"]];
    $array[0][2]
    */


    // Dividimos la inversion inicial por los activos de acuerdo a su valor



}
else if($riesgo == "moderado"){
    // 30 % DE LA INVERSION INICIAL EN ACTIVOS RIESGO BAJO
    // 50 % DE LA INVERSION INICIAL EN ACTIVOS RIESGO MODERADO
    // 20 % DE LA INVERSION INICIAL EN ACTIVOS RIESGO ARRIESGADO

}
else if($riesgo == "arriesgado"){
    // 10 % DE LA INVERSION INICIAL EN ACTIVOS RIESGO BAJO
    // 40 % DE LA INVERSION INICIAL EN ACTIVOS RIESGO MODERADO
    // 50 % DE LA INVERSION INICIAL EN ACTIVOS RIESGO ARRIESGADO
}
 ?>