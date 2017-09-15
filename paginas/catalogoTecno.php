<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Catálogo</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/LogoSupportYou.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/estiloCatalogo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <main>
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="../paginas/MiPerfil.html"><img id="estilo_logo" alt="logo" src="../img/LogoSupportYou.png"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <br>
                    <ul class="nav navbar-nav navbar-right">

                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="MiPerfil.html">MI PERFIL</a>
                        </li>
                       <li>
                            <?php
                                echo"<a class='page-scroll' href='logout.php'>SALIR</a>"
                            ?>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div id="magenta">
            <h2>Cátalogo</h2>
        </div>

        <div id="nav"> <a href="#nav" title="Show navigation">Show navigation</a> <a href="#" title="Hide navigation">Hide navigation</a>
            <ul class="clearfix">
                <li><a href="catalogo.php">Ropa</a></li>
                <li> <a href="catalogoTecno.php" class="use"><span>Tecnologia</span></a>
                </li>
                <li> <a href="catalogoHogar.php"><span>Hogar</span></a></li>
                <li><a href="catalogoToys.php">Jueguetes</a></li>
            </ul>
        </div>

        <div class="container">

            <!-- Introduction Row -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"></h2>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Tecno/audifonos.jpeg" alt="Audifonos"></a>
                    <h3>Audifonos</h3>
                    <small>Audifonos 500w</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Tecno/celular.jpg" alt="Celular"></a>
                    <h3>Nuevos Telefonos</h3>
                    <small>LG</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Tecno/reloj.jpg" alt="Reloj"></a>
                    <h3>Reloj</h3>
                    <small>Cassio</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Tecno/tablet.png" alt="Tablet"></a>
                    <h3>Tablet</h3>
                    <small>12 pulgadas</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Tecno/camara.jpg" alt="Camara"></a>
                    <h3>Camara</h3>
                    <small>Sony</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Tecno/laptop.jpeg" alt="Laptop"></a>
                    <h3>Laptop</h3>
                    <small>Windows</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Tecno/usb.jpg" alt="Abrigo azul"></a>
                    <h3>USB</h3>
                    <small>New Frontier</small>
                </div>

                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Tecno/parlantes.jpg" alt="Camisa"></a>
                    <h3>Parlantes</h3>
                    <small>LG</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Tecno/gb.jpg" alt="Game boy"></a>
                    <h3>Game boy</h3>
                    <small>SP</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Tecno/radio.jpeg" alt="Radio"></a>
                    <h3>Radio</h3>
                    <small>Green peace</small>
                </div>
            </div>
        </div>
    </main>
    <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <footer id="footer1">
        <p class="copyright text-muted small">Copyright &copy; SupportYou 2017. All Rights Reserved</p>

    </footer>
</body>

</html>
