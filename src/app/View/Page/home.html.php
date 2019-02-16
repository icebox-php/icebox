<p>This is LeapYear#index file</p>

<p>File Location: <?php echo __DIR__; ?></p>

<p class="underline-text">Received this text from controller:</p>

<h3><?php echo $text; ?></h3>

<?php $this->start_content('user_style'); ?>
  <style type="text/css">
    .underline-text {
      text-decoration: underline;
    }
  </style>
<?php $this->end_content('user_style'); ?>
