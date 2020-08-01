$(document).ready(function(){
    $('select[name="notification_to"]').on('change',function(){
        var notification_to_id = $(this).val();
        if(notification_to_id){
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
            $('select[name="programme"]').empty();
        }
    });
});