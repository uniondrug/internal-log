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
            //日志推送地址
            $logUrl = $container->getConfig()->path("internalLog.logUrl");
            $container->getHttpClient()->post($logUrl, [
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
}