<?php
use Icebox\App;
?>

<form class="margin-bottom-20" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">

  <?php if($method != 'post') { ?>
    <input type="hidden" name="_method" value="<?php echo $method; ?>">
  <?php } ?>
  <?php if($post->errors != null) { ?>
    <div class="error-messages">
      <?php foreach($post->errors->full_messages() as $message) { ?>
        <div class="text-danger"><?php echo h($message); ?></div>
      <?php } ?>
    </div>
  <?php } ?>

  <div class="form-group">
    <label for="post_title">Title</label>
    <?php input_tag(array('type' => 'text','class' => 'form-control','id' => 'post_title','name' => 'title','placeholder' => 'Title','value' => h($post->title),)); ?>
  </div>

  <div class="form-group">
    <label for="post_picture">Picture</label>
    <input id="post_picture" type="file" name="picture">
  </div>

  <div class="form-group">
    <label for="post_content">Content</label>
    <?php textarea_tag(h($post->content), array('class' => 'form-control','id' => 'post_content','name' => 'content','placeholder' => 'Content',)); ?>
  </div>

  <div class="form-group">
    <label for="post_published">Published</label>
    <?php checkbox_tag(h($post->published), array('type' => 'checkbox','id' => 'post_published','name' => 'published','value' => 1,)); ?>
  </div>

  <div class="form-group">
    <label for="post_publish_date">Publish_date</label>
    <?php input_tag(array('type' => 'date','class' => 'form-control','id' => 'post_publish_date','name' => 'publish_date','placeholder' => 'Publish_date','value' => h($post->publish_date),)); ?>
  </div>

  <div class="form-group">
    <label for="post_create_time">Create_time</label>
    <?php input_tag(array('type' => 'datetime-local','class' => 'form-control','id' => 'post_create_time','name' => 'create_time','placeholder' => 'Create_time','value' => h($post->create_time),)); ?>
  </div>

  <div class="form-group">
    <label for="post_decimal_col">Decimal_col</label>
    <?php input_tag(array('type' => 'number','class' => 'form-control','id' => 'post_decimal_col','name' => 'decimal_col','placeholder' => 'Decimal_col','value' => h($post->decimal_col),)); ?>
  </div>

  <div class="form-group">
    <label for="post_float_col">Float_col</label>
    <?php input_tag(array('type' => 'number','class' => 'form-control','id' => 'post_float_col','name' => 'float_col','placeholder' => 'Float_col','value' => h($post->float_col),)); ?>
  </div>

  <div class="form-group">
    <label for="post_int_col">Int_col</label>
    <?php input_tag(array('type' => 'number','class' => 'form-control','id' => 'post_int_col','name' => 'int_col','placeholder' => 'Int_col','value' => h($post->int_col),)); ?>
  </div>

  <div class="form-group">
    <label for="post_time_col">Time_col</label>
    <?php input_tag(array('type' => 'time','class' => 'form-control','id' => 'post_time_col','name' => 'time_col','placeholder' => 'Time_col','value' => h($post->time_col),)); ?>
  </div>

  <div class="form-group">
    <label for="post_country">Country</label>
<?php $options = array(""=>"Please select", "1"=>"Lisbon", "2"=>"Madrid", "3"=>"Berlin"); ?>
    <?php select_tag($options, $post->country, array('class' => 'form-control','id' => 'post_country','name' => 'country',)); ?>
  </div>


    <button type="submit" class="btn btn-primary"><?php echo $button_text; ?></button>

</form>
