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
                            <a class="page-scroll" href="MiPerfil.php">MI PERFIL</a>
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
                <li> <a href="catalogoTecno.php"><span>Tecnologia</span></a>
                </li>
                <li> <a href="catalogoHogar.php"><span>Hogar</span></a></li>
                <li><a href="catalogoToys.php" class="use">Jueguetes</a></li>
            </ul>
        </div>

        <div class="container">

            <!-- Introduction Row -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"></h2>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Juguetes/ajedrez.jpg" alt="Tablero de ajedrez"></a>
                    <h3>Tablero de ajedrez</h3>
                    <small>Madera de ebano</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Juguetes/baraja.png" alt="Vestido rojo"></a>
                    <h3>Baraja de yugioh</h3>
                    <small>Juego de cartas</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Juguetes/carro.jpeg" alt="Carro"></a>
                    <h3>Carro</h3>
                    <small>Para todas las edades</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Juguetes/gui.jpg" alt="Guitarra"></a>
                    <h3>Guitarra</h3>
                    <small>Juegute plastico</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Juguetes/legos.jpeg" alt="Legos"></a>
                    <h3>Paquete de legos</h3>
                    <small>Legos multicolores</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Juguetes/manos.jpeg" alt="Manos"></a>
                    <h3>Manos de juguete</h3>
                    <small>Hulk</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Juguetes/mascara.jpeg" alt="Mascara"></a>
                    <h3>Mascara</h3>
                    <small>Capitan America</small>
                </div>

                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Juguetes/moto.jpeg" alt="Camisa"></a>
                    <h3>Moto</h3>
                    <small>Play Doh</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Juguetes/mu%C3%B1eca.jpeg" alt="Barbie doll"></a>
                    <h3>Muñeca</h3>
                    <small>Barbie girl</small>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <a href="pago.php"><img class="img-circle img-responsive img-center" src="../img/Juguetes/oso.jpeg" alt="Tedy bear"></a>
                    <h3>Oso</h3>
                    <small>Peluche</small>
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
