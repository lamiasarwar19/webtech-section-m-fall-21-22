<?php
     
     session_start();
     if(isset($_SESSION['flag']))
     {
        //$user = $_SESSION['loggedInUser'];
     }
?>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>
	<table border="1" width="100%" align="center">
		<tr>
			<td colspan="3" height="80px" align="right">
				<img src="../Assets/MabLogo.png" width="100px" height="50" align="left">
                Logged in as <?php echo $_SESSION['username'] ?>|
                <a href="homeeCus.php">Back</a>|
				<a href="logout.php">Logout</a>
								
               </td>
		    </tr>

    </table>        
           
         </fieldset>
        </td>  
          </tr>  
         
       </form> 
       </table> 
        <table border="1" width="100%" align="center">
        <tr align="left" height="300px">
            
            <td align="center" >
                <form action="#" method="POST">
                <fieldset>
                    <legend>CHANGE PASSWORD</legend>
                    <table>
                         <tr>
                            <td>Current Password</td>           
                            <td>:<input type="password" name="password" value=""></td>
                         </tr>
                          <tr>
                            <td>New Password</td>
                           <td>:<input type="password" name="Npassword" value=""></td>
                         </tr>

                         <tr>
                            <td>Retype New Password</td>
                           <td>:<input type="password" name="Rnpassword" value=""></td>
                         </tr>



        
                        <tr><td><input type="submit" name="submit" value="Submit">
                        </td></tr>
      
                    </table>
                </fieldset>
                </form>
            </td>
        </tr>
    </table>

         <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright@MAB</center></td> 
    </table> 
</body>
</html>