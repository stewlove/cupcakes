<!--
    Stewart Lovell
    Zack Dithilath
    1/5/2023
    https://stewartlovell.greenriverdev.com/328/cupcakes/
    Basic form that requires a name and at least one cupcake selection,
    submits to a page that displays the order information
-->
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
    if (sizeof($flavor) < 1) {
        echo 'Error, no cupcake selected';
    } else {
        echo 'Thank, you, '. $name .' for your order! <br>';
        echo 'Order Summary:';
        foreach ($flavor as $value) {
            echo"<li>".$value."</li>";
        }
        $cupcake = sizeof($flavor);
        $cupcake *= 3.5;
        echo 'order total: $'.$cupcake;
    }

?>
</body>
</html>