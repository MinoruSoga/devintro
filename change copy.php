<?php
include 'Database.php';
$id = $_GET['id'];
$val = $_GET['action'];
if($val == 1){
    $sql = "UPDATE users SET status='completed' WHERE task_id=$id";
    
    if($conn->query($sql)){
        header("Location: index.php");
    }
    else{
        echo "Error: ".$conn->error;
    }
}
elseif($val == 3){

    $sql = "DELETE FROM users WHERE user_id=$id";

    $result = $conn->query($sql);
    if($conn->query($sql)){
        header("Location: userlist.php");
    }
    else{
        echo "Error: ".$conn->error;
    }
}

  ?>