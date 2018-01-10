$(document).ready(function() {
    //var baseUrl = window.location.origin;
    $('#submitPost').click(function() {
        var content = $('#post_content').val();
        var alumnusId = $('#post_alumnus_id').val();
         
        $.ajax({
            type: 'POST',
            url: baseUrl + 'home/new_post',
            data: {'alumnus_id' : alumnusId, 'content' : content},
            success: function(data){
                //$('#post-section').load(location.href+" #post-section>*","");
                $('#post_content').val('');
                $('#post-section').load(location.href+" #post-section>", function( response, status, xhr ) {
                    if (status == "success") {
                        $(".faq-q").click( function () {
                            var container = $(this).parents(".faq-c");
                            var answer = container.find(".faq-a");
                            var trigger = container.find(".faq-t");
                            
                            answer.slideToggle(200);
                            
                            if (trigger.hasClass("faq-o")) {
                            trigger.removeClass("faq-o");
                            }
                            else {
                            trigger.addClass("faq-o");
                            }
                        }); 
                    }       
                    if ( status == "error" ) {
                        alert(status);
                    }
                }); 
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
            }     
        });
    });

    $(document).on('click','.submitComment',function() {

        var content = $(this).parent().find('.comment_content').val();
        var alumnusId = $('#post_alumnus_id').val();
        var postId = $(this).closest('.blog-item').find('.post_id').val(); 
        console.log(content + ' ' + alumnusId + ' ' + postId);
        $.ajax({
            type: 'POST',
            url: baseUrl + 'home/new_comment',
            data: {'alumnus_id' : alumnusId, 'content' : content, 'post_id' : postId},
            //dataType: 'JSON',
            success: function(data){         
                //$('#post-section').load(location.href+" #post-section>","");
                $(this).parent().find('.comment_content').val('');
                $('#post-section').load(location.href+" #post-section>", function( response, status, xhr ) {
                    if (status == "success") {
                        $(".faq-q").click( function () {
                            var container = $(this).parents(".faq-c");
                            var answer = container.find(".faq-a");
                            var trigger = container.find(".faq-t");
                            
                            answer.slideToggle(200);
                            
                            if (trigger.hasClass("faq-o")) {
                            trigger.removeClass("faq-o");
                            }
                            else {
                            trigger.addClass("faq-o");
                            }
                        }); 
                    }       
                    if ( status == "error" ) {
                        alert(status);
                    }
                });
                /*$(".container.post").prepend('<div class="row">' +
                '<main class="col-md-8 col-md-offset-2" style="display: block;">' +
                        '<article class="blog-item">' +                         
                            '<div class="blog-heading">' +
                                '<h3 class="text-capitalize">'+data.name+'</h3>' +
                                '<span class="date">'+ formattedDate +'</span>' +
                            '</div>' +
                            '<p>'+ data.content +'</p>' +
                            '<p>No comments yet.</p>' +    
                '</article></main></div>');*/  
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                console.log("Status: " + textStatus); console.log("Error: " + errorThrown); 
            }     
        });
    });

    $(".faq-q").click( function () {
        var container = $(this).parents(".faq-c");
        var answer = container.find(".faq-a");
        var trigger = container.find(".faq-t");
        
        answer.slideToggle(200);
        
        if (trigger.hasClass("faq-o")) {
          trigger.removeClass("faq-o");
        }
        else {
          trigger.addClass("faq-o");
        }
      });
});