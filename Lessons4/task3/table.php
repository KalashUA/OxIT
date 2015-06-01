<?php
$b=0;
$row=$_POST['number1'];
$cell=$_POST['number2'];
    print "<table border='1'><tr>";
    
do {
    $a=0;
    do {
        print '<td>'.rand (5,1000).'</td>';
        $a++;
    } while ($a <$row);
    if ($b<$cell) print "</tr><tr>";
    $b++;
    } while ($b<$cell);
 print "</tr></table>";


        