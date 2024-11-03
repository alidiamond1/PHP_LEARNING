<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment</title>
</head>
<body>
    <h1>PHP Assignment</h1>

    <?php
    // 1. Check if a number is even or odd
    echo "<h2>1. Even or Odd</h2>";
    $number = 7;
    if ($number % 2 == 0) {
        echo "The number $number is even";
    } else {
        echo "The number $number is odd";
    }

    // 2. Calculate factorial using for loop
    echo "<h2>2. Factorial</h2>";
    $number = 5;
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial = $factorial * $i;
    }
    echo "Factorial of $number is $factorial";

    // 3. Print even numbers from 27 to 2 using do...while loop
    echo "<h2>3. Even numbers from 27 to 2</h2>";
    $i = 27;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i--;
    } while ($i >= 2);

    // 4. Find common factors of two positive integers using while loop
    echo "<h2>4. Common factors</h2>";
    $num1 = 42;
    $num2 = 70;
    $i = 1;
    echo "Common factors of $num1 and $num2 are: ";
    while ($i <= $num1 && $i <= $num2) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            echo $i . " ";
        }
        $i++;
    }

    // 5. Calculate HCF of two integers using for loop
    echo "<h2>5. HCF</h2>";
    $num1 = 18;
    $num2 = 24;
    $hcf = 1;
    for ($i = 1; $i <= $num1 && $i <= $num2; $i++) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            $hcf = $i;
        }
    }
    echo "HCF of $num1 and $num2 is $hcf";

    // 6. Print non-prime numbers from 90 to 12 using while and for loops
    echo "<h2>6. Non-prime numbers from 90 to 12</h2>";
    $num = 90;
    while ($num >= 12) {
        $isPrime = true;
        for ($i = 2; $i <= $num/2; $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        if (!$isPrime) {
            echo $num . " ";
        }
        $num--;
    }
    ?>

</body>
</html>