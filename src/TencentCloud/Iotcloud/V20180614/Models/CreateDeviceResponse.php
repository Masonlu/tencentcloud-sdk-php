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
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getDevicePsk() 获取对称加密密钥，base64编码。采用对称加密时返回该参数
 * @method void setDevicePsk(string $DevicePsk) 设置对称加密密钥，base64编码。采用对称加密时返回该参数
 * @method string getDeviceCert() 获取设备证书，用于 TLS 建立链接时校验客户端身份。采用非对称加密时返回该参数
 * @method void setDeviceCert(string $DeviceCert) 设置设备证书，用于 TLS 建立链接时校验客户端身份。采用非对称加密时返回该参数
 * @method string getDevicePrivateKey() 获取设备私钥，用于 TLS 建立链接时校验客户端身份，腾讯云后台不保存，请妥善保管。采用非对称加密时返回该参数
 * @method void setDevicePrivateKey(string $DevicePrivateKey) 设置设备私钥，用于 TLS 建立链接时校验客户端身份，腾讯云后台不保存，请妥善保管。采用非对称加密时返回该参数
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *CreateDevice返回参数结构体
 */
class CreateDeviceResponse extends AbstractModel
{
    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 对称加密密钥，base64编码。采用对称加密时返回该参数
     */
    public $DevicePsk;

    /**
     * @var string 设备证书，用于 TLS 建立链接时校验客户端身份。采用非对称加密时返回该参数
     */
    public $DeviceCert;

    /**
     * @var string 设备私钥，用于 TLS 建立链接时校验客户端身份，腾讯云后台不保存，请妥善保管。采用非对称加密时返回该参数
     */
    public $DevicePrivateKey;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param string $DeviceName 设备名称
     * @param string $DevicePsk 对称加密密钥，base64编码。采用对称加密时返回该参数
     * @param string $DeviceCert 设备证书，用于 TLS 建立链接时校验客户端身份。采用非对称加密时返回该参数
     * @param string $DevicePrivateKey 设备私钥，用于 TLS 建立链接时校验客户端身份，腾讯云后台不保存，请妥善保管。采用非对称加密时返回该参数
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DevicePsk",$param) and $param["DevicePsk"] !== null) {
            $this->DevicePsk = $param["DevicePsk"];
        }

        if (array_key_exists("DeviceCert",$param) and $param["DeviceCert"] !== null) {
            $this->DeviceCert = $param["DeviceCert"];
        }

        if (array_key_exists("DevicePrivateKey",$param) and $param["DevicePrivateKey"] !== null) {
            $this->DevicePrivateKey = $param["DevicePrivateKey"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
