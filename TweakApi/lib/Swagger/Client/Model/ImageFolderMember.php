<?php
/**
 * ImageFolderMember
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
 * OpenAPI spec version: 1.0.6-beta.3
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
 * ImageFolderMember Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ImageFolderMember implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ImageFolderMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'memberId' => 'string',
        'folderId' => 'string',
        'member' => '\Swagger\Client\Model\TeamMember',
        'folder' => '\Swagger\Client\Model\ImageFolder'
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
        'memberId' => 'memberId',
        'folderId' => 'folderId',
        'member' => 'member',
        'folder' => 'folder'
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
        'memberId' => 'setMemberId',
        'folderId' => 'setFolderId',
        'member' => 'setMember',
        'folder' => 'setFolder'
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
        'memberId' => 'getMemberId',
        'folderId' => 'getFolderId',
        'member' => 'getMember',
        'folder' => 'getFolder'
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
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
        $this->container['folderId'] = isset($data['folderId']) ? $data['folderId'] : null;
        $this->container['member'] = isset($data['member']) ? $data['member'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
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
     * Gets memberId
     * @return string
     */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
     * Sets memberId
     * @param string $memberId
     * @return $this
     */
    public function setMemberId($memberId)
    {
        $this->container['memberId'] = $memberId;

        return $this;
    }

    /**
     * Gets folderId
     * @return string
     */
    public function getFolderId()
    {
        return $this->container['folderId'];
    }

    /**
     * Sets folderId
     * @param string $folderId
     * @return $this
     */
    public function setFolderId($folderId)
    {
        $this->container['folderId'] = $folderId;

        return $this;
    }

    /**
     * Gets member
     * @return \Swagger\Client\Model\TeamMember
     */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
     * Sets member
     * @param \Swagger\Client\Model\TeamMember $member
     * @return $this
     */
    public function setMember($member)
    {
        $this->container['member'] = $member;

        return $this;
    }

    /**
     * Gets folder
     * @return \Swagger\Client\Model\ImageFolder
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     * @param \Swagger\Client\Model\ImageFolder $folder
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

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


