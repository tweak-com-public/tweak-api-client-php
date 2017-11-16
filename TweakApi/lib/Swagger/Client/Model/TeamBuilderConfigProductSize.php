<?php
/**
 * TeamBuilderConfigProductSize
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
 * OpenAPI spec version: 1.0.3-alpha.3
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
 * TeamBuilderConfigProductSize Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TeamBuilderConfigProductSize implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TeamBuilderConfigProductSize';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'productSizeId' => 'string',
        'builderConfigId' => 'string',
        'builderConfig' => '\Swagger\Client\Model\TeamBuilderConfig',
        'productSize' => '\Swagger\Client\Model\ProductSize'
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
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'productSizeId' => 'productSizeId',
        'builderConfigId' => 'builderConfigId',
        'builderConfig' => 'builderConfig',
        'productSize' => 'productSize'
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
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'productSizeId' => 'setProductSizeId',
        'builderConfigId' => 'setBuilderConfigId',
        'builderConfig' => 'setBuilderConfig',
        'productSize' => 'setProductSize'
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
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'productSizeId' => 'getProductSizeId',
        'builderConfigId' => 'getBuilderConfigId',
        'builderConfig' => 'getBuilderConfig',
        'productSize' => 'getProductSize'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['productSizeId'] = isset($data['productSizeId']) ? $data['productSizeId'] : null;
        $this->container['builderConfigId'] = isset($data['builderConfigId']) ? $data['builderConfigId'] : null;
        $this->container['builderConfig'] = isset($data['builderConfig']) ? $data['builderConfig'] : null;
        $this->container['productSize'] = isset($data['productSize']) ? $data['productSize'] : null;
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
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     * @param \DateTime $modified
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

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
     * Gets productSizeId
     * @return string
     */
    public function getProductSizeId()
    {
        return $this->container['productSizeId'];
    }

    /**
     * Sets productSizeId
     * @param string $productSizeId
     * @return $this
     */
    public function setProductSizeId($productSizeId)
    {
        $this->container['productSizeId'] = $productSizeId;

        return $this;
    }

    /**
     * Gets builderConfigId
     * @return string
     */
    public function getBuilderConfigId()
    {
        return $this->container['builderConfigId'];
    }

    /**
     * Sets builderConfigId
     * @param string $builderConfigId
     * @return $this
     */
    public function setBuilderConfigId($builderConfigId)
    {
        $this->container['builderConfigId'] = $builderConfigId;

        return $this;
    }

    /**
     * Gets builderConfig
     * @return \Swagger\Client\Model\TeamBuilderConfig
     */
    public function getBuilderConfig()
    {
        return $this->container['builderConfig'];
    }

    /**
     * Sets builderConfig
     * @param \Swagger\Client\Model\TeamBuilderConfig $builderConfig
     * @return $this
     */
    public function setBuilderConfig($builderConfig)
    {
        $this->container['builderConfig'] = $builderConfig;

        return $this;
    }

    /**
     * Gets productSize
     * @return \Swagger\Client\Model\ProductSize
     */
    public function getProductSize()
    {
        return $this->container['productSize'];
    }

    /**
     * Sets productSize
     * @param \Swagger\Client\Model\ProductSize $productSize
     * @return $this
     */
    public function setProductSize($productSize)
    {
        $this->container['productSize'] = $productSize;

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


