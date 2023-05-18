<?php

class AppTest extends \PHPUnit\Framework\TestCase
{

    protected $app;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app = new \Cblink\WujieaiSdk\WujieaiApp([
            'appid' => 'appid',
            'private_key' => 'test',
            'base_url' => 'test',
            'version' => '1'
        ]);
    }

    public function testApi()
    {
        $this->app->api->getBalance();

        $this->assertTrue(true);
    }
}