<?php
/**
 * PortalTemplate
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
 * OpenAPI spec version: 1.0.3-alpha.6
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
 * PortalTemplate Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PortalTemplate implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PortalTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'path' => 'string',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'portalId' => 'string',
        'templateId' => 'string',
        'folderId' => 'string',
        'portal' => '\Swagger\Client\Model\Portal',
        'template' => '\Swagger\Client\Model\Template',
        'folder' => '\Swagger\Client\Model\PortalTemplateFolder'
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
        'path' => 'path',
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'portalId' => 'portalId',
        'templateId' => 'templateId',
        'folderId' => 'folderId',
        'portal' => 'portal',
        'template' => 'template',
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
        'path' => 'setPath',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'portalId' => 'setPortalId',
        'templateId' => 'setTemplateId',
        'folderId' => 'setFolderId',
        'portal' => 'setPortal',
        'template' => 'setTemplate',
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
        'path' => 'getPath',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'portalId' => 'getPortalId',
        'templateId' => 'getTemplateId',
        'folderId' => 'getFolderId',
        'portal' => 'getPortal',
        'template' => 'getTemplate',
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : '/';
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['portalId'] = isset($data['portalId']) ? $data['portalId'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['folderId'] = isset($data['folderId']) ? $data['folderId'] : null;
        $this->container['portal'] = isset($data['portal']) ? $data['portal'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
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
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

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
     * Gets portalId
     * @return string
     */
    public function getPortalId()
    {
        return $this->container['portalId'];
    }

    /**
     * Sets portalId
     * @param string $portalId
     * @return $this
     */
    public function setPortalId($portalId)
    {
        $this->container['portalId'] = $portalId;

        return $this;
    }

    /**
     * Gets templateId
     * @return string
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     * @param string $templateId
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

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
     * Gets portal
     * @return \Swagger\Client\Model\Portal
     */
    public function getPortal()
    {
        return $this->container['portal'];
    }

    /**
     * Sets portal
     * @param \Swagger\Client\Model\Portal $portal
     * @return $this
     */
    public function setPortal($portal)
    {
        $this->container['portal'] = $portal;

        return $this;
    }

    /**
     * Gets template
     * @return \Swagger\Client\Model\Template
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     * @param \Swagger\Client\Model\Template $template
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets folder
     * @return \Swagger\Client\Model\PortalTemplateFolder
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     * @param \Swagger\Client\Model\PortalTemplateFolder $folder
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


