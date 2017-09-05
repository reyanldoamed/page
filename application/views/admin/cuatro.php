
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <h1 class="page-header">
  					<strong> <h1 align="center">"U.A.T.F"</h1></strong> 
                </h1>
                <center>
				<div class="panel panel-default">
                   		<div class="panel-heading">
                            MODIFICAR PREGUNTAS FRECUENTES
                   		</div>
                        <div class="row">
                       		<div class="panel-body col-md-6">
                                <?php
                                    echo form_open_multipart('admi/home/insertardudas/');
                                    echo form_input_text('titulo','Ingrese el titulo');
                                    echo form_input_textarea('descripcion','Ingrese una breve descripcion');
                                ?>
                                <div style="border: 1px solid silver">
                                    <label>Seleccionar el diagrama Correspondiente</label>
                                    <?php
                                        echo form_input_file('selecciona digrama de flujo ');
                                    ?>
                                </div>
                                <?php
                                    echo form_input_textarea('requisitos','Ingrese los requisitos');
                                ?>
                                <?php
                                    foreach ($consulta1->result() as $fila)
                                        {
                                    ?>
                                    <input type="text" name="carnet" id="carnet" value="<?= $fila->ci ?>">
                                    <?php
                                        }
                                    ?>
                                    <br><br>
                                <?php
                                    echo form_submit("CARGAR");
                                    echo form_close();
                                ?>    
                			</div>
                        </div>
                        <div class="row">
                        <div class="panel-body col-md-12" >
                            <div class="table-responsive" style="border-radius: 20px 20px 20px 20px; border: 3px solid white">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                           <th>Titulo</th>
                                           <th>Descripcion</th>
                                           <th>Imagen</th>
                                           <th>Requisitos</th>
                                           <th>Modificar</th>
                                           <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <?php
                                        foreach ($consulta->result() as $fila) 
                                        {
                                    ?>
                                            <tr>
                                                <td>
                                                    <?= $fila->titulo ?>
                                                </td>
                                                <td>
                                                    <?= $fila->descripcion ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('public/img') . '/' . $fila->img?>" alt="img04"><img class="zoom1" style="width: 100%; height: auto; " src="<?= base_url('public/img') . '/' . $fila->img?>" alt="img04"></a>
                                                </td>
                                                <td>
                                                    <?= $fila->requisitos ?>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary">modificar</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger">eliminar</button>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                        </div>
                </div> 
        	</div>
                                 
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
</body>
</html>