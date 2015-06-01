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
            $row=$_POST['row'];
            $cell=$_POST['cell'];

            print  "<table class='table table-bordered table-striped'><tbody><tr>";

            do {

                $a=0;
                do {
                    $text=$_POST[$c];
                    print '<td>'.htmlspecialchars($text, ENT_QUOTES, 'UTF-8').'</td>';
                    $a++;
                    $c++;
                } while ($a <$row);
                if ($b<$cell) print "</tr><tr>";
                $b++;
                } while ($b<$cell);
             print "</tr></tbody></table>";
            ?>
        </div>
    </div>
      
      
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Open in modal window
        </button>

    <div class="modal fade" id="myModal" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>                </button>
            <h4 class="modal-title">Your table</h4>
          </div>
          <div class="modal-body">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-1 col-md-1 col sm-1 col-xs-1">
                            <?php
            $b=0;
            $c=0;
            $row=$_POST['row'];
            $cell=$_POST['cell'];

            print  "<table class='table table-bordered table-striped'><tbody><tr>";

            do {

                $a=0;
                do {
                    $text=$_POST[$c];
                    print "<td>$text</td>";
                    $a++;
                    $c++;
                } while ($a <$row);
                if ($b<$cell) print "</tr><tr>";
                $b++;
                } while ($b<$cell);
             print "</tr></tbody></table>";
            ?>
                      </div>
                  
          
      </div>
      </div>
     </div>
     
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
      
</body>
</html>