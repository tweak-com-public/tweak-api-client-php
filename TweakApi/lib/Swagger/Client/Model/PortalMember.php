<?php
/**
 * PortalMember
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
 * PortalMember Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PortalMember implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PortalMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'double',
        'portalId' => 'double',
        'memberId' => 'double',
        'portal' => '\Swagger\Client\Model\Portal',
        'member' => '\Swagger\Client\Model\TeamMember',
        'requesterDesigns' => '\Swagger\Client\Model\Design[]',
        'assignedDesigns' => '\Swagger\Client\Model\Design[]',
        'commentedDesigns' => '\Swagger\Client\Model\Design[]',
        'reviewedDesigns' => '\Swagger\Client\Model\Design[]'
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
        'portalId' => 'portalId',
        'memberId' => 'memberId',
        'portal' => 'portal',
        'member' => 'member',
        'requesterDesigns' => 'requesterDesigns',
        'assignedDesigns' => 'assignedDesigns',
        'commentedDesigns' => 'commentedDesigns',
        'reviewedDesigns' => 'reviewedDesigns'
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
        'portalId' => 'setPortalId',
        'memberId' => 'setMemberId',
        'portal' => 'setPortal',
        'member' => 'setMember',
        'requesterDesigns' => 'setRequesterDesigns',
        'assignedDesigns' => 'setAssignedDesigns',
        'commentedDesigns' => 'setCommentedDesigns',
        'reviewedDesigns' => 'setReviewedDesigns'
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
        'portalId' => 'getPortalId',
        'memberId' => 'getMemberId',
        'portal' => 'getPortal',
        'member' => 'getMember',
        'requesterDesigns' => 'getRequesterDesigns',
        'assignedDesigns' => 'getAssignedDesigns',
        'commentedDesigns' => 'getCommentedDesigns',
        'reviewedDesigns' => 'getReviewedDesigns'
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
        $this->container['portalId'] = isset($data['portalId']) ? $data['portalId'] : null;
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
        $this->container['portal'] = isset($data['portal']) ? $data['portal'] : null;
        $this->container['member'] = isset($data['member']) ? $data['member'] : null;
        $this->container['requesterDesigns'] = isset($data['requesterDesigns']) ? $data['requesterDesigns'] : null;
        $this->container['assignedDesigns'] = isset($data['assignedDesigns']) ? $data['assignedDesigns'] : null;
        $this->container['commentedDesigns'] = isset($data['commentedDesigns']) ? $data['commentedDesigns'] : null;
        $this->container['reviewedDesigns'] = isset($data['reviewedDesigns']) ? $data['reviewedDesigns'] : null;
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
     * @return double
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param double $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets portalId
     * @return double
     */
    public function getPortalId()
    {
        return $this->container['portalId'];
    }

    /**
     * Sets portalId
     * @param double $portalId
     * @return $this
     */
    public function setPortalId($portalId)
    {
        $this->container['portalId'] = $portalId;

        return $this;
    }

    /**
     * Gets memberId
     * @return double
     */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
     * Sets memberId
     * @param double $memberId
     * @return $this
     */
    public function setMemberId($memberId)
    {
        $this->container['memberId'] = $memberId;

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
     * Gets requesterDesigns
     * @return \Swagger\Client\Model\Design[]
     */
    public function getRequesterDesigns()
    {
        return $this->container['requesterDesigns'];
    }

    /**
     * Sets requesterDesigns
     * @param \Swagger\Client\Model\Design[] $requesterDesigns
     * @return $this
     */
    public function setRequesterDesigns($requesterDesigns)
    {
        $this->container['requesterDesigns'] = $requesterDesigns;

        return $this;
    }

    /**
     * Gets assignedDesigns
     * @return \Swagger\Client\Model\Design[]
     */
    public function getAssignedDesigns()
    {
        return $this->container['assignedDesigns'];
    }

    /**
     * Sets assignedDesigns
     * @param \Swagger\Client\Model\Design[] $assignedDesigns
     * @return $this
     */
    public function setAssignedDesigns($assignedDesigns)
    {
        $this->container['assignedDesigns'] = $assignedDesigns;

        return $this;
    }

    /**
     * Gets commentedDesigns
     * @return \Swagger\Client\Model\Design[]
     */
    public function getCommentedDesigns()
    {
        return $this->container['commentedDesigns'];
    }

    /**
     * Sets commentedDesigns
     * @param \Swagger\Client\Model\Design[] $commentedDesigns
     * @return $this
     */
    public function setCommentedDesigns($commentedDesigns)
    {
        $this->container['commentedDesigns'] = $commentedDesigns;

        return $this;
    }

    /**
     * Gets reviewedDesigns
     * @return \Swagger\Client\Model\Design[]
     */
    public function getReviewedDesigns()
    {
        return $this->container['reviewedDesigns'];
    }

    /**
     * Sets reviewedDesigns
     * @param \Swagger\Client\Model\Design[] $reviewedDesigns
     * @return $this
     */
    public function setReviewedDesigns($reviewedDesigns)
    {
        $this->container['reviewedDesigns'] = $reviewedDesigns;

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


