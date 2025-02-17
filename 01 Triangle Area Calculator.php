// Practice Set 1: Triangle Area Calculator

// A Simple PHP script that calculates the area of a triangle based
// on the lengths of its three sides using Heron's Formula.

// area_of_triangle = sqrt(s * (s - side1) * (s - side2) * (s - side3))
// where s = side1 + side2 + side3 / 2

<?php
function squareRoot($num) {
    if ($num == 0 || $num == 1) {
        return $num;
    }
    
    $x = $num;
    $y = 1;
    $precision = 0.000001; // Accuracy level
    
    while ($x - $y > $precision) {
        $x = ($x + $y) / 2;
        $y = $num / $x;
    }
    
    return $x;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Area Calculator</title>
</head>
<body>
<h2>Calculate Triangle Area</h2>
    <form method="POST">
        Side 1: <input type="text" name="side1" required> <br>
        Side 2: <input type="text" name="side2" required> <br>
        Side 3: <input type="text" name="side3" required> <br>
        <input type="submit" value="Calculate">
    </form>
    <p>Valid inputs: Positive numerical values where the sum of any two sides is greater than the third.</p>
</body>
</html>