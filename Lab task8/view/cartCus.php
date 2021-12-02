<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="menu-bar">
        <ul>
            <li ><img src="../Assets/MabLogo.png" height="70px"></li>
            <!-- <li class="active"><a href="viewProCus.php"><i class="fa fa-user"></i>Profile</a></li> -->
            <li class="active"><a href="homeeCus.php"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="wishlistCus.php"><i class="fa fa-list"></i>My WishList</a></li>
            <li><a href="contact.php"><i class="fa fa-compress"></i>Contact</a></li>
            <li><a href="../controller/logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </div>



    <table border="1" width="100%" align="center" height="400px">
        <td align="center">
            
            <form method="post" action="../controller/logcheckCus.php">               
                <fieldset style="width:320px">
                    <legend height>My Cart</legend>
                    <table height="300px">
                    <tr>
                    <td><b>Product</b></td>
			        <td><b>Price</b></td>
                    </tr>
                    <r>
                    <td>Shirt</td>
                    <td>650.00</td>
                    <td>
                    <a href="edit.php?id=1"> Buy</a> |
                    <a href="delete.php?id=1"> DELETE</a>
                    </td>
                    </tr>
                    <tr>
                    <td>Radium</td>
                    <td>99.00</td>
                    <td>
                    <a href="edit.php?id=1"> Buy</a> |
                    <a href="delete.php?id=1"> DELETE</a>
                    </td>
                    </tr>
                    <tr>
                    <td>Banana</td>
                    <td>15.00</td>
                    <td>
                    <a href="edit.php?id=1"> Buy</a> |
                    <a href="delete.php?id=1"> DELETE</a>
                    </td>
                    </tr>
                    <tr>
                    <td>pant</td>
                    <td>550.00</td>
                    <td>
                    <a href="edit.php?id=1"> Buy</a> |
                    <a href="delete.php?id=1"> DELETE</a>
                    </td>
                    </tr>
                    <tr>
                    <td>fan</td>
                    <td>1650.00</td>
                    <td>
                    <a href="edit.php?id=1"> Buy</a> |
                    <a href="delete.php?id=1"> DELETE</a>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <input type="submit" name="submit" value="Buy">
                    </td>
                    </tr>
                    </table>
                </fieldset>
            </form>
        </td>
        </table>
    <!-- <table border="1" width="100%" height="50px">
        <td colspan="3"><center>Copyright2021@MAB</center></td> 
    </table>  -->
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