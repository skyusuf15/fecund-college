@extends('layouts.admin')
@section('title')
Edit/Delete Student
@endsection

@section('styles')


@endsection

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">Edit/Delete Student</div>

                <div class="panel-body">
                    <div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Facebook ID</th>
                                <th>Twitter ID</th>
                                <th>LinkedIn ID</th>
                                <th></th>
                                <th></th>  
                            </tr>         
                            </thead>
                            <tbody>
                                <?php  $k = 0 ?>
                                @foreach($students as $student)
                                <?php  $k++ ?>
                                    <tr>
                                        <td>{{ $k }}</td>
                                        <td>{{ $student->fullname }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->facebook_id }}</td>
                                        <td>{{ $student->twitter_id }}</td>
                                        <td>{{ $student->linkedin_id }}</td>
                                        <td class="edit"><a class='btn btn-primary btn-sm' data-id="{{ $student->id }}">edit <i class="fa fa-pencil"></i> </a></td>
                                        <td class="delete">
                                            <a class='btn btn-danger btn-sm' data-id="{{ $student->id }}">
                                                Delete <i class="fa fa-trash"></i> 
                                            </a>

                                            <form id="delete-form" action="{{ url('student') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                         
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>


                        </table>         
                    </div>
   

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')




<script type="text/javascript">
    $(".delete").on('click', 'a', function(event){
        event.preventDefault();
        var url = $('#delete-form').attr('action') + '/' + $(this).data('id');
        console.log(url);
        $('#delete-form').attr('action', url).submit();
    });

    $('.edit').on('click', 'a', function(){
        var $this = $(this);

        $this.hide().closest('tr').find('#delete a').hide();
        var find_td = $this.closest('tr').find('td');
        var sn = find_td.eq(0).text();
        var fullname = find_td.eq(1).text();
        var email = find_td.eq(2).text();
        var facebook = find_td.eq(3).text();
        var twitter = find_td.eq(4).text();
        var linkedin = find_td.eq(5).text();

        $('<tr><td>'+sn+'</td><td><input type="text" name="fullname_edit" value="'+fullname+'"></td>'
                        + '<td><input type="text" name="email_edit" value="'+email+'"></td>'
                        + '<td><input type="text" name="facebook_edit" value="'+facebook+'"></td>'
                        + '<td><input type="text" name="twitter_edit" value="'+twitter+'"></td>'
                        + '<td><input type="text" name="linkedin_edit" value="'+linkedin+'"></td>'
                        + '<td><a class="btn btn-warning btn-sm clear_edit">clear <i class="fa fa-trash"></i> </a></td>'
                        + '<td><a class="btn btn-primary btn-sm update_edit">update <i class="fa fa-check"></i> </a>'
                        + '<a class="btn btn-danger btn-sm remove_edit">cancel <i class="fa fa-close"></i> </a>'
                        + ' </td></tr>').insertAfter($this.closest('tr'));

        $('.clear_edit').on('click', function(){
            $(this).closest('tr').find('input').val('');
        });

        $('.remove_edit').on('click', function(){
            $(this).closest('tr').remove();
            $this.show().closest('tr').find('#delete a').show();
        });

        $('.update_edit').on('click', function(){
            var el = $(this).closest('tr');
            var url = '/student/' + $this.data('id');
            var data = {
                'fullname': el.find('input[name="fullname_edit"]').val(),
                'email': el.find('input[name="email_edit"]').val(),
                'facebook_id': el.find('input[name="facebook_edit"]').val(),
                'twitter_id': el.find('input[name="twitter_edit"]').val(),
                'linkedin_id': el.find('input[name="linkedin_edit"]').val(),
                '_method': 'PATCH'
            }
            axios.post(url, data)
            .then((response) => {
                console.log(response);
                find_td.eq(1).text(el.find('input[name="fullname_edit"]').val());
                find_td.eq(2).text(el.find('input[name="email_edit"]').val());
                find_td.eq(3).text(el.find('input[name="facebook_edit"]').val());
                find_td.eq(4).text(el.find('input[name="twitter_edit"]').val());
                find_td.eq(5).text(el.find('input[name="linkedin_edit"]').val());

                el.find('.remove_edit').trigger('click');
                swal({
                      title: response.data.title,
                      text: response.data.text,
                      type: 'success',
                      timer: 5000
                    });
            })
            .catch((error)=>{
                console.log(error.response);
                    swal({
                      title: "Failed to Update!",
                      text: "An Error Occured while trying to update record...Please check the record before updating",
                      type: 'error',
                      timer: 5000
                    });
            });
        });

    });
</script>

@endsection