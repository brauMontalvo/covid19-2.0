<?php
    if(!isset($_SESSION)){ session_start(); } 
?>
<!DOCTYPE html>
<html id="fondo">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Hotel El Bosque">
    <meta name="keywords" content="hotel">
    <meta http‐equiv="refresh" content="20;URL=./2PantillaBasica.htm" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloEquBlog.css?1.0" media="all" >
    <link rel="stylesheet" href="css/login.css" media="all"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
<h1 class="animate__animated animate__backInLeft" id="titulo">Información sobre el COVID-19</h1>
<ul>
  <li><a href="index.html">Inicio</a></li>
  <li><a href="covid.html"> ¿Qué es el COVID-19? </a></li>
  <li><a href="medidas.html"> Medidas preventivas </a></li>
  <li><a href="test.php" id="selected">¿Tengo o no COVID-19?</a></li>
  <li><a href="hospitales.html">Hospitales en México</a></li>
</ul>


<h1 class="animate__animated animate__backInLeft">Hola, <?php echo $_SESSION["nombre"];?> <?php echo $_SESSION["apellido"];?></h1>

<h1 class="animate__animated animate__backInLeft">TOTAL DE PUNTAJE: <?php echo $_SESSION["total"];?></h1>

<?php

    if($_SESSION["total"]>=51 && $_SESSION["total"]<=65){
?>

<center><form action="hospitales.html" method="POST" class="animate__animated animate__backInLeft" id="titulo">
    <h1 id="urg">¡¡¡U R G E N C I A!!!</h1>
    <h1 id="urg">¡¡¡PADECES DE COVID-19!!!</h1><br>

    <p>Te recomendamos inmediatamente acudir con un doctor especializado.</p><br>
    <p>Recuerda equipar siempre tu cubrebocas y careta para evitar contagiar a los demas y por favor, evita tocar cosas con tus manos, y tambien tiene ud. prohibidamente salir de casa</p><br>
    <h1>¿No sabes a donde acudir? O.O</h1>
    <p>Presiona el siguiente boton para ver la lista de los principales hospitales en tratamiento de COVID-19 en México.</p><br>

    <p>NO OLVIDES MENCIONARLE ESTOS SINTOMAS A TU MEDICO DE CONFIANZA:</p><br>
    <div>
        <p style="color:black;"><?php echo $_SESSION["mensaje1"]; ?></p>
    </div>
    <div>
        <p style="color:black;"><?php echo $_SESSION["mensaje2"]; ?></p>
    </div>
    <div>
        <p style="color:black;"><?php echo $_SESSION["mensaje3"]; ?></p>
    </div>
    
    <input type="submit" value="HOSPITALES DE MÉXICO">
</form></center>

<?php
    }else if($_SESSION["total"]>=31 && $_SESSION["total"]<=50){
?>

<center><form action="hospitales.html" method="POST" class="animate__animated animate__backInLeft">
    <h2>¡¡¡ADVERTENCIA!!!</h2>
    <h2>¡¡¡ES PROBABLE QUE PRESENTES INICIOS DE COVID-19!!!</h2><br>

    <p>Te recomendamos inmediatamente que te realices una prueba para determinar si padeces de COVID-19. Y en dado caso de que salga positiva, ve inmediatamente con un doctor especializado.</p><br>
    <p>Recuerda equipar siempre tu cubrebocas y careta para evitar contagiar a los demas y por favor, evita tocar cosas con tus manos</p><br>
    <h1>¿No sabes a donde acudir? O.O</h1>
    <p>Presiona el siguiente boton para ver la lista de los principales hospitales en tratamiento de COVID-19 en México.</p><br>

    <p>NO OLVIDES MENCIONARLE ESTOS SINTOMAS A TU MEDICO DE CONFIANZA:</p><br>
    <div>
        <p style="color:black;"><?php echo $_SESSION["mensaje1"]; ?></p>
    </div>
    <div>
        <p style="color:black;"><?php echo $_SESSION["mensaje2"]; ?></p>
    </div>
    <div>
        <p style="color:black;"><?php echo $_SESSION["mensaje3"]; ?></p>
    </div>
    <input type="submit" value="HOSPITALES DE MÉXICO" class="animate__animated animate__backInLeft">
</form></center>

<?php
    }else if($_SESSION["total"]>=0 && $_SESSION["total"]<=30){
?>
<center><form action="medidas.html" method="POST" class="animate__animated animate__backInLeft">
    <h1>¡¡¡Enhorabuena!!!</h1>
    <p>Solo padeces de alguna enfermedad común. Te recordamos acudas a tu medico de confianza para poder tratarla lo mas antes posible.</p><br>
    <p>Aunque te pedimos por favor que sigas tomando las medidas de salubridad establecidas para no contagiarte y sobretodo que hagas uso continuo del cubrebocas
        y lavarte las manos en todo momento posible.</p><br>
    <h1>¿No sabes cuáles son? O.O</h1>

    <input type="submit" value="HAZ CLICK AQUI!!!">
</form></center>

<?php
    }
?>

</body>
</html>