<?php

namespace SmartRock\Silex;

use Silex\Application;
use Silex\ServiceProviderInterface;

class FacebookServiceProvider implements ServiceProviderInterface
{
    private $appId;
    private $appSecret;

    public function __construct($options)
    {
        $this->appId     = $options['facebook.app_id'];
        $this->appSecret = $options['facebook.app_secret'];
    }

    public function register(Application $app)
    {

        $app['facebook'] = $app->share(function ($app) {
            return new \Facebook(array(
                'appId'  => $this->appId,
                'secret' => $this->appSecret,
            ));
        });
    }

    public function boot(Application $app)
    {
    }
}