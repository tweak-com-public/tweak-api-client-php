<?php
/**
 * BillingInvoice
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
 * BillingInvoice Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingInvoice implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BillingInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'amountDue' => 'double',
        'attemptCount' => 'double',
        'attempted' => 'bool',
        'charged' => 'bool',
        'closed' => 'bool',
        'currency' => 'string',
        'customer' => 'string',
        'date' => '\DateTime',
        'description' => 'string',
        'endingBalance' => 'double',
        'forgiven' => 'bool',
        'lines' => '\Swagger\Client\Model\BillingInvoiceLine[]',
        'nextPaymentAttempt' => '\DateTime',
        'paid' => 'bool',
        'periodEnd' => '\DateTime',
        'periodStart' => '\DateTime',
        'number' => 'string',
        'reciptNumber' => 'string',
        'startingBalance' => 'double',
        'statementDescriptor' => 'string',
        'subscription' => 'string',
        'subscriptionProrationDate' => 'double',
        'subtotal' => 'double',
        'tax' => 'double',
        'total' => 'double'
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
        'amountDue' => 'amountDue',
        'attemptCount' => 'attemptCount',
        'attempted' => 'attempted',
        'charged' => 'charged',
        'closed' => 'closed',
        'currency' => 'currency',
        'customer' => 'customer',
        'date' => 'date',
        'description' => 'description',
        'endingBalance' => 'endingBalance',
        'forgiven' => 'forgiven',
        'lines' => 'lines',
        'nextPaymentAttempt' => 'nextPaymentAttempt',
        'paid' => 'paid',
        'periodEnd' => 'periodEnd',
        'periodStart' => 'periodStart',
        'number' => 'number',
        'reciptNumber' => 'reciptNumber',
        'startingBalance' => 'startingBalance',
        'statementDescriptor' => 'statementDescriptor',
        'subscription' => 'subscription',
        'subscriptionProrationDate' => 'subscriptionProrationDate',
        'subtotal' => 'subtotal',
        'tax' => 'tax',
        'total' => 'total'
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
        'amountDue' => 'setAmountDue',
        'attemptCount' => 'setAttemptCount',
        'attempted' => 'setAttempted',
        'charged' => 'setCharged',
        'closed' => 'setClosed',
        'currency' => 'setCurrency',
        'customer' => 'setCustomer',
        'date' => 'setDate',
        'description' => 'setDescription',
        'endingBalance' => 'setEndingBalance',
        'forgiven' => 'setForgiven',
        'lines' => 'setLines',
        'nextPaymentAttempt' => 'setNextPaymentAttempt',
        'paid' => 'setPaid',
        'periodEnd' => 'setPeriodEnd',
        'periodStart' => 'setPeriodStart',
        'number' => 'setNumber',
        'reciptNumber' => 'setReciptNumber',
        'startingBalance' => 'setStartingBalance',
        'statementDescriptor' => 'setStatementDescriptor',
        'subscription' => 'setSubscription',
        'subscriptionProrationDate' => 'setSubscriptionProrationDate',
        'subtotal' => 'setSubtotal',
        'tax' => 'setTax',
        'total' => 'setTotal'
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
        'amountDue' => 'getAmountDue',
        'attemptCount' => 'getAttemptCount',
        'attempted' => 'getAttempted',
        'charged' => 'getCharged',
        'closed' => 'getClosed',
        'currency' => 'getCurrency',
        'customer' => 'getCustomer',
        'date' => 'getDate',
        'description' => 'getDescription',
        'endingBalance' => 'getEndingBalance',
        'forgiven' => 'getForgiven',
        'lines' => 'getLines',
        'nextPaymentAttempt' => 'getNextPaymentAttempt',
        'paid' => 'getPaid',
        'periodEnd' => 'getPeriodEnd',
        'periodStart' => 'getPeriodStart',
        'number' => 'getNumber',
        'reciptNumber' => 'getReciptNumber',
        'startingBalance' => 'getStartingBalance',
        'statementDescriptor' => 'getStatementDescriptor',
        'subscription' => 'getSubscription',
        'subscriptionProrationDate' => 'getSubscriptionProrationDate',
        'subtotal' => 'getSubtotal',
        'tax' => 'getTax',
        'total' => 'getTotal'
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
        $this->container['amountDue'] = isset($data['amountDue']) ? $data['amountDue'] : null;
        $this->container['attemptCount'] = isset($data['attemptCount']) ? $data['attemptCount'] : null;
        $this->container['attempted'] = isset($data['attempted']) ? $data['attempted'] : null;
        $this->container['charged'] = isset($data['charged']) ? $data['charged'] : null;
        $this->container['closed'] = isset($data['closed']) ? $data['closed'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['endingBalance'] = isset($data['endingBalance']) ? $data['endingBalance'] : null;
        $this->container['forgiven'] = isset($data['forgiven']) ? $data['forgiven'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['nextPaymentAttempt'] = isset($data['nextPaymentAttempt']) ? $data['nextPaymentAttempt'] : null;
        $this->container['paid'] = isset($data['paid']) ? $data['paid'] : null;
        $this->container['periodEnd'] = isset($data['periodEnd']) ? $data['periodEnd'] : null;
        $this->container['periodStart'] = isset($data['periodStart']) ? $data['periodStart'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['reciptNumber'] = isset($data['reciptNumber']) ? $data['reciptNumber'] : null;
        $this->container['startingBalance'] = isset($data['startingBalance']) ? $data['startingBalance'] : null;
        $this->container['statementDescriptor'] = isset($data['statementDescriptor']) ? $data['statementDescriptor'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['subscriptionProrationDate'] = isset($data['subscriptionProrationDate']) ? $data['subscriptionProrationDate'] : null;
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        if ($this->container['id'] === null) {
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
     * Gets amountDue
     * @return double
     */
    public function getAmountDue()
    {
        return $this->container['amountDue'];
    }

    /**
     * Sets amountDue
     * @param double $amountDue
     * @return $this
     */
    public function setAmountDue($amountDue)
    {
        $this->container['amountDue'] = $amountDue;

        return $this;
    }

    /**
     * Gets attemptCount
     * @return double
     */
    public function getAttemptCount()
    {
        return $this->container['attemptCount'];
    }

    /**
     * Sets attemptCount
     * @param double $attemptCount
     * @return $this
     */
    public function setAttemptCount($attemptCount)
    {
        $this->container['attemptCount'] = $attemptCount;

        return $this;
    }

    /**
     * Gets attempted
     * @return bool
     */
    public function getAttempted()
    {
        return $this->container['attempted'];
    }

    /**
     * Sets attempted
     * @param bool $attempted
     * @return $this
     */
    public function setAttempted($attempted)
    {
        $this->container['attempted'] = $attempted;

        return $this;
    }

    /**
     * Gets charged
     * @return bool
     */
    public function getCharged()
    {
        return $this->container['charged'];
    }

    /**
     * Sets charged
     * @param bool $charged
     * @return $this
     */
    public function setCharged($charged)
    {
        $this->container['charged'] = $charged;

        return $this;
    }

    /**
     * Gets closed
     * @return bool
     */
    public function getClosed()
    {
        return $this->container['closed'];
    }

    /**
     * Sets closed
     * @param bool $closed
     * @return $this
     */
    public function setClosed($closed)
    {
        $this->container['closed'] = $closed;

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
     * Gets customer
     * @return string
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param string $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets date
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param \DateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
     * Gets endingBalance
     * @return double
     */
    public function getEndingBalance()
    {
        return $this->container['endingBalance'];
    }

    /**
     * Sets endingBalance
     * @param double $endingBalance
     * @return $this
     */
    public function setEndingBalance($endingBalance)
    {
        $this->container['endingBalance'] = $endingBalance;

        return $this;
    }

    /**
     * Gets forgiven
     * @return bool
     */
    public function getForgiven()
    {
        return $this->container['forgiven'];
    }

    /**
     * Sets forgiven
     * @param bool $forgiven
     * @return $this
     */
    public function setForgiven($forgiven)
    {
        $this->container['forgiven'] = $forgiven;

        return $this;
    }

    /**
     * Gets lines
     * @return \Swagger\Client\Model\BillingInvoiceLine[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     * @param \Swagger\Client\Model\BillingInvoiceLine[] $lines
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets nextPaymentAttempt
     * @return \DateTime
     */
    public function getNextPaymentAttempt()
    {
        return $this->container['nextPaymentAttempt'];
    }

    /**
     * Sets nextPaymentAttempt
     * @param \DateTime $nextPaymentAttempt
     * @return $this
     */
    public function setNextPaymentAttempt($nextPaymentAttempt)
    {
        $this->container['nextPaymentAttempt'] = $nextPaymentAttempt;

        return $this;
    }

    /**
     * Gets paid
     * @return bool
     */
    public function getPaid()
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     * @param bool $paid
     * @return $this
     */
    public function setPaid($paid)
    {
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets periodEnd
     * @return \DateTime
     */
    public function getPeriodEnd()
    {
        return $this->container['periodEnd'];
    }

    /**
     * Sets periodEnd
     * @param \DateTime $periodEnd
     * @return $this
     */
    public function setPeriodEnd($periodEnd)
    {
        $this->container['periodEnd'] = $periodEnd;

        return $this;
    }

    /**
     * Gets periodStart
     * @return \DateTime
     */
    public function getPeriodStart()
    {
        return $this->container['periodStart'];
    }

    /**
     * Sets periodStart
     * @param \DateTime $periodStart
     * @return $this
     */
    public function setPeriodStart($periodStart)
    {
        $this->container['periodStart'] = $periodStart;

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
     * Gets reciptNumber
     * @return string
     */
    public function getReciptNumber()
    {
        return $this->container['reciptNumber'];
    }

    /**
     * Sets reciptNumber
     * @param string $reciptNumber
     * @return $this
     */
    public function setReciptNumber($reciptNumber)
    {
        $this->container['reciptNumber'] = $reciptNumber;

        return $this;
    }

    /**
     * Gets startingBalance
     * @return double
     */
    public function getStartingBalance()
    {
        return $this->container['startingBalance'];
    }

    /**
     * Sets startingBalance
     * @param double $startingBalance
     * @return $this
     */
    public function setStartingBalance($startingBalance)
    {
        $this->container['startingBalance'] = $startingBalance;

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
     * Gets subscription
     * @return string
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     * @param string $subscription
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets subscriptionProrationDate
     * @return double
     */
    public function getSubscriptionProrationDate()
    {
        return $this->container['subscriptionProrationDate'];
    }

    /**
     * Sets subscriptionProrationDate
     * @param double $subscriptionProrationDate
     * @return $this
     */
    public function setSubscriptionProrationDate($subscriptionProrationDate)
    {
        $this->container['subscriptionProrationDate'] = $subscriptionProrationDate;

        return $this;
    }

    /**
     * Gets subtotal
     * @return double
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     * @param double $subtotal
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets tax
     * @return double
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     * @param double $tax
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets total
     * @return double
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     * @param double $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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


