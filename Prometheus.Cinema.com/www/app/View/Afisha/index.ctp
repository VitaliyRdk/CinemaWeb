<?php
	//debug($films);
?>
<div class="pagetitle">
	<h2>Афіша</h2>
</div>
<div id="content">
	<div id="main">
	<?php
		$i=0;
		foreach($films as $film):
			$i++;
			if($i%2==1){
	?>
		<div class="post_short">
			<h3><a href="/afisha/view/<?php echo $film["Film"]["id"];?>"><?php echo $film["Film"]["Name"];?></a></h3>
			<p>Жанри: <?php echo $film["Film"]["Genre"];?></p>
			<p class="post_meta">Тривалість: <?php echo $film["Film"]["DurationView"];?></p>
		</div>
		<?php
		}else{
		?>
		<div class="post_short alt">
			<h3><a href="/afisha/view/<?php echo $film["Film"]["id"];?>"><?php echo $film["Film"]["Name"];?></a></h3>
			<p>Жанри: <?php echo $film["Film"]["Genre"];?></p>
			<p class="post_meta">Тривалість: <?php echo $film["Film"]["DurationView"];?></p>
		</div>
		<div class="clear sep"></div>
	<?php
		}
		endforeach;
	?>
		
		
	</div>
	<div id="side">
		<h2>Зали:</h2>
		<ul class="categories">
		<?php
			foreach ($halls as $hall) :
		?>
			<li><a href="/afisha/index/<?php echo $hall["Hall"]["id"];?>"><?php echo $hall["Hall"]["Name"];?></a></li>
		<?php
			endforeach;
		?>
		</ul>				
	</div>
</div>