
$(function(){
    $(window).scroll(function()
    {
        const scrollTop = $(this).scrollTop();
        if(scrollTop > 10)
        {
            $('#newPost').fadeOut(100);
        }

    });
});

