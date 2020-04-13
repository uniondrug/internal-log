<?php
/**
 * Created by PhpStorm.
 * User: zhupengfei
 * Date: 2020-04-09
 * Time: 11:15
 */
namespace Uniondrug\InternalLog;

use Phalcon\Di\ServiceProviderInterface;

class InternalLogProvider implements ServiceProviderInterface
{
    public function register(\Phalcon\DiInterface $di)
    {
        $di->setShared('internalLog', function(){
            return new InternalLog();
        });
    }
}
