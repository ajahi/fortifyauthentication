<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('nepali.datepicker/css/nepali.datepicker.v4.0.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">

  <link rel="stylesheet" href="{{ asset('css2/lightbox.css') }}">
  <link rel="stylesheet" href="{{ asset('css2/lightbox.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css2/user.css') }}">
  <link rel="stylesheet" href="{{ asset('css2/tab.css') }}">
  <link rel="stylesheet" href="{{ asset('css2/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css2/navbar.css') }}">
  <!-- https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css -->

  <style>
    

    #f1-name-nep, .alekh_nep{
      font-family: aalekhNep, sans-serif !important;
      font-size:25px
    }

    .input-error-convocation {
      border-color: #f35b3f!important;
    }
  </style>

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini" style="overflow-x:hidden;">
<div class="wrapper">
  <!-- Navbar -->
  @include('components.admin.adminheader')
  <!-- /.navbar -->
  
      <!-- Main Sidebar Container -->
    @include('components.admin.adminsidebar')

<div class="content-wrapper">
  @yield('content')
</div>


@include('components.admin.adminfooter')