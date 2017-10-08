<table class="table">
	<tr>
		<td>id</td>
		<td>Name</td>
		<td></td>
	</tr>
	<?php
		foreach ($sessions as $session):
	?>
	
	<tr>
		<td><?php echo $session["Session"]["id"]?></td>
		<td><?php echo $session["Session"]["hall_id"]?></td>
		<td><a href="/admin/editsession/<?php echo $session["Session"]["id"]?>">Edit</a></td>
	</tr>

	<?php
		endforeach;
	?>
</table>