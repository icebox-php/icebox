<?php
use Icebox\App;
?>

This is posts#new page <br><br>

File location: <?php echo __FILE__ ?>

<?php
$this->render('_form', [
  'post' => $post,
  'action' => App::url('/posts'),
  'method' => 'post',
  'button_text' => 'Create'
]);
?>

<p><a href="<?php echo App::url('/posts'); ?>">Back</a></p>
