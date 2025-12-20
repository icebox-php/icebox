<?php
use Icebox\App;
?>

<h5 class="margin-bottom-20">Show post</h5>

<table class="table table-responsive">

  <?php foreach($post->attributes() as $attr => $text) { ?>
    <tr>
      <th><?php echo $attr; ?></th>
      <td><?php echo $text; ?></td>
    </tr>
  <?php } ?>

  <tr>
    <th>Picture</th>
    <td><img src="<?php echo App::root_url(); ?>/images/<?php echo $post->picture; ?>" alt=""> </td>
  </tr>
</table>

<p>
  <a href="<?php echo App::url('/posts/:id/edit', array(':id' => $post->id)); ?>">Edit</a> |
  <a href="<?php echo App::url('/posts'); ?>">Back</a>
</p>
