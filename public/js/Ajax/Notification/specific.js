$(document).ready(function(){
    $('select[name="notification_to"]').on('change',function(){
        var notification_to_id = $(this).val();
        var type = $('select[name="notification_type"]').val();
        var e = document.getElementById('specific');
       
        if(notification_to_id == 1 && type == 2){
        	$('select[name="programme"]').hide();
            e.innerHTML = "<input type='text' name='staffId' class='form-control add-input' placeholder='staffId' />";
        } else if(notification_to_id == 3  && type == 2){
            e.innerHTML = "<input type='text' name='admissionNo' class='form-control add-input' placeholder='Addmission Number' />";
        }
    });
});
