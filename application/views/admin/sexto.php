
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <h1 class="page-header">
  					<strong> <h1 align="center">"U.A.T.F"</h1></strong> 
                </h1>
				<center>  
					<div class="panel panel-default">
                   		<div class="panel-heading" >
                            Cargar Una Noticia
                   		</div>
                        <div class="row">
                       		<div class="panel-body col-md-6">
                                <?php
                                    echo form_open_multipart('admi/home/insertarnoticias/');
                                    echo form_input_text('titulo','Ingrese el titulo ');
                                    echo form_input_textarea('descripcion','Ingrese una breve descricpcion ');
                                ?>
                                <label> Introduzca la fecha de culminacion</label><br>
                                    <input type="date" name="fechafin" id="fechafin"><br><br>
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
                                    echo form_submit("SUBIR NOTICIA DE CARRERA");
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
                                               <th>Cuerpo</th>
                                               <th>Fecha_limite</th>
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
                                                    <?= $fila->cuerpo ?>
                                                </td>
                                                <td>
                                                    <?= $fila->fecha_limite ?>
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