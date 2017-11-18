<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!-- templatemo 416 xenon -->
<!--
Xenon Template
http://www.templatemo.com/tm-416-xenon
-->
<head>
    <meta charset="utf-8">
    <title>PcSolution - CT - Servicio Técnico, Desarrollo de software - Gualaceo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('thema/css/bootstrap.min.css') }}">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="{{ asset('thema/css/font-awesome.min.css') }}">
    
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Normailize Stylesheet -->
    <link rel="stylesheet" href="{{ asset('thema/css/normalize.min.css') }}">

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('thema/css/templatemo_style.css') }}">

    <script src="{{ asset('thema/js/vendor/modernizr-2.6.2.min.js') }}"></script>

</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    @include('fronted.partials.header')

    @include('fronted.partials.head-section')

    @include('fronted.partials.products')

    @include('fronted.partials.portfolio')

    <div id="bottom-section">
        @include('fronted.partials.promo')
        
        @include('fronted.partials.contact')
    </div>

    @include('fronted.partials.footer')
    
    @include('fronted.partials.scripts')

</body>
</html>
