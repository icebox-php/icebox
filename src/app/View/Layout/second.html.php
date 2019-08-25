<?php
use Icebox\App;
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>IceBox Web Framework</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo App::root_url('/assets/css/bootstrap.min.css'); ?>">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="<?php echo App::root_url(); ?>">Home</a>
        <a class="p-2 text-dark" href="<?php echo App::url('/leap_year/2012', [], 'http'); ?>">Leap Year</a>
        <a class="p-2 text-dark" href="<?php echo App::url('/flash_message'); ?>">Flash Message</a>
        <a class="p-2 text-dark" href="<?php echo App::url('/posts'); ?>">Posts</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h3>Second Layout</h3>
</div>

<div class="container">

  <?php $success = $this->flash('success'); ?>
  <?php if ($success != null) { ?>
    <div class="alert alert-success"><?php echo $success; ?></div>
  <?php } ?>


  <div class="">
    <?php $this->yield_html(); ?>
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="<?php echo App::root_url('/assets/img/bootstrap-solid.svg'); ?>" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>

<script src="<?php echo App::root_url('/assets/js/jquery-3.3.1.slim.min.js'); ?>"></script>
<script src="<?php echo App::root_url('/assets/js/popper.min.js'); ?>">></script>
<script src="<?php echo App::root_url('/assets/js/bootstrap.min.js'); ?>">></script>

</body>
</html>
