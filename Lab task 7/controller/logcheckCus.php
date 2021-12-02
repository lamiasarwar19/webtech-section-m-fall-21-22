<?php
  
  session_start();
  require_once('../model/userModel.php');
  
  if(!empty($_POST["remember"])) 
  {
    $username = $_POST['username'];
    $password  = $_POST['password'];
	setcookie ("username",$username,time()+60*60*7);
	setcookie ("password",$password,time()+60*60*7);
  } 
  else 
  {
	setcookie("username","");
	setcookie("password","");
  }  

   if(isset($_POST['submit']))
   { 
    $username = $_POST['username'];
    $password  = $_POST['password'];
    if($username == "" || $password == "")
    {
        echo "null input...";
    }
    else
    {
        $status= validationUser($username, $password);

        if($status)
        {
           $_SESSION['flag']=true;
           $_SESSION['username']=$username;
           header('location: ../view/homeeCus.php');
        }
        else
        {
            echo "UserName or password is Incorrect!!!";
        }
    }
}
?>
