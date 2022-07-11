function postSupport() {
    event.preventDefault();
    let fullname = $('input[name="name"]').val();
    let email = $('input[name="email"]').val();
    let message = $('textarea[name="message"]').val();

    $.ajax({
        url: './process/contact.php',
        type: 'POST',
        data: {
            postSupport: true,
            fullname: fullname,
            email: email,
            message: message,
        },
        success: function (respone) {
            if (respone == 1) {
                alert('Chúng tôi sẽ phản hồi bạn sớm nhất!!!');
                location.reload();
            }
            else {
                alert('Gửi hỗ trợ thất bại');
            }
        }
    })
}