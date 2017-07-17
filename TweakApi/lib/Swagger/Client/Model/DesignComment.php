<?php
/**
 * DesignComment
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
 * OpenAPI spec version: 0.0.4
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
 * DesignComment Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DesignComment implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DesignComment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'comment' => 'string',
        'position' => '\Swagger\Client\Model\Axes',
        'pageIndex' => 'double',
        'status' => 'string',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'designId' => 'string',
        'commentId' => 'string',
        'commenterId' => 'string',
        'design' => '\Swagger\Client\Model\Design',
        'replies' => '\Swagger\Client\Model\DesignComment[]',
        'commenter' => '\Swagger\Client\Model\TeamMember',
        'replyOf' => '\Swagger\Client\Model\DesignComment'
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
        'comment' => 'comment',
        'position' => 'position',
        'pageIndex' => 'pageIndex',
        'status' => 'status',
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'designId' => 'designId',
        'commentId' => 'commentId',
        'commenterId' => 'commenterId',
        'design' => 'design',
        'replies' => 'replies',
        'commenter' => 'commenter',
        'replyOf' => 'replyOf'
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
        'comment' => 'setComment',
        'position' => 'setPosition',
        'pageIndex' => 'setPageIndex',
        'status' => 'setStatus',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'designId' => 'setDesignId',
        'commentId' => 'setCommentId',
        'commenterId' => 'setCommenterId',
        'design' => 'setDesign',
        'replies' => 'setReplies',
        'commenter' => 'setCommenter',
        'replyOf' => 'setReplyOf'
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
        'comment' => 'getComment',
        'position' => 'getPosition',
        'pageIndex' => 'getPageIndex',
        'status' => 'getStatus',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'designId' => 'getDesignId',
        'commentId' => 'getCommentId',
        'commenterId' => 'getCommenterId',
        'design' => 'getDesign',
        'replies' => 'getReplies',
        'commenter' => 'getCommenter',
        'replyOf' => 'getReplyOf'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_UNSOLVED = 'unsolved';
    const STATUS_RESOLVED = 'resolved';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UNSOLVED,
            self::STATUS_RESOLVED,
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
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : 0.0;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['designId'] = isset($data['designId']) ? $data['designId'] : null;
        $this->container['commentId'] = isset($data['commentId']) ? $data['commentId'] : null;
        $this->container['commenterId'] = isset($data['commenterId']) ? $data['commenterId'] : null;
        $this->container['design'] = isset($data['design']) ? $data['design'] : null;
        $this->container['replies'] = isset($data['replies']) ? $data['replies'] : null;
        $this->container['commenter'] = isset($data['commenter']) ? $data['commenter'] : null;
        $this->container['replyOf'] = isset($data['replyOf']) ? $data['replyOf'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['comment'] === null) {
            $invalid_properties[] = "'comment' can't be null";
        }
        if (!is_null($this->container['pageIndex']) && ($this->container['pageIndex'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'pageIndex', must be bigger than or equal to 0.0.";
        }

        $allowed_values = array("unsolved", "resolved");
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
        if ($this->container['comment'] === null) {
            return false;
        }
        if ($this->container['pageIndex'] < 0.0) {
            return false;
        }
        $allowed_values = array("unsolved", "resolved");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     * @param string $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets position
     * @return \Swagger\Client\Model\Axes
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param \Swagger\Client\Model\Axes $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets pageIndex
     * @return double
     */
    public function getPageIndex()
    {
        return $this->container['pageIndex'];
    }

    /**
     * Sets pageIndex
     * @param double $pageIndex
     * @return $this
     */
    public function setPageIndex($pageIndex)
    {

        if ($pageIndex < 0.0) {
            throw new \InvalidArgumentException('invalid value for $pageIndex when calling DesignComment., must be bigger than or equal to 0.0.');
        }
        $this->container['pageIndex'] = $pageIndex;

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
        $allowed_values = array('unsolved', 'resolved');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'unsolved', 'resolved'");
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
     * Gets designId
     * @return string
     */
    public function getDesignId()
    {
        return $this->container['designId'];
    }

    /**
     * Sets designId
     * @param string $designId
     * @return $this
     */
    public function setDesignId($designId)
    {
        $this->container['designId'] = $designId;

        return $this;
    }

    /**
     * Gets commentId
     * @return string
     */
    public function getCommentId()
    {
        return $this->container['commentId'];
    }

    /**
     * Sets commentId
     * @param string $commentId
     * @return $this
     */
    public function setCommentId($commentId)
    {
        $this->container['commentId'] = $commentId;

        return $this;
    }

    /**
     * Gets commenterId
     * @return string
     */
    public function getCommenterId()
    {
        return $this->container['commenterId'];
    }

    /**
     * Sets commenterId
     * @param string $commenterId
     * @return $this
     */
    public function setCommenterId($commenterId)
    {
        $this->container['commenterId'] = $commenterId;

        return $this;
    }

    /**
     * Gets design
     * @return \Swagger\Client\Model\Design
     */
    public function getDesign()
    {
        return $this->container['design'];
    }

    /**
     * Sets design
     * @param \Swagger\Client\Model\Design $design
     * @return $this
     */
    public function setDesign($design)
    {
        $this->container['design'] = $design;

        return $this;
    }

    /**
     * Gets replies
     * @return \Swagger\Client\Model\DesignComment[]
     */
    public function getReplies()
    {
        return $this->container['replies'];
    }

    /**
     * Sets replies
     * @param \Swagger\Client\Model\DesignComment[] $replies
     * @return $this
     */
    public function setReplies($replies)
    {
        $this->container['replies'] = $replies;

        return $this;
    }

    /**
     * Gets commenter
     * @return \Swagger\Client\Model\TeamMember
     */
    public function getCommenter()
    {
        return $this->container['commenter'];
    }

    /**
     * Sets commenter
     * @param \Swagger\Client\Model\TeamMember $commenter
     * @return $this
     */
    public function setCommenter($commenter)
    {
        $this->container['commenter'] = $commenter;

        return $this;
    }

    /**
     * Gets replyOf
     * @return \Swagger\Client\Model\DesignComment
     */
    public function getReplyOf()
    {
        return $this->container['replyOf'];
    }

    /**
     * Sets replyOf
     * @param \Swagger\Client\Model\DesignComment $replyOf
     * @return $this
     */
    public function setReplyOf($replyOf)
    {
        $this->container['replyOf'] = $replyOf;

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


