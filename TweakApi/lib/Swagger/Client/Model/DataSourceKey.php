<?php
/**
 * DataSourceKey
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
 * OpenAPI spec version: 1.0.2-alpha.1
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
 * DataSourceKey Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DataSourceKey implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DataSourceKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'label' => 'string',
        'column' => 'double',
        'valueDefault' => 'string',
        'primaryKey' => 'bool',
        'valueRequired' => 'bool',
        'valueMin' => 'double',
        'valueMax' => 'double',
        'valueType' => 'string',
        'id' => 'string',
        'teamId' => 'string',
        'dataSourceId' => 'string',
        'team' => '\Swagger\Client\Model\Team',
        'dataSource' => '\Swagger\Client\Model\DataSource',
        'recordValues' => '\Swagger\Client\Model\DataSourceRecordValue[]'
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
        'label' => 'label',
        'column' => 'column',
        'valueDefault' => 'valueDefault',
        'primaryKey' => 'primaryKey',
        'valueRequired' => 'valueRequired',
        'valueMin' => 'valueMin',
        'valueMax' => 'valueMax',
        'valueType' => 'valueType',
        'id' => 'id',
        'teamId' => 'teamId',
        'dataSourceId' => 'dataSourceId',
        'team' => 'team',
        'dataSource' => 'dataSource',
        'recordValues' => 'recordValues'
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
        'label' => 'setLabel',
        'column' => 'setColumn',
        'valueDefault' => 'setValueDefault',
        'primaryKey' => 'setPrimaryKey',
        'valueRequired' => 'setValueRequired',
        'valueMin' => 'setValueMin',
        'valueMax' => 'setValueMax',
        'valueType' => 'setValueType',
        'id' => 'setId',
        'teamId' => 'setTeamId',
        'dataSourceId' => 'setDataSourceId',
        'team' => 'setTeam',
        'dataSource' => 'setDataSource',
        'recordValues' => 'setRecordValues'
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
        'label' => 'getLabel',
        'column' => 'getColumn',
        'valueDefault' => 'getValueDefault',
        'primaryKey' => 'getPrimaryKey',
        'valueRequired' => 'getValueRequired',
        'valueMin' => 'getValueMin',
        'valueMax' => 'getValueMax',
        'valueType' => 'getValueType',
        'id' => 'getId',
        'teamId' => 'getTeamId',
        'dataSourceId' => 'getDataSourceId',
        'team' => 'getTeam',
        'dataSource' => 'getDataSource',
        'recordValues' => 'getRecordValues'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const VALUE_TYPE_STRING = 'string';
    const VALUE_TYPE_BOOLEAN = 'boolean';
    const VALUE_TYPE_NUMBER = 'number';
    const VALUE_TYPE_DATE = 'date';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getValueTypeAllowableValues()
    {
        return [
            self::VALUE_TYPE_STRING,
            self::VALUE_TYPE_BOOLEAN,
            self::VALUE_TYPE_NUMBER,
            self::VALUE_TYPE_DATE,
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['column'] = isset($data['column']) ? $data['column'] : null;
        $this->container['valueDefault'] = isset($data['valueDefault']) ? $data['valueDefault'] : null;
        $this->container['primaryKey'] = isset($data['primaryKey']) ? $data['primaryKey'] : false;
        $this->container['valueRequired'] = isset($data['valueRequired']) ? $data['valueRequired'] : false;
        $this->container['valueMin'] = isset($data['valueMin']) ? $data['valueMin'] : 0.0;
        $this->container['valueMax'] = isset($data['valueMax']) ? $data['valueMax'] : 0.0;
        $this->container['valueType'] = isset($data['valueType']) ? $data['valueType'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['dataSourceId'] = isset($data['dataSourceId']) ? $data['dataSourceId'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['dataSource'] = isset($data['dataSource']) ? $data['dataSource'] : null;
        $this->container['recordValues'] = isset($data['recordValues']) ? $data['recordValues'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['label'] === null) {
            $invalid_properties[] = "'label' can't be null";
        }
        if ($this->container['column'] === null) {
            $invalid_properties[] = "'column' can't be null";
        }
        $allowed_values = array("string", "boolean", "number", "date");
        if (!in_array($this->container['valueType'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'valueType', must be one of #{allowed_values}.";
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
        if ($this->container['label'] === null) {
            return false;
        }
        if ($this->container['column'] === null) {
            return false;
        }
        $allowed_values = array("string", "boolean", "number", "date");
        if (!in_array($this->container['valueType'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets column
     * @return double
     */
    public function getColumn()
    {
        return $this->container['column'];
    }

    /**
     * Sets column
     * @param double $column
     * @return $this
     */
    public function setColumn($column)
    {
        $this->container['column'] = $column;

        return $this;
    }

    /**
     * Gets valueDefault
     * @return string
     */
    public function getValueDefault()
    {
        return $this->container['valueDefault'];
    }

    /**
     * Sets valueDefault
     * @param string $valueDefault
     * @return $this
     */
    public function setValueDefault($valueDefault)
    {
        $this->container['valueDefault'] = $valueDefault;

        return $this;
    }

    /**
     * Gets primaryKey
     * @return bool
     */
    public function getPrimaryKey()
    {
        return $this->container['primaryKey'];
    }

    /**
     * Sets primaryKey
     * @param bool $primaryKey
     * @return $this
     */
    public function setPrimaryKey($primaryKey)
    {
        $this->container['primaryKey'] = $primaryKey;

        return $this;
    }

    /**
     * Gets valueRequired
     * @return bool
     */
    public function getValueRequired()
    {
        return $this->container['valueRequired'];
    }

    /**
     * Sets valueRequired
     * @param bool $valueRequired
     * @return $this
     */
    public function setValueRequired($valueRequired)
    {
        $this->container['valueRequired'] = $valueRequired;

        return $this;
    }

    /**
     * Gets valueMin
     * @return double
     */
    public function getValueMin()
    {
        return $this->container['valueMin'];
    }

    /**
     * Sets valueMin
     * @param double $valueMin
     * @return $this
     */
    public function setValueMin($valueMin)
    {
        $this->container['valueMin'] = $valueMin;

        return $this;
    }

    /**
     * Gets valueMax
     * @return double
     */
    public function getValueMax()
    {
        return $this->container['valueMax'];
    }

    /**
     * Sets valueMax
     * @param double $valueMax
     * @return $this
     */
    public function setValueMax($valueMax)
    {
        $this->container['valueMax'] = $valueMax;

        return $this;
    }

    /**
     * Gets valueType
     * @return string
     */
    public function getValueType()
    {
        return $this->container['valueType'];
    }

    /**
     * Sets valueType
     * @param string $valueType
     * @return $this
     */
    public function setValueType($valueType)
    {
        $allowed_values = array('string', 'boolean', 'number', 'date');
        if (!in_array($valueType, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'valueType', must be one of 'string', 'boolean', 'number', 'date'");
        }
        $this->container['valueType'] = $valueType;

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
     * Gets recordValues
     * @return \Swagger\Client\Model\DataSourceRecordValue[]
     */
    public function getRecordValues()
    {
        return $this->container['recordValues'];
    }

    /**
     * Sets recordValues
     * @param \Swagger\Client\Model\DataSourceRecordValue[] $recordValues
     * @return $this
     */
    public function setRecordValues($recordValues)
    {
        $this->container['recordValues'] = $recordValues;

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


