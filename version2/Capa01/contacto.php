<?php

error_reporting(0);
$id_categoria=$_GET['id'];



if($_POST){

$nombre = $_POST['nombre'];

$asunto = $_POST['asunto'];

$email = $_POST['email'];

$telefono = $_POST['telefono'];
$empresa = $_POST['empre'];

$text = $_POST['mensaje'];



//Librerías para el envío de mail

include_once('PHPMailer/class.phpmailer.php');

include_once('PHPMailer/class.smtp.php');

 

//Recibir todos los parámetros del formulario

//$para = 'ventas@sartory.mx';

$para = 'itzimna@hotmail.com';

$asunto = 'Contacto Expoforoambiental';

$mensaje = '<h2>'.$nombre.'</h2><h3>'.$empresa.'<h3>'.$email.'</h3><h3>'.$telefono.'</h3><h3>'.$text.'</h3>';

$archivo = $imagen;

 

//Este bloque es importante

$mail = new PHPMailer();

$mail->IsSMTP();

//$mail->SMTPAuth = true;

$mail->SMTPSecure = "tsl";

$mail->Host = "localhost";

$mail->Port = 25;

 

//Nuestra cuenta

//$mail->Username ='bergman.pereira.novelo@gmail.com';

//$mail->Password = 'vladberg01'; //Su password

 

//Agregar destinatario

$mail->AddAddress($para);

$mail->Subject = $asunto;

$mail->Body = $mensaje;

//Para adjuntar archivo

$mail->AddAttachment($archivo, $archivo);

$mail->MsgHTML($mensaje);

  

//Avisar si fue enviado o no y dirigir al index

if($mail->Send())

{

    echo'<script type="text/javascript">

            alert("Enviado Correctamente");            

         </script>';

}

else{

    echo'<script type="text/javascript">

            alert("NO ENVIADO, intentar de nuevo");

         </script>';

}

 }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../img/icon.png" type="image/x-icon" rel="shortcut icon" />

    <title>Expoforo ambiental</title>
    
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/cover.css" rel="stylesheet">
    <link href="../css/blog.css" rel="stylesheet">
  <link href="../css/extras.css" rel="stylesheet">
  
  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
          <div class="masthead clearfix">
            <div class="inner">
              <nav>
                <ul class="nav masthead-nav">
                  <li><img class="ico" src="../img/logoEXPOFORO.png"></li>
                  <li><a href="../index.html">INICIO</a></li>
                  <li><a href="expoforo.html">EXPO</a></li>
                  <li><a href="stand.html">STANDS</a></li>
                  <li><a href="costos.html">COSTOS</a></li>
                  <li><a href="directorio.html">DIRECTORIO</a></li>
                  <li><a href="patrocinador.html">PATROCINADORES</a></li>
                  <li  class="active"><a href="contacto.php">CONTACTO</a></li>
                  <li><a href="https://www.facebook.com/expoforoambiental/" target="_blank"><img class="social" src="../img/facebook.png"></a></li>
                  <li><img class="icox" src="../img/SEDUMACANACO.png" alt="Imagen" /></li>
                </ul>
              </nav>
            </div>
          </div>
    
  <div class="container">

      <div class="inner cover"><br/>
    
            <h1 class="cover-heading"><img class="dx" src="../img/logoEXPOFORO.png"></h1><br/>

  <h3>Contáctanos con gusto te atenderemos</h3><br/>

  <form role="form" method="post" action="">
    <div class="form-group">
     
    <div class="col-lg-10">
      <input class="form-control" name="nombre" type="text" id="nombre" placeholder="Nombre" required="required" >
    </div><br/>
  </div><br/>
    <div class="form-group">
      
    <div class="col-lg-10">
      <input type="text" class="form-control" id="empre" name="empre" placeholder="Empresa" required="required"  >
  </div>
  </div><br/><br/>
  <div class="form-group">
      
    <div class="col-lg-10">
      <input class="form-control" name="email" type="email" id="email" placeholder="Email" required="required" >
  </div>
  </div><br/><br/>
  <div class="form-group">
    <div class="col-lg-10">
      <input class="form-control" name="telefono" type="text" id="telefono" placeholder="Teléfono" required="required"  >
  </div>
  </div><br/><br/>
  <div class="form-group">
    <div class="col-lg-10">
      <textarea class="form-control" rows="3" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea><br/>
  </div>
  <div class="col-lg-10" aling="center">
    <button type="submit" class="btn btn-info" value="enviar">Enviar</button>
  </div>
  </div>
  
  
</form><br/>

<div>
  <p></p><br/>
          </div><br/><br/>
        <br/><br/><H3>INFORMES: 428850 EXT 125,126 Y 127<br/>
        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> desarrollocomercial@canacomerida.com</H3> 
      </div>

      </div>
    <footer class="blog-footer">
      <a href="#" target="_blank"><img class="icono" src="../img/SOLARSOL LOGO.png" style="width: 300px !important;padding-rigth:25px"></a>
      <a href="#" target="_blank"><img class="icono" src="../img/roche.png"></a>
    </footer>

  </body>
</html>