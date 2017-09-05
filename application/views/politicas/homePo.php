<!DOCTYPE html>
<html class="no-js">
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admision</title>

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
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

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
                    <li><a href="<?= base_url() ?>presentacion/inicio/index/1">PRESENTACION</a></li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown">MODALIDADES DE ADMISION&nbsp;&nbsp;<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu" style="background-color:#00283a; left: 0">
                            <li><a href="<?= base_url() ?>politicas/inicio/index/ordinaria">MODALIDADES DE ADMISION ORDINARIAS</a></li>
                            <li class="divider"></li>
                            <li><a href="<?= base_url() ?>politicas/inicio/index/extraordinaria">MODALIDADES DE ADMISION ESPECIALES</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="<?= base_url() ?>carreras/inicio/">CARRERAS</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PREGUNTAS FRECUENTES&nbsp;&nbsp;<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu" style="background-color:#00283a; left: 0">
                        <?php
                        	foreach ($consulta1->result() as $fila)
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
					<div class="col-md-8">
						<h1 style="text-shadow: 3px 4px 1px #00283a;color: #fff; text-align: center;"><i>Modalidades de admision    <?= $consulta2 ?></i></h1> 
					</div>
					<div class="col-md-4">
						<img class="img-responsive img-thumbnail"  src="<?= base_url() ?>estilos/img/admision.jpg" alt="About Us">
					</div>
				</div>
			</div>
		</div>
		
	

<hr>			
        
        <div class="section">
	        <div class="container">
	        	<div class="row prueba">
	        	<?php
	        		foreach ($consulta->result() as $fila)
	        		 {
	        	?>
	        		<div class="col-md-4 col-sm-6 zoom" >
	        			<div class="service-wrapper" style="border-radius: 50px 50px 50px 50px;background-color: #e0ebeb; height:250px; ">
		        			<i class="icon-pencil" style="color: #00283a"></i>
		        			<h3 ><?= $fila->titulo?></h3>
		        			<p>--------------------------------------------------------------------------</p>
		        			<p>Esta Admision esta dirigida a ......</p><br>
		        			<a href="<?= base_url() ?>politicas/inicio/display/<?= $fila->id ?>" class="btn">Leer mas</a>
		        		</div>
	        		</div>


	        		<?php	
	        		}
	        		?>
	        	</div>
	        </div>
	    </div>


<hr>
        
       


	    <!-- End Our Clients -->

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
        <script>window.jQuery || document.write('<script src="<?= base_url() ?>estilos/js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="<?= base_url() ?>estilos/js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="<?= base_url() ?>estilos/js/jquery.easing.min.js"></script>
		<script src="<?= base_url() ?>estilos/js/scrolling-nav.js"></script>		