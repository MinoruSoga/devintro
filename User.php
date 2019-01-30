<?php
  require "Database.php";

  class User extends Database{

    public function get_users(){
      //query
      $sql = "SELECT * FROM users";
      $result = $this->conn->query($sql);

      //initialize an array
      $rows = array();
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $rows[] = $row;
        }
        return $rows;
      }
      else{
        return $this->conn->error;
      }
    }
    //Select one value from the table useing id
    public function get_user($id){
      $sql = "SELECT * FROM users WHERE user_id=$id";
      $result = $this->conn->query($sql);

      if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        return $row;
      }else{
        return $this->conn->error;
      }
    }

    public function insert($username, $password, $firstname, $lastname, $email){

      $sql1 = "SELECT * FROM users WHERE username = '$username' ";

      if($this->conn->query($sql1)->num_rows > 0){
        echo "<h3 class = 'container text-center mt-3 text-danger'>'Username is already taken'</h3>";

      }else{
      $sql = "INSERT INTO users(username, password, firstname, lastname, email, status) VALUES('$username', '$password', '$firstname', '$lastname', '$email', 1)";
      $result = $this->conn->query($sql);
      if($result){
        header("Location: userlist.php");
      }else{
        echo "Error in inserting record " .$this->conn->error;
      }
    }



        // if($this->conn->query($sql) == TRUE){
        //   header("Location: userlist.php");
        // }else{
        //   echo "Error in inserting record " .$this->conn->error;
        // }
    }
    public function update($username, $password, $firstname, $lastname, $email, $id){

      $sql = "SELECT * FROM users WHERE username = '$username' AND user_id != $id";
      $result = $this->conn->query($sql);
      if($result->num_rows > 0){
        echo "Username is already taken";
      }
      else{
        $sql = "UPDATE users SET username='$username', password='$password', firstname='$firstname', lastname='$lastname', email='$email' WHERE user_id=$id";
        
        $result = $this->conn->query($sql);

        if($result){
          header("Location: userlist.php");
        }
        else{
          echo "Error: ".$this->conn->error;
        }
      }
    }

    public function delete($id){

      $sql = "DELETE FROM users WHERE user_id=$id";

      $result = $this->conn->query($sql);
      if($result){
          header("Location: userlist.php");
      }
      else{
          echo "Error: ".$this->conn->error;
      }

    }
  }
    
?>
