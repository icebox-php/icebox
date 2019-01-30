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
