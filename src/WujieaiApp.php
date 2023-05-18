<?php

namespace Cblink\WujieaiSdk;


use Hyperf\Utils\Collection;
use Cblink\Service\Foundation\Container;

/**
 * @property-read Collection $config
 * @property-read \GuzzleHttp\Client $client
 *
 * @property-read Kernel\AccessToken $accessToken
 * @property-read Api\Client $api     api
 */
class WujieaiApp extends Container
{
    protected array $providers = [
        Kernel\ServiceProvider::class,
        Api\ServiceProvider::class,
    ];
}