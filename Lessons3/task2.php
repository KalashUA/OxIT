<?php
    $a=1;
    print "<table border='1'><tr>";
    
do {
    $b=1;
    do {
        print "<td>".($a*$b)."</td>";
        $b++;
    } while ($b <=10);
    
    if ($a !=10) print "</tr><tr>";
    $a++;
    } while ($a <=10);
 print "</tr></table>";
?>


        