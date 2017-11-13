<?php
/**
 * TeamPermissionSet
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
 * OpenAPI spec version: 1.0.3-alpha.1
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
 * TeamPermissionSet Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TeamPermissionSet implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TeamPermissionSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'emailNotification' => 'bool',
        'templatePermission' => '\Swagger\Client\Model\TemplatePermissionSet',
        'tweakTemplatePermission' => '\Swagger\Client\Model\TemplatePermissionSet',
        'teamCustomerPermission' => '\Swagger\Client\Model\TeamCustomerPermissionSet',
        'id' => 'string',
        'teamId' => 'string',
        'team' => '\Swagger\Client\Model\Team'
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
        'emailNotification' => 'emailNotification',
        'templatePermission' => 'templatePermission',
        'tweakTemplatePermission' => 'tweakTemplatePermission',
        'teamCustomerPermission' => 'teamCustomerPermission',
        'id' => 'id',
        'teamId' => 'teamId',
        'team' => 'team'
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
        'emailNotification' => 'setEmailNotification',
        'templatePermission' => 'setTemplatePermission',
        'tweakTemplatePermission' => 'setTweakTemplatePermission',
        'teamCustomerPermission' => 'setTeamCustomerPermission',
        'id' => 'setId',
        'teamId' => 'setTeamId',
        'team' => 'setTeam'
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
        'emailNotification' => 'getEmailNotification',
        'templatePermission' => 'getTemplatePermission',
        'tweakTemplatePermission' => 'getTweakTemplatePermission',
        'teamCustomerPermission' => 'getTeamCustomerPermission',
        'id' => 'getId',
        'teamId' => 'getTeamId',
        'team' => 'getTeam'
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
        $this->container['emailNotification'] = isset($data['emailNotification']) ? $data['emailNotification'] : true;
        $this->container['templatePermission'] = isset($data['templatePermission']) ? $data['templatePermission'] : null;
        $this->container['tweakTemplatePermission'] = isset($data['tweakTemplatePermission']) ? $data['tweakTemplatePermission'] : null;
        $this->container['teamCustomerPermission'] = isset($data['teamCustomerPermission']) ? $data['teamCustomerPermission'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
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
     * Gets emailNotification
     * @return bool
     */
    public function getEmailNotification()
    {
        return $this->container['emailNotification'];
    }

    /**
     * Sets emailNotification
     * @param bool $emailNotification
     * @return $this
     */
    public function setEmailNotification($emailNotification)
    {
        $this->container['emailNotification'] = $emailNotification;

        return $this;
    }

    /**
     * Gets templatePermission
     * @return \Swagger\Client\Model\TemplatePermissionSet
     */
    public function getTemplatePermission()
    {
        return $this->container['templatePermission'];
    }

    /**
     * Sets templatePermission
     * @param \Swagger\Client\Model\TemplatePermissionSet $templatePermission
     * @return $this
     */
    public function setTemplatePermission($templatePermission)
    {
        $this->container['templatePermission'] = $templatePermission;

        return $this;
    }

    /**
     * Gets tweakTemplatePermission
     * @return \Swagger\Client\Model\TemplatePermissionSet
     */
    public function getTweakTemplatePermission()
    {
        return $this->container['tweakTemplatePermission'];
    }

    /**
     * Sets tweakTemplatePermission
     * @param \Swagger\Client\Model\TemplatePermissionSet $tweakTemplatePermission
     * @return $this
     */
    public function setTweakTemplatePermission($tweakTemplatePermission)
    {
        $this->container['tweakTemplatePermission'] = $tweakTemplatePermission;

        return $this;
    }

    /**
     * Gets teamCustomerPermission
     * @return \Swagger\Client\Model\TeamCustomerPermissionSet
     */
    public function getTeamCustomerPermission()
    {
        return $this->container['teamCustomerPermission'];
    }

    /**
     * Sets teamCustomerPermission
     * @param \Swagger\Client\Model\TeamCustomerPermissionSet $teamCustomerPermission
     * @return $this
     */
    public function setTeamCustomerPermission($teamCustomerPermission)
    {
        $this->container['teamCustomerPermission'] = $teamCustomerPermission;

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
     * Gets teamId
     * @return string
     */
    public function getTeamId()
    {
        return $this->container['teamId'];
    }

    /**
     * Sets teamId
     * @param string $teamId
     * @return $this
     */
    public function setTeamId($teamId)
    {
        $this->container['teamId'] = $teamId;

        return $this;
    }

    /**
     * Gets team
     * @return \Swagger\Client\Model\Team
     */
    public function getTeam()
    {
        return $this->container['team'];
    }

    /**
     * Sets team
     * @param \Swagger\Client\Model\Team $team
     * @return $this
     */
    public function setTeam($team)
    {
        $this->container['team'] = $team;

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


