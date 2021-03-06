<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <!--- basic page needs ================================================== -->
    <meta charset="utf-8">
    <title>
        @yield('title', trans('text.app.loading'))
    </title>
    <meta name="description" content="">  
    <meta name="author" content="">

    <!-- mobile specific metas ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">


   <!-- script ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>

   <!-- favicons ================================================== -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
</head>
<body id="top">
    <!-- header ================================================== -->
    <header class="short-header">   
        <div class="gradient-block"></div>
        <div class="row header-content">
            <div class="logo">
               <a href="{{ route('home') }}">Pylbox</a>
            </div>

            <nav id="main-nav-wrap">
                <ul class="main-navigation sf-menu">
                    <li class="current"><a href="{{ route('home') }}" title="">{{ trans('text.app.home') }}</a>                         
                    <li class="has-children">
                        <a href="category.html" title="">{{ trans('text.app.collections') }}</a>
                        <ul class="sub-menu">
                            <li><a href="category.html">Game</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html" title="">{{ trans('text.app.about') }}</a></li>    
                    <li><a href="contact.html" title="">{{ trans('text.app.contact') }}</a></li>
                    <li class="has-children">
                        <a href="javascript:void(0);" title="">{{ trans('text.app.languages') }}</a>
                        <ul class="sub-menu">
                            <li><a href="{!! route('home.change-language', ['vi']) !!}">Tiếng Việt</a></li>
                            <li><a href="{!! route('home.change-language', ['en']) !!}">English</a></li>
                        </ul>
                    </li>                                      
                </ul>
            </nav> <!-- end main-nav-wrap -->

            <div class="search-wrap">
                <form role="search" method="get" class="search-form">
                    @csrf
                    <label>
                        <span class="hide-content">{{ trans('text.app.search') }}</span>
                        <input type="search" class="search-field" placeholder="{{ trans('text.app.type') }}" value="" name="keyword" title="{{ trans('text.app.search') }}" autocomplete="off">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>
                <a href="#" id="close-search" class="close-btn">{{ trans('text.app.close') }}</a>
            </div> <!-- end search wrap --> 

            <div class="triggers">
                <a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
                <a class="menu-toggle" href="#"><span>{{ trans('text.app.menu') }}</span></a>
            </div> <!-- end triggers -->    
        </div>          
    </header> <!-- end header -->

    @yield('content')

    <!-- footer ================================================== -->
    <footer>
        <div class="footer-main">
            <div class="row">  
                <div class="col-four tab-full mob-full footer-info">            
                    <h4>{{ trans('text.app.about') }}</h4>
                    <p>
                        {{ trans('text.app.box') }}
                    </p>
                </div> <!-- end footer-info -->

                <div class="col-two tab-1-3 mob-1-2 site-links">
                    <h4>{{ trans('text.app.site') }}</h4>
                    <ul>
                        <li><a href="#">{{ trans('text.app.about') }}</a></li>
                        <li><a href="#">{{ trans('text.app.faqs') }}</a></li>
                        <li><a href="#">{{ trans('text.app.terms') }}</a></li>
                        <li><a href="#">{{ trans('text.app.privacy') }}</a></li>
                    </ul>
                </div> <!-- end site-links -->  

                <div class="col-two tab-1-3 mob-1-2 social-links">
                    <h4>{{ trans('text.app.socials') }}</h4>
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com/pyl.walker/">Facebook</a></li>
                        <li><a target="_blank" href="https://www.instagram.com/_pylw/">Instagram</a></li>
                    </ul>
                </div> <!-- end social links --> 

                <div class="col-four tab-1-3 mob-full footer-subscribe">
                    <h4>{{ trans('text.app.subcribe') }}</h4>
                    <p>{{ trans('text.app.keep') }}</p>
                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">
                            @csrf
                            <input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="{!! trans('text.app.type_and_press') !!}" required=""> 
                            <input type="submit" name="subscribe" >
                            <label for="mc-email" class="subscribe-message"></label>
                        </form>
                    </div>              
                </div> <!-- end subscribe -->         
            </div> <!-- end row -->
        </div> <!-- end footer-main -->

        <div class="footer-bottom">
            <div class="row">
                <div class="col-twelve">
                    <div class="copyright">
                        <span>© Copyright Abstract 2016</span> 
                        <span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>
                        <span>Remake by <a href="https://www.instagram.com/_pylw/">Quân</a></span>               
                    </div>

                    <div id="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
                    </div>         
                </div>

            </div> 
        </div> <!-- end footer-bottom -->  
    </footer>  

    <div id="preloader"> 
        <div id="loader"></div>
    </div> 

   <!-- Java Script ================================================== --> 
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
