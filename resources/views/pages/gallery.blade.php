@extends('layouts.app')


@section('page-content')        <!--team-->
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
        for(var k = 0; k<dataLen; k+=4){
             buildHtml = '<div class="team-row">';
             let len;
              (dataLen < 4)? len = dataLen : len = 4;
            for(var j=0; j<len; j++){
                var imageurl = "{{ url('/') }}" + data[j].image;
                buildHtml += '<div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s"><h5>'+ data[j].fullname +'</h5><p>'+ data[j].note +'</p><div class="social-bnr-agileits about-agile"><ul><li><a href="www.facebook.com/'+ data[j].facebook_id +'"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><li><a href="'+ data[j].twiiter_id +'"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><li><a href="'+ data[j].linkedin_id +'"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li></ul></div><div class="team-img"><img src="'+ imageurl +'" alt=""></div></div>';
            }

            buildHtml += '<div class="clearfix"> </div></div>';
            dataLen -= 4;
            console.log(buildHtml);
        }
        $('.container').eq(1).append(buildHtml);
    </script>
@endsection