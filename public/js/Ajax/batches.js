$(document).ready(function(){
    $('select[name="programme"]').on('change',function(){
        var programme_id = $(this).val();
        if(programme_id){
            $.ajax({
               url: '/ajax/programme/'+programme_id+'/get-programme-batches',
               type: 'GET',
               dataType: 'json',
               success: function(data){
                   console.log(data)
                      $('select[name="batch"]').empty();
                      $.each(data, function(key, value){
                          $('select[name="batch"]').append('<option value="'+value+'">'+ value +'</option>');
                      });
               }
            });
        } else {
            $('select[name="batch"]').empty();
        }
    });
});