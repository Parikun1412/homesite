function postSupport(){
    event.preventDefault();
    let fullname = $('input[name="name"]').val();
    let email = $('input[name="email"]').val();
    let message = $('textarea[name="message"]').val();

    $.ajax({
        url: './process/contact.php',
        type: 'POST',
        data: {
            postSupport: true,
            fullname : fullname,
            email : email,
            message : message,
        },
        success: function(data){
            console.log(data);
        }
    })
}