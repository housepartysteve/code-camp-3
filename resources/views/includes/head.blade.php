<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="online interactive environment">
<meta name="author" content="Stephen McCarrick">
<link rel="icon" href="#">

<title>{{ config('app.name', 'Code Camp') }}</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Bootstrap core CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">


<!-- Custom styles for this template -->
<link href="{{ asset('css/app.css') }}"  rel="stylesheet">
<link href="{{ asset('css/jquery-ui.css') }}"  rel="stylesheet">
<link href="{{ asset('css/quiz-1.css') }}"  rel="stylesheet">

<style>
    #map {
        height: 400px;
        width: 100%;
    }
</style>

<!-- Scripts -->
<script src="https://use.fontawesome.com/6bf253363b.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/quiz-1.js') }}"></script>

<script>
        window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
<!--<script>
    $( function() {
        $( "#accordion" ).accordion();
    } );
</script> -->
<script>
$(document).ready(function(){
$("#hide").click(function(){
$("h6").hide();
});
$("#show").click(function(){
$("h6").show();
});
});
</script>