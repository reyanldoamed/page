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
                    <li>
                        <a class="active-menu" href="<?= base_url() ?>admi/home/eventos">AÑADIR EVENTO</a>
                    </li>
                    <li>
                        <a class="active-menu" href="<?= base_url() ?>admi/home/noticias">AÑADIR NOTICIAS</a>
                    </li>
                </ul>
            </div>
        </nav> 