<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba php</title>

    <!--CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- JS-->
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</head>
<body>

    @include('sections/header')

    @include('sections/navbar')


    <div class="container mb-20">
        @include('sections/titulo')
    </div>

    <div class="container">

       @include('sections/content')
    </div>

    <div class="container-fluid plr-0">
       @include('sections/footer')
    </div>
</body>
</html>