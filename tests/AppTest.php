<?php

class AppTest extends \PHPUnit\Framework\TestCase
{

    protected $app;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app = new \Cblink\WujieaiSdk\WujieaiApp([
            'appid' => 'test',
            'private_key' => 'test',
            'version' => 1,
            'base_url' => 'test',
        ]);
    }

    public function testApi()
    {
        $this->app->api->getBalance();

        $this->assertTrue(true);
    }
}