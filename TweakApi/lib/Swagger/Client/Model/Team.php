<?php
/**
 * Team
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
 * OpenAPI spec version: 1.0.4-alpha.9
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
 * Team Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Team implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Team';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'logo' => '\Swagger\Client\Model\CloudinaryImage',
        'subdomain' => 'string',
        'country' => 'string',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'icon' => 'string',
        'clientKey' => 'string',
        'javaScriptKey' => 'string',
        'restApiKey' => 'string',
        'windowsKey' => 'string',
        'masterKey' => 'string',
        'status' => 'string',
        'teamDataId' => 'string',
        'members' => '\Swagger\Client\Model\Customer[]',
        'builderConfigs' => '\Swagger\Client\Model\TeamBuilderConfig[]',
        'dataSources' => '\Swagger\Client\Model\DataSource[]',
        'dynamicDatas' => '\Swagger\Client\Model\DynamicData[]',
        'teamMembers' => '\Swagger\Client\Model\TeamMember[]',
        'portals' => '\Swagger\Client\Model\Portal[]',
        'templates' => '\Swagger\Client\Model\Template[]',
        'brand' => '\Swagger\Client\Model\TeamBrand',
        'templateFolders' => '\Swagger\Client\Model\TeamTemplateFolder[]',
        'workflows' => '\Swagger\Client\Model\Workflow[]',
        'images' => '\Swagger\Client\Model\Image[]',
        'imageFolders' => '\Swagger\Client\Model\ImageFolder[]',
        'billing' => '\Swagger\Client\Model\Billing',
        'permission' => '\Swagger\Client\Model\TeamPermissionSet',
        'productMaterials' => '\Swagger\Client\Model\ProductMaterial[]',
        'productSizeMaterials' => '\Swagger\Client\Model\ProductSizeMaterial[]',
        'productPdfColorProfiles' => '\Swagger\Client\Model\ProductPdfColorProfile[]',
        'teamData' => '\Swagger\Client\Model\DynamicData'
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
        'logo' => 'logo',
        'subdomain' => 'subdomain',
        'country' => 'country',
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'icon' => 'icon',
        'clientKey' => 'clientKey',
        'javaScriptKey' => 'javaScriptKey',
        'restApiKey' => 'restApiKey',
        'windowsKey' => 'windowsKey',
        'masterKey' => 'masterKey',
        'status' => 'status',
        'teamDataId' => 'teamDataId',
        'members' => 'members',
        'builderConfigs' => 'builderConfigs',
        'dataSources' => 'dataSources',
        'dynamicDatas' => 'dynamicDatas',
        'teamMembers' => 'teamMembers',
        'portals' => 'portals',
        'templates' => 'templates',
        'brand' => 'brand',
        'templateFolders' => 'templateFolders',
        'workflows' => 'workflows',
        'images' => 'images',
        'imageFolders' => 'imageFolders',
        'billing' => 'billing',
        'permission' => 'permission',
        'productMaterials' => 'productMaterials',
        'productSizeMaterials' => 'productSizeMaterials',
        'productPdfColorProfiles' => 'productPdfColorProfiles',
        'teamData' => 'teamData'
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
        'logo' => 'setLogo',
        'subdomain' => 'setSubdomain',
        'country' => 'setCountry',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'icon' => 'setIcon',
        'clientKey' => 'setClientKey',
        'javaScriptKey' => 'setJavaScriptKey',
        'restApiKey' => 'setRestApiKey',
        'windowsKey' => 'setWindowsKey',
        'masterKey' => 'setMasterKey',
        'status' => 'setStatus',
        'teamDataId' => 'setTeamDataId',
        'members' => 'setMembers',
        'builderConfigs' => 'setBuilderConfigs',
        'dataSources' => 'setDataSources',
        'dynamicDatas' => 'setDynamicDatas',
        'teamMembers' => 'setTeamMembers',
        'portals' => 'setPortals',
        'templates' => 'setTemplates',
        'brand' => 'setBrand',
        'templateFolders' => 'setTemplateFolders',
        'workflows' => 'setWorkflows',
        'images' => 'setImages',
        'imageFolders' => 'setImageFolders',
        'billing' => 'setBilling',
        'permission' => 'setPermission',
        'productMaterials' => 'setProductMaterials',
        'productSizeMaterials' => 'setProductSizeMaterials',
        'productPdfColorProfiles' => 'setProductPdfColorProfiles',
        'teamData' => 'setTeamData'
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
        'logo' => 'getLogo',
        'subdomain' => 'getSubdomain',
        'country' => 'getCountry',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'icon' => 'getIcon',
        'clientKey' => 'getClientKey',
        'javaScriptKey' => 'getJavaScriptKey',
        'restApiKey' => 'getRestApiKey',
        'windowsKey' => 'getWindowsKey',
        'masterKey' => 'getMasterKey',
        'status' => 'getStatus',
        'teamDataId' => 'getTeamDataId',
        'members' => 'getMembers',
        'builderConfigs' => 'getBuilderConfigs',
        'dataSources' => 'getDataSources',
        'dynamicDatas' => 'getDynamicDatas',
        'teamMembers' => 'getTeamMembers',
        'portals' => 'getPortals',
        'templates' => 'getTemplates',
        'brand' => 'getBrand',
        'templateFolders' => 'getTemplateFolders',
        'workflows' => 'getWorkflows',
        'images' => 'getImages',
        'imageFolders' => 'getImageFolders',
        'billing' => 'getBilling',
        'permission' => 'getPermission',
        'productMaterials' => 'getProductMaterials',
        'productSizeMaterials' => 'getProductSizeMaterials',
        'productPdfColorProfiles' => 'getProductPdfColorProfiles',
        'teamData' => 'getTeamData'
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
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['subdomain'] = isset($data['subdomain']) ? $data['subdomain'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : 'Ireland';
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['clientKey'] = isset($data['clientKey']) ? $data['clientKey'] : null;
        $this->container['javaScriptKey'] = isset($data['javaScriptKey']) ? $data['javaScriptKey'] : null;
        $this->container['restApiKey'] = isset($data['restApiKey']) ? $data['restApiKey'] : null;
        $this->container['windowsKey'] = isset($data['windowsKey']) ? $data['windowsKey'] : null;
        $this->container['masterKey'] = isset($data['masterKey']) ? $data['masterKey'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'sandbox';
        $this->container['teamDataId'] = isset($data['teamDataId']) ? $data['teamDataId'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['builderConfigs'] = isset($data['builderConfigs']) ? $data['builderConfigs'] : null;
        $this->container['dataSources'] = isset($data['dataSources']) ? $data['dataSources'] : null;
        $this->container['dynamicDatas'] = isset($data['dynamicDatas']) ? $data['dynamicDatas'] : null;
        $this->container['teamMembers'] = isset($data['teamMembers']) ? $data['teamMembers'] : null;
        $this->container['portals'] = isset($data['portals']) ? $data['portals'] : null;
        $this->container['templates'] = isset($data['templates']) ? $data['templates'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['templateFolders'] = isset($data['templateFolders']) ? $data['templateFolders'] : null;
        $this->container['workflows'] = isset($data['workflows']) ? $data['workflows'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['imageFolders'] = isset($data['imageFolders']) ? $data['imageFolders'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['productMaterials'] = isset($data['productMaterials']) ? $data['productMaterials'] : null;
        $this->container['productSizeMaterials'] = isset($data['productSizeMaterials']) ? $data['productSizeMaterials'] : null;
        $this->container['productPdfColorProfiles'] = isset($data['productPdfColorProfiles']) ? $data['productPdfColorProfiles'] : null;
        $this->container['teamData'] = isset($data['teamData']) ? $data['teamData'] : null;
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
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
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
        if ($this->container['id'] === null) {
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
     * Gets logo
     * @return \Swagger\Client\Model\CloudinaryImage
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     * @param \Swagger\Client\Model\CloudinaryImage $logo
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets subdomain
     * @return string
     */
    public function getSubdomain()
    {
        return $this->container['subdomain'];
    }

    /**
     * Sets subdomain
     * @param string $subdomain
     * @return $this
     */
    public function setSubdomain($subdomain)
    {
        $this->container['subdomain'] = $subdomain;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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
     * Gets icon
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     * @param string $icon The icon image url
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets clientKey
     * @return string
     */
    public function getClientKey()
    {
        return $this->container['clientKey'];
    }

    /**
     * Sets clientKey
     * @param string $clientKey
     * @return $this
     */
    public function setClientKey($clientKey)
    {
        $this->container['clientKey'] = $clientKey;

        return $this;
    }

    /**
     * Gets javaScriptKey
     * @return string
     */
    public function getJavaScriptKey()
    {
        return $this->container['javaScriptKey'];
    }

    /**
     * Sets javaScriptKey
     * @param string $javaScriptKey
     * @return $this
     */
    public function setJavaScriptKey($javaScriptKey)
    {
        $this->container['javaScriptKey'] = $javaScriptKey;

        return $this;
    }

    /**
     * Gets restApiKey
     * @return string
     */
    public function getRestApiKey()
    {
        return $this->container['restApiKey'];
    }

    /**
     * Sets restApiKey
     * @param string $restApiKey
     * @return $this
     */
    public function setRestApiKey($restApiKey)
    {
        $this->container['restApiKey'] = $restApiKey;

        return $this;
    }

    /**
     * Gets windowsKey
     * @return string
     */
    public function getWindowsKey()
    {
        return $this->container['windowsKey'];
    }

    /**
     * Sets windowsKey
     * @param string $windowsKey
     * @return $this
     */
    public function setWindowsKey($windowsKey)
    {
        $this->container['windowsKey'] = $windowsKey;

        return $this;
    }

    /**
     * Gets masterKey
     * @return string
     */
    public function getMasterKey()
    {
        return $this->container['masterKey'];
    }

    /**
     * Sets masterKey
     * @param string $masterKey
     * @return $this
     */
    public function setMasterKey($masterKey)
    {
        $this->container['masterKey'] = $masterKey;

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
     * @param string $status Status of the application, production/sandbox/disabled
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets teamDataId
     * @return string
     */
    public function getTeamDataId()
    {
        return $this->container['teamDataId'];
    }

    /**
     * Sets teamDataId
     * @param string $teamDataId
     * @return $this
     */
    public function setTeamDataId($teamDataId)
    {
        $this->container['teamDataId'] = $teamDataId;

        return $this;
    }

    /**
     * Gets members
     * @return \Swagger\Client\Model\Customer[]
     */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
     * Sets members
     * @param \Swagger\Client\Model\Customer[] $members
     * @return $this
     */
    public function setMembers($members)
    {
        $this->container['members'] = $members;

        return $this;
    }

    /**
     * Gets builderConfigs
     * @return \Swagger\Client\Model\TeamBuilderConfig[]
     */
    public function getBuilderConfigs()
    {
        return $this->container['builderConfigs'];
    }

    /**
     * Sets builderConfigs
     * @param \Swagger\Client\Model\TeamBuilderConfig[] $builderConfigs
     * @return $this
     */
    public function setBuilderConfigs($builderConfigs)
    {
        $this->container['builderConfigs'] = $builderConfigs;

        return $this;
    }

    /**
     * Gets dataSources
     * @return \Swagger\Client\Model\DataSource[]
     */
    public function getDataSources()
    {
        return $this->container['dataSources'];
    }

    /**
     * Sets dataSources
     * @param \Swagger\Client\Model\DataSource[] $dataSources
     * @return $this
     */
    public function setDataSources($dataSources)
    {
        $this->container['dataSources'] = $dataSources;

        return $this;
    }

    /**
     * Gets dynamicDatas
     * @return \Swagger\Client\Model\DynamicData[]
     */
    public function getDynamicDatas()
    {
        return $this->container['dynamicDatas'];
    }

    /**
     * Sets dynamicDatas
     * @param \Swagger\Client\Model\DynamicData[] $dynamicDatas
     * @return $this
     */
    public function setDynamicDatas($dynamicDatas)
    {
        $this->container['dynamicDatas'] = $dynamicDatas;

        return $this;
    }

    /**
     * Gets teamMembers
     * @return \Swagger\Client\Model\TeamMember[]
     */
    public function getTeamMembers()
    {
        return $this->container['teamMembers'];
    }

    /**
     * Sets teamMembers
     * @param \Swagger\Client\Model\TeamMember[] $teamMembers
     * @return $this
     */
    public function setTeamMembers($teamMembers)
    {
        $this->container['teamMembers'] = $teamMembers;

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
     * Gets templates
     * @return \Swagger\Client\Model\Template[]
     */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
     * Sets templates
     * @param \Swagger\Client\Model\Template[] $templates
     * @return $this
     */
    public function setTemplates($templates)
    {
        $this->container['templates'] = $templates;

        return $this;
    }

    /**
     * Gets brand
     * @return \Swagger\Client\Model\TeamBrand
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     * @param \Swagger\Client\Model\TeamBrand $brand
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets templateFolders
     * @return \Swagger\Client\Model\TeamTemplateFolder[]
     */
    public function getTemplateFolders()
    {
        return $this->container['templateFolders'];
    }

    /**
     * Sets templateFolders
     * @param \Swagger\Client\Model\TeamTemplateFolder[] $templateFolders
     * @return $this
     */
    public function setTemplateFolders($templateFolders)
    {
        $this->container['templateFolders'] = $templateFolders;

        return $this;
    }

    /**
     * Gets workflows
     * @return \Swagger\Client\Model\Workflow[]
     */
    public function getWorkflows()
    {
        return $this->container['workflows'];
    }

    /**
     * Sets workflows
     * @param \Swagger\Client\Model\Workflow[] $workflows
     * @return $this
     */
    public function setWorkflows($workflows)
    {
        $this->container['workflows'] = $workflows;

        return $this;
    }

    /**
     * Gets images
     * @return \Swagger\Client\Model\Image[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     * @param \Swagger\Client\Model\Image[] $images
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets imageFolders
     * @return \Swagger\Client\Model\ImageFolder[]
     */
    public function getImageFolders()
    {
        return $this->container['imageFolders'];
    }

    /**
     * Sets imageFolders
     * @param \Swagger\Client\Model\ImageFolder[] $imageFolders
     * @return $this
     */
    public function setImageFolders($imageFolders)
    {
        $this->container['imageFolders'] = $imageFolders;

        return $this;
    }

    /**
     * Gets billing
     * @return \Swagger\Client\Model\Billing
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     * @param \Swagger\Client\Model\Billing $billing
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets permission
     * @return \Swagger\Client\Model\TeamPermissionSet
     */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
     * Sets permission
     * @param \Swagger\Client\Model\TeamPermissionSet $permission
     * @return $this
     */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;

        return $this;
    }

    /**
     * Gets productMaterials
     * @return \Swagger\Client\Model\ProductMaterial[]
     */
    public function getProductMaterials()
    {
        return $this->container['productMaterials'];
    }

    /**
     * Sets productMaterials
     * @param \Swagger\Client\Model\ProductMaterial[] $productMaterials
     * @return $this
     */
    public function setProductMaterials($productMaterials)
    {
        $this->container['productMaterials'] = $productMaterials;

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
     * Gets productPdfColorProfiles
     * @return \Swagger\Client\Model\ProductPdfColorProfile[]
     */
    public function getProductPdfColorProfiles()
    {
        return $this->container['productPdfColorProfiles'];
    }

    /**
     * Sets productPdfColorProfiles
     * @param \Swagger\Client\Model\ProductPdfColorProfile[] $productPdfColorProfiles
     * @return $this
     */
    public function setProductPdfColorProfiles($productPdfColorProfiles)
    {
        $this->container['productPdfColorProfiles'] = $productPdfColorProfiles;

        return $this;
    }

    /**
     * Gets teamData
     * @return \Swagger\Client\Model\DynamicData
     */
    public function getTeamData()
    {
        return $this->container['teamData'];
    }

    /**
     * Sets teamData
     * @param \Swagger\Client\Model\DynamicData $teamData
     * @return $this
     */
    public function setTeamData($teamData)
    {
        $this->container['teamData'] = $teamData;

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


