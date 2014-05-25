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
      textarea {
        text-decoration: none;
      }
    </style>
    <script>
      function validateForm() {
      var code_area=document.forms["code_form"]["source_code"].value;
      var input_area = document.forms["code_form"]["input_data"].value;
      if (code_area==null || code_area.trim()=="") {
        alert("It looks like there is nothing to compile :(");
        return false;
      }
      if (input_area==null || input_area=="") {
        return confirm("R u sure your program has no input data?");
      }
      return true;
      }
    </script>
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
                <li class="active"><a href="#">Compiler</a></li>
                <li><a href="../controllers/showSamples.php">Examples</a></li>
              </ul>
            </div>
          </div>
          <div class="inner cover">
            <div class="row">
            <div class="col-md-6">
            <form role="form" name="code_form" method="POST" action="../controllers/makeCompilation.php" onsubmit="validateForm()">
              <div class="form-group" style="text-align:left">
                <label for="source_code">Cool code</label>
                <textarea class="form-control" name="source_code" id="source_code" rows="15"> <?php echo $program->get_source_code(); ?></textarea>
              </div>
              <div class="form-group" style="text-align:left">
                <label for="input">Input values</label>
                <?php if(!empty(trim($program->get_input()))) { ?>
                  <input type="text" class="form-control" name="input_data" id="input_data" value="<?php echo $program->get_input(); ?> ">
                <?php } else { ?>
                <input type="text" class="form-control" name="input_data" id="input_data" placeholder="Input values">
                <?php }?>
              </div>
              <button type="submit" class="btn btn-default">Compile it!</button>
            </form>
          </div>
          <div class="col-md-6">
            <div class="form-group" style="text-align:left">
                <label for="results">Results</label>
                <textarea class="form-control" name="results" id="results" rows="19"><?php print_r($program->get_result()); ?></textarea>
              </div>
          </div> <!-- Div division-->
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