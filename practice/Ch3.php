<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 3 practice</title>
    <style>
        tr:nth-of-type(even) {
            background: lightgray;
        }
        td {text-align: center;}
    </style>
</head>
<body>
    <h1>Chapter 3 Practice</h1>
    <?php
        // conditional control structure 
        // if statement single selection
        $marks = 91;
        if ($marks >= 50)
            echo ("<br>Your have obtained $marks and it is pass");
        // if esle is double selection
        if ($marks >= 50)
            echo ("<br>Your have obtained $marks and it is pass");
        else
            echo ("<br>Your have obtained $marks and it is not pass");
        // if elseif else is multiple selection
        if ($marks > 100 || $marks < 0)
            echo ("<br>Invalid marks. Try again later");
        elseif ($marks >= 90) {
            echo ("<br>Your have obtained $marks and it is excellent");
            echo ("<br>Congratulations!!!");
        }
        else if ($marks >= 80)
            echo ("<br>Your have obtained $marks and it is very good");
        elseif ($marks >= 70)
            echo ("<br>Your have obtained $marks and it is good");
        elseif ($marks >= 60)
            echo ("<br>Your have obtained $marks and it is normal");
        elseif ($marks >= 50)
            echo ("<br>Your have obtained $marks and it is minimal pass");
        else {
            echo ("<br>your have obtained $marks and it is not pass");
            echo ("<br>Please register for re-exam soon!!!</br>");
        }
        // loos in php
        // while statement 
        $i = 1; //counter variable with initial value
        echo ("<br>");
        while ($i <= 34) { //condition with final value
            echo ("$i, ");
            $i++; //increment by 1
            if ($i == 20)
                break; //terminate the loop
        }
        // do while statement 
        $j = 58;
        echo ("<br>Odd numbers from $j are:<br>");
        do {
            $j--;
            if ($j % 2 == 1)
                continue; //skip current loop
            else
                echo ("$j, ");
           
        }while ($j >= 10);
        // for statement 
        // calculate factorial of a number n! = n * n-1
        // $n = 5;
        $fact = 1;
        $n = 6; //initialization
        echo ("<br>Factorial of $n = ");
        for ($i = 2; $i <= $n; $i++)
            $fact *= $i; // means $fact = $fact * $n
        echo ($fact); 
        // nested loops means loop within another loop
        echo ("<table border = '1' width = '80%' ><caption>Multiplication Table</caption>");
        for ($i = 1; $i <= 12; $i++) {
            echo ("<tr>");
            for ($j = 1; $j <= 12; $j++) 
                echo ("<td>". $i * $j); //multiply row to column
        }
        echo ("</table>");

    ?>
</body>
</html>