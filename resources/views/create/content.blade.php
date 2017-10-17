@extends('layouts.admin')
@section('title')
Dashboard
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">CREATE A PAGE CONTENT</div>

                <div class="panel-body">
                    
                        <div class="portlet-body">
                          <div class="col-md-12 col-sm-12 tmp_form tmp">
                            <div class="card">
                                <div class="card-body">

                                    <form class="form">

                                       <div class="row">
                                            <div class="col-md-6">
                                               <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <label for="form_control_1">Page Name</label>
                                              
                                                    <select class="form-control" id="page_drp">
                                                    <option value="" selected="">Selet A Page</option>
                                                    @foreach($pages as $page)   
                                                         <option value="{{ $page->id }}" >{{ $page->page_name .' ('. $page->page_abbr.')' }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div><!--end .col -->

                                            <div class="col-md-6">
                                               <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                    <label for="form_control_1">Content Title</label>
                                                    <input type="text" name="content_title" class="form-control" id="content_title">
                                                </div>
                                            </div><!--end .col -->

                                        </div><!--end .row -->


                                        <!-- BEGIN SUMMERNOTE -->

                                        <div class="card">
                                            <label for="form_control_1">Create Content Body</label>
                                            <div class="card-body no-padding">
                                                <div id="summernote" style="display: none;">
                                            </div>
                                            <!--end .card-body -->
                                        </div><!--end .card -->
                                        <!-- END SUMMERNOTE -->
                                    </form>

                                </div><!--end .card-body -->
                            </div><!--end .card -->

                            
                            <button id="update" type="button" class="btn ink-reaction btn-raised btn-success btn-loading-state" data-loading-text="<i class='fa fa-spinner fa-spin'></i>">UPDATE</button>
                            <button id="clear" type="button" class="btn ink-reaction btn-raised btn-danger">CLEAR</button>

                        </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')

<script>
$(document).ready(function() {
    var $scope = {};
    $('#summernote').summernote({
      toolbar: [
                  ['style', ['style']],
                  ['fontsize', ['fontsize']],
                  ['font', ['bold', 'italic', 'underline', 'clear']],
                  ['fontname', ['fontname']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['height', ['height']],
                  ['insert', ['hr','picture']],
                  ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                  ['float', ['floatLeft', 'floatRight', 'floatNone']],
                  ['remove', ['removeMedia']],

                  ['fullscreen', ['fullscreen']],
                  ['codeview', ['codeview']],
                  
                  ['link', ['linkDialogShow', 'unlink']],
                  ['table', ['table']]
      ],
      height: 300,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,  
      minWidth: 1000,             // set minimum height of editor
      maxWidth: null,            // set maximum height of editor
      focus: true                  // set focus to editable area after initializing summernote
    });

  $('#clear').on('click', function() {
       $('#summernote').summernote('code', '');
       $('select').val('');
  });

  $('#update').on('click', function() {
    var page_id =  $("#page_drp").val();
    var title =  $("#content_title").val();
    var markupStr = $('#summernote').summernote('code');
    markupStr = markupStr.trim();

   var url = "{{URL::to('page/content/save')}}/"+ page_id;
    var data = {
        content: markupStr,
        content_title: title,
        _token:     '{{ csrf_token() }}'
      };
    var cb = {};

    if(page_id != '' && title !='' && markupStr.length >= 15){
    // Set request
      $.post(url, data, function (result){
        console.log(result);
        swal({
              title: result.response,
              //text: result.response,
              type: result.status,
              timer: 5000
        });   
        $('#clear').trigger('click');
     });   
    }
    else if(page_id == '')
    {
      cb = {  title: 'warning',
              text: 'Please Select A Page!',
              type: 'warning',
              timer: 5000
            };
    }
    else if(title.length < 5)
    {
        cb = {
              title: 'warning',
              text: 'Please Title must be greater than 4 characters in length!',
              type: 'warning',
              timer: 5000
            };
    }
    else if(markupStr.length < 15)
    {
      cb = {
              title: 'warning',
              text: 'Please Content length must not be below 15 characters!',
              type: 'warning',
              timer: 5000
            };
    }
    if($.isEmptyObject(cb)) swal(cb);
  });


});

</script>


@endsection