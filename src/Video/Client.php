<?php

namespace Cblink\WujieaiSdk\Video;


use Cblink\Service\Foundation\BaseApi;

class Client extends BaseApi
{
    /**
     * 视频生视频接口
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createVideo(array $data = [])
    {
        return $this->httpPost('/ai/video/create', $data);
    }

    /**
     * 视频生视频生成结果查询
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function videoGeneratingInfo(array $query = [])
    {
        return $this->httpPost('/ai/video/generating_info', $query);
    }

    /**
     * 视频生成成功后的视频详情查询
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function videoInfo(array $query = [])
    {
        return $this->httpGet('/ai/video/info', $query);
    }

    /**
     * 获取视频生视频模型列表及价格表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function optionMenu(array $query = [])
    {
        return $this->httpGet('/ai/video/option_menu', $query);
    }

    /**
     * 视频模型排队情况
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function waitTime(array $query = [])
    {
        return $this->httpGet('/ai/video/wait_time', $query);
    }

}