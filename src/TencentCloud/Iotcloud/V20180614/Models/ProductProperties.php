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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getProductDescription() 获取产品描述
 * @method void setProductDescription(string $ProductDescription) 设置产品描述
 * @method string getEncryptionType() 获取加密类型，1表示非对称加密，2表示对称加密。如不填写，默认值是1
 * @method void setEncryptionType(string $EncryptionType) 设置加密类型，1表示非对称加密，2表示对称加密。如不填写，默认值是1
 * @method string getRegion() 获取产品所属区域，目前只支持广州（gz）
 * @method void setRegion(string $Region) 设置产品所属区域，目前只支持广州（gz）
 * @method integer getProductType() 获取产品类型，0表示正常设备，2表示NB-IoT设备，默认值是0
 * @method void setProductType(integer $ProductType) 设置产品类型，0表示正常设备，2表示NB-IoT设备，默认值是0
 * @method string getFormat() 获取数据格式，取值为json或者custom，默认值是json
 * @method void setFormat(string $Format) 设置数据格式，取值为json或者custom，默认值是json
 */

/**
 *产品属性
 */
class ProductProperties extends AbstractModel
{
    /**
     * @var string 产品描述
     */
    public $ProductDescription;

    /**
     * @var string 加密类型，1表示非对称加密，2表示对称加密。如不填写，默认值是1
     */
    public $EncryptionType;

    /**
     * @var string 产品所属区域，目前只支持广州（gz）
     */
    public $Region;

    /**
     * @var integer 产品类型，0表示正常设备，2表示NB-IoT设备，默认值是0
     */
    public $ProductType;

    /**
     * @var string 数据格式，取值为json或者custom，默认值是json
     */
    public $Format;
    /**
     * @param string $ProductDescription 产品描述
     * @param string $EncryptionType 加密类型，1表示非对称加密，2表示对称加密。如不填写，默认值是1
     * @param string $Region 产品所属区域，目前只支持广州（gz）
     * @param integer $ProductType 产品类型，0表示正常设备，2表示NB-IoT设备，默认值是0
     * @param string $Format 数据格式，取值为json或者custom，默认值是json
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
        if (array_key_exists("ProductDescription",$param) and $param["ProductDescription"] !== null) {
            $this->ProductDescription = $param["ProductDescription"];
        }

        if (array_key_exists("EncryptionType",$param) and $param["EncryptionType"] !== null) {
            $this->EncryptionType = $param["EncryptionType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
