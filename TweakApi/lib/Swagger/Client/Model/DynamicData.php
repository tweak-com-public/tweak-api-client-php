<?php
/**
 * DynamicData
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
 * OpenAPI spec version: 1.0.8-alpha.10
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
 * DynamicData Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DynamicData implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DynamicData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'propertiesOrder' => 'string[]',
        'properties' => 'object',
        'relations' => 'object',
        'validations' => 'object',
        'dataSource' => 'string',
        'operationSoap' => '\Swagger\Client\Model\DynamicDataOperationSoap',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'recordCount' => 'double',
        'id' => 'string',
        'dataSourceSoapId' => 'string',
        'dataSourceRestId' => 'string',
        'dataSourceMySqlId' => 'string',
        'dataSourceMsSqlId' => 'string',
        'dataSourcePostgreSqlId' => 'string',
        'dataSourceMongoId' => 'string',
        'dataSourceOracleId' => 'string',
        'teamId' => 'string',
        'team' => '\Swagger\Client\Model\Team',
        'designs' => '\Swagger\Client\Model\Design[]',
        'dataSourceSoap' => '\Swagger\Client\Model\DataSourceSoap',
        'dataSourceRest' => '\Swagger\Client\Model\DataSourceRest',
        'dataSourceMySql' => '\Swagger\Client\Model\DataSourceMySql',
        'dataSourceMsSql' => '\Swagger\Client\Model\DataSourceMsSql',
        'dataSourcePostgreSql' => '\Swagger\Client\Model\DataSourcePostgreSql',
        'dataSourceMongo' => '\Swagger\Client\Model\DataSourceMongo',
        'dataSourceOracle' => '\Swagger\Client\Model\DataSourceOracle'
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
        'propertiesOrder' => 'propertiesOrder',
        'properties' => 'properties',
        'relations' => 'relations',
        'validations' => 'validations',
        'dataSource' => 'dataSource',
        'operationSoap' => 'operationSoap',
        'created' => 'created',
        'modified' => 'modified',
        'recordCount' => 'recordCount',
        'id' => 'id',
        'dataSourceSoapId' => 'dataSourceSoapId',
        'dataSourceRestId' => 'dataSourceRestId',
        'dataSourceMySqlId' => 'dataSourceMySqlId',
        'dataSourceMsSqlId' => 'dataSourceMsSqlId',
        'dataSourcePostgreSqlId' => 'dataSourcePostgreSqlId',
        'dataSourceMongoId' => 'dataSourceMongoId',
        'dataSourceOracleId' => 'dataSourceOracleId',
        'teamId' => 'teamId',
        'team' => 'team',
        'designs' => 'designs',
        'dataSourceSoap' => 'dataSourceSoap',
        'dataSourceRest' => 'dataSourceRest',
        'dataSourceMySql' => 'dataSourceMySql',
        'dataSourceMsSql' => 'dataSourceMsSql',
        'dataSourcePostgreSql' => 'dataSourcePostgreSql',
        'dataSourceMongo' => 'dataSourceMongo',
        'dataSourceOracle' => 'dataSourceOracle'
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
        'propertiesOrder' => 'setPropertiesOrder',
        'properties' => 'setProperties',
        'relations' => 'setRelations',
        'validations' => 'setValidations',
        'dataSource' => 'setDataSource',
        'operationSoap' => 'setOperationSoap',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'recordCount' => 'setRecordCount',
        'id' => 'setId',
        'dataSourceSoapId' => 'setDataSourceSoapId',
        'dataSourceRestId' => 'setDataSourceRestId',
        'dataSourceMySqlId' => 'setDataSourceMySqlId',
        'dataSourceMsSqlId' => 'setDataSourceMsSqlId',
        'dataSourcePostgreSqlId' => 'setDataSourcePostgreSqlId',
        'dataSourceMongoId' => 'setDataSourceMongoId',
        'dataSourceOracleId' => 'setDataSourceOracleId',
        'teamId' => 'setTeamId',
        'team' => 'setTeam',
        'designs' => 'setDesigns',
        'dataSourceSoap' => 'setDataSourceSoap',
        'dataSourceRest' => 'setDataSourceRest',
        'dataSourceMySql' => 'setDataSourceMySql',
        'dataSourceMsSql' => 'setDataSourceMsSql',
        'dataSourcePostgreSql' => 'setDataSourcePostgreSql',
        'dataSourceMongo' => 'setDataSourceMongo',
        'dataSourceOracle' => 'setDataSourceOracle'
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
        'propertiesOrder' => 'getPropertiesOrder',
        'properties' => 'getProperties',
        'relations' => 'getRelations',
        'validations' => 'getValidations',
        'dataSource' => 'getDataSource',
        'operationSoap' => 'getOperationSoap',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'recordCount' => 'getRecordCount',
        'id' => 'getId',
        'dataSourceSoapId' => 'getDataSourceSoapId',
        'dataSourceRestId' => 'getDataSourceRestId',
        'dataSourceMySqlId' => 'getDataSourceMySqlId',
        'dataSourceMsSqlId' => 'getDataSourceMsSqlId',
        'dataSourcePostgreSqlId' => 'getDataSourcePostgreSqlId',
        'dataSourceMongoId' => 'getDataSourceMongoId',
        'dataSourceOracleId' => 'getDataSourceOracleId',
        'teamId' => 'getTeamId',
        'team' => 'getTeam',
        'designs' => 'getDesigns',
        'dataSourceSoap' => 'getDataSourceSoap',
        'dataSourceRest' => 'getDataSourceRest',
        'dataSourceMySql' => 'getDataSourceMySql',
        'dataSourceMsSql' => 'getDataSourceMsSql',
        'dataSourcePostgreSql' => 'getDataSourcePostgreSql',
        'dataSourceMongo' => 'getDataSourceMongo',
        'dataSourceOracle' => 'getDataSourceOracle'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const DATA_SOURCE_TWEAK_DB = 'tweak-db';
    const DATA_SOURCE_SOAP = 'soap';
    const DATA_SOURCE_REST = 'rest';
    const DATA_SOURCE_MYSQL = 'mysql';
    const DATA_SOURCE_MSSQL = 'mssql';
    const DATA_SOURCE_POSTGRESQL = 'postgresql';
    const DATA_SOURCE_MONGO = 'mongo';
    const DATA_SOURCE_ORACLE = 'oracle';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDataSourceAllowableValues()
    {
        return [
            self::DATA_SOURCE_TWEAK_DB,
            self::DATA_SOURCE_SOAP,
            self::DATA_SOURCE_REST,
            self::DATA_SOURCE_MYSQL,
            self::DATA_SOURCE_MSSQL,
            self::DATA_SOURCE_POSTGRESQL,
            self::DATA_SOURCE_MONGO,
            self::DATA_SOURCE_ORACLE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['propertiesOrder'] = isset($data['propertiesOrder']) ? $data['propertiesOrder'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['relations'] = isset($data['relations']) ? $data['relations'] : null;
        $this->container['validations'] = isset($data['validations']) ? $data['validations'] : null;
        $this->container['dataSource'] = isset($data['dataSource']) ? $data['dataSource'] : null;
        $this->container['operationSoap'] = isset($data['operationSoap']) ? $data['operationSoap'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['recordCount'] = isset($data['recordCount']) ? $data['recordCount'] : 0.0;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['dataSourceSoapId'] = isset($data['dataSourceSoapId']) ? $data['dataSourceSoapId'] : null;
        $this->container['dataSourceRestId'] = isset($data['dataSourceRestId']) ? $data['dataSourceRestId'] : null;
        $this->container['dataSourceMySqlId'] = isset($data['dataSourceMySqlId']) ? $data['dataSourceMySqlId'] : null;
        $this->container['dataSourceMsSqlId'] = isset($data['dataSourceMsSqlId']) ? $data['dataSourceMsSqlId'] : null;
        $this->container['dataSourcePostgreSqlId'] = isset($data['dataSourcePostgreSqlId']) ? $data['dataSourcePostgreSqlId'] : null;
        $this->container['dataSourceMongoId'] = isset($data['dataSourceMongoId']) ? $data['dataSourceMongoId'] : null;
        $this->container['dataSourceOracleId'] = isset($data['dataSourceOracleId']) ? $data['dataSourceOracleId'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['designs'] = isset($data['designs']) ? $data['designs'] : null;
        $this->container['dataSourceSoap'] = isset($data['dataSourceSoap']) ? $data['dataSourceSoap'] : null;
        $this->container['dataSourceRest'] = isset($data['dataSourceRest']) ? $data['dataSourceRest'] : null;
        $this->container['dataSourceMySql'] = isset($data['dataSourceMySql']) ? $data['dataSourceMySql'] : null;
        $this->container['dataSourceMsSql'] = isset($data['dataSourceMsSql']) ? $data['dataSourceMsSql'] : null;
        $this->container['dataSourcePostgreSql'] = isset($data['dataSourcePostgreSql']) ? $data['dataSourcePostgreSql'] : null;
        $this->container['dataSourceMongo'] = isset($data['dataSourceMongo']) ? $data['dataSourceMongo'] : null;
        $this->container['dataSourceOracle'] = isset($data['dataSourceOracle']) ? $data['dataSourceOracle'] : null;
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
        $allowed_values = array("tweak-db", "soap", "rest", "mysql", "mssql", "postgresql", "mongo", "oracle");
        if (!in_array($this->container['dataSource'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'dataSource', must be one of #{allowed_values}.";
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
        $allowed_values = array("tweak-db", "soap", "rest", "mysql", "mssql", "postgresql", "mongo", "oracle");
        if (!in_array($this->container['dataSource'], $allowed_values)) {
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
     * Gets propertiesOrder
     * @return string[]
     */
    public function getPropertiesOrder()
    {
        return $this->container['propertiesOrder'];
    }

    /**
     * Sets propertiesOrder
     * @param string[] $propertiesOrder
     * @return $this
     */
    public function setPropertiesOrder($propertiesOrder)
    {
        $this->container['propertiesOrder'] = $propertiesOrder;

        return $this;
    }

    /**
     * Gets properties
     * @return object
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     * @param object $properties
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets relations
     * @return object
     */
    public function getRelations()
    {
        return $this->container['relations'];
    }

    /**
     * Sets relations
     * @param object $relations
     * @return $this
     */
    public function setRelations($relations)
    {
        $this->container['relations'] = $relations;

        return $this;
    }

    /**
     * Gets validations
     * @return object
     */
    public function getValidations()
    {
        return $this->container['validations'];
    }

    /**
     * Sets validations
     * @param object $validations
     * @return $this
     */
    public function setValidations($validations)
    {
        $this->container['validations'] = $validations;

        return $this;
    }

    /**
     * Gets dataSource
     * @return string
     */
    public function getDataSource()
    {
        return $this->container['dataSource'];
    }

    /**
     * Sets dataSource
     * @param string $dataSource
     * @return $this
     */
    public function setDataSource($dataSource)
    {
        $allowed_values = array('tweak-db', 'soap', 'rest', 'mysql', 'mssql', 'postgresql', 'mongo', 'oracle');
        if (!in_array($dataSource, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'dataSource', must be one of 'tweak-db', 'soap', 'rest', 'mysql', 'mssql', 'postgresql', 'mongo', 'oracle'");
        }
        $this->container['dataSource'] = $dataSource;

        return $this;
    }

    /**
     * Gets operationSoap
     * @return \Swagger\Client\Model\DynamicDataOperationSoap
     */
    public function getOperationSoap()
    {
        return $this->container['operationSoap'];
    }

    /**
     * Sets operationSoap
     * @param \Swagger\Client\Model\DynamicDataOperationSoap $operationSoap
     * @return $this
     */
    public function setOperationSoap($operationSoap)
    {
        $this->container['operationSoap'] = $operationSoap;

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
     * Gets recordCount
     * @return double
     */
    public function getRecordCount()
    {
        return $this->container['recordCount'];
    }

    /**
     * Sets recordCount
     * @param double $recordCount
     * @return $this
     */
    public function setRecordCount($recordCount)
    {
        $this->container['recordCount'] = $recordCount;

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
     * Gets dataSourceSoapId
     * @return string
     */
    public function getDataSourceSoapId()
    {
        return $this->container['dataSourceSoapId'];
    }

    /**
     * Sets dataSourceSoapId
     * @param string $dataSourceSoapId
     * @return $this
     */
    public function setDataSourceSoapId($dataSourceSoapId)
    {
        $this->container['dataSourceSoapId'] = $dataSourceSoapId;

        return $this;
    }

    /**
     * Gets dataSourceRestId
     * @return string
     */
    public function getDataSourceRestId()
    {
        return $this->container['dataSourceRestId'];
    }

    /**
     * Sets dataSourceRestId
     * @param string $dataSourceRestId
     * @return $this
     */
    public function setDataSourceRestId($dataSourceRestId)
    {
        $this->container['dataSourceRestId'] = $dataSourceRestId;

        return $this;
    }

    /**
     * Gets dataSourceMySqlId
     * @return string
     */
    public function getDataSourceMySqlId()
    {
        return $this->container['dataSourceMySqlId'];
    }

    /**
     * Sets dataSourceMySqlId
     * @param string $dataSourceMySqlId
     * @return $this
     */
    public function setDataSourceMySqlId($dataSourceMySqlId)
    {
        $this->container['dataSourceMySqlId'] = $dataSourceMySqlId;

        return $this;
    }

    /**
     * Gets dataSourceMsSqlId
     * @return string
     */
    public function getDataSourceMsSqlId()
    {
        return $this->container['dataSourceMsSqlId'];
    }

    /**
     * Sets dataSourceMsSqlId
     * @param string $dataSourceMsSqlId
     * @return $this
     */
    public function setDataSourceMsSqlId($dataSourceMsSqlId)
    {
        $this->container['dataSourceMsSqlId'] = $dataSourceMsSqlId;

        return $this;
    }

    /**
     * Gets dataSourcePostgreSqlId
     * @return string
     */
    public function getDataSourcePostgreSqlId()
    {
        return $this->container['dataSourcePostgreSqlId'];
    }

    /**
     * Sets dataSourcePostgreSqlId
     * @param string $dataSourcePostgreSqlId
     * @return $this
     */
    public function setDataSourcePostgreSqlId($dataSourcePostgreSqlId)
    {
        $this->container['dataSourcePostgreSqlId'] = $dataSourcePostgreSqlId;

        return $this;
    }

    /**
     * Gets dataSourceMongoId
     * @return string
     */
    public function getDataSourceMongoId()
    {
        return $this->container['dataSourceMongoId'];
    }

    /**
     * Sets dataSourceMongoId
     * @param string $dataSourceMongoId
     * @return $this
     */
    public function setDataSourceMongoId($dataSourceMongoId)
    {
        $this->container['dataSourceMongoId'] = $dataSourceMongoId;

        return $this;
    }

    /**
     * Gets dataSourceOracleId
     * @return string
     */
    public function getDataSourceOracleId()
    {
        return $this->container['dataSourceOracleId'];
    }

    /**
     * Sets dataSourceOracleId
     * @param string $dataSourceOracleId
     * @return $this
     */
    public function setDataSourceOracleId($dataSourceOracleId)
    {
        $this->container['dataSourceOracleId'] = $dataSourceOracleId;

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
     * Gets dataSourceSoap
     * @return \Swagger\Client\Model\DataSourceSoap
     */
    public function getDataSourceSoap()
    {
        return $this->container['dataSourceSoap'];
    }

    /**
     * Sets dataSourceSoap
     * @param \Swagger\Client\Model\DataSourceSoap $dataSourceSoap
     * @return $this
     */
    public function setDataSourceSoap($dataSourceSoap)
    {
        $this->container['dataSourceSoap'] = $dataSourceSoap;

        return $this;
    }

    /**
     * Gets dataSourceRest
     * @return \Swagger\Client\Model\DataSourceRest
     */
    public function getDataSourceRest()
    {
        return $this->container['dataSourceRest'];
    }

    /**
     * Sets dataSourceRest
     * @param \Swagger\Client\Model\DataSourceRest $dataSourceRest
     * @return $this
     */
    public function setDataSourceRest($dataSourceRest)
    {
        $this->container['dataSourceRest'] = $dataSourceRest;

        return $this;
    }

    /**
     * Gets dataSourceMySql
     * @return \Swagger\Client\Model\DataSourceMySql
     */
    public function getDataSourceMySql()
    {
        return $this->container['dataSourceMySql'];
    }

    /**
     * Sets dataSourceMySql
     * @param \Swagger\Client\Model\DataSourceMySql $dataSourceMySql
     * @return $this
     */
    public function setDataSourceMySql($dataSourceMySql)
    {
        $this->container['dataSourceMySql'] = $dataSourceMySql;

        return $this;
    }

    /**
     * Gets dataSourceMsSql
     * @return \Swagger\Client\Model\DataSourceMsSql
     */
    public function getDataSourceMsSql()
    {
        return $this->container['dataSourceMsSql'];
    }

    /**
     * Sets dataSourceMsSql
     * @param \Swagger\Client\Model\DataSourceMsSql $dataSourceMsSql
     * @return $this
     */
    public function setDataSourceMsSql($dataSourceMsSql)
    {
        $this->container['dataSourceMsSql'] = $dataSourceMsSql;

        return $this;
    }

    /**
     * Gets dataSourcePostgreSql
     * @return \Swagger\Client\Model\DataSourcePostgreSql
     */
    public function getDataSourcePostgreSql()
    {
        return $this->container['dataSourcePostgreSql'];
    }

    /**
     * Sets dataSourcePostgreSql
     * @param \Swagger\Client\Model\DataSourcePostgreSql $dataSourcePostgreSql
     * @return $this
     */
    public function setDataSourcePostgreSql($dataSourcePostgreSql)
    {
        $this->container['dataSourcePostgreSql'] = $dataSourcePostgreSql;

        return $this;
    }

    /**
     * Gets dataSourceMongo
     * @return \Swagger\Client\Model\DataSourceMongo
     */
    public function getDataSourceMongo()
    {
        return $this->container['dataSourceMongo'];
    }

    /**
     * Sets dataSourceMongo
     * @param \Swagger\Client\Model\DataSourceMongo $dataSourceMongo
     * @return $this
     */
    public function setDataSourceMongo($dataSourceMongo)
    {
        $this->container['dataSourceMongo'] = $dataSourceMongo;

        return $this;
    }

    /**
     * Gets dataSourceOracle
     * @return \Swagger\Client\Model\DataSourceOracle
     */
    public function getDataSourceOracle()
    {
        return $this->container['dataSourceOracle'];
    }

    /**
     * Sets dataSourceOracle
     * @param \Swagger\Client\Model\DataSourceOracle $dataSourceOracle
     * @return $this
     */
    public function setDataSourceOracle($dataSourceOracle)
    {
        $this->container['dataSourceOracle'] = $dataSourceOracle;

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


