
<?php 

	$vNombre=$_POST['txtNombre'];
	$vApellido=$_POST['txtApellido'];
	$vDireccion=$_POST['txtDireccion'];
	$vtipo=$_POST['tipo'];
	$vmunicipio=$_POST['municipio'];



	$Conexion = mysql_connect('localhost','root','MARIACRISTINA');
	mysql_select_db('ClientesDB', $Conexion);

/*
	echo "$vNombre";
	echo "$vApellido";
	echo "$vDireccion";
	echo "$vtipo";
	echo "$vmunicipio";

	if (mysql_select_db('ClientesDB', $Conexion)) 
	
		echo "Conexion realizada";
	else
		echo "SIN CONEXION";*/

		
	$query = "INSERT INTO Cliente (Nombre, Apellido, Direccion, TipoCliente_id,Municipio_id) VALUES ('$vNombre','$vApellido','$vDireccion',$vtipo,$vmunicipio)";

	if (mysql_query($query)) 
		echo "Datos Insertados";
	else
		echo "NO se pudo insertar";


	echo $query;
 ?>

 
<script language="javascript">window.location="index.php";</script>



