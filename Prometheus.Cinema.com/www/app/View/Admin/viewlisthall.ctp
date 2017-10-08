<table class="table">
	<tr>
		<td>id</td>
		<td>Name</td>
		<td></td>
	</tr>
	<?php
		foreach ($halls as $hall):
	?>
	
	<tr>
		<td><?php echo $hall["Hall"]["id"]?></td>
		<td><?php echo $hall["Hall"]["Name"]?></td>
		<td><a href="/admin/edithall/<?php echo $hall["Hall"]["id"]?>">Edit</a></td>
	</tr>

	<?php
		endforeach;
	?>
</table>