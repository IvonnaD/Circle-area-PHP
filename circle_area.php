<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST">
    <h3>Please enter circle radius:</h3>
    <p><input type="text" name="radius"></p>
    <input type="submit" value="Calculate">
</form>

<?php 
//calculating circle radius

    if (isset($_POST['radius'])) {

//input for radius
        $radius = floatval($_POST['radius']);

    if ($radius > 0) {
            $area = M_PI * pow($radius, 2);
        
// the output
            echo "<p>If the radius of the circle is: " . $radius . "</p>";
            echo "<p>Area of the circle is: "  .$area . "</p>";
    } else {
            echo "<p>Please enter a positive number for the requested radius.</p>";
    }
}
?>
</body>
</html>