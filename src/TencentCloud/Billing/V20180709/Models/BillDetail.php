<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getBusinessCodeName() 获取产品名称
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置产品名称
 * @method string getProductCodeName() 获取子产品名称
 * @method void setProductCodeName(string $ProductCodeName) 设置子产品名称
 * @method string getPayModeName() 获取计费模式
 * @method void setPayModeName(string $PayModeName) 设置计费模式
 * @method string getProjectName() 获取项目
 * @method void setProjectName(string $ProjectName) 设置项目
 * @method string getRegionName() 获取区域
 * @method void setRegionName(string $RegionName) 设置区域
 * @method string getZoneName() 获取可用区
 * @method void setZoneName(string $ZoneName) 设置可用区
 * @method string getResourceId() 获取资源实例ID
 * @method void setResourceId(string $ResourceId) 设置资源实例ID
 * @method string getResourceName() 获取实例名称
 * @method void setResourceName(string $ResourceName) 设置实例名称
 * @method string getActionTypeName() 获取交易类型
 * @method void setActionTypeName(string $ActionTypeName) 设置交易类型
 * @method string getOrderId() 获取订单ID
 * @method void setOrderId(string $OrderId) 设置订单ID
 * @method string getBillId() 获取交易ID
 * @method void setBillId(string $BillId) 设置交易ID
 * @method string getPayTime() 获取扣费时间
 * @method void setPayTime(string $PayTime) 设置扣费时间
 * @method string getFeeBeginTime() 获取开始使用时间
 * @method void setFeeBeginTime(string $FeeBeginTime) 设置开始使用时间
 * @method string getFeeEndTime() 获取结束使用时间
 * @method void setFeeEndTime(string $FeeEndTime) 设置结束使用时间
 * @method array getComponentSet() 获取组件列表
 * @method void setComponentSet(array $ComponentSet) 设置组件列表
 */

/**
 *账单明细数据对象
 */
class BillDetail extends AbstractModel
{
    /**
     * @var string 产品名称
     */
    public $BusinessCodeName;

    /**
     * @var string 子产品名称
     */
    public $ProductCodeName;

    /**
     * @var string 计费模式
     */
    public $PayModeName;

    /**
     * @var string 项目
     */
    public $ProjectName;

    /**
     * @var string 区域
     */
    public $RegionName;

    /**
     * @var string 可用区
     */
    public $ZoneName;

    /**
     * @var string 资源实例ID
     */
    public $ResourceId;

    /**
     * @var string 实例名称
     */
    public $ResourceName;

    /**
     * @var string 交易类型
     */
    public $ActionTypeName;

    /**
     * @var string 订单ID
     */
    public $OrderId;

    /**
     * @var string 交易ID
     */
    public $BillId;

    /**
     * @var string 扣费时间
     */
    public $PayTime;

    /**
     * @var string 开始使用时间
     */
    public $FeeBeginTime;

    /**
     * @var string 结束使用时间
     */
    public $FeeEndTime;

    /**
     * @var array 组件列表
     */
    public $ComponentSet;
    /**
     * @param string $BusinessCodeName 产品名称
     * @param string $ProductCodeName 子产品名称
     * @param string $PayModeName 计费模式
     * @param string $ProjectName 项目
     * @param string $RegionName 区域
     * @param string $ZoneName 可用区
     * @param string $ResourceId 资源实例ID
     * @param string $ResourceName 实例名称
     * @param string $ActionTypeName 交易类型
     * @param string $OrderId 订单ID
     * @param string $BillId 交易ID
     * @param string $PayTime 扣费时间
     * @param string $FeeBeginTime 开始使用时间
     * @param string $FeeEndTime 结束使用时间
     * @param array $ComponentSet 组件列表
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
        }

        if (array_key_exists("PayTime",$param) and $param["PayTime"] !== null) {
            $this->PayTime = $param["PayTime"];
        }

        if (array_key_exists("FeeBeginTime",$param) and $param["FeeBeginTime"] !== null) {
            $this->FeeBeginTime = $param["FeeBeginTime"];
        }

        if (array_key_exists("FeeEndTime",$param) and $param["FeeEndTime"] !== null) {
            $this->FeeEndTime = $param["FeeEndTime"];
        }

        if (array_key_exists("ComponentSet",$param) and $param["ComponentSet"] !== null) {
            $this->ComponentSet = [];
            foreach ($param["ComponentSet"] as $key => $value){
                $obj = new BillDetailComponent();
                $obj->deserialize($value);
                array_push($this->ComponentSet, $obj);
            }
        }
    }
}
