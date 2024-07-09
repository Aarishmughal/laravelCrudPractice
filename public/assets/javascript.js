document.addEventListener("DOMContentLoaded", function () {
    var itemName = document.getElementById("itemName");
    var itemPrice = document.getElementById("itemPrice");
    var itemQuantity = document.getElementById("itemQuantity");
    var itemDescription = document.getElementById("itemDescription");

    var inputPrice = document.getElementById("price");
    var inputQuantity = document.getElementById("quantity");
    var totalPrice = document.getElementById("totalPrice");


    // Listen for change in form fields
    document.getElementById("name").addEventListener("change", function () {
        itemName.textContent = this.value;
    });

    document.getElementById("price").addEventListener("change", function () {
        itemPrice.textContent = "$"+this.value;
        updateTotalPrice();
    });

    document.getElementById("quantity").addEventListener("change", function () {
        itemQuantity.textContent = this.value;
        updateTotalPrice();
    });

    document.getElementById("desc").addEventListener("change", function () {
        itemDescription.textContent = this.value;
    });

    function updateTotalPrice() {
        var priceValue = parseFloat(inputPrice.value) || 0;
        var quantityValue = parseInt(inputQuantity.value) || 0;
        var totalPriceNum = priceValue * quantityValue;
        totalPrice.textContent = "$" + totalPriceNum.toFixed(1);
    }
});
