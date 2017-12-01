<?php
/**
 * BillingLimit
 *
 * PHP version 5
 *
 * @category Class
 * @package  Tweak\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * tweak-api
 *
 * Tweak API to integrate with all the Tweak services.  You can find out more about Tweak      at <a href='https://www.tweak.com'>https://www.tweak.com</a>, #tweak.
 *
 * OpenAPI spec version: 1.0.3-alpha.11
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * BillingLimit Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingLimit implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BillingLimit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'teamMember' => '\Swagger\Client\Model\BillingLimitCounter',
        'uploader' => '\Swagger\Client\Model\BillingLimitCounter',
        'portal' => '\Swagger\Client\Model\BillingLimitCounter',
        'jpeg' => '\Swagger\Client\Model\BillingLimitCounter',
        'proof' => '\Swagger\Client\Model\BillingLimitCounter',
        'highResPdf' => '\Swagger\Client\Model\BillingLimitCounter',
        'storage' => '\Swagger\Client\Model\BillingLimitCounter',
        'stockImageLibrary' => '\Swagger\Client\Model\BillingLimitCounter',
        'productDbRecord' => '\Swagger\Client\Model\BillingLimitCounter',
        'accountSupport' => 'bool',
        'supportResponse' => 'string',
        'bandwidth' => '\Swagger\Client\Model\BillingLimitCounter',
        'printerApi' => '\Swagger\Client\Model\BillingLimitCounter',
        'id' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'teamMember' => 'teamMember',
        'uploader' => 'uploader',
        'portal' => 'portal',
        'jpeg' => 'jpeg',
        'proof' => 'proof',
        'highResPdf' => 'highResPdf',
        'storage' => 'storage',
        'stockImageLibrary' => 'stockImageLibrary',
        'productDbRecord' => 'productDbRecord',
        'accountSupport' => 'accountSupport',
        'supportResponse' => 'supportResponse',
        'bandwidth' => 'bandwidth',
        'printerApi' => 'printerApi',
        'id' => 'id'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'teamMember' => 'setTeamMember',
        'uploader' => 'setUploader',
        'portal' => 'setPortal',
        'jpeg' => 'setJpeg',
        'proof' => 'setProof',
        'highResPdf' => 'setHighResPdf',
        'storage' => 'setStorage',
        'stockImageLibrary' => 'setStockImageLibrary',
        'productDbRecord' => 'setProductDbRecord',
        'accountSupport' => 'setAccountSupport',
        'supportResponse' => 'setSupportResponse',
        'bandwidth' => 'setBandwidth',
        'printerApi' => 'setPrinterApi',
        'id' => 'setId'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'teamMember' => 'getTeamMember',
        'uploader' => 'getUploader',
        'portal' => 'getPortal',
        'jpeg' => 'getJpeg',
        'proof' => 'getProof',
        'highResPdf' => 'getHighResPdf',
        'storage' => 'getStorage',
        'stockImageLibrary' => 'getStockImageLibrary',
        'productDbRecord' => 'getProductDbRecord',
        'accountSupport' => 'getAccountSupport',
        'supportResponse' => 'getSupportResponse',
        'bandwidth' => 'getBandwidth',
        'printerApi' => 'getPrinterApi',
        'id' => 'getId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['teamMember'] = isset($data['teamMember']) ? $data['teamMember'] : null;
        $this->container['uploader'] = isset($data['uploader']) ? $data['uploader'] : null;
        $this->container['portal'] = isset($data['portal']) ? $data['portal'] : null;
        $this->container['jpeg'] = isset($data['jpeg']) ? $data['jpeg'] : null;
        $this->container['proof'] = isset($data['proof']) ? $data['proof'] : null;
        $this->container['highResPdf'] = isset($data['highResPdf']) ? $data['highResPdf'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['stockImageLibrary'] = isset($data['stockImageLibrary']) ? $data['stockImageLibrary'] : null;
        $this->container['productDbRecord'] = isset($data['productDbRecord']) ? $data['productDbRecord'] : null;
        $this->container['accountSupport'] = isset($data['accountSupport']) ? $data['accountSupport'] : false;
        $this->container['supportResponse'] = isset($data['supportResponse']) ? $data['supportResponse'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['printerApi'] = isset($data['printerApi']) ? $data['printerApi'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets teamMember
     * @return \Swagger\Client\Model\BillingLimitCounter
     */
    public function getTeamMember()
    {
        return $this->container['teamMember'];
    }

    /**
     * Sets teamMember
     * @param \Swagger\Client\Model\BillingLimitCounter $teamMember
     * @return $this
     */
    public function setTeamMember($teamMember)
    {
        $this->container['teamMember'] = $teamMember;

        return $this;
    }

    /**
     * Gets uploader
     * @return \Swagger\Client\Model\BillingLimitCounter
     */
    public function getUploader()
    {
        return $this->container['uploader'];
    }

    /**
     * Sets uploader
     * @param \Swagger\Client\Model\BillingLimitCounter $uploader
     * @return $this
     */
    public function setUploader($uploader)
    {
        $this->container['uploader'] = $uploader;

        return $this;
    }

    /**
     * Gets portal
     * @return \Swagger\Client\Model\BillingLimitCounter
     */
    public function getPortal()
    {
        return $this->container['portal'];
    }

    /**
     * Sets portal
     * @param \Swagger\Client\Model\BillingLimitCounter $portal
     * @return $this
     */
    public function setPortal($portal)
    {
        $this->container['portal'] = $portal;

        return $this;
    }

    /**
     * Gets jpeg
     * @return \Swagger\Client\Model\BillingLimitCounter
     */
    public function getJpeg()
    {
        return $this->container['jpeg'];
    }

    /**
     * Sets jpeg
     * @param \Swagger\Client\Model\BillingLimitCounter $jpeg
     * @return $this
     */
    public function setJpeg($jpeg)
    {
        $this->container['jpeg'] = $jpeg;

        return $this;
    }

    /**
     * Gets proof
     * @return \Swagger\Client\Model\BillingLimitCounter
     */
    public function getProof()
    {
        return $this->container['proof'];
    }

    /**
     * Sets proof
     * @param \Swagger\Client\Model\BillingLimitCounter $proof
     * @return $this
     */
    public function setProof($proof)
    {
        $this->container['proof'] = $proof;

        return $this;
    }

    /**
     * Gets highResPdf
     * @return \Swagger\Client\Model\BillingLimitCounter
     */
    public function getHighResPdf()
    {
        return $this->container['highResPdf'];
    }

    /**
     * Sets highResPdf
     * @param \Swagger\Client\Model\BillingLimitCounter $highResPdf
     * @return $this
     */
    public function setHighResPdf($highResPdf)
    {
        $this->container['highResPdf'] = $highResPdf;

        return $this;
    }

    /**
     * Gets storage
     * @return \Swagger\Client\Model\BillingLimitCounter
     */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
     * Sets storage
     * @param \Swagger\Client\Model\BillingLimitCounter $storage
     * @return $this
     */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;

        return $this;
    }

    /**
     * Gets stockImageLibrary
     * @return \Swagger\Client\Model\BillingLimitCounter
     */
    public function getStockImageLibrary()
    {
        return $this->container['stockImageLibrary'];
    }

    /**
     * Sets stockImageLibrary
     * @param \Swagger\Client\Model\BillingLimitCounter $stockImageLibrary
     * @return $this
     */
    public function setStockImageLibrary($stockImageLibrary)
    {
        $this->container['stockImageLibrary'] = $stockImageLibrary;

        return $this;
    }

    /**
     * Gets productDbRecord
     * @return \Swagger\Client\Model\BillingLimitCounter
     */
    public function getProductDbRecord()
    {
        return $this->container['productDbRecord'];
    }

    /**
     * Sets productDbRecord
     * @param \Swagger\Client\Model\BillingLimitCounter $productDbRecord
     * @return $this
     */
    public function setProductDbRecord($productDbRecord)
    {
        $this->container['productDbRecord'] = $productDbRecord;

        return $this;
    }

    /**
     * Gets accountSupport
     * @return bool
     */
    public function getAccountSupport()
    {
        return $this->container['accountSupport'];
    }

    /**
     * Sets accountSupport
     * @param bool $accountSupport
     * @return $this
     */
    public function setAccountSupport($accountSupport)
    {
        $this->container['accountSupport'] = $accountSupport;

        return $this;
    }

    /**
     * Gets supportResponse
     * @return string
     */
    public function getSupportResponse()
    {
        return $this->container['supportResponse'];
    }

    /**
     * Sets supportResponse
     * @param string $supportResponse
     * @return $this
     */
    public function setSupportResponse($supportResponse)
    {
        $this->container['supportResponse'] = $supportResponse;

        return $this;
    }

    /**
     * Gets bandwidth
     * @return \Swagger\Client\Model\BillingLimitCounter
     */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
     * Sets bandwidth
     * @param \Swagger\Client\Model\BillingLimitCounter $bandwidth
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * Gets printerApi
     * @return \Swagger\Client\Model\BillingLimitCounter
     */
    public function getPrinterApi()
    {
        return $this->container['printerApi'];
    }

    /**
     * Sets printerApi
     * @param \Swagger\Client\Model\BillingLimitCounter $printerApi
     * @return $this
     */
    public function setPrinterApi($printerApi)
    {
        $this->container['printerApi'] = $printerApi;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Tweak\Api\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Tweak\Api\ObjectSerializer::sanitizeForSerialization($this));
    }
}


