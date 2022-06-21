function viewToAdd() {
    event.preventDefault();
    $.ajax({
        url: './process/category.php',
        type: 'POST',
        data: {
            viewToAdd: true
        },
        success: function (data) {
            $('#switchModal').html($('<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">' + data + ' <div>').modal());
        }
    })
}

function add(){
    event.preventDefault();
    let categoryID = $('input[name="categoryID"]').val().trim();
    let categoryName = $('input[name="categoryName"]').val().trim();
    
    $.ajax({
        url: './process/category.php',
        type: 'POST',
        data: {
            add: true,
            id_category: categoryID,
            name: categoryName,
        },
        success: function (respone){
            if(respone == 1){
                location.reload()
            } 
            else{
                $('#processRespone').html(respone);
            }
        } 
    })
}

function viewDetails(id_category){
    event.preventDefault();
    $.ajax({
        url: './process/category.php',
        type: 'POST',
        data: {
            viewDetails: true,
            id_category: id_category
        },
        success: function (data) {
            $('#switchModal').html($('<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">' + data + ' <div>').modal());
        }
    })
}


function viewToUpdate(id_category){
    event.preventDefault();
    $.ajax({
        url: './process/category.php',
        type: 'POST',
        data: {
            viewToUpdate: true,
            id_category: id_category
        },
        success: function (data) {
            $('#switchModal').html($('<div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">' + data + ' <div>').modal());
        }
    })
}

function update(){
    event.preventDefault();
    let  categoryID = $('input[name="categoryID"]').val().trim();
    let categoryName = $('input[name="categoryName"]').val().trim();
    
    $.ajax({
        url: './process/category.php',
        type: 'POST',
        data: {
            update: true,
            id_category: categoryID,
            name: categoryName,
        },
        success: function (respone){
            if(respone == 1){
                location.reload()
            } 
            else{
                $('#processRespone').html(respone);
            }
        } 
    })
}

function deleteCategory(id_category){
    event.preventDefault();
    $.ajax({
        url: './process/category.php',
        type: 'POST',
        data: {
            delete: true,
            id_category: id_category
        },
        success: function (respone){
            if(respone == 1){
                location.reload()
            } 
            else{
                $('#processRespone').html(respone);
            }
        } 
    })
}