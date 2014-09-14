$(function(){
    $('.closeWindowOnClick').on('click', function(){
        window.close();
        return false;
    })

    $('a.ajax-and-delete').on('click', function() {
        var $link = $(this);
        var url = $link.attr('href');
        $.get(url, function(){
            var id = $link.data('to-delete');
            $('#' + id).slideUp();
        });

        return false;
    });

    $('#animatemedemo').animate(
        {
            marginLeft: '20rem'
        },
        {
            duration: 5000
        }
    );
});