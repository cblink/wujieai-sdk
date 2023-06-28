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

    public function testCreate()
    {
        $result = $this->app->api->create([
            'model' => 3,
            'prompt' => '有一个姑娘',
            'uc_prompt' => '低俗,色情的',
            'num' => 2,
            'width' => 512,
            'height' => 512,
            'accelerate_times' => 0,
        ]);


        $this->assertTrue(true);
    }
}