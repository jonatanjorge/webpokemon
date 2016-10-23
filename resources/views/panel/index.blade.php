<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="{!! asset('') !!}" />
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/panel.css">

    <!-- JS-->
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/panel.js"></script>

    <title>Pokepanel</title>
</head>
<body>

@include('panel.sections.navbar')


<div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
        @include('panel.sections.sidebar')
    </div>

    <div class="col-md-10 content">
        @include('panel.sections.errores')
        @yield('content')
    </div>
</div>

</body>
</html>