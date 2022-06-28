function order() {
    event.preventDefault();
    let name = $('input[name="name"]').val();
    let phone = $('input[name="phone"]').val();

    $.ajax({
        url: './process/order.php',
        type: 'POST',
        data: {
            order: true,
            name: name,
            phone: phone,
        },
        success: function (data) {
            $('#processRespone').html(data);
            // console.log(data);
        }
    })
}