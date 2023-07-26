<?php

namespace Cblink\WujieaiSdk\Video;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['video'] = function($pimple){
            return new Client($pimple);
        };
    }
}