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

<!-- Custom styles for this template -->
<link href="{{ asset('css/app.css') }}"  rel="stylesheet">

<!-- Scripts -->
<script>
        window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
