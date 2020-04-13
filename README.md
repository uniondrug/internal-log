#内审中心日志

#相关接口：

1. `setModule()`(必须)

   设置模块名称
    
1. `setLogDate()`(必须)

    发送日志时间
    
1. `setOpenId()`

    第三方 openId
    
1. `setMemberId($memberId)`(必须)

    操作人 memberId
    
1. `setMobile($mobile)`

    操作人手机号码
    
1. `setName($name)`(必须)

    操作人姓名
    
1. `setIp()`

    ip地址
    
1. `setLon($lon)`

    经度
    
1. `setLat($lat)`

    纬度
    
1. `setAction($action)`(必须)

    动作(CRUD) C-添加数据 D删除数据 U修改数据 R-查询数据
    
1. `setOptInfo($optInfo)`

    操作信息
    
1. `setRelationId($relationId)`(必须)

    关联资源Id
    
1. `setRelationType($relationType)`(必须)

    关联资源类型
    
1. `setRelationDesc($relationDesc)`

    关联资源说明
    
1. `setExtra($extra)`

    关联资源自定义说明
    
1. `setTerminalId($terminalId)`

    设备Id
    
1. `setTerminalType($terminalType)`

    设备类型
    
1. `setTerminalModel($terminalModel)`

    终端型号
    
1. `setTransId()`

    调用链Id
