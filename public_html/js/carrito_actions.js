// Define the function for emptying the cart
function emptyCart() {
    $.ajax({
        type: 'POST',
        url: 'php/controller/vaciarCarrito.php',
        success: function(response) {
            $('#main-flex').html(response);
            $('#extras').html(
                '<h3 id="quantitat"> Quantity: 0 </h3> <h3 id="preu"> Total Price: 0€ </h3>'
            );
        },
        error: function(error) {
            console.error(error);
            alert('Error al vaciar el carrito.');
        },
    });
}

function submitForm() {
    $.ajax({
        type: 'POST',
        url: '/php/controller/addCart.php',
        data: $('#addToCartForm').serialize(),
        success: function (response) {
        },
        error: function (error) {
            console.error(error);
            alert('Error adding product to cart.');
        },
    });
}

function confirmPurchase() {
    $.ajax({
        type: 'GET',
        url: 'php/controller/confirm_purchase.php',
        success: function(response) {
            $('#main-flex').html(response);
            $('#extras').html(
                '<h3 id="quantitat"> Quantity: 0 </h3> <h3 id="preu"> Total Price: 0€ </h3>'
            );
        },
        error: function(error) {
            console.error(error);
            alert('Error confirming the purchase');
        }
    });
}