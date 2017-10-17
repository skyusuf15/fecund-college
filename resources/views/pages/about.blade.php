@extends('layouts.app')


@section('page-content')

<!-- about-top -->

	<div class="agile-about-top" id="blockHere">

	</div>
<!-- //about-top -->


<!--count-->
    <div class="count-agileits">
        <div id="particles-js"></div>

        <div class="count-grids">
            <h3 class="tittle-w3">Handling <span>your needs</span> with care</h3>
            <div class="count-bgcolor-w3ls">
                <div class="col-md-4 count-grid">
                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                    <div class="count hvr-bounce-to-bottom">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1052' data-delay='.5' data-increment="100">1052</div>
                        <span></span>
                        <h5>Products available</h5>
                    </div>
                </div>
                <div class="col-md-4 count-grid">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <div class="count hvr-bounce-to-bottom">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='372' data-delay='.5' data-increment="100">372</div>
                        <span></span>
                        <h5>Clients come back</h5>
                    </div>
                </div>
                <div class="col-md-4 count-grid">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <div class="count hvr-bounce-to-bottom">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='105209' data-delay='.5' data-increment="100">105209</div>
                        <span></span>
                        <h5>Site members</h5>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="clearfix"></div>

    </div>
<!--count-->

@endsection



@section('script')
    <script type="text/javascript">
        var data = {!! $contents !!}
        var htmlContent = '';
        if(data.length === 0){
            htmlContent += '<div class=inner-block><div class="error-404"><div class="error-page-left"><img class="responsive" src="{{ url('images/errors/page-under-construction.jpg') }}" alt="page under construction image"></div></div></div>';
        }
        else{
            $.each(data, function(i,v){
                var title = v.content_title.split(' ');
                let titleH = '';
                for(let k = 0; k<title.length; k++){
                    (k%2===0)? titleH +=  '<span>'+ title[k] + '</span> ': titleH += title[k] +' ';
                }

                htmlContent +='<div class="container"><h2 class="tittle-w3">' + titleH + '</h2><div class="about-section">'+v.content+'<div class="clearfix"> </div></div></div>';
            });
        }
        
        $('#blockHere').html(htmlContent);

    </script>
@endsection