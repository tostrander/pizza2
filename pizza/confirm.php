<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    /*
        PASTE POST ARRAY DATA
    */

        //Get the form data
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $address = $_POST['address'];
        $method = $_POST['method'];
        $toppings = $_POST['toppings'];
        $toppingString = implode(", ", $toppings);
        $size = $_POST['size'];

        //Display the form data
        echo "<h1>Thank you for your order, $fname!</h1>";
        echo "<h2>Order Summary</h2>";
        echo "<p>Name: $fname $lname</p>";
        echo "<p>Address: $address</p>";
        echo "<p>Pickup or Delivery: $method</p>";
        echo "<p>Toppings: $toppingString</p>";
        echo "<p>Size: $size</p>";

        //Send email
        $fromAddress = "poppa@gmail.com";
        $toAddress = "tostrander@greenriver.edu";
        $subject = "Order Confirmation";
        $headers = "From: Poppa's Pizza <$fromAddress>";
        $message = "Your order has been confirmed\r\n";
        $message .= "Name: $fname $lname\r\n";
        $message .= "Address: $address\r\n";
        mail($toAddress, $subject, $message, $headers);


    ?>

</body>
</html>