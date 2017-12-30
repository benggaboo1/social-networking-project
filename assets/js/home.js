$(document).ready(function() {
    //var baseUrl = window.location.origin;
    $('#submitPost').click(function() {
        var content = $('#post_content').val();
        var alumnusId = $('#post_alumnus_id').val();
         
        $.ajax({
            type: 'POST',
            url: baseUrl + 'home/new_post',
            data: {'alumnus_id' : alumnusId, 'content' : content},
            dataType: 'JSON',
            success: function(data){ 
                var formattedDate = moment(data.create_timestamp).format('MMM DD, YYYY h:mm a'); 
                console.log(data);
                $(".container.post").prepend('<div class="row">' +
                '<main class="col-md-8 col-md-offset-2" style="display: block;">' +
                        '<article class="blog-item">' +                         
                            '<div class="blog-heading">' +
                                '<h3 class="text-capitalize">'+data.name+'</h3>' +
                                '<span class="date">'+ formattedDate +'</span>' +
                            '</div>' +
                            '<p>'+ data.content +'</p>' +
                            '<p>No comments yet.</p>' +    
                '</article></main></div>');  
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
            }     
        });
    });
});