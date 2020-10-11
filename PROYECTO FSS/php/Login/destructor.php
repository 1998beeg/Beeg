<?php

session_start();
if (isset($_SESSION['username']))
{
 echo "Puedes ver esta pagina";
 echo "<br><a href=destruir.php> cerrar sesion </a>";


}else
 {
 	echo "no puedes ver esta pagina, registrate e inicia sesión";
 	
 }

 



?>