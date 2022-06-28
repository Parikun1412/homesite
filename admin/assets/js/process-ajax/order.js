function viewDetails(id_order) {
    event.preventDefault();

    $.ajax({
        url: './process/order.php',
        type: 'POST',
        data: {
            view: true,
            id_order: id_order,
        },
        success: function (data) {
            $('#switchModal').html($('<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">' + data + ' <div>').modal());
        }
    })
}