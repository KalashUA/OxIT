<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table form input</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
   
</head>
<body>
      <div class="container-fluid">
       <div class="col-lg-1 col-md-1">
        <?php
        $b=0;
        $c=0;
        $row=$_POST['number1'];
        $cell=$_POST['number2'];
            print "<form action='displaytable.php' method='POST' class='form-inline'>
           <table class='table table-bordered table-striped'><tbody><tr>";

        do {
            $a=0;
            do {
                print "<td><div class='form-group'><input type='text' name='$c' class='form-control'></div></td>";
                $a++;
                $c++;
            } while ($a <$row);
            if ($b<$cell) print "</tr><tr>";
            $b++;
            } while ($b<$cell);
         print "</tr></tbody></table>
                <input type='hidden' name='row' value='$row'>
                <input  type='hidden' name='cell' value='$cell'>
                <input type='submit' id='button' class='btn btn-primary' value='Display table'>
                </form>"; 
        ?>
        </div>
        </div>
</body>
</html>


        