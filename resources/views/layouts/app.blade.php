<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<title>{{ config('app.name', 'Fecund College') }} - @yield('title') </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fecund Turorial College core competence is to register and prepare students for all international examinations such as TOEFL, SAT 1 & 11, GRE, GMAT, PTE. etc. Admission placement in top universities/colleges in CANADA, USA, UK and EUROPE" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet"/>
<link href="{{ url('css/font-awesome.css') }}" rel="stylesheet"> 
<link href="{{ url('css/style.css') }}" rel="stylesheet"/>

<link href="{{ url('plugins/bootstrap-sweetalert/sweet-alert.css') }}" rel="stylesheet"/>
<!--web-fonts-->
<link href="{{ url('//fonts.googleapis.com/css?family=Montserrat:400,700') }}" rel="stylesheet">
<link href="{{ url('//fonts.googleapis.com/css?family=Lato:300,400,700') }}" rel="stylesheet">
<link href="{{ url('//fonts.googleapis.com/css?family=Tangerine:400,700') }}" rel="stylesheet">
<style type="text/css">
                /* Simple message styles customization */
        #errors {
            border-left: 5px solid #fd6239;
            padding-left: 15px;
            color:#ffffff;
            margin-bottom: 10px;
        }
        #errors li {
            list-style-type: none;
        }
        #errors li:before {
            content: '\b7\a0';
        }
        

        /*--error page start here--*/
.error-404 {
    text-align: center;
}
.error-404 h2 {
    font-size: 6em;
    color: #63C5CA;
}
.error-404 h2 {
    font-size:3em;
    color:#FC8213;
    margin: 0.5em 0em;
    font-family: 'Carrois Gothic', sans-serif;
}
.error-404 a {
    font-size: 1em;
    color: #fff;
    margin-top: 2em;
    background: #68AE00;
    padding: 0.5em 1em;
    display: inline-block;
}
.error-404 a:hover {
    background:#337AB7;
}
.error-404 {
    min-height: 620px;
    margin-top:2em;
}
.error-right h4 {
    font-size: 1.3em;
    color: #000;
}
</style>

<!--//web-fonts-->
</head>
<body>
<!-- banner -->
    <div class="banner home-banner1" id="home">
        <!-- header -->
        <div class="banner-top">
            <div class="social-bnr-agileits">
                <ul>
                    <li><a href="https://www.facebook.com/Fecundcollege/" target='_blank'><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/fecundcollege/?hl=en" target='_blank'><i class="fa fa-instagram" aria-hidden="true"></i></a></li>                    
                </ul>
            </div>

            <div class="contact-bnr-w3-agile">
                <ul>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:fecundcollege@gmail.com
">fecundcollege@gmail.com
</a></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>+234 7066931889</li>  
                    <li><i class="fa fa-phone" aria-hidden="true"></i>+234 8081267669</li>
                    <li>
                        <div class="search">
                            <input class="search_box" type="checkbox" id="search_box">
                            <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                            <div class="search_form">
                                <form action="#" method="post">
                                    <input type="search" name="Search" placeholder="Search..." required="" />
                                    <input type="submit" value="Send" />
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>


        <header>
            <div class="container">

            <!-- navigation -->
            <div class="w3_navigation">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="w3_navigation_pos">
                        <h1>
                        <a data-fetch="home.html"><span>F</span>ecund <span>C</span>ollege</a>
                            <small style="color:#fd6239">Tutorial And Home Tutors</small>
                        </h1>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--miranda">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item menu__item--current"><a href="/" data-fetch="home.html" class="menu__link">Home</a></li>
                            <li class="menu__item"><a href="/about" data-fetch="about.html" class=" menu__link">About</a></li>
                            <li class="dropdown menu__item">
                                <a class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/services/UTME">UTME / DE</a></li>
                                    <li><a href="/services/SSCE">SSCE (WAEC / NECO)</a></li>
                                    <li><a href="/services">HOME TUTORIAL</a></li>
                                    <li><a href="/services/ALEVEL">TOEFL, SAT,GRE & A'LEVEL</a></li>
                                    <li><a href="/services/INT-COLLEGES">INT'L COLLEGES</a></li>
                                    <li><a href="/services/OVERSEAS-ADMINSSION">OVERSEAS ADMINSSION</a></li>
                                </ul>
                            </li>
                            <li class="menu__item"><a data-fetch="#" class=" menu__link"></a></li>
                            <li class="menu__item"><a href="/gallery" data-fetch="gallery.html" class=" menu__link">Gallery</a></li>
                            <li class="menu__item"><a href="/contact" data-fetch="contact.html" class="menu__link">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>  
    </div>
    <!--<div class="clearfix"></div>-->
        <!-- //navigation -->
            </div>
        </header>
    <!-- //header -->
        @yield('slider')
    </div>
<!-- //banner -->
     <div id="container">

       @section('page-content')
           



        @show

    </div>

    <div class="copyright-wthree" style="margin-top: 20px;">
        <p>{{ date('Y') ." © ". config('app.name', 'Fecund College') ." " }}  Tutorial . All Rights Reserved | Design by <a href="https://skytechnology.000webhostapp.com/"> SKYTech </a></p>
    </div>
<!-- //Footer -->
    <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>



<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>    
<!-- //smooth scrolling -->
<script type="text/javascript" src="{{ url('js/jquery-2.1.4.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/numscroller-1.0.js') }}"></script>
<script src="{{ url('js/particles.js') }}"></script>
<script src="{{ url('js/app1.js') }}"></script>

<script src="{{ url('plugins/bootstrap-sweetalert/sweet-alert.min.js') }}"></script>


<!--gallery-->
<script type="text/javascript">
$(window).load(function() {
    
    $("#flexiselDemo1").flexisel({
        visibleItems:4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems:2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });
                                
});
</script>
<script type="text/javascript" src="{{ url('js/jquery.flexisel.js') }}"></script>
<!--gallery-->
<!-- Dropdown-Menu-JavaScript -->
<script>
$(document).ready(function(){

    $(".dropdown1").hover(            
        function () {
            alert('slidedown fast');
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Dropdown-Menu-JavaScript -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ url('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ url('js/easing.js') }}"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
$(".scroll").click(function(event){     
event.preventDefault();
$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
});
});
</script>
<!-- start-smoth-scrolling -->
<!--js for bootstrap working-->
<script src="{{ url('js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
$(document).ready(function() {
/*
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear' 
};
*/
                                
$().UItoTop({ easingType: 'easeOutQuart' });
                                
});
</script>
<!-- //here ends scrolling icon -->

<!-- script-for-menu -->
<script>   

$("span.menu").click(function(){
    $(".top-nav ul").slideToggle("slow" , function(){
    });
});

</script>
<!-- script-for-menu -->
@yield('script')
</body>
</html>