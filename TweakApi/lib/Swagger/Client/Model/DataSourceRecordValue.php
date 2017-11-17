<?php
/**
 * DataSourceRecordValue
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
 * OpenAPI spec version: 1.0.3-alpha.4
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
 * DataSourceRecordValue Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DataSourceRecordValue implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DataSourceRecordValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'value' => 'string',
        'id' => 'string',
        'teamId' => 'string',
        'dataSourceId' => 'string',
        'recordId' => 'string',
        'keyId' => 'string',
        'team' => '\Swagger\Client\Model\Team',
        'dataSource' => '\Swagger\Client\Model\DataSource',
        'values' => '\Swagger\Client\Model\DataSourceRecord',
        'key' => '\Swagger\Client\Model\DataSourceKey'
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
        'value' => 'value',
        'id' => 'id',
        'teamId' => 'teamId',
        'dataSourceId' => 'dataSourceId',
        'recordId' => 'recordId',
        'keyId' => 'keyId',
        'team' => 'team',
        'dataSource' => 'dataSource',
        'values' => 'values',
        'key' => 'key'
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
        'value' => 'setValue',
        'id' => 'setId',
        'teamId' => 'setTeamId',
        'dataSourceId' => 'setDataSourceId',
        'recordId' => 'setRecordId',
        'keyId' => 'setKeyId',
        'team' => 'setTeam',
        'dataSource' => 'setDataSource',
        'values' => 'setValues',
        'key' => 'setKey'
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
        'value' => 'getValue',
        'id' => 'getId',
        'teamId' => 'getTeamId',
        'dataSourceId' => 'getDataSourceId',
        'recordId' => 'getRecordId',
        'keyId' => 'getKeyId',
        'team' => 'getTeam',
        'dataSource' => 'getDataSource',
        'values' => 'getValues',
        'key' => 'getKey'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['dataSourceId'] = isset($data['dataSourceId']) ? $data['dataSourceId'] : null;
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['dataSource'] = isset($data['dataSource']) ? $data['dataSource'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
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
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
     * Gets dataSourceId
     * @return string
     */
    public function getDataSourceId()
    {
        return $this->container['dataSourceId'];
    }

    /**
     * Sets dataSourceId
     * @param string $dataSourceId
     * @return $this
     */
    public function setDataSourceId($dataSourceId)
    {
        $this->container['dataSourceId'] = $dataSourceId;

        return $this;
    }

    /**
     * Gets recordId
     * @return string
     */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
     * Sets recordId
     * @param string $recordId
     * @return $this
     */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;

        return $this;
    }

    /**
     * Gets keyId
     * @return string
     */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
     * Sets keyId
     * @param string $keyId
     * @return $this
     */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;

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
     * Gets dataSource
     * @return \Swagger\Client\Model\DataSource
     */
    public function getDataSource()
    {
        return $this->container['dataSource'];
    }

    /**
     * Sets dataSource
     * @param \Swagger\Client\Model\DataSource $dataSource
     * @return $this
     */
    public function setDataSource($dataSource)
    {
        $this->container['dataSource'] = $dataSource;

        return $this;
    }

    /**
     * Gets values
     * @return \Swagger\Client\Model\DataSourceRecord
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     * @param \Swagger\Client\Model\DataSourceRecord $values
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets key
     * @return \Swagger\Client\Model\DataSourceKey
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param \Swagger\Client\Model\DataSourceKey $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

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


