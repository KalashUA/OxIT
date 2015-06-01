<?php
switch ($_GET['operator']) {

        case 'sqrt':

                print sqrt($_GET['number1']) ;

                break;

        case 'pow':

                print pow($_GET['number1'], 2);

                break;

}