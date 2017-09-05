<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>C.A.admin</title>
    <!-- Bootstrap Styles-->
    <link href="<?= base_url() ?>estilos/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?= base_url() ?>estilos/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="<?= base_url() ?>estilos/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="<?= base_url() ?>estilos/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="<?= base_url() ?>estilos/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="<?= base_url() ?>estilos/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="<?= base_url() ?>estilos/assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="<?= base_url() ?>estilos/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?= base_url() ?>estilos/assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="<?= base_url() ?>estilos/assets/js/custom-scripts.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    
                </button>
                <a class="navbar-brand" href="index.php">Administrador</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
	                <li class="dropdown">
	                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
	                        <i class="glyphicon glyphicon-off""></i>
	                    </a>
	                    <ul class="dropdown-menu dropdown-user">
	                        <li style="float:right"><a style="text-decoration:none;" class="active" href="<?= base_url() ?>admi/home/logout"> <span class="glyphicon glyphicon-off">Salir</span></a></li>
	                    </ul>
	                </li>
          		</li>
            </ul>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="active-menu" href="<?= base_url() ?>admi/home/presentacion">MODIFICAR DATOS DE PRESENTACION</a>
                    </li>
                    <li>
                        <a class="active-menu" href="<?= base_url() ?>admi/home/politicas">MODIFICAR LAS POL. DE ADMISION</a>
                    </li>
                    <!--<li>
                        <a class="active-menu"><i class="fa fa-sitemap"></i> MENU DEL EXAMEN<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">PREGUNTAS DE MATEMÁTICAS<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="pregunta5.php"><span class="glyphicon glyphicon-import"></span>&nbsp;&nbsp;CARGAR PREGUNTAS IMAGENES</a>
                                    </li>
                                    <li>
                                        <a href="examalg.php"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;VER PREGUNTAS IMAGENES</a>
                                    </li>
                                    <li>
                                        <a href="imprimirm.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;IMPRIMIR PREGUNTAS</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>-->

                    <li>
                        <a class="active-menu" href="<?= base_url() ?>admi/home/carreras">MODIFICAR OFERTAS DE CARRERAS</a>
                    </li>
                    <li>
                        <a class="active-menu" href="<?= base_url() ?>admi/home/dudas">MODIFICAR DUDAS</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <h1 class="page-header">
  					<strong> <h1 align="center">"U.A.T.F"</h1></strong> 
                </h1>
				<center>               
                    <!--<div class="panel panel-default">
                        <div class="panel-heading">	 
                            <div class="">
             					<div class="alert alert-info">
       								<img src="Images/escudo.jpg" width="200" class="img-circle" >
                				</div>   
          					</div>
                		</div>
            		</div>-->
            	</center>
        	</div>
    	</div>
</body>
</html>
<!--<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <ul>
 	<li>
 		<a href="<?= base_url() ?>admi/home/logout">cerrar cession</a>
 	</li>
 </ul>
</body>
</html>-->