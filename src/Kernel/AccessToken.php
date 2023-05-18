<?php

namespace Cblink\WujieaiSdk\Kernel;


class AccessToken extends \Cblink\Service\Foundation\AccessToken
{
    public function getToken()
    {
        $appid = $this->app->config['appid'];
        $timestamp = time();
        $data = [
            'appId' => $appid,
            'timestamp' => $timestamp
        ];
        ksort($data);
        $sign = $this->getSign(json_encode($data));

        return json_encode([
            "secretKeyVersion" => $this->app->config['version'],
            "appId" => $appid,
            "sign" => $sign,
            "original" => $data
        ]);
    }

    /**
     * @param string $content
     * @return false|string
     */
    protected function getSign(string $content)
    {
        $key = openssl_get_privatekey($this->app->config['private_key']);
        openssl_sign($content, $sign, $key, OPENSSL_ALGO_SHA256);
        return base64_encode($sign);
    }

    public function getBaseUrl()
    {
        return sprintf('https://gate.wujiebantu.com/wj-open/v%s', $this->app->config['version']);
    }

}