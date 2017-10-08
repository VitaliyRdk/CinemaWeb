      <form class="form-signin" method="POST" action="/admin/savesession/<?php echo $session["Session"]["id"]?>">
        <h2 class="form-signin-heading">Edit Session <?php echo $session["Session"]["id"]?></h2>
        <input type="text" name="hall_id" value="<?php echo $session["Session"]["hall_id"]?>" class="input-block-level" placeholder="Hall session">
       	<input type="text" name="film_id" value="<?php echo $session["Session"]["film_id"]?>" class="input-block-level" placeholder="Film session">
        <input type="text" name="StartView" value="<?php echo $session["Session"]["StartView"]?>" class="input-block-level" placeholder="StartView session">
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        <a href="/admin/delsession/<?php echo $session["Session"]["id"]?>">Delete</a>
      </form>