<?php
  include 'User.php';
?>
<!doctype html>
<html lang="en">

<head>
  <title>createuser</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


</head>

<body>

  <header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a href="userlist.php" class="nav-link">Users</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <!-- content -->
    <div class="container">
      <form action="" method="post">
        <div class="form-grop">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" id="username">
        </div>
        <div class="form-grop">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="form-grop">
          <label for="firstname">Fristname</label>
          <input type="text" name="firstname" class="form-control" id="firstname">
        </div>
        <div class="form-grop">
          <label for="lastname">Lastname</label>
          <input type="text" name="lastname" class="form-control" id="lastname">
        </div>
        <div class="form-grop">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email">
        </div>
        <input type="submit" name="submit" value="Save" class="btm btn-primary btn-block">
      </form>
      <?php
        if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];

        $user = new User;

        $user->insert($username, $password, $firstname, $lastname, $email);
        }
      ?>
    </div>
  </main>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>