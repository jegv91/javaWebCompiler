<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">

    <title>Compiler for Java</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/bootstrap/css/cover.css" rel="stylesheet">
    <style>
      h2{
        color:#59b2fd;
      }
    </style>
  </head>
  <body>

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">online compiler for java</h3>
              <ul class="nav masthead-nav">
                <li><a href="../controllers/index.php">Home</a></li>
                <li ><a href="../controllers/makeCompilation.php">Compiler</a></li>
                <li class="active"><a href="#">Examples</a></li>
              </ul>
            </div>
          </div>
          <div class="inner cover">            
            <div class="row">
              <?php
              while($ejemplo = mysql_fetch_array($ejemplos)) {
                echo ('<div class="col-6 col-sm-6 col-lg-4" style="text-align:left">');
                  echo ("<h2>".$ejemplo['title']."</h2>");
                  echo ("<p>".$ejemplo['description']."</p>");
                  echo ("<p><a class='btn btn-default' href='../controllers/makeCompilation.php?id=".$ejemplo['id_example']."' role='button'>View details &raquo;</a></p>");
                echo ("</div>");
              }
              ?>
            </div> <!-- Div row -->
          </div> <!-- Div All page content -->
         <?php include_once('../views/footer.php');?>
         </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>