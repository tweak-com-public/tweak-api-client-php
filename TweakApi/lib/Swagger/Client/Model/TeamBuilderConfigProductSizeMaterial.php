<?php
/**
 * TeamBuilderConfigProductSizeMaterial
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
 * TeamBuilderConfigProductSizeMaterial Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TeamBuilderConfigProductSizeMaterial implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TeamBuilderConfigProductSizeMaterial';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'bindingType' => 'string',
        'defaultBleed' => '\Swagger\Client\Model\Bounds',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'productSizeMaterialId' => 'string',
        'builderConfigId' => 'string',
        'builderConfig' => '\Swagger\Client\Model\TeamBuilderConfig',
        'productSizeMaterial' => '\Swagger\Client\Model\ProductSizeMaterial'
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
        'bindingType' => 'bindingType',
        'defaultBleed' => 'defaultBleed',
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'productSizeMaterialId' => 'productSizeMaterialId',
        'builderConfigId' => 'builderConfigId',
        'builderConfig' => 'builderConfig',
        'productSizeMaterial' => 'productSizeMaterial'
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
        'bindingType' => 'setBindingType',
        'defaultBleed' => 'setDefaultBleed',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'productSizeMaterialId' => 'setProductSizeMaterialId',
        'builderConfigId' => 'setBuilderConfigId',
        'builderConfig' => 'setBuilderConfig',
        'productSizeMaterial' => 'setProductSizeMaterial'
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
        'bindingType' => 'getBindingType',
        'defaultBleed' => 'getDefaultBleed',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'productSizeMaterialId' => 'getProductSizeMaterialId',
        'builderConfigId' => 'getBuilderConfigId',
        'builderConfig' => 'getBuilderConfig',
        'productSizeMaterial' => 'getProductSizeMaterial'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const BINDING_TYPE_NONE = 'none';
    const BINDING_TYPE_SADDLE_STITCHED = 'saddle-stitched';
    const BINDING_TYPE_PERFECT = 'perfect';
    const BINDING_TYPE_SECTION_SEWN = 'section-sewn';
    const BINDING_TYPE_WIRO = 'wiro';
    const BINDING_TYPE_CASED_IN_WIRO = 'cased-in-wiro';
    const BINDING_TYPE_PAMPHLET_STITCHED = 'pamphlet-stitched';
    const BINDING_TYPE_COPTIC = 'coptic';
    const BINDING_TYPE_JAPANESE = 'japanese';
    const BINDING_TYPE_SCREW_POST = 'screw-post';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getBindingTypeAllowableValues()
    {
        return [
            self::BINDING_TYPE_NONE,
            self::BINDING_TYPE_SADDLE_STITCHED,
            self::BINDING_TYPE_PERFECT,
            self::BINDING_TYPE_SECTION_SEWN,
            self::BINDING_TYPE_WIRO,
            self::BINDING_TYPE_CASED_IN_WIRO,
            self::BINDING_TYPE_PAMPHLET_STITCHED,
            self::BINDING_TYPE_COPTIC,
            self::BINDING_TYPE_JAPANESE,
            self::BINDING_TYPE_SCREW_POST,
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
        $this->container['bindingType'] = isset($data['bindingType']) ? $data['bindingType'] : null;
        $this->container['defaultBleed'] = isset($data['defaultBleed']) ? $data['defaultBleed'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['productSizeMaterialId'] = isset($data['productSizeMaterialId']) ? $data['productSizeMaterialId'] : null;
        $this->container['builderConfigId'] = isset($data['builderConfigId']) ? $data['builderConfigId'] : null;
        $this->container['builderConfig'] = isset($data['builderConfig']) ? $data['builderConfig'] : null;
        $this->container['productSizeMaterial'] = isset($data['productSizeMaterial']) ? $data['productSizeMaterial'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("none", "saddle-stitched", "perfect", "section-sewn", "wiro", "cased-in-wiro", "pamphlet-stitched", "coptic", "japanese", "screw-post");
        if (!in_array($this->container['bindingType'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'bindingType', must be one of #{allowed_values}.";
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
        $allowed_values = array("none", "saddle-stitched", "perfect", "section-sewn", "wiro", "cased-in-wiro", "pamphlet-stitched", "coptic", "japanese", "screw-post");
        if (!in_array($this->container['bindingType'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets bindingType
     * @return string
     */
    public function getBindingType()
    {
        return $this->container['bindingType'];
    }

    /**
     * Sets bindingType
     * @param string $bindingType
     * @return $this
     */
    public function setBindingType($bindingType)
    {
        $allowed_values = array('none', 'saddle-stitched', 'perfect', 'section-sewn', 'wiro', 'cased-in-wiro', 'pamphlet-stitched', 'coptic', 'japanese', 'screw-post');
        if (!in_array($bindingType, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'bindingType', must be one of 'none', 'saddle-stitched', 'perfect', 'section-sewn', 'wiro', 'cased-in-wiro', 'pamphlet-stitched', 'coptic', 'japanese', 'screw-post'");
        }
        $this->container['bindingType'] = $bindingType;

        return $this;
    }

    /**
     * Gets defaultBleed
     * @return \Swagger\Client\Model\Bounds
     */
    public function getDefaultBleed()
    {
        return $this->container['defaultBleed'];
    }

    /**
     * Sets defaultBleed
     * @param \Swagger\Client\Model\Bounds $defaultBleed
     * @return $this
     */
    public function setDefaultBleed($defaultBleed)
    {
        $this->container['defaultBleed'] = $defaultBleed;

        return $this;
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
     * Gets productSizeMaterialId
     * @return string
     */
    public function getProductSizeMaterialId()
    {
        return $this->container['productSizeMaterialId'];
    }

    /**
     * Sets productSizeMaterialId
     * @param string $productSizeMaterialId
     * @return $this
     */
    public function setProductSizeMaterialId($productSizeMaterialId)
    {
        $this->container['productSizeMaterialId'] = $productSizeMaterialId;

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
     * Gets productSizeMaterial
     * @return \Swagger\Client\Model\ProductSizeMaterial
     */
    public function getProductSizeMaterial()
    {
        return $this->container['productSizeMaterial'];
    }

    /**
     * Sets productSizeMaterial
     * @param \Swagger\Client\Model\ProductSizeMaterial $productSizeMaterial
     * @return $this
     */
    public function setProductSizeMaterial($productSizeMaterial)
    {
        $this->container['productSizeMaterial'] = $productSizeMaterial;

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


