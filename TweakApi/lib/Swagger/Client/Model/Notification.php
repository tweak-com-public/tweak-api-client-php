<?php
/**
 * Notification
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
 * OpenAPI spec version: 1.0.4-alpha.1
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
 * Notification Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Notification implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Notification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'type' => 'string',
        'title' => 'string',
        'body' => 'string',
        'read' => 'bool',
        'buttons' => '\Swagger\Client\Model\NotificationButton[]',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'teamId' => 'string',
        'portalId' => 'string',
        'memberId' => 'string',
        'team' => '\Swagger\Client\Model\Team',
        'portal' => '\Swagger\Client\Model\Portal',
        'member' => '\Swagger\Client\Model\TeamMember'
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
        'title' => 'title',
        'body' => 'body',
        'read' => 'read',
        'buttons' => 'buttons',
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'teamId' => 'teamId',
        'portalId' => 'portalId',
        'memberId' => 'memberId',
        'team' => 'team',
        'portal' => 'portal',
        'member' => 'member'
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
        'title' => 'setTitle',
        'body' => 'setBody',
        'read' => 'setRead',
        'buttons' => 'setButtons',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'teamId' => 'setTeamId',
        'portalId' => 'setPortalId',
        'memberId' => 'setMemberId',
        'team' => 'setTeam',
        'portal' => 'setPortal',
        'member' => 'setMember'
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
        'title' => 'getTitle',
        'body' => 'getBody',
        'read' => 'getRead',
        'buttons' => 'getButtons',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'teamId' => 'getTeamId',
        'portalId' => 'getPortalId',
        'memberId' => 'getMemberId',
        'team' => 'getTeam',
        'portal' => 'getPortal',
        'member' => 'getMember'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_SUBSCRIPTIONTRIAL_WILL_END = 'team.billing.subscription.trial_will_end';
    const TYPE_SUBSCRIPTIONUPDATED_PLAN = 'team.billing.subscription.updated_plan';
    const TYPE_SUBSCRIPTIONUPDATED_ADDITIONAL = 'team.billing.subscription.updated_additional';
    const TYPE_SUBSCRIPTIONDELETED = 'team.billing.subscription.deleted';
    const TYPE_INVOICECREATED = 'team.billing.invoice.created';
    const TYPE_INVOICEUPCOMING = 'team.billing.invoice.upcoming';
    const TYPE_INVOICEPAYMENT_SUCCEEDED = 'team.billing.invoice.payment_succeeded';
    const TYPE_INVOICEPAYMENT_FAILED = 'team.billing.invoice.payment_failed';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SUBSCRIPTIONTRIAL_WILL_END,
            self::TYPE_SUBSCRIPTIONUPDATED_PLAN,
            self::TYPE_SUBSCRIPTIONUPDATED_ADDITIONAL,
            self::TYPE_SUBSCRIPTIONDELETED,
            self::TYPE_INVOICECREATED,
            self::TYPE_INVOICEUPCOMING,
            self::TYPE_INVOICEPAYMENT_SUCCEEDED,
            self::TYPE_INVOICEPAYMENT_FAILED,
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['read'] = isset($data['read']) ? $data['read'] : false;
        $this->container['buttons'] = isset($data['buttons']) ? $data['buttons'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['portalId'] = isset($data['portalId']) ? $data['portalId'] : null;
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['portal'] = isset($data['portal']) ? $data['portal'] : null;
        $this->container['member'] = isset($data['member']) ? $data['member'] : null;
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
        $allowed_values = array("team.billing.subscription.trial_will_end", "team.billing.subscription.updated_plan", "team.billing.subscription.updated_additional", "team.billing.subscription.deleted", "team.billing.invoice.created", "team.billing.invoice.upcoming", "team.billing.invoice.payment_succeeded", "team.billing.invoice.payment_failed");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
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
        $allowed_values = array("team.billing.subscription.trial_will_end", "team.billing.subscription.updated_plan", "team.billing.subscription.updated_additional", "team.billing.subscription.deleted", "team.billing.invoice.created", "team.billing.invoice.upcoming", "team.billing.invoice.payment_succeeded", "team.billing.invoice.payment_failed");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['title'] === null) {
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
        $allowed_values = array('team.billing.subscription.trial_will_end', 'team.billing.subscription.updated_plan', 'team.billing.subscription.updated_additional', 'team.billing.subscription.deleted', 'team.billing.invoice.created', 'team.billing.invoice.upcoming', 'team.billing.invoice.payment_succeeded', 'team.billing.invoice.payment_failed');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'team.billing.subscription.trial_will_end', 'team.billing.subscription.updated_plan', 'team.billing.subscription.updated_additional', 'team.billing.subscription.deleted', 'team.billing.invoice.created', 'team.billing.invoice.upcoming', 'team.billing.invoice.payment_succeeded', 'team.billing.invoice.payment_failed'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets body
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     * @param string $body
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets read
     * @return bool
     */
    public function getRead()
    {
        return $this->container['read'];
    }

    /**
     * Sets read
     * @param bool $read
     * @return $this
     */
    public function setRead($read)
    {
        $this->container['read'] = $read;

        return $this;
    }

    /**
     * Gets buttons
     * @return \Swagger\Client\Model\NotificationButton[]
     */
    public function getButtons()
    {
        return $this->container['buttons'];
    }

    /**
     * Sets buttons
     * @param \Swagger\Client\Model\NotificationButton[] $buttons
     * @return $this
     */
    public function setButtons($buttons)
    {
        $this->container['buttons'] = $buttons;

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


