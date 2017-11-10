<?php
/**
 * BillingSubscription
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
 * OpenAPI spec version: 1.0.2-alpha.13
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
 * BillingSubscription Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingSubscription implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BillingSubscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'coupon' => 'string',
        'taxPercent' => 'double',
        'trialPeriodDays' => 'double',
        'subscribedPlans' => '\Swagger\Client\Model\BillingSubscriptionItem[]',
        'discount' => 'double',
        'status' => 'string',
        'cancelAtPeriodEnd' => 'bool',
        'created' => '\DateTime',
        'start' => '\DateTime',
        'endedAt' => '\DateTime',
        'trialEnd' => '\DateTime',
        'trialStart' => '\DateTime',
        'currentPeriodEnd' => '\DateTime',
        'currentPeriodStart' => '\DateTime',
        'canceledAt' => '\DateTime'
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
        'coupon' => 'coupon',
        'taxPercent' => 'taxPercent',
        'trialPeriodDays' => 'trialPeriodDays',
        'subscribedPlans' => 'subscribedPlans',
        'discount' => 'discount',
        'status' => 'status',
        'cancelAtPeriodEnd' => 'cancelAtPeriodEnd',
        'created' => 'created',
        'start' => 'start',
        'endedAt' => 'endedAt',
        'trialEnd' => 'trialEnd',
        'trialStart' => 'trialStart',
        'currentPeriodEnd' => 'currentPeriodEnd',
        'currentPeriodStart' => 'currentPeriodStart',
        'canceledAt' => 'canceledAt'
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
        'coupon' => 'setCoupon',
        'taxPercent' => 'setTaxPercent',
        'trialPeriodDays' => 'setTrialPeriodDays',
        'subscribedPlans' => 'setSubscribedPlans',
        'discount' => 'setDiscount',
        'status' => 'setStatus',
        'cancelAtPeriodEnd' => 'setCancelAtPeriodEnd',
        'created' => 'setCreated',
        'start' => 'setStart',
        'endedAt' => 'setEndedAt',
        'trialEnd' => 'setTrialEnd',
        'trialStart' => 'setTrialStart',
        'currentPeriodEnd' => 'setCurrentPeriodEnd',
        'currentPeriodStart' => 'setCurrentPeriodStart',
        'canceledAt' => 'setCanceledAt'
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
        'coupon' => 'getCoupon',
        'taxPercent' => 'getTaxPercent',
        'trialPeriodDays' => 'getTrialPeriodDays',
        'subscribedPlans' => 'getSubscribedPlans',
        'discount' => 'getDiscount',
        'status' => 'getStatus',
        'cancelAtPeriodEnd' => 'getCancelAtPeriodEnd',
        'created' => 'getCreated',
        'start' => 'getStart',
        'endedAt' => 'getEndedAt',
        'trialEnd' => 'getTrialEnd',
        'trialStart' => 'getTrialStart',
        'currentPeriodEnd' => 'getCurrentPeriodEnd',
        'currentPeriodStart' => 'getCurrentPeriodStart',
        'canceledAt' => 'getCanceledAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['coupon'] = isset($data['coupon']) ? $data['coupon'] : null;
        $this->container['taxPercent'] = isset($data['taxPercent']) ? $data['taxPercent'] : null;
        $this->container['trialPeriodDays'] = isset($data['trialPeriodDays']) ? $data['trialPeriodDays'] : null;
        $this->container['subscribedPlans'] = isset($data['subscribedPlans']) ? $data['subscribedPlans'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['cancelAtPeriodEnd'] = isset($data['cancelAtPeriodEnd']) ? $data['cancelAtPeriodEnd'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['endedAt'] = isset($data['endedAt']) ? $data['endedAt'] : null;
        $this->container['trialEnd'] = isset($data['trialEnd']) ? $data['trialEnd'] : null;
        $this->container['trialStart'] = isset($data['trialStart']) ? $data['trialStart'] : null;
        $this->container['currentPeriodEnd'] = isset($data['currentPeriodEnd']) ? $data['currentPeriodEnd'] : null;
        $this->container['currentPeriodStart'] = isset($data['currentPeriodStart']) ? $data['currentPeriodStart'] : null;
        $this->container['canceledAt'] = isset($data['canceledAt']) ? $data['canceledAt'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['subscribedPlans'] === null) {
            $invalid_properties[] = "'subscribedPlans' can't be null";
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
        if ($this->container['subscribedPlans'] === null) {
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
     * Gets coupon
     * @return string
     */
    public function getCoupon()
    {
        return $this->container['coupon'];
    }

    /**
     * Sets coupon
     * @param string $coupon
     * @return $this
     */
    public function setCoupon($coupon)
    {
        $this->container['coupon'] = $coupon;

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
     * Gets trialPeriodDays
     * @return double
     */
    public function getTrialPeriodDays()
    {
        return $this->container['trialPeriodDays'];
    }

    /**
     * Sets trialPeriodDays
     * @param double $trialPeriodDays
     * @return $this
     */
    public function setTrialPeriodDays($trialPeriodDays)
    {
        $this->container['trialPeriodDays'] = $trialPeriodDays;

        return $this;
    }

    /**
     * Gets subscribedPlans
     * @return \Swagger\Client\Model\BillingSubscriptionItem[]
     */
    public function getSubscribedPlans()
    {
        return $this->container['subscribedPlans'];
    }

    /**
     * Sets subscribedPlans
     * @param \Swagger\Client\Model\BillingSubscriptionItem[] $subscribedPlans
     * @return $this
     */
    public function setSubscribedPlans($subscribedPlans)
    {
        $this->container['subscribedPlans'] = $subscribedPlans;

        return $this;
    }

    /**
     * Gets discount
     * @return double
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     * @param double $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

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
     * Gets cancelAtPeriodEnd
     * @return bool
     */
    public function getCancelAtPeriodEnd()
    {
        return $this->container['cancelAtPeriodEnd'];
    }

    /**
     * Sets cancelAtPeriodEnd
     * @param bool $cancelAtPeriodEnd
     * @return $this
     */
    public function setCancelAtPeriodEnd($cancelAtPeriodEnd)
    {
        $this->container['cancelAtPeriodEnd'] = $cancelAtPeriodEnd;

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
     * Gets start
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     * @param \DateTime $start
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets endedAt
     * @return \DateTime
     */
    public function getEndedAt()
    {
        return $this->container['endedAt'];
    }

    /**
     * Sets endedAt
     * @param \DateTime $endedAt
     * @return $this
     */
    public function setEndedAt($endedAt)
    {
        $this->container['endedAt'] = $endedAt;

        return $this;
    }

    /**
     * Gets trialEnd
     * @return \DateTime
     */
    public function getTrialEnd()
    {
        return $this->container['trialEnd'];
    }

    /**
     * Sets trialEnd
     * @param \DateTime $trialEnd
     * @return $this
     */
    public function setTrialEnd($trialEnd)
    {
        $this->container['trialEnd'] = $trialEnd;

        return $this;
    }

    /**
     * Gets trialStart
     * @return \DateTime
     */
    public function getTrialStart()
    {
        return $this->container['trialStart'];
    }

    /**
     * Sets trialStart
     * @param \DateTime $trialStart
     * @return $this
     */
    public function setTrialStart($trialStart)
    {
        $this->container['trialStart'] = $trialStart;

        return $this;
    }

    /**
     * Gets currentPeriodEnd
     * @return \DateTime
     */
    public function getCurrentPeriodEnd()
    {
        return $this->container['currentPeriodEnd'];
    }

    /**
     * Sets currentPeriodEnd
     * @param \DateTime $currentPeriodEnd
     * @return $this
     */
    public function setCurrentPeriodEnd($currentPeriodEnd)
    {
        $this->container['currentPeriodEnd'] = $currentPeriodEnd;

        return $this;
    }

    /**
     * Gets currentPeriodStart
     * @return \DateTime
     */
    public function getCurrentPeriodStart()
    {
        return $this->container['currentPeriodStart'];
    }

    /**
     * Sets currentPeriodStart
     * @param \DateTime $currentPeriodStart
     * @return $this
     */
    public function setCurrentPeriodStart($currentPeriodStart)
    {
        $this->container['currentPeriodStart'] = $currentPeriodStart;

        return $this;
    }

    /**
     * Gets canceledAt
     * @return \DateTime
     */
    public function getCanceledAt()
    {
        return $this->container['canceledAt'];
    }

    /**
     * Sets canceledAt
     * @param \DateTime $canceledAt
     * @return $this
     */
    public function setCanceledAt($canceledAt)
    {
        $this->container['canceledAt'] = $canceledAt;

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


