<?php
	session_start();
	if(isset($_SESSION['flag'])){
        require_once('../model/userModel.php');
  //  $user = $_SESSION['loggedInUser'];
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="https://fonts.googleapis.com/css?family=Abirl+fatface|Dancing+Script" href="stylesheet ">
  <link rel="stylesheet" href="../css/style.css">
</head>


<body class="container">
    <div class="menu-bar">
        <ul>
            <li ><img src="../Assets/MabLogo.png" height="70px" align="left"></li>
            <li class="active"><a href="viewProCus.php"><i class="fa fa-user"></i>Profile</a></li>
            <li><a href="cartCus.php"><i class="fa fa-shopping-cart"></i>MyCart</a></li>
            <li><a href="contact.php"><i class="fa fa-compress"></i>Contact</a></li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>
    
    <table border="1" width="100%" height="300px" align="center">
        <tr align="left" >
              
              <td height="300px" align="center"><h2>Welcome <?php echo $_SESSION['username'] ?></h2></td></b>
    </table>
    
    <div class="menu-bar">
        <ul>
            <li class="active">Copyright2021@MAB</a></li>
        </ul>
    </div>



</body>
</html>

<?php
	}else{
		header('location: ../view/loginCus.html ');
	}
?>
