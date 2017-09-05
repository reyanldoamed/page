
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <h1 class="page-header">
  					<strong> <h1 align="center">"U.A.T.F"</h1></strong> 
                </h1> 
				<center>
					<div class="panel panel-default">
                   		<div class="panel-heading" >
                            INTRODUSCA DATOS A MODIFICAR DE LA PRESENTACION
                   		</div>
                   		<div class="panel-body col-md-12">
                       		<form class="form-horizontal col-md-8" action="<?= base_url() ?>admi/home/actualizarpre/" method="post">
                                <label for="ci" class="col-md-12 control-label" style="text-align: left;">¿QUE DESEA MODIFICAR ? </label><br><br>
                                <?php
                                    echo form_input_select('tipo');
                                    $options = array('MENSAJE'=> MENSAJE ,'MISION'=> MISION,'VISION'=> VISION,'OBJETIVO'=> OBJETIVO);
                                    echo select_options($options);
                                ?>
                                <div class="form-group">
                                    <div class="col-md-12">
                                       	<!--<input  type="text" class="form-control" name="carnet" required placeholder="INSERTE AQUI EL TEXTO">-->
                                        <textarea type="text" class="form-control" name="cuerpo" required placeholder="INSERTE AQUI EL TEXTO" rows="15" cols="50"></textarea>

        							</div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 ">
	                                    <button type="submit" class="btn btn-primary col-md-7">Actualizar</button>
                                    </div>
                                </div>
                       		</form>       
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