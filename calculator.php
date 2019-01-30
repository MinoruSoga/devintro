<?php
  require 'Calculate.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
      <div class="container w-50 mt-5">
      <form action="" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Value1" name="num1">
        </div>
        <div class="form-group">
        <select class="form-control" name="calcu">
          <option value="Addition">+</option>
          <option value="Subtraction">-</option>
          <option value="Multiplication">*</option>
          <option value="Division">/</option>
        </select>
        <div class="">
          <input type="text" class="form-control" placeholder="Value2" name="num2">
        </div>
        <div class="form-group">
          <input name="submit" type="submit" value="Calculate">
        </div>
        <div class="">
          <input type="reset" value="Reset">
        </div>
      </form>
      </div>
      <?php
     
      if(isset($_POST['submit'])){

        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $calcu = $_POST['calcu'];

        $calculator = new Calculator;
        echo "$calcu <br /> <br /> 1st Number: $n1 <br /> 2nd Number: $n2 <br /><br />";
        echo "Answer is:" .$calculator->calculate($n1,$n2, $calcu); 
        // you need to pass $calcu as argument of that function
      }
        ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>