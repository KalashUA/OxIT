<?php
numbers(8);
        function numbers($numbers) {
        switch ($numbers) {
                case 1:
                        print "first";
                        break;
                case 2:
                        print "second";
                        break;
                case 3:
                        print "third";
                        break;
                case 4:
                        print "fourth";
                        break;
                case 5: print "fifth";
                        break;
                default:
                        print "Sorry, you must enter the number from 1 to 5";

        }
}
?>