$(document).ready(function(){
    $('select[name="notification_to"]').on('change',function(){
        var notification_to_id = $(this).val();
        var type = $('select[name="notification_type"]').val();
        if(type == 1){
            $.ajax({
                url: '/ajax/notification/to/'+notification_to_id,
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    
                	$('select[name="programme"]').show();
                	$('select[name="programme"]').empty();
                	$('select[name="programme"]').append('<option value="">Select Programme</option>');
                    $.each(data, function(key, value){
                        $('select[name="programme"]').append('<option value="'+key+'">'+ value +'</option>');
                    });
                    
               }
            });
        } else {
            $('select[name="programme"]').hide();
        }
    });
});