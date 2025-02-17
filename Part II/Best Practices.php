<?php

/**
 * Get the total price of items.
 *
 * @param array $items An array of items with 'name' and 'price'.
 * @return float The total price of all items.
 */
function getTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

/**
 * Format a string by removing spaces and converting to lowercase.
 *
 * @param string $text The input string.
 * @return string The formatted string.
 */
function formatString(string $text): string {
    return strtolower(str_replace(' ', '', $text));
}

/**
 * Check if a number is even or odd.
 *
 * @param int $num The number to check.
 * @return string A message stating if the number is even or odd.
 */
function isEvenOrOdd(int $num): string {
    return ($num % 2 === 0) ? "$num is even." : "$num is odd.";
}
