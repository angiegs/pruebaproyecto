<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Support You</title>

    <!-- Bootstrap Core CSS -->
    <link rel="icon" type="image/png" href="../img/LogoSupportYou.png" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/landing-page.css" rel="stylesheet">

    <link rel="stylesheet"  href="../css/estiloCatalogo.css">
        <link rel="stylesheet"  href="../css/estiloCarro.css">
    
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>

    <body>
	 <nav class="navbar navbar-default navbar-fixed-top topnav">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                        echo"<a href='administrador.php'><img alt='LogoAplicacion' id='estilo_logo' src='../img/LogoSupportYou.png'></a>"
                  ?>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <br>
                <ul class="nav navbar-nav navbar-right">
    
                     <li>
                        <?php
                        echo"<a class='page-scroll' href='logout.php'>SALIR</a>"
                        ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        
        <div class="container">
            
               <div class="topspace">
                     <h3 class="botspace">Saludos (administrador)</h3>
                     <div class="row topspace center-block">
                     <div class="col-md-4  col-sm-6">
                        <a href="modelo/usuario/view.php" class="btn btn-info topspace">Usuarios</a>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <a href="bancos/view.php" class="btn btn-info topspace">Bancos</a>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <a href="modelo/CategoriaProducto/view.php" class="btn btn-info topspace">Categoria Productos</a>
                    </div>
                    
                     <div class="col-md-4  col-sm-6">
                        <a href="modelo/cliente/view.php" class="btn btn-info topspace2">Clientes</a>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <a href="ciudades/view.php" class="btn btn-info topspace2">Ciudades</a>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <a href="comentarios/view.php" class="btn btn-info topspace2">Comentarios</a>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <a href="cuentas/view.php" class="btn btn-info topspace2">Cuentas</a>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <a href="administrador/fundaciones/view.php" class="btn btn-info topspace2">Fundaciones</a>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <a href="fundacioncategorias/view.php" class="btn btn-info topspace2">Fundacion Categorias</a>
                    </div>
                     <div class="col-md-4  col-sm-6">
                        <a href="metodopago/view.php" class="btn btn-info topspace2">Metodos Pago</a>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <a href="paises/view.php" class="btn btn-info topspace2">Pais</a>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <a href="modelo/producto/view.php" class="btn btn-info topspace2">Productos</a>
                    </div>
                    <div class="col-md-4  col-sm-6">
                        <a href="modelo/rol/view.php" class="btn btn-info topspace2">Roles</a>
                    </div>
                    
                     <div class="col-md-4  col-sm-6">
                        <a href="ventas/view.php" class="btn btn-info topspace2">Ventas</a>
                    </div>
                </div>
               </div>
            </div>
    </body>
</html>
