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
                    <input type="text"><br>
                </div>

                <div class="depositos">
                    <label for="depositos-periodicos">Depositos Periodicos</label><br>
                    <select name="" id="">
                        <option value="desactivado">Desactivado</option>
                        <option value="desactivado">Activado</option>
                    </select>
                </div>
            </div>
            <div class="checkbox-riesgo">
                <h3>Perfil de Riesgo</h3>
                <form action="">
                    <select name="" id="">
                        <option value="">Principiante</option>
                        <option value="">Moderado</option>
                        <option value="">Avanzado</option>
                    </select>
                </form>
            </div>
            <div class="aside-portfolio">
                <h3>Portafolio de activos a invertir</h3>
                <a href="#" class="btn-aside"><i class="fas fa-chart-line"></i>Tecnologia Inovadora</a>
                <select name="" id="" class="btn-aside">Otros Portafolios
                    <option value="">Empresas Argentinas</option>
                    <option value="">Empresas USA</option>
                    <option value="">Criptomonedas</option>
                </select>

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
                <table class="detalles-table">
                    <thead>                    
                        <tr>
                            <td>Empresa</td>
                            <td>Nombre</td>
                            <td>% Portfolio</td>
                            <td>Cantidad</td>
                            <td>Precio</td>
                            <td>Rendimiento</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="./img/programatic1.png" alt="" style="border-radius: 50%; width: 100px;"></td>
                            <td>Apple</td>
                            <td>5.6%</td>
                            <td>100 acciones</td>
                            <td>$14.5</td>
                            <td>1.5%</td>
                        </tr>
                        <tr>
                            <td><img src="./img/gold.jpg" alt="" style="border-radius: 50%; width: 100px;"></td>
                            <td>Apple</td>
                            <td>5.6%</td>
                            <td>100 acciones</td>
                            <td>$14.5</td>
                            <td>1.5%</td>
                        </tr>
                        <tr>
                            <td><img src="./img/risk-150x150.jpg" alt="" style="border-radius: 50%; width: 100px;"></td>
                            <td>Apple</td>
                            <td>5.6%</td>
                            <td>100 acciones</td>
                            <td>$14.5</td>
                            <td>1.5%</td>
                        </tr>
                        <tr>
                            <td><img src="./img/inversor.jpg" alt="" style="border-radius: 50%; width: 100px;"></td>
                            <td>Apple</td>
                            <td>5.6%</td>
                            <td>100 acciones</td>
                            <td>$14.5</td>
                            <td>1.5%</td>
                        </tr>
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
