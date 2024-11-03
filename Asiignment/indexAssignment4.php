<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ch04 Assignment (CA212)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1, h2 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #d3d3d3;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>PHP Ch04 Assignment (CA212)</h1>

    <h2>Question 1: Number Conversion</h2>
    <?php
    function decimal_to_binary($decimal) {
        $binary = '';
        while ($decimal > 0) {
            $binary = ($decimal % 2) . $binary;
            $decimal = (int)($decimal / 2);
        }
        return $binary ?: '0';
    }

    function decimal_to_octal($decimal) {
        $octal = '';
        while ($decimal > 0) {
            $octal = ($decimal % 8) . $octal;
            $decimal = (int)($decimal / 8);
        }
        return $octal ?: '0';
    }

    function decimal_to_hexadecimal($decimal) {
        $hex_chars = '0123456789ABCDEF';
        $hexadecimal = '';
        while ($decimal > 0) {
            $hexadecimal = $hex_chars[$decimal % 16] . $hexadecimal;
            $decimal = (int)($decimal / 16);
        }
        return $hexadecimal ?: '0';
    }

    $decimal_number = 52; // You can change this to any positive integer

    echo "<p>Decimal number: " . $decimal_number . "</p>";
    echo "<p>Binary: " . decimal_to_binary($decimal_number) . "</p>";
    echo "<p>Octal: " . decimal_to_octal($decimal_number) . "</p>";
    echo "<p>Hexadecimal: " . decimal_to_hexadecimal($decimal_number) . "</p>";
    ?>

    <br>

    

    <h2>Question 2: Associative Array</h2>
    <?php
    // a) Declare one dimensional associative array
    $person = [
        'Id' => 'C1290122',
        'Name' => 'Mohamed Ali Hassan',
        'Phone' => '0706172827',
        'Dob' => '25-09-2002',
        'Sex' => 'Male'
    ];

    // b) Print array indexes as well as their values
    echo "<h3>Person Information:</h3>";
    echo "<table>";
    echo "<tr><th>Index</th><th>Value</th></tr>";
    foreach ($person as $index => $value) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($index) . "</td>";
        echo "<td>" . htmlspecialchars($value) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>

    <br>


<h2>Question 3: Associative Array of Two Dimensions</h2>
    <?php
    // Declare an associative array of two dimensions
    $data = [
        'Student' => [
            'ID' => 'STD201908001',
            'Name' => 'Mohamed Abdullahi Hassan',
            'Description' => 'Newly Admitted'
        ],
        'Course' => [
            'ID' => 'CRS201905003',
            'Name' => 'Web Design and Development II (PHP)',
            'Description' => 'Core course'
        ],
        'Lecturer' => [
            'ID' => 'LCT201904005',
            'Name' => 'Abdullahi Hussein Ali',
            'Description' => 'Senior Lecturer'
        ]
    ];

    // Print 1st index and 2nd indexes as table column and row headers respectively
    echo "<table>";
    echo "<tr><th></th><th>ID</th><th>Name</th><th>Description</th></tr>";
    foreach ($data as $index => $details) {
        echo "<tr>";
        echo "<th>" . htmlspecialchars($index) . "</th>";
        echo "<td>" . htmlspecialchars($details['ID']) . "</td>";
        echo "<td>" . htmlspecialchars($details['Name']) . "</td>";
        echo "<td>" . htmlspecialchars($details['Description']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    // Print array elements in the intersection of rows and columns
    echo "<h3>Array Elements:</h3>";
    foreach ($data as $index => $details) {
        echo "<p><strong>" . htmlspecialchars($index) . ":</strong></p>";
        echo "<ul>";
        foreach ($details as $key => $value) {
            echo "<li>" . htmlspecialchars($key) . ": " . htmlspecialchars($value) . "</li>";
        }
        echo "</ul>";
    }
    ?>

    <br>





<h2>Question 4: Two-Dimensional Square Array</h2>
    <?php
    // 1) Declare the array and initialize it with the given values
    $array = [
        [2, -6, 8],
        [-6, 1, 6],
        [7, 8, -6]
    ];

    // 2) Print all elements of the array
    echo "<h3>Array Elements:</h3>";
    echo "<table>";
    foreach ($array as $row) {
        echo "<tr>";
        foreach ($row as $element) {
            echo "<td>$element</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // 3) Calculate and print total of odd elements
    $odd_total = 0;
    foreach ($array as $row) {
        foreach ($row as $element) {
            if ($element % 2 != 0) {
                $odd_total += $element;
            }
        }
    }
    echo "<p>3) Total of odd elements: $odd_total</p>";

    // 4) Calculate and print total of even elements
    $even_total = 0;
    foreach ($array as $row) {
        foreach ($row as $element) {
            if ($element % 2 == 0) {
                $even_total += $element;
            }
        }
    }
    echo "<p>4) Total of even elements: $even_total</p>";

    // 5) Calculate and print total of each row
    echo "<h3>5) Row Totals:</h3>";
    foreach ($array as $index => $row) {
        $row_total = array_sum($row);
        echo "<p>Row " . ($index + 1) . " total: $row_total</p>";
    }

    // 6) Calculate and print total of each column
    echo "<h3>6) Column Totals:</h3>";
    $column_totals = array_fill(0, count($array[0]), 0);
    foreach ($array as $row) {
        foreach ($row as $index => $element) {
            $column_totals[$index] += $element;
        }
    }
    foreach ($column_totals as $index => $total) {
        echo "<p>Column " . ($index + 1) . " total: $total</p>";
    }

    // 7) Calculate and print total of each diagonal
    $main_diagonal = 0;
    $secondary_diagonal = 0;
    $n = count($array);
    for ($i = 0; $i < $n; $i++) {
        $main_diagonal += $array[$i][$i];
        $secondary_diagonal += $array[$i][$n - 1 - $i];
    }
    echo "<h3>7) Diagonal Totals:</h3>";
    echo "<p>Main diagonal total: $main_diagonal</p>";
    echo "<p>Secondary diagonal total: $secondary_diagonal</p>";

    // 8) Calculate and print total of all elements
    $total = 0;
    foreach ($array as $row) {
        $total += array_sum($row);
    }
    echo "<h3>8) Total of all elements: $total</h3>";

    // 9) Find minimum element and its positions
    $min = $array[0][0];
    $min_positions = [];
    foreach ($array as $i => $row) {
        foreach ($row as $j => $element) {
            if ($element < $min) {
                $min = $element;
                $min_positions = [[$i, $j]];
            } elseif ($element == $min) {
                $min_positions[] = [$i, $j];
            }
        }
    }
    echo "<h3>9) Minimum element:</h3>";
    echo "<p>Min value: $min</p>";
    echo "<p>Positions: ";
    foreach ($min_positions as $pos) {
        echo "[" . ($pos[0] + 1) . "," . ($pos[1] + 1) . "] ";
    }
    echo "</p>";

    // 10) Find maximum element and its positions
    $max = $array[0][0];
    $max_positions = [];
    foreach ($array as $i => $row) {
        foreach ($row as $j => $element) {
            if ($element > $max) {
                $max = $element;
                $max_positions = [[$i, $j]];
            } elseif ($element == $max) {
                $max_positions[] = [$i, $j];
            }
        }
    }
    echo "<h3>10) Maximum element:</h3>";
    echo "<p>Max value: $max</p>";
    echo "<p>Positions: ";
    foreach ($max_positions as $pos) {
        echo "[" . ($pos[0] + 1) . "," . ($pos[1] + 1) . "] ";
    }
    echo "</p>";
    ?>

</body>
</html>
