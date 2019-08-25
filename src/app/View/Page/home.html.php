<?php use Icebox\App; ?>

<p>This is LeapYear#index file</p>

<p>File Location: <?php echo __DIR__; ?></p>

<p class="underline-text">Received this text from controller:</p>

<?php echo ICEBOX_DIRECTORY_PUBLIC; //echo App::file(); ?> <br>
<?php echo ICEBOX_DIRECTORY_SRC; //echo App::file(); ?> <br>
<?php echo md5(microtime()); ?>

<h3><?php echo $text; ?></h3>

<?php $this->start_content('user_style'); ?>
  <style type="text/css">
    .underline-text {
      text-decoration: underline;
    }
  </style>
<?php $this->end_content('user_style'); ?>
