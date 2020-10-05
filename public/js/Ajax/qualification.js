$(document).ready(function(){
    $('select[name="qualification_type_id"]').on('change',function(){
        var qualification_type_id = $(this).val();
        console.log(qualification_type_id);
        if(qualification_type_id){
            $.ajax({
               url: '/ajax/qualification/type/'+qualification_type_id+'/subjects',
               type: 'GET',
               dataType: 'json',
               success: function(data){
                  
                    $('select[name="subjects[]"]').empty();
                    $.each(data, function(key, value){
                        $('select[name="subjects[]"]').append('<option value="'+key+'">'+ value +'</option>');
                    });
               }
            });
        } else {
            $('select[name="subjects[]"]').empty();
        }
    });
});