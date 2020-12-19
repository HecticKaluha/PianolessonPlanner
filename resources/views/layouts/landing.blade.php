<!DOCTYPE html>
<!--[if IE 9]><html class="ie9 no-focus" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-focus" lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>Pianoplanning</title>

    <meta name="description" content="Website for planning">
    <meta name="author" content="Stefano Verhoeve">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicons/.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicons/.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicons/.png')}}">

    @stack('style')
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}

    <script src="https://kit.fontawesome.com/c33e61f09c.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>
<body>
<div id="page-loader"></div>
@include('layouts.nav')

@if($flash = session('message'))
    <div id="flash-message" class="alert alert-success" role="alert">{{$flash}}</div>
@endif
@if($errors->has('error'))
    <div id="flash-message" class="alert alert-danger" role="alert">{{$errors->first('error')}}</div>
@endif

@yield('content')

@include('layouts.footer')

<script src="{{asset('js/script.js')}}"></script>

@stack('scripts')


<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>

</body>
</html>
