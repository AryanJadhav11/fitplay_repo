<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razorpay Payment Integration</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

<form id="purchaseForm" method="POST">
    <input type="hidden" id="razorpay_order_id" name="razorpay_order_id">
    <input type="hidden" id="razorpay_signature" name="razorpay_signature">
            


    <div class="form-group">
        <label for="fname">Your Name:</label>
        <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter Your Name" required>
    </div>

    <div class="form-group">
        <label for="address">Your Address:</label>
        <input type="address" id="address" class="form-control" placeholder="Enter Your Address" name="address" required>
    </div>

    <div class="form-group">
        <label for="email">Your Email:</label>
        <input type="email" id="email" class="form-control" placeholder="Enter Your Email" name="email" required>
    </div>

    <div class="pt-3">
        <button id="payButton" type="button" class="btn btn-primary btn-block" style="width: 100%;">Proceed to Payment</button>
    </div>
</form>

<script>
    document.getElementById('payButton').addEventListener('click', function(event) {
        event.preventDefault();
        var form = document.getElementById('purchaseForm');
    
        var amount = document.getElementById('amount').value;
        var name = document.getElementById('fname').value;
        var address = document.getElementById('address').value;
        var email = document.getElementById('email').value;

        fetch('/create-order', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                amount: amount,
                name: name,
                address: address,
                email: email
            })
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            var options = {
                "key": "rzp_live_GL8N1VxLpxd9SM",
                "amount": "1" * 100,
                "currency": "INR",
                "name": "Your Company Name",
                "description": "Payment for Purchase",
                "order_id": data.id,
                "handler": function(response) {
                    document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
                    document.getElementById('razorpay_signature').value = response.razorpay_signature;
                    form.submit();
                },
                "prefill": {
                    "name": name,
                    "email": email,
                    "contact": ""
                },
                "notes": {
                    "address": address
                }
            };
            var rzp = new Razorpay(options);
            rzp.open();
        })
        .catch(function(error) {
            console.error('Error:', error);
        });
    });
</script>

</body>
</html>
