<?php
/**
 * Portal
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
 * OpenAPI spec version: 1.0.3-beta.5
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
 * Portal Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Portal implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Portal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'logo' => '\Swagger\Client\Model\CloudinaryImage',
        'status' => 'string',
        'language' => 'string',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'teamId' => 'string',
        'templates' => '\Swagger\Client\Model\Template[]',
        'templateRels' => '\Swagger\Client\Model\PortalTemplate[]',
        'members' => '\Swagger\Client\Model\TeamMember[]',
        'portalMembers' => '\Swagger\Client\Model\PortalMember[]',
        'team' => '\Swagger\Client\Model\Team',
        'designs' => '\Swagger\Client\Model\Design[]',
        'templateFolders' => '\Swagger\Client\Model\PortalTemplateFolder[]',
        'designFolders' => '\Swagger\Client\Model\DesignFolder[]',
        'imageFolders' => '\Swagger\Client\Model\ImageFolder[]',
        'permission' => '\Swagger\Client\Model\PortalPermissionSet'
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
        'status' => 'status',
        'language' => 'language',
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'teamId' => 'teamId',
        'templates' => 'templates',
        'templateRels' => 'templateRels',
        'members' => 'members',
        'portalMembers' => 'portalMembers',
        'team' => 'team',
        'designs' => 'designs',
        'templateFolders' => 'templateFolders',
        'designFolders' => 'designFolders',
        'imageFolders' => 'imageFolders',
        'permission' => 'permission'
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
        'status' => 'setStatus',
        'language' => 'setLanguage',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'teamId' => 'setTeamId',
        'templates' => 'setTemplates',
        'templateRels' => 'setTemplateRels',
        'members' => 'setMembers',
        'portalMembers' => 'setPortalMembers',
        'team' => 'setTeam',
        'designs' => 'setDesigns',
        'templateFolders' => 'setTemplateFolders',
        'designFolders' => 'setDesignFolders',
        'imageFolders' => 'setImageFolders',
        'permission' => 'setPermission'
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
        'status' => 'getStatus',
        'language' => 'getLanguage',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'teamId' => 'getTeamId',
        'templates' => 'getTemplates',
        'templateRels' => 'getTemplateRels',
        'members' => 'getMembers',
        'portalMembers' => 'getPortalMembers',
        'team' => 'getTeam',
        'designs' => 'getDesigns',
        'templateFolders' => 'getTemplateFolders',
        'designFolders' => 'getDesignFolders',
        'imageFolders' => 'getImageFolders',
        'permission' => 'getPermission'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_PRIVATE = 'private';
    const STATUS_PUBLIC = 'public';
    const LANGUAGE_SQ_AL = 'sq_AL';
    const LANGUAGE_SQ = 'sq';
    const LANGUAGE_AR_DZ = 'ar_DZ';
    const LANGUAGE_AR_BH = 'ar_BH';
    const LANGUAGE_AR_EG = 'ar_EG';
    const LANGUAGE_AR_IQ = 'ar_IQ';
    const LANGUAGE_AR_JO = 'ar_JO';
    const LANGUAGE_AR_KW = 'ar_KW';
    const LANGUAGE_AR_LB = 'ar_LB';
    const LANGUAGE_AR_LY = 'ar_LY';
    const LANGUAGE_AR_MA = 'ar_MA';
    const LANGUAGE_AR_OM = 'ar_OM';
    const LANGUAGE_AR_QA = 'ar_QA';
    const LANGUAGE_AR_SA = 'ar_SA';
    const LANGUAGE_AR_SD = 'ar_SD';
    const LANGUAGE_AR_SY = 'ar_SY';
    const LANGUAGE_AR_TN = 'ar_TN';
    const LANGUAGE_AR_AE = 'ar_AE';
    const LANGUAGE_AR_YE = 'ar_YE';
    const LANGUAGE_AR = 'ar';
    const LANGUAGE_BE_BY = 'be_BY';
    const LANGUAGE_BE = 'be';
    const LANGUAGE_BG_BG = 'bg_BG';
    const LANGUAGE_BG = 'bg';
    const LANGUAGE_CA_ES = 'ca_ES';
    const LANGUAGE_CA = 'ca';
    const LANGUAGE_ZH_CN = 'zh_CN';
    const LANGUAGE_ZH_HK = 'zh_HK';
    const LANGUAGE_ZH_SG = 'zh_SG';
    const LANGUAGE_ZH_TW = 'zh_TW';
    const LANGUAGE_ZH = 'zh';
    const LANGUAGE_HR_HR = 'hr_HR';
    const LANGUAGE_HR = 'hr';
    const LANGUAGE_CS_CZ = 'cs_CZ';
    const LANGUAGE_CS = 'cs';
    const LANGUAGE_DA_DK = 'da_DK';
    const LANGUAGE_DA = 'da';
    const LANGUAGE_NL_BE = 'nl_BE';
    const LANGUAGE_NL_NL = 'nl_NL';
    const LANGUAGE_NL = 'nl';
    const LANGUAGE_EN_AU = 'en_AU';
    const LANGUAGE_EN_CA = 'en_CA';
    const LANGUAGE_EN_IN = 'en_IN';
    const LANGUAGE_EN_IE = 'en_IE';
    const LANGUAGE_EN_MT = 'en_MT';
    const LANGUAGE_EN_NZ = 'en_NZ';
    const LANGUAGE_EN_PH = 'en_PH';
    const LANGUAGE_EN_SG = 'en_SG';
    const LANGUAGE_EN_ZA = 'en_ZA';
    const LANGUAGE_EN_GB = 'en_GB';
    const LANGUAGE_EN_US = 'en_US';
    const LANGUAGE_EN = 'en';
    const LANGUAGE_ET_EE = 'et_EE';
    const LANGUAGE_ET = 'et';
    const LANGUAGE_FI_FI = 'fi_FI';
    const LANGUAGE_FI = 'fi';
    const LANGUAGE_FR_BE = 'fr_BE';
    const LANGUAGE_FR_CA = 'fr_CA';
    const LANGUAGE_FR_FR = 'fr_FR';
    const LANGUAGE_FR_LU = 'fr_LU';
    const LANGUAGE_FR_CH = 'fr_CH';
    const LANGUAGE_FR = 'fr';
    const LANGUAGE_DE_AT = 'de_AT';
    const LANGUAGE_DE_DE = 'de_DE';
    const LANGUAGE_DE_LU = 'de_LU';
    const LANGUAGE_DE_CH = 'de_CH';
    const LANGUAGE_DE = 'de';
    const LANGUAGE_EL_CY = 'el_CY';
    const LANGUAGE_EL_GR = 'el_GR';
    const LANGUAGE_EL = 'el';
    const LANGUAGE_IW_IL = 'iw_IL';
    const LANGUAGE_IW = 'iw';
    const LANGUAGE_HI_IN = 'hi_IN';
    const LANGUAGE_HU_HU = 'hu_HU';
    const LANGUAGE_HU = 'hu';
    const LANGUAGE_IS_IS = 'is_IS';
    const LANGUAGE_IS = 'is';
    const LANGUAGE_IN_ID = 'in_ID';
    const LANGUAGE_IN = 'in';
    const LANGUAGE_GA_IE = 'ga_IE';
    const LANGUAGE_GA = 'ga';
    const LANGUAGE_IT_IT = 'it_IT';
    const LANGUAGE_IT_CH = 'it_CH';
    const LANGUAGE_IT = 'it';
    const LANGUAGE_JA_JP = 'ja_JP';
    const LANGUAGE_JA_JP_JP = 'ja_JP_JP';
    const LANGUAGE_JA = 'ja';
    const LANGUAGE_KO_KR = 'ko_KR';
    const LANGUAGE_KO = 'ko';
    const LANGUAGE_LV_LV = 'lv_LV';
    const LANGUAGE_LV = 'lv';
    const LANGUAGE_LT_LT = 'lt_LT';
    const LANGUAGE_LT = 'lt';
    const LANGUAGE_MK_MK = 'mk_MK';
    const LANGUAGE_MK = 'mk';
    const LANGUAGE_MS_MY = 'ms_MY';
    const LANGUAGE_MS = 'ms';
    const LANGUAGE_MT_MT = 'mt_MT';
    const LANGUAGE_MT = 'mt';
    const LANGUAGE_NO_NO = 'no_NO';
    const LANGUAGE_NO_NO_NY = 'no_NO_NY';
    const LANGUAGE_NO = 'no';
    const LANGUAGE_PL_PL = 'pl_PL';
    const LANGUAGE_PL = 'pl';
    const LANGUAGE_PT_BR = 'pt_BR';
    const LANGUAGE_PT_PT = 'pt_PT';
    const LANGUAGE_PT = 'pt';
    const LANGUAGE_RO_RO = 'ro_RO';
    const LANGUAGE_RO = 'ro';
    const LANGUAGE_RU_RU = 'ru_RU';
    const LANGUAGE_RU = 'ru';
    const LANGUAGE_SR_BA = 'sr_BA';
    const LANGUAGE_SR_ME = 'sr_ME';
    const LANGUAGE_SR_CS = 'sr_CS';
    const LANGUAGE_SR_RS = 'sr_RS';
    const LANGUAGE_SR = 'sr';
    const LANGUAGE_SK_SK = 'sk_SK';
    const LANGUAGE_SK = 'sk';
    const LANGUAGE_SL_SI = 'sl_SI';
    const LANGUAGE_SL = 'sl';
    const LANGUAGE_ES_AR = 'es_AR';
    const LANGUAGE_ES_BO = 'es_BO';
    const LANGUAGE_ES_CL = 'es_CL';
    const LANGUAGE_ES_CO = 'es_CO';
    const LANGUAGE_ES_CR = 'es_CR';
    const LANGUAGE_ES_DO = 'es_DO';
    const LANGUAGE_ES_EC = 'es_EC';
    const LANGUAGE_ES_SV = 'es_SV';
    const LANGUAGE_ES_GT = 'es_GT';
    const LANGUAGE_ES_HN = 'es_HN';
    const LANGUAGE_ES_MX = 'es_MX';
    const LANGUAGE_ES_NI = 'es_NI';
    const LANGUAGE_ES_PA = 'es_PA';
    const LANGUAGE_ES_PY = 'es_PY';
    const LANGUAGE_ES_PE = 'es_PE';
    const LANGUAGE_ES_PR = 'es_PR';
    const LANGUAGE_ES_ES = 'es_ES';
    const LANGUAGE_ES_US = 'es_US';
    const LANGUAGE_ES_UY = 'es_UY';
    const LANGUAGE_ES_VE = 'es_VE';
    const LANGUAGE_ES = 'es';
    const LANGUAGE_SV_SE = 'sv_SE';
    const LANGUAGE_SV = 'sv';
    const LANGUAGE_TH_TH = 'th_TH';
    const LANGUAGE_TH_TH_TH = 'th_TH_TH';
    const LANGUAGE_TH = 'th';
    const LANGUAGE_TR_TR = 'tr_TR';
    const LANGUAGE_TR = 'tr';
    const LANGUAGE_UK_UA = 'uk_UA';
    const LANGUAGE_UK = 'uk';
    const LANGUAGE_VI_VN = 'vi_VN';
    const LANGUAGE_VI = 'vi';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PRIVATE,
            self::STATUS_PUBLIC,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_SQ_AL,
            self::LANGUAGE_SQ,
            self::LANGUAGE_AR_DZ,
            self::LANGUAGE_AR_BH,
            self::LANGUAGE_AR_EG,
            self::LANGUAGE_AR_IQ,
            self::LANGUAGE_AR_JO,
            self::LANGUAGE_AR_KW,
            self::LANGUAGE_AR_LB,
            self::LANGUAGE_AR_LY,
            self::LANGUAGE_AR_MA,
            self::LANGUAGE_AR_OM,
            self::LANGUAGE_AR_QA,
            self::LANGUAGE_AR_SA,
            self::LANGUAGE_AR_SD,
            self::LANGUAGE_AR_SY,
            self::LANGUAGE_AR_TN,
            self::LANGUAGE_AR_AE,
            self::LANGUAGE_AR_YE,
            self::LANGUAGE_AR,
            self::LANGUAGE_BE_BY,
            self::LANGUAGE_BE,
            self::LANGUAGE_BG_BG,
            self::LANGUAGE_BG,
            self::LANGUAGE_CA_ES,
            self::LANGUAGE_CA,
            self::LANGUAGE_ZH_CN,
            self::LANGUAGE_ZH_HK,
            self::LANGUAGE_ZH_SG,
            self::LANGUAGE_ZH_TW,
            self::LANGUAGE_ZH,
            self::LANGUAGE_HR_HR,
            self::LANGUAGE_HR,
            self::LANGUAGE_CS_CZ,
            self::LANGUAGE_CS,
            self::LANGUAGE_DA_DK,
            self::LANGUAGE_DA,
            self::LANGUAGE_NL_BE,
            self::LANGUAGE_NL_NL,
            self::LANGUAGE_NL,
            self::LANGUAGE_EN_AU,
            self::LANGUAGE_EN_CA,
            self::LANGUAGE_EN_IN,
            self::LANGUAGE_EN_IE,
            self::LANGUAGE_EN_MT,
            self::LANGUAGE_EN_NZ,
            self::LANGUAGE_EN_PH,
            self::LANGUAGE_EN_SG,
            self::LANGUAGE_EN_ZA,
            self::LANGUAGE_EN_GB,
            self::LANGUAGE_EN_US,
            self::LANGUAGE_EN,
            self::LANGUAGE_ET_EE,
            self::LANGUAGE_ET,
            self::LANGUAGE_FI_FI,
            self::LANGUAGE_FI,
            self::LANGUAGE_FR_BE,
            self::LANGUAGE_FR_CA,
            self::LANGUAGE_FR_FR,
            self::LANGUAGE_FR_LU,
            self::LANGUAGE_FR_CH,
            self::LANGUAGE_FR,
            self::LANGUAGE_DE_AT,
            self::LANGUAGE_DE_DE,
            self::LANGUAGE_DE_LU,
            self::LANGUAGE_DE_CH,
            self::LANGUAGE_DE,
            self::LANGUAGE_EL_CY,
            self::LANGUAGE_EL_GR,
            self::LANGUAGE_EL,
            self::LANGUAGE_IW_IL,
            self::LANGUAGE_IW,
            self::LANGUAGE_HI_IN,
            self::LANGUAGE_HU_HU,
            self::LANGUAGE_HU,
            self::LANGUAGE_IS_IS,
            self::LANGUAGE_IS,
            self::LANGUAGE_IN_ID,
            self::LANGUAGE_IN,
            self::LANGUAGE_GA_IE,
            self::LANGUAGE_GA,
            self::LANGUAGE_IT_IT,
            self::LANGUAGE_IT_CH,
            self::LANGUAGE_IT,
            self::LANGUAGE_JA_JP,
            self::LANGUAGE_JA_JP_JP,
            self::LANGUAGE_JA,
            self::LANGUAGE_KO_KR,
            self::LANGUAGE_KO,
            self::LANGUAGE_LV_LV,
            self::LANGUAGE_LV,
            self::LANGUAGE_LT_LT,
            self::LANGUAGE_LT,
            self::LANGUAGE_MK_MK,
            self::LANGUAGE_MK,
            self::LANGUAGE_MS_MY,
            self::LANGUAGE_MS,
            self::LANGUAGE_MT_MT,
            self::LANGUAGE_MT,
            self::LANGUAGE_NO_NO,
            self::LANGUAGE_NO_NO_NY,
            self::LANGUAGE_NO,
            self::LANGUAGE_PL_PL,
            self::LANGUAGE_PL,
            self::LANGUAGE_PT_BR,
            self::LANGUAGE_PT_PT,
            self::LANGUAGE_PT,
            self::LANGUAGE_RO_RO,
            self::LANGUAGE_RO,
            self::LANGUAGE_RU_RU,
            self::LANGUAGE_RU,
            self::LANGUAGE_SR_BA,
            self::LANGUAGE_SR_ME,
            self::LANGUAGE_SR_CS,
            self::LANGUAGE_SR_RS,
            self::LANGUAGE_SR,
            self::LANGUAGE_SK_SK,
            self::LANGUAGE_SK,
            self::LANGUAGE_SL_SI,
            self::LANGUAGE_SL,
            self::LANGUAGE_ES_AR,
            self::LANGUAGE_ES_BO,
            self::LANGUAGE_ES_CL,
            self::LANGUAGE_ES_CO,
            self::LANGUAGE_ES_CR,
            self::LANGUAGE_ES_DO,
            self::LANGUAGE_ES_EC,
            self::LANGUAGE_ES_SV,
            self::LANGUAGE_ES_GT,
            self::LANGUAGE_ES_HN,
            self::LANGUAGE_ES_MX,
            self::LANGUAGE_ES_NI,
            self::LANGUAGE_ES_PA,
            self::LANGUAGE_ES_PY,
            self::LANGUAGE_ES_PE,
            self::LANGUAGE_ES_PR,
            self::LANGUAGE_ES_ES,
            self::LANGUAGE_ES_US,
            self::LANGUAGE_ES_UY,
            self::LANGUAGE_ES_VE,
            self::LANGUAGE_ES,
            self::LANGUAGE_SV_SE,
            self::LANGUAGE_SV,
            self::LANGUAGE_TH_TH,
            self::LANGUAGE_TH_TH_TH,
            self::LANGUAGE_TH,
            self::LANGUAGE_TR_TR,
            self::LANGUAGE_TR,
            self::LANGUAGE_UK_UA,
            self::LANGUAGE_UK,
            self::LANGUAGE_VI_VN,
            self::LANGUAGE_VI,
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
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['templates'] = isset($data['templates']) ? $data['templates'] : null;
        $this->container['templateRels'] = isset($data['templateRels']) ? $data['templateRels'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['portalMembers'] = isset($data['portalMembers']) ? $data['portalMembers'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['designs'] = isset($data['designs']) ? $data['designs'] : null;
        $this->container['templateFolders'] = isset($data['templateFolders']) ? $data['templateFolders'] : null;
        $this->container['designFolders'] = isset($data['designFolders']) ? $data['designFolders'] : null;
        $this->container['imageFolders'] = isset($data['imageFolders']) ? $data['imageFolders'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
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
        $allowed_values = array("private", "public");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

        $allowed_values = array("sq_AL", "sq", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SD", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "ar", "be_BY", "be", "bg_BG", "bg", "ca_ES", "ca", "zh_CN", "zh_HK", "zh_SG", "zh_TW", "zh", "hr_HR", "hr", "cs_CZ", "cs", "da_DK", "da", "nl_BE", "nl_NL", "nl", "en_AU", "en_CA", "en_IN", "en_IE", "en_MT", "en_NZ", "en_PH", "en_SG", "en_ZA", "en_GB", "en_US", "en", "et_EE", "et", "fi_FI", "fi", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_CH", "fr", "de_AT", "de_DE", "de_LU", "de_CH", "de", "el_CY", "el_GR", "el", "iw_IL", "iw", "hi_IN", "hu_HU", "hu", "is_IS", "is", "in_ID", "in", "ga_IE", "ga", "it_IT", "it_CH", "it", "ja_JP", "ja_JP_JP", "ja", "ko_KR", "ko", "lv_LV", "lv", "lt_LT", "lt", "mk_MK", "mk", "ms_MY", "ms", "mt_MT", "mt", "no_NO", "no_NO_NY", "no", "pl_PL", "pl", "pt_BR", "pt_PT", "pt", "ro_RO", "ro", "ru_RU", "ru", "sr_BA", "sr_ME", "sr_CS", "sr_RS", "sr", "sk_SK", "sk", "sl_SI", "sl", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY", "es_PE", "es_PR", "es_ES", "es_US", "es_UY", "es_VE", "es", "sv_SE", "sv", "th_TH", "th_TH_TH", "th", "tr_TR", "tr", "uk_UA", "uk", "vi_VN", "vi");
        if (!in_array($this->container['language'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'language', must be one of #{allowed_values}.";
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
        $allowed_values = array("private", "public");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("sq_AL", "sq", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SD", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "ar", "be_BY", "be", "bg_BG", "bg", "ca_ES", "ca", "zh_CN", "zh_HK", "zh_SG", "zh_TW", "zh", "hr_HR", "hr", "cs_CZ", "cs", "da_DK", "da", "nl_BE", "nl_NL", "nl", "en_AU", "en_CA", "en_IN", "en_IE", "en_MT", "en_NZ", "en_PH", "en_SG", "en_ZA", "en_GB", "en_US", "en", "et_EE", "et", "fi_FI", "fi", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_CH", "fr", "de_AT", "de_DE", "de_LU", "de_CH", "de", "el_CY", "el_GR", "el", "iw_IL", "iw", "hi_IN", "hu_HU", "hu", "is_IS", "is", "in_ID", "in", "ga_IE", "ga", "it_IT", "it_CH", "it", "ja_JP", "ja_JP_JP", "ja", "ko_KR", "ko", "lv_LV", "lv", "lt_LT", "lt", "mk_MK", "mk", "ms_MY", "ms", "mt_MT", "mt", "no_NO", "no_NO_NY", "no", "pl_PL", "pl", "pt_BR", "pt_PT", "pt", "ro_RO", "ro", "ru_RU", "ru", "sr_BA", "sr_ME", "sr_CS", "sr_RS", "sr", "sk_SK", "sk", "sl_SI", "sl", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY", "es_PE", "es_PR", "es_ES", "es_US", "es_UY", "es_VE", "es", "sv_SE", "sv", "th_TH", "th_TH_TH", "th", "tr_TR", "tr", "uk_UA", "uk", "vi_VN", "vi");
        if (!in_array($this->container['language'], $allowed_values)) {
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
        $allowed_values = array('private', 'public');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'private', 'public'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $allowed_values = array('sq_AL', 'sq', 'ar_DZ', 'ar_BH', 'ar_EG', 'ar_IQ', 'ar_JO', 'ar_KW', 'ar_LB', 'ar_LY', 'ar_MA', 'ar_OM', 'ar_QA', 'ar_SA', 'ar_SD', 'ar_SY', 'ar_TN', 'ar_AE', 'ar_YE', 'ar', 'be_BY', 'be', 'bg_BG', 'bg', 'ca_ES', 'ca', 'zh_CN', 'zh_HK', 'zh_SG', 'zh_TW', 'zh', 'hr_HR', 'hr', 'cs_CZ', 'cs', 'da_DK', 'da', 'nl_BE', 'nl_NL', 'nl', 'en_AU', 'en_CA', 'en_IN', 'en_IE', 'en_MT', 'en_NZ', 'en_PH', 'en_SG', 'en_ZA', 'en_GB', 'en_US', 'en', 'et_EE', 'et', 'fi_FI', 'fi', 'fr_BE', 'fr_CA', 'fr_FR', 'fr_LU', 'fr_CH', 'fr', 'de_AT', 'de_DE', 'de_LU', 'de_CH', 'de', 'el_CY', 'el_GR', 'el', 'iw_IL', 'iw', 'hi_IN', 'hu_HU', 'hu', 'is_IS', 'is', 'in_ID', 'in', 'ga_IE', 'ga', 'it_IT', 'it_CH', 'it', 'ja_JP', 'ja_JP_JP', 'ja', 'ko_KR', 'ko', 'lv_LV', 'lv', 'lt_LT', 'lt', 'mk_MK', 'mk', 'ms_MY', 'ms', 'mt_MT', 'mt', 'no_NO', 'no_NO_NY', 'no', 'pl_PL', 'pl', 'pt_BR', 'pt_PT', 'pt', 'ro_RO', 'ro', 'ru_RU', 'ru', 'sr_BA', 'sr_ME', 'sr_CS', 'sr_RS', 'sr', 'sk_SK', 'sk', 'sl_SI', 'sl', 'es_AR', 'es_BO', 'es_CL', 'es_CO', 'es_CR', 'es_DO', 'es_EC', 'es_SV', 'es_GT', 'es_HN', 'es_MX', 'es_NI', 'es_PA', 'es_PY', 'es_PE', 'es_PR', 'es_ES', 'es_US', 'es_UY', 'es_VE', 'es', 'sv_SE', 'sv', 'th_TH', 'th_TH_TH', 'th', 'tr_TR', 'tr', 'uk_UA', 'uk', 'vi_VN', 'vi');
        if (!in_array($language, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'language', must be one of 'sq_AL', 'sq', 'ar_DZ', 'ar_BH', 'ar_EG', 'ar_IQ', 'ar_JO', 'ar_KW', 'ar_LB', 'ar_LY', 'ar_MA', 'ar_OM', 'ar_QA', 'ar_SA', 'ar_SD', 'ar_SY', 'ar_TN', 'ar_AE', 'ar_YE', 'ar', 'be_BY', 'be', 'bg_BG', 'bg', 'ca_ES', 'ca', 'zh_CN', 'zh_HK', 'zh_SG', 'zh_TW', 'zh', 'hr_HR', 'hr', 'cs_CZ', 'cs', 'da_DK', 'da', 'nl_BE', 'nl_NL', 'nl', 'en_AU', 'en_CA', 'en_IN', 'en_IE', 'en_MT', 'en_NZ', 'en_PH', 'en_SG', 'en_ZA', 'en_GB', 'en_US', 'en', 'et_EE', 'et', 'fi_FI', 'fi', 'fr_BE', 'fr_CA', 'fr_FR', 'fr_LU', 'fr_CH', 'fr', 'de_AT', 'de_DE', 'de_LU', 'de_CH', 'de', 'el_CY', 'el_GR', 'el', 'iw_IL', 'iw', 'hi_IN', 'hu_HU', 'hu', 'is_IS', 'is', 'in_ID', 'in', 'ga_IE', 'ga', 'it_IT', 'it_CH', 'it', 'ja_JP', 'ja_JP_JP', 'ja', 'ko_KR', 'ko', 'lv_LV', 'lv', 'lt_LT', 'lt', 'mk_MK', 'mk', 'ms_MY', 'ms', 'mt_MT', 'mt', 'no_NO', 'no_NO_NY', 'no', 'pl_PL', 'pl', 'pt_BR', 'pt_PT', 'pt', 'ro_RO', 'ro', 'ru_RU', 'ru', 'sr_BA', 'sr_ME', 'sr_CS', 'sr_RS', 'sr', 'sk_SK', 'sk', 'sl_SI', 'sl', 'es_AR', 'es_BO', 'es_CL', 'es_CO', 'es_CR', 'es_DO', 'es_EC', 'es_SV', 'es_GT', 'es_HN', 'es_MX', 'es_NI', 'es_PA', 'es_PY', 'es_PE', 'es_PR', 'es_ES', 'es_US', 'es_UY', 'es_VE', 'es', 'sv_SE', 'sv', 'th_TH', 'th_TH_TH', 'th', 'tr_TR', 'tr', 'uk_UA', 'uk', 'vi_VN', 'vi'");
        }
        $this->container['language'] = $language;

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
     * Gets templateRels
     * @return \Swagger\Client\Model\PortalTemplate[]
     */
    public function getTemplateRels()
    {
        return $this->container['templateRels'];
    }

    /**
     * Sets templateRels
     * @param \Swagger\Client\Model\PortalTemplate[] $templateRels
     * @return $this
     */
    public function setTemplateRels($templateRels)
    {
        $this->container['templateRels'] = $templateRels;

        return $this;
    }

    /**
     * Gets members
     * @return \Swagger\Client\Model\TeamMember[]
     */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
     * Sets members
     * @param \Swagger\Client\Model\TeamMember[] $members
     * @return $this
     */
    public function setMembers($members)
    {
        $this->container['members'] = $members;

        return $this;
    }

    /**
     * Gets portalMembers
     * @return \Swagger\Client\Model\PortalMember[]
     */
    public function getPortalMembers()
    {
        return $this->container['portalMembers'];
    }

    /**
     * Sets portalMembers
     * @param \Swagger\Client\Model\PortalMember[] $portalMembers
     * @return $this
     */
    public function setPortalMembers($portalMembers)
    {
        $this->container['portalMembers'] = $portalMembers;

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
     * Gets templateFolders
     * @return \Swagger\Client\Model\PortalTemplateFolder[]
     */
    public function getTemplateFolders()
    {
        return $this->container['templateFolders'];
    }

    /**
     * Sets templateFolders
     * @param \Swagger\Client\Model\PortalTemplateFolder[] $templateFolders
     * @return $this
     */
    public function setTemplateFolders($templateFolders)
    {
        $this->container['templateFolders'] = $templateFolders;

        return $this;
    }

    /**
     * Gets designFolders
     * @return \Swagger\Client\Model\DesignFolder[]
     */
    public function getDesignFolders()
    {
        return $this->container['designFolders'];
    }

    /**
     * Sets designFolders
     * @param \Swagger\Client\Model\DesignFolder[] $designFolders
     * @return $this
     */
    public function setDesignFolders($designFolders)
    {
        $this->container['designFolders'] = $designFolders;

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
     * Gets permission
     * @return \Swagger\Client\Model\PortalPermissionSet
     */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
     * Sets permission
     * @param \Swagger\Client\Model\PortalPermissionSet $permission
     * @return $this
     */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;

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


