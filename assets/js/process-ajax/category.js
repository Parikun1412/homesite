function filterCategory(id_category) {
    event.preventDefault();
    $.ajax({
        url: './process/category.php',
        type: 'POST',
        data: {
            filterCategory: true,
            id_category: id_category,
        },
        success: function (response) {
            // console.log(response);
            $('#grid_product').html(response);
        }
    })
}

function filterProductByKeyword(word) {
    event.preventDefault();
    let search;
    if (!word)
        search = $('input[name="search"]').val();
    else
        search = word
    $.ajax({
        url: './process/category.php',
        method: 'GET',
        data: {
            search: search,
            filterProductByKeyword: true
        },
        success: function (response) {
            // console.log(response);
            $('#grid_product').html(response);
        }
    })
}