<!-- Practice Set 2: Array of Fruits

- An array of fruits with at least five elements.
- With a PHP script that uses a for loop to display each element of the array in ordered list (ol).
- Using count() from available array functions in the condition of the for loop. -->

<?php
// An array of fruits
$fruits = ["Apple", "Banana", "Cherry", "Mango", "Orange"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Fruit List</title>
</head>
<body class="container mt-5">
<h2 class="text-center">List of Fruits</h2>
    <ol class="list-group list-group-numbered">
        <?php
        for ($i = 0; $i < count($fruits); $i++) {
            echo "<li class='list-group-item'>" . $fruits[$i] . "</li>";
        }
        ?>
    </ol>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>