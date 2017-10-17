@extends('layouts.admin')
@section('title')
Dashboard
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

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
                                                    <select class="form-control" id="content_title">
                                                        <option value="">Select Title</option>
                                                    </select>
                                                </div>
                                            </div><!--end .col -->

                                        </div><!--end .row -->


                                       <div class="row">
                                            <div class="col-md-6">
                                               <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <label for="form_control_1">Edit Title</label>
                                                  <input type="text" name="content_title" class="form-control" id="title_name">
                                                </div>
                                            </div><!--end .col -->

                                        </div><!--end .row -->


                                        <!-- BEGIN SUMMERNOTE -->
                                      <div class="row">
                                          <div class="card col-md-12">
                                            <label for="form_control_1">Edit Content</label>
                                            <div  class="card-body">
                                                <div id="summernote" class="note-editable" style="display: none;">
                                            </div>
                                            <!--end .card-body -->
                                        </div><!--end .card -->
                                        <!-- END SUMMERNOTE -->        
                                      </div>

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

  $('#page_drp').on('change', function() {
      try{
        $('#summernote').summernote('code', '');
      }catch(e){
        console.log(e);
        swal({
              title: "Connection Error!",
              text: "Please Check Your Internet Connection!",
              type: 'error',
              timer: 5000
            });   
      }
        
        var id = $(this).val();
        var url = '/edit/page/'+ id +'/content';
        // Set request
         $.get(url, function (result){
            console.log(result);
            $scope.NewRecord = result; var drpHTML = '';  
            $.each(result, function(i,v){
                drpHTML += "<option data-content_index=" + i +" value=" + v.id + ">"+ v.content_title +"</option>\n"; 
            });

            $("#content_title").html('<option value=>Select Title</option>').append(drpHTML);
         });
  });

  $('#content_title').on('change', function() {
        var index = $('option:selected', this).data('content_index');
        try{
          $('#title_name').val($scope.NewRecord[index].content_title);
          $('#summernote').summernote('code', $scope.NewRecord[index].content);
        }catch(e){
            swal({
              title: "Connection Error!",
              text: "Page Content Cannot Be modified Due To Internet Connection Error!",
              type: 'error',
              timer: 5000
            }); 
          $('#title_name').val($scope.NewRecord[index].content_title);
          $('#summernote').html($scope.NewRecord[index].content).show();
        }
  });

  $('#clear').on('click', function() {
       $('#summernote').summernote('code', '');
       $('select,input').val('');
       $('#content_title').html('<option value="">Select Title</option>');
  });

  $('#update').on('click', function() {
      var id = $("#content_title").val();
      var content_t = $("#title_name").val();
      var markupStr = $('#summernote').summernote('code');
      markupStr = markupStr.trim();

     var url = "{{URL::to('page/content/')}}/"+ id;
      var data = {
          _method: 'PATCH',
          content_title: content_t,
          content: markupStr,
          _token:     '{{ csrf_token() }}'
      };
    console.log(id);
      if(id != '' && markupStr.length >= 15){
      // Set request
        $.post(url, data, function (result){
          swal({
                title: result.response,
                //text: result.response,
                type: result.status,
                timer: 5000
              });   
          $('#clear').trigger('click');
       });   
      }
      else if(id == '')
      {
          swal({
                title: 'warning',
                text: 'Please Select A Page and Title!',
                type: 'warning',
                timer: 5000
              });   
      }
      else if(markupStr.length < 15)
      {
          swal({
                title: 'warning',
                text: 'Please Content length must not be below 15 characters!',
                type: 'warning',
                timer: 5000
              });   
      }
  });
});

</script>

@endsection