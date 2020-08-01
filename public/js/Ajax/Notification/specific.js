$(document).ready(function(){
    $('select[name="notification_to"]').on('change',function(){
        var notification_to_id = $(this).val();
        var e = document.getElementById('specific');
        if(notification_to_id == 1){
            e.innerHTML = "<input type='text' name='staffId' class='form-control add-input' placeholder='staffId' />";
        } else if(notification_to_id == 3){
            e.innerHTML = "<input type='text' name='admissionNo' class='form-control add-input' placeholder='Addmission Number' />";
        }else{
            e.hide();
        }
    });
});
