<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/panel.css">

    <!-- JS-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/panel.js"></script>

    <title>Pokepanel</title>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
                MENU
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                PokeAdmin
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="" target="_blank">Pokeweb</a></li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Usuario
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
        <div class="row">
            <!-- uncomment code for absolute positioning tweek see top comment in css -->
            <div class="absolute-wrapper"> </div>
            <!-- Menu -->
            <div class="side-menu">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Main Menu -->
                    <div class="side-menu-container">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#"> Dashboard</a></li>
                            <li><a href="#"> Pokemones</a></li>
                            <li><a href="#"> Usuarios</a></li>
                            <li><a href="#"> Perfil</a></li>

                            <!-- Dropdown-->
                            <!--<li class="panel panel-default" id="dropdown">-->
                                <!--<a data-toggle="collapse" href="#dropdown-lvl1">-->
                                    <!--<span class="glyphicon glyphicon-user"></span> Sub Level <span class="caret"></span>-->
                                <!--</a>-->

                                <!--&lt;!&ndash; Dropdown level 1 &ndash;&gt;-->
                                <!--<div id="dropdown-lvl1" class="panel-collapse collapse">-->
                                    <!--<div class="panel-body">-->
                                        <!--<ul class="nav navbar-nav">-->
                                            <!--<li><a href="#">Link</a></li>-->
                                            <!--<li><a href="#">Link</a></li>-->
                                            <!--<li><a href="#">Link</a></li>-->

                                            <!--&lt;!&ndash; Dropdown level 2 &ndash;&gt;-->
                                            <!--<li class="panel panel-default" id="dropdown">-->
                                                <!--<a data-toggle="collapse" href="#dropdown-lvl2">-->
                                                    <!--<span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>-->
                                                <!--</a>-->
                                                <!--<div id="dropdown-lvl2" class="panel-collapse collapse">-->
                                                    <!--<div class="panel-body">-->
                                                        <!--<ul class="nav navbar-nav">-->
                                                            <!--<li><a href="#">Link</a></li>-->
                                                            <!--<li><a href="#">Link</a></li>-->
                                                            <!--<li><a href="#">Link</a></li>-->
                                                        <!--</ul>-->
                                                    <!--</div>-->
                                                <!--</div>-->
                                            <!--</li>-->
                                        <!--</ul>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</li>-->

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>

            </div>
        </div>
    </div>

    <div class="col-md-10 content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form action="#" method="get">
                        <div class="input-group">
                            <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                            <input class="form-control" id="system-search" name="q" placeholder="Buscar por" required>
                            <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12">
                    <table class="table table-list-search">
                        <thead>
                            <tr>
                                <th>#id</th>
                                <th>Nombre</th>
                                <th>Especie</th>
                                <th>Tipo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Pikachu</td>
                                <td>Pikachu</td>
                                <td>Eléctrico</td>
                                <td>
                                    <a href="editar.html" class="btn btn-success btn-xs">Editar</a>
                                    <form action="delete.html">
                                        <input type="hidden" value="1">
                                        <buttom type="submit" class="btn btn-danger btn-xs">Eliminar</buttom>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>