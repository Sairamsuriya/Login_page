<?php
include('connection.php');
if(isset($_POST['login']))
{
  $Email=$_POST['user'];
  $Password=$_POST['pass'];
  $sql="select * from login where Email='$Email' and Password='$Password'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count=mysqli_num_rows($result);
  if($count==1)
  {
    
  echo"<script>alert('you logined successfully')</script>";
  }
  else
  {
  echo"<script>alert('Sorry your login was failed!')</script>";
  echo"<h1><center>Login failed Invalid username or password</center></h1>";
  }
}

if(isset($_POST['signup']))
{
  header("location: ./signup.html");
}

?>
