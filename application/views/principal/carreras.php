    <hr>
        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
					<div class="section-title">
						<h1>CARRERAS</h1>
					</div>
					<ul class="grid cs-style-3">
					<?php
						foreach ($consulta->result() as $fila) 
					{
					?>
						<div class="col-md-4 col-sm-6">
							<figure>
								<img src="<?= base_url('public/img') . '/' . $fila->img?>" alt="img04">
								<figcaption>
									<h3>Carrera:</h3>
									<span><?= $fila->nombre ?></span>
									<a href="<?= base_url('public/archivos') . '/' . $fila->file  ?>">Saber Mas</a>
								</figcaption>
							</figure>
			        	</div>
			        <?php
						}
					?>			
					</ul>
	        	</div>
	        </div>
	    </div>		
	<hr>