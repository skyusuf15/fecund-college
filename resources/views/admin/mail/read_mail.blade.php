@extends('layouts.admin')
@section('title')
View Message
@endsection

@section('content')


	<div class="mail-w3agile">
        <!-- page start-->
        <div class="row">

			@include ('admin.mail.mail_side_bar')


            <div class="col-sm-9 mail-w3agile">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                       <h4 class="gen-case"> {{ $id->email }}
                       			<small>{{ $id->guest_name }}</small>
                       </h4>
                    </header>
                    <div class="panel-body minimal">
                        <div class="mail-option">
                            <div class="chk-all">
                                <div class="pull-left mail-checkbox ">
                                    <input type="checkbox" class="">
                                </div>

                                <div class="btn-group">
                                    <a data-toggle="dropdown" href="" class="btn mini all">
                                        All
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href=""> None</a></li>
                                        <li><a href=""> Read</a></li>
                                        <li><a href=""> Unread</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="btn-group">
                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="" class="btn mini tooltips">
                                    <i class=" fa fa-refresh"></i>
                                </a>
                            </div>
                            <div class="btn-group hidden-phone">
                                <a data-toggle="dropdown" href="" class="btn mini blue">
                                    More
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=""><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                    <li><a href=""><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href=""><i class="fa fa-trash-o"></i> Delete</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a data-toggle="dropdown" href="" class="btn mini blue">
                                    Move to
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=""><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                    <li><a href=""><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href=""><i class="fa fa-trash-o"></i> Delete</a></li>
                                </ul>
                            </div>

                            <ul class="pull-right">
                                
                            </ul>
                        </div>
                        <div class="table-inbox-wrap" style="min-height: 730px;border-top: 10px solid #f0bcb4;">

                        	 <div class="panel-body" style="min-height: 200px;">
                                
                                <div class="panel-body minimal">
				                {{ $id->message }} 
                                </div> 


                                <div class="clearfix"></div>
                     



				             </div>

                        </div>
                    </div>

                </section>
            </div>












 <div class="fabs">
  <div class="chat">
    <div class="chat_header">
      <div class="chat_option">
      <div class="header_img">
        <img src="http://res.cloudinary.com/dqvwa7vpe/image/upload/v1496415051/avatar_ma6vug.jpg"/>
        </div>
        <span id="chat_head">{{ $id->email }}</span> <br> <span class="agent">{{ $id->guest_name }}</span> 
       <span id="chat_fullscreen_loader" class="chat_fullscreen_loader"><i class="fullscreen zmdi zmdi-window-maximize"></i></span>

      </div>

    </div>

    <div class="chat_body chat_login">
        <div id="summernote">Reply</div>
    </div>


    <div class="fab_field">
      <a id="fab_send" class="fab" data-msg_id={{ $id->id }}><i class="zmdi zmdi-mail-send"></i></a>
    </div>
  </div>
    <a id="prime" class="fab"><i class="prime zmdi zmdi-comment-outline"></i></a>
</div>












        </div>

        <!-- page end-->

@endsection

@section('script')
<script>
    $(document).ready(function() {

  $('#fab_send').on('click', function() {

        // Add loading state
        //$('.testdropdown').html('Loading please wait ...');

        // Get Messsage id
        var id = $(this).data('msg_id');
        // get reply message as a markup string
        var markupStr = $('#summernote').summernote('code');

        // Set request
        var url = "{{URL::to('message/reply/')}}/"+ id;
        var data = {
            reply: markupStr,
            _token:     '{{ csrf_token() }}'
          };

         $.post(url, data, function (result){
                console.log(result);
         });

  });

});

</script>

<!-- include summernote css/js-->
<script>
$(document).ready(function() {
	$('#summernote').summernote({
	  height: 300,                 // set editor height
	  minHeight: null,             // set minimum height of editor
	  maxHeight: null,  
      minWidth: 1000,             // set minimum height of editor
      maxWidth: null,            // set maximum height of editor
	  focus: true                  // set focus to editable area after initializing summernote
	});
});
</script>

<script>
$(document).ready(function() {
hideChat(0);

$('#prime').click(function() {
  toggleFab();
});


//Toggle chat and links
function toggleFab() {
  $('.prime').toggleClass('zmdi-comment-outline');
  $('.prime').toggleClass('zmdi-close');
  $('.prime').toggleClass('is-active');
  $('.prime').toggleClass('is-visible');
  $('#prime').toggleClass('is-float');
  $('.chat').toggleClass('is-visible');
  $('.fab').toggleClass('is-visible');  
}

  $('#chat_first_screen').click(function(e) {
        hideChat(1);
  });



  $('#chat_fullscreen_loader').click(function(e) {
      $('.fullscreen').toggleClass('zmdi-window-maximize');
      $('.fullscreen').toggleClass('zmdi-window-restore');
      $('.chat').toggleClass('chat_fullscreen');
      $('.fab').toggleClass('is-hide');
      $('.header_img').toggleClass('change_img');
      $('.img_container').toggleClass('change_img');
      $('.chat_header').toggleClass('chat_header2');
      $('.fab_field').toggleClass('fab_field2');
      $('.chat_converse').toggleClass('chat_converse2');
  });

function hideChat(hide) {
    switch (hide) {
      case 0:
            $('#chat_converse').css('display', 'none');
            $('#chat_body').css('display', 'none');
            $('#chat_form').css('display', 'none');
            $('.chat_login').css('display', 'block');
            $('.chat_fullscreen_loader').css('display', 'none');
             $('#chat_fullscreen').css('display', 'none');
            break;
      case 1:
            $('#chat_converse').css('display', 'block');
            $('#chat_body').css('display', 'none');
            $('#chat_form').css('display', 'none');
            $('.chat_login').css('display', 'none');
            $('.chat_fullscreen_loader').css('display', 'block');
            break;
    }
}

});
</script>

@endsection