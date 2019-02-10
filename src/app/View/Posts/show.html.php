<?php
use Icebox\App;
?>

<h5 class="margin-bottom-20">Show post</h5>

<table class="table table-responsive">

<?php foreach($var['post']->attributes() as $attr => $text) { ?>
    <tr>
      <?php // var_dump($attribute); ?>
      <th><?php echo $attr; ?></th>
      <td><?php echo $text; ?></td>
    </tr>
<?php } ?>

</table>

<p>
  <a href="<?php echo App::url('/posts/:id/edit', array(':id' => $var['post']->id)); ?>">Edit</a> |
  <a href="<?php echo App::url('/posts'); ?>">Back</a>
</p>
