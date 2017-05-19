<?php
/**
 * Customer
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
 * Customer Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Customer implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'profilePicture' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'initials' => 'string',
        'status' => 'string',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'realm' => 'string',
        'username' => 'string',
        'email' => 'string',
        'emailVerified' => 'bool',
        'id' => 'string',
        'designs' => '\Swagger\Client\Model\Design[]',
        'teams' => '\Swagger\Client\Model\Team[]',
        'invitationTickets' => '\Swagger\Client\Model\InvitationTicket[]',
        'accessTokens' => '\Swagger\Client\Model\TeamMemberAccessToken[]',
        'permission' => '\Swagger\Client\Model\CustomerPermissionSet'
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
        'profilePicture' => 'profilePicture',
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'initials' => 'initials',
        'status' => 'status',
        'created' => 'created',
        'modified' => 'modified',
        'realm' => 'realm',
        'username' => 'username',
        'email' => 'email',
        'emailVerified' => 'emailVerified',
        'id' => 'id',
        'designs' => 'designs',
        'teams' => 'teams',
        'invitationTickets' => 'invitationTickets',
        'accessTokens' => 'accessTokens',
        'permission' => 'permission'
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
        'profilePicture' => 'setProfilePicture',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'initials' => 'setInitials',
        'status' => 'setStatus',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'realm' => 'setRealm',
        'username' => 'setUsername',
        'email' => 'setEmail',
        'emailVerified' => 'setEmailVerified',
        'id' => 'setId',
        'designs' => 'setDesigns',
        'teams' => 'setTeams',
        'invitationTickets' => 'setInvitationTickets',
        'accessTokens' => 'setAccessTokens',
        'permission' => 'setPermission'
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
        'profilePicture' => 'getProfilePicture',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'initials' => 'getInitials',
        'status' => 'getStatus',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'realm' => 'getRealm',
        'username' => 'getUsername',
        'email' => 'getEmail',
        'emailVerified' => 'getEmailVerified',
        'id' => 'getId',
        'designs' => 'getDesigns',
        'teams' => 'getTeams',
        'invitationTickets' => 'getInvitationTickets',
        'accessTokens' => 'getAccessTokens',
        'permission' => 'getPermission'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    const STATUS_GODMODE = 'godmode';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
            self::STATUS_GODMODE,
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
        $this->container['profilePicture'] = isset($data['profilePicture']) ? $data['profilePicture'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['initials'] = isset($data['initials']) ? $data['initials'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'active';
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['realm'] = isset($data['realm']) ? $data['realm'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['emailVerified'] = isset($data['emailVerified']) ? $data['emailVerified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['designs'] = isset($data['designs']) ? $data['designs'] : null;
        $this->container['teams'] = isset($data['teams']) ? $data['teams'] : null;
        $this->container['invitationTickets'] = isset($data['invitationTickets']) ? $data['invitationTickets'] : null;
        $this->container['accessTokens'] = isset($data['accessTokens']) ? $data['accessTokens'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['firstName'] === null) {
            $invalid_properties[] = "'firstName' can't be null";
        }
        if ($this->container['lastName'] === null) {
            $invalid_properties[] = "'lastName' can't be null";
        }
        if ($this->container['initials'] === null) {
            $invalid_properties[] = "'initials' can't be null";
        }
        $allowed_values = array("active", "inactive", "godmode");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
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
        if ($this->container['firstName'] === null) {
            return false;
        }
        if ($this->container['lastName'] === null) {
            return false;
        }
        if ($this->container['initials'] === null) {
            return false;
        }
        $allowed_values = array("active", "inactive", "godmode");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets profilePicture
     * @return string
     */
    public function getProfilePicture()
    {
        return $this->container['profilePicture'];
    }

    /**
     * Sets profilePicture
     * @param string $profilePicture
     * @return $this
     */
    public function setProfilePicture($profilePicture)
    {
        $this->container['profilePicture'] = $profilePicture;

        return $this;
    }

    /**
     * Gets firstName
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets initials
     * @return string
     */
    public function getInitials()
    {
        return $this->container['initials'];
    }

    /**
     * Sets initials
     * @param string $initials
     * @return $this
     */
    public function setInitials($initials)
    {
        $this->container['initials'] = $initials;

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
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('active', 'inactive', 'godmode');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'active', 'inactive', 'godmode'");
        }
        $this->container['status'] = $status;

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
     * Gets realm
     * @return string
     */
    public function getRealm()
    {
        return $this->container['realm'];
    }

    /**
     * Sets realm
     * @param string $realm
     * @return $this
     */
    public function setRealm($realm)
    {
        $this->container['realm'] = $realm;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets emailVerified
     * @return bool
     */
    public function getEmailVerified()
    {
        return $this->container['emailVerified'];
    }

    /**
     * Sets emailVerified
     * @param bool $emailVerified
     * @return $this
     */
    public function setEmailVerified($emailVerified)
    {
        $this->container['emailVerified'] = $emailVerified;

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
     * Gets designs
     * @return \Swagger\Client\Model\Design[]
     */
    public function getDesigns()
    {
        return $this->container['designs'];
    }

    /**
     * Sets designs
     * @param \Swagger\Client\Model\Design[] $designs
     * @return $this
     */
    public function setDesigns($designs)
    {
        $this->container['designs'] = $designs;

        return $this;
    }

    /**
     * Gets teams
     * @return \Swagger\Client\Model\Team[]
     */
    public function getTeams()
    {
        return $this->container['teams'];
    }

    /**
     * Sets teams
     * @param \Swagger\Client\Model\Team[] $teams
     * @return $this
     */
    public function setTeams($teams)
    {
        $this->container['teams'] = $teams;

        return $this;
    }

    /**
     * Gets invitationTickets
     * @return \Swagger\Client\Model\InvitationTicket[]
     */
    public function getInvitationTickets()
    {
        return $this->container['invitationTickets'];
    }

    /**
     * Sets invitationTickets
     * @param \Swagger\Client\Model\InvitationTicket[] $invitationTickets
     * @return $this
     */
    public function setInvitationTickets($invitationTickets)
    {
        $this->container['invitationTickets'] = $invitationTickets;

        return $this;
    }

    /**
     * Gets accessTokens
     * @return \Swagger\Client\Model\TeamMemberAccessToken[]
     */
    public function getAccessTokens()
    {
        return $this->container['accessTokens'];
    }

    /**
     * Sets accessTokens
     * @param \Swagger\Client\Model\TeamMemberAccessToken[] $accessTokens
     * @return $this
     */
    public function setAccessTokens($accessTokens)
    {
        $this->container['accessTokens'] = $accessTokens;

        return $this;
    }

    /**
     * Gets permission
     * @return \Swagger\Client\Model\CustomerPermissionSet
     */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
     * Sets permission
     * @param \Swagger\Client\Model\CustomerPermissionSet $permission
     * @return $this
     */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;

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


