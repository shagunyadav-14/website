document.getElementById("cake-order-form").addEventListener("submit", function(event) {
    let form = event.target;
    let name = document.getElementById("customer-name").value;
    let address = document.getElementById("delivery-address").value;
    let date = document.getElementById("delivery-date").value;

    if (!name || !address || !date) {
        event.preventDefault();  // Prevent form submission
        document.getElementById("order-message").innerHTML = "Please fill in all required fields.";
        document.getElementById("order-message").style.color = "red";
    } else {
        document.getElementById("order-message").innerHTML = "Processing your order...";
        document.getElementById("order-message").style.color = "blue";
    }
});
