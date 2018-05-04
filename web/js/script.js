$(document).ready(function(){
    $('#block1 .list-group-item').on('click', function(){
        var text_el = $(this).text();
        var text_ed = $(this).attr('data-ed');
        var text_id = $(this).attr('id');
        console.log('это '+text_el);
        $('#blok_1').append('<tr class="'+text_id+'"><td>'+text_el+'</td><td>'+text_ed+'</td><td><input value="1" size="3"/></td></tr>');
    });

    $('#block2 .list-group-item').on('click', function(){
        //var text_el = $(this).text();
        var text_ed = $(this).attr('data-ed');
        //var text_id = $(this).attr('id');
        //console.log('это '+text_el);
        $('#textblock2').append("<p>&nbsp;&nbsp;&nbsp;"+text_ed+"</p>");
    });

    $('#block4 .list-group-item').on('click', function(){
        //var text_el = $(this).text();
        var text_ed = $(this).attr('data-ed');
        //var text_id = $(this).attr('id');
        //console.log('это '+text_el);
        $('#textblock2').append("<p>&nbsp;&nbsp;&nbsp;"+text_ed+"</p>");
    });

});