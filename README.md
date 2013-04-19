# Silex FacebookServiceProvider
=========================================

Facebook PHP SDK Service provide for [Silex][1].

Installation
------------

Use [Composer][2].

### Install Composer

In your command line, run:

``` bash
$ curl -s http://getcomposer.org/installer | php
```

Or [download composer.phar][3] into the project root.

### Add FacebookServiceProvider to your composer.json

    "require": {
        "lagden/facebook-service-provider": "dev-master"
    }

### Install Dependencies

Run the following command:

``` bash
$ php composer.phar update
```

Now the FacebookServiceProvider is installed into your vendor directory.

Registering
-----------

```php
$app->register(new Lagden\Silex\FacebookServiceProvider(array(
    'facebook.app_id'     => 'Your app id',
    'facebook.app_secret' => 'Your app secret',
)));
```

Usage
--------

Simply access your facebook object with `$app['facebook']`.