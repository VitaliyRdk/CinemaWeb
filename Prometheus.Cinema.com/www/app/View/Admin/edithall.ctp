      <form class="form-signin" method="POST" action="/admin/savehall/<?php echo $hall["Hall"]["id"]?>">
        <h2 class="form-signin-heading">Edit Hall<?php echo $hall["Hall"]["id"]?></h2>
        <input type="text" name="Name" value="<?php echo $hall["Hall"]["Name"]?>" class="input-block-level" placeholder="Name hall">
       	<input type="text" name="colls" value="<?php echo $hall["Hall"]["colls"]?>" class="input-block-level" placeholder="Colls hall">
        <input type="text" name="rows" value="<?php echo $hall["Hall"]["rows"]?>" class="input-block-level" placeholder="Rows hall">
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        <a href="/admin/delhall/<?php echo $hall["Hall"]["id"]?>">Delete</a>
      </form>