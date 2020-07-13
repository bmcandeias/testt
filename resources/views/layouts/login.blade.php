<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../../public/assetsGaia/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../../public/assetsGaia/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>RitaArte</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="{{asset('assetsGaia/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('assetsGaia/css/gaia.css')}}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assetsGaia/css/fonts/pe-icon-7-stroke.css')}}" rel="stylesheet">
</head>

<body>

@extends('Assets/navbar')



</body>

<div>
    <main class="py-4">
        @yield('content')
    </main>
</div>
@extends('Assets/footer')
<!--   core js files    -->
<script src="assetsGaia/js/jquery.min.js" type="text/javascript"></script>
<script src="assetsGaia/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="assetsGaia/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assetsGaia/js/gaia.js"></script>

</html>
