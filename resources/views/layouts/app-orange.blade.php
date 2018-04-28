<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="logo.png"/>

    <title>DOMINOS PIZZA</title>

    <!-- Fonts -->
    <!--link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'-->
    <link rel="stylesheet" href="{{ asset('recursos/plugins/font-awesome-4.5.0/css/font-awesome.min.css') }}" media="screen" title="no title" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('recursos/plugins/bootstrap/css/bootstrap.min.css') }}" charset="utf-8">
    <link rel="stylesheet" href="{{ asset('recursos/css/bayusa-app-orange.css') }}" rel='stylesheet' type='text/css'>
    
    <script src="{{asset('recursos/plugins/jquery/js/jquery-2.2.0.min.js')}}"></script>
    <script src="{{asset('recursos/js/menu.app.js')}}"></script>
    <!-- Styles -->
    <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"-->
    <style>
        #map { 
           display: block;
           width: 100%;
           height: 400px;
        }
    </style>

</head>
<body ng-app="menuApp">
    @if(\Session::has('message'))
        @include('store.partials.message')
    @endif
    
    @include('store.partials.navbar_menu-orange')
    
    @yield('content')
    
    @include('store.partials.footer')
    <!-- JavaScripts -->
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script-->

    <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script-->
    <script src="{{asset('recursos/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('recursos/plugins/magnific-popup/js/jquery.magnific-popup.min.js')}}"></script>    
    <script src="{{asset('recursos/js/main.js')}}"></script>
</body>
</html>
