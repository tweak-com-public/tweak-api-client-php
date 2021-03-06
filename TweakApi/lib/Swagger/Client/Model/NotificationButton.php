<?php
/**
 * NotificationButton
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
 * NotificationButton Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NotificationButton implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NotificationButton';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'type' => 'string',
        'label' => 'string',
        'action' => 'string',
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
        'type' => 'type',
        'label' => 'label',
        'action' => 'action',
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
        'type' => 'setType',
        'label' => 'setLabel',
        'action' => 'setAction',
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
        'type' => 'getType',
        'label' => 'getLabel',
        'action' => 'getAction',
        'id' => 'getId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_DEFAULT = 'default';
    const TYPE_INFO = 'info';
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const ACTION_NOTIFICATIONMARK_ASREAD = 'notification.markAs.read';
    const ACTION_TEAMBILLINGDETAILS = 'team.billing.details';
    const ACTION_TEAMBILLINGUPGRADE = 'team.billing.upgrade';
    const ACTION_TEAMBILLINGINVOICEDETAILS = 'team.billing.invoice.details';
    const ACTION_TEAMBILLINGCARD = 'team.billing.card';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DEFAULT,
            self::TYPE_INFO,
            self::TYPE_SUCCESS,
            self::TYPE_WARNING,
            self::TYPE_DANGER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_NOTIFICATIONMARK_ASREAD,
            self::ACTION_TEAMBILLINGDETAILS,
            self::ACTION_TEAMBILLINGUPGRADE,
            self::ACTION_TEAMBILLINGINVOICEDETAILS,
            self::ACTION_TEAMBILLINGCARD,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
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
        $allowed_values = array("default", "info", "success", "warning", "danger");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        if ($this->container['label'] === null) {
            $invalid_properties[] = "'label' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalid_properties[] = "'action' can't be null";
        }
        $allowed_values = array("notification.markAs.read", "team.billing.details", "team.billing.upgrade", "team.billing.invoice.details", "team.billing.card");
        if (!in_array($this->container['action'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'action', must be one of #{allowed_values}.";
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
        $allowed_values = array("default", "info", "success", "warning", "danger");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['label'] === null) {
            return false;
        }
        if ($this->container['action'] === null) {
            return false;
        }
        $allowed_values = array("notification.markAs.read", "team.billing.details", "team.billing.upgrade", "team.billing.invoice.details", "team.billing.card");
        if (!in_array($this->container['action'], $allowed_values)) {
            return false;
        }
        return true;
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
        $allowed_values = array('default', 'info', 'success', 'warning', 'danger');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'default', 'info', 'success', 'warning', 'danger'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets action
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        $allowed_values = array('notification.markAs.read', 'team.billing.details', 'team.billing.upgrade', 'team.billing.invoice.details', 'team.billing.card');
        if (!in_array($action, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'action', must be one of 'notification.markAs.read', 'team.billing.details', 'team.billing.upgrade', 'team.billing.invoice.details', 'team.billing.card'");
        }
        $this->container['action'] = $action;

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


