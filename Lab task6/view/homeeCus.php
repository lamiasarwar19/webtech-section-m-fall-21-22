<?php
	session_start();
	if(isset($_SESSION['flag'])){
        require_once('../model/userModel.php');
  //  $user = $_SESSION['loggedInUser'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>

<body>
    <table border="1" width="100%" align="center">
        <tr>
            <td colspan="3" height="80px" align="right">
                <img src="../Assets/MabLogo.png" height="70px" align="left">
            
            <h4>
                    Logged in as <?php echo $_SESSION['username'] ?>|
                    <a href="cartCus.php">MyCart</a> |
                    <a href="contact.php">Contact</a> |
                    <a href="../controller/logout.php" >Logout</a>      
                </h4>
            </td>
        </tr>
    </table>
    
    <table border="1" width="100%" height="300px" align="center">
        <tr align="left" >
            <td width="200px">
            <p>
                <h3>Dashboard</h3>
                <ul>
                <li><a href="viewProCus.php"> View Profile</a></li>
                <li><a href="editProCus.php"> Edit Profile</a></li>        
                <li><a href="profilePic.php"> Change Profile Picture</a></li>    
                <li><a href="changepass.php"> Change Passowrd</a></li>
                <li><a href="../controller/logout.php" >Logout </a></li>           
                </ul>      
             </p>
            </td>
              
              <td height="300px" align="center"><h2>Welcome <?php echo $_SESSION['username'] ?></h2></td></b>
    </table>
    
     <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright2021@MAB</center></td> 
    </table> 


</body>
</html>

<?php
	}else{
		header('location: ../view/loginCus.html ');
	}
?>
