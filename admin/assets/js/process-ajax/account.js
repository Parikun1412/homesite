function viewToAdd() {
    event.preventDefault();

    $.ajax({
        url: './process/account.php',
        type: 'POST',
        data: {
            viewToAdd: true,
        },
        success: function (data) {
            $('#switchModal').html($('<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">' + data + ' <div>').modal());
        }
    })
}

function add() {
    event.preventDefault();
    let id_account = $('input[name="accountID"]').val().trim();
    let username = $('input[name="username"]').val().trim();
    let password = $('input[name="password"]').val().trim();

    $.ajax({
        url: './process/account.php',
        type: 'POST',
        data: {
            add: true,
            id_account: id_account,
            username: username,
            password: password,
        },
        success: function (response) {
            if (response == 1) {
                alert('Thêm thành công');
                location.reload();
            }
            else {
                alert('Thêm thất bại');
            }
        }
    })
}

function getDetail(id_account) {
    $.ajax({
        url: './process/account.php',
        type: 'POST',
        data: {
            view: true,
            id_account: id_account,
        },
        success: function (data) {
            $('#switchModal').html($('<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">' + data + ' <div>').modal());
        }
    })
}

function viewToUpdate(id_account) {
    $.ajax({
        url: './process/account.php',
        type: 'POST',
        data: {
            viewToUpdate: true,
            id_account: id_account,
        },
        success: function (data) {
            $('#switchModal').html($('<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">' + data + ' <div>').modal());
        }
    })
}

function update() {
    event.preventDefault();
    let id_account = $('input[name="accountID"]').val().trim();
    let username = $('input[name="username"]').val().trim();
    let password = $('input[name="password"]').val().trim();
    let status = $('input[name="status"]:checked').val();

    $.ajax({
        url: './process/account.php',
        type: 'POST',
        data: {
            update: true,
            id_account: id_account,
            username: username,
            password: password,
            status: status,
        },
        success: function (response) {
            if (response == 1) {
                alert('Sửa thành công');
                location.reload();
            }
            else {
                alert('Sửa thất bại');
            }
        }
    })
}