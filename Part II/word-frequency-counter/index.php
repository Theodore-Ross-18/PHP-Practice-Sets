<?php
// Function: Clean and tokenize text
function tokenizeText($text) {
    // Convert: lowercase
    $text = strtolower($text);
    // Remove: punctuation
    $text = preg_replace('/[^\w\s]/', '', $text);
    // Split: text into words
    $words = explode(" ", $text);
    return array_filter($words); // Remv empty elements
}

// Function: Remv common stop words
function removeStopWords($words) {
    $stopWords = [
        "the", "and", "in", "on", "at", "of", "a", "an", "to", "for", "with",
        "by", "that", "this", "is", "it", "as", "from", "or", "be", "are", "was"
    ];
    return array_diff($words, $stopWords);
}

// Function: Calculate word frequency
function calculateWordFrequency($words) {
    return array_count_values($words);
}

// Function: Sort word frequency array
function sortWordFrequency($wordFrequencies, $order) {
    if ($order === "asc") {
        asort($wordFrequencies);
    } else {
        arsort($wordFrequencies);
    }
    return $wordFrequencies;
}

// Process: user input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputText = trim($_POST['text']);
    $sortingOrder = $_POST['sort'];
    $displayLimit = intval($_POST['limit']);

    if (empty($inputText)) {
        echo "<p style='color:red;'>Error: Text input cannot be empty!</p>";
        exit;
    }

    // Tokenize, remove stop words, and calculate word frequency
    $words = tokenizeText($inputText);
    $filteredWords = removeStopWords($words);
    $wordFrequencies = calculateWordFrequency($filteredWords);

    // Sort word frequency array
    $sortedWords = sortWordFrequency($wordFrequencies, $sortingOrder);

    // Limit output
    $sortedWords = array_slice($sortedWords, 0, $displayLimit, true);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Word Frequency Results</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>
    <h1>Word Frequency Results</h1>
    <table border="1" cellpadding="10" cellspacing="0" style="margin: auto; border-collapse: collapse;">
        <tr>
            <th>Word</th>
            <th>Frequency</th>
        </tr>
        <?php foreach ($sortedWords as $word => $frequency): ?>
            <tr>
                <td><?= htmlspecialchars($word) ?></td>
                <td><?= $frequency ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="index.php">Back to Input</a>
</body>
</html>
