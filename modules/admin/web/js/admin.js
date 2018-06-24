/* Formatting function for row details - modify as you need */
function format ( d ) {
    // `d` is the original data object for the row
    var html;
    //кривой html исправить
    html =  '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
        var items = d.items;
        console.log(items);
        html +='<tr>'+
            '<td>Наименование</td>' +
            // '<td>'+d.id+'</td>'+\
            '<td>Количество</td>' +
            '<td>Цена</td>' +
            '<td>Сумма</td>' + '</tr>' ;

        items.forEach(function(entry) {
           item = entry.item;
           console.log(item);
            html +=
                '<td>' + item.Name + '</td>' +
                // '<td>'+d.id+'</td>'+\
                '<td>' + entry.Count + '</td>' +
                '<td>' + entry.Price + '</td>' +
                '<td>' + entry.Summa + '</td>' +
            '</tr>';
        });

        // '<tr>'+
        // '<td>Extension number:</td>'+
        // // '<td>'+d.id+'</td>'+
        // '</tr>'+
        // '<tr>'+
        // '<td>Extra info:</td>'+
        // '<td>And any further details here (images etc)...</td>'+
        // '</tr>'+
    html +='</table>';
    return html;
}

$(document).ready(function() {
    var table =($('#w0')).DataTable();

    // Add event listener for opening and closing details
            $('#w0 tbody').on('click', 'td.details-control', function () {
                var tr = $(this).closest('tr');
                var row = table.row( tr );

                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {
                    // Open this row
                    row.child( format(row.data()) ).show();
                    tr.addClass('shown');
        }
    } );


} );


