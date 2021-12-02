<!DOCTYPE html>
<html>
  <body>
  	
  	<fieldset>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <input type="text" name="Name" value="<?php if (!empty($_POST['Name'])) {echo $_POST['Name'];} ?>" required/>
      <input type="submit" name="findProduct" value="Search By Name"/>
    </form><br>
<?php require_once '../controller/searchProductCheck.php'; ?>
</fieldset>
  </body>
</html>