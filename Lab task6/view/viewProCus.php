<?php
	session_start();
	if(isset($_SESSION['flag'])){
    require_once('../model/userModel.php');
    }else{
		header('location: ../view/loginCus.php ');
	}
   
?>
<!DOCTYPE html>
<html>
<head> 
    <title>View</title>
</head>
<body>
    <table border="1" width="100%" align="center">
        <tr>
            <td colspan="3" height="80px" align="right">
                <img src="../Assets/MabLogo.png" height="70px" align="left">
            <h4>
                    <a href="homeeCus.php"> Home</a> |
                    <a href="editProCus.php"> Edit Profile</a> |
                    <a href="orderCus.php">Oredr History</a> |
                    <a href="contact.php"> Contact</a> |
                    <a href="../controller/logout.php">Logout</a>           
                </h4>
            </td>
        </tr>
    </table>
    
 
    <table border="1" width="100%" align="center" height="400px">
    
        <td align="center">  
        <form method="post" action="logcheckCus.php">               
                <fieldset style="width:320px">
                    <legend height>Profile</legend>
        
                       <table height="300px">
                       <?php 
                                $users = getUserInformation($_SESSION["username"]);
                                foreach($users as $user){
                                    echo "<tr>
                                    <td>Name:{$user["name"]}</td>
                                </tr>
                                <tr>
                                    <td>Email :  {$user["email"]} </td>
                                </tr>
                                <tr>
                                    <td>Gender :  {$user['gender']} </td>
                                </tr>
                                <tr>
                                    <td>DOB :   {$user['dob']} </td>
                                </tr>"; 
                                }
                                ?>
                       
                    </table>
                    </fieldset>
            </form>
        </td>
        </table>
         <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright2021@MAB</center></td> 
    </table> 
                
  
   
    
</body>
</html>
