<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title', config('app.name'))</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="public/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="public/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="public/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="public/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/public/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
@include('alert')

<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="public/images/loading.gif" alt="#"/></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="{{route('index')}}"><img src="public/images/logo.png" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item {{active_link('index')}}">
                                    <a class="nav-link" href="{{route('index')}}">Home</a>
                                </li>
                                <li class="nav-item {{active_link('about')}}">
                                    <a class="nav-link" href="{{route('about')}}">About</a>
                                </li>
                                <li class="nav-item {{active_link('what-we-do')}}">
                                    <a class="nav-link" href="{{route('what-we-do')}}">What we do</a>
                                </li>
                                <li class="nav-item {{active_link('pricing')}}">
                                    <a class="nav-link" href="{{route('pricing')}}">Pricing</a>
                                </li>
                                <li class="nav-item {{active_link('contact')}}">
                                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                                </li>
                                <li class="nav-item {{active_link('calendar')}}">
                                    <a class="nav-link" href="{{route('calendar')}}">Calendar</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-2">
                    <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header inner -->
<!-- end header -->

@yield('content')
<!--  footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Passages of Lorem Ipsum available</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Call : +012334567890</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                    </ul>
                </div>
                <div class=" col-md-3 col-sm-6">
                    <h3>About </h3>
                    <p class="variat">There are many variations of passages of Lorem Ipsum available, but the majority have suffered le</p>
                </div>
                <div class=" col-md-3 col-sm-6">
                    <h3>Nail Salon  </h3>
                    <p class="variat" >There are many variations of passages of Lorem Ipsum available, but the majority have suffered le</p>
                </div>
                <div class="col-md-2 col-sm-6">
                    <h3>Useful Link</h3>
                    <ul class="link_menu">
                        <li class="active"><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('about')}}"> About</a></li>
                        <li><a href="{{route('what-we-do')}}">What we do</a></li>
                        <li><a href="{{route('pricing')}}">Pricing</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Subscribe</h3>
                    <form class="bottom_form">
                        <a class="right_btn" href="Javascript:void(0)"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <p >There are many variations of passages </p>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <p>© {{$date_year}} All Rights Reserved. Design by  <a href="https://html.design/"> Free Html Templates</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="public/js/jquery.min.js"></script>
<script src="public/js/bootstrap.bundle.min.js"></script>
<script src="public/js/jquery-3.0.0.min.js"></script>
<!-- sidebar -->
<script src="public/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="public/js/custom.js"></script>
</body>
</html>

