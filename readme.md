Home: http://localhost/ice-box/index.php
Page 2: http://localhost/ice-box/index.php/leap_year/2012

# How to run this web-app

$ cd project_root
$ composer install

# Example urls to test params

valid url: http://localhost/ice-box/about/marketing/item/5/title/some-text
invalid url: http://localhost/ice-box/about/marketing/item/5/title2/some-text


# How to run testsuite

$ vendor/bin/phpunit ./Test/

# How to upload image

 1. create a string column, Such as, I added "picture" column, datatype: varchar, length: 255 <br>

 2. Add this code to _form: <br>

 ```
   <div class="form-group">
     <label for="post_picture">Picture</label>
     <input id="post_picture" type="file" name="picture">
   </div>
```

3. In controller, after you save model, a. upload file and b. set file name in model and c. save the model again with validate false. <br>
   Add this code to controller (I added this code in "create" action):

```
if($saved) {

    if(isset($_FILES['picture'])) {
      $pictue_file_name = md5(microtime()) . '.jpg';
      $path = ICEBOX_DIRECTORY_PUBLIC . '/images/' . $pictue_file_name;
      move_uploaded_file($_FILES['picture']['tmp_name'], $path);
      $post->picture = $pictue_file_name;
      $post->save(false);
    }

    ....
    ....
} else {
    ....
    ....
}
```

4. now you can show this image in "View/Posts/show.html.php" view:

```
  <img src="<?php echo App::root_url(); ?>/images/<?php echo $post->picture; ?>" alt="">
```
