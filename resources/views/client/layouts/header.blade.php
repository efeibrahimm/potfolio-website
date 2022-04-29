<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.designesia.com/themes/jonna/index-particle.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 09:55:49 GMT -->
<head>
    <meta charset="utf-8">
    <title>{{$settings->title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$settings->content}}">
    <meta name="tags" content="{{$settings->tags}}">
    <meta name="author" content="Can Holat">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{asset('jonna/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('jonna/css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('jonna/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('jonna/css/owl.theme.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('jonna/css/owl.transitions.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('jonna/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('jonna/css/style.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('jonna/css/coloring.css')}}" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="{{asset('jonna/css/colors/red.css')}}" type="text/css">
</head>

<body id="homepage" class="homepage">

    <div id="wrapper" class="fullwidth no-padding">
		
		<div id="bg-overlay"></div>
		
        <div id="main">

            <!-- TOP BAR BEGIN -->
            <div id="top-bar" class="transparent dark">

                <div id="logo">
                    Can Holat
                </div>

                <nav>
                    <ul id="mainmenu">
                        <li><a href="{{url('/')}}#section-home" class="active"><span>01</span>Home</a></li>
                        <li><a href="#section-services"><span>02</span>Services</a></li>
                        <li><a href="#section-experiences"><span>03</span>Experiences</a></li>
                        <li><a href="#section-portfolio"><span>05</span>Portfolio</a></li>
                        <li><a href="#section-blog"><span>06</span>Blog</a></li>
                        <li><a href="#section-contact"><span>07</span>Contact</a></li>
                    </ul>
                </nav>

                <span id="menu-btn">
					<span class="lt"></span>
					<span class="lm"></span>
					<span class="lb"></span>
				</span>

                <div id="mp-col">
                    <a href="images/{{$cv->file}}" class="btn-download light" download><span class="id-color" target="_blank"><i class="fa fa-file-pdf-o"></i></span>Download CV</a>
                </div>

                <div class="clearfix"></div>

            </div>
            <!-- TOP BAR CLOSE -->

            <!-- CONTENT BEGIN -->
            <div id="content">

                <div class="page-deco">{{$settings->phone}}</div>

                <div class="social-icons-fixed">
                    <div class="sc-inner">
                        <a href="{{$settings->facebook}}" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="{{$settings->instagram}}" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                        <a href="{{$settings->twitter}}" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="{{$settings->linkedin}}" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a href="{{$settings->email}}" target="_blank"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
