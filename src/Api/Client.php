<?php

namespace Cblink\WujieaiSdk\Api;


use Cblink\Service\Foundation\BaseApi;

class Client extends BaseApi
{
    /**
     * 获取积分信息
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getBalance(array $data = [])
    {
        return $this->httpGet('/account/availableIntegralBalance', $data);
    }

    /**
     * 创建 ai 作图
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $data = [])
    {
        return $this->httpPost('/ai/create', $data);
    }

    /**
     * 作画成功后的图片详情查询
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function info(array $data = [])
    {
        return $this->httpGet('/ai/info', $data);
    }

    /**
     * 作画结果查询
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function generatingInfo(array $data = [])
    {
        return $this->httpPost('/ai/generating_info', $data);
    }

    /**
     * 计算作画成本
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function priceInfo(array $data = [])
    {
        return $this->httpPost('/ai/price_info', $data);
    }

    /**
     * 获取预设资源
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDefaultResource(array $data = [])
    {
        return $this->httpGet('/ai/default_resource', $data);
    }

    /**
     * 撤销作画
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function cancel(array $data = [])
    {
        return $this->httpPost('/ai/cancel', $data);
    }

    /**
     * 获取模型列表
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getModelBaseInfos(array $data = [])
    {
        return $this->httpGet('/ai/model_base_infos', $data);
    }

    /**
     * 加速作画
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function accelerate(array $data = [])
    {
        return $this->httpPost('/ai/accelerate', $data);
    }

    /**
     * 获取单个模型排队信息
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getModelInfo(array $data = [])
    {
        return $this->httpGet('/ai/model_info', $data);
    }

    /**
     * 获取上传底图token
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createToken(array $data = [])
    {
        return $this->httpPost('/ai/create_token', $data);
    }

    /**
     * 单张图片进行超分辨处理
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function supersize(array $data = [])
    {
        return $this->httpPost('/ai/supersize', $data);
    }

    /**
     * 超分结果批量查询
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getSupersize(array $data = [])
    {
        return $this->httpGet('/ai/supersize', $data);
    }

    /**
     * 作画参数查询接口, 一次最多可查询6个key的作画参数
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createParams(array $data = [])
    {
        return $this->httpPost('/ai/create_params', $data);
    }

    /**
     * 提交描述词优化任务
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function optimizePromptSubmit(array $data = [])
    {
        return $this->httpPost('/ai/optimize/prompt/submit', $data);
    }

    /**
     * 询描述词优化任务结果
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function optimizePromptResult(array $data = [])
    {
        return $this->httpGet('/ai/optimize/prompt/submit', $data);
    }

}