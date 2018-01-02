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
                       <form role="form" id='student_data' action="/save/student" enctype="multipart/form-data">
                            {{ csrf_field() }} 

                    <div class="profile-content"> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light ">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                        </div>

                                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                                                                                                        
                    <!-- PERSONAL INFO TAB -->
                    <div class="tab-pane active" id="tab_1_1">

                    <p> Please upload student image before you proceed with the registration. <br /><br /></p>

                      <!--   <form enctype="multipart/form-data"> -->
                           <div class="form-group">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" id="t_preview" /> </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                <div>
                                    <span><a class="btn btn-primary file_preview">Upload Image</a></span>
                                </div>
                            </div>
                            <div class="clearfix margin-top-10">
                                <span class="label label-danger">NOTE! </span>
                                <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                            </div>
                        </div>
                                                                            
                    <!-- </form> -->

                        <div class="form-group">
                            <input type="hidden" name="image"> </div>
                        <div class="form-group">

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
                     
                        <div class="margiv-top-10">
                            <a href="javascript:;" class="btn green submit"> Submit 
                            </a>
                        </div>

                    </div>
                    <!-- END PERSONAL INFO TAB -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
<script src="https://widget.cloudinary.com/global/all.js" type="text/javascript"></script>  
<script type="text/javascript">

$(function() {

    $(".file_preview").on('click', function(){
        cloudinary.openUploadWidget({ cloud_name: 'fecund', upload_preset: 'yu9rsdkd', theme: 'white'}, 
            function(error, result) { 
                console.log(error, result);
                try{
                    $('#t_preview').attr('src', result[0].url);
                    $('input[name="image"]').val(JSON.stringify(result[0]));
                }catch(e){

                }
            });
    });

    $(".submit").on("click", function(e){

        var url = "{{URL::to('save/student')}}/";
        axios.post(url, $("#student_data").serialize())
             .then(function(response){
                console.log(response);
                swal({
                      title: response.data.title,
                      text: response.data.text,
                      type: response.data.status,
                      timer: 5000
                });
             })
             .catch(function(error){
                 console.log(error);
             });
    });

});

</script>
@endsection
