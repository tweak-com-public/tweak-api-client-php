<?php
/**
 * Bounds
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
 * OpenAPI spec version: 1.0.3-beta.2
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
 * Bounds Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Bounds implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Bounds';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'top' => 'double',
        'bottom' => 'double',
        'left' => 'double',
        'right' => 'double',
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
        'top' => 'top',
        'bottom' => 'bottom',
        'left' => 'left',
        'right' => 'right',
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
        'top' => 'setTop',
        'bottom' => 'setBottom',
        'left' => 'setLeft',
        'right' => 'setRight',
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
        'top' => 'getTop',
        'bottom' => 'getBottom',
        'left' => 'getLeft',
        'right' => 'getRight',
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
        $this->container['top'] = isset($data['top']) ? $data['top'] : 0.0;
        $this->container['bottom'] = isset($data['bottom']) ? $data['bottom'] : 0.0;
        $this->container['left'] = isset($data['left']) ? $data['left'] : 0.0;
        $this->container['right'] = isset($data['right']) ? $data['right'] : 0.0;
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
        if (!is_null($this->container['top']) && ($this->container['top'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'top', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['bottom']) && ($this->container['bottom'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'bottom', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['left']) && ($this->container['left'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'left', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['right']) && ($this->container['right'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'right', must be bigger than or equal to 0.0.";
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
        if ($this->container['top'] < 0.0) {
            return false;
        }
        if ($this->container['bottom'] < 0.0) {
            return false;
        }
        if ($this->container['left'] < 0.0) {
            return false;
        }
        if ($this->container['right'] < 0.0) {
            return false;
        }
        return true;
    }


    /**
     * Gets top
     * @return double
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     * @param double $top
     * @return $this
     */
    public function setTop($top)
    {

        if ($top < 0.0) {
            throw new \InvalidArgumentException('invalid value for $top when calling Bounds., must be bigger than or equal to 0.0.');
        }
        $this->container['top'] = $top;

        return $this;
    }

    /**
     * Gets bottom
     * @return double
     */
    public function getBottom()
    {
        return $this->container['bottom'];
    }

    /**
     * Sets bottom
     * @param double $bottom
     * @return $this
     */
    public function setBottom($bottom)
    {

        if ($bottom < 0.0) {
            throw new \InvalidArgumentException('invalid value for $bottom when calling Bounds., must be bigger than or equal to 0.0.');
        }
        $this->container['bottom'] = $bottom;

        return $this;
    }

    /**
     * Gets left
     * @return double
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
     * Sets left
     * @param double $left
     * @return $this
     */
    public function setLeft($left)
    {

        if ($left < 0.0) {
            throw new \InvalidArgumentException('invalid value for $left when calling Bounds., must be bigger than or equal to 0.0.');
        }
        $this->container['left'] = $left;

        return $this;
    }

    /**
     * Gets right
     * @return double
     */
    public function getRight()
    {
        return $this->container['right'];
    }

    /**
     * Sets right
     * @param double $right
     * @return $this
     */
    public function setRight($right)
    {

        if ($right < 0.0) {
            throw new \InvalidArgumentException('invalid value for $right when calling Bounds., must be bigger than or equal to 0.0.');
        }
        $this->container['right'] = $right;

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

