$(document).ready(function(){
    $('select[name="notification_type"]').on('change',function(){
        var notification_type_id = $(this).val();
        var type = $('select[name="notification_type"]').val();
        if(notification_type_id == 2 || type == 1){
            
        	$('select[name="programme"]').hide();
                    
            
        } else {
        	$('select[name="programme"]').show();
        }
    });
});