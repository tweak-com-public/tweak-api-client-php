<?php
/**
 * FlashVar
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
 * OpenAPI spec version: 1.0.3-alpha.2
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
 * FlashVar Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FlashVar implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FlashVar';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'apiPartnerAuthUrl' => 'string',
        'pluginProductId' => 'string',
        'savedProductId' => 'string',
        'allowAddImage' => 'bool',
        'allowAddText' => 'bool',
        'allowJPEG' => 'bool',
        'allowLowResPDF' => 'bool',
        'allowHighResPDF' => 'bool',
        'allowSaveForLater' => 'bool',
        'allowSaveAsTemplate' => 'bool',
        'allowDuplicateDesign' => 'bool',
        'blockEditing' => 'bool',
        'makeAllItemsEditable' => 'bool',
        'showConfirm' => 'bool',
        'allowApprovePluginProduct' => 'bool',
        'allowSendToApprovePluginProduct' => 'bool',
        'workflowForm' => 'string',
        'designFormData' => 'object[]',
        'showPluginImages' => 'bool',
        'pluginImageLibraries' => 'string[]',
        'isTweakTemplate' => 'bool',
        'showItemNavigator' => 'bool',
        'showItemCounts' => 'bool',
        'showEditableItemToggle' => 'bool',
        'id' => 'string',
        'teamId' => 'string',
        'team' => '\Swagger\Client\Model\Team',
        'teamMemberId' => 'string',
        'teamMember' => '\Swagger\Client\Model\TeamMember',
        'portalId' => 'string',
        'portal' => '\Swagger\Client\Model\Portal',
        'portalMemberId' => 'string',
        'portalMember' => '\Swagger\Client\Model\PortalMember',
        'designId' => 'string',
        'design' => '\Swagger\Client\Model\Design',
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
        'apiPartnerAuthUrl' => 'apiPartnerAuthUrl',
        'pluginProductId' => 'pluginProductId',
        'savedProductId' => 'savedProductId',
        'allowAddImage' => 'allowAddImage',
        'allowAddText' => 'allowAddText',
        'allowJPEG' => 'allowJPEG',
        'allowLowResPDF' => 'allowLowResPDF',
        'allowHighResPDF' => 'allowHighResPDF',
        'allowSaveForLater' => 'allowSaveForLater',
        'allowSaveAsTemplate' => 'allowSaveAsTemplate',
        'allowDuplicateDesign' => 'allowDuplicateDesign',
        'blockEditing' => 'blockEditing',
        'makeAllItemsEditable' => 'makeAllItemsEditable',
        'showConfirm' => 'showConfirm',
        'allowApprovePluginProduct' => 'allowApprovePluginProduct',
        'allowSendToApprovePluginProduct' => 'allowSendToApprovePluginProduct',
        'workflowForm' => 'workflowForm',
        'designFormData' => 'designFormData',
        'showPluginImages' => 'showPluginImages',
        'pluginImageLibraries' => 'pluginImageLibraries',
        'isTweakTemplate' => 'isTweakTemplate',
        'showItemNavigator' => 'showItemNavigator',
        'showItemCounts' => 'showItemCounts',
        'showEditableItemToggle' => 'showEditableItemToggle',
        'id' => 'id',
        'teamId' => 'teamId',
        'team' => 'team',
        'teamMemberId' => 'teamMemberId',
        'teamMember' => 'teamMember',
        'portalId' => 'portalId',
        'portal' => 'portal',
        'portalMemberId' => 'portalMemberId',
        'portalMember' => 'portalMember',
        'designId' => 'designId',
        'design' => 'design',
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
        'apiPartnerAuthUrl' => 'setApiPartnerAuthUrl',
        'pluginProductId' => 'setPluginProductId',
        'savedProductId' => 'setSavedProductId',
        'allowAddImage' => 'setAllowAddImage',
        'allowAddText' => 'setAllowAddText',
        'allowJPEG' => 'setAllowJPEG',
        'allowLowResPDF' => 'setAllowLowResPDF',
        'allowHighResPDF' => 'setAllowHighResPDF',
        'allowSaveForLater' => 'setAllowSaveForLater',
        'allowSaveAsTemplate' => 'setAllowSaveAsTemplate',
        'allowDuplicateDesign' => 'setAllowDuplicateDesign',
        'blockEditing' => 'setBlockEditing',
        'makeAllItemsEditable' => 'setMakeAllItemsEditable',
        'showConfirm' => 'setShowConfirm',
        'allowApprovePluginProduct' => 'setAllowApprovePluginProduct',
        'allowSendToApprovePluginProduct' => 'setAllowSendToApprovePluginProduct',
        'workflowForm' => 'setWorkflowForm',
        'designFormData' => 'setDesignFormData',
        'showPluginImages' => 'setShowPluginImages',
        'pluginImageLibraries' => 'setPluginImageLibraries',
        'isTweakTemplate' => 'setIsTweakTemplate',
        'showItemNavigator' => 'setShowItemNavigator',
        'showItemCounts' => 'setShowItemCounts',
        'showEditableItemToggle' => 'setShowEditableItemToggle',
        'id' => 'setId',
        'teamId' => 'setTeamId',
        'team' => 'setTeam',
        'teamMemberId' => 'setTeamMemberId',
        'teamMember' => 'setTeamMember',
        'portalId' => 'setPortalId',
        'portal' => 'setPortal',
        'portalMemberId' => 'setPortalMemberId',
        'portalMember' => 'setPortalMember',
        'designId' => 'setDesignId',
        'design' => 'setDesign',
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
        'apiPartnerAuthUrl' => 'getApiPartnerAuthUrl',
        'pluginProductId' => 'getPluginProductId',
        'savedProductId' => 'getSavedProductId',
        'allowAddImage' => 'getAllowAddImage',
        'allowAddText' => 'getAllowAddText',
        'allowJPEG' => 'getAllowJPEG',
        'allowLowResPDF' => 'getAllowLowResPDF',
        'allowHighResPDF' => 'getAllowHighResPDF',
        'allowSaveForLater' => 'getAllowSaveForLater',
        'allowSaveAsTemplate' => 'getAllowSaveAsTemplate',
        'allowDuplicateDesign' => 'getAllowDuplicateDesign',
        'blockEditing' => 'getBlockEditing',
        'makeAllItemsEditable' => 'getMakeAllItemsEditable',
        'showConfirm' => 'getShowConfirm',
        'allowApprovePluginProduct' => 'getAllowApprovePluginProduct',
        'allowSendToApprovePluginProduct' => 'getAllowSendToApprovePluginProduct',
        'workflowForm' => 'getWorkflowForm',
        'designFormData' => 'getDesignFormData',
        'showPluginImages' => 'getShowPluginImages',
        'pluginImageLibraries' => 'getPluginImageLibraries',
        'isTweakTemplate' => 'getIsTweakTemplate',
        'showItemNavigator' => 'getShowItemNavigator',
        'showItemCounts' => 'getShowItemCounts',
        'showEditableItemToggle' => 'getShowEditableItemToggle',
        'id' => 'getId',
        'teamId' => 'getTeamId',
        'team' => 'getTeam',
        'teamMemberId' => 'getTeamMemberId',
        'teamMember' => 'getTeamMember',
        'portalId' => 'getPortalId',
        'portal' => 'getPortal',
        'portalMemberId' => 'getPortalMemberId',
        'portalMember' => 'getPortalMember',
        'designId' => 'getDesignId',
        'design' => 'getDesign',
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
        $this->container['apiPartnerAuthUrl'] = isset($data['apiPartnerAuthUrl']) ? $data['apiPartnerAuthUrl'] : '';
        $this->container['pluginProductId'] = isset($data['pluginProductId']) ? $data['pluginProductId'] : null;
        $this->container['savedProductId'] = isset($data['savedProductId']) ? $data['savedProductId'] : null;
        $this->container['allowAddImage'] = isset($data['allowAddImage']) ? $data['allowAddImage'] : false;
        $this->container['allowAddText'] = isset($data['allowAddText']) ? $data['allowAddText'] : false;
        $this->container['allowJPEG'] = isset($data['allowJPEG']) ? $data['allowJPEG'] : false;
        $this->container['allowLowResPDF'] = isset($data['allowLowResPDF']) ? $data['allowLowResPDF'] : false;
        $this->container['allowHighResPDF'] = isset($data['allowHighResPDF']) ? $data['allowHighResPDF'] : false;
        $this->container['allowSaveForLater'] = isset($data['allowSaveForLater']) ? $data['allowSaveForLater'] : false;
        $this->container['allowSaveAsTemplate'] = isset($data['allowSaveAsTemplate']) ? $data['allowSaveAsTemplate'] : false;
        $this->container['allowDuplicateDesign'] = isset($data['allowDuplicateDesign']) ? $data['allowDuplicateDesign'] : false;
        $this->container['blockEditing'] = isset($data['blockEditing']) ? $data['blockEditing'] : false;
        $this->container['makeAllItemsEditable'] = isset($data['makeAllItemsEditable']) ? $data['makeAllItemsEditable'] : false;
        $this->container['showConfirm'] = isset($data['showConfirm']) ? $data['showConfirm'] : false;
        $this->container['allowApprovePluginProduct'] = isset($data['allowApprovePluginProduct']) ? $data['allowApprovePluginProduct'] : false;
        $this->container['allowSendToApprovePluginProduct'] = isset($data['allowSendToApprovePluginProduct']) ? $data['allowSendToApprovePluginProduct'] : false;
        $this->container['workflowForm'] = isset($data['workflowForm']) ? $data['workflowForm'] : null;
        $this->container['designFormData'] = isset($data['designFormData']) ? $data['designFormData'] : null;
        $this->container['showPluginImages'] = isset($data['showPluginImages']) ? $data['showPluginImages'] : false;
        $this->container['pluginImageLibraries'] = isset($data['pluginImageLibraries']) ? $data['pluginImageLibraries'] : null;
        $this->container['isTweakTemplate'] = isset($data['isTweakTemplate']) ? $data['isTweakTemplate'] : false;
        $this->container['showItemNavigator'] = isset($data['showItemNavigator']) ? $data['showItemNavigator'] : false;
        $this->container['showItemCounts'] = isset($data['showItemCounts']) ? $data['showItemCounts'] : false;
        $this->container['showEditableItemToggle'] = isset($data['showEditableItemToggle']) ? $data['showEditableItemToggle'] : false;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['teamMemberId'] = isset($data['teamMemberId']) ? $data['teamMemberId'] : null;
        $this->container['teamMember'] = isset($data['teamMember']) ? $data['teamMember'] : null;
        $this->container['portalId'] = isset($data['portalId']) ? $data['portalId'] : null;
        $this->container['portal'] = isset($data['portal']) ? $data['portal'] : null;
        $this->container['portalMemberId'] = isset($data['portalMemberId']) ? $data['portalMemberId'] : null;
        $this->container['portalMember'] = isset($data['portalMember']) ? $data['portalMember'] : null;
        $this->container['designId'] = isset($data['designId']) ? $data['designId'] : null;
        $this->container['design'] = isset($data['design']) ? $data['design'] : null;
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
     * Gets apiPartnerAuthUrl
     * @return string
     */
    public function getApiPartnerAuthUrl()
    {
        return $this->container['apiPartnerAuthUrl'];
    }

    /**
     * Sets apiPartnerAuthUrl
     * @param string $apiPartnerAuthUrl
     * @return $this
     */
    public function setApiPartnerAuthUrl($apiPartnerAuthUrl)
    {
        $this->container['apiPartnerAuthUrl'] = $apiPartnerAuthUrl;

        return $this;
    }

    /**
     * Gets pluginProductId
     * @return string
     */
    public function getPluginProductId()
    {
        return $this->container['pluginProductId'];
    }

    /**
     * Sets pluginProductId
     * @param string $pluginProductId
     * @return $this
     */
    public function setPluginProductId($pluginProductId)
    {
        $this->container['pluginProductId'] = $pluginProductId;

        return $this;
    }

    /**
     * Gets savedProductId
     * @return string
     */
    public function getSavedProductId()
    {
        return $this->container['savedProductId'];
    }

    /**
     * Sets savedProductId
     * @param string $savedProductId
     * @return $this
     */
    public function setSavedProductId($savedProductId)
    {
        $this->container['savedProductId'] = $savedProductId;

        return $this;
    }

    /**
     * Gets allowAddImage
     * @return bool
     */
    public function getAllowAddImage()
    {
        return $this->container['allowAddImage'];
    }

    /**
     * Sets allowAddImage
     * @param bool $allowAddImage
     * @return $this
     */
    public function setAllowAddImage($allowAddImage)
    {
        $this->container['allowAddImage'] = $allowAddImage;

        return $this;
    }

    /**
     * Gets allowAddText
     * @return bool
     */
    public function getAllowAddText()
    {
        return $this->container['allowAddText'];
    }

    /**
     * Sets allowAddText
     * @param bool $allowAddText
     * @return $this
     */
    public function setAllowAddText($allowAddText)
    {
        $this->container['allowAddText'] = $allowAddText;

        return $this;
    }

    /**
     * Gets allowJPEG
     * @return bool
     */
    public function getAllowJPEG()
    {
        return $this->container['allowJPEG'];
    }

    /**
     * Sets allowJPEG
     * @param bool $allowJPEG
     * @return $this
     */
    public function setAllowJPEG($allowJPEG)
    {
        $this->container['allowJPEG'] = $allowJPEG;

        return $this;
    }

    /**
     * Gets allowLowResPDF
     * @return bool
     */
    public function getAllowLowResPDF()
    {
        return $this->container['allowLowResPDF'];
    }

    /**
     * Sets allowLowResPDF
     * @param bool $allowLowResPDF
     * @return $this
     */
    public function setAllowLowResPDF($allowLowResPDF)
    {
        $this->container['allowLowResPDF'] = $allowLowResPDF;

        return $this;
    }

    /**
     * Gets allowHighResPDF
     * @return bool
     */
    public function getAllowHighResPDF()
    {
        return $this->container['allowHighResPDF'];
    }

    /**
     * Sets allowHighResPDF
     * @param bool $allowHighResPDF
     * @return $this
     */
    public function setAllowHighResPDF($allowHighResPDF)
    {
        $this->container['allowHighResPDF'] = $allowHighResPDF;

        return $this;
    }

    /**
     * Gets allowSaveForLater
     * @return bool
     */
    public function getAllowSaveForLater()
    {
        return $this->container['allowSaveForLater'];
    }

    /**
     * Sets allowSaveForLater
     * @param bool $allowSaveForLater
     * @return $this
     */
    public function setAllowSaveForLater($allowSaveForLater)
    {
        $this->container['allowSaveForLater'] = $allowSaveForLater;

        return $this;
    }

    /**
     * Gets allowSaveAsTemplate
     * @return bool
     */
    public function getAllowSaveAsTemplate()
    {
        return $this->container['allowSaveAsTemplate'];
    }

    /**
     * Sets allowSaveAsTemplate
     * @param bool $allowSaveAsTemplate
     * @return $this
     */
    public function setAllowSaveAsTemplate($allowSaveAsTemplate)
    {
        $this->container['allowSaveAsTemplate'] = $allowSaveAsTemplate;

        return $this;
    }

    /**
     * Gets allowDuplicateDesign
     * @return bool
     */
    public function getAllowDuplicateDesign()
    {
        return $this->container['allowDuplicateDesign'];
    }

    /**
     * Sets allowDuplicateDesign
     * @param bool $allowDuplicateDesign
     * @return $this
     */
    public function setAllowDuplicateDesign($allowDuplicateDesign)
    {
        $this->container['allowDuplicateDesign'] = $allowDuplicateDesign;

        return $this;
    }

    /**
     * Gets blockEditing
     * @return bool
     */
    public function getBlockEditing()
    {
        return $this->container['blockEditing'];
    }

    /**
     * Sets blockEditing
     * @param bool $blockEditing
     * @return $this
     */
    public function setBlockEditing($blockEditing)
    {
        $this->container['blockEditing'] = $blockEditing;

        return $this;
    }

    /**
     * Gets makeAllItemsEditable
     * @return bool
     */
    public function getMakeAllItemsEditable()
    {
        return $this->container['makeAllItemsEditable'];
    }

    /**
     * Sets makeAllItemsEditable
     * @param bool $makeAllItemsEditable
     * @return $this
     */
    public function setMakeAllItemsEditable($makeAllItemsEditable)
    {
        $this->container['makeAllItemsEditable'] = $makeAllItemsEditable;

        return $this;
    }

    /**
     * Gets showConfirm
     * @return bool
     */
    public function getShowConfirm()
    {
        return $this->container['showConfirm'];
    }

    /**
     * Sets showConfirm
     * @param bool $showConfirm
     * @return $this
     */
    public function setShowConfirm($showConfirm)
    {
        $this->container['showConfirm'] = $showConfirm;

        return $this;
    }

    /**
     * Gets allowApprovePluginProduct
     * @return bool
     */
    public function getAllowApprovePluginProduct()
    {
        return $this->container['allowApprovePluginProduct'];
    }

    /**
     * Sets allowApprovePluginProduct
     * @param bool $allowApprovePluginProduct
     * @return $this
     */
    public function setAllowApprovePluginProduct($allowApprovePluginProduct)
    {
        $this->container['allowApprovePluginProduct'] = $allowApprovePluginProduct;

        return $this;
    }

    /**
     * Gets allowSendToApprovePluginProduct
     * @return bool
     */
    public function getAllowSendToApprovePluginProduct()
    {
        return $this->container['allowSendToApprovePluginProduct'];
    }

    /**
     * Sets allowSendToApprovePluginProduct
     * @param bool $allowSendToApprovePluginProduct
     * @return $this
     */
    public function setAllowSendToApprovePluginProduct($allowSendToApprovePluginProduct)
    {
        $this->container['allowSendToApprovePluginProduct'] = $allowSendToApprovePluginProduct;

        return $this;
    }

    /**
     * Gets workflowForm
     * @return string
     */
    public function getWorkflowForm()
    {
        return $this->container['workflowForm'];
    }

    /**
     * Sets workflowForm
     * @param string $workflowForm
     * @return $this
     */
    public function setWorkflowForm($workflowForm)
    {
        $this->container['workflowForm'] = $workflowForm;

        return $this;
    }

    /**
     * Gets designFormData
     * @return object[]
     */
    public function getDesignFormData()
    {
        return $this->container['designFormData'];
    }

    /**
     * Sets designFormData
     * @param object[] $designFormData
     * @return $this
     */
    public function setDesignFormData($designFormData)
    {
        $this->container['designFormData'] = $designFormData;

        return $this;
    }

    /**
     * Gets showPluginImages
     * @return bool
     */
    public function getShowPluginImages()
    {
        return $this->container['showPluginImages'];
    }

    /**
     * Sets showPluginImages
     * @param bool $showPluginImages
     * @return $this
     */
    public function setShowPluginImages($showPluginImages)
    {
        $this->container['showPluginImages'] = $showPluginImages;

        return $this;
    }

    /**
     * Gets pluginImageLibraries
     * @return string[]
     */
    public function getPluginImageLibraries()
    {
        return $this->container['pluginImageLibraries'];
    }

    /**
     * Sets pluginImageLibraries
     * @param string[] $pluginImageLibraries
     * @return $this
     */
    public function setPluginImageLibraries($pluginImageLibraries)
    {
        $this->container['pluginImageLibraries'] = $pluginImageLibraries;

        return $this;
    }

    /**
     * Gets isTweakTemplate
     * @return bool
     */
    public function getIsTweakTemplate()
    {
        return $this->container['isTweakTemplate'];
    }

    /**
     * Sets isTweakTemplate
     * @param bool $isTweakTemplate
     * @return $this
     */
    public function setIsTweakTemplate($isTweakTemplate)
    {
        $this->container['isTweakTemplate'] = $isTweakTemplate;

        return $this;
    }

    /**
     * Gets showItemNavigator
     * @return bool
     */
    public function getShowItemNavigator()
    {
        return $this->container['showItemNavigator'];
    }

    /**
     * Sets showItemNavigator
     * @param bool $showItemNavigator
     * @return $this
     */
    public function setShowItemNavigator($showItemNavigator)
    {
        $this->container['showItemNavigator'] = $showItemNavigator;

        return $this;
    }

    /**
     * Gets showItemCounts
     * @return bool
     */
    public function getShowItemCounts()
    {
        return $this->container['showItemCounts'];
    }

    /**
     * Sets showItemCounts
     * @param bool $showItemCounts
     * @return $this
     */
    public function setShowItemCounts($showItemCounts)
    {
        $this->container['showItemCounts'] = $showItemCounts;

        return $this;
    }

    /**
     * Gets showEditableItemToggle
     * @return bool
     */
    public function getShowEditableItemToggle()
    {
        return $this->container['showEditableItemToggle'];
    }

    /**
     * Sets showEditableItemToggle
     * @param bool $showEditableItemToggle
     * @return $this
     */
    public function setShowEditableItemToggle($showEditableItemToggle)
    {
        $this->container['showEditableItemToggle'] = $showEditableItemToggle;

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
     * Gets teamMemberId
     * @return string
     */
    public function getTeamMemberId()
    {
        return $this->container['teamMemberId'];
    }

    /**
     * Sets teamMemberId
     * @param string $teamMemberId
     * @return $this
     */
    public function setTeamMemberId($teamMemberId)
    {
        $this->container['teamMemberId'] = $teamMemberId;

        return $this;
    }

    /**
     * Gets teamMember
     * @return \Swagger\Client\Model\TeamMember
     */
    public function getTeamMember()
    {
        return $this->container['teamMember'];
    }

    /**
     * Sets teamMember
     * @param \Swagger\Client\Model\TeamMember $teamMember
     * @return $this
     */
    public function setTeamMember($teamMember)
    {
        $this->container['teamMember'] = $teamMember;

        return $this;
    }

    /**
     * Gets portalId
     * @return string
     */
    public function getPortalId()
    {
        return $this->container['portalId'];
    }

    /**
     * Sets portalId
     * @param string $portalId
     * @return $this
     */
    public function setPortalId($portalId)
    {
        $this->container['portalId'] = $portalId;

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
     * Gets portalMemberId
     * @return string
     */
    public function getPortalMemberId()
    {
        return $this->container['portalMemberId'];
    }

    /**
     * Sets portalMemberId
     * @param string $portalMemberId
     * @return $this
     */
    public function setPortalMemberId($portalMemberId)
    {
        $this->container['portalMemberId'] = $portalMemberId;

        return $this;
    }

    /**
     * Gets portalMember
     * @return \Swagger\Client\Model\PortalMember
     */
    public function getPortalMember()
    {
        return $this->container['portalMember'];
    }

    /**
     * Sets portalMember
     * @param \Swagger\Client\Model\PortalMember $portalMember
     * @return $this
     */
    public function setPortalMember($portalMember)
    {
        $this->container['portalMember'] = $portalMember;

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


