<?php
use Icebox\App;
?>

This is posts#edit page <br><br>

File location: <?php echo __FILE__ ?>

<?php
$this->render('_form', array(
  'post' => $var['post'],
  'action' => App::url('/posts/:id', array(':id' => $var['post']->id)),
  'method' => 'put',
  'button_text' => 'Update'
));
?>

<p><a href="<?php echo App::url('/posts'); ?>">Back</a></p>
