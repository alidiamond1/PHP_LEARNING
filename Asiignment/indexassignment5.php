<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Square</title>
</head>
<body>
    <h1>Magic Square</h1>
    
    <?php
    // Array of 9 consecutive numbers
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    
    // Calculate magic constant and median
    $magicConstant = array_sum($numbers) / 3;
    $median = $numbers[4];  // 5 is the middle number
    
    echo "<p>Our Numbers: " . implode(", ", $numbers) . "</p>";
    echo "<p>Magic Constant: $magicConstant</p>";
    echo "<p>Median: $median</p>";
    
    // Display magic square using simple table
    echo "<table border='1' cellpadding='10' style='border-collapse: collapse; margin: 20px;'>";
    
    // First row
    echo "<tr>";
    for($i = 0; $i < 5; $i++) {
        echo "<td style='background-color: #f0f0f0;'>$magicConstant</td>";
    }
    echo "</tr>";
    
    // Second row
    echo "<tr>";
    echo "<td style='background-color: #f0f0f0;'>$magicConstant</td>";
    echo "<td>" . ($median + 1) . "</td>";
    echo "<td>" . ($median - 4) . "</td>";
    echo "<td>" . ($median + 3) . "</td>";
    echo "<td style='background-color: #f0f0f0;'>$magicConstant</td>";
    echo "</tr>";
    
    // Middle row
    echo "<tr>";
    echo "<td style='background-color: #f0f0f0;'>$magicConstant</td>";
    echo "<td>" . ($median + 2) . "</td>";
    echo "<td>$median</td>";
    echo "<td>" . ($median - 2) . "</td>";
    echo "<td style='background-color: #f0f0f0;'>$magicConstant</td>";
    echo "</tr>";
    
    // Fourth row
    echo "<tr>";
    echo "<td style='background-color: #f0f0f0;'>$magicConstant</td>";
    echo "<td>" . ($median - 3) . "</td>";
    echo "<td>" . ($median + 4) . "</td>";
    echo "<td>" . ($median - 1) . "</td>";
    echo "<td style='background-color: #f0f0f0;'>$magicConstant</td>";
    echo "</tr>";
    
    // Last row
    echo "<tr>";
    for($i = 0; $i < 5; $i++) {
        echo "<td style='background-color: #f0f0f0;'>$magicConstant</td>";
    }
    echo "</tr>";
    
    echo "</table>";
    ?>

</body>
</html>
