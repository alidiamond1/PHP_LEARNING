<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 4 Practice</title>
    <style>
        span {color: brown;}
        table {border: 1px solid navy; border-collapse: collapse; width: 80%}
        td, th {border: 1px solid navy;}
        th {background-color: lightgray;}
    </style>
</head>
<body>
    <h2>Chapter 4 Practice</h2>
    <?php
        // defining arrays in php
        $a = array(7, 1, 3, 9, 2, 8.5, 4, 6, 5);
        
        echo ("<pre>"); //pre-formatted text
        // print_r($a);
        // var_dump($a);
        echo ("</pre>");
        // printing array elements
        echo ("<br>Array elements are:<br>");
        $total = 0; 
        for ($i = 0; $i < count($a); $i++) {
            echo ("$a[$i], ");
            $total += $a[$i];
        }
        echo ("<br>Total of elements = $total");
        $b = array(-2, 7, 1, 2.5, 3, -4, 5, 6, 2);
        // echo ("<br>Size of a = ". count($a)." and size of b = ". count($b));
        echo ("<br>Array b elements are:<br>");
        foreach ($b as $v)
            echo ("$v, ");
        for ($i = 0; $i < count($a); $i++)
            $c[$i] = $a[$i] + $b[$i];
        echo ("<br>Array c elements are:<br>");
        foreach ($c as $v)
            echo ("$v, ");
        
        for ($i = 0; $i < count($a); $i++)
        // for ($i = 0; $i < count(value: $a); $i++)
            $total += $b[$i] += $c[$i];
        echo ("<br>Total of all three arrays elements = $total");
        // multi-dimensional array we use two dimensional array as an example
        // $multi = array (array (1, 2, 3,), array (4, 5, 6,), array (8, 9, 10,), array (12, 13, 14));
        $multi = array (
            array (1, 2, 3,),
            array (4, 5, 6,),
            array (8, 9, 10,),
            array (12, 13, 14,),
        );
        echo ("<pre>");
        // var_dump($multi);
        echo ("</pre>");
        echo ("<br>Two-dimensional array elements are:<br>");
        foreach ($multi as $r => $row) {
            foreach ($row as $c => $v)
                echo ("[$r, $c]: <span>$v</span>, ");
            echo ("<br>");
        }
        // single dimensional associtive (string) array
        $assoc = array(
            'id' => "C289877",
            'name' => "Maxamed Axmed Jaamac",
            'age' => 21,
            'income' => 3400.75,
            'address' => "Banadir street, Hodan district",
            'phone' => "0615995969",
        );
        echo ("<pre>");
        // var_dump($assoc);
        echo ("</pre>");
        echo ("<br>Associative array elements are<br>");
        // echo $assoc['name'];
        // echo $assoc["address"];
        foreach ($assoc as $v)
            echo ("$v, ");
        // print associative array elements as well as indexes
        echo ("<br>Associative array elements with indexes are:<br>");
        foreach ($assoc as $i => $v) //i = index, v = value
            echo ("[$i] : $v<br>");
        // Two-dimensional associative array
        $twoAssoc = array(
            'ca212' => array (
                'id' => "c2138899",
                'name' => "Cali Cabdi",
                'address' => "Bakaaraha",
            ),
            'ca213' => array (
                'id' => "c2138877",
                'name' => "Farxisa AXmed",
                'address' => "Cali Turcaaye Suuqa Xoolaha",
            ),
            'ca214' => array (
                'id' => "c1238878",
                'name' => "Hodan Cali Cabdi",
                'address' => "Bakaaraha Degmada Hodan",
            ),
            'ca215' => array (
                'id' => "c1238898",
                'name' => "Jeenyo Cabdi Faarax",
                'address' => "Doogle Daarusalaam",
            ),
        );
        echo ("<pre>");
        // var_dump($twoAssoc);
        echo ("</pre>");
        echo ("<table><caption>Two-dimensional associative array elements are:</caption>");
        // print 2nd index as header of the table
        foreach ($twoAssoc as $row) {
            echo ("<tr><th> ");
            foreach ($row as $key2 => $v)
                echo ("<th>". ucfirst($key2));
            break;
        }
        // print array values
        foreach ($twoAssoc as $r => $row) {
            echo ("<tr><th>$r");
            foreach ($row as $v)
                echo ("<td>$v");
            // echo ("<br>");
        }
        echo ("</table>");
    ?>
</body>
</html>