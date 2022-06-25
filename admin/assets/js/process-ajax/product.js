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
    let id_product = $('input[name="productID"]').val();
    let name = $('input[name="productName"]').val();
    let id_category = $('select[name="category"] option:selected').val();
    let price = $('input[name="productPrice"]').val();
    let description = $('textarea[name="productDescription"]').val();


    formData.append('image', files);
    formData.append('id_product', id_product);
    formData.append('name', name);
    formData.append('id_category', id_category);
    formData.append('price', price);
    formData.append('description', description);
    formData.append('add', true);
    $.ajax({
        url: './process/product.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (respone) {
            if (respone == 1) {
                alert('Thêm thành công');
                location.reload();
            }
            else {
                $('#processRespone').html(respone);
            }
            // console.log(respone);
        }
    })
}

function viewDetails(id_product) {
    event.preventDefault();
    $.ajax({
        url: './process/product.php',
        type: 'POST',
        data: {
            view: true,
            id_product: id_product,
        },
        success: function (data) {
            $('#switchModal').html($('<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">' + data + ' <div>').modal());
            // console.log(data);
        }

    })
}

function viewToUpdate(id_product) {
    event.preventDefault();

    $.ajax({
        url: './process/product.php',
        type: 'POST',
        data: {
            viewToUpdate: true,
            id_product: id_product,
        },
        success: function (data) {
            $('#switchModal').html($('<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">' + data + ' <div>').modal());
            // console.log(data);
        }
    })
}

function update() {
    event.preventDefault();

    let formData = new FormData();
    let files = $('#file')[0].files[0];
    let id_product = $('input[name="productID"]').val();
    let name = $('input[name="productName"]').val();
    let id_category = $('select[name="category"] option:selected').val();
    let price = $('input[name="productPrice"]').val();
    let description = $('textarea[name="productDescription"]').val();
    let status = $('input[name="status"]:checked').val();

    formData.append('image', files);
    formData.append('id_product', id_product);
    formData.append('name', name);
    formData.append('id_category', id_category);
    formData.append('price', price);
    formData.append('description', description);
    formData.append('status', status);
    formData.append('update', true);
    $.ajax({
        url: './process/product.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (respone) {
            if (respone == 1) {
                alert('Sửa thành công');
                location.reload();
            }
            else {
                $('#processRespone').html(respone);
            }
            // console.log(respone);
        }
    })
}

function active() {
    let id_product = $('input[name="productID"]').val();
    event.preventDefault();

    $.ajax({
        url: './process/product.php',
        type: 'POST',
        data: {
            active: true,
            id_product : id_product,
        },
        success: function (respone) {
            if(respone == 1){
                alert('Đăng bán thành công');
            }else{
                $('#processRespone').html(respone);
            }
        }
    })

}