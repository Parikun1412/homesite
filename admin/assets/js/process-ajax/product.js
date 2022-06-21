function viewToAdd() {
    event.preventDefault();

    $.ajax({
        url: './process/product.php',
        type: 'POST',
        data: {
            viewToAdd: true
        },
        success: function (data) {
            $('#switchModal').html($('<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">' + data + ' <div>').modal());
        }
    })
}

function add() {
    event.preventDefault();

    let formData = new FormData();
    let files = $('#file')[0].files[0];
    let id_product = $('#productID').val();
    formData.append('file', files);
    formData.append('productID', id_product);
    formData.append('add', true);
    $.ajax({
        url: './process/product.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (respone) {
            console.log(respone);
            // if (respone != 0) {
            //     location.reload()
            // } else {
            //     $('#processRespone').html(respone);
            // }
        }
    })
}