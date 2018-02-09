<?php
/**
 * BillingSourceOwner
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
 * BillingSourceOwner Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingSourceOwner implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BillingSourceOwner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'address' => '\Swagger\Client\Model\BillingAddress',
        'email' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'verifiedAddress' => '\Swagger\Client\Model\BillingAddress',
        'verifiedEmail' => 'string',
        'verifiedName' => 'string',
        'verifiedPhone' => 'string',
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
        'address' => 'address',
        'email' => 'email',
        'name' => 'name',
        'phone' => 'phone',
        'verifiedAddress' => 'verifiedAddress',
        'verifiedEmail' => 'verifiedEmail',
        'verifiedName' => 'verifiedName',
        'verifiedPhone' => 'verifiedPhone',
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
        'address' => 'setAddress',
        'email' => 'setEmail',
        'name' => 'setName',
        'phone' => 'setPhone',
        'verifiedAddress' => 'setVerifiedAddress',
        'verifiedEmail' => 'setVerifiedEmail',
        'verifiedName' => 'setVerifiedName',
        'verifiedPhone' => 'setVerifiedPhone',
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
        'address' => 'getAddress',
        'email' => 'getEmail',
        'name' => 'getName',
        'phone' => 'getPhone',
        'verifiedAddress' => 'getVerifiedAddress',
        'verifiedEmail' => 'getVerifiedEmail',
        'verifiedName' => 'getVerifiedName',
        'verifiedPhone' => 'getVerifiedPhone',
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['verifiedAddress'] = isset($data['verifiedAddress']) ? $data['verifiedAddress'] : null;
        $this->container['verifiedEmail'] = isset($data['verifiedEmail']) ? $data['verifiedEmail'] : null;
        $this->container['verifiedName'] = isset($data['verifiedName']) ? $data['verifiedName'] : null;
        $this->container['verifiedPhone'] = isset($data['verifiedPhone']) ? $data['verifiedPhone'] : null;
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
     * Gets address
     * @return \Swagger\Client\Model\BillingAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \Swagger\Client\Model\BillingAddress $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
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
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets verifiedAddress
     * @return \Swagger\Client\Model\BillingAddress
     */
    public function getVerifiedAddress()
    {
        return $this->container['verifiedAddress'];
    }

    /**
     * Sets verifiedAddress
     * @param \Swagger\Client\Model\BillingAddress $verifiedAddress
     * @return $this
     */
    public function setVerifiedAddress($verifiedAddress)
    {
        $this->container['verifiedAddress'] = $verifiedAddress;

        return $this;
    }

    /**
     * Gets verifiedEmail
     * @return string
     */
    public function getVerifiedEmail()
    {
        return $this->container['verifiedEmail'];
    }

    /**
     * Sets verifiedEmail
     * @param string $verifiedEmail
     * @return $this
     */
    public function setVerifiedEmail($verifiedEmail)
    {
        $this->container['verifiedEmail'] = $verifiedEmail;

        return $this;
    }

    /**
     * Gets verifiedName
     * @return string
     */
    public function getVerifiedName()
    {
        return $this->container['verifiedName'];
    }

    /**
     * Sets verifiedName
     * @param string $verifiedName
     * @return $this
     */
    public function setVerifiedName($verifiedName)
    {
        $this->container['verifiedName'] = $verifiedName;

        return $this;
    }

    /**
     * Gets verifiedPhone
     * @return string
     */
    public function getVerifiedPhone()
    {
        return $this->container['verifiedPhone'];
    }

    /**
     * Sets verifiedPhone
     * @param string $verifiedPhone
     * @return $this
     */
    public function setVerifiedPhone($verifiedPhone)
    {
        $this->container['verifiedPhone'] = $verifiedPhone;

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


