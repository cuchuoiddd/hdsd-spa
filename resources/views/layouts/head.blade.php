<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
{{--<link rel="icon" href="{{asset('images/favicon.ico')}}">--}}
<link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo.png')}}">

<title>8 bước để bắt đầu cùng AdamTech - Hướng dẫn sử dụng</title>

<!-- Bootstrap 4.0-->
<link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.css')}}">

<!-- Bootstrap extend-->
<link rel="stylesheet" href="{{asset('css/bootstrap-extend.css')}}">

<!-- Select2 -->
<link rel="stylesheet" href="{{asset('assets/vendor_components/select2/dist/css/select2.min.css')}}">

<!-- theme style -->
<link rel="stylesheet" href="{{asset('css/master_style.css')}}">

<!-- Minimalelite Admin skins -->
<link rel="stylesheet" href="{{asset('css/skins/_all-skins.css')}}">

<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css')}}">

@yield('head')

<!-- custom css -->
<link rel="stylesheet" href="{{asset('css/custom.css')}}">