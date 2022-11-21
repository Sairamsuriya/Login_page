<?php
include('connection_one.php');
if(isset($_POST['signup']))
{
  $Name = $_POST['Name'];

  $Age = $_POST['Age'];

  $Email = $_POST['user'];

  $Password=$_POST['pass'];

  $sql = "INSERT INTO `login`(`Name`, `Age`, `Email`,`Password`) VALUES ('$Name','$Age','$Email','$Password')";

  $result = $conn->query($sql);

    if ($result == TRUE) {
      
     
      header("location: ./simple_login.html");
      echo "<script>alert('you logined successfully')</script>";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

   

}


?>
