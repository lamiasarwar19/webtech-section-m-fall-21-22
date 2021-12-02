<?php 
if(!empty($_GET['id'])){ 
	?>


<?php 

require_once '../controller/displayCheck.php';
$tableName = 'product';
$product = fetchProduct($tableName, $_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
</head>
<body>
<fieldset><legend>DELETE PRODUCT</legend>
	<form action="../controller/deleteCheck.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
  Product ID: <?php echo $_GET['id']; ?><br>
	Name: <?php echo $product['Name']; ?> <br>
	Buying Price: <?php echo $product['BuyingPrice']; ?> <br>
	Selling Price: <?php echo $product['SellingPrice']; ?> <br>
	Displayable: <?php echo $product['display']; ?>
<hr>
  <input type="submit" name="submit" value="delete">
</form>
</fieldset>
</body>
</html>



<?php }
else{
	echo "You are not allowed to visit this page";
} ?>