
$(function(){
    $(window).scroll(function()
    {
        const scrollTop = $(this).scrollTop();
        if(scrollTop > 10)
        {
            $('#newPost').fadeIn(100);
        }else{
            $('#newPost').fadeOut(100);
        }

    });
});

