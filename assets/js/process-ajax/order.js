function order() {
    event.preventDefault();
    let name = $('input[name="name"]').val();
    let phone = $('input[name="phone"]').val();
    if(name == "") {
        alert('Vui lòng nhập tên');
        return;
    }
    if(phone == "") {
        alert('Vui lòng nhập số điện thoại');
        return;
    }
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
            location.reload();
            // console.log(data);
        }
    })
}