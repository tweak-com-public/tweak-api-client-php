<?php
/**
 * Template
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
 * Template Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Template implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Template';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'thumbnail' => 'string',
        'object' => 'object',
        'description' => 'string',
        'edited' => '\DateTime',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'teamId' => 'string',
        'memberId' => 'double',
        'portals' => '\Swagger\Client\Model\Portal[]',
        'team' => '\Swagger\Client\Model\Team',
        'members' => '\Swagger\Client\Model\TeamMember[]',
        'permission' => '\Swagger\Client\Model\TemplatePermissionSet',
        'designs' => '\Swagger\Client\Model\Design[]',
        'tags' => '\Swagger\Client\Model\Tag[]'
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
        'thumbnail' => 'thumbnail',
        'object' => 'object',
        'description' => 'description',
        'edited' => 'edited',
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'teamId' => 'teamId',
        'memberId' => 'memberId',
        'portals' => 'portals',
        'team' => 'team',
        'members' => 'members',
        'permission' => 'permission',
        'designs' => 'designs',
        'tags' => 'tags'
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
        'thumbnail' => 'setThumbnail',
        'object' => 'setObject',
        'description' => 'setDescription',
        'edited' => 'setEdited',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'teamId' => 'setTeamId',
        'memberId' => 'setMemberId',
        'portals' => 'setPortals',
        'team' => 'setTeam',
        'members' => 'setMembers',
        'permission' => 'setPermission',
        'designs' => 'setDesigns',
        'tags' => 'setTags'
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
        'thumbnail' => 'getThumbnail',
        'object' => 'getObject',
        'description' => 'getDescription',
        'edited' => 'getEdited',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'teamId' => 'getTeamId',
        'memberId' => 'getMemberId',
        'portals' => 'getPortals',
        'team' => 'getTeam',
        'members' => 'getMembers',
        'permission' => 'getPermission',
        'designs' => 'getDesigns',
        'tags' => 'getTags'
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
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : '';
        $this->container['edited'] = isset($data['edited']) ? $data['edited'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
        $this->container['portals'] = isset($data['portals']) ? $data['portals'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['designs'] = isset($data['designs']) ? $data['designs'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
        if ($this->container['object'] === null) {
            $invalid_properties[] = "'object' can't be null";
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
        if ($this->container['object'] === null) {
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
     * Gets thumbnail
     * @return string
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     * @param string $thumbnail
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets object
     * @return object
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     * @param object $object
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets edited
     * @return \DateTime
     */
    public function getEdited()
    {
        return $this->container['edited'];
    }

    /**
     * Sets edited
     * @param \DateTime $edited
     * @return $this
     */
    public function setEdited($edited)
    {
        $this->container['edited'] = $edited;

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
     * Gets portals
     * @return \Swagger\Client\Model\Portal[]
     */
    public function getPortals()
    {
        return $this->container['portals'];
    }

    /**
     * Sets portals
     * @param \Swagger\Client\Model\Portal[] $portals
     * @return $this
     */
    public function setPortals($portals)
    {
        $this->container['portals'] = $portals;

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
     * Gets members
     * @return \Swagger\Client\Model\TeamMember[]
     */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
     * Sets members
     * @param \Swagger\Client\Model\TeamMember[] $members
     * @return $this
     */
    public function setMembers($members)
    {
        $this->container['members'] = $members;

        return $this;
    }

    /**
     * Gets permission
     * @return \Swagger\Client\Model\TemplatePermissionSet
     */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
     * Sets permission
     * @param \Swagger\Client\Model\TemplatePermissionSet $permission
     * @return $this
     */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;

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
     * Gets tags
     * @return \Swagger\Client\Model\Tag[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param \Swagger\Client\Model\Tag[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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


