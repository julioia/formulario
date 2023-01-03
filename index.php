<?php require("conexion.php");?>
<DOCTYPE html> 
<meta charset="UTF-8">
<html> 	
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>index</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">     			
	</head>
<body>
    <div align=center>
<form method="POST" action="index.php">
<table width="200" >
  <tbody>
    <tr>
      <td><label>Nombres:</label></td>
      <td><input type="text" name="nombres" class="form-control" placeholder="Ingrese su nombre"><br/></td>
    </tr>
    <tr>
      <td><label>Apellidos:</label></td>
      <td><input type="text" name="apellidos" class="form-control" placeholder="Ingrese su apellido"><br /></td>
    </tr>
    <tr>
      <td><label>Identificacion:</label></td>
      <td><input type="text" name="identificacion" class="form-control" placeholder="Ingrese identificacion"><br /></td>
    </tr>
    <tr>
      <td><label>Telefono:</label></td>
      <td><input type="number" name="telefono" class="form-control" placeholder="Ingrese su numero telefono"><br /></td>
    </tr>
    <tr>
      <td><label>Direccion:</label></td>
      <td><input type="text" name="direccion" class="form-control" placeholder="Ingrese su direccion"><br /></td>
    </tr>
    <tr>
      <td><label>correo:</label></td>
      <td><input type="email" name="correo" class="form-control" placeholder="Ingrese su correo"><br /></td>
    </tr>
    <tr>
      <td><label>fecha:</label></td>
      <td><input type="date" name="fecha" class="form-control" placeholder="Ingrese fecha"><br /></td>
    </tr>
    <tr>
      <td><label>pais:</label></td>
      <td><input type="text" name="pais" class="form-control" placeholder="Ingrese pais"><br /></td>
    </tr>
    <tr>
      <td><label>ciudad:</label></td>
      <td><input type="text" name="ciudad" class="form-control" placeholder="Ingrese ciudad"><br /></td>
    </tr>
    <tr>
      <td><label>region:</label></td>
      <td><input type="text" name="region" class="form-control" placeholder="Ingrese region"><br /></td>
    </tr>

  </tbody>
</table>			
	<br><input type="submit" name="insert" className="btn btn-success" value="Guardar"><br>
    <hr/>
	
	<?php
		if(isset($_POST['insert'])){
			                  $nombres=$_POST['nombres'];
                        $apellidos=$_POST['apellidos'];
                        $identificacion=$_POST['identificacion'];
                        $telefono=$_POST['telefono'];
                        $direccion=$_POST['direccion'];
                        $correo=$_POST['correo'];
                        $fecha=$_POST['fecha'];
                        $pais=$_POST['pais'];
                        $ciudad=$_POST['ciudad'];
                        $region=$_POST['region'];

                        

			$insertar ="INSERT INTO normas (nombres,apellidos,identificacion,telefono,direccion,correo,fecha,pais,ciudad,region) 
            VALUES('".$_POST['nombres']."','".$_POST['apellidos']."','".$_POST['identificacion']."','".$_POST['telefono']
            ."','".$_POST['direccion']."','".$_POST['correo']."','".$_POST['fecha']."','".$_POST['pais']."','".$_POST
            ['ciudad']."','".$_POST['region']."')";

			$ejecutar = sqlsrv_query($conn, $insertar);

			if($ejecutar){
				echo "<h3>Datos insertados correctamente</h3>";
			}

		}

	?>
	 	
	<table width="300" border="1" align="center" >
  <tbody>
      <th>Id</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Identificacion</th>
      <th>Telefono</th>
      <th>Direccion</th>
      <th>Fecha</th>
      <th>Correo</th>
      <th>Pais</th>
      <th>Ciudad</th>
      <th>Region</th>
	<br>
	<?php
	$query = "SELECT * FROM normas";
	$res = sqlsrv_query($conn, $query);
	
	while ($row=sqlsrv_fetch_array($res)){
		?>
	   
    <tr>
      <td><?=$row[0]?></td>
      <td><?=$row[1]?></td>
      <td><?=$row[2]?></td>
      <td><?=$row[3]?></td>
      <td><?=$row[4]?></td>
      <td><?=$row[5]?></td>
      <td><?=$row[6]?></td>
      <td><?=$row[7]?></td>
      <td><?=$row[8]?></td>
      <td><?=$row[9]?></td>
    </tr>


    <?php
	              }
	             ?>
  </tbody>
		
		<?php
		//codigo para eliminar datos en la base de datos
	if (isset($_POST['eliminar']))
	{
	$serverName = "F22IA";
	$connectionInfo = array( "Database"=>"validar");
	$conn = sqlsrv_connect( $serverName, $connectionInfo);
	if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}
	$sql = "DELETE FROM normas WHERE identificacion";

	sqlsrv_query($conn, $sql);
		
	{
				echo "<h3>Datos eliminados</h3>";
			}
		
	}
?>

</table>
	