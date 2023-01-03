<?php

if(isset($_GET['editar'])){
    $editar_identificacion =$_GET['editar'];

    $query = "SELECT * FROM normas WHERE id=".$editar_identificacion;
	$res = sqlsrv_query($conn, $query);

    $fila = sqlsrv_fetch_array($ejecutar);

    
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $identificacion=$_POST['identificacion'];
        $telefono=$_POST['telefono'];
        $direccion=$_POST['direccion'];
        $correo=$_POST['correo'];
        $fecha=$_POST['fecha'];
        $pais=$_POST['pais'];
        $ciudad=$_POST['ciudad'];
        $region=$_POST['region'];

}

?>

<br />

<div align=center>
<form method="POST" action="">
<table width="200" >
  <tbody>
    <tr>
      <td><label>Nombre:</label></td>
      <td><input type="text" name="nombre" class="form-control" value="Ingrese su nombre"><br/></td>
    </tr>
    <tr>
      <td><label>Apellido:</label></td>
      <td><input type="text" name="apellido" class="form-control" value="Ingrese su apellido"><br /></td>
    </tr>
    <tr>
      <td><label>Identificacion:</label></td>
      <td><input type="text" name="identificacion" class="form-control" value="Ingrese identificacion"><br /></td>
    </tr>
    <tr>
      <td><label>Telefono:</label></td>
      <td><input type="number" name="telefono" class="form-control" value="Ingrese su numero telefono"><br /></td>
    </tr>
    <tr>
      <td><label>Direccion:</label></td>
      <td><input type="text" name="direccion" class="form-control" value="Ingrese su direccion"><br /></td>
    </tr>
    <tr>
      <td><label>correo:</label></td>
      <td><input type="email" name="correo" class="form-control" value="Ingrese su correo"><br /></td>
    </tr>
    <tr>
      <td><label>fecha:</label></td>
      <td><input type="date" name="fecha" class="form-control" value="Ingrese fecha"><br /></td>
    </tr>
    <tr>
      <td><label>pais:</label></td>
      <td><input type="text" name="pais" class="form-control" value="Ingrese pais"><br /></td>
    </tr>
    <tr>
      <td><label>ciudad:</label></td>
      <td><input type="text" name="ciudad" class="form-control" value="Ingrese ciudad"><br /></td>
    </tr>
    <tr>
      <td><label>region:</label></td>
      <td><input type="text" name="region" class="form-control" value="Ingrese region"><br /></td>
    </tr>
     
  </tbody>
  
</table>
<input type="submit" name="insert" class="btn btn-success" value="Guardar">