// Define the function for AJAX form submission
function submitForm() {
    // Retrieve form data
    var itemID = $('input[name="itemID"]').val();
    var name = $('input[name="name"]').val();
    var price = $('input[name="price"]').val();
    var quantity = $('#quantityInput').val();
    console.log(name);
    console.log(price)
    // Perform AJAX submission
    $.ajax({
        type: 'POST',
        url: '/php/controller/addCart.php',
        data: {
            itemID: itemID,
            name: name,
            price: price,
            quantity: quantity
        },
        success: function (response) {
            alert('Product added to cart!');
            // Additional logic if needed
        },
        error: function (error) {
            console.error(error);
            alert('Error adding product to cart.');
        }
    });
}

// // Attach the submitForm function to the form's onsubmit event
// $(document).ready(function () {
//     console.log("entra");
//     $('#addToCartForm').submit(function (event) {
//         console.log("no entra");
//         event.preventDefault(); // Prevent the default form submission
//         submitForm(); // Call the function for AJAX form submission
//     });
// });
