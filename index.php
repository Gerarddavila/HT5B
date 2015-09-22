<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="css/bootstrap.spacelab.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.spacelab.min.css">
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body style="padding-top : 60px;">

<!-- Barra de Navegacion -->

<nav class="navbar navbar-inverse navbar-fixed-top" role = "navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                               
      </button>

      <a class="navbar-brand" href="#">Hoja de Trabajo 5B</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="mostrar.php">Mostrar </a></li>
        <li><a href="info.html">Informacion</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <ul class= "nav navbar-nav navbar-right">
     <li><a href="#">
      <span class="glyphicon glyphicon-leaf"></span>Administrador</a>
    </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Fin Barra Navegacion -->


<div class="container-fluid">
   <div class="row">
    <div class="col-md-5">

<!-- Formulario-->

         
<form action = "ingresar.php" method="POST" class="form-horizontal">
      <fieldset>
          <legend>Clientes</legend>

          <div class="form-group">   
            <label class="col-lg-2 control-label">Nombre</label>
            <div class="col-lg-10">
              <input name="txtNombre" class="form-control" placeholder="Nombre" type="text">
            </div>
          </div>
          

          <div class="form-group">
            <label class="col-lg-2 control-label">Apellidos</label>
            <div class="col-lg-10">
              <input name="txtApellido" class="form-control"  placeholder="Apellidos" type="text">
            </div>
          </div>
          

         <div class="form-group">
            <label class="col-lg-2 control-label">Direccion</label>
            <div class="col-lg-10">
              <input name="txtDireccion" class="form-control"  placeholder="Direccion" type="text">
            </div>
          </div>
          
          <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Tipo de Cliente</label>
            <div class="col-lg-3">        
            <select name="tipo" class="form-control" id="select">
               <?php
                  $conexion = mysql_connect('localhost','root',"MARIACRISTINA");

                  mysql_select_db("ClientesDB",$conexion);

                  $query = "SELECT * FROM TipoCliente";

                  $record = mysql_query($query);

                  while ($dato = mysql_fetch_array($record)) 
                  {
                    echo "<option value='".$dato['id']."'>".$dato['Tipo']."</option>";
                  }

                ?>
              </select>
          </div>
            </div>
            
            <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Municipio</label>
            <div class="col-lg-5">        
            <select name="municipio" class="form-control" id="select">
                 <?php
                  $conexion = mysql_connect('localhost','root',"MARIACRISTINA");

                  mysql_select_db("ClientesDB",$conexion);

                  $query = "SELECT * FROM Municipio";

                  $record = mysql_query($query);

                  while ($dato = mysql_fetch_array($record)) 
                  {
                    echo "<option value='".$dato['id']."'>".$dato['Municipio']."</option>";
                  }

                ?>

              </select>
          </div>
            </div>

   
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-success">Guardar</button>
            </div>
          </div>
      </fieldset>
</form>


    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>

<!-- Formulario-->

<!-- Fin row -->
</body>
</html>