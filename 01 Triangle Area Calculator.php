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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $side1 = floatval($_POST['side1']);
    $side2 = floatval($_POST['side2']);
    $side3 = floatval($_POST['side3']);
    
    if (is_numeric($side1) && is_numeric($side2) && is_numeric($side3) && 
        $side1 > 0 && $side2 > 0 && $side3 > 0 && 
        ($side1 + $side2 > $side3) && ($side1 + $side3 > $side2) && ($side2 + $side3 > $side1)) {
        
        $s = ($side1 + $side2 + $side3) / 2;
        $area = squareRoot($s * ($s - $side1) * ($s - $side2) * ($s - $side3));
        if ($area > 0) {
            echo "<p>Triangle Area: " . number_format($area, 2) . " square units</p>";
        } else {
            echo "<p>Invalid input. The given sides do not form a valid triangle.</p>";
        }
    } else {
        echo "<p>Invalid input. Please enter positive numeric values where the sum of any two sides is greater than the third.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Triangle Area Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="text-center">Calculate Triangle Area</h2>
    <form method="POST" class="border p-4 rounded shadow">
        <div class="mb-3">
            <label class="form-label">Side 1:</label>
            <input type="text" name="side1" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Side 2:</label>
            <input type="text" name="side2" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Side 3:</label>
            <input type="text" name="side3" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Calculate</button>
    </form>
    <p class="mt-3 text-center">Valid inputs: Positive numerical values where the sum of any two sides is greater than the third.</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>