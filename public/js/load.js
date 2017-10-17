$(function () {

  $('#send_msg').on('click', function(e) {

        e.preventDefault();

        // Add loading state
        //$('.testdropdown').html('Loading please wait ...');
       
        // Set request
        var url = "/contact/message";
        var data = $('#contact_form').serialize();

         $.post(url, data, function (result){
                swal({
                      title: result.header,
                      text: result.response,
                      type: 'success',
                      timer: 5000
                    });
                $("[name='guest_name'],[name='email'],[name='message']").val('');
         });

  });


}); 