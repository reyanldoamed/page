

        <div id="page-wrapper">
                    <div id="page-inner">
                        <h1 class="page-header">
          					<strong> <h1 align="center">"U.A.T.F"</h1></strong> 
                        </h1>
                        <center>
        				<div class="panel panel-default">
                           		<div class="panel-heading">
                                    AÑADIR EVENTOS
                           		</div>
                           		<div class="panel-body col-md-6">
                                    <?php
                                        echo form_open_multipart('admi/home/insertareventos/');
                                        echo form_input_text('titulo','Ingrese el Nombre del evento');
                                        echo form_input_textarea('descripcion','Ingrese una breve descripcion');
                                    ?>
                                    <label> Introduzca la fecha de inicio</label><br>
                                    <input type="date" name="fechaini" id="fechaini"><br><br>
                                    <label>Introduzca la fecha de culminacion</label><br>
                                    <input type="date" name="fechafin" id="fechafin">
                                    <?php
                                        echo form_input_text('url','Ingrese la direccion del video del evento');
                                        foreach ($consulta1->result() as $fila)
                                         {
                                    ?>
                                    <input type="text" name="carnet" id="carnet" value="<?= $fila->ci ?>">
                                    <?php
                                        }
                                    
                                        echo form_submit("CARGAR");
                                        echo form_close();
                                    ?>    
                    			</div><br>
                                <div class="panel-body" >
                                    <div class="table-responsive" style="border-radius: 20px 20px 20px 20px; border: 3px solid white">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                   <th>Titulo</th>
                                                   <th>Descripcion</th>
                                                   <th>URL del video</th>
                                                   <th>Fecha inicio</th>
                                                   <th>Fecha fin</th>
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
                                                            <?= $fila->video ?>
                                                        </td>
                                                        <td>
                                                            <?= $fila->fecha_inicio ?>
                                                        </td>
                                                        <td>
                                                            <?= $fila->fecha_final ?>
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
</body>
</html>