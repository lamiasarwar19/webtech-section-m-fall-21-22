<!DOCTYPE html>
<html>
<head>
	<title>Search result</title>
</head>
<body>
	
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Profit</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedProducts as $i => $product): ?>
			<?php if($product['display']=='Yes'){ ?>
			<tr>
				<td><?php echo $product['id'] ?></td>
				<td><?php echo $product['Name'] ?></td>
				<td><?php echo $product['SellingPrice']-$product['BuyingPrice'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $product['id'] ?>">Edit</a>&nbsp&nbsp<a href="delete.php?id=<?php echo $product['id'] ?>">Delete</a></td>
			</tr>
		<?php } ?>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>