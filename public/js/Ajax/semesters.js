$(document).ready(function(){
    $('select[name="programme"]').on('change',function(){
        var programme_id = $(this).val();
        if(programme_id){
            $.ajax({
               url: '/ajax/programme/'+programme_id+'/get-programme-semesters',
               type: 'GET',
               dataType: 'json',
               success: function(data){
                   console.log(data)
                      $('select[name="semester"]').empty();
                      $.each(data, function(key, value){
                          $('select[name="semester"]').append('<option value="'+key+'">'+ value +'</option>');
                      });
               }
            });
        } else {
            $('select[name="semester"]').empty();
        }
    });
});