<table class="table">
	<tr>
		<td>id</td>
		<td>Name</td>
		<td></td>
	</tr>
	<?php
		foreach ($films as $film):
	?>
	
	<tr>
		<td><?php echo $film["Film"]["id"]?></td>
		<td><?php echo $film["Film"]["Name"]?></td>
		<td><a href="/admin/editfilm/<?php echo $film["Film"]["id"]?>">Edit</a></td>
	</tr>

	<?php
		endforeach;
	?>
</table>