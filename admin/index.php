<?php
include_once("lib/template.php");
$user=$_SESSION['admin_user'];
cabezal();?>
<style>
#contenido {
   overflow:hidden;
    white-space:nowrap;
    text-overflow: ellipsis;
}
</style>
<?php body();?>
<?php if($user=='admin'){?>
<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1 style="color:#FE0000;padding-left: 400px">PANEL DE CONTROL</h1>
            <br/>         
          </div>
        </div><!-- /.row -->
		
         <!--Contenido -->
        <div class="row">
          <div class="col-sm-10 col-md-10 col-lg-6 col-xs-12">
          <a href="filtro_expositores.php">
            <div class="panel panel-info" id="contenido">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                    <i class="fa fa-bookmark fa-5x"> Expositores</i>
                  </div>
                  
                </div>
              </div>
              
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                      
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              
            </div>
            </a>
          </div>
          <div class="col-sm-10 col-md-10 col-lg-6 col-xs-12">
          <a href="filtro_banners.php">
            <div class="panel panel-danger" id="contenido">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                    <i class="fa fa-picture-o fa-5x"> Banners</i>
                  </div>
                 
                </div>
              </div>
              
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                      
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              
            </div>
            </a>
          </div>
          <div class="col-sm-10 col-md-10 col-lg-6 col-xs-12">
          <a href="filtro_categorias.php">
            <div class="panel panel-info" id="contenido">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                    <i class="fa fa-outdent fa-5x"> Patrocinadores</i>
                  </div>
                  
                </div>
              </div>
              
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
             </div>
            </a>
          </div>
          <div class="col-sm-10 col-md-10 col-lg-6 col-xs-12">
          <a href="filtro_proveedores.php">
            <div class="panel panel-danger" id="contenido">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                    <i class="fa fa-book fa-5x"> Mensajes</i>
                  </div>
                 
                </div>
              </div>
              
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                      
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
          </div>
          
<div class="col-sm-10 col-md-10 col-lg-6 col-xs-12">
          <a href="filtro_galerias.php">
            <div class="panel panel-info" id="contenido">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                    <i class="fa fa-file-o fa-5x"> Galerias</i>
                  </div>
                 
                </div>
              </div>
              
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                      
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
          </div>

          <div class="col-sm-10 col-md-10 col-lg-6 col-xs-12">
          <a href="contador.php">
            <div class="panel panel-danger" id="contenido">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                    <i class="fa fa-exchange fa-5x"> Contador de Visitas</i>
                  </div>
                 
                </div>
              </div>
              
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                      
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
          </div>

         </div>
         <?php }?>
<?php if($user!='admin'){?>
<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1 style="color:#FE0000;padding-left: 400px">PANEL DE CONTROL</h1>
            <br/>         
          </div>
        </div><!-- /.row -->
    
         <!--Contenido -->
        <div class="row">
          <div class="col-sm-10 col-md-10 col-lg-6 col-xs-12">
          <a href="filtro_articulos2.php">
            <div class="panel panel-info" id="contenido">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                    <i class="fa fa-bookmark fa-5x"> Artículos</i>
                  </div>
                  
                </div>
              </div>
              
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                      
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              
            </div>
            </a>
          </div>
          <div class="col-sm-10 col-md-10 col-lg-6 col-xs-12">
          <a href="filtro_banners2.php">
            <div class="panel panel-danger" id="contenido">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                    <i class="fa fa-picture-o fa-5x"> Banners</i>
                  </div>
                 
                </div>
              </div>
              
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                      
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              
            </div>
            </a>
          </div>
          <div class="col-sm-10 col-md-10 col-lg-6 col-xs-12">
          <a href="filtro_categorias2.php">
            <div class="panel panel-info" id="contenido">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                    <i class="fa fa-outdent fa-5x"> Categorías</i>
                  </div>
                  
                </div>
              </div>
              
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
             </div>
            </a>
          </div>
          <div class="col-sm-10 col-md-10 col-lg-6 col-xs-12">
          <a href="filtro_proveedores2.php">
            <div class="panel panel-danger" id="contenido">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                    <i class="fa fa-book fa-5x"> Proveedores</i>
                  </div>
                 
                </div>
              </div>
              
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10">
                      
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-6 col-xs-10 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
          </div>
          


         

         </div>
<?php } ?>
<?php footer();?>