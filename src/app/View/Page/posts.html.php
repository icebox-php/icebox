<h5>All Posts</h5>
<br><br>

<?php foreach($var['posts'] as $post) { ?>
  <div><?php echo $post->id; ?></div>
  <h5><?php echo $post->title; ?></h5>
  <div><?php echo $post->content; ?></div>
  <hr>
<?php } ?>
