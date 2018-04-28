$(document).ready(function(){
    $('.list-group-item').on('click', function(){
        var text_el = $(this).text();
        var text_ed = $(this).attr('data-ed');
        var text_id = $(this).attr('id');
        console.log('это '+text_el);
        $('#blok_1').append('<tr><td>'+text_id+'</td><td>'+text_el+'</td><td>'+text_ed+'</td><td><input value="1" size="3"/></td></tr>');
    });
});