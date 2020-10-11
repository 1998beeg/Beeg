<?php
include('conexion.php');
if (isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['apellido']) && !empty($_POST['apellido']) && isset($_POST['pw']) && !empty($_POST['pw']) && isset($_POST['pw2']) && !empty($_POST['pw2']) && isset($_POST['documento']) && !empty($_POST['documento']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['tipo_usuario']) && !empty($_POST['tipo_usuario']) && $_POST['pw'] == $_POST['pw2']) {

    $con = mysqli_connect($host, $user, $pw) or die("Problemas al conectar el servidor");
    mysqli_select_db($con, $db) or die("Problemas al conectar la bd");
    $sql = mysqli_query($con, "SELECT documento, pw, tipo_usuario FROM users WHERE documento='$_POST[documento]' ");

    while ($mostrar = mysqli_fetch_array($sql)) {

?>

        <div>
            <form>
                <input type="hidden" name="txtid" value="<?php echo $mostrar['documento'] ?>">
                <label>Usuario:</label><br>
                <input type="text" name="nombre" value="<?php echo $mostrar['nombre'] ?>"><br>
                <label>Email:</label><br>
                <input type="text" name="email" value="<?php echo $mostrar['email'] ?>"><br>
                <input type="submit" name="" value="Actualizar">
                <a href="usuarios.php">Regresar</a>

            </form>
    <?php }
} else {
    echo "no sirve esta porqueria";
}
    ?>

        </div>