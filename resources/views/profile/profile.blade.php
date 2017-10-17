@extends('layouts.admin')
@section('title')
Create Student Profile
@endsection

@section('styles')
<link href="{{ url('css/bootstrap-fileinput.css') }}" rel="stylesheet"> 
<link href="{{ url('css/components.min.css') }}" rel="stylesheet"> 

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Gallery</div>

                <div class="panel-body">
                    <div class="portlet-body">
                        

                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                     <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab" aria-expanded="true">Upload Avatar</a>
                                                    </li>

                                                    <li class="">
                                                        <a href="#tab_1_2" data-toggle="tab" aria-expanded="false">Personal Info</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                                                                        <!-- CHANGE AVATAR TAB -->
        <div class="tab-pane active" id="tab_1_1">
            <p> Please upload studet image before you proceed with the registration. <br /><br /></p>

        <form enctype="multipart/form-data">
            <div class="form-group">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="student image" /> </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                    <div>
                        <span class="btn default btn-file">
                            <span class="fileinput-new"> Select image </span>
                            <span class="fileinput-exists"> Change </span>
                            <input type="file" name="file"> </span>
                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                    </div>
                </div>
                <div class="clearfix margin-top-10">
                    <span class="label label-danger">NOTE! &nbsp;</span>
                    <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                </div>
            </div>
            <div class="margin-top-10">
                <a href="javascript:;" class="btn upload btn-primary"> Upload </a>
                <a href="javascript:;" class="btn default"> Remove </a>
            </div>
                                                            
</form>


    </div>
    <!-- END CHANGE AVATAR TAB -->

                    <!-- PERSONAL INFO TAB -->
                    <div class="tab-pane" id="tab_1_2">
                        <form role="form" id='student_data' action="/save/student">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label">FullName</label>
                                <input type="text" name="fullname" placeholder="John Doe" class="form-control"> </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="text" name="email" placeholder="johndoe@mail.com" class="form-control"> </div>
                            <div class="form-group">
                                <label class="control-label">Facebook ID</label>
                                <input type="text" name="facebook_id" placeholder="john.doe" class="form-control"> </div>
                            <div class="form-group">
                                <label class="control-label">Twitter ID</label>
                                <input type="text" name="twitter_id" placeholder="@JohnDoe" class="form-control"> </div>
                            <div class="form-group">
                                <label class="control-label">Linkedin ID</label>
                                <input type="text" name="linkedin_id" placeholder="JohnDoe15" class="form-control"> </div>
                            <div class="form-group">
                                <label class="control-label">Bio</label>
                                <textarea class="form-control" name='bio' rows="4" placeholder="John Doe, is an American singer, songwriter, actor, poet, guitarist and bass player. Doe co-founded LA punk band X, of which he is still an active member."></textarea>
                            </div>
                            <input type="hidden" name='image' >
                          
                            <div class="margiv-top-10">
                                <a href="javascript:;" class="btn submit green"> Submit 
                                </a>
                            </div>
                        </form>
                    </div>
                    <!-- END PERSONAL INFO TAB -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
<!-- <script src="{{ url('js/bootstrap-fileinput.js') }}"></script> -->
<script type="text/javascript">

$(document).on("ready", function() {

    $(".upload").on("click", function(e){

        var data = new FormData();
        data.append('file',$('[type="file"]')[0].files[0]);
        data.append('_token','{{ csrf_token() }}');
        jQuery.ajax({
            url: '/save/image',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST', // For jQuery < 1.9
            success: function(response){
                console.log(response.responseJSON);
                if(!$.isEmptyObject(response)){ 
                    var uRl = "{{ url('/') }}" + response.url;
                    $('[name="image"]').val(response.url);
                    console.log(uRl);
                  $('.fileinput-new').find('img')[0].src= uRl;
                }else{
                  var msg=response.url;
                  $(".error-msg").find("ul").html('');
                  $(".error-msg").css('display','block');
                  $.each( msg, function( key, value ) {
                    $(".error-msg").find("ul").append('<li>'+value+'</li>');
                  });
                }
            },
            error: function(data){
                var errors = data.responseJSON;
                console.log(errors);
                    swal({
                      title: 'Upload Failed!',
                      text: errors.file[0],
                      type: 'error',
                      timer: 5000
                    });
            }
        });

    });



     $(".submit").on("click", function(e){
    
        var url = "{{URL::to('save/student')}}/";
        var data = $('#student_data').serialize();
            
    // Set request
      $.post(url, data, function (result){
        console.log(result);
        swal({
              title: result.title,
              text: result.text,
              type: result.status,
              timer: 5000
        });   
        // $('#clear').trigger('click');
     }).error(function(error){
        console.log(error.responseJSON);
     }).fail(function(error){
        console.log(error.responseJSON);
     }); ;   
    
  });

    


});

</script>
@endsection
