<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Datos</title>
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
        <li><a href="mostrar.php">Mostrar</a></li>
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

<!-- Inicio Tabla-->
<div class="container-fluid">
   <div class="row">
    <div class="col-md-5">
      <table class="table table-hover table-responsive">
     <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Direccion</th>
          <th>Tipo</th>
          <th>Municipio</th>
        </tr>
      </thead>
    <tbody>
<?php 	
	$Conexion = mysql_connect('localhost','root','');
  mysql_select_db('ClientesDB', $Conexion);

	/*if (mysql_select_db('ClientesDB', $Conexion)) 
		echo "Conexion realizada";
	else
		echo "SIN CONEXION";
	*/

	$query="SELECT Cliente.Nombre, Cliente.Apellido, Cliente.Direccion, TipoCliente.Tipo ,Municipio.Municipio  
          FROM TipoCliente LEFT JOIN Cliente
          ON TipoCliente.id = Cliente.TipoCliente_id
          LEFT JOIN Municipio
          ON Municipio.id=Cliente.Municipio_id";

	$record = mysql_query($query);

	while ($dato = mysql_fetch_array($record)) {   
    
        echo "<tr>";
        echo "<td>".$dato['Nombre']."</td>";
        echo "<td>".$dato['Apellido']."</td>";
	      echo "<td>".$dato['Direccion']."</td>"; 
        echo "<td>".$dato['Tipo']."</td>"; 
        echo "<td>".$dato['Municipio']."</td> <br>"; 
        echo "<tr>";        
	}
 ?>
    </tbody>
   </table>
    </div>


<!-- Fin Tabla -->


    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>

<!-- Fin row -->

</body>
</html>