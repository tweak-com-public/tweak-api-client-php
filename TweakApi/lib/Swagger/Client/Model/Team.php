<?php
/**
 * Team
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
 * Team Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Team implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Team';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'logo' => 'string',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'icon' => 'string',
        'clientKey' => 'string',
        'javaScriptKey' => 'string',
        'restApiKey' => 'string',
        'windowsKey' => 'string',
        'masterKey' => 'string',
        'status' => 'string',
        'members' => 'object[]',
        'portals' => 'object[]',
        'templates' => 'object[]',
        'brand' => 'object'
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
        'name' => 'name',
        'logo' => 'logo',
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'icon' => 'icon',
        'clientKey' => 'clientKey',
        'javaScriptKey' => 'javaScriptKey',
        'restApiKey' => 'restApiKey',
        'windowsKey' => 'windowsKey',
        'masterKey' => 'masterKey',
        'status' => 'status',
        'members' => 'members',
        'portals' => 'portals',
        'templates' => 'templates',
        'brand' => 'brand'
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
        'name' => 'setName',
        'logo' => 'setLogo',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'icon' => 'setIcon',
        'clientKey' => 'setClientKey',
        'javaScriptKey' => 'setJavaScriptKey',
        'restApiKey' => 'setRestApiKey',
        'windowsKey' => 'setWindowsKey',
        'masterKey' => 'setMasterKey',
        'status' => 'setStatus',
        'members' => 'setMembers',
        'portals' => 'setPortals',
        'templates' => 'setTemplates',
        'brand' => 'setBrand'
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
        'name' => 'getName',
        'logo' => 'getLogo',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'icon' => 'getIcon',
        'clientKey' => 'getClientKey',
        'javaScriptKey' => 'getJavaScriptKey',
        'restApiKey' => 'getRestApiKey',
        'windowsKey' => 'getWindowsKey',
        'masterKey' => 'getMasterKey',
        'status' => 'getStatus',
        'members' => 'getMembers',
        'portals' => 'getPortals',
        'templates' => 'getTemplates',
        'brand' => 'getBrand'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['clientKey'] = isset($data['clientKey']) ? $data['clientKey'] : null;
        $this->container['javaScriptKey'] = isset($data['javaScriptKey']) ? $data['javaScriptKey'] : null;
        $this->container['restApiKey'] = isset($data['restApiKey']) ? $data['restApiKey'] : null;
        $this->container['windowsKey'] = isset($data['windowsKey']) ? $data['windowsKey'] : null;
        $this->container['masterKey'] = isset($data['masterKey']) ? $data['masterKey'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'sandbox';
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['portals'] = isset($data['portals']) ? $data['portals'] : null;
        $this->container['templates'] = isset($data['templates']) ? $data['templates'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
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
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets logo
     * @return string
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     * @param string $logo
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

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
     * Gets icon
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     * @param string $icon The icon image url
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets clientKey
     * @return string
     */
    public function getClientKey()
    {
        return $this->container['clientKey'];
    }

    /**
     * Sets clientKey
     * @param string $clientKey
     * @return $this
     */
    public function setClientKey($clientKey)
    {
        $this->container['clientKey'] = $clientKey;

        return $this;
    }

    /**
     * Gets javaScriptKey
     * @return string
     */
    public function getJavaScriptKey()
    {
        return $this->container['javaScriptKey'];
    }

    /**
     * Sets javaScriptKey
     * @param string $javaScriptKey
     * @return $this
     */
    public function setJavaScriptKey($javaScriptKey)
    {
        $this->container['javaScriptKey'] = $javaScriptKey;

        return $this;
    }

    /**
     * Gets restApiKey
     * @return string
     */
    public function getRestApiKey()
    {
        return $this->container['restApiKey'];
    }

    /**
     * Sets restApiKey
     * @param string $restApiKey
     * @return $this
     */
    public function setRestApiKey($restApiKey)
    {
        $this->container['restApiKey'] = $restApiKey;

        return $this;
    }

    /**
     * Gets windowsKey
     * @return string
     */
    public function getWindowsKey()
    {
        return $this->container['windowsKey'];
    }

    /**
     * Sets windowsKey
     * @param string $windowsKey
     * @return $this
     */
    public function setWindowsKey($windowsKey)
    {
        $this->container['windowsKey'] = $windowsKey;

        return $this;
    }

    /**
     * Gets masterKey
     * @return string
     */
    public function getMasterKey()
    {
        return $this->container['masterKey'];
    }

    /**
     * Sets masterKey
     * @param string $masterKey
     * @return $this
     */
    public function setMasterKey($masterKey)
    {
        $this->container['masterKey'] = $masterKey;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the application, production/sandbox/disabled
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets members
     * @return object[]
     */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
     * Sets members
     * @param object[] $members
     * @return $this
     */
    public function setMembers($members)
    {
        $this->container['members'] = $members;

        return $this;
    }

    /**
     * Gets portals
     * @return object[]
     */
    public function getPortals()
    {
        return $this->container['portals'];
    }

    /**
     * Sets portals
     * @param object[] $portals
     * @return $this
     */
    public function setPortals($portals)
    {
        $this->container['portals'] = $portals;

        return $this;
    }

    /**
     * Gets templates
     * @return object[]
     */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
     * Sets templates
     * @param object[] $templates
     * @return $this
     */
    public function setTemplates($templates)
    {
        $this->container['templates'] = $templates;

        return $this;
    }

    /**
     * Gets brand
     * @return object
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     * @param object $brand
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

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


