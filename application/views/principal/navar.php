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
                    <li class="active" ><a href="<?= base_url() ?>home/">INICIO</a></li>
                    <li><a href="<?= base_url() ?>presentacion/inicio/index/1">PRESENTACION</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MODALIDADES DE ADMISION&nbsp;&nbsp;<i class="icon-angle-down"></i></a>
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
                                foreach ($consulta->result() as $fila) 
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