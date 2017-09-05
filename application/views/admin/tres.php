
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <h1 class="page-header">
  					<strong> <h1 align="center">"U.A.T.F"</h1></strong> 
                </h1>
				<center>  
					<div class="panel panel-default">
                   		<div class="panel-heading" >
                            CARGAR OFERTAS DE CARRERAS
                   		</div>
                        <div class="row">
                       		<div class="panel-body col-md-6">
                                <?php
                                    echo form_open_multipart('admi/home/insertarcar/');
                                    echo form_input_text('nombre','Ingrese el Nombre de la Carrera');
                                ?>
                                <div style="border:1px solid silver">
                                <label>Seleccione La Imagen De La Carrera</label>
                                <?php   
                                    echo form_input_file('Selecciona la Imagen de la Carrera');
                                ?>
                                </div>
                                <?php
                                    foreach ($consulta1->result() as $fila)
                                    {
                                ?>
                                <input type="hidden" name="carnet" id="carnet" value="<?= $fila->ci ?>">
                                <?php
                                    }
                                ?>
                                <br><br>

                                <?php
                                    echo form_submit("SUBIR OFERTA DE CARRERA");
                                    echo form_close();
                                ?> 
                			</div>
                            <div class="panel-body col-md-6">
                                    <?php
                                    echo form_open_multipart('admi/home/updatecar/');?>
                                    <div class="form-group">
                                        <label for="carrera">Elija la Carrera a la que pertenece el archivo que va subir</label>
                                        <select class="form-control" id="carrera" name="carrera">
                                            <?php
                                                foreach ($consulta->result() as $fila) 
                                            {
                                            ?>
                                                <option value="<?= $fila->nombre ?>"><?= $fila->nombre ?></option>
                                            <?php
                                            }
                                            ?>                                    
                                        </select>
                                    </div>
                                    <div style="border:1px solid silver">
                                        <label>Seleccione el archivo  de La Carrera</label>
                                        <?php
                                        echo form_input_file('selecciona el pdf ');
                                        ?>
                                    </div><br><br>
                                    <?php
                                    echo form_submit("CARGAR PDF");
                                    echo form_close();
                                    ?> 
                            </div>
                        </div>
                        <h2>Tabla de Modificaciones</h2>
                        <div class="row">
                            <div class="panel-body col-md-12" >
                                <div class="table-responsive" style="border-radius: 20px 20px 20px 20px; border: 3px solid white">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                               <th>Titulo</th>
                                               <th>Imagen</th>
                                               <th>Archivo</th>
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
                                                    <?= $fila->nombre ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('public/img') . '/' . $fila->img?>" alt="img04"><img class="zoom1 responsive" style="width: 100%; height: auto; " src="<?= base_url('public/img') . '/' . $fila->img?>" alt="img04"></a>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('public/archivos') . '/' . $fila->file?>" alt="img04"><img class="zoom1" style="width: 100%; height: auto; " src="<?= base_url('public/archivos') . '/' . $fila->file?>" alt="img04"></a>
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