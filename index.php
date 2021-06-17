<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>


    <form class="form" action="validar.php" method="post">
        <div class="title">Hola de nuevo</div>
        <div class="subtitle">Ingresa tus datos!</div>
        <div class="input-container ic1">
          <input id="usuario" name="usuario" class="input" type="text" placeholder=" " />
          <div class="cut"></div>
          <label for="usuario" class="placeholder">Usuario</label>
        </div>
     <!--   <div class="input-container ic2">
          <input id="lastname" class="input" type="text" placeholder=" " />
          <div class="cut"></div>
          <label for="lastname" class="placeholder">Last name</label>
        </div>  -->
        <div class="input-container ic2">
          <input id="contrasena" name="contrasena" class="input" type="text" placeholder=" " />
          <div class="cut"></div>
          <label for="contrasena" class="placeholder">Contrasena</>
        </div>
        <input type="submit" class="button submit" name="submit"  value="Ingresar">

     <!--   <button type="submit" class="submit"></button>  -->
</form>

    
</body>
</html>