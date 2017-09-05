
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <h1 class="page-header">
  					<strong> <h1 align="center">"U.A.T.F"</h1></strong> 
                </h1>
                <center>
    				<div class="panel panel-default">
                        <div class="panel-heading">
                              MODIFICAR LAS POLITICAS DE ADMISION
                        </div>
                        <div class="row" >
                          	<div class="panel-body col-md-6" >
                                    <?php
                                        echo form_open_multipart('admi/home/insertarpol/');
                                     ?>  
                                    <label>Ingrese el Nombre de la Admision</label>
                                    <?php
                                        echo form_input_text('titulo','');
                                    ?>
                                    <label>Ingrese una breve descripcion</label>
                                    <?php
                                        echo form_input_textarea('descripcion','');
                                    ?>
                                    <div style="border:1px solid silver">
                                        <label>Selecciona Digrama de flujo </label>
                                        <?php
                                            echo form_input_file();
                                        ?>
                                    </div> 
                                    <label>Ingrese los Requisitos</label>
                                    <?php
                                        echo form_input_textarea('requisitos',''); 
                                    ?>
                                    <label>Ingrese el tipo de Admision</label>
                                    <?php
                                    echo form_input_select('tipo');
                                    $options = array('ordinaria'=> ordinaria ,'extraordinaria'=> extraordinaria);
                                    echo select_options($options);?><br><br>
                                    <?php
                                        foreach ($consulta1->result() as $fila)
                                         {
                                    ?>
                                    <input type="hidden" name="carnet" id="carnet" value="<?= $fila->ci ?>">
                                    <?php
                                        }
                                    ?>
                                    <?php
                                    echo form_submit("CARGAR POLITICA DE ADMISION");
                                    echo form_close();
                                    ?>    
                    	    </div>
                            <div class="panel-body col-md-6" > 
                                        <?php
                                        echo form_open_multipart('admi/home/updatepol/');?>
                                        <div class="form-group">
                                            <label for="carrera">Elija la carrera a la que pertenece el archivo que va subir</label>
                                            <select class="form-control" id="politica" name="politica">
                                                <?php
                                                    foreach ($consulta2->result() as $fila) 
                                                {
                                                ?>
                                                        <option value="<?= $fila->titulo ?>"><?= $fila->titulo ?></option>
                                                <?php
                                                }
                                                ?>                                    
                                            </select>
                                        </div>
                                        <div style="border:1px solid silver">
                                            <label>Seleccione la Convocatoria de la Modalidad </label>
                                            <?php
                                            echo form_input_file('selecciona el pdf ');
                                            ?>
                                        </div><br><br>
                                        <?php
                                        echo form_submit("CARGAR CONVOCATORIA");
                                        echo form_close();
                                        ?> 
                            </div>
                        </div>
                        <h2>tabla de modificaciones</h2>
                        <div class="row">
                            <div class="panel-body col-md-12" >
                                <div class="table-responsive" style="border-radius: 20px 20px 20px 20px; border: 3px solid whi">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                   <th>Titulo</th>
                                                   <th>descripcion</th>
                                                   <th>imagen</th>
                                                   <th>requisitos</th>
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
                </center>
        	</div>
    	</div>
    
</body>
</html>