<?php
/**
 * Created by PhpStorm.
 * User: zhupengfei
 * Date: 2020-04-09
 * Time: 11:36
 */
namespace Uniondrug\InternalLog;

use Uniondrug\Framework\Services\Service;
use Uniondrug\InternalLog\Tasks\LogTask;

/**
 * Class InternalLog
 * @package Uniondrug\InternalLog
 */
class InternalLog extends Service
{
    /**
     * 模块名称
     */
    public $module;
    /**
     * 发送日志时间
     */
    public $logDate;
    /**
     * 第三方 openId
     */
    public $openId;
    /**
     * 操作人 memberId
     */
    public $memberId;
    /**
     * 操作人手机号码
     */
    public $mobile;
    /**
     * 操作人姓名
     */
    public $name;
    /**
     * ip地址
     */
    public $ip;
    /**
     * 经度
     */
    public $lon;
    /**
     * 纬度
     */
    public $lat;
    /**
     * 动作(CRUD) C-添加数据 D删除数据 U修改数据 R-查询数据
     */
    public $action;
    /**
     * 操作信息
     */
    public $optInfo;
    /**
     * 关联资源Id
     */
    public $relationId;
    /**
     * 关联资源类型
     */
    public $relationType;
    /**
     * 关联资源说明
     */
    public $relationDesc;
    /**
     * 关联资源自定义说明
     */
    public $extra;
    /**
     * 设备Id
     */
    public $terminalId;
    /**
     * 设备类型
     */
    public $terminalType;
    /**
     * 终端型号
     */
    public $terminalModel;
    /**
     * 调用链Id
     */
    public $transId;
    protected $params = [];

    /**
     * 设置模块名称
     */
    public function setModule()
    {
        $this->module = $this->config->path("app.appName");
        $this->params['module'] = $this->module;
    }

    /**
     * 模块名称
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * 设置发送日志时间
     */
    public function setLogDate()
    {
        $this->logDate = date("Y-m-d H:i:s");
        $this->params['logDate'] = $this->logDate;
    }

    /**
     * 发送日志时间
     * @return string
     */
    public function getLogDate()
    {
        return $this->logDate;
    }

    /**
     * 设置第三方 openId
     * @param $openId
     */
    public function setOpenId($openId)
    {
        $this->openId = $openId;
        $this->params['openId'] = $this->openId;
    }

    /**
     * 第三方 openId
     * @return string
     */
    public function getOpenId()
    {
        return $this->openId;
    }

    /**
     * 设置操作人 memberId
     * @param int $memberId
     */
    public function setMemberId(int $memberId)
    {
        $this->memberId = $memberId;
        $this->params['memberId'] = $this->memberId;
    }

    /**
     * 操作人 memberId
     * @return int
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * 设置操作人手机号码
     * @param $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        $this->params['mobile'] = $this->mobile;
    }

    /**
     * 操作人手机号码
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * 设置操作人名称
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->params['name'] = $this->name;
    }

    /**
     * 操作人名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 设置 ip
     */
    public function setIp()
    {
        $this->ip = $this->request->getClientAddress();
        $this->params['ip'] = $this->ip;
    }

    /**
     * ip
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * 设置经度
     * @param $lon
     */
    public function setLon($lon)
    {
        $this->lon = $lon;
        $this->params['lon'] = $this->lon;
    }

    /**
     * 经度
     * @return string
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * 设置纬度
     * @param $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
        $this->params['lat'] = $this->lat;
    }

    /**
     * 纬度
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * 设置动作
     * @param $action
     */
    public function setAction($action)
    {
        $this->action = $action;
        $this->params['action'] = $this->action;
    }

    /**
     * 动作
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * 设置操作信息
     * @param $optInfo
     */
    public function setOptInfo($optInfo)
    {
        $this->optInfo = $optInfo;
        $this->params['optInfo'] = $this->optInfo;
    }

    /**
     * 操作信息
     * @return string
     */
    public function getOptInfo()
    {
        return $this->optInfo;
    }

    /**
     * 设置关联资源Id
     * @param $relationId
     */
    public function setRelationId($relationId)
    {
        $this->relationId = $relationId;
        $this->params['relationId'] = $this->relationId;
    }

    /**
     * 关联资源Id
     * @return string
     */
    public function getRelationId()
    {
        return $this->relationId;
    }

    /**
     * 设置关联资源类型
     * @param $relationType
     */
    public function setRelationType($relationType)
    {
        $this->relationType = $relationType;
        $this->params['relationType'] = $this->relationType;
    }

    /**
     * 关联资源类型
     * @return string
     */
    public function getRelationType()
    {
        return $this->relationType;
    }

    /**
     * 设置关联资源说明
     * @param $relationDesc
     */
    public function setRelationDesc($relationDesc)
    {
        $this->relationDesc = $relationDesc;
        $this->params['relationDesc'] = $this->relationDesc;
    }

    /**
     * 关联资源说明
     * @return string
     */
    public function getRelationDesc()
    {
        return $this->relationDesc;
    }

    /**
     * 设置关联资源自定义说明
     * @param $extra
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;
        $this->params['extra'] = $this->extra;
    }

    /**
     * 关联资源自定义说明
     * @return array
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * 设置设备ID
     * @param $terminalId
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;
        $this->params['terminalId'] = $this->terminalId;
    }

    /**
     * 设备ID
     * @return string
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * 设置设备类型
     * @param $terminalType
     */
    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
        $this->params['terminalType'] = $this->terminalType;
    }

    /**
     * 设备类型
     * @return string
     */
    public function getTerminalType()
    {
        return $this->terminalType;
    }

    /**
     * 设置终端型号
     * @param $terminalModel
     */
    public function setTerminalModel($terminalModel)
    {
        $this->terminalModel = $terminalModel;
        $this->params['terminalModel'] = $this->terminalModel;
    }

    /**
     * 终端型号
     * @return string
     */
    public function getTerminalModel()
    {
        return $this->terminalModel;
    }

    /**
     * 设置请求链 ID
     */
    public function setTransId()
    {
        $this->transId = $this->request->getHeader("request-id");
        $this->params['transId'] = $this->transId;
    }

    /**
     * 请求链 ID
     * @return string
     */
    public function getTransId()
    {
        return $this->transId;
    }

    /**
     * 提交的数组
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * 结果转JSON
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->params, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * 提交日志提交日志
     */
    public function senderServer()
    {
        try {
            $this->di->getServer()->runTask(LogTask::class, $this->params);
        } catch(\Throwable $e) {
        }
    }
}