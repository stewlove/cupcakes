<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Process Order</title>
</head>
<body>
<?php
    $name = $_POST['name'];
    $flavor = $_POST['flavor'];
    echo 'Thank, you, '. $name .' for your order! <br>';
    echo 'Order Summary:';
    foreach ($flavor as $value) {
        echo"<li>".$value."</li>";
    }
    $cupcake = sizeof($flavor);
    $cupcake *= 3.5;
    echo 'order total: $'.$cupcake;

?>
</body>
</html>