<?php
namespace Lagden\Silex;

use Silex\Application;
use Silex\ServiceProviderInterface;

class FacebookServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['facebook'] = $app->share(function () use ($app) {
            return new \Facebook(array(
                'appId'  => $app['facebook.app_id'];,
                'secret' => $app['facebook.app_secret'];,
            ));
        });
    }

    public function boot(Application $app)
    {
        //...
    }
}
