<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T-BIKE</title>
    <!-- =================== META =================== -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../img/favicon.png">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- =================== STYLE =================== -->
<?php
use Illuminate\Support\Facades\Route;
$routeName = Route::currentRouteName();
?>
    @if ($routeName === 'index' )
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-grid.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slick.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}"> 
    @elseif ($routeName === 'gallery' )
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">   
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @elseif ($routeName === 'sbike')
    <link rel="stylesheet" href="{{asset('css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">   
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @else
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">   
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @endif
    <!-- =================== END STYLE =================== -->
</head>
<body id="home">
    <!--================ PRELOADER ================-->
    <div class="preloader-cover">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--============== PRELOADER END ==============-->
    <!-- =================== HEADER =================== -->
        <header class="header">
        <a href="#" class="nav-btn">
            <span></span>
            <span></span>
            <span></span>
        </a>
        <div class="top-panel">
            <div class="container">
                <div class="top-panel-cover">
                    <ul class="header-cont">
                        <li><a href="tel:+212677846064"><i class="fa fa-phone"></i>+212677846064</a></li>
                        <li><a href="mailto:soufiantamim22@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>soufiantamim22@gmail.com</a></li>
                    </ul>
                    <ul class="icon-right-list">
                        <li><a class="header-like" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>2</span></a></li>
                        <li><a class="header-user" href="{{ url('/profile') }}" ><i class="fa fa-user{{ Request::route()->getName() == 'profile' ? '' : ' active' }}" aria-hidden="true"></i></a></li>
                        <li><a class="header-cart" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-menu">
            <div class="container">
                <a href="{{ route('index') }}" class="logo"><img src="../img/favicon.png" alt="logo"></a>
                <nav class="nav-menu">
                    <ul class="nav-list">
                        <li class="{{ Request::route()->getName() == 'index' ? 'active' : '' }}"><a href="{{ route('index') }}">Home</a></li>
                        <li class="{{ Request::route()->getName() == 'bikes' ? 'active' : '' }}"><a href="{{ route('bikes') }}">bikes</a></li>
                        <li class="{{ Request::route()->getName() == 'gallery' ? 'active' : '' }}"><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li class="{{ Request::route()->getName() == 'about' ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                        <li class="{{ Request::route()->getName() == 'contact' ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li class="{{ Request::route()->getName() == 'profile' ? 'active' : '' }}"><a href="{{ url('/profile') }}">Profile</a></li>
                            @else
                                <li class="{{ Request::route()->getName() == 'login' ? 'active' : '' }}"><a href="{{ route('login') }}">Log in</a></li>
                                @if (Route::has('register'))
                                    <li class="{{ Request::route()->getName() == 'register' ? 'active' : '' }}"><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        </header>
    <!-- =================== HEADER END =================== -->
