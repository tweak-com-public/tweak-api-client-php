<?php
/**
 * InvitationTicket
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
 * InvitationTicket Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InvitationTicket implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'InvitationTicket';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'message' => 'string',
        'token' => 'string',
        'inviteeEmail' => 'string',
        'targetModel' => 'string',
        'targetId' => 'string',
        'targetAttrs' => 'object',
        'status' => 'string',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'inviteeId' => 'double',
        'inviterId' => 'double',
        'invitee' => '\Swagger\Client\Model\Customer',
        'inviter' => '\Swagger\Client\Model\TeamMember'
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
        'message' => 'message',
        'token' => 'token',
        'inviteeEmail' => 'inviteeEmail',
        'targetModel' => 'targetModel',
        'targetId' => 'targetId',
        'targetAttrs' => 'targetAttrs',
        'status' => 'status',
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'inviteeId' => 'inviteeId',
        'inviterId' => 'inviterId',
        'invitee' => 'invitee',
        'inviter' => 'inviter'
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
        'message' => 'setMessage',
        'token' => 'setToken',
        'inviteeEmail' => 'setInviteeEmail',
        'targetModel' => 'setTargetModel',
        'targetId' => 'setTargetId',
        'targetAttrs' => 'setTargetAttrs',
        'status' => 'setStatus',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'inviteeId' => 'setInviteeId',
        'inviterId' => 'setInviterId',
        'invitee' => 'setInvitee',
        'inviter' => 'setInviter'
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
        'message' => 'getMessage',
        'token' => 'getToken',
        'inviteeEmail' => 'getInviteeEmail',
        'targetModel' => 'getTargetModel',
        'targetId' => 'getTargetId',
        'targetAttrs' => 'getTargetAttrs',
        'status' => 'getStatus',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'inviteeId' => 'getInviteeId',
        'inviterId' => 'getInviterId',
        'invitee' => 'getInvitee',
        'inviter' => 'getInviter'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TARGET_MODEL_TEAM = 'Team';
    const TARGET_MODEL_PORTAL = 'Portal';
    const TARGET_MODEL_TEMPLATE = 'Template';
    const TARGET_MODEL_DESIGN = 'Design';
    const STATUS_PENDING = 'pending';
    const STATUS_ACCEPTED = 'accepted';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTargetModelAllowableValues()
    {
        return [
            self::TARGET_MODEL_TEAM,
            self::TARGET_MODEL_PORTAL,
            self::TARGET_MODEL_TEMPLATE,
            self::TARGET_MODEL_DESIGN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_ACCEPTED,
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : '';
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['inviteeEmail'] = isset($data['inviteeEmail']) ? $data['inviteeEmail'] : null;
        $this->container['targetModel'] = isset($data['targetModel']) ? $data['targetModel'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['targetAttrs'] = isset($data['targetAttrs']) ? $data['targetAttrs'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'pending';
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inviteeId'] = isset($data['inviteeId']) ? $data['inviteeId'] : null;
        $this->container['inviterId'] = isset($data['inviterId']) ? $data['inviterId'] : null;
        $this->container['invitee'] = isset($data['invitee']) ? $data['invitee'] : null;
        $this->container['inviter'] = isset($data['inviter']) ? $data['inviter'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['targetModel'] === null) {
            $invalid_properties[] = "'targetModel' can't be null";
        }
        $allowed_values = array("Team", "Portal", "Template", "Design");
        if (!in_array($this->container['targetModel'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'targetModel', must be one of #{allowed_values}.";
        }

        if ($this->container['targetId'] === null) {
            $invalid_properties[] = "'targetId' can't be null";
        }
        $allowed_values = array("pending", "accepted");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
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
        if ($this->container['targetModel'] === null) {
            return false;
        }
        $allowed_values = array("Team", "Portal", "Template", "Design");
        if (!in_array($this->container['targetModel'], $allowed_values)) {
            return false;
        }
        if ($this->container['targetId'] === null) {
            return false;
        }
        $allowed_values = array("pending", "accepted");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets inviteeEmail
     * @return string
     */
    public function getInviteeEmail()
    {
        return $this->container['inviteeEmail'];
    }

    /**
     * Sets inviteeEmail
     * @param string $inviteeEmail
     * @return $this
     */
    public function setInviteeEmail($inviteeEmail)
    {
        $this->container['inviteeEmail'] = $inviteeEmail;

        return $this;
    }

    /**
     * Gets targetModel
     * @return string
     */
    public function getTargetModel()
    {
        return $this->container['targetModel'];
    }

    /**
     * Sets targetModel
     * @param string $targetModel
     * @return $this
     */
    public function setTargetModel($targetModel)
    {
        $allowed_values = array('Team', 'Portal', 'Template', 'Design');
        if (!in_array($targetModel, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'targetModel', must be one of 'Team', 'Portal', 'Template', 'Design'");
        }
        $this->container['targetModel'] = $targetModel;

        return $this;
    }

    /**
     * Gets targetId
     * @return string
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     * @param string $targetId
     * @return $this
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets targetAttrs
     * @return object
     */
    public function getTargetAttrs()
    {
        return $this->container['targetAttrs'];
    }

    /**
     * Sets targetAttrs
     * @param object $targetAttrs
     * @return $this
     */
    public function setTargetAttrs($targetAttrs)
    {
        $this->container['targetAttrs'] = $targetAttrs;

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
        $allowed_values = array('pending', 'accepted');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'pending', 'accepted'");
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
     * Gets inviteeId
     * @return double
     */
    public function getInviteeId()
    {
        return $this->container['inviteeId'];
    }

    /**
     * Sets inviteeId
     * @param double $inviteeId
     * @return $this
     */
    public function setInviteeId($inviteeId)
    {
        $this->container['inviteeId'] = $inviteeId;

        return $this;
    }

    /**
     * Gets inviterId
     * @return double
     */
    public function getInviterId()
    {
        return $this->container['inviterId'];
    }

    /**
     * Sets inviterId
     * @param double $inviterId
     * @return $this
     */
    public function setInviterId($inviterId)
    {
        $this->container['inviterId'] = $inviterId;

        return $this;
    }

    /**
     * Gets invitee
     * @return \Swagger\Client\Model\Customer
     */
    public function getInvitee()
    {
        return $this->container['invitee'];
    }

    /**
     * Sets invitee
     * @param \Swagger\Client\Model\Customer $invitee
     * @return $this
     */
    public function setInvitee($invitee)
    {
        $this->container['invitee'] = $invitee;

        return $this;
    }

    /**
     * Gets inviter
     * @return \Swagger\Client\Model\TeamMember
     */
    public function getInviter()
    {
        return $this->container['inviter'];
    }

    /**
     * Sets inviter
     * @param \Swagger\Client\Model\TeamMember $inviter
     * @return $this
     */
    public function setInviter($inviter)
    {
        $this->container['inviter'] = $inviter;

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


