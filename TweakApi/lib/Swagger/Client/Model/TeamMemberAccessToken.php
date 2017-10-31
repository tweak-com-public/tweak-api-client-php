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
 * OpenAPI spec version: 1.0.2-alpha.6
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
        'roles' => 'string[]',
        'refreshToken' => 'string',
        'id' => 'string',
        'ttl' => 'double',
        'scopes' => 'string[]',
        'created' => '\DateTime',
        'userId' => 'string',
        'teamId' => 'string',
        'teamMemberId' => 'string',
        'portalId' => 'string',
        'portalMemberId' => 'string',
        'customer' => '\Swagger\Client\Model\Customer',
        'team' => '\Swagger\Client\Model\Team',
        'teamMember' => '\Swagger\Client\Model\TeamMember',
        'portal' => '\Swagger\Client\Model\Portal',
        'portalMember' => '\Swagger\Client\Model\PortalMember'
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
        'roles' => 'roles',
        'refreshToken' => 'refreshToken',
        'id' => 'id',
        'ttl' => 'ttl',
        'scopes' => 'scopes',
        'created' => 'created',
        'userId' => 'userId',
        'teamId' => 'teamId',
        'teamMemberId' => 'teamMemberId',
        'portalId' => 'portalId',
        'portalMemberId' => 'portalMemberId',
        'customer' => 'customer',
        'team' => 'team',
        'teamMember' => 'teamMember',
        'portal' => 'portal',
        'portalMember' => 'portalMember'
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
        'roles' => 'setRoles',
        'refreshToken' => 'setRefreshToken',
        'id' => 'setId',
        'ttl' => 'setTtl',
        'scopes' => 'setScopes',
        'created' => 'setCreated',
        'userId' => 'setUserId',
        'teamId' => 'setTeamId',
        'teamMemberId' => 'setTeamMemberId',
        'portalId' => 'setPortalId',
        'portalMemberId' => 'setPortalMemberId',
        'customer' => 'setCustomer',
        'team' => 'setTeam',
        'teamMember' => 'setTeamMember',
        'portal' => 'setPortal',
        'portalMember' => 'setPortalMember'
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
        'roles' => 'getRoles',
        'refreshToken' => 'getRefreshToken',
        'id' => 'getId',
        'ttl' => 'getTtl',
        'scopes' => 'getScopes',
        'created' => 'getCreated',
        'userId' => 'getUserId',
        'teamId' => 'getTeamId',
        'teamMemberId' => 'getTeamMemberId',
        'portalId' => 'getPortalId',
        'portalMemberId' => 'getPortalMemberId',
        'customer' => 'getCustomer',
        'team' => 'getTeam',
        'teamMember' => 'getTeamMember',
        'portal' => 'getPortal',
        'portalMember' => 'getPortalMember'
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
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['refreshToken'] = isset($data['refreshToken']) ? $data['refreshToken'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : 1209600.0;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['teamMemberId'] = isset($data['teamMemberId']) ? $data['teamMemberId'] : null;
        $this->container['portalId'] = isset($data['portalId']) ? $data['portalId'] : null;
        $this->container['portalMemberId'] = isset($data['portalMemberId']) ? $data['portalMemberId'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['teamMember'] = isset($data['teamMember']) ? $data['teamMember'] : null;
        $this->container['portal'] = isset($data['portal']) ? $data['portal'] : null;
        $this->container['portalMember'] = isset($data['portalMember']) ? $data['portalMember'] : null;
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
     * Gets roles
     * @return string[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     * @param string[] $roles
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets refreshToken
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refreshToken'];
    }

    /**
     * Sets refreshToken
     * @param string $refreshToken
     * @return $this
     */
    public function setRefreshToken($refreshToken)
    {
        $this->container['refreshToken'] = $refreshToken;

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
     * Gets scopes
     * @return string[]
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     * @param string[] $scopes Array of scopes granted to this access token.
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;

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
     * @return string
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     * @param string $userId
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
     * @return string
     */
    public function getTeamMemberId()
    {
        return $this->container['teamMemberId'];
    }

    /**
     * Sets teamMemberId
     * @param string $teamMemberId
     * @return $this
     */
    public function setTeamMemberId($teamMemberId)
    {
        $this->container['teamMemberId'] = $teamMemberId;

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
     * Gets portalMemberId
     * @return string
     */
    public function getPortalMemberId()
    {
        return $this->container['portalMemberId'];
    }

    /**
     * Sets portalMemberId
     * @param string $portalMemberId
     * @return $this
     */
    public function setPortalMemberId($portalMemberId)
    {
        $this->container['portalMemberId'] = $portalMemberId;

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
     * Gets portalMember
     * @return \Swagger\Client\Model\PortalMember
     */
    public function getPortalMember()
    {
        return $this->container['portalMember'];
    }

    /**
     * Sets portalMember
     * @param \Swagger\Client\Model\PortalMember $portalMember
     * @return $this
     */
    public function setPortalMember($portalMember)
    {
        $this->container['portalMember'] = $portalMember;

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


