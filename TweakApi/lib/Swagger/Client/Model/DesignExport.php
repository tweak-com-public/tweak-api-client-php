<?php
/**
 * DesignExport
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
 * OpenAPI spec version: 1.0.0
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
 * DesignExport Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DesignExport implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DesignExport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'type' => 'string',
        'created' => '\DateTime',
        'id' => 'string',
        'designId' => 'string',
        'requesterId' => 'string',
        'designs' => '\Swagger\Client\Model\Design',
        'requester' => '\Swagger\Client\Model\TeamMember'
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
        'type' => 'type',
        'created' => 'created',
        'id' => 'id',
        'designId' => 'designId',
        'requesterId' => 'requesterId',
        'designs' => 'designs',
        'requester' => 'requester'
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
        'type' => 'setType',
        'created' => 'setCreated',
        'id' => 'setId',
        'designId' => 'setDesignId',
        'requesterId' => 'setRequesterId',
        'designs' => 'setDesigns',
        'requester' => 'setRequester'
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
        'type' => 'getType',
        'created' => 'getCreated',
        'id' => 'getId',
        'designId' => 'getDesignId',
        'requesterId' => 'getRequesterId',
        'designs' => 'getDesigns',
        'requester' => 'getRequester'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_PROOF = 'proof';
    const TYPE_PDF = 'pdf';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PROOF,
            self::TYPE_PDF,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['designId'] = isset($data['designId']) ? $data['designId'] : null;
        $this->container['requesterId'] = isset($data['requesterId']) ? $data['requesterId'] : null;
        $this->container['designs'] = isset($data['designs']) ? $data['designs'] : null;
        $this->container['requester'] = isset($data['requester']) ? $data['requester'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = array("proof", "pdf");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
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
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = array("proof", "pdf");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('proof', 'pdf');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'proof', 'pdf'");
        }
        $this->container['type'] = $type;

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
     * Gets designId
     * @return string
     */
    public function getDesignId()
    {
        return $this->container['designId'];
    }

    /**
     * Sets designId
     * @param string $designId
     * @return $this
     */
    public function setDesignId($designId)
    {
        $this->container['designId'] = $designId;

        return $this;
    }

    /**
     * Gets requesterId
     * @return string
     */
    public function getRequesterId()
    {
        return $this->container['requesterId'];
    }

    /**
     * Sets requesterId
     * @param string $requesterId
     * @return $this
     */
    public function setRequesterId($requesterId)
    {
        $this->container['requesterId'] = $requesterId;

        return $this;
    }

    /**
     * Gets designs
     * @return \Swagger\Client\Model\Design
     */
    public function getDesigns()
    {
        return $this->container['designs'];
    }

    /**
     * Sets designs
     * @param \Swagger\Client\Model\Design $designs
     * @return $this
     */
    public function setDesigns($designs)
    {
        $this->container['designs'] = $designs;

        return $this;
    }

    /**
     * Gets requester
     * @return \Swagger\Client\Model\TeamMember
     */
    public function getRequester()
    {
        return $this->container['requester'];
    }

    /**
     * Sets requester
     * @param \Swagger\Client\Model\TeamMember $requester
     * @return $this
     */
    public function setRequester($requester)
    {
        $this->container['requester'] = $requester;

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


