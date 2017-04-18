<?php
/**
 * TeamMemberAccessToken
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
 * TeamMemberAccessToken Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TeamMemberAccessToken implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TeamMemberAccessToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'ttl' => 'double',
        'created' => '\DateTime',
        'userId' => 'double',
        'teamId' => 'string',
        'teamMemberId' => 'double',
        'customer' => '\Swagger\Client\Model\Customer',
        'team' => '\Swagger\Client\Model\Team',
        'teamMember' => '\Swagger\Client\Model\TeamMember'
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
        'id' => 'id',
        'ttl' => 'ttl',
        'created' => 'created',
        'userId' => 'userId',
        'teamId' => 'teamId',
        'teamMemberId' => 'teamMemberId',
        'customer' => 'customer',
        'team' => 'team',
        'teamMember' => 'teamMember'
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
        'id' => 'setId',
        'ttl' => 'setTtl',
        'created' => 'setCreated',
        'userId' => 'setUserId',
        'teamId' => 'setTeamId',
        'teamMemberId' => 'setTeamMemberId',
        'customer' => 'setCustomer',
        'team' => 'setTeam',
        'teamMember' => 'setTeamMember'
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
        'id' => 'getId',
        'ttl' => 'getTtl',
        'created' => 'getCreated',
        'userId' => 'getUserId',
        'teamId' => 'getTeamId',
        'teamMemberId' => 'getTeamMemberId',
        'customer' => 'getCustomer',
        'team' => 'getTeam',
        'teamMember' => 'getTeamMember'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : 1209600.0;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['teamMemberId'] = isset($data['teamMemberId']) ? $data['teamMemberId'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['teamMember'] = isset($data['teamMember']) ? $data['teamMember'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        if ($this->container['id'] === null) {
            return false;
        }
        return true;
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
     * Gets ttl
     * @return double
     */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
     * Sets ttl
     * @param double $ttl time to live in seconds (2 weeks by default)
     * @return $this
     */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;

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
     * Gets userId
     * @return double
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     * @param double $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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
     * Gets teamMemberId
     * @return double
     */
    public function getTeamMemberId()
    {
        return $this->container['teamMemberId'];
    }

    /**
     * Sets teamMemberId
     * @param double $teamMemberId
     * @return $this
     */
    public function setTeamMemberId($teamMemberId)
    {
        $this->container['teamMemberId'] = $teamMemberId;

        return $this;
    }

    /**
     * Gets customer
     * @return \Swagger\Client\Model\Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param \Swagger\Client\Model\Customer $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

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
     * Gets teamMember
     * @return \Swagger\Client\Model\TeamMember
     */
    public function getTeamMember()
    {
        return $this->container['teamMember'];
    }

    /**
     * Sets teamMember
     * @param \Swagger\Client\Model\TeamMember $teamMember
     * @return $this
     */
    public function setTeamMember($teamMember)
    {
        $this->container['teamMember'] = $teamMember;

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


