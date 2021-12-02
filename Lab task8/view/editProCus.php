<?php
	session_start();
	if(isset($_SESSION['flag'])){
        require_once('../model/userModel.php');
       // $user=($_SESSION["username"]);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- <table border="1" width="100%" align="center">
        <tr>
            <td colspan="3" height="80px" align="left">
                <img src="../Assets/MabLogo.jpg" height="70px">
            </td>
            <td align="Right">
                <h4>
                    <a href="homeeCus.php"> Home</a> |
                    <a href="contact.php"> Contact</a> |
                    <a href="../controller/logout.php">Logout</a> 			
                </h4>
            </td>
        </tr>
    </table> -->
    <div class="menu-bar">
        <ul>
            <li ><img src="../Assets/MabLogo.png" height="70px"></li>
            <li class="active"><a href="homeeCus.php"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="viewProCus.php"><i class="fa fa-user"></i>Profile</a></li>
            <li><a href="contact.php"><i class="fa fa-compress"></i>Contact</a></li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>
    <table border="1" width="100%" align="center" height="400px">
        <td align="center">
            
        <form method="post" action="../controller/editCheckCus.php">               
                <fieldset style="width:320px" >
                    <legend>
                        <h3>
                            Edit Profile
                        </h3>
                    </legend>
                    <table align="center" height="400px" >
                    <tr>
                            <td>User Name<br></td>
                            <td>:<input type="text" name="username" value="" ></td>
                        </tr>
                    
                  
                        <tr>
                            <td>Email <br></td>        
                            <td> :
                            <input type="email" name="email" value="">
                            </td>
                        </tr>
            
                        <tr>        
                            <td colspan="2">
                                <fieldset>
                                    <legend>Date of Birth</legend>
                                    <input type="date" name="dob" >
                                </fieldset>
                            </td>
                        </tr> 
                        <tr align="right">
                            <td height=" 50px">
                                <input type="submit" name="editSubmit" value="Update Profile">
                                <input type="reset" name="click" value="reset">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </td>
        </table>
    <!-- <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright2021@MAB</center></td> 
    </table> 
     -->
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