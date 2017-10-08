<?php
	$session = $session[0];
?>
<div class="pagetitle">
					<h2>Афіша</h2>
				</div>
				<div id="afishatablecont">
					<div id="main" class="blogpost">
						<h3 class="afishastile"><?php echo $session["Film"]["Name"];?></h3>
                        <div id="holder">
					<table class="table-afisha">
					<?php
						$mas;
						for ($i = 0; $i<$session["Hall"]["rows"];$i++){
							for ($z = 0; $z<$session["Hall"]["colls"];$z++){
								$mas[$i][$z] = "x";
								foreach ($session["Price"] as $price){
									if ((($price["colls"]-1) == $i)&&(($price["rows"]-1) == $z)){
										$mas[$i][$z] = $price["price"];
									}
								
								}
							}
						}
					?>
					
				<?php
					$a = 0;
					foreach ($mas as $row) :
						$a++;
					?>
					<tr>
						<?php if ($a == 1) {
							for($i = 0; $i <=sizeof($row); $i++){
							?>
							<td><?php echo $i;?></td>
						<?php } ?>
					</tr><tr>
						<? } ?>

						<?php
							$d = 0;
							foreach ($row as $coll) :
								$d++;
								if ($d == 1){
						?>
						<td><?php echo $a;?></td>
						<?php } ?>

						<td><?php echo $coll;?></td>
						
						<?php
							endforeach;
						?>
					</tr>
				<?php
					endforeach;
				?>
		</table>

		</div>
		</div>
                        
                        
                        
                        
</div>