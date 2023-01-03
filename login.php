<?php require("conexion.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div align=center>
    <form method="POST" action="login.php">
        <p>
        <p>
    <label>usuario:</label>
    <input type="text" placeholder="Ingrese su usuario" size='50' name="usuario" />
    <p>
    <div></div>
    <label>clave:</label>
    <input type="password" placeholder="Ingrese su clave" size='50' name="clave"/>
    <div></div>
    <p>
    <input type="submit" name="insert" class="btn btn-success" value="Guardar">
    </form>
</body>
</html>


<?php
		if(isset($_POST['insert'])){
			            $usuario=$_POST['usuario'];
                        $clave=$_POST['clave'];
  
                        $insertar ="INSERT INTO control (usuario,clave)
                        VALUES('".$_POST['usuario']."','".$_POST['clave']."')";

                        $ejecutar = sqlsrv_query($conn, $insertar);

                        if($ejecutar){
                            header("Location:index.php");
                        }
            
        }
            
?>