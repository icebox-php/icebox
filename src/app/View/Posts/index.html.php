<?php
use Icebox\App;
?>
This is posts#index page <br><br>

File location: <?php echo __FILE__ ?>

<br><br>

<hr>

<h5>All Posts</h5>

<hr>

<?php foreach($var['posts'] as $post) { ?>
  <div><?php echo $post->id; ?></div>
  <h5>
    <a href="<?php echo App::url('posts/:id', [':id' => $post->id]); ?>">
      <?php echo $post->title; ?>
    </a>
  </h5>
  <div><?php echo $post->content; ?></div>
  <hr>
<?php } ?>
