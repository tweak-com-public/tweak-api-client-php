<?php
/**
 * BillingSource
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
 * OpenAPI spec version: 1.0.7-alpha.4
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
 * BillingSource Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingSource implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BillingSource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'object' => 'string',
        'amount' => 'double',
        'clientSecret' => 'string',
        'created' => 'double',
        'currency' => 'string',
        'flow' => 'string',
        'livemode' => 'bool',
        'owner' => '\Swagger\Client\Model\BillingSourceOwner',
        'receiver' => '\Swagger\Client\Model\BillingSourceReceiver',
        'statementDescriptor' => 'string',
        'status' => 'string',
        'type' => 'string',
        'usage' => 'string',
        'achCreditTransfer' => '\Swagger\Client\Model\BillingSourceAchCreditTransfer',
        'sepaDebit' => '\Swagger\Client\Model\BillingSourceSepaDebit',
        'sofort' => '\Swagger\Client\Model\BillingSourceSofort',
        'redirect' => '\Swagger\Client\Model\BillingSourceRedirect',
        'token' => 'string'
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
        'id' => 'id',
        'object' => 'object',
        'amount' => 'amount',
        'clientSecret' => 'clientSecret',
        'created' => 'created',
        'currency' => 'currency',
        'flow' => 'flow',
        'livemode' => 'livemode',
        'owner' => 'owner',
        'receiver' => 'receiver',
        'statementDescriptor' => 'statementDescriptor',
        'status' => 'status',
        'type' => 'type',
        'usage' => 'usage',
        'achCreditTransfer' => 'achCreditTransfer',
        'sepaDebit' => 'sepaDebit',
        'sofort' => 'sofort',
        'redirect' => 'redirect',
        'token' => 'token'
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
        'id' => 'setId',
        'object' => 'setObject',
        'amount' => 'setAmount',
        'clientSecret' => 'setClientSecret',
        'created' => 'setCreated',
        'currency' => 'setCurrency',
        'flow' => 'setFlow',
        'livemode' => 'setLivemode',
        'owner' => 'setOwner',
        'receiver' => 'setReceiver',
        'statementDescriptor' => 'setStatementDescriptor',
        'status' => 'setStatus',
        'type' => 'setType',
        'usage' => 'setUsage',
        'achCreditTransfer' => 'setAchCreditTransfer',
        'sepaDebit' => 'setSepaDebit',
        'sofort' => 'setSofort',
        'redirect' => 'setRedirect',
        'token' => 'setToken'
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
        'id' => 'getId',
        'object' => 'getObject',
        'amount' => 'getAmount',
        'clientSecret' => 'getClientSecret',
        'created' => 'getCreated',
        'currency' => 'getCurrency',
        'flow' => 'getFlow',
        'livemode' => 'getLivemode',
        'owner' => 'getOwner',
        'receiver' => 'getReceiver',
        'statementDescriptor' => 'getStatementDescriptor',
        'status' => 'getStatus',
        'type' => 'getType',
        'usage' => 'getUsage',
        'achCreditTransfer' => 'getAchCreditTransfer',
        'sepaDebit' => 'getSepaDebit',
        'sofort' => 'getSofort',
        'redirect' => 'getRedirect',
        'token' => 'getToken'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_SEPA_DEBIT = 'sepa_debit';
    const TYPE_SOFORT = 'sofort';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SEPA_DEBIT,
            self::TYPE_SOFORT,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : 'source';
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['flow'] = isset($data['flow']) ? $data['flow'] : null;
        $this->container['livemode'] = isset($data['livemode']) ? $data['livemode'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['receiver'] = isset($data['receiver']) ? $data['receiver'] : null;
        $this->container['statementDescriptor'] = isset($data['statementDescriptor']) ? $data['statementDescriptor'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['achCreditTransfer'] = isset($data['achCreditTransfer']) ? $data['achCreditTransfer'] : null;
        $this->container['sepaDebit'] = isset($data['sepaDebit']) ? $data['sepaDebit'] : null;
        $this->container['sofort'] = isset($data['sofort']) ? $data['sofort'] : null;
        $this->container['redirect'] = isset($data['redirect']) ? $data['redirect'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("sepa_debit", "sofort");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
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
        $allowed_values = array("sepa_debit", "sofort");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
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
     * Gets object
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     * @param string $object
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets amount
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param double $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets clientSecret
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
     * Sets clientSecret
     * @param string $clientSecret
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;

        return $this;
    }

    /**
     * Gets created
     * @return double
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param double $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets flow
     * @return string
     */
    public function getFlow()
    {
        return $this->container['flow'];
    }

    /**
     * Sets flow
     * @param string $flow
     * @return $this
     */
    public function setFlow($flow)
    {
        $this->container['flow'] = $flow;

        return $this;
    }

    /**
     * Gets livemode
     * @return bool
     */
    public function getLivemode()
    {
        return $this->container['livemode'];
    }

    /**
     * Sets livemode
     * @param bool $livemode
     * @return $this
     */
    public function setLivemode($livemode)
    {
        $this->container['livemode'] = $livemode;

        return $this;
    }

    /**
     * Gets owner
     * @return \Swagger\Client\Model\BillingSourceOwner
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     * @param \Swagger\Client\Model\BillingSourceOwner $owner
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets receiver
     * @return \Swagger\Client\Model\BillingSourceReceiver
     */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
     * Sets receiver
     * @param \Swagger\Client\Model\BillingSourceReceiver $receiver
     * @return $this
     */
    public function setReceiver($receiver)
    {
        $this->container['receiver'] = $receiver;

        return $this;
    }

    /**
     * Gets statementDescriptor
     * @return string
     */
    public function getStatementDescriptor()
    {
        return $this->container['statementDescriptor'];
    }

    /**
     * Sets statementDescriptor
     * @param string $statementDescriptor
     * @return $this
     */
    public function setStatementDescriptor($statementDescriptor)
    {
        $this->container['statementDescriptor'] = $statementDescriptor;

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
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('sepa_debit', 'sofort');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'sepa_debit', 'sofort'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets usage
     * @return string
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     * @param string $usage
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets achCreditTransfer
     * @return \Swagger\Client\Model\BillingSourceAchCreditTransfer
     */
    public function getAchCreditTransfer()
    {
        return $this->container['achCreditTransfer'];
    }

    /**
     * Sets achCreditTransfer
     * @param \Swagger\Client\Model\BillingSourceAchCreditTransfer $achCreditTransfer
     * @return $this
     */
    public function setAchCreditTransfer($achCreditTransfer)
    {
        $this->container['achCreditTransfer'] = $achCreditTransfer;

        return $this;
    }

    /**
     * Gets sepaDebit
     * @return \Swagger\Client\Model\BillingSourceSepaDebit
     */
    public function getSepaDebit()
    {
        return $this->container['sepaDebit'];
    }

    /**
     * Sets sepaDebit
     * @param \Swagger\Client\Model\BillingSourceSepaDebit $sepaDebit
     * @return $this
     */
    public function setSepaDebit($sepaDebit)
    {
        $this->container['sepaDebit'] = $sepaDebit;

        return $this;
    }

    /**
     * Gets sofort
     * @return \Swagger\Client\Model\BillingSourceSofort
     */
    public function getSofort()
    {
        return $this->container['sofort'];
    }

    /**
     * Sets sofort
     * @param \Swagger\Client\Model\BillingSourceSofort $sofort
     * @return $this
     */
    public function setSofort($sofort)
    {
        $this->container['sofort'] = $sofort;

        return $this;
    }

    /**
     * Gets redirect
     * @return \Swagger\Client\Model\BillingSourceRedirect
     */
    public function getRedirect()
    {
        return $this->container['redirect'];
    }

    /**
     * Sets redirect
     * @param \Swagger\Client\Model\BillingSourceRedirect $redirect
     * @return $this
     */
    public function setRedirect($redirect)
    {
        $this->container['redirect'] = $redirect;

        return $this;
    }

    /**
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param string $token
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

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


