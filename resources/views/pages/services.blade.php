@extends('layouts.app')


@section('page-content')

	<!-- features -->
	<div class="features">

	</div>
	<!-- //features -->
@endsection

@section('script')
    <script type="text/javascript">

        var data = {!! $contents !!};
        console.log(data);
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

	        	console.log(title);
	            htmlContent +='<div class="container"><div class="features-heading"><h3 class="tittle-w3">' + titleH + '</h3></div><div class="features-grids">'+v.content+'</div><div class="clearfix"> </div></div></div>';
	        });

        }

        $('.features').html(htmlContent);

    </script>
@endsection