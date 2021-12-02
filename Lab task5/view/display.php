<?php  
require_once '../controller/displayCheck.php';
$tableName = 'product';
$products = fetchAllProducts($tableName);

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Display</title>
</head>
<body>
<fieldset>
<legend>DISPLAY</legend>
<table>
	<thead>
		<tr>
			
			<th>Name</th>
			<th>Profit</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<?php if($product['display']=='Yes'){ ?>
			<tr>
				
				<td><?php echo $product['Name'] ?></td>
				<td><?php echo $product['SellingPrice']-$product['BuyingPrice'] ?></td>
				<td><a href="editProduct.php">Edit</a>|
					<a href="delete.php">Delete</a></td>
			</tr>
		<?php } ?>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</fieldset>

</body>
</html>