<?php
/**
 * CloudinaryImage
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
 * OpenAPI spec version: 1.0.3-alpha.15
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
 * CloudinaryImage Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CloudinaryImage implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CloudinaryImage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'publicId' => 'string',
        'version' => 'string',
        'signature' => 'string',
        'width' => 'double',
        'height' => 'double',
        'format' => 'string',
        'resourceType' => 'string',
        'createdAt' => 'string',
        'tags' => 'string[]',
        'bytes' => 'double',
        'type' => 'string',
        'etag' => 'string',
        'url' => 'string',
        'secureUrl' => 'string',
        'originalFilename' => 'string',
        'isBase64' => 'bool',
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
        'publicId' => 'publicId',
        'version' => 'version',
        'signature' => 'signature',
        'width' => 'width',
        'height' => 'height',
        'format' => 'format',
        'resourceType' => 'resourceType',
        'createdAt' => 'createdAt',
        'tags' => 'tags',
        'bytes' => 'bytes',
        'type' => 'type',
        'etag' => 'etag',
        'url' => 'url',
        'secureUrl' => 'secureUrl',
        'originalFilename' => 'originalFilename',
        'isBase64' => 'isBase64',
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
        'publicId' => 'setPublicId',
        'version' => 'setVersion',
        'signature' => 'setSignature',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'format' => 'setFormat',
        'resourceType' => 'setResourceType',
        'createdAt' => 'setCreatedAt',
        'tags' => 'setTags',
        'bytes' => 'setBytes',
        'type' => 'setType',
        'etag' => 'setEtag',
        'url' => 'setUrl',
        'secureUrl' => 'setSecureUrl',
        'originalFilename' => 'setOriginalFilename',
        'isBase64' => 'setIsBase64',
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
        'publicId' => 'getPublicId',
        'version' => 'getVersion',
        'signature' => 'getSignature',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'format' => 'getFormat',
        'resourceType' => 'getResourceType',
        'createdAt' => 'getCreatedAt',
        'tags' => 'getTags',
        'bytes' => 'getBytes',
        'type' => 'getType',
        'etag' => 'getEtag',
        'url' => 'getUrl',
        'secureUrl' => 'getSecureUrl',
        'originalFilename' => 'getOriginalFilename',
        'isBase64' => 'getIsBase64',
        'id' => 'getId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const RESOURCE_TYPE_IMAGE = 'image';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_IMAGE,
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
        $this->container['publicId'] = isset($data['publicId']) ? $data['publicId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['bytes'] = isset($data['bytes']) ? $data['bytes'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['etag'] = isset($data['etag']) ? $data['etag'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['secureUrl'] = isset($data['secureUrl']) ? $data['secureUrl'] : null;
        $this->container['originalFilename'] = isset($data['originalFilename']) ? $data['originalFilename'] : null;
        $this->container['isBase64'] = isset($data['isBase64']) ? $data['isBase64'] : false;
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
        $allowed_values = array("image");
        if (!in_array($this->container['resourceType'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'resourceType', must be one of #{allowed_values}.";
        }

        if ($this->container['url'] === null) {
            $invalid_properties[] = "'url' can't be null";
        }
        if ($this->container['secureUrl'] === null) {
            $invalid_properties[] = "'secureUrl' can't be null";
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
        $allowed_values = array("image");
        if (!in_array($this->container['resourceType'], $allowed_values)) {
            return false;
        }
        if ($this->container['url'] === null) {
            return false;
        }
        if ($this->container['secureUrl'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets publicId
     * @return string
     */
    public function getPublicId()
    {
        return $this->container['publicId'];
    }

    /**
     * Sets publicId
     * @param string $publicId
     * @return $this
     */
    public function setPublicId($publicId)
    {
        $this->container['publicId'] = $publicId;

        return $this;
    }

    /**
     * Gets version
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets signature
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     * @param string $signature
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets width
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param double $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param double $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets format
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     * @param string $format
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets resourceType
     * @return string
     */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
     * Sets resourceType
     * @param string $resourceType
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $allowed_values = array('image');
        if (!in_array($resourceType, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'resourceType', must be one of 'image'");
        }
        $this->container['resourceType'] = $resourceType;

        return $this;
    }

    /**
     * Gets createdAt
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets tags
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets bytes
     * @return double
     */
    public function getBytes()
    {
        return $this->container['bytes'];
    }

    /**
     * Sets bytes
     * @param double $bytes
     * @return $this
     */
    public function setBytes($bytes)
    {
        $this->container['bytes'] = $bytes;

        return $this;
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
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets etag
     * @return string
     */
    public function getEtag()
    {
        return $this->container['etag'];
    }

    /**
     * Sets etag
     * @param string $etag
     * @return $this
     */
    public function setEtag($etag)
    {
        $this->container['etag'] = $etag;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets secureUrl
     * @return string
     */
    public function getSecureUrl()
    {
        return $this->container['secureUrl'];
    }

    /**
     * Sets secureUrl
     * @param string $secureUrl
     * @return $this
     */
    public function setSecureUrl($secureUrl)
    {
        $this->container['secureUrl'] = $secureUrl;

        return $this;
    }

    /**
     * Gets originalFilename
     * @return string
     */
    public function getOriginalFilename()
    {
        return $this->container['originalFilename'];
    }

    /**
     * Sets originalFilename
     * @param string $originalFilename
     * @return $this
     */
    public function setOriginalFilename($originalFilename)
    {
        $this->container['originalFilename'] = $originalFilename;

        return $this;
    }

    /**
     * Gets isBase64
     * @return bool
     */
    public function getIsBase64()
    {
        return $this->container['isBase64'];
    }

    /**
     * Sets isBase64
     * @param bool $isBase64
     * @return $this
     */
    public function setIsBase64($isBase64)
    {
        $this->container['isBase64'] = $isBase64;

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


