/*
$(document ).ready(function() {
    $(".delete").click(function(){
        var data_id = {'id': $(this).data('id')};

        $.ajax({
            type : 'GET',
            url : "{{ route('admin_screenshot_delete', data_id) }}",
            async : false,
            data : data_id,
            success : function(data) {
                alert(data);
            }
        });
    });
});
*/
