<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RosterFly</title>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/ico" href="resources/img/favicon.ico"/>
    <!--Stylesheets-->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!--Scripts-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/cookies.js"></script>
    <script type="text/javascript" src="../js/index-js.js"></script>
</head>
<body>
<!--Header-->
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a href="index.html" class="navbar-brand text-uppercase font-weight-bold">Banco
                Santandor</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link text-uppercase font-weight-bold">Inicio
                            <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="branches-ATMs.html" class="nav-link text-uppercase font-weight-bold">Oficinas
                            y
                            Cajeros</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link text-uppercase font-weight-bold">Contacto</a>
                    </li>
                    <li class="nav-item"><a href="login.html" class="nav-link text-uppercase font-weight-bold">Iniciar
                            Sesi??n</a>
                    </li>
                    <li class="nav-item"><a href="register.html" class="nav-link text-uppercase font-weight-bold">Hazte
                            Cliente!</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
@yield('content')
<footer class="social-footer">
    <center><p>Banco Santandor 2021-2021??</p></center>
</footer>
</body>
</html>
