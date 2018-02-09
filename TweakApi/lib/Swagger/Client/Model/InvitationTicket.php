<?php
/**
 * InvitationTicket
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
 * InvitationTicket Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InvitationTicket implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'InvitationTicket';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'message' => 'string',
        'token' => 'string',
        'inviteeEmail' => 'string',
        'targetModel' => 'string',
        'targetId' => 'string',
        'targetAttrs' => 'object',
        'status' => 'string',
        'notify' => 'bool',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'inviteeId' => 'string',
        'inviterId' => 'string',
        'targetTeamId' => 'string',
        'targetTeamMemberId' => 'string',
        'targetPortalId' => 'string',
        'targetPortalMemberId' => 'string',
        'targetTemplateId' => 'string',
        'targetDesignId' => 'string',
        'targetTemplateMemberId' => 'string',
        'targetDesignMemberId' => 'string',
        'targetImageFolderId' => 'string',
        'targetImageFolderMemberId' => 'string',
        'invitee' => '\Swagger\Client\Model\Customer',
        'inviter' => '\Swagger\Client\Model\TeamMember',
        'targetTeam' => '\Swagger\Client\Model\Team',
        'targetTeamMember' => '\Swagger\Client\Model\TeamMember',
        'targetPortal' => '\Swagger\Client\Model\Portal',
        'targetPortalMember' => '\Swagger\Client\Model\PortalMember',
        'targetTemplate' => '\Swagger\Client\Model\Template',
        'targetTemplateMember' => '\Swagger\Client\Model\TemplateMember',
        'targetImageFolder' => '\Swagger\Client\Model\ImageFolder',
        'targetImageFolderMember' => '\Swagger\Client\Model\ImageFolderMember',
        'targetDesign' => '\Swagger\Client\Model\Design',
        'targetDesignMember' => '\Swagger\Client\Model\DesignMember'
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
        'message' => 'message',
        'token' => 'token',
        'inviteeEmail' => 'inviteeEmail',
        'targetModel' => 'targetModel',
        'targetId' => 'targetId',
        'targetAttrs' => 'targetAttrs',
        'status' => 'status',
        'notify' => 'notify',
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'inviteeId' => 'inviteeId',
        'inviterId' => 'inviterId',
        'targetTeamId' => 'targetTeamId',
        'targetTeamMemberId' => 'targetTeamMemberId',
        'targetPortalId' => 'targetPortalId',
        'targetPortalMemberId' => 'targetPortalMemberId',
        'targetTemplateId' => 'targetTemplateId',
        'targetDesignId' => 'targetDesignId',
        'targetTemplateMemberId' => 'targetTemplateMemberId',
        'targetDesignMemberId' => 'targetDesignMemberId',
        'targetImageFolderId' => 'targetImageFolderId',
        'targetImageFolderMemberId' => 'targetImageFolderMemberId',
        'invitee' => 'invitee',
        'inviter' => 'inviter',
        'targetTeam' => 'targetTeam',
        'targetTeamMember' => 'targetTeamMember',
        'targetPortal' => 'targetPortal',
        'targetPortalMember' => 'targetPortalMember',
        'targetTemplate' => 'targetTemplate',
        'targetTemplateMember' => 'targetTemplateMember',
        'targetImageFolder' => 'targetImageFolder',
        'targetImageFolderMember' => 'targetImageFolderMember',
        'targetDesign' => 'targetDesign',
        'targetDesignMember' => 'targetDesignMember'
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
        'message' => 'setMessage',
        'token' => 'setToken',
        'inviteeEmail' => 'setInviteeEmail',
        'targetModel' => 'setTargetModel',
        'targetId' => 'setTargetId',
        'targetAttrs' => 'setTargetAttrs',
        'status' => 'setStatus',
        'notify' => 'setNotify',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'inviteeId' => 'setInviteeId',
        'inviterId' => 'setInviterId',
        'targetTeamId' => 'setTargetTeamId',
        'targetTeamMemberId' => 'setTargetTeamMemberId',
        'targetPortalId' => 'setTargetPortalId',
        'targetPortalMemberId' => 'setTargetPortalMemberId',
        'targetTemplateId' => 'setTargetTemplateId',
        'targetDesignId' => 'setTargetDesignId',
        'targetTemplateMemberId' => 'setTargetTemplateMemberId',
        'targetDesignMemberId' => 'setTargetDesignMemberId',
        'targetImageFolderId' => 'setTargetImageFolderId',
        'targetImageFolderMemberId' => 'setTargetImageFolderMemberId',
        'invitee' => 'setInvitee',
        'inviter' => 'setInviter',
        'targetTeam' => 'setTargetTeam',
        'targetTeamMember' => 'setTargetTeamMember',
        'targetPortal' => 'setTargetPortal',
        'targetPortalMember' => 'setTargetPortalMember',
        'targetTemplate' => 'setTargetTemplate',
        'targetTemplateMember' => 'setTargetTemplateMember',
        'targetImageFolder' => 'setTargetImageFolder',
        'targetImageFolderMember' => 'setTargetImageFolderMember',
        'targetDesign' => 'setTargetDesign',
        'targetDesignMember' => 'setTargetDesignMember'
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
        'message' => 'getMessage',
        'token' => 'getToken',
        'inviteeEmail' => 'getInviteeEmail',
        'targetModel' => 'getTargetModel',
        'targetId' => 'getTargetId',
        'targetAttrs' => 'getTargetAttrs',
        'status' => 'getStatus',
        'notify' => 'getNotify',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'inviteeId' => 'getInviteeId',
        'inviterId' => 'getInviterId',
        'targetTeamId' => 'getTargetTeamId',
        'targetTeamMemberId' => 'getTargetTeamMemberId',
        'targetPortalId' => 'getTargetPortalId',
        'targetPortalMemberId' => 'getTargetPortalMemberId',
        'targetTemplateId' => 'getTargetTemplateId',
        'targetDesignId' => 'getTargetDesignId',
        'targetTemplateMemberId' => 'getTargetTemplateMemberId',
        'targetDesignMemberId' => 'getTargetDesignMemberId',
        'targetImageFolderId' => 'getTargetImageFolderId',
        'targetImageFolderMemberId' => 'getTargetImageFolderMemberId',
        'invitee' => 'getInvitee',
        'inviter' => 'getInviter',
        'targetTeam' => 'getTargetTeam',
        'targetTeamMember' => 'getTargetTeamMember',
        'targetPortal' => 'getTargetPortal',
        'targetPortalMember' => 'getTargetPortalMember',
        'targetTemplate' => 'getTargetTemplate',
        'targetTemplateMember' => 'getTargetTemplateMember',
        'targetImageFolder' => 'getTargetImageFolder',
        'targetImageFolderMember' => 'getTargetImageFolderMember',
        'targetDesign' => 'getTargetDesign',
        'targetDesignMember' => 'getTargetDesignMember'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TARGET_MODEL_TEAM = 'Team';
    const TARGET_MODEL_PORTAL = 'Portal';
    const TARGET_MODEL_TEMPLATE = 'Template';
    const TARGET_MODEL_IMAGE_FOLDER = 'ImageFolder';
    const TARGET_MODEL_DESIGN = 'Design';
    const STATUS_PENDING = 'pending';
    const STATUS_ACCEPTED = 'accepted';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTargetModelAllowableValues()
    {
        return [
            self::TARGET_MODEL_TEAM,
            self::TARGET_MODEL_PORTAL,
            self::TARGET_MODEL_TEMPLATE,
            self::TARGET_MODEL_IMAGE_FOLDER,
            self::TARGET_MODEL_DESIGN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_ACCEPTED,
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : '';
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['inviteeEmail'] = isset($data['inviteeEmail']) ? $data['inviteeEmail'] : null;
        $this->container['targetModel'] = isset($data['targetModel']) ? $data['targetModel'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['targetAttrs'] = isset($data['targetAttrs']) ? $data['targetAttrs'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['notify'] = isset($data['notify']) ? $data['notify'] : true;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['inviteeId'] = isset($data['inviteeId']) ? $data['inviteeId'] : null;
        $this->container['inviterId'] = isset($data['inviterId']) ? $data['inviterId'] : null;
        $this->container['targetTeamId'] = isset($data['targetTeamId']) ? $data['targetTeamId'] : null;
        $this->container['targetTeamMemberId'] = isset($data['targetTeamMemberId']) ? $data['targetTeamMemberId'] : null;
        $this->container['targetPortalId'] = isset($data['targetPortalId']) ? $data['targetPortalId'] : null;
        $this->container['targetPortalMemberId'] = isset($data['targetPortalMemberId']) ? $data['targetPortalMemberId'] : null;
        $this->container['targetTemplateId'] = isset($data['targetTemplateId']) ? $data['targetTemplateId'] : null;
        $this->container['targetDesignId'] = isset($data['targetDesignId']) ? $data['targetDesignId'] : null;
        $this->container['targetTemplateMemberId'] = isset($data['targetTemplateMemberId']) ? $data['targetTemplateMemberId'] : null;
        $this->container['targetDesignMemberId'] = isset($data['targetDesignMemberId']) ? $data['targetDesignMemberId'] : null;
        $this->container['targetImageFolderId'] = isset($data['targetImageFolderId']) ? $data['targetImageFolderId'] : null;
        $this->container['targetImageFolderMemberId'] = isset($data['targetImageFolderMemberId']) ? $data['targetImageFolderMemberId'] : null;
        $this->container['invitee'] = isset($data['invitee']) ? $data['invitee'] : null;
        $this->container['inviter'] = isset($data['inviter']) ? $data['inviter'] : null;
        $this->container['targetTeam'] = isset($data['targetTeam']) ? $data['targetTeam'] : null;
        $this->container['targetTeamMember'] = isset($data['targetTeamMember']) ? $data['targetTeamMember'] : null;
        $this->container['targetPortal'] = isset($data['targetPortal']) ? $data['targetPortal'] : null;
        $this->container['targetPortalMember'] = isset($data['targetPortalMember']) ? $data['targetPortalMember'] : null;
        $this->container['targetTemplate'] = isset($data['targetTemplate']) ? $data['targetTemplate'] : null;
        $this->container['targetTemplateMember'] = isset($data['targetTemplateMember']) ? $data['targetTemplateMember'] : null;
        $this->container['targetImageFolder'] = isset($data['targetImageFolder']) ? $data['targetImageFolder'] : null;
        $this->container['targetImageFolderMember'] = isset($data['targetImageFolderMember']) ? $data['targetImageFolderMember'] : null;
        $this->container['targetDesign'] = isset($data['targetDesign']) ? $data['targetDesign'] : null;
        $this->container['targetDesignMember'] = isset($data['targetDesignMember']) ? $data['targetDesignMember'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['targetModel'] === null) {
            $invalid_properties[] = "'targetModel' can't be null";
        }
        $allowed_values = array("Team", "Portal", "Template", "ImageFolder", "Design");
        if (!in_array($this->container['targetModel'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'targetModel', must be one of #{allowed_values}.";
        }

        if ($this->container['targetId'] === null) {
            $invalid_properties[] = "'targetId' can't be null";
        }
        $allowed_values = array("pending", "accepted");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
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
        if ($this->container['targetModel'] === null) {
            return false;
        }
        $allowed_values = array("Team", "Portal", "Template", "ImageFolder", "Design");
        if (!in_array($this->container['targetModel'], $allowed_values)) {
            return false;
        }
        if ($this->container['targetId'] === null) {
            return false;
        }
        $allowed_values = array("pending", "accepted");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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
     * Gets inviteeEmail
     * @return string
     */
    public function getInviteeEmail()
    {
        return $this->container['inviteeEmail'];
    }

    /**
     * Sets inviteeEmail
     * @param string $inviteeEmail
     * @return $this
     */
    public function setInviteeEmail($inviteeEmail)
    {
        $this->container['inviteeEmail'] = $inviteeEmail;

        return $this;
    }

    /**
     * Gets targetModel
     * @return string
     */
    public function getTargetModel()
    {
        return $this->container['targetModel'];
    }

    /**
     * Sets targetModel
     * @param string $targetModel
     * @return $this
     */
    public function setTargetModel($targetModel)
    {
        $allowed_values = array('Team', 'Portal', 'Template', 'ImageFolder', 'Design');
        if (!in_array($targetModel, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'targetModel', must be one of 'Team', 'Portal', 'Template', 'ImageFolder', 'Design'");
        }
        $this->container['targetModel'] = $targetModel;

        return $this;
    }

    /**
     * Gets targetId
     * @return string
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     * @param string $targetId
     * @return $this
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets targetAttrs
     * @return object
     */
    public function getTargetAttrs()
    {
        return $this->container['targetAttrs'];
    }

    /**
     * Sets targetAttrs
     * @param object $targetAttrs
     * @return $this
     */
    public function setTargetAttrs($targetAttrs)
    {
        $this->container['targetAttrs'] = $targetAttrs;

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
        $allowed_values = array('pending', 'accepted');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'pending', 'accepted'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets notify
     * @return bool
     */
    public function getNotify()
    {
        return $this->container['notify'];
    }

    /**
     * Sets notify
     * @param bool $notify
     * @return $this
     */
    public function setNotify($notify)
    {
        $this->container['notify'] = $notify;

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
     * Gets inviteeId
     * @return string
     */
    public function getInviteeId()
    {
        return $this->container['inviteeId'];
    }

    /**
     * Sets inviteeId
     * @param string $inviteeId
     * @return $this
     */
    public function setInviteeId($inviteeId)
    {
        $this->container['inviteeId'] = $inviteeId;

        return $this;
    }

    /**
     * Gets inviterId
     * @return string
     */
    public function getInviterId()
    {
        return $this->container['inviterId'];
    }

    /**
     * Sets inviterId
     * @param string $inviterId
     * @return $this
     */
    public function setInviterId($inviterId)
    {
        $this->container['inviterId'] = $inviterId;

        return $this;
    }

    /**
     * Gets targetTeamId
     * @return string
     */
    public function getTargetTeamId()
    {
        return $this->container['targetTeamId'];
    }

    /**
     * Sets targetTeamId
     * @param string $targetTeamId
     * @return $this
     */
    public function setTargetTeamId($targetTeamId)
    {
        $this->container['targetTeamId'] = $targetTeamId;

        return $this;
    }

    /**
     * Gets targetTeamMemberId
     * @return string
     */
    public function getTargetTeamMemberId()
    {
        return $this->container['targetTeamMemberId'];
    }

    /**
     * Sets targetTeamMemberId
     * @param string $targetTeamMemberId
     * @return $this
     */
    public function setTargetTeamMemberId($targetTeamMemberId)
    {
        $this->container['targetTeamMemberId'] = $targetTeamMemberId;

        return $this;
    }

    /**
     * Gets targetPortalId
     * @return string
     */
    public function getTargetPortalId()
    {
        return $this->container['targetPortalId'];
    }

    /**
     * Sets targetPortalId
     * @param string $targetPortalId
     * @return $this
     */
    public function setTargetPortalId($targetPortalId)
    {
        $this->container['targetPortalId'] = $targetPortalId;

        return $this;
    }

    /**
     * Gets targetPortalMemberId
     * @return string
     */
    public function getTargetPortalMemberId()
    {
        return $this->container['targetPortalMemberId'];
    }

    /**
     * Sets targetPortalMemberId
     * @param string $targetPortalMemberId
     * @return $this
     */
    public function setTargetPortalMemberId($targetPortalMemberId)
    {
        $this->container['targetPortalMemberId'] = $targetPortalMemberId;

        return $this;
    }

    /**
     * Gets targetTemplateId
     * @return string
     */
    public function getTargetTemplateId()
    {
        return $this->container['targetTemplateId'];
    }

    /**
     * Sets targetTemplateId
     * @param string $targetTemplateId
     * @return $this
     */
    public function setTargetTemplateId($targetTemplateId)
    {
        $this->container['targetTemplateId'] = $targetTemplateId;

        return $this;
    }

    /**
     * Gets targetDesignId
     * @return string
     */
    public function getTargetDesignId()
    {
        return $this->container['targetDesignId'];
    }

    /**
     * Sets targetDesignId
     * @param string $targetDesignId
     * @return $this
     */
    public function setTargetDesignId($targetDesignId)
    {
        $this->container['targetDesignId'] = $targetDesignId;

        return $this;
    }

    /**
     * Gets targetTemplateMemberId
     * @return string
     */
    public function getTargetTemplateMemberId()
    {
        return $this->container['targetTemplateMemberId'];
    }

    /**
     * Sets targetTemplateMemberId
     * @param string $targetTemplateMemberId
     * @return $this
     */
    public function setTargetTemplateMemberId($targetTemplateMemberId)
    {
        $this->container['targetTemplateMemberId'] = $targetTemplateMemberId;

        return $this;
    }

    /**
     * Gets targetDesignMemberId
     * @return string
     */
    public function getTargetDesignMemberId()
    {
        return $this->container['targetDesignMemberId'];
    }

    /**
     * Sets targetDesignMemberId
     * @param string $targetDesignMemberId
     * @return $this
     */
    public function setTargetDesignMemberId($targetDesignMemberId)
    {
        $this->container['targetDesignMemberId'] = $targetDesignMemberId;

        return $this;
    }

    /**
     * Gets targetImageFolderId
     * @return string
     */
    public function getTargetImageFolderId()
    {
        return $this->container['targetImageFolderId'];
    }

    /**
     * Sets targetImageFolderId
     * @param string $targetImageFolderId
     * @return $this
     */
    public function setTargetImageFolderId($targetImageFolderId)
    {
        $this->container['targetImageFolderId'] = $targetImageFolderId;

        return $this;
    }

    /**
     * Gets targetImageFolderMemberId
     * @return string
     */
    public function getTargetImageFolderMemberId()
    {
        return $this->container['targetImageFolderMemberId'];
    }

    /**
     * Sets targetImageFolderMemberId
     * @param string $targetImageFolderMemberId
     * @return $this
     */
    public function setTargetImageFolderMemberId($targetImageFolderMemberId)
    {
        $this->container['targetImageFolderMemberId'] = $targetImageFolderMemberId;

        return $this;
    }

    /**
     * Gets invitee
     * @return \Swagger\Client\Model\Customer
     */
    public function getInvitee()
    {
        return $this->container['invitee'];
    }

    /**
     * Sets invitee
     * @param \Swagger\Client\Model\Customer $invitee
     * @return $this
     */
    public function setInvitee($invitee)
    {
        $this->container['invitee'] = $invitee;

        return $this;
    }

    /**
     * Gets inviter
     * @return \Swagger\Client\Model\TeamMember
     */
    public function getInviter()
    {
        return $this->container['inviter'];
    }

    /**
     * Sets inviter
     * @param \Swagger\Client\Model\TeamMember $inviter
     * @return $this
     */
    public function setInviter($inviter)
    {
        $this->container['inviter'] = $inviter;

        return $this;
    }

    /**
     * Gets targetTeam
     * @return \Swagger\Client\Model\Team
     */
    public function getTargetTeam()
    {
        return $this->container['targetTeam'];
    }

    /**
     * Sets targetTeam
     * @param \Swagger\Client\Model\Team $targetTeam
     * @return $this
     */
    public function setTargetTeam($targetTeam)
    {
        $this->container['targetTeam'] = $targetTeam;

        return $this;
    }

    /**
     * Gets targetTeamMember
     * @return \Swagger\Client\Model\TeamMember
     */
    public function getTargetTeamMember()
    {
        return $this->container['targetTeamMember'];
    }

    /**
     * Sets targetTeamMember
     * @param \Swagger\Client\Model\TeamMember $targetTeamMember
     * @return $this
     */
    public function setTargetTeamMember($targetTeamMember)
    {
        $this->container['targetTeamMember'] = $targetTeamMember;

        return $this;
    }

    /**
     * Gets targetPortal
     * @return \Swagger\Client\Model\Portal
     */
    public function getTargetPortal()
    {
        return $this->container['targetPortal'];
    }

    /**
     * Sets targetPortal
     * @param \Swagger\Client\Model\Portal $targetPortal
     * @return $this
     */
    public function setTargetPortal($targetPortal)
    {
        $this->container['targetPortal'] = $targetPortal;

        return $this;
    }

    /**
     * Gets targetPortalMember
     * @return \Swagger\Client\Model\PortalMember
     */
    public function getTargetPortalMember()
    {
        return $this->container['targetPortalMember'];
    }

    /**
     * Sets targetPortalMember
     * @param \Swagger\Client\Model\PortalMember $targetPortalMember
     * @return $this
     */
    public function setTargetPortalMember($targetPortalMember)
    {
        $this->container['targetPortalMember'] = $targetPortalMember;

        return $this;
    }

    /**
     * Gets targetTemplate
     * @return \Swagger\Client\Model\Template
     */
    public function getTargetTemplate()
    {
        return $this->container['targetTemplate'];
    }

    /**
     * Sets targetTemplate
     * @param \Swagger\Client\Model\Template $targetTemplate
     * @return $this
     */
    public function setTargetTemplate($targetTemplate)
    {
        $this->container['targetTemplate'] = $targetTemplate;

        return $this;
    }

    /**
     * Gets targetTemplateMember
     * @return \Swagger\Client\Model\TemplateMember
     */
    public function getTargetTemplateMember()
    {
        return $this->container['targetTemplateMember'];
    }

    /**
     * Sets targetTemplateMember
     * @param \Swagger\Client\Model\TemplateMember $targetTemplateMember
     * @return $this
     */
    public function setTargetTemplateMember($targetTemplateMember)
    {
        $this->container['targetTemplateMember'] = $targetTemplateMember;

        return $this;
    }

    /**
     * Gets targetImageFolder
     * @return \Swagger\Client\Model\ImageFolder
     */
    public function getTargetImageFolder()
    {
        return $this->container['targetImageFolder'];
    }

    /**
     * Sets targetImageFolder
     * @param \Swagger\Client\Model\ImageFolder $targetImageFolder
     * @return $this
     */
    public function setTargetImageFolder($targetImageFolder)
    {
        $this->container['targetImageFolder'] = $targetImageFolder;

        return $this;
    }

    /**
     * Gets targetImageFolderMember
     * @return \Swagger\Client\Model\ImageFolderMember
     */
    public function getTargetImageFolderMember()
    {
        return $this->container['targetImageFolderMember'];
    }

    /**
     * Sets targetImageFolderMember
     * @param \Swagger\Client\Model\ImageFolderMember $targetImageFolderMember
     * @return $this
     */
    public function setTargetImageFolderMember($targetImageFolderMember)
    {
        $this->container['targetImageFolderMember'] = $targetImageFolderMember;

        return $this;
    }

    /**
     * Gets targetDesign
     * @return \Swagger\Client\Model\Design
     */
    public function getTargetDesign()
    {
        return $this->container['targetDesign'];
    }

    /**
     * Sets targetDesign
     * @param \Swagger\Client\Model\Design $targetDesign
     * @return $this
     */
    public function setTargetDesign($targetDesign)
    {
        $this->container['targetDesign'] = $targetDesign;

        return $this;
    }

    /**
     * Gets targetDesignMember
     * @return \Swagger\Client\Model\DesignMember
     */
    public function getTargetDesignMember()
    {
        return $this->container['targetDesignMember'];
    }

    /**
     * Sets targetDesignMember
     * @param \Swagger\Client\Model\DesignMember $targetDesignMember
     * @return $this
     */
    public function setTargetDesignMember($targetDesignMember)
    {
        $this->container['targetDesignMember'] = $targetDesignMember;

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


