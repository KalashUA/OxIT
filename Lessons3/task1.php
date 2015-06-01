 <?php
 numbers_func(5);
    function numbers_func($numbers) {
    $i = 1;
        do {
            print "{$i}";
            $i++;
        }
        while ($i <= $numbers);
    }
        ?>