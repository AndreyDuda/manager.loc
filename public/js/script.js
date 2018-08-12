
$(".accordion li").click(function(){
    $(this).next('ul').toggle();
});

$(function () {
$('.search1 .search_but').click(function () {

    var search  = $('.search_ajax').val();
    var url     = $('.url').val();
    var url_img = $('.url_img').val();
    var length  = 0;
    var table   = '';
    var control = $(this).data('control');

    $.ajax({
        type: 'POST',
        url: url,
        data: {search1: search, _token:  $('meta[name="csrf-token"]').attr('content')},
        datatype: 'JSON',
        success: function (data) {
            console.log(data);
            data   = $.parseJSON(data);
            length = data.length;
            console.log(data);
            $('.table_body').remove();
            console.log(data[4]);
            for(var i=0; i<length; i++){
                table  += '<tr class="table_body">';
                if(control){
                    table  += ' <td><img class="mini_photo" src="'+url_img+data[i].photo+'"> </td>';
                }
                table += '<td>'+data[i].surname+'</td>'+
                         '<td>'+data[i].name+'</td>'+
                         '<td>'+data[i].patronymic+'</td>'+
                         '<td>'+data[i].salary+'</td>'+
                         '<td>'+data[i].roles+'</td>'+
                         '<td>'+data[i].departments+'</td>'+
                         '<td>'+data[i].date_started_at_work+'</td>';
                if(control){
                    table  += ' <td> <span data-id="'+data[i].id +'" title="Редактировать" class="edit_simvol">&#9998 </span> <span data-id="'+data[i].id +'" title="Удалить" class="del_simvol">&#10006; </span> </td>';
                }
                table  += '</tr>';

            }
            $('.table_employees tbody').append(table);

            console.log(table)
        },
        error: function () {

        }
    });

});

    $('.sort_simvol_a').click(function () {
        var sort = $(this).data('sort');
        var type = $(this).data('type');
        var url    = $('.url').val();
        var url_img = $('.url_img').val();
        var length = 0;
        var table  = '';
        var control = $(this).data('control');
        alert(control);
        $.ajax({
            type: 'POST',
            url: url,
            data: {sort: sort, type:type,_token:  $('meta[name="csrf-token"]').attr('content')},
            datatype: 'JSON',
            success: function (data) {
                console.log(data);
                data   = $.parseJSON(data);
                length = data.length;
                console.log(data);
                $('.table_body').remove();
                console.log(data[4]);
                for(var i=0; i<length; i++){
                    table  += '<tr class="table_body">';
                    if(control){
                        table  += ' <td><img class="mini_photo" src="'+url_img+data[i].photo+'"> </td>';
                    }
                    table += '<td>'+data[i].surname+'</td>'+
                             '<td>'+data[i].name+'</td>'+
                             '<td>'+data[i].patronymic+'</td>'+
                             '<td>'+data[i].salary+'</td>'+
                             '<td>'+data[i].roles+'</td>'+
                             '<td>'+data[i].departments+'</td>'+
                             '<td>'+data[i].date_started_at_work+'</td>';
                    if(control){
                        table  += ' <td> <span data-id="'+data[i].id +'" title="Редактировать" class="edit_simvol">&#9998 </span> <span data-id="'+data[i].id +'" title="Удалить" class="del_simvol">&#10006; </span> </td>';
                    }
                    table  += '</tr>';

                }
                $('.table_employees tbody').append(table);

                console.log(table)
            },
            error: function () {

            }
        });

    });






/*Управление сотредниками    */


    $('.table_employees').on('click', '.del_simvol', function(){
        var id = $(this).data('id');
        var obj = $(this);
        var url    = $('.url_del').val();

        $.ajax({
            type: 'delete',
            url: url,
            data: {id: id, _token:  $('meta[name="csrf-token"]').attr('content')},
            datatype: 'JSON',
            success: function (data) {
                   obj.closest('tr').remove();
            },
            error: function () {

            }
        });

    });

    $('.photo_show').on('click', '.button_del', function () {
        $(this).hide();
        var url = $('#url_img').val();
       $(this).next('img').attr('src', url+'system/no_img.png');
       $('.photo_upload').removeClass('hidden_block').addClass('block');
       $('#file').val('');
    });

});
