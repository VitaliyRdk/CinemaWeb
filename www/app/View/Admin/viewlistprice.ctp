<table class="table">
	<tr>
		<td>id</td>
		<td>Name</td>
		<td></td>
	</tr>
	<?php
		foreach ($prices as $price):
	?>
	
	<tr>
		<td><?php echo $price["Price"]["id"]?></td>
		<td><?php echo $price["Price"]["session_id"]?></td>
		<td><a href="/admin/editprice/<?php echo $price["Price"]["id"]?>">Edit</a></td>
	</tr>

	<?php
		endforeach;
	?>
</table>