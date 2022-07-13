function addToCart(id_product) {
    event.preventDefault();
    $.ajax({
        url: './process/product.php',
        type: 'POST',
        data: {
            addToCart: true,
            id_product: id_product,
        },
        success: function (data) {
            // console.log(data);
            $('#cart-items').html(data);
            location.reload();
        }
    })

}

function removeItem(id_product){
    event.preventDefault();

    $.ajax({
        url: './process/product.php',
        type: 'POST',
        data: {
            removeItem: true,
            id_product: id_product,
        },
        success: function (data) {
            location.reload();
        }
    })
}