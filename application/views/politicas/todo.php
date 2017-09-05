<!DOCTYPE html>
<html class="no-js"> 
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Politicas</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url() ?>estilos/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>estilos/css/main.css">
    <link href="<?= base_url() ?>estilos/css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?= base_url() ?>estilos/css/icomoon-social.css">
	<link rel="stylesheet" href="<?= base_url() ?>estilos/css/font-awesome.min.css">
	
	<script src="<?= base_url() ?>estilos/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	

</head>

    <body>
    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand " href="<?= base_url() ?>home/"><img src="<?= base_url() ?>estilos/img/log.png" alt="Basica"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= base_url() ?>home/">INICIO</a></li>
                    <li ><a href="<?= base_url() ?>presentacion/inicio/index/1">PRESENTACION</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MODALIDADES DE ADMISION&nbsp;&nbsp;<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu" style="background-color:#00283a; left: 0">
                            <li><a href="<?= base_url() ?>politicas/inicio/index/ordinaria">MODALIDADES DE ADMISION ORDINARIAS</a></li>
                            <li class="divider"></li>
                            <li><a href="<?= base_url() ?>politicas/inicio/index/extraordinaria">MODALIDADES DE ADMISION ESPECIALES</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url() ?>carreras/inicio/">CARRERAS</a></li>
                     <li  class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PREGUNTAS FRECUENTES&nbsp;&nbsp;<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu" style="background-color:#00283a; left: 0">
                        	<?php
                        		foreach ($consulta2->result() as $fila)
                        	 	{
                        	?>
                        		<li><a href="<?= base_url() ?>preguntas/inicio/index/<?= $fila->id ?>"><?= $fila->titulo ?></a></li>
                        		<li class="divider"></li>
                        	<?php
                        		}
                        	?>
                        </ul>
                    </li>
                    <li><a href="<?= base_url() ?>convocatorias/inicio/">EVENTOS</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<?php
						foreach($consulta->result() as $fila){
					?>
					<div class="col-md-8">
						<h1 style="text-shadow: 3px 4px 1px #00283a;color: #fff;text-align: center;"><i><?= $fila->titulo ?></i></h1>
					</div>
					<div class="col-md-4">
						<img class="img-responsive img-thumbnail"  src="<?= base_url() ?>estilos/img/admision1.jpg" alt="About Us">
					</div>
				</div>
			</div>
		</div>
	
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-8 prueba1" style="border-radius: 10px 10px 10px 10px;background-color: #ebebe0;color: #00283a;">
						<br><br>
						<p style="text-align: justify; font-size: 20px; line-height: 150%;">
							<?= $fila->descripcion ?>
						</p><br><br>
						<a href="<?= base_url('public/img') . '/' . $fila->img?>" alt="img04"><img class="zoom1" style="width: 100%; height: auto; " src="<?= base_url('public/img') . '/' . $fila->img?>" alt="img04"></a>
						<br><br>
						<h2>REQUISITOS</h2>
						<p style="text-align: justify; font-size: 20px; line-height: 150%;">
							<?= $prueba=nl2br($fila->requisitos)?>
						</p>
						<?php
							if (!empty($fila->convocatoria)) 
							{
						?>
							<a href="<?= base_url('public/archivos') . '/' . $fila->convocatoria  ?>" class="btn btn-info" role="button">VER CONVOCATORIA</a>
								
						<?php   
						}
						?>
						<a href=""></a>	
					</div>
					<?php
					}
					?>
					<div class="col-sm-4">
						<div class="sidebar" style="background-color: #F0F0F0;">
							<div class="sidebar-widgets">
								<ul>
									<li class="widget widget-categories" style="position: relative; margin-bottom: 40px; list-style: none;">
										<h3 class="widget-title">
											<span class="main-color"><u><b>Ver Tambien</b></u></span>
										</h3>
										<div class="widget-content" style="overflow: hidden; display: block;">
											<ul style="list-style: none; margin: 0px; padding: 0px;">
											<?php
												foreach($consulta1->result() as $fila){
											?> 
												<li style="border-top: 0px; padding: 10px; border-bottom:1px rgba(0,0,0,.1) solid; display: list-item;">
													<a href="<?= base_url() ?>politicas/inicio/display/<?= $fila->id ?>" style="text-decoration: none; color: #444; background: transparent;"><?= $fila->titulo ?></a>
												</li>
											<?php
											}
											?>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<img class="img-responsive img-thumbnail" src="<?= base_url() ?>estilos/img/admision_0.jpg" alt="About Us">
					</div>
				</div>
			</div>
		</div>
<hr>
	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
			
		    	<div class="row">
				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contacto</h3>
		    			<p class="contact-us-details">
	        				<b>Direccion:</b> AQUI VA LA DIRECCION<br/>
	        				<b>Telefono:</b>AQUI VA EL NUMERO<br/>
	        				<b>Email:</b> <a href="mailto:info@yourcompanydomain.com">AQUI EL CORREO</a>
	        			</p>
		    		</div>				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Siguenos en las redes sociales</h3>
						<p>Nos puedes seguir en las siguientes redes sociales.</p>
		    			<div>
		    				<img src="<?= base_url() ?>estilos/img/icons/facebook.png" width="32" alt="Facebook">
		    				<img src="<?= base_url() ?>estilos/img/icons/twitter.png" width="32" alt="Twitter">
		    				<img src="<?= base_url() ?>estilos/img/icons/linkedin.png" width="32" alt="LinkedIn">
							<img src="<?= base_url() ?>estilos/img/icons/rss.png" width="32" alt="RSS Feed">
						</div>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2017  Bootstrap HTML Template. By Coor_Academica
		    			</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<<?= base_url() ?>estilos/js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="<?= base_url() ?>estilos/js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="<?= base_url() ?>estilos/js/jquery.easing.min.js"></script>
		<script src="<?= base_url() ?>estilos/js/scrolling-nav.js"></script>		

    </body>
</html>