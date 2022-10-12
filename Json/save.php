<?php
if(isset($_POST['user'])){

  $conn = mysqli_connect("localhost","root" ,"","dbmain",3306);
  if($conn->connect_error){
    die('Connection Failed:' .$conn->connect_error);
  }else{
    $username = $_POST['user'];
    $password = $_POST['pass'];

  $new = array(
    "username"=> $_POST['user'],
    "password"=> $_POST['pass']
  );



  $sql = "INSERT INTO logins(username,password) VALUES ('$username','$password')";
   if ($conn->query($sql) == TRUE) {

     $old = json_decode(file_get_contents("validation.json"));
     array_push($old,$new);
     $data_to_save = $old;
     if(!file_put_contents("validation.json",json_encode($data_to_save,JSON_PRETTY_PRINT),LOCK_EX)){
       echo "Json error";
     }else{
       header('Location:table.php');
     }

  }
else{
   echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
 ?>
