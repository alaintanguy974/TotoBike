<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bike Stores</title>

    <link rel="icon" type="image.jpg" alt="logo Bike Store" href="../../public/img/icons/LogoHaro.jpg" />

    <link href="{{asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">

    <script src="{{ asset('js/app.js') }}" deffer></script>
    <script src="{{ asset('js/custom.js') }}" deffer></script>

    <script src="../js/main.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="/js/complex.js"></script>



    <style>
        textarea {
            resize: none;
        }

    </style>
</head>

<body>
    @yield('contenu')
</body>

</html>
