<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>TITLE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3201106649415125"
            crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


    <!-- Stylesheets -->

    <link href="../common-css/bootstrap.css" rel="stylesheet">

    <link href="../common-css/ionicons.css" rel="stylesheet">

    <link href="../common-css/layerslider.css" rel="stylesheet">


    <link href="../01-homepage/css/styles.css" rel="stylesheet">
    <link href="../test.css" rel="stylesheet">

    <link href="../01-homepage/css/responsive.css" rel="stylesheet">
    <style>
        body{
            background-color: #212121;

        }
        h1,h6,p{
            color: lightgray !important;
        }
    </style>
</head>
<body>



<x-header/>

{{$slot}}
<x-footer/>




<!-- SCIPTS -->

<script src="../common-js/jquery-3.1.1.min.js"></script>

<script src="../common-js/tether.min.js"></script>

<script src="../common-js/bootstrap.js"></script>

<script src="../common-js/layerslider.js"></script>

<script src="../common-js/scripts.js"></script>
<script src="../test.js"></script>

</body>
</html>
