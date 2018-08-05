
$(".accordion li").click(function(){
    $(this).next('ul').toggle();
});

$(function () {
$('.search1 .search_but').click(function () {

    var search = $('.search_ajax').val();
    var url    = $('.url').val();
    var length = 0;
    var table  = '';
    console.log($('meta[name="csrf-token"]').attr('content'));

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
                table += '<td>'+data[i].name+'</td>'+
                         '<td>'+data[i].surname+'</td>'+
                         '<td>'+data[i].patronymic+'</td>'+
                         '<td>'+data[i].salary+'</td>'+
                         '<td>'+data[i].roles+'</td>'+
                         '<td>'+data[i].departments+'</td>'+
                         '<td>'+data[i].date_started_at_work+'</td>';
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
        var length = 0;
        var table  = '';
        console.log($('meta[name="csrf-token"]').attr('content'));

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
                    table += '<td>'+data[i].name+'</td>'+
                        '<td>'+data[i].surname+'</td>'+
                        '<td>'+data[i].patronymic+'</td>'+
                        '<td>'+data[i].salary+'</td>'+
                        '<td>'+data[i].roles+'</td>'+
                        '<td>'+data[i].departments+'</td>'+
                        '<td>'+data[i].date_started_at_work+'</td>';
                    table  += '</tr>';

                }
                $('.table_employees tbody').append(table);

                console.log(table)
            },
            error: function () {

            }
        });

    });



});
