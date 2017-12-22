<?php
/**
 * BillingCard
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
 * OpenAPI spec version: 1.0.4-beta.0
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
 * BillingCard Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingCard implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BillingCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'cardholderName' => 'string',
        'expMonth' => 'double',
        'expYear' => 'double',
        'token' => 'string',
        'number' => 'string',
        'cvc' => 'string',
        'cvcCheck' => 'string',
        'last4' => 'string',
        'brand' => 'string',
        'country' => 'string',
        'funding' => 'string',
        'type' => 'string',
        'addressCity' => 'string',
        'addressCountry' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'addressState' => 'string',
        'addressZip' => 'string',
        'stripeCardId' => 'string',
        'id' => 'string'
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
        'cardholderName' => 'cardholderName',
        'expMonth' => 'expMonth',
        'expYear' => 'expYear',
        'token' => 'token',
        'number' => 'number',
        'cvc' => 'cvc',
        'cvcCheck' => 'cvcCheck',
        'last4' => 'last4',
        'brand' => 'brand',
        'country' => 'country',
        'funding' => 'funding',
        'type' => 'type',
        'addressCity' => 'addressCity',
        'addressCountry' => 'addressCountry',
        'addressLine1' => 'addressLine1',
        'addressLine2' => 'addressLine2',
        'addressState' => 'addressState',
        'addressZip' => 'addressZip',
        'stripeCardId' => 'stripeCardId',
        'id' => 'id'
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
        'cardholderName' => 'setCardholderName',
        'expMonth' => 'setExpMonth',
        'expYear' => 'setExpYear',
        'token' => 'setToken',
        'number' => 'setNumber',
        'cvc' => 'setCvc',
        'cvcCheck' => 'setCvcCheck',
        'last4' => 'setLast4',
        'brand' => 'setBrand',
        'country' => 'setCountry',
        'funding' => 'setFunding',
        'type' => 'setType',
        'addressCity' => 'setAddressCity',
        'addressCountry' => 'setAddressCountry',
        'addressLine1' => 'setAddressLine1',
        'addressLine2' => 'setAddressLine2',
        'addressState' => 'setAddressState',
        'addressZip' => 'setAddressZip',
        'stripeCardId' => 'setStripeCardId',
        'id' => 'setId'
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
        'cardholderName' => 'getCardholderName',
        'expMonth' => 'getExpMonth',
        'expYear' => 'getExpYear',
        'token' => 'getToken',
        'number' => 'getNumber',
        'cvc' => 'getCvc',
        'cvcCheck' => 'getCvcCheck',
        'last4' => 'getLast4',
        'brand' => 'getBrand',
        'country' => 'getCountry',
        'funding' => 'getFunding',
        'type' => 'getType',
        'addressCity' => 'getAddressCity',
        'addressCountry' => 'getAddressCountry',
        'addressLine1' => 'getAddressLine1',
        'addressLine2' => 'getAddressLine2',
        'addressState' => 'getAddressState',
        'addressZip' => 'getAddressZip',
        'stripeCardId' => 'getStripeCardId',
        'id' => 'getId'
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
        $this->container['cardholderName'] = isset($data['cardholderName']) ? $data['cardholderName'] : null;
        $this->container['expMonth'] = isset($data['expMonth']) ? $data['expMonth'] : null;
        $this->container['expYear'] = isset($data['expYear']) ? $data['expYear'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['cvc'] = isset($data['cvc']) ? $data['cvc'] : null;
        $this->container['cvcCheck'] = isset($data['cvcCheck']) ? $data['cvcCheck'] : null;
        $this->container['last4'] = isset($data['last4']) ? $data['last4'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['funding'] = isset($data['funding']) ? $data['funding'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['addressCity'] = isset($data['addressCity']) ? $data['addressCity'] : null;
        $this->container['addressCountry'] = isset($data['addressCountry']) ? $data['addressCountry'] : null;
        $this->container['addressLine1'] = isset($data['addressLine1']) ? $data['addressLine1'] : null;
        $this->container['addressLine2'] = isset($data['addressLine2']) ? $data['addressLine2'] : null;
        $this->container['addressState'] = isset($data['addressState']) ? $data['addressState'] : null;
        $this->container['addressZip'] = isset($data['addressZip']) ? $data['addressZip'] : null;
        $this->container['stripeCardId'] = isset($data['stripeCardId']) ? $data['stripeCardId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
     * Gets cardholderName
     * @return string
     */
    public function getCardholderName()
    {
        return $this->container['cardholderName'];
    }

    /**
     * Sets cardholderName
     * @param string $cardholderName
     * @return $this
     */
    public function setCardholderName($cardholderName)
    {
        $this->container['cardholderName'] = $cardholderName;

        return $this;
    }

    /**
     * Gets expMonth
     * @return double
     */
    public function getExpMonth()
    {
        return $this->container['expMonth'];
    }

    /**
     * Sets expMonth
     * @param double $expMonth
     * @return $this
     */
    public function setExpMonth($expMonth)
    {
        $this->container['expMonth'] = $expMonth;

        return $this;
    }

    /**
     * Gets expYear
     * @return double
     */
    public function getExpYear()
    {
        return $this->container['expYear'];
    }

    /**
     * Sets expYear
     * @param double $expYear
     * @return $this
     */
    public function setExpYear($expYear)
    {
        $this->container['expYear'] = $expYear;

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
     * Gets number
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets cvc
     * @return string
     */
    public function getCvc()
    {
        return $this->container['cvc'];
    }

    /**
     * Sets cvc
     * @param string $cvc
     * @return $this
     */
    public function setCvc($cvc)
    {
        $this->container['cvc'] = $cvc;

        return $this;
    }

    /**
     * Gets cvcCheck
     * @return string
     */
    public function getCvcCheck()
    {
        return $this->container['cvcCheck'];
    }

    /**
     * Sets cvcCheck
     * @param string $cvcCheck
     * @return $this
     */
    public function setCvcCheck($cvcCheck)
    {
        $this->container['cvcCheck'] = $cvcCheck;

        return $this;
    }

    /**
     * Gets last4
     * @return string
     */
    public function getLast4()
    {
        return $this->container['last4'];
    }

    /**
     * Sets last4
     * @param string $last4
     * @return $this
     */
    public function setLast4($last4)
    {
        $this->container['last4'] = $last4;

        return $this;
    }

    /**
     * Gets brand
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     * @param string $brand
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

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
     * Gets funding
     * @return string
     */
    public function getFunding()
    {
        return $this->container['funding'];
    }

    /**
     * Sets funding
     * @param string $funding
     * @return $this
     */
    public function setFunding($funding)
    {
        $this->container['funding'] = $funding;

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
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets addressCity
     * @return string
     */
    public function getAddressCity()
    {
        return $this->container['addressCity'];
    }

    /**
     * Sets addressCity
     * @param string $addressCity
     * @return $this
     */
    public function setAddressCity($addressCity)
    {
        $this->container['addressCity'] = $addressCity;

        return $this;
    }

    /**
     * Gets addressCountry
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->container['addressCountry'];
    }

    /**
     * Sets addressCountry
     * @param string $addressCountry
     * @return $this
     */
    public function setAddressCountry($addressCountry)
    {
        $this->container['addressCountry'] = $addressCountry;

        return $this;
    }

    /**
     * Gets addressLine1
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     * @param string $addressLine1
     * @return $this
     */
    public function setAddressLine1($addressLine1)
    {
        $this->container['addressLine1'] = $addressLine1;

        return $this;
    }

    /**
     * Gets addressLine2
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['addressLine2'];
    }

    /**
     * Sets addressLine2
     * @param string $addressLine2
     * @return $this
     */
    public function setAddressLine2($addressLine2)
    {
        $this->container['addressLine2'] = $addressLine2;

        return $this;
    }

    /**
     * Gets addressState
     * @return string
     */
    public function getAddressState()
    {
        return $this->container['addressState'];
    }

    /**
     * Sets addressState
     * @param string $addressState
     * @return $this
     */
    public function setAddressState($addressState)
    {
        $this->container['addressState'] = $addressState;

        return $this;
    }

    /**
     * Gets addressZip
     * @return string
     */
    public function getAddressZip()
    {
        return $this->container['addressZip'];
    }

    /**
     * Sets addressZip
     * @param string $addressZip
     * @return $this
     */
    public function setAddressZip($addressZip)
    {
        $this->container['addressZip'] = $addressZip;

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


