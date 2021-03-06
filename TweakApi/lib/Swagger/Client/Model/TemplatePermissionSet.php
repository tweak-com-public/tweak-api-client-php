<?php
/**
 * TemplatePermissionSet
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
 * TemplatePermissionSet Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TemplatePermissionSet implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TemplatePermissionSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'highResPdf' => 'bool',
        'proofPdf' => 'bool',
        'jpegs' => 'bool',
        'socialSharing' => 'bool',
        'canEdit' => 'bool',
        'needAdminApproval' => 'bool',
        'id' => 'string',
        'templateId' => 'string',
        'template' => '\Swagger\Client\Model\Template'
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
        'highResPdf' => 'highResPdf',
        'proofPdf' => 'proofPdf',
        'jpegs' => 'jpegs',
        'socialSharing' => 'socialSharing',
        'canEdit' => 'canEdit',
        'needAdminApproval' => 'needAdminApproval',
        'id' => 'id',
        'templateId' => 'templateId',
        'template' => 'template'
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
        'highResPdf' => 'setHighResPdf',
        'proofPdf' => 'setProofPdf',
        'jpegs' => 'setJpegs',
        'socialSharing' => 'setSocialSharing',
        'canEdit' => 'setCanEdit',
        'needAdminApproval' => 'setNeedAdminApproval',
        'id' => 'setId',
        'templateId' => 'setTemplateId',
        'template' => 'setTemplate'
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
        'highResPdf' => 'getHighResPdf',
        'proofPdf' => 'getProofPdf',
        'jpegs' => 'getJpegs',
        'socialSharing' => 'getSocialSharing',
        'canEdit' => 'getCanEdit',
        'needAdminApproval' => 'getNeedAdminApproval',
        'id' => 'getId',
        'templateId' => 'getTemplateId',
        'template' => 'getTemplate'
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
        $this->container['highResPdf'] = isset($data['highResPdf']) ? $data['highResPdf'] : false;
        $this->container['proofPdf'] = isset($data['proofPdf']) ? $data['proofPdf'] : false;
        $this->container['jpegs'] = isset($data['jpegs']) ? $data['jpegs'] : false;
        $this->container['socialSharing'] = isset($data['socialSharing']) ? $data['socialSharing'] : false;
        $this->container['canEdit'] = isset($data['canEdit']) ? $data['canEdit'] : false;
        $this->container['needAdminApproval'] = isset($data['needAdminApproval']) ? $data['needAdminApproval'] : false;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
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
     * Gets highResPdf
     * @return bool
     */
    public function getHighResPdf()
    {
        return $this->container['highResPdf'];
    }

    /**
     * Sets highResPdf
     * @param bool $highResPdf
     * @return $this
     */
    public function setHighResPdf($highResPdf)
    {
        $this->container['highResPdf'] = $highResPdf;

        return $this;
    }

    /**
     * Gets proofPdf
     * @return bool
     */
    public function getProofPdf()
    {
        return $this->container['proofPdf'];
    }

    /**
     * Sets proofPdf
     * @param bool $proofPdf
     * @return $this
     */
    public function setProofPdf($proofPdf)
    {
        $this->container['proofPdf'] = $proofPdf;

        return $this;
    }

    /**
     * Gets jpegs
     * @return bool
     */
    public function getJpegs()
    {
        return $this->container['jpegs'];
    }

    /**
     * Sets jpegs
     * @param bool $jpegs
     * @return $this
     */
    public function setJpegs($jpegs)
    {
        $this->container['jpegs'] = $jpegs;

        return $this;
    }

    /**
     * Gets socialSharing
     * @return bool
     */
    public function getSocialSharing()
    {
        return $this->container['socialSharing'];
    }

    /**
     * Sets socialSharing
     * @param bool $socialSharing
     * @return $this
     */
    public function setSocialSharing($socialSharing)
    {
        $this->container['socialSharing'] = $socialSharing;

        return $this;
    }

    /**
     * Gets canEdit
     * @return bool
     */
    public function getCanEdit()
    {
        return $this->container['canEdit'];
    }

    /**
     * Sets canEdit
     * @param bool $canEdit
     * @return $this
     */
    public function setCanEdit($canEdit)
    {
        $this->container['canEdit'] = $canEdit;

        return $this;
    }

    /**
     * Gets needAdminApproval
     * @return bool
     */
    public function getNeedAdminApproval()
    {
        return $this->container['needAdminApproval'];
    }

    /**
     * Sets needAdminApproval
     * @param bool $needAdminApproval
     * @return $this
     */
    public function setNeedAdminApproval($needAdminApproval)
    {
        $this->container['needAdminApproval'] = $needAdminApproval;

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
     * Gets templateId
     * @return string
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     * @param string $templateId
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets template
     * @return \Swagger\Client\Model\Template
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     * @param \Swagger\Client\Model\Template $template
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

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


