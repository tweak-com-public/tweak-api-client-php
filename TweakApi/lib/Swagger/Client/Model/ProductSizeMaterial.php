<?php
/**
 * ProductSizeMaterial
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
 * OpenAPI spec version: 1.0.8-alpha.2
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
 * ProductSizeMaterial Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductSizeMaterial implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductSizeMaterial';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'code' => 'string',
        'legacyCode' => 'string',
        'description' => 'string',
        'thumbnail' => '\Swagger\Client\Model\CloudinaryImage',
        'status' => 'string',
        'bindingType' => 'string',
        'defaultBleed' => '\Swagger\Client\Model\Bounds',
        'printProfile' => 'string',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'materialId' => 'string',
        'teamId' => 'string',
        'pdfColorProfileId' => 'string',
        'sizeId' => 'string',
        'size' => '\Swagger\Client\Model\ProductSize',
        'material' => '\Swagger\Client\Model\ProductMaterial',
        'team' => '\Swagger\Client\Model\Team',
        'pdfColorProfile' => '\Swagger\Client\Model\ProductPdfColorProfile'
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
        'code' => 'code',
        'legacyCode' => 'legacyCode',
        'description' => 'description',
        'thumbnail' => 'thumbnail',
        'status' => 'status',
        'bindingType' => 'bindingType',
        'defaultBleed' => 'defaultBleed',
        'printProfile' => 'printProfile',
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'materialId' => 'materialId',
        'teamId' => 'teamId',
        'pdfColorProfileId' => 'pdfColorProfileId',
        'sizeId' => 'sizeId',
        'size' => 'size',
        'material' => 'material',
        'team' => 'team',
        'pdfColorProfile' => 'pdfColorProfile'
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
        'code' => 'setCode',
        'legacyCode' => 'setLegacyCode',
        'description' => 'setDescription',
        'thumbnail' => 'setThumbnail',
        'status' => 'setStatus',
        'bindingType' => 'setBindingType',
        'defaultBleed' => 'setDefaultBleed',
        'printProfile' => 'setPrintProfile',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'materialId' => 'setMaterialId',
        'teamId' => 'setTeamId',
        'pdfColorProfileId' => 'setPdfColorProfileId',
        'sizeId' => 'setSizeId',
        'size' => 'setSize',
        'material' => 'setMaterial',
        'team' => 'setTeam',
        'pdfColorProfile' => 'setPdfColorProfile'
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
        'code' => 'getCode',
        'legacyCode' => 'getLegacyCode',
        'description' => 'getDescription',
        'thumbnail' => 'getThumbnail',
        'status' => 'getStatus',
        'bindingType' => 'getBindingType',
        'defaultBleed' => 'getDefaultBleed',
        'printProfile' => 'getPrintProfile',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'materialId' => 'getMaterialId',
        'teamId' => 'getTeamId',
        'pdfColorProfileId' => 'getPdfColorProfileId',
        'sizeId' => 'getSizeId',
        'size' => 'getSize',
        'material' => 'getMaterial',
        'team' => 'getTeam',
        'pdfColorProfile' => 'getPdfColorProfile'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_PUBLIC = 'public';
    const STATUS_PRIVATE = 'private';
    const BINDING_TYPE_NONE = 'none';
    const BINDING_TYPE_SADDLE_STITCHED = 'saddle-stitched';
    const BINDING_TYPE_PERFECT = 'perfect';
    const BINDING_TYPE_SECTION_SEWN = 'section-sewn';
    const BINDING_TYPE_WIRO = 'wiro';
    const BINDING_TYPE_CASED_IN_WIRO = 'cased-in-wiro';
    const BINDING_TYPE_PAMPHLET_STITCHED = 'pamphlet-stitched';
    const BINDING_TYPE_COPTIC = 'coptic';
    const BINDING_TYPE_JAPANESE = 'japanese';
    const BINDING_TYPE_SCREW_POST = 'screw-post';
    const PRINT_PROFILE_PDFX1_A = 'PDFX1A';
    const PRINT_PROFILE_PDFX3_A = 'PDFX3A';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PUBLIC,
            self::STATUS_PRIVATE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getBindingTypeAllowableValues()
    {
        return [
            self::BINDING_TYPE_NONE,
            self::BINDING_TYPE_SADDLE_STITCHED,
            self::BINDING_TYPE_PERFECT,
            self::BINDING_TYPE_SECTION_SEWN,
            self::BINDING_TYPE_WIRO,
            self::BINDING_TYPE_CASED_IN_WIRO,
            self::BINDING_TYPE_PAMPHLET_STITCHED,
            self::BINDING_TYPE_COPTIC,
            self::BINDING_TYPE_JAPANESE,
            self::BINDING_TYPE_SCREW_POST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPrintProfileAllowableValues()
    {
        return [
            self::PRINT_PROFILE_PDFX1_A,
            self::PRINT_PROFILE_PDFX3_A,
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['legacyCode'] = isset($data['legacyCode']) ? $data['legacyCode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bindingType'] = isset($data['bindingType']) ? $data['bindingType'] : null;
        $this->container['defaultBleed'] = isset($data['defaultBleed']) ? $data['defaultBleed'] : null;
        $this->container['printProfile'] = isset($data['printProfile']) ? $data['printProfile'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['materialId'] = isset($data['materialId']) ? $data['materialId'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['pdfColorProfileId'] = isset($data['pdfColorProfileId']) ? $data['pdfColorProfileId'] : null;
        $this->container['sizeId'] = isset($data['sizeId']) ? $data['sizeId'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['material'] = isset($data['material']) ? $data['material'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['pdfColorProfile'] = isset($data['pdfColorProfile']) ? $data['pdfColorProfile'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
        }
        $allowed_values = array("public", "private");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

        $allowed_values = array("none", "saddle-stitched", "perfect", "section-sewn", "wiro", "cased-in-wiro", "pamphlet-stitched", "coptic", "japanese", "screw-post");
        if (!in_array($this->container['bindingType'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'bindingType', must be one of #{allowed_values}.";
        }

        $allowed_values = array("PDFX1A", "PDFX3A");
        if (!in_array($this->container['printProfile'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'printProfile', must be one of #{allowed_values}.";
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
        if ($this->container['code'] === null) {
            return false;
        }
        $allowed_values = array("public", "private");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("none", "saddle-stitched", "perfect", "section-sewn", "wiro", "cased-in-wiro", "pamphlet-stitched", "coptic", "japanese", "screw-post");
        if (!in_array($this->container['bindingType'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("PDFX1A", "PDFX3A");
        if (!in_array($this->container['printProfile'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets legacyCode
     * @return string
     */
    public function getLegacyCode()
    {
        return $this->container['legacyCode'];
    }

    /**
     * Sets legacyCode
     * @param string $legacyCode
     * @return $this
     */
    public function setLegacyCode($legacyCode)
    {
        $this->container['legacyCode'] = $legacyCode;

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
     * Gets thumbnail
     * @return \Swagger\Client\Model\CloudinaryImage
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     * @param \Swagger\Client\Model\CloudinaryImage $thumbnail
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

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
        $allowed_values = array('public', 'private');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'public', 'private'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets bindingType
     * @return string
     */
    public function getBindingType()
    {
        return $this->container['bindingType'];
    }

    /**
     * Sets bindingType
     * @param string $bindingType
     * @return $this
     */
    public function setBindingType($bindingType)
    {
        $allowed_values = array('none', 'saddle-stitched', 'perfect', 'section-sewn', 'wiro', 'cased-in-wiro', 'pamphlet-stitched', 'coptic', 'japanese', 'screw-post');
        if (!in_array($bindingType, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'bindingType', must be one of 'none', 'saddle-stitched', 'perfect', 'section-sewn', 'wiro', 'cased-in-wiro', 'pamphlet-stitched', 'coptic', 'japanese', 'screw-post'");
        }
        $this->container['bindingType'] = $bindingType;

        return $this;
    }

    /**
     * Gets defaultBleed
     * @return \Swagger\Client\Model\Bounds
     */
    public function getDefaultBleed()
    {
        return $this->container['defaultBleed'];
    }

    /**
     * Sets defaultBleed
     * @param \Swagger\Client\Model\Bounds $defaultBleed
     * @return $this
     */
    public function setDefaultBleed($defaultBleed)
    {
        $this->container['defaultBleed'] = $defaultBleed;

        return $this;
    }

    /**
     * Gets printProfile
     * @return string
     */
    public function getPrintProfile()
    {
        return $this->container['printProfile'];
    }

    /**
     * Sets printProfile
     * @param string $printProfile
     * @return $this
     */
    public function setPrintProfile($printProfile)
    {
        $allowed_values = array('PDFX1A', 'PDFX3A');
        if (!in_array($printProfile, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'printProfile', must be one of 'PDFX1A', 'PDFX3A'");
        }
        $this->container['printProfile'] = $printProfile;

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
     * Gets materialId
     * @return string
     */
    public function getMaterialId()
    {
        return $this->container['materialId'];
    }

    /**
     * Sets materialId
     * @param string $materialId
     * @return $this
     */
    public function setMaterialId($materialId)
    {
        $this->container['materialId'] = $materialId;

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
     * Gets pdfColorProfileId
     * @return string
     */
    public function getPdfColorProfileId()
    {
        return $this->container['pdfColorProfileId'];
    }

    /**
     * Sets pdfColorProfileId
     * @param string $pdfColorProfileId
     * @return $this
     */
    public function setPdfColorProfileId($pdfColorProfileId)
    {
        $this->container['pdfColorProfileId'] = $pdfColorProfileId;

        return $this;
    }

    /**
     * Gets sizeId
     * @return string
     */
    public function getSizeId()
    {
        return $this->container['sizeId'];
    }

    /**
     * Sets sizeId
     * @param string $sizeId
     * @return $this
     */
    public function setSizeId($sizeId)
    {
        $this->container['sizeId'] = $sizeId;

        return $this;
    }

    /**
     * Gets size
     * @return \Swagger\Client\Model\ProductSize
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param \Swagger\Client\Model\ProductSize $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets material
     * @return \Swagger\Client\Model\ProductMaterial
     */
    public function getMaterial()
    {
        return $this->container['material'];
    }

    /**
     * Sets material
     * @param \Swagger\Client\Model\ProductMaterial $material
     * @return $this
     */
    public function setMaterial($material)
    {
        $this->container['material'] = $material;

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
     * Gets pdfColorProfile
     * @return \Swagger\Client\Model\ProductPdfColorProfile
     */
    public function getPdfColorProfile()
    {
        return $this->container['pdfColorProfile'];
    }

    /**
     * Sets pdfColorProfile
     * @param \Swagger\Client\Model\ProductPdfColorProfile $pdfColorProfile
     * @return $this
     */
    public function setPdfColorProfile($pdfColorProfile)
    {
        $this->container['pdfColorProfile'] = $pdfColorProfile;

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


