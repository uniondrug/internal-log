<?php
/**
 * Created by PhpStorm.
 * User: zhupengfei
 * Date: 2020-04-09
 * Time: 11:36
 */
namespace Uniondrug\InternalLog;

use Uniondrug\Framework\Services\Service;

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

    public function setModule()
    {
        $this->module = $this->config->path("app.appName");
        $this->params['module'] = $this->module;
    }

    public function getModule()
    {
        return $this->module;
    }

    public function setLogDate()
    {
        $this->logDate = date("Y-m-d H:i:s");
        $this->params['logDate'] = $this->logDate;
    }

    public function getLogDate()
    {
        return $this->logDate;
    }

    public function setOpenId($openId)
    {
        $this->openId = $openId;
        $this->params['openId'] = $this->openId;
    }

    public function getOpenId()
    {
        return $this->openId;
    }

    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
        $this->params['memberId'] = $this->memberId;
    }

    public function getMemberId()
    {
        return $this->memberId;
    }

    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        $this->params['mobile'] = $this->mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->params['name'] = $this->name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setIp()
    {
        $this->ip = $this->request->getClientAddress();
        $this->params['ip'] = $this->ip;
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function setLon($lon)
    {
        $this->lon = $lon;
        $this->params['lon'] = $this->lon;
    }

    public function getLon()
    {
        return $this->lon;
    }

    public function setLat($lat)
    {
        $this->lat = $lat;
        $this->params['lat'] = $this->lat;
    }

    public function getLat()
    {
        return $this->lat;
    }

    public function setAction($action)
    {
        $this->action = $action;
        $this->params['action'] = $this->action;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setOptInfo($optInfo)
    {
        $this->optInfo = $optInfo;
        $this->params['optInfo'] = $this->optInfo;
    }

    public function getOptInfo()
    {
        return $this->optInfo;
    }

    public function setRelationId($relationId)
    {
        $this->relationId = $relationId;
        $this->params['relationId'] = $this->relationId;
    }

    public function getRelationId()
    {
        return $this->relationId;
    }

    public function setRelationType($relationType)
    {
        $this->relationType = $relationType;
        $this->params['relationType'] = $this->relationType;
    }

    public function getRelationType()
    {
        return $this->relationType;
    }

    public function setRelationDesc($relationDesc)
    {
        $this->relationDesc = $relationDesc;
        $this->params['relationDesc'] = $this->relationDesc;
    }

    public function getRelationDesc()
    {
        return $this->relationDesc;
    }

    public function setExtra($extra)
    {
        $this->extra = $extra;
        $this->params['extra'] = $this->extra;
    }

    public function getExtra()
    {
        return $this->extra;
    }

    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;
        $this->params['terminalId'] = $this->terminalId;
    }

    public function getTerminalId()
    {
        return $this->terminalId;
    }

    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
        $this->params['terminalType'] = $this->terminalType;
    }

    public function getTerminalType()
    {
        return $this->terminalType;
    }

    public function setTerminalModel($terminalModel)
    {
        $this->terminalModel = $terminalModel;
        $this->params['terminalModel'] = $this->terminalModel;
    }

    public function getTerminalModel()
    {
        return $this->terminalModel;
    }

    public function setTransId()
    {
        $this->transId = $this->request->getHeader("request-id");
        $this->params['transId'] = $this->transId;
    }

    public function getTransId()
    {
        return $this->transId;
    }

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
}