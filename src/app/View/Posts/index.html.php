<?php
use Icebox\App;
?>

<h5>Posts</h5>

<hr>

<a href="<?php echo App::url('/posts/new'); ?>">Add new post</a>



<table class="table">
  <tr>
    <th>id</th>
    <th>title</th>
    <th>content</th>
    <th></th>
  </tr>

  <?php foreach($posts as $post) { ?>
    <tr>
      <td>
        <a href="<?php echo App::url('posts/:id', [':id' => $post->id]); ?>">
          <?php echo $post->id; ?>
        </a>
      </td>
      <td>
        <a href="<?php echo App::url('posts/:id', [':id' => $post->id]); ?>">
          <?php echo h($post->title); ?>
        </a>
      </td>
      <td><?php echo h($post->content); ?></td>
      <td>
        <a class="btn btn-primary btn-sm" href="<?php echo App::url('/posts/:id/edit', array(':id' => $post->id)); ?>">Edit</a>

        <form class="confirm-delete-form inline-block" action="<?php echo App::url('/posts/:id', array(':id' => $post->id)); ?>" method="post">
          <input type="hidden" name="_method" value="delete">
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
      </td>
    </tr>
  <?php } ?>
</table>
