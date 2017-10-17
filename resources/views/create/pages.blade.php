@extends('layouts.admin')
@section('title')
Dashboard
@endsection

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading">CREATE A PAGE</div>

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
                                                
                                                      <input type="text" name="page_name" class="form-control" id="page_name">
                                                  </div>
                                              </div><!--end .col -->

                                              <div class="col-md-6">
                                                 <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                      <label for="form_control_1">Page Abbreviation</label>
                                                      <input type="text" name="page_abbr" class="form-control" id="page_abbr">
                                                  </div>
                                              </div><!--end .col -->

                                          </div><!--end .row -->

                                      </form>

                                  </div><!--end .card-body -->
                              </div><!--end .card -->

                              
                              <button id="create" type="button" class="btn ink-reaction btn-raised btn-success btn-loading-state" data-loading-text="<i class='fa fa-spinner fa-spin'></i>">CREATE</button>
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

  $('#clear').on('click', function() {
      $('input').val('');
  });


$('#create').on('click', function() {
    var page_name =  $("#page_name").val();
    var page_abbr =  $("#page_abbr").val();


   var url = "{{URL::to('/create/pages/save')}}/";
    var data = {
        page_name: page_name,
        page_abbr: page_abbr,
        _token:     '{{ csrf_token() }}'
      };
    var cb = {};

    if(page_name != '' && page_abbr !=''){
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
    else if(page_name == '')
    {
      cb = {  title: 'warning',
              text: 'Please Select A Page!',
              type: 'warning',
              timer: 5000
            };
    }
    else if(page_abbr.length < 5)
    {
        cb = {
              title: 'warning',
              text: 'Please Title must be greater than 4 characters in length!',
              type: 'warning',
              timer: 5000
            };
    }

    if($.isEmptyObject(cb)) swal(cb);
  
});


});

</script>

@endsection