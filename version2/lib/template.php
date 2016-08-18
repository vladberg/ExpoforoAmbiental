<?php
include_once("conexion.php");
function cabezal(){
?>
<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <meta name="description" content="">

    <meta name="author" content="">

    <link href="img/icon.png" type="image/x-icon" rel="shortcut icon" />



    <title>Expoforo ambiental</title>

    

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->
     <link href="css/fondo.css" rel="stylesheet">

    <link href="css/cover.css" rel="stylesheet">

    <link href="css/blog.css" rel="stylesheet">

	<link href="css/extras.css" rel="stylesheet">

	<link rel=”stylesheet” type=”text/css” href=”http://fonts.googleapis.com/css?family=Oswald”>

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
  <style type="text/css">
body {
    height: 100%;
    background: url(img/jaguar.png) !important;
    background-attachment: fixed !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    font-family: sans-serif !important;
  </style>

  <body>

          <div class="masthead clearfix">

            <div class="inner">

              <nav>

                <ul class="nav masthead-nav">

				<li><img class="ico" src="img/logoEXPOFORO.png" width="180px"></li>

                  <li class="active"><a href="index.php">INICIO</a></li>

                  <li><a href="expoforo.php">EXPO</a></li>

                  <li><a href="stand.php">STANDS</a></li>

                  <li><a href="costos.php">COSTOS</a></li>

                  <li><a href="directorio.php">DIRECTORIO</a></li>

                  <li><a href="patrocinador.php">PATROCINADORES</a></li>

                  <li><a href="contacto.php">CONTACTO</a></li>

                  <li><a href="https://www.facebook.com/expoforoambiental/" target="_blank"><img class="social" src="img/facebook.png"></a></li>

                  <li><img class="icox" src="img/SEDUMACANACO.png" alt="Imagen" /></li>

                </ul>

              </nav>

            </div>

          </div>
<?php }
function footer(){
?>
<footer class="blog-footer">
<?php
$link=conectarse();
   $query="select * from categorias where estatus=1 order by orden asc";
$resultado=mysql_query($query, $link);

              //echo $resultado;



              $icont=0;

              $class='success';
              if(mysql_num_rows($resultado)>0){



                while($row = mysql_fetch_array($resultado)){
                $nombre=$row['categoria'];
                $imagen=$row['imagen'];
                 ?>

      <a href="#" target="_blank"><img class="icono" src="patrocinadores/<?php echo $imagen;?>"></a>
      <?php }}
      ?>

    </footer>

         

  </body>

</html>


<?php }
?>