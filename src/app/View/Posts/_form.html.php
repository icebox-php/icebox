<?php
use Icebox\App;
?>

<br><br>

<form class="margin-bottom-20" action="<?php echo $var['action']; ?>" method="post">

  <?php if($var['method'] != 'post') { ?>
    <input type="hidden" name="_method" value="<?php echo $var['method']; ?>">
  <?php } ?>

  <?php if($var['post']->errors != null) { ?>
    <div class="error-messages">
      <?php foreach($var['post']->errors->full_messages() as $message) { ?>
        <div class="text-danger"><?php echo h($message); ?></div>
      <?php } ?>
    </div>
  <?php } ?>

  <div class="form-group">
      <label for="post_title_input">Title</label>
      <input type="text" class="form-control" id="post_title_input" name="title"
          aria-describedby="title_help" placeholder="Title" value="<?php echo h($var['post']->title); ?>">
      <!-- <small id="title_help" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
      <label for="post_content_input">Content</label>
      <textarea class="form-control" id="post_content_input" name="content"
          placeholder="Content"><?php echo h($var['post']->content); ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary"><?php echo $var['button_text']; ?></button>

</form>
