<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fitness Steel System</title>
    <meta charset="utf-8">.

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../../css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    $conexion = mysqli_connect('localhost', 'root', '', 'registro_gimnasio');
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Fitness Steel System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="" class="nav-link">
                            <?php
                            //  $sql = "SELECT * from users";
                            //$result=mysqli_query($conexion,$sql);
                            //while ($mostrar=mysqli_fetch_array($result)) {
                            //  echo $mostrar['nombre'];}

                            ?>
                        </a></li>
                    <li class="nav-item"><a href="" class="nav-link">Trainers</a></li>
                    <li class="nav-item"><a href="usuarios.php" class="nav-link">Usuarios</a></li>
                    <li class="nav-item"><a href="index.php" class="nav-link">Registrar</a></li>
                    <li class="nav-item active"><a href="../../inicio.html" class="nav-link">Salir</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <section class="hero-wrap js-fullheight">
        <div class="overlay" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end">
                <div class="col-md-12 text-center ftco-animate">
                    <h1 class="mb-3 bread" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">USUARIOS</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home.</a></span> <span>Contact</span></p>
                </div>
            </div>
        </div>
    </section>
    <table bordercolor="white" align="center" width="70%">
        <tr>
            <td align="center"><span style="color: red;">Nombres</span></td>
            <td align="center"><span style="color: red;">Apellidos</span></td>
            <td align="center"><span style="color: red;">Documento</span></td>
            <td align="center"><span style="color: red;">Tipo de usuario</span></td>
            <td align="center"><span style="color: red;">Modificar</span></td>
            <td align="center"><span style="color: red;">Eliminar</span></td>
        </tr>
        <?php
        $tipouser;
        $sql = "SELECT * from users";
        $result = mysqli_query($conexion, $sql);
        while ($mostrar = mysqli_fetch_array($result)) {
            if ($mostrar['tipo_usuario'] == '1') {
                $tipouser = 'Administrador';
            } elseif ($mostrar['tipo_usuario'] == '2') {
                $tipouser = 'Entrenador';
            } elseif ($mostrar['tipo_usuario'] == '3') {
                $tipouser = 'Cliente';
            }
        ?>
            <tr>
                <td align="center"><span><?php echo $mostrar['nombre'] ?></span></td>
                <td align="center"><span><?php echo $mostrar['apellido'] ?></span></td>
                <td align="center"><span><?php echo $mostrar['documento'] ?></span></td>
                <td align="center"><span><?php echo $tipouser ?></span></td>
                <td align="center">
                    <button type="button" class="btn btn-warning" onclick="location.href='php/Registro/editar.php?id=<?php echo $mostrar['documento'] ?>'"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                        </svg></button></td>
                <td align="center"><span></span><button class="btn btn-danger"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-x-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM6.854 6.146a.5.5 0 1 0-.708.708L7.293 8 6.146 9.146a.5.5 0 1 0 .708.708L8 8.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 8l1.147-1.146a.5.5 0 0 0-.708-.708L8 7.293 6.854 6.146z" />
                        </svg></button></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Redes sociales</h2>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Recent Blog</h2>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> January 04, 2019</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> January 04, 2019</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Servicios</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Crossfit</a></li>
                            <li><a href="#" class="py-2 d-block">Aerobics</a></li>
                            <li><a href="#" class="py-2 d-block">Fitness</a></li>
                            <li><a href="#" class="py-2 d-block">Yoga</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Información</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <!--p>
                        < Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. >
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        < Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.>
                    </p-->
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>