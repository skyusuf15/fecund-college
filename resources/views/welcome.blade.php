@extends('layouts.app')


@section('slider')

            <div class="hideme">
            <!-- banner-text -->
            <div class="banner-text">
            </div>
            <!-- gallery -->
            <div class="gallery-ban" id="gallery">
                <div class="container">
                    <ul id="flexiselDemo1">
                        <li>
                            <div class="wthree_testimonials_grid_main">

                                <img src="images/slider/s1.jpg" alt=" " class="img-responsive" />
                            </div>
                        </li>
                        <li>
                            <div class="wthree_testimonials_grid_main">

                                <img src="images/slider/s2.jpg" alt=" " class="img-responsive" />
                            </div>
                        </li>
                        <li>
                            <div class="wthree_testimonials_grid_main">

                                <img src="images/slider/s3.jpg" alt=" " class="img-responsive" />
                            </div>
                        </li>
                        <li>
                            <div class="wthree_testimonials_grid_main">

                                <img src="images/slider/s4.jpg" alt=" " class="img-responsive" />
                            </div>
                        </li>
                        <li>
                            <div class="wthree_testimonials_grid_main">

                                <img src="images/slider/s5.jpg" alt=" " class="img-responsive" />
                            </div>
                        </li>
                       
                    </ul>

                </div>
            </div>
            <!-- //gallery -->
        </div>


@endsection



@section('page-content')
<div class="ab-w3l-about">

    <div class="container">

        <h3 class="tittle-w3"><span>Welcome to </span> Fecund</h3>

        <p class="para-w3l">Fecund is a mini college that aims in adding value to the young ones and touching their lives where it matters most. Join me,we are all part of Fecund.

        <p><a class="read" data-load="single.html">Read More</a></p>

    </div>

</div>



<!--services-section-->

<div class="services-w3layouts" id="services" style="background:#053671!important">

    <!-- //Stats -->

    <div class="col-md-6 agitsworkw3ls-grid " style="background:#053671!important">

        <h3 class="tittle-w3"><span>Our</span> Services</h3>

        <p class="para-w3l">Our Mission is to build a meaningful life with its student and give them the best legacy in life. TO BRING OUT THE BEST IN THEM AND TEACH THEM HOW TO DO IT THEMSELVES.</p>

        <div class="services-left-w3-agile">

            <h3 class="tittle-w3 sub-head"><span>Local </span></h3>

            <ul>

                <li><i class="fa fa-check" aria-hidden="true"></i>UTME (JAMB)</li>

                <li><i class="fa fa-check" aria-hidden="true"></i>SSCE (WAEC / GCE)</li>

                <li><i class="fa fa-check" aria-hidden="true"></i>NECO</li>

                <li><i class="fa fa-check" aria-hidden="true"></i>HOME TUTORIAL</li>
            </ul>

        </div>

        <div class="services-right-w3-agile">

            <h3 class="tittle-w3 sub-head">International</h3>

            <ul>

                <li><i class="fa fa-check" aria-hidden="true"></i>TOEFL, SAT & GRE</li>

                <li><i class="fa fa-check" aria-hidden="true"></i>OVERSEA ADMINSSION</li>

                <li><i class="fa fa-check" aria-hidden="true"></i>INTERNATIONAL COLLEGES</li>

                <li><i class="fa fa-check" aria-hidden="true"></i>A'LEVEL EXAMS</li>
            </ul>

        </div>

    </div>

    

    <!-- <div class="col-md-6 col-xs-12 ab-w3-agile-img img-responsive">
    </div> -->

    <div class="ab-w3-agile-info-text" style="background:#053671!important">

        <h3 class="tittle-w3">About<span> Fecund</span></h3>

        <p class="para-w3l">Fecund is a mini college that aims in adding value to the young ones and touching their lives where it matters most. Join me,we are all part of Fecund.</p>

        <div class="about-read">

            <a data-load="about.html">Learn More</a>

        </div>

    </div>



    <!-- //Stats -->

    <div class="clearfix"></div>

</div>





<!-- mail -->

<div class="mail">

    <div class="mail-grid1">

        <div class="container">

            <h3 class="tittle-w3">Contact <span>Info</span></h3>

            <div class="col-md-4 mail-agileits-w3layouts">

                <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>

                <div class="contact-right">

                    <p>Phone</p><span>+234 7066931889</span>

                </div>

            </div>

            <div class="col-md-4 mail-agileits-w3layouts">

                <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>

                <div class="contact-right">

                    <p>Email</p><a href="mailto:fecundcollege@gmail.com

">
    fecundcollege@gmail.com

                    </a>

                </div>

            </div>

            <div class="col-md-4 mail-agileits-w3layouts">

                <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>

                <div class="contact-right">

                    <p>Address</p><span>SHOP 41,<br /> IMOTA SHOPPING COMPLEX,<br /> IFAKO GBAGADA. LAGOS.</span>

                </div>

            </div>

            <div class="clearfix"></div>

        </div>

    </div>



    <div class="col-md-7 map ">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.6455495560404!2d3.3861276142434744!3d6.566343795250935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d7d5ca3af85%3A0xb1bd83b5a59533a2!2s57+Yetunde+Brown+Rd%2C+Gbagada%2C+Lagos!5e0!3m2!1sen!2sng!4v1495813214204" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>

    <div class="col-md-5 mail-grid1-form ">

        <h3 class="tittle-w3"><span>Send a </span>Message</h3>

        <form id="contact_form">

            {{ csrf_field() }}

                        <div class="form-group">
                <div class="col-xs-9">

                   
                @if (count($errors))
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                @endif

                </div>
            </div>

            <input type="text" name="guest_name" placeholder="Name" required="" value="{{ old('guest_name') }}" />

            <input type="email" name="email" placeholder="Email" required="" value="{{ old('email') }}" />

            <textarea name="message" placeholder="Type Your Text Here...." required="" >{{ old('message') }}</textarea>

            <input type="submit" id="send_msg" value="Submit">

        </form>

    </div>

    <div class="clearfix"></div>

</div>


<!--<div class="container">
    <div class="row">
        <svg viewBox="0 0 960 300">
            <symbol id="s-text">
                <text text-anchor="middle" x="50%" y="80%">FECUND</text>
            </symbol>
            <g class="g-ants">
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
            </g>
        </svg>
    </div>

    <div class="row">
        <address>
            author by: SKYTECH
        </address>
    </div>
</div>

<link href="css/animateSVG.css" rel="stylesheet" />-->

<!-- //mail -->

@endsection

@section('script')
<script src="js/load.js"></script>
<script type="text/javascript">
    var data = {!! $contents !!};
    console.log(data);
    var htmlContent = '';

        var title_0 = data[0].content_title.split(' ');
        var title_1 = data[1].content_title.split(' ');

        let titleH_0 = '';
        for(let k = 0; k<title_0.length; k++){
            (k%2===0)? titleH_0 +=  '<span>'+ title_0[k] + '</span> ': titleH_0 += title_0[k] +' ';
        }

        let titleH_1 = '';
        for(let k = 0; k<title_1.length; k++){
            (k%2===0)? titleH_1 +=  '<span>'+ title_1[k] + '</span> ': titleH_1 += title_1[k] +' ';
        }

        console.log(titleH_0,titleH_1);


    $('.ab-w3l-about').html('<div class="container"><h3 class="tittle-w3">'+ titleH_0 +'</h3>'+ data[0].content+'</div>');
    $('.mail-grid1').html('<div class="container"><h3 class="tittle-w3">'+ titleH_1 +'</h3>'+ data[1].content +'</div>');

</script>
@endsection