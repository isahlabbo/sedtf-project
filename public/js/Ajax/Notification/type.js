$(document).ready(function(){
    $('select[name="notification_type"]').on('change',function(){
        var notification_type_id = $(this).val();
        if(notification_type_id == 2){
            
        	$('select[name="programme"]').hide();
        	$('input[name="staffId"]').hide();
        	$('input[name="admissionNo"]').hide();
                    
        } else {
        	$('select[name="programme"]').show();
        }
    });
});