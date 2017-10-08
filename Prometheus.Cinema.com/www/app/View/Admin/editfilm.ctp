      <form class="form-signin" method="POST" action="/admin/savefilm/<?php echo $film["Film"]["id"]?>">
        <h2 class="form-signin-heading">Edit Film <?php echo $film["Film"]["id"]?></h2>
        <input type="text" name="Name" value="<?php echo $film["Film"]["Name"]?>" class="input-block-level" placeholder="Name film">
       	<input type="text" name="DurationView" value="<?php echo $film["Film"]["DurationView"]?>" class="input-block-level" placeholder="DurationView film">
        <input type="text" name="Genre" value="<?php echo $film["Film"]["Genre"]?>" class="input-block-level" placeholder="Genre film">
        <input type="text" name="Description" value="<?php echo $film["Film"]["Description"]?>" class="input-block-level" placeholder="Description film">
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        <a href="/admin/delfilm/<?php echo $film["Film"]["id"]?>">Delete</a>
      </form>