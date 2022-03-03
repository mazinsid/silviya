<!DOCTYPE html>
<html lang="{{LaravelLocalization::getCurrentLocale()}}">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<title>{{__('header.company name')}}</title>
		<!-- Loading third party fonts -->
		<link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,700')}}" rel="stylesheet" type="text/css">
		<link href="{{ asset('fonts/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/style.css')}}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
		<script src="{{ asset('js/ie-support/html5.js')}}"></script>
		<script src="{{ asset('js/ie-support/respond.js')}}"></script>
<style>
    #primary_nav_wrap
    {
        margin-top:15px
    }

    #primary_nav_wrap ul
    {
        list-style:none;
        position:relative;
        float:left;
        margin:0;
        padding:0
    }

    #primary_nav_wrap ul a
    {
        display:block;
        color:#333;
        text-decoration:none;
        font-weight:700;
        font-size:12px;
        line-height:32px;
        padding:0 15px;
        font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif
    }

    #primary_nav_wrap ul li
    {
        position:relative;
        float:left;
        margin:0;
        padding:0
    }

    #primary_nav_wrap ul li.current-menu-item
    {
        background:#ddd
    }

    #primary_nav_wrap ul li:hover
    {
        background:#f6f6f6
    }

    #primary_nav_wrap ul ul
    {
        display:none;
        position:absolute;
        top:100%;
        left:0;
        background:#fff;
        padding:0
    }

    #primary_nav_wrap ul ul li
    {
        float:none;
        width:200px
    }

    #primary_nav_wrap ul ul a
    {
        line-height:120%;
        padding:10px 15px
    }

    #primary_nav_wrap ul ul ul
    {
        top:0;
        left:100%
    }

    #primary_nav_wrap ul li:hover > ul
    {
        display:block
    }
</style>
        <style>
            /* -------------- CSS --------------- */
            #lang-switch img {
                width: 32px;
                height: 32px;
                opacity: 0.5;
                transition: all .5s;
                margin: auto 3px;
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            #lang-switch img:hover {
                cursor: pointer;
                opacity: 1;
            }

            .fr_lang,
            .en_lang {
                display: none;
                transition: display .5s;
            }

            /* Language */
            .active-lang {
                display: flex !important;
                transition: display .5s;
            }

            .active-flag {
                transition: all .5s;
                opacity: 1 !important;
            }















            /* ------------------ Useless ------------------ */
            /* Don't copy/past this. It's just a cosmetic. */

            * {
                margin: 0;
                padding: 0;
            }

            body {
                 background-repeat: no-repeat;
                background-size: 100%;
                background-attachment: fixed;
            }

            .main {
                background-color: white;
                width: 1000px;
                margin: 0 auto;
                padding: 40px;
                min-height: 500px;
                box-shadow: 0 0 15px 0px black;
                border-left: 1px solid grey;
                border-right: 1px solid grey;
                padding-top: 70px;
            }
            .main h2 {
                justify-content: center;
            }
            .main h3 {
                background-color: #151515;
                padding: 10px;
                border-radius: 8px 8px 0 0;
                color: white;
                margin-top: 20px;
            }
            .main p {
                padding: 20px;
                text-align: justify;
                background-color: rgba(0, 0, 0, 0.15);
                border: 1px solid grey;
            }

            #lang-switch {
                width: 100%;

                display: flex;
                justify-content: end;
                position: fixed;
            }
            #lang-switch h1 {
                margin: auto auto auto 0;
                color: white;
                font-family: "TW Cen MT";
                font-size: 25px;
                padding: 10px;
            }
        </style>
	</head>
	<body class="slider-collapse" >

		<div id="site-content ">
			<header class="site-header wow fadeInDown">
				<div class="container" >
					<div class="header-content ">
						<div class="branding">
							<img src="{{ asset('images/logo.png')}}" alt="Company Name" class="logo">
							<h1 class="site-title"><a href="{{route('welcome')}}">{{__('header.company name')}}</a></h1>
							<small class="site-description">{{__('header.Tag')}}</small>
						</div>

						<nav class="main-navigation " id="primary_nav_wrap">
                            <div id="lang-switch" class="align-items-lg-stretch" >

                            </div>
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item"><a href="{{route('welcome')}}">{{__('header.home')}}</a></li>
								<li class="menu-item"><a href="/about">{{__('header.About us')}}</a></li>
								<li class="menu-item"><a href="{{route('AllOffers')}}">{{__('header.Our Offer')}}</a></li>
								<li class="menu-item"><a href="{{route('AllTourisms')}}">{{__('header.Tourist Attractions')}}</a></li>
								<li class="menu-item"><a href="/contact">{{__('header.Contact')}}</a></li>

                                <li><a href="#">{{__('header.language')}}</a>
                                    <ul>
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li><a  hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{$localeCode}}
                                                </a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                </li>
                            </ul>
						</nav>

						<div class="social-links">
							<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
							<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
            </header>
            @yield('content')

            <footer class="site-footer wow fadeInUp">
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="widget">
									<h3 class="widget-title">{{__('header.About us')}}</h3>
									<p>{{__('header.About us text')}}</p>
								</div>
							</div>

							<div class="col-md-4 col-sm-6">
								<div class="widget">

									<ul class="list-arrow">
                                        <li class="menu-item"><a href="{{route('welcome')}}">{{__('header.home')}}</a></li>
                                        <li class="menu-item"><a href="/about">{{__('header.About us')}}</a></li>
                                        <li class="menu-item"><a href="{{route('AllOffers')}}">{{__('header.Our Offer')}}</a></li>
                                        <li class="menu-item"><a href="{{route('AllTourisms')}}">{{__('header.Tourist Attractions')}}</a></li>
                                        <li class="menu-item"><a href="/contact">{{__('header.Contact')}}</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="widget widget-customer-info">
									<h3 class="widget-title">{{__('header.Customer Service')}}</h3>
                                    <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="{{ asset('dummy/call.jpeg')}}" alt="" class="pull-left">
									<div class="cs-info">
										<p>{{__('header.Lorem ipsum')}}</p>
										<p>+1 421 458 321 <br> <a href="mailto:cs@companyname.com">cs@companyname.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                </div>
				<div class="footer-bottom">
					<div class="container">
						<div class="branding pull-left">
							<img src="{{ asset('images/logo-footer.png')}}" alt="Company Name" class="logo">
							<h1 class="site-title"><a href="index.html">{{__('header.company name')}}</a></h1>
							<small class="site-description">{{__('header.Tag')}}</small>
						</div>

						<div class="contact-links pull-right">
							<a href="https://goo.gl/maps/oQKxg"><i class="fa fa-map-marker"></i> 983 Avenue Street, New York</a>
							<a href="tel:+134453455345"><i class="fa fa-phone"></i> +1 344 5345 5345</a>
							<a href="mailto:contact@companyname.com"><i class="fa fa-envelope"></i> contact@companyname.com</a>
						</div>
					</div>
				</div>
				<div class="colophon">
					<div class="container">
						<p class="copy">{{__('header.Copyright')}}</p>
					</div>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->
		<script src="{{ asset('js/jquery-1.11.1.min.js')}}"></script>
		<script src="{{ asset('js/min/plugins-min.js')}}"></script>
		<script src="{{ asset('js/min/app-min.js')}}"></script>
		<script src="{{ asset('js/app.js')}}"></script>
		<script src="{{ asset('js/plugins.js')}}"></script>

	</body>
<script>
    $(document).ready(function(){

        // By default
        $('.en_lang').addClass("active-lang");
        $('#lang-switch .en').addClass("active-flag");

        // Function switch
        $(function() {
            // French button
            $("#lang-switch .fr").click(function() {
                // Enable French
                $('.fr_lang').addClass("active-lang");

                // Disable English
                $('.en_lang').removeClass("active-lang")

                // Active or remove the opacity on the flags.
                $('#lang-switch .fr').addClass("active-flag");
                $('#lang-switch .en').removeClass("active-flag");
            });

            // English button
            $("#lang-switch .en").click(function() {

                // Enable English
                $('.en_lang').addClass("active-lang");

                // Disable French
                $('.fr_lang').removeClass("active-lang")

                // Active or remove the opacity on the flags.
                $('#lang-switch .en').addClass("active-flag");
                $('#lang-switch .fr').removeClass("active-flag");
            });
        });
    });

</script>
</html>
