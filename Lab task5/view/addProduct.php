<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>

<body>
<fieldset>
  <legend>ADD PRODUCT</legend>

<form action="../controller/addProductCheck.php" method="post" enctype="multipart/form-data">
        Name <input type="text" name="name">
  <br>
        Buying Price <input type="text" name="bprice">
  <br>
        Selling Price <input type="text" name="sprice">
  <br><hr>
        <input type="checkbox" name="display" value="Yes">
        <label for="display">Display</label>
  <br><hr>
        <input type="submit" name="submit" value="Save">
</form>
</fieldset> 
</body>
</html>