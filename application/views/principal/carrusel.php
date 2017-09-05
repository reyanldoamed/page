<section id="main-slider" class="no-margin">
        <div  class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(<?= base_url() ?>estilos/img/slides/primero.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 ">
                                <div class="carousel-content centered lerolero">
                                    <?php
                                        foreach ($consulta->result() as $fila) 
                                        {
                                    ?>
                                    <h2 class="animation animated-item-1" style="text-align: center;">¡¡¡AVISO!!!</h2>
                                        <a href="#popup" class="popup-link"><p class="animation animated-item-2"><marquee><h3 style="color: white"><?= $fila->titulo ?></h3></marquee></p></a>
                                    
                                </div>
                                <div class="modal-wrapper" id="popup">
                                   <div class="popup-contenedor">
                                      <h3><?= $fila->titulo ?></h3>
                                      <h3><?= $fila->cuerpo ?></h3>
                                      <h4>esto esta vigente hasta:</h4>
                                      <h4><?= $fila->fecha_limite ?></h4>
                                      <a class="popup-cerrar" href="#">X</a>
                                   </div>
                                </div>
                                <?php
                                        }
                                    ?>
                                <!--<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">esto es un modal</h4>
                                            </div>
                                            <div class="modal-body">
                                                texto del moal
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?= base_url() ?>estilos/img/slides/segundo.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content centered lerolero">
                                    <?php
                                        foreach ($consulta->result() as $fila) 
                                        {
                                    ?>
                                    <h2 class="animation animated-item-1" style="text-align: center;">¡¡¡AVISO!!!</h2>
                                        <a href="#popup" class="popup-link"><p class="animation animated-item-2"><marquee><h3 style="color: white"><?= $fila->titulo ?></h3></marquee></p></a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?= base_url() ?>estilos/img/slides/tercero.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content centered lerolero">
                                    <?php
                                        foreach ($consulta->result() as $fila) 
                                        {
                                    ?>
                                    <h2 class="animation animated-item-1" style="text-align: center;">¡¡¡AVISO!!!</h2>
                                     <a href="#popup" class="popup-link"><p class="animation animated-item-2"><marquee><h3 style="color: white"><?= $fila->titulo ?></h3></marquee></p></a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->