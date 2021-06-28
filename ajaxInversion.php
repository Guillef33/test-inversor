<?php 
$data["bajo"] = "";
$data["moderado"] = "";
$data["arriesgado"] = "";


// Variables y Propiedades


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

        // Riesgo Moderado
        $queryModerado = $link->prepare("SELECT * FROM activos WHERE risk  = 'moderado'  ORDER BY performance DESC");
        $queryModerado->execute(); 
        $resModerado = $queryModerado->fetchAll();
    
        $cantidadFilasResModerado = count($resModerado);
   
        foreach ($resModerado as $key => $value) {
            $resModerado[$key]["monto"] = $inversionModerado / $cantidadFilasResModerado;
        }

        // Riesgo Alto
        $queryArriesgado = $link->prepare("SELECT * FROM activos WHERE risk  = 'arriesgado'  ORDER BY performance DESC");
        $queryArriesgado->execute(); 
        $resArriesgado = $queryArriesgado->fetchAll();
    
        $cantidadFilasResArriesgado = count($resArriesgado);
    
        foreach ($resArriesgado as $key => $value) {
            $resArriesgado[$key]["monto"] = $inversionArriesgado / $cantidadFilasResArriesgado;
        }
        $data["bajo"] = $resBajo;
        $data["moderado"] =$resModerado;
        $data["arriesgado"] = $resArriesgado;


  


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

      // Primero hay que traer de la base de datos los activos de riesgo bajo
      $queryBajo = $link->prepare("SELECT * FROM activos WHERE risk  = 'bajo'  ORDER BY performance DESC");
      $queryBajo->execute(); 
      $resBajo = $queryBajo->fetchAll();

      $cantidadFilasResBajo = count($resBajo);

      $inversionBajo = $inversionInicial * 0.30;
      $inversionModerado = $inversionInicial * 0.50;
      $inversionArriesgado = $inversionInicial * 0.20;

      foreach ($resBajo as $key => $value) {
          $resBajo[$key]["monto"] = $inversionBajo / $cantidadFilasResBajo;
      }
  // var_dump($cantidadFilasResBajo);
  // var_dump($inversionBajo);
  // var_dump($resBajo);

      // Riesgo Moderado
      $queryModerado = $link->prepare("SELECT * FROM activos WHERE risk  = 'moderado'  ORDER BY performance DESC");
      $queryModerado->execute(); 
      $resModerado = $queryModerado->fetchAll();
  
      $cantidadFilasResModerado = count($resModerado);
 
      foreach ($resModerado as $key => $value) {
          $resModerado[$key]["monto"] = $inversionModerado / $cantidadFilasResModerado;
      }

      // Riesgo Alto
      $queryArriesgado = $link->prepare("SELECT * FROM activos WHERE risk  = 'arriesgado'  ORDER BY performance DESC");
      $queryArriesgado->execute(); 
      $resArriesgado = $queryArriesgado->fetchAll();
  
      $cantidadFilasResArriesgado = count($resArriesgado);
  
      foreach ($resArriesgado as $key => $value) {
          $resArriesgado[$key]["monto"] = $inversionArriesgado / $cantidadFilasResArriesgado;
      }
      $data["bajo"] = $resBajo;
      $data["moderado"] =$resModerado;
      $data["arriesgado"] = $resArriesgado;


}
else if($riesgo == "arriesgado"){
    // 10 % DE LA INVERSION INICIAL EN ACTIVOS RIESGO BAJO
    // 40 % DE LA INVERSION INICIAL EN ACTIVOS RIESGO MODERADO
    // 50 % DE LA INVERSION INICIAL EN ACTIVOS RIESGO ARRIESGADO

     // Primero hay que traer de la base de datos los activos de riesgo bajo
     $queryBajo = $link->prepare("SELECT * FROM activos WHERE risk  = 'bajo'  ORDER BY performance DESC");
     $queryBajo->execute(); 
     $resBajo = $queryBajo->fetchAll();

     $cantidadFilasResBajo = count($resBajo);

     $inversionBajo = $inversionInicial * 0.10;
     $inversionModerado = $inversionInicial * 0.40;
     $inversionArriesgado = $inversionInicial * 0.50;

     foreach ($resBajo as $key => $value) {
         $resBajo[$key]["monto"] = $inversionBajo / $cantidadFilasResBajo;
     }
     foreach ($resBajo as $key => $value) {
        $data["bajo"] .= '<tr>
            <td><img src="./img/programatic1.png" alt="" style="border-radius: 50%; width: 100px;" ></td>
            <td> '. $value['name'].'</td>
            <td> '. $value['type'].'</td>
            <td> '. $value['performance'].'</td>
            <td> '. $value['risk'].'</td>
            <td> '.$value['monto'].' </td>
        </tr>';
     }
 // var_dump($cantidadFilasResBajo);
 // var_dump($inversionBajo);
 // var_dump($resBajo);

     // Riesgo Moderado
     $queryModerado = $link->prepare("SELECT * FROM activos WHERE risk  = 'moderado'  ORDER BY performance DESC");
     $queryModerado->execute(); 
     $resModerado = $queryModerado->fetchAll();
 
     $cantidadFilasResModerado = count($resModerado);

     foreach ($resModerado as $key => $value) {
         $resModerado[$key]["monto"] = $inversionModerado / $cantidadFilasResModerado;
     }
     foreach ($resModerado as $key => $value) {
        $data["moderado"] .= '<tr>
            <td><img src="./img/programatic1.png" alt="" style="border-radius: 50%; width: 100px;" ></td>
            <td> '. $value['name'].'</td>
            <td> '. $value['type'].'</td>
            <td> '. $value['performance'].'</td>
            <td> '. $value['risk'].'</td>
            <td> '.$value['monto'].' </td>
        </tr>';
     }

     // Riesgo Alto
     $queryArriesgado = $link->prepare("SELECT * FROM activos WHERE risk  = 'arriesgado'  ORDER BY performance DESC");
     $queryArriesgado->execute(); 
     $resArriesgado = $queryArriesgado->fetchAll();
 
     $cantidadFilasResArriesgado = count($resArriesgado);
 
     foreach ($resArriesgado as $key => $value) {
         $resArriesgado[$key]["monto"] = $inversionArriesgado / $cantidadFilasResArriesgado;
     }
     foreach ($resArriesgado as $key => $value) {
        $data["arriesgado"] .= '<tr>
            <td><img src="./img/programatic1.png" alt="" style="border-radius: 50%; width: 100px;" ></td>
            <td> '. $value['name'].'</td>
            <td> '. $value['type'].'</td>
            <td> '. $value['performance'].'</td>
            <td> '. $value['risk'].'</td>
            <td> '.$value['monto'].' </td>
        </tr>';
     }
}
echo json_encode($data);

/* := concatenar y asignar , esto hace que guarde el string de dicha vriable y le pegue algo nuevo adelante. */
$string = "hola";
$string .= "que tal";
//resultado : holaque tal
$string = "hola";
$string = "que tal";
//resultado : que tal
 ?>
