# How to create icebox project

`composer create-project icebox-php/icebox my-app` <br>
`cd my-app` <br>

# How to run this web-app

`cd my-app` <br>
`composer install` <br>
`php icebox server` <br>
It will run server to this url http://localhost:8800 <br>

If you want to run in different host and port <br>
`php icebox server --host=0.0.0.0 --port=8802` <br>
It will run server to this url http://0.0.0.0:8802 <br><br>


Home: http://localhost/my-app/index.php <br><br>
Page 2: http://localhost/my-app/index.php/leap_year/2012 <br>
   or : http://localhost/my-app/leap_year/2012 <br><br>

## Example urls to test params

http://localhost/my-app/about/marketing/item/5/title/some-text  

## 404 error page

http://localhost/my-app/an-invalid-url

# How to run testsuite

`vendor/bin/phpunit ./Test/`

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
      $path = 'public/images/' . $pictue_file_name;
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

# Configuration

You can dynamically configure your application using `App::configure()` and retrieve values with `App::config()`.

```php
// Usage
Config::set([
    'log_level' => 'info',
    'time_zone' => 'UTC',
    'nested' => [
        'option' => 'some-value',
    ]
]);

// Later, override specific values
Config::set([
    'log_level' => 'debug', // This overrides the previous value
]);

echo Config::get('log_level'); // 'debug'
echo Config::get('time_zone'); // 'UTC'
echo Config::get('nested.option'); // 'some-value'
```
