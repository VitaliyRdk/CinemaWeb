      <form class="form-signin" method="POST" action="/admin/saveprice/<?php echo $price["Price"]["id"]?>">
        <h2 class="form-signin-heading">Edit Price <?php echo $price["Price"]["id"]?></h2>
        <input type="text" name="session_id" value="<?php echo $price["Price"]["session_id"]?>" class="input-block-level" placeholder="Session price">
       	<input type="text" name="price" value="<?php echo $price["Price"]["price"]?>" class="input-block-level" placeholder="Price">
        <input type="text" name="colls" value="<?php echo $price["Price"]["colls"]?>" class="input-block-level" placeholder="Colls">
        <input type="text" name="rows" value="<?php echo $price["Price"]["rows"]?>" class="input-block-level" placeholder="Rows price">
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        <a href="/admin/delorice/<?php echo $price["Price"]["id"]?>">Delete</a>
      </form>