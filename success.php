<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
    <style>
        body {
            background-color: #3C091a;
            color: #d3a140;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            padding-top: 50px;
        }

        h1 {
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        a {
            color: #d3a140;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Payment Successful!</h1>

    <p>Thank you for your order. We've send the order and shortlyare gonna send it to you</strong>.</p>

    <p><a href="track.html">Track Order</a> or <a href="index.html">return to the homepage</a>.</p>

    <script>
    // Dummy order details for illustration purposes
    var dummyOrderDetails = {
        payer: {
            name: {
                given_name: "John",
                surname: "Doe"
            }
        },
        // Include any other relevant order details here
    };

    // Send email on successful payment
    fetch('/send-email', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            orderDetails: dummyOrderDetails,
        }),
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        // Introduce a delay before redirecting to ensure email sending completes
        setTimeout(function () {
            window.location.href = 'success.html';
        }, 2000); // Adjust the delay (in milliseconds) as needed
    })
    .catch(error => console.error('Error:', error));
</script>

    

</body>

</html>