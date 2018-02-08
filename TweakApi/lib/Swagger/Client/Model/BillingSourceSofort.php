<?php
/**
 * BillingSourceSofort
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
 * OpenAPI spec version: 1.0.7-beta.3
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
 * BillingSourceSofort Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingSourceSofort implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BillingSourceSofort';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'country' => 'string',
        'bankCode' => 'string',
        'bic' => 'string',
        'bankName' => 'string',
        'ibanLast4' => 'string',
        'preferredLanguage' => 'string',
        'statementDescriptor' => 'string',
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
        'country' => 'country',
        'bankCode' => 'bankCode',
        'bic' => 'bic',
        'bankName' => 'bankName',
        'ibanLast4' => 'ibanLast4',
        'preferredLanguage' => 'preferredLanguage',
        'statementDescriptor' => 'statementDescriptor',
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
        'country' => 'setCountry',
        'bankCode' => 'setBankCode',
        'bic' => 'setBic',
        'bankName' => 'setBankName',
        'ibanLast4' => 'setIbanLast4',
        'preferredLanguage' => 'setPreferredLanguage',
        'statementDescriptor' => 'setStatementDescriptor',
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
        'country' => 'getCountry',
        'bankCode' => 'getBankCode',
        'bic' => 'getBic',
        'bankName' => 'getBankName',
        'ibanLast4' => 'getIbanLast4',
        'preferredLanguage' => 'getPreferredLanguage',
        'statementDescriptor' => 'getStatementDescriptor',
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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['bankCode'] = isset($data['bankCode']) ? $data['bankCode'] : null;
        $this->container['bic'] = isset($data['bic']) ? $data['bic'] : null;
        $this->container['bankName'] = isset($data['bankName']) ? $data['bankName'] : null;
        $this->container['ibanLast4'] = isset($data['ibanLast4']) ? $data['ibanLast4'] : null;
        $this->container['preferredLanguage'] = isset($data['preferredLanguage']) ? $data['preferredLanguage'] : null;
        $this->container['statementDescriptor'] = isset($data['statementDescriptor']) ? $data['statementDescriptor'] : null;
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
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets bankCode
     * @return string
     */
    public function getBankCode()
    {
        return $this->container['bankCode'];
    }

    /**
     * Sets bankCode
     * @param string $bankCode
     * @return $this
     */
    public function setBankCode($bankCode)
    {
        $this->container['bankCode'] = $bankCode;

        return $this;
    }

    /**
     * Gets bic
     * @return string
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     * @param string $bic
     * @return $this
     */
    public function setBic($bic)
    {
        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets bankName
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bankName'];
    }

    /**
     * Sets bankName
     * @param string $bankName
     * @return $this
     */
    public function setBankName($bankName)
    {
        $this->container['bankName'] = $bankName;

        return $this;
    }

    /**
     * Gets ibanLast4
     * @return string
     */
    public function getIbanLast4()
    {
        return $this->container['ibanLast4'];
    }

    /**
     * Sets ibanLast4
     * @param string $ibanLast4
     * @return $this
     */
    public function setIbanLast4($ibanLast4)
    {
        $this->container['ibanLast4'] = $ibanLast4;

        return $this;
    }

    /**
     * Gets preferredLanguage
     * @return string
     */
    public function getPreferredLanguage()
    {
        return $this->container['preferredLanguage'];
    }

    /**
     * Sets preferredLanguage
     * @param string $preferredLanguage
     * @return $this
     */
    public function setPreferredLanguage($preferredLanguage)
    {
        $this->container['preferredLanguage'] = $preferredLanguage;

        return $this;
    }

    /**
     * Gets statementDescriptor
     * @return string
     */
    public function getStatementDescriptor()
    {
        return $this->container['statementDescriptor'];
    }

    /**
     * Sets statementDescriptor
     * @param string $statementDescriptor
     * @return $this
     */
    public function setStatementDescriptor($statementDescriptor)
    {
        $this->container['statementDescriptor'] = $statementDescriptor;

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

