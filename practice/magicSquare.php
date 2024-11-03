<?php
declare(strict_types=1);

function validateConsecutiveNumbers(array $numbers): bool {
    if (count($numbers) !== 9) {
        return false;
    }
    
    // Check if numbers are consecutive
    sort($numbers);
    for ($i = 1; $i < count($numbers); $i++) {
        if ($numbers[$i] - $numbers[$i-1] !== 1) {
            return false;
        }
    }
    return true;
}

function calculateMagicConstant(array $numbers): int {
    return array_sum($numbers) / 3; // Sum divided by 3 rows
}

function findMedian(array $numbers): int {
    sort($numbers);
    return $numbers[4]; // Middle number in sorted array of 9 numbers
}

function generateMagicSquare(int $median): array {
    $square = array_fill(0, 5, array_fill(0, 5, 0));
    
    // Fill borders with magic constant
    $magicConstant = $median * 3;
    for ($i = 0; $i < 5; $i++) {
        $square[0][$i] = $magicConstant;
        $square[4][$i] = $magicConstant;
        $square[$i][0] = $magicConstant;
        $square[$i][4] = $magicConstant;
    }
    
    // Fill inner square using the formula
    $square[1][1] = $median + 1;
    $square[1][2] = $median - 4;
    $square[1][3] = $median + 3;
    
    $square[2][1] = $median + 2;
    $square[2][2] = $median;
    $square[2][3] = $median - 2;
    
    $square[3][1] = $median - 3;
    $square[3][2] = $median + 4;
    $square[3][3] = $median - 1;
    
    return $square;
}

function displayMagicSquare(array $square): void {
    echo "<div style='font-family: monospace; margin: 20px;'>";
    foreach ($square as $row) {
        echo "<div style='display: flex; justify-content: center;'>";
        foreach ($row as $number) {
            echo "<div style='width: 40px; height: 40px; border: 1px solid black; 
                          display: flex; align-items: center; justify-content: center;'>";
            echo $number;
            echo "</div>";
        }
        echo "</div>";
    }
    echo "</div>";
}

// Main program
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Square Generator</title>
    <style>
        .error { color: red; margin: 10px; }
        .success { color: green; margin: 10px; }
    </style>
</head>
<body>
    <h1>Magic Square Generator</h1>
    
    <form method="post">
        <label>Enter 9 consecutive numbers (comma-separated):</label><br>
        <input type="text" name="numbers" size="40" 
               placeholder="e.g., 1,2,3,4,5,6,7,8,9" 
               value="<?php echo $_POST['numbers'] ?? ''; ?>">
        <input type="submit" value="Generate Magic Square">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $input = $_POST['numbers'] ?? '';
        $numbers = array_map('intval', explode(',', $input));
        
        if (!validateConsecutiveNumbers($numbers)) {
            echo "<div class='error'>Error: Please enter exactly 9 consecutive numbers!</div>";
        } else {
            echo "<div class='success'>Input validated successfully!</div>";
            
            $median = findMedian($numbers);
            $magicConstant = calculateMagicConstant($numbers);
            
            echo "<p>Median: $median</p>";
            echo "<p>Magic Constant: $magicConstant</p>";
            
            $magicSquare = generateMagicSquare($median);
            displayMagicSquare($magicSquare);
        }
    }
    ?>
</body>
</html>
