<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
 <!--   <link rel="stylesheet" href="estilos.css"> -->
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="inversion.js" defer></script>


</head>
<body>


<main id="contenedor-general">
    <section id="contenedor-aside">
        <div class="aside-top">
            <div class="aside-title">
                <i class="fas fa-chart-line"></i><h1 class="aside-h1">Plan de Inversion</h1>
            </div>
            <div class="check-wrapper">
                <h4 class="check-aside">Plan Optimizado</h4>
                <i class="fas fa-chart-line"></i>
            </div>
        </div>
        <div class="aside-content">
            <div class="inversion-inputs">
                <div class="inversion">
                    <label for="inversion-inicial">Inversion inicial </label><br>
                    <input type="number" class="inversion-inicial" onchange="inversion()"><br>
                </div>

                <div class="depositos">
                    <label for="depositos-periodicos">Depositos Periodicos</label><br>
                    <select name="" id="">
                        <option value="desactivado">Desactivado</option>
                        <option value="desactivado">Activado</option>
                    </select>
                </div>
            </div>
        </div>

            <div class="checkbox-riesgo">
                <h3>Perfil de Riesgo</h3>

                <input type="range" min="1" max="100" value="50" class="slider" id="myRange">

                <select name="riesgo" class="riesgo" id="" onchange="inversion()">
                    <option value="bajo">Bajo</option>
                    <option value="moderado">Moderado</option>
                    <option value="arriesgado">Arriesgado</option>
                </select>
                <!-- <input type="range" min="1" max="100" value="50" class="slider" id="myRange"> -->
            </div>
            <div class="aside-portfolio">
                <h3>Portafolio de activos a invertir</h3>
                <div class="aside-portfolio-buttons">
                    <a href="#" class="btn-aside"><i class="fas fa-chart-line"></i>Tecnologia Inovadora</a>
                    <select name="" id="" class="btn-aside">Otros Portafolios
                        <option value="">Empresas Argentinas</option>
                        <option value="">Empresas USA</option>
                        <option value="">Criptomonedas</option>
                    </select>
                </div>

                <p class="aside-info-tooltip">Informacion del Portafolio<p>

            </div>
            <div class="aside-recomendaciones">
                    <select name="" id="">
                    <option value="">Recomendaciones</option>
                    <option value="">Tips</option>
                    <option value="">Expertos</option>
                </select>
            </div>
        </div>
            <div class="aside-open-account">
                <h3>Empieza a invertir en este plan</h3>
                <a href="" class="btn-aside">ABRE TU CUENTA</a>
            </div>

    </section>

    <section id="contenedor-main">
        <div>
            <ul class="login-bar">
            <li>Bienvenido, estas logeado</li>
            <li>Log Out</li>
            </ul>
        </div>
        <div class="grafico-wrapper">
            <div>
                <ul class="graph-list">
                    <li>PROYECCION</li>
                    <li>A futuro</li>
                    <li>Hace 3 anos</li>
                    <li>En 2008</li>
                </ul>
                <img src="grafico.png" alt="" style="height: 40vh;">
            </div>
            <div id="details-graph">

            </div>
        </div>
        <div class="detalles-wrapper" >
            <div>
                <h3>11 activos que componen tu portafolio</h3>

                <?php 

                //include 'ajaxInversion.php';
                // Primero generamos la conexion con la base de datos. 
                $link = new PDO ("mysql:host=localhost;dbname=inversor_guille","root","");
                //Segundo : creo una variable (guardara la sentencia preparada+pdo) utilizamnos la variable link y usamos el metodo prepare(pdo) para preparar la sentencia SQL
                $sql = $link->prepare("SELECT * FROM activos");
                //tercero : ejecutamos la sentecia
                $sql->execute();
                //cuarto : utilizamos fetch o fetchall para traer cada fila en un array multidimensional o simple.
                $empresas = $sql->fetchAll();
                // $conn = mysqli_connect('localhost', 'root', '', 'inversor_guille') 
                ?>
                

                <table class="detalles-table">
                    <thead>                    
                        <tr>
                            <td>Logo</td>
                            <td>Empresa</td>
                            <td>Sector</td>
                            <td>Rendimiento</td>
                            <td>Tipo</td>
                            <td>Precio</td>
                            <td>Rendimiento</td>
                        </tr>
                    </thead>
                                   
                    <tbody>





                        <?php
                        /*foreach ($empresas as $key => $value):*/
                        ?>
                        <!--  <tr>
                            <td><img src="./img/programatic1.png" alt="" style="border-radius: 50%; width: 100px;" ></td> <?php // echo $value['id_img']; ?>
                            <td>//<?php // echo $value['name']; ?></td>
                            <td><?php// echo $value['type']; ?></td>
                            <td><?php // echo $value['performance']; ?></td>
                            <td><?//php echo $value['risk']; ?></td>
                        </tr>-->
                        <?php /* endforeach;*/?>
                        
                        <!-- <?php/*
                        foreach ($empresas as $key => $value){
                        echo "<tr>
                            <td><img src="./img/programatic1.png" alt="" style="border-radius: 50%; width: 100px;" ></td>  $empresas['id_img'] 
                            <td> $empresas['name'] </td>
                            <td> $empresas['type'] </td>
                            <td> $empresas['performance'] </td>
                            <td> $empresas['risk'] </td>
                        </tr>";
                        }?*/> -->
                       

                    </tbody>


                
                </table>
            </div>
            <div>
                <h3>Tipos de activos</h3>
                <img src="./img/programatic1.png" alt="" width="50%">
            </div>

        </div>

    </section>
    </main>
    
</body>
</html>
