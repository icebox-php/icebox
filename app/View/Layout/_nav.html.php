<?php
use Icebox\Url;
?>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Icebox</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="<?php #echo Url::absolute('/'); ?>">Home</a>
    <a class="p-2 text-dark" href="<?php echo Url::absolute('/leap_year/2012', [], 'http'); ?>">Leap Year</a>
    <a class="p-2 text-dark" href="<?php echo Url::absolute('/flash_message'); ?>">Flash Message</a>
    <a class="p-2 text-dark" href="<?php echo Url::absolute('/posts'); ?>">Posts</a>
  </nav>
  <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>
