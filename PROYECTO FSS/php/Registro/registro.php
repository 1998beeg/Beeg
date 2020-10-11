<?php
include("conexion.php");
if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['apellido']) && !empty($_POST['apellido']) && isset($_POST['pw']) && !empty($_POST['pw']) && isset($_POST['pw2']) && !empty($_POST['pw2']) && isset($_POST['cedula']) && !empty($_POST['cedula']) && isset($_POST['email']) && !empty($_POST['email']) && $_POST['pw'] == $_POST['pw2'])
{
 $con=mysqli_connect($host,$user,$pw) or die("problemas al conectar el servidor");
	mysqli_select_db($con,$db) or die ("Problemas al conectar");
	mysqli_query($con,"INSERT INTO users(nombre,apellido,pw,cedula,email) VALUES('$_POST[nombre]','$_POST[apellido]','$_POST[pw]','$_POST[cedula]','$_POST[email]')");
	/*echo "datos insertados<br />";

	echo "NOMBRE:".$_POST['nombre']."<br />";
	echo "APELLIDO:".$_POST['apellido']."<br />";
    echo "PASSWORD".$_POST['pw']."<br />";
	echo "CEDULA".$_POST['cedula']."<br />";
	echo "EMAIL".$_POST['email']."<br />";*/

	echo'<script type="text/javascript">
    alert("Registro exitoso");
    window.location.href="index.html";
    </script>';


}else{
	echo "Verifica que llenaste todos los campos y los password coinciden";
}

?>