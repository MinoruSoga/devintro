<?php
  include 'User.php';
?>
<!doctype html>
<html lang="en">

<head>
  <title>userlist</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar navbar-light bg-dark sticky-top navbar-expand-lg">
      <a href="" class="navbar-brand text-white">Users</a>

    </nav>
  </header>
  <main class="container">
    <table class="table w-75 container">
      <thead>
        <tr>
          <th>ID</th>
          <th>username</th>
          <th>name</th>
          <th>email</th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $users = new User;
          $result = $users->get_users();
          // var_dump($result);
          // print_r($result);
          if($result){
            foreach($result as $row){
              $user_id = $row['user_id'];
              echo "<tr>";
              echo "<td>" .$row['user_id']. "</td>";
              echo "<td>" .$row['username']. "</td>";
              echo "<td>" .$row['firstname']. "</td>";
              echo "<td>" .$row['lastname']. "</td>";
              echo "<td>" .$row['email']. "</td>";
              echo "<td></td>";
              echo "<td>";
              echo "<a href='edituser.php?id=$user_id' class='btn btn-sm btn-info text-white mr-3'>Edit</a>";
              echo "<a href='delete.php?id=$user_id' class='btn btn-sm btn-danger text-white'>Delete</a>";
              echo "</td>";
              echo "</tr>";

            }
          }
        ?>
      </tbody>
    </table>
    <a href="createuser.php" class="btn btn-primary float-right">Add User</a>
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