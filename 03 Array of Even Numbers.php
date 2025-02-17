<!-- Practice Set 3: Array of Even Numbers

- A PHP script that uses a while loop to display even number elements from the matrix below

$matrix = [
	[12, 23, 34],
	[45, 55, 62],
	[71, 84, 90]
]; -->

<?php
// Matrix
$matrix = [
    [12, 23, 34],
    [45, 55, 62],
    [71, 84, 90]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Even Numbers in Matrix</title>
</head>
<body>
<body class="container mt-5">
    <h2 class="text-center">Even Numbers in Matrix</h2>
    <ul class="list-group">
        <?php
        $row = 0;
        while ($row < count($matrix)) {
            $col = 0;
            while ($col < count($matrix[$row])) {
                if ($matrix[$row][$col] % 2 == 0) {
                    echo "<li class='list-group-item'>" . $matrix[$row][$col] . "</li>";
                }
                $col++;
            }
            $row++;
        }
        ?>
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>