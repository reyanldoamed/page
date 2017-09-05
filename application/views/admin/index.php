<!DOCTYPE html>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilos/home.css">-->
	<title>Login</title>
</head>
<body >
	<div id="inicio" >
        <div class="container"  >
       		<div class="row">
            	<div class="col-md-8 col-md-offset-2" >
              		<div class="panel panel-default">
                   		<div class="panel-heading" >
                            INTRODUSCA SUS DATOS
                   		</div>
                   		<div class="panel-body col-md-12">
                   			<div class="col-md-4">
                                <img  src="<?= base_url()?>estilos/img/login.jpg" style="width: 300px; height: 350px">
                            </div>
                       		<form class="form-horizontal col-md-8" action="<?= base_url() ?>admi/home/login/" method="post">
                       			<br>
                       			<br>
                       			<br>
                       			<br>
                       			<br>
                       			<br>
                                <div class="form-group">
                                    <label for="ci" class="col-md-5 control-label">CARNET</label>
                                    <div class="col-md-7">
                                       	<input  type="text" class="form-control" name="carnet" required placeholder="Carnet de Indentidad">
        							</div>
                                </div>
                                <div class="form-group">
                                    <label for="ci" class="col-md-5 control-label">CONTRASEÑA</label>
                                    <div class="col-md-7">
                                       	<input type="password" class="form-control" name="password" required placeholder="contraseña">
        							</div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 ">
	                                    <label  class="col-md-5 control-label" ></label>
	                                    <button type="submit" class="btn btn-primary col-md-7">INGRESAR</button>
                                    </div>
                                </div>
                       		</form>       
            			</div>
        			</div>
          		</div>
			</div>
		</div>
	</div>  	
</body>
</html>