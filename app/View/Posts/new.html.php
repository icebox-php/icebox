<?php
use Icebox\App;
?>

<h5>Add new post</h5>
<hr>

<?php
$this->render('_form', [
  'post' => $post,
  'action' => App::url('/posts'),
  'method' => 'post',
  'button_text' => 'Create'
]);
?>
<p><a href="<?php echo App::url('/posts'); ?>">Back</a></p>
