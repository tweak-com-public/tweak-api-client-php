<?php
/**
 * BillingLimitCounter
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
 * OpenAPI spec version: 1.0.3-alpha.0
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
 * BillingLimitCounter Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingLimitCounter implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BillingLimitCounter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'limit' => 'double',
        'count' => 'double',
        'unitType' => 'string',
        'unitPrefix' => 'string',
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
        'limit' => 'limit',
        'count' => 'count',
        'unitType' => 'unitType',
        'unitPrefix' => 'unitPrefix',
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
        'limit' => 'setLimit',
        'count' => 'setCount',
        'unitType' => 'setUnitType',
        'unitPrefix' => 'setUnitPrefix',
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
        'limit' => 'getLimit',
        'count' => 'getCount',
        'unitType' => 'getUnitType',
        'unitPrefix' => 'getUnitPrefix',
        'id' => 'getId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const UNIT_TYPE_NONE = 'none';
    const UNIT_TYPE_BINARY = 'binary';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getUnitTypeAllowableValues()
    {
        return [
            self::UNIT_TYPE_NONE,
            self::UNIT_TYPE_BINARY,
        ];
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 0.0;
        $this->container['count'] = isset($data['count']) ? $data['count'] : 0.0;
        $this->container['unitType'] = isset($data['unitType']) ? $data['unitType'] : null;
        $this->container['unitPrefix'] = isset($data['unitPrefix']) ? $data['unitPrefix'] : null;
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
        $allowed_values = array("none", "binary");
        if (!in_array($this->container['unitType'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'unitType', must be one of #{allowed_values}.";
        }

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
        $allowed_values = array("none", "binary");
        if (!in_array($this->container['unitType'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets limit
     * @return double
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     * @param double $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets count
     * @return double
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param double $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets unitType
     * @return string
     */
    public function getUnitType()
    {
        return $this->container['unitType'];
    }

    /**
     * Sets unitType
     * @param string $unitType
     * @return $this
     */
    public function setUnitType($unitType)
    {
        $allowed_values = array('none', 'binary');
        if (!in_array($unitType, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'unitType', must be one of 'none', 'binary'");
        }
        $this->container['unitType'] = $unitType;

        return $this;
    }

    /**
     * Gets unitPrefix
     * @return string
     */
    public function getUnitPrefix()
    {
        return $this->container['unitPrefix'];
    }

    /**
     * Sets unitPrefix
     * @param string $unitPrefix
     * @return $this
     */
    public function setUnitPrefix($unitPrefix)
    {
        $this->container['unitPrefix'] = $unitPrefix;

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


