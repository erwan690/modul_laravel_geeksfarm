<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/material-design/css/bootstrap-material-design.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/material-design/css/ripples.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
</head>
<body style="padding-top:60px;">
  <!--bagian navigation-->
@include('shared.head_nav')
<!-- Bagian Content -->
<div class="container clearfix">
  <div class="row row-offcanvas row-offcanvas-left ">
<!--Bagian Kiri-->
    @include("shared.left_nav")
<!--Bagian Kanan-->
      <div id="main-content" class="col-xs-12 col-sm-9 main pull-right">

        <div class="panel-body">
        @if (Session::has('error'))
          <div class="session-flash alert-danger">
            {{Session::get('error')}}
          </div>
        @endif
        @if (Session::has('notice'))
          <div class="session-flash alert-info">
            {{Session::get('notice')}}
          </div>
        @endif
        @yield("content")
        </div>
    </div>

  </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/material-design/js/material.min.js') }}"></script>
    <script src="{{ asset('assets/material-design/js/ripples.min.js') }}"></script>
    <script src="{{ asset('js/layout.js') }}"></script>
</body>
</html>
