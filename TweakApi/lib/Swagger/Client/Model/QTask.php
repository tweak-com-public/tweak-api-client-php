<?php
/**
 * QTask
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
 * OpenAPI spec version: 1.0.8-alpha.0
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
 * QTask Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QTask implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'chain' => 'string[]',
        'events' => 'object[]',
        'status' => 'string',
        'params' => 'object',
        'queue' => 'string',
        'count' => 'double',
        'attempts' => 'double',
        'remaining' => 'double',
        'delay' => '\DateTime',
        'priority' => 'double',
        'ended' => '\DateTime',
        'enqueued' => '\DateTime',
        'result' => 'object',
        'error' => 'object',
        'stack' => 'object',
        'id' => '\Swagger\Client\Model\ObjectID',
        'itemId' => '\Swagger\Client\Model\ObjectID',
        'itemType' => 'string'
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
        'chain' => 'chain',
        'events' => 'events',
        'status' => 'status',
        'params' => 'params',
        'queue' => 'queue',
        'count' => 'count',
        'attempts' => 'attempts',
        'remaining' => 'remaining',
        'delay' => 'delay',
        'priority' => 'priority',
        'ended' => 'ended',
        'enqueued' => 'enqueued',
        'result' => 'result',
        'error' => 'error',
        'stack' => 'stack',
        'id' => 'id',
        'itemId' => 'itemId',
        'itemType' => 'itemType'
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
        'chain' => 'setChain',
        'events' => 'setEvents',
        'status' => 'setStatus',
        'params' => 'setParams',
        'queue' => 'setQueue',
        'count' => 'setCount',
        'attempts' => 'setAttempts',
        'remaining' => 'setRemaining',
        'delay' => 'setDelay',
        'priority' => 'setPriority',
        'ended' => 'setEnded',
        'enqueued' => 'setEnqueued',
        'result' => 'setResult',
        'error' => 'setError',
        'stack' => 'setStack',
        'id' => 'setId',
        'itemId' => 'setItemId',
        'itemType' => 'setItemType'
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
        'chain' => 'getChain',
        'events' => 'getEvents',
        'status' => 'getStatus',
        'params' => 'getParams',
        'queue' => 'getQueue',
        'count' => 'getCount',
        'attempts' => 'getAttempts',
        'remaining' => 'getRemaining',
        'delay' => 'getDelay',
        'priority' => 'getPriority',
        'ended' => 'getEnded',
        'enqueued' => 'getEnqueued',
        'result' => 'getResult',
        'error' => 'getError',
        'stack' => 'getStack',
        'id' => 'getId',
        'itemId' => 'getItemId',
        'itemType' => 'getItemType'
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
        $this->container['chain'] = isset($data['chain']) ? $data['chain'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'queued';
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : 'default';
        $this->container['count'] = isset($data['count']) ? $data['count'] : 0.0;
        $this->container['attempts'] = isset($data['attempts']) ? $data['attempts'] : 5.0;
        $this->container['remaining'] = isset($data['remaining']) ? $data['remaining'] : 5.0;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : 0.0;
        $this->container['ended'] = isset($data['ended']) ? $data['ended'] : null;
        $this->container['enqueued'] = isset($data['enqueued']) ? $data['enqueued'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['stack'] = isset($data['stack']) ? $data['stack'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['itemId'] = isset($data['itemId']) ? $data['itemId'] : null;
        $this->container['itemType'] = isset($data['itemType']) ? $data['itemType'] : null;
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
     * Gets chain
     * @return string[]
     */
    public function getChain()
    {
        return $this->container['chain'];
    }

    /**
     * Sets chain
     * @param string[] $chain
     * @return $this
     */
    public function setChain($chain)
    {
        $this->container['chain'] = $chain;

        return $this;
    }

    /**
     * Gets events
     * @return object[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     * @param object[] $events
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

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
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets params
     * @return object
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     * @param object $params
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets queue
     * @return string
     */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
     * Sets queue
     * @param string $queue
     * @return $this
     */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;

        return $this;
    }

    /**
     * Gets count
     * @return double
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param double $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets attempts
     * @return double
     */
    public function getAttempts()
    {
        return $this->container['attempts'];
    }

    /**
     * Sets attempts
     * @param double $attempts
     * @return $this
     */
    public function setAttempts($attempts)
    {
        $this->container['attempts'] = $attempts;

        return $this;
    }

    /**
     * Gets remaining
     * @return double
     */
    public function getRemaining()
    {
        return $this->container['remaining'];
    }

    /**
     * Sets remaining
     * @param double $remaining
     * @return $this
     */
    public function setRemaining($remaining)
    {
        $this->container['remaining'] = $remaining;

        return $this;
    }

    /**
     * Gets delay
     * @return \DateTime
     */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
     * Sets delay
     * @param \DateTime $delay
     * @return $this
     */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;

        return $this;
    }

    /**
     * Gets priority
     * @return double
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     * @param double $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets ended
     * @return \DateTime
     */
    public function getEnded()
    {
        return $this->container['ended'];
    }

    /**
     * Sets ended
     * @param \DateTime $ended
     * @return $this
     */
    public function setEnded($ended)
    {
        $this->container['ended'] = $ended;

        return $this;
    }

    /**
     * Gets enqueued
     * @return \DateTime
     */
    public function getEnqueued()
    {
        return $this->container['enqueued'];
    }

    /**
     * Sets enqueued
     * @param \DateTime $enqueued
     * @return $this
     */
    public function setEnqueued($enqueued)
    {
        $this->container['enqueued'] = $enqueued;

        return $this;
    }

    /**
     * Gets result
     * @return object
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     * @param object $result
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets error
     * @return object
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     * @param object $error
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets stack
     * @return object
     */
    public function getStack()
    {
        return $this->container['stack'];
    }

    /**
     * Sets stack
     * @param object $stack
     * @return $this
     */
    public function setStack($stack)
    {
        $this->container['stack'] = $stack;

        return $this;
    }

    /**
     * Gets id
     * @return \Swagger\Client\Model\ObjectID
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param \Swagger\Client\Model\ObjectID $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets itemId
     * @return \Swagger\Client\Model\ObjectID
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     * @param \Swagger\Client\Model\ObjectID $itemId
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;

        return $this;
    }

    /**
     * Gets itemType
     * @return string
     */
    public function getItemType()
    {
        return $this->container['itemType'];
    }

    /**
     * Sets itemType
     * @param string $itemType
     * @return $this
     */
    public function setItemType($itemType)
    {
        $this->container['itemType'] = $itemType;

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


