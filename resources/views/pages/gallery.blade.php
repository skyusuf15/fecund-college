@extends('layouts.app')


@section('page-content')  <!--team-->
<div class="team">
    <div class="container">
        <h3 class="tittle-w3"><span>Our </span> Past <span>Student</span> Profile</h3>
    </div>
</div>
<!--//team-->
@endsection


@section('script')
    <script type="text/javascript">
 
        var data = {!! $contents !!}
        console.log(data);
        (data.length == 0) &&  swal({
          title: 'Page Not Available Yet!',
          text: 'No Content Available For This Page',
          type: 'success',
          timer: 5000
        });


        var buildHtml = '';
        var dataLen = data.length;
        for(var k = 0; k < dataLen; k++){

            buildHtml += '<div class="team-row">';
            let len=0;
            let minus = dataLen - k;
            (minus < 4)? len = minus : len = 4;
            
            for(var j=0; j<len; j++){
                buildHtml += '<div data-mh="group-name" class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s"><h5>'+ data[k].fullname +'</h5><p>'+ data[k].email +'</p><div class="social-bnr-agileits about-agile"><ul><li><a href="https://www.facebook.com/'+ data[k].facebook_id +'/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><li><a href="https://www.twitter.com/'+ data[k].twitter_id +'/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><li><a href="https://www.linkedin.com/in/'+ data[k].linkedin_id +'/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li></ul></div><div class="team-img"><img src="' + JSON.parse(data[k].image).secure_url +'" alt="" style="width:100% !important;height:100% !important;"></div></div>';
                ++k;
            }
            --k;
            buildHtml += '<div class="clearfix"> </div></div>';
        }

        $('.container').eq(1).append(buildHtml);

        $(function() {
           $('[data-mh="group-name"]').matchHeight();
        });
    </script>
@endsection