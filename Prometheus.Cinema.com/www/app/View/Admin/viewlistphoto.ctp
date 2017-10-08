<table class="table">
  <tr>
    <td></td>
    <td><?php echo $id?></td>
    <td></td>
  </tr>
  <?php
    foreach ($photos as $photo):
  ?>
  <tr>
    <td><img src="/images/product/<?php echo $photo["Photo"]["file"]?>" style="max-width: 300px;"></td>
    <td><a href="/admin/delproductphoto/<?php echo $photo["Photo"]["id"]?>" class="btn btn-danger">Delete</a></td>
  </tr>
<?php
  endforeach;
?>

</table>
<a href="/admin/addproductphoto/<?php echo $id?>" class="btn btn-info">Add Photo</a>