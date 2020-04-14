<?php
/**
 * Created by PhpStorm.
 * User: zhupengfei
 * Date: 2020-04-14
 * Time: 09:22
 */
namespace Uniondrug\InternalLog\Tasks;

use Phalcon\Di;
use Uniondrug\Framework\Container;
use Uniondrug\Phar\Server\Tasks\XTask;

class LogTask extends XTask
{
    public static $_logParams = [
        "default" => [
            "logUrl" => "http://java.auditlog.service.dev.uniondrug.info/log/send",
            "logTimeout" => 30,
        ],
        "development" => [
            "logUrl" => "http://java.auditlog.service.dev.uniondrug.info/log/send",
            "logTimeout" => 30,
        ],
        "testing" => [
            "logUrl" => "http://java.auditlog.service.turboradio.cn/log/send",
            "logTimeout" => 30,
        ],
        "release" => [
            "logUrl" => "http://java.auditlog.service.uniondrug.net/log/send",
            "logTimeout" => 30,
        ],
        "production" => [
            "logUrl" => "http://java.auditlog.service.uniondrug.cn/log/send",
            "logTimeout" => 30,
        ]
    ];

    /**
     * @return bool|mixed
     * @throws \Throwable
     */
    public function run()
    {
        /**
         * @var Container $container
         */
        try {
            $container = Di::getDefault();
            $logUrl = $this->getLogUrl($container->environment());
            $timeout = $this->getLogTimeout($container->environment());
            $container->getHttpClient()->post($logUrl, [
                'timeout' => $timeout,
                'headers' => [
                    'content-type' => 'application/json'
                ],
                'json' => $this->data
            ]);
            return true;
        } catch(\Throwable $e) {
            throw $e;
        }
    }

    /**
     * 日志推送地址
     * @param $environment
     * @return string
     */
    public function getLogUrl($environment = "default")
    {
        if (isset(self::$_logParams[$environment]['logUrl'])) {
            return self::$_logParams[$environment]['logUrl'];
        }
        return "";
    }

    /**
     * 日志发送超时时间
     * @param $environment
     * @return string
     */
    public function getLogTimeout($environment = "default")
    {
        if (isset(self::$_logParams[$environment]['logTimeout'])) {
            return self::$_logParams[$environment]['logTimeout'];
        }
        return "";
    }
}