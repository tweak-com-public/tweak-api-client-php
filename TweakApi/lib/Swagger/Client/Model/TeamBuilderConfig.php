<?php
/**
 * TeamBuilderConfig
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
 * OpenAPI spec version: 1.0.8-alpha.13
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
 * TeamBuilderConfig Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TeamBuilderConfig implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TeamBuilderConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'debugMode' => 'bool',
        'features' => 'object',
        'ui' => 'object',
        'isDefault' => 'bool',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'teamId' => 'string',
        'team' => '\Swagger\Client\Model\Team',
        'portals' => '\Swagger\Client\Model\Portal[]',
        'productGroups' => '\Swagger\Client\Model\ProductGroup[]',
        'productTypes' => '\Swagger\Client\Model\ProductType[]',
        'productSizes' => '\Swagger\Client\Model\ProductSize[]',
        'productSizeMaterials' => '\Swagger\Client\Model\ProductSizeMaterial[]',
        'productSizeMaterialsRel' => '\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial[]'
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
        'debugMode' => 'debugMode',
        'features' => 'features',
        'ui' => 'ui',
        'isDefault' => 'isDefault',
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'teamId' => 'teamId',
        'team' => 'team',
        'portals' => 'portals',
        'productGroups' => 'productGroups',
        'productTypes' => 'productTypes',
        'productSizes' => 'productSizes',
        'productSizeMaterials' => 'productSizeMaterials',
        'productSizeMaterialsRel' => 'productSizeMaterialsRel'
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
        'debugMode' => 'setDebugMode',
        'features' => 'setFeatures',
        'ui' => 'setUi',
        'isDefault' => 'setIsDefault',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'teamId' => 'setTeamId',
        'team' => 'setTeam',
        'portals' => 'setPortals',
        'productGroups' => 'setProductGroups',
        'productTypes' => 'setProductTypes',
        'productSizes' => 'setProductSizes',
        'productSizeMaterials' => 'setProductSizeMaterials',
        'productSizeMaterialsRel' => 'setProductSizeMaterialsRel'
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
        'debugMode' => 'getDebugMode',
        'features' => 'getFeatures',
        'ui' => 'getUi',
        'isDefault' => 'getIsDefault',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'teamId' => 'getTeamId',
        'team' => 'getTeam',
        'portals' => 'getPortals',
        'productGroups' => 'getProductGroups',
        'productTypes' => 'getProductTypes',
        'productSizes' => 'getProductSizes',
        'productSizeMaterials' => 'getProductSizeMaterials',
        'productSizeMaterialsRel' => 'getProductSizeMaterialsRel'
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
        $this->container['debugMode'] = isset($data['debugMode']) ? $data['debugMode'] : false;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['ui'] = isset($data['ui']) ? $data['ui'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : false;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['portals'] = isset($data['portals']) ? $data['portals'] : null;
        $this->container['productGroups'] = isset($data['productGroups']) ? $data['productGroups'] : null;
        $this->container['productTypes'] = isset($data['productTypes']) ? $data['productTypes'] : null;
        $this->container['productSizes'] = isset($data['productSizes']) ? $data['productSizes'] : null;
        $this->container['productSizeMaterials'] = isset($data['productSizeMaterials']) ? $data['productSizeMaterials'] : null;
        $this->container['productSizeMaterialsRel'] = isset($data['productSizeMaterialsRel']) ? $data['productSizeMaterialsRel'] : null;
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
     * Gets debugMode
     * @return bool
     */
    public function getDebugMode()
    {
        return $this->container['debugMode'];
    }

    /**
     * Sets debugMode
     * @param bool $debugMode
     * @return $this
     */
    public function setDebugMode($debugMode)
    {
        $this->container['debugMode'] = $debugMode;

        return $this;
    }

    /**
     * Gets features
     * @return object
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     * @param object $features
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets ui
     * @return object
     */
    public function getUi()
    {
        return $this->container['ui'];
    }

    /**
     * Sets ui
     * @param object $ui
     * @return $this
     */
    public function setUi($ui)
    {
        $this->container['ui'] = $ui;

        return $this;
    }

    /**
     * Gets isDefault
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
     * Sets isDefault
     * @param bool $isDefault
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;

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
     * Gets productGroups
     * @return \Swagger\Client\Model\ProductGroup[]
     */
    public function getProductGroups()
    {
        return $this->container['productGroups'];
    }

    /**
     * Sets productGroups
     * @param \Swagger\Client\Model\ProductGroup[] $productGroups
     * @return $this
     */
    public function setProductGroups($productGroups)
    {
        $this->container['productGroups'] = $productGroups;

        return $this;
    }

    /**
     * Gets productTypes
     * @return \Swagger\Client\Model\ProductType[]
     */
    public function getProductTypes()
    {
        return $this->container['productTypes'];
    }

    /**
     * Sets productTypes
     * @param \Swagger\Client\Model\ProductType[] $productTypes
     * @return $this
     */
    public function setProductTypes($productTypes)
    {
        $this->container['productTypes'] = $productTypes;

        return $this;
    }

    /**
     * Gets productSizes
     * @return \Swagger\Client\Model\ProductSize[]
     */
    public function getProductSizes()
    {
        return $this->container['productSizes'];
    }

    /**
     * Sets productSizes
     * @param \Swagger\Client\Model\ProductSize[] $productSizes
     * @return $this
     */
    public function setProductSizes($productSizes)
    {
        $this->container['productSizes'] = $productSizes;

        return $this;
    }

    /**
     * Gets productSizeMaterials
     * @return \Swagger\Client\Model\ProductSizeMaterial[]
     */
    public function getProductSizeMaterials()
    {
        return $this->container['productSizeMaterials'];
    }

    /**
     * Sets productSizeMaterials
     * @param \Swagger\Client\Model\ProductSizeMaterial[] $productSizeMaterials
     * @return $this
     */
    public function setProductSizeMaterials($productSizeMaterials)
    {
        $this->container['productSizeMaterials'] = $productSizeMaterials;

        return $this;
    }

    /**
     * Gets productSizeMaterialsRel
     * @return \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial[]
     */
    public function getProductSizeMaterialsRel()
    {
        return $this->container['productSizeMaterialsRel'];
    }

    /**
     * Sets productSizeMaterialsRel
     * @param \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial[] $productSizeMaterialsRel
     * @return $this
     */
    public function setProductSizeMaterialsRel($productSizeMaterialsRel)
    {
        $this->container['productSizeMaterialsRel'] = $productSizeMaterialsRel;

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


