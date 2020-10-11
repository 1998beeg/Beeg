<?php
session_start();
include("conexion.php");
if (isset($_POST['documento']) && !empty($_POST['documento']) && isset($_POST['pw']) && !empty($_POST['pw']) && isset($_POST['tipo_usuario']) && !empty($_POST['tipo_usuario'])) 
{
	$con=mysqli_connect($host,$user,$pw) or die("Problemas al conectar el servidor");
	mysqli_select_db($con,$db) or die("Problemas al conectar la bd");
	$sel=mysqli_query($con,"SELECT documento, pw, tipo_usuario FROM users WHERE documento='$_POST[documento]' ");
	$sesion=mysqli_fetch_array($sel);
 
if ($_POST['pw'] == $sesion['pw'])
 {
	
	if ($_POST['tipo_usuario'] == $sesion['tipo_usuario'] && $_POST['tipo_usuario'] == '1') {
		$_SESSION['username']=$_POST['documento'];
		echo'<script type="text/javascript">
			alert("Sesión exitosa ADM");
			window.location.href="../../entornos/administrador/index.php";
			</script>';		
	} else if ($_POST['tipo_usuario'] == $sesion['tipo_usuario']  && $_POST['tipo_usuario'] == '2') {
		$_SESSION['username']=$_POST['documento'];
		echo'<script type="text/javascript">
			alert("Sesión exitosa ENT");
			window.location.href="../../entornos/entrenador/index.html";
			</script>';	
	}
	else if ($_POST['tipo_usuario'] == $sesion['tipo_usuario']  && $_POST['tipo_usuario'] == '3') {
		$_SESSION['username']=$_POST['documento'];
		echo'<script type="text/javascript">
			alert("Sesión exitosa CLI");
			window.location.href="../../entornos/cliente/index.html";
			</script>';	
	} else {
		echo'<script type="text/javascript">
		alert("Tipo de usuario incorrecto");
		window.location.href="../../inicio.html";
		</script>';	}
} else
 {
	echo'<script type="text/javascript">
	alert("Su documento o contraseña son incorrectas, digite nuevamente");
	window.location.href="../../inicio.html";
	</script>';	
 }
  
} else
 {
	echo "debes llenar los dos campos", $_POST['documento'], $_POST['pw'];
}
