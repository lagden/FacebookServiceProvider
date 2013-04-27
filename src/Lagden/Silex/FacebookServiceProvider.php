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
                'appId'  => $app['facebook.app_id'],
                'secret' => $app['facebook.app_secret'],
                'fileUpload' => $app['facebook.file_upload'],
                'sharedSession' => $app['facebook.sharedSession'],
                'trustForwarded' => $app['facebook.trustForwarded'],
            ));
        });
    }

    public function boot(Application $app)
    {
        //...
    }
}
