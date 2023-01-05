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
    <title>Cupcakes</title>
</head>
<body>
    <h1>Cupcake Fundraiser</h1>
    <form method="post" action="process.php">
        <label><input type="text" name="name" required>Your name:</label>
        <label for="name">Cupcake flavors:</label>
        <label><input type="checkbox" name="flavor[]" value="The Grasshopper">The Grasshopper</label>
        <label><input type="checkbox" name="flavor[]" value="Whiskey Maple Bacon">Whiskey Maple Bacon</label>
        <label><input type="checkbox" name="flavor[]" value="Carrot Walnut">Carrot Walnut</label>
        <label><input type="checkbox" name="flavor[]" value="Salted Caramel Cupcake">Salted Caramel Cupcake</label>
        <label><input type="checkbox" name="flavor[]" value="Red Velvet">Red Velvet</label>
        <label><input type="checkbox" name="flavor[]" value="Lemon Drop">Lemon Drop</label>
        <label><input type="checkbox" name="flavor[]" value="Tiramisu">Tiramisu</label>
        <input type="submit" value="Order">
    </form>
</body>
</html>