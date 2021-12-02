<?php if(!empty($_GET['id'])){ ?>
<?php 

require_once '../controller/displayCheck.php';
$tableName = 'product';
$product = fetchProduct($tableName, $_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
</head>
<body>
<fieldset><legend>EDIT PRODUCT</legend>
<form action="../controller/editProductCheck.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">

  Name          <input type="text" name="name" value="<?php echo $product['Name']; ?>">
  <br>
  Buying Price <input type="text" name="bprice" value="<?php echo $product['BuyingPrice']; ?>">
  <br>
  Selling Price <input type="text" name="sprice" value="<?php echo $product['SellingPrice']; ?>">
  <br><hr>
  <input type="checkbox" name="display" value="Yes" <?php if($product['display']=='Yes'){echo 'checked';} ?>>
  <label for="display">Display</label>
  <br><hr>
  <input type="submit" name="submit" value="Save">
</form>
</fieldset>
</body>
</html>
<?php }
else{
  echo "You are not allowed to visit this page";
} ?>