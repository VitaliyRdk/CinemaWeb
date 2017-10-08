<?php
	$film = $film[0];
	//debug($film);
?>
<div class="pagetitle">
					<h2>Афіша</h2>
				</div>
				<div id="content">
					<div id="main" class="blogpost">
						<h3 id="test"><?php echo $film["Film"]["Name"];?></h3>
                        <div id="holder">
				<div id="slideshow">
				<?php
					foreach($film["Photo"] as $photo) :
				?>
					<a><img src="/images/<?php echo $photo["photo"];?>" alt="" title="" />
					</a>

                <?php
                endforeach;
				?>
                    <table id="tab" cellpadding="2" border="1">
                            <caption>Таблиця залів </caption>
                            <tr>
                            <?php
                            	foreach ($film["Session"] as $session) :
                            ?>
                                <tr><td align="center"><a href="/afisha/viewTable/<?php echo $session["id"];?>"><?php echo $session["Hall"]["Name"];?></a></td></tr>
                            <?php
                            	endforeach;
                            ?>
                            </tr>
                        </table>
				</div>	
						<div>	<p class="post_meta"><?php echo $film["Film"]["Description"];?></p>
						<form action="/Fnews/addcommentFilm/<?php echo $film["Film"]["id"];?>" method="post" id="comment_form">
							<h2>Що ви думаєте про фільм?</h2>
							<p><label>Ваше ім'я:</label> <input name= "name" type="text" required class="text" /></p>
							
							<p><label>E-mail:</label> <input name="email" type="email" required class="text" /></p>
	
							<p><label>Коментар:</label> <textarea name="comment" cols="40" required rows="10"></textarea></p>
							
							<p class="formend"><input type="submit" class="submit" value="Відправити" /></p>
                        </form>
                        </div>	
					</div>  
				</div>