<?php
/**
 * Billing
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
 * OpenAPI spec version: 1.0.7-alpha.2
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
 * Billing Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Billing implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Billing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'companyName' => 'string',
        'companyEmail' => 'string',
        'companyVat' => 'string',
        'companyCard' => '\Swagger\Client\Model\BillingCard',
        'companyBankAccount' => '\Swagger\Client\Model\BillingBankAccount',
        'companySource' => '\Swagger\Client\Model\BillingSource',
        'subscription' => '\Swagger\Client\Model\BillingSubscription',
        'limit' => '\Swagger\Client\Model\BillingLimit',
        'taxPercent' => 'double',
        'stripeCustomerId' => 'string',
        'stripeCardId' => 'string',
        'stripeBankAccountId' => 'string',
        'stripeSourceId' => 'string',
        'stripeSubscriptionId' => 'string',
        'id' => 'string',
        'teamId' => 'string',
        'team' => '\Swagger\Client\Model\Team'
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
        'companyName' => 'companyName',
        'companyEmail' => 'companyEmail',
        'companyVat' => 'companyVat',
        'companyCard' => 'companyCard',
        'companyBankAccount' => 'companyBankAccount',
        'companySource' => 'companySource',
        'subscription' => 'subscription',
        'limit' => 'limit',
        'taxPercent' => 'taxPercent',
        'stripeCustomerId' => 'stripeCustomerId',
        'stripeCardId' => 'stripeCardId',
        'stripeBankAccountId' => 'stripeBankAccountId',
        'stripeSourceId' => 'stripeSourceId',
        'stripeSubscriptionId' => 'stripeSubscriptionId',
        'id' => 'id',
        'teamId' => 'teamId',
        'team' => 'team'
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
        'companyName' => 'setCompanyName',
        'companyEmail' => 'setCompanyEmail',
        'companyVat' => 'setCompanyVat',
        'companyCard' => 'setCompanyCard',
        'companyBankAccount' => 'setCompanyBankAccount',
        'companySource' => 'setCompanySource',
        'subscription' => 'setSubscription',
        'limit' => 'setLimit',
        'taxPercent' => 'setTaxPercent',
        'stripeCustomerId' => 'setStripeCustomerId',
        'stripeCardId' => 'setStripeCardId',
        'stripeBankAccountId' => 'setStripeBankAccountId',
        'stripeSourceId' => 'setStripeSourceId',
        'stripeSubscriptionId' => 'setStripeSubscriptionId',
        'id' => 'setId',
        'teamId' => 'setTeamId',
        'team' => 'setTeam'
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
        'companyName' => 'getCompanyName',
        'companyEmail' => 'getCompanyEmail',
        'companyVat' => 'getCompanyVat',
        'companyCard' => 'getCompanyCard',
        'companyBankAccount' => 'getCompanyBankAccount',
        'companySource' => 'getCompanySource',
        'subscription' => 'getSubscription',
        'limit' => 'getLimit',
        'taxPercent' => 'getTaxPercent',
        'stripeCustomerId' => 'getStripeCustomerId',
        'stripeCardId' => 'getStripeCardId',
        'stripeBankAccountId' => 'getStripeBankAccountId',
        'stripeSourceId' => 'getStripeSourceId',
        'stripeSubscriptionId' => 'getStripeSubscriptionId',
        'id' => 'getId',
        'teamId' => 'getTeamId',
        'team' => 'getTeam'
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
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['companyEmail'] = isset($data['companyEmail']) ? $data['companyEmail'] : null;
        $this->container['companyVat'] = isset($data['companyVat']) ? $data['companyVat'] : null;
        $this->container['companyCard'] = isset($data['companyCard']) ? $data['companyCard'] : null;
        $this->container['companyBankAccount'] = isset($data['companyBankAccount']) ? $data['companyBankAccount'] : null;
        $this->container['companySource'] = isset($data['companySource']) ? $data['companySource'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['taxPercent'] = isset($data['taxPercent']) ? $data['taxPercent'] : 0.0;
        $this->container['stripeCustomerId'] = isset($data['stripeCustomerId']) ? $data['stripeCustomerId'] : null;
        $this->container['stripeCardId'] = isset($data['stripeCardId']) ? $data['stripeCardId'] : null;
        $this->container['stripeBankAccountId'] = isset($data['stripeBankAccountId']) ? $data['stripeBankAccountId'] : null;
        $this->container['stripeSourceId'] = isset($data['stripeSourceId']) ? $data['stripeSourceId'] : null;
        $this->container['stripeSubscriptionId'] = isset($data['stripeSubscriptionId']) ? $data['stripeSubscriptionId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
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
     * Gets companyName
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets companyEmail
     * @return string
     */
    public function getCompanyEmail()
    {
        return $this->container['companyEmail'];
    }

    /**
     * Sets companyEmail
     * @param string $companyEmail
     * @return $this
     */
    public function setCompanyEmail($companyEmail)
    {
        $this->container['companyEmail'] = $companyEmail;

        return $this;
    }

    /**
     * Gets companyVat
     * @return string
     */
    public function getCompanyVat()
    {
        return $this->container['companyVat'];
    }

    /**
     * Sets companyVat
     * @param string $companyVat
     * @return $this
     */
    public function setCompanyVat($companyVat)
    {
        $this->container['companyVat'] = $companyVat;

        return $this;
    }

    /**
     * Gets companyCard
     * @return \Swagger\Client\Model\BillingCard
     */
    public function getCompanyCard()
    {
        return $this->container['companyCard'];
    }

    /**
     * Sets companyCard
     * @param \Swagger\Client\Model\BillingCard $companyCard
     * @return $this
     */
    public function setCompanyCard($companyCard)
    {
        $this->container['companyCard'] = $companyCard;

        return $this;
    }

    /**
     * Gets companyBankAccount
     * @return \Swagger\Client\Model\BillingBankAccount
     */
    public function getCompanyBankAccount()
    {
        return $this->container['companyBankAccount'];
    }

    /**
     * Sets companyBankAccount
     * @param \Swagger\Client\Model\BillingBankAccount $companyBankAccount
     * @return $this
     */
    public function setCompanyBankAccount($companyBankAccount)
    {
        $this->container['companyBankAccount'] = $companyBankAccount;

        return $this;
    }

    /**
     * Gets companySource
     * @return \Swagger\Client\Model\BillingSource
     */
    public function getCompanySource()
    {
        return $this->container['companySource'];
    }

    /**
     * Sets companySource
     * @param \Swagger\Client\Model\BillingSource $companySource
     * @return $this
     */
    public function setCompanySource($companySource)
    {
        $this->container['companySource'] = $companySource;

        return $this;
    }

    /**
     * Gets subscription
     * @return \Swagger\Client\Model\BillingSubscription
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     * @param \Swagger\Client\Model\BillingSubscription $subscription
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets limit
     * @return \Swagger\Client\Model\BillingLimit
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     * @param \Swagger\Client\Model\BillingLimit $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets taxPercent
     * @return double
     */
    public function getTaxPercent()
    {
        return $this->container['taxPercent'];
    }

    /**
     * Sets taxPercent
     * @param double $taxPercent
     * @return $this
     */
    public function setTaxPercent($taxPercent)
    {
        $this->container['taxPercent'] = $taxPercent;

        return $this;
    }

    /**
     * Gets stripeCustomerId
     * @return string
     */
    public function getStripeCustomerId()
    {
        return $this->container['stripeCustomerId'];
    }

    /**
     * Sets stripeCustomerId
     * @param string $stripeCustomerId
     * @return $this
     */
    public function setStripeCustomerId($stripeCustomerId)
    {
        $this->container['stripeCustomerId'] = $stripeCustomerId;

        return $this;
    }

    /**
     * Gets stripeCardId
     * @return string
     */
    public function getStripeCardId()
    {
        return $this->container['stripeCardId'];
    }

    /**
     * Sets stripeCardId
     * @param string $stripeCardId
     * @return $this
     */
    public function setStripeCardId($stripeCardId)
    {
        $this->container['stripeCardId'] = $stripeCardId;

        return $this;
    }

    /**
     * Gets stripeBankAccountId
     * @return string
     */
    public function getStripeBankAccountId()
    {
        return $this->container['stripeBankAccountId'];
    }

    /**
     * Sets stripeBankAccountId
     * @param string $stripeBankAccountId
     * @return $this
     */
    public function setStripeBankAccountId($stripeBankAccountId)
    {
        $this->container['stripeBankAccountId'] = $stripeBankAccountId;

        return $this;
    }

    /**
     * Gets stripeSourceId
     * @return string
     */
    public function getStripeSourceId()
    {
        return $this->container['stripeSourceId'];
    }

    /**
     * Sets stripeSourceId
     * @param string $stripeSourceId
     * @return $this
     */
    public function setStripeSourceId($stripeSourceId)
    {
        $this->container['stripeSourceId'] = $stripeSourceId;

        return $this;
    }

    /**
     * Gets stripeSubscriptionId
     * @return string
     */
    public function getStripeSubscriptionId()
    {
        return $this->container['stripeSubscriptionId'];
    }

    /**
     * Sets stripeSubscriptionId
     * @param string $stripeSubscriptionId
     * @return $this
     */
    public function setStripeSubscriptionId($stripeSubscriptionId)
    {
        $this->container['stripeSubscriptionId'] = $stripeSubscriptionId;

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


