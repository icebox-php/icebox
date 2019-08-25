<?php
use Icebox\App;
?>

<h5>Edit post</h5>
<hr>

<?php
$this->render('_form', array(
  'post' => $post,
  'action' => App::url('/posts/:id', array(':id' => $post->id)),
  'method' => 'put',
  'button_text' => 'Update'
));
?>

<p><a href="<?php echo App::url('/posts'); ?>">Back</a></p>
