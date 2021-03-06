<?php
/**
 * Design
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
 * Design Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Design implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Design';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'colors' => 'string[]',
        'image' => 'string',
        'name' => 'string',
        'object' => 'object',
        'thumbnail' => 'string',
        'description' => 'string',
        'purpose' => 'string',
        'status' => 'string',
        'formData' => 'object[]',
        'highResPdfUrl' => 'string',
        'proofPdfUrl' => 'string',
        'jpegsUrl' => 'string',
        'edited' => '\DateTime',
        'expired' => '\DateTime',
        'path' => 'string',
        'sentForApproval' => '\DateTime',
        'approved' => '\DateTime',
        'shared' => '\DateTime',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'dynamicDataId' => 'string',
        'teamId' => 'string',
        'requesterId' => 'string',
        'assigneeId' => 'string',
        'reviewerId' => 'string',
        'templateId' => 'string',
        'portalId' => 'string',
        'rejectionCommentId' => 'string',
        'folderId' => 'string',
        'tags' => '\Swagger\Client\Model\Tag[]',
        'template' => '\Swagger\Client\Model\Template',
        'portal' => '\Swagger\Client\Model\Portal',
        'team' => '\Swagger\Client\Model\Team',
        'comments' => '\Swagger\Client\Model\DesignComment[]',
        'rejectionComment' => '\Swagger\Client\Model\DesignComment',
        'exports' => '\Swagger\Client\Model\DesignExport[]',
        'requester' => '\Swagger\Client\Model\TeamMember',
        'assignee' => '\Swagger\Client\Model\TeamMember',
        'reviewer' => '\Swagger\Client\Model\TeamMember',
        'commenters' => '\Swagger\Client\Model\TeamMember[]',
        'folder' => '\Swagger\Client\Model\DesignFolder',
        'permission' => '\Swagger\Client\Model\DesignPermissionSet',
        'members' => '\Swagger\Client\Model\TeamMember[]',
        'designMembers' => '\Swagger\Client\Model\DesignMember[]',
        'dynamicData' => '\Swagger\Client\Model\DynamicData'
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
        'colors' => 'colors',
        'image' => 'image',
        'name' => 'name',
        'object' => 'object',
        'thumbnail' => 'thumbnail',
        'description' => 'description',
        'purpose' => 'purpose',
        'status' => 'status',
        'formData' => 'formData',
        'highResPdfUrl' => 'highResPdfUrl',
        'proofPdfUrl' => 'proofPdfUrl',
        'jpegsUrl' => 'jpegsUrl',
        'edited' => 'edited',
        'expired' => 'expired',
        'path' => 'path',
        'sentForApproval' => 'sentForApproval',
        'approved' => 'approved',
        'shared' => 'shared',
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'dynamicDataId' => 'dynamicDataId',
        'teamId' => 'teamId',
        'requesterId' => 'requesterId',
        'assigneeId' => 'assigneeId',
        'reviewerId' => 'reviewerId',
        'templateId' => 'templateId',
        'portalId' => 'portalId',
        'rejectionCommentId' => 'rejectionCommentId',
        'folderId' => 'folderId',
        'tags' => 'tags',
        'template' => 'template',
        'portal' => 'portal',
        'team' => 'team',
        'comments' => 'comments',
        'rejectionComment' => 'rejectionComment',
        'exports' => 'exports',
        'requester' => 'requester',
        'assignee' => 'assignee',
        'reviewer' => 'reviewer',
        'commenters' => 'commenters',
        'folder' => 'folder',
        'permission' => 'permission',
        'members' => 'members',
        'designMembers' => 'designMembers',
        'dynamicData' => 'dynamicData'
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
        'colors' => 'setColors',
        'image' => 'setImage',
        'name' => 'setName',
        'object' => 'setObject',
        'thumbnail' => 'setThumbnail',
        'description' => 'setDescription',
        'purpose' => 'setPurpose',
        'status' => 'setStatus',
        'formData' => 'setFormData',
        'highResPdfUrl' => 'setHighResPdfUrl',
        'proofPdfUrl' => 'setProofPdfUrl',
        'jpegsUrl' => 'setJpegsUrl',
        'edited' => 'setEdited',
        'expired' => 'setExpired',
        'path' => 'setPath',
        'sentForApproval' => 'setSentForApproval',
        'approved' => 'setApproved',
        'shared' => 'setShared',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'dynamicDataId' => 'setDynamicDataId',
        'teamId' => 'setTeamId',
        'requesterId' => 'setRequesterId',
        'assigneeId' => 'setAssigneeId',
        'reviewerId' => 'setReviewerId',
        'templateId' => 'setTemplateId',
        'portalId' => 'setPortalId',
        'rejectionCommentId' => 'setRejectionCommentId',
        'folderId' => 'setFolderId',
        'tags' => 'setTags',
        'template' => 'setTemplate',
        'portal' => 'setPortal',
        'team' => 'setTeam',
        'comments' => 'setComments',
        'rejectionComment' => 'setRejectionComment',
        'exports' => 'setExports',
        'requester' => 'setRequester',
        'assignee' => 'setAssignee',
        'reviewer' => 'setReviewer',
        'commenters' => 'setCommenters',
        'folder' => 'setFolder',
        'permission' => 'setPermission',
        'members' => 'setMembers',
        'designMembers' => 'setDesignMembers',
        'dynamicData' => 'setDynamicData'
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
        'colors' => 'getColors',
        'image' => 'getImage',
        'name' => 'getName',
        'object' => 'getObject',
        'thumbnail' => 'getThumbnail',
        'description' => 'getDescription',
        'purpose' => 'getPurpose',
        'status' => 'getStatus',
        'formData' => 'getFormData',
        'highResPdfUrl' => 'getHighResPdfUrl',
        'proofPdfUrl' => 'getProofPdfUrl',
        'jpegsUrl' => 'getJpegsUrl',
        'edited' => 'getEdited',
        'expired' => 'getExpired',
        'path' => 'getPath',
        'sentForApproval' => 'getSentForApproval',
        'approved' => 'getApproved',
        'shared' => 'getShared',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'dynamicDataId' => 'getDynamicDataId',
        'teamId' => 'getTeamId',
        'requesterId' => 'getRequesterId',
        'assigneeId' => 'getAssigneeId',
        'reviewerId' => 'getReviewerId',
        'templateId' => 'getTemplateId',
        'portalId' => 'getPortalId',
        'rejectionCommentId' => 'getRejectionCommentId',
        'folderId' => 'getFolderId',
        'tags' => 'getTags',
        'template' => 'getTemplate',
        'portal' => 'getPortal',
        'team' => 'getTeam',
        'comments' => 'getComments',
        'rejectionComment' => 'getRejectionComment',
        'exports' => 'getExports',
        'requester' => 'getRequester',
        'assignee' => 'getAssignee',
        'reviewer' => 'getReviewer',
        'commenters' => 'getCommenters',
        'folder' => 'getFolder',
        'permission' => 'getPermission',
        'members' => 'getMembers',
        'designMembers' => 'getDesignMembers',
        'dynamicData' => 'getDynamicData'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const PURPOSE_NONE = 'none';
    const PURPOSE_PRINT_ORDER = 'printOrder';
    const STATUS_PENDING_ACTION = 'pendingAction';
    const STATUS_PENDING_APPROVAL = 'pendingApproval';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPurposeAllowableValues()
    {
        return [
            self::PURPOSE_NONE,
            self::PURPOSE_PRINT_ORDER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING_ACTION,
            self::STATUS_PENDING_APPROVAL,
            self::STATUS_APPROVED,
            self::STATUS_REJECTED,
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
        $this->container['colors'] = isset($data['colors']) ? $data['colors'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : '';
        $this->container['purpose'] = isset($data['purpose']) ? $data['purpose'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['formData'] = isset($data['formData']) ? $data['formData'] : null;
        $this->container['highResPdfUrl'] = isset($data['highResPdfUrl']) ? $data['highResPdfUrl'] : '';
        $this->container['proofPdfUrl'] = isset($data['proofPdfUrl']) ? $data['proofPdfUrl'] : '';
        $this->container['jpegsUrl'] = isset($data['jpegsUrl']) ? $data['jpegsUrl'] : '';
        $this->container['edited'] = isset($data['edited']) ? $data['edited'] : null;
        $this->container['expired'] = isset($data['expired']) ? $data['expired'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : '/';
        $this->container['sentForApproval'] = isset($data['sentForApproval']) ? $data['sentForApproval'] : null;
        $this->container['approved'] = isset($data['approved']) ? $data['approved'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['dynamicDataId'] = isset($data['dynamicDataId']) ? $data['dynamicDataId'] : null;
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['requesterId'] = isset($data['requesterId']) ? $data['requesterId'] : null;
        $this->container['assigneeId'] = isset($data['assigneeId']) ? $data['assigneeId'] : null;
        $this->container['reviewerId'] = isset($data['reviewerId']) ? $data['reviewerId'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['portalId'] = isset($data['portalId']) ? $data['portalId'] : null;
        $this->container['rejectionCommentId'] = isset($data['rejectionCommentId']) ? $data['rejectionCommentId'] : null;
        $this->container['folderId'] = isset($data['folderId']) ? $data['folderId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['portal'] = isset($data['portal']) ? $data['portal'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['rejectionComment'] = isset($data['rejectionComment']) ? $data['rejectionComment'] : null;
        $this->container['exports'] = isset($data['exports']) ? $data['exports'] : null;
        $this->container['requester'] = isset($data['requester']) ? $data['requester'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['reviewer'] = isset($data['reviewer']) ? $data['reviewer'] : null;
        $this->container['commenters'] = isset($data['commenters']) ? $data['commenters'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['designMembers'] = isset($data['designMembers']) ? $data['designMembers'] : null;
        $this->container['dynamicData'] = isset($data['dynamicData']) ? $data['dynamicData'] : null;
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
        if ($this->container['object'] === null) {
            $invalid_properties[] = "'object' can't be null";
        }
        $allowed_values = array("none", "printOrder");
        if (!in_array($this->container['purpose'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'purpose', must be one of #{allowed_values}.";
        }

        $allowed_values = array("pendingAction", "pendingApproval", "approved", "rejected");
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
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['object'] === null) {
            return false;
        }
        $allowed_values = array("none", "printOrder");
        if (!in_array($this->container['purpose'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("pendingAction", "pendingApproval", "approved", "rejected");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets colors
     * @return string[]
     */
    public function getColors()
    {
        return $this->container['colors'];
    }

    /**
     * Sets colors
     * @param string[] $colors
     * @return $this
     */
    public function setColors($colors)
    {
        $this->container['colors'] = $colors;

        return $this;
    }

    /**
     * Gets image
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

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
     * Gets object
     * @return object
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     * @param object $object
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets thumbnail
     * @return string
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     * @param string $thumbnail
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

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
     * Gets purpose
     * @return string
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     * @param string $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $allowed_values = array('none', 'printOrder');
        if (!in_array($purpose, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'purpose', must be one of 'none', 'printOrder'");
        }
        $this->container['purpose'] = $purpose;

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
        $allowed_values = array('pendingAction', 'pendingApproval', 'approved', 'rejected');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'pendingAction', 'pendingApproval', 'approved', 'rejected'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets formData
     * @return object[]
     */
    public function getFormData()
    {
        return $this->container['formData'];
    }

    /**
     * Sets formData
     * @param object[] $formData
     * @return $this
     */
    public function setFormData($formData)
    {
        $this->container['formData'] = $formData;

        return $this;
    }

    /**
     * Gets highResPdfUrl
     * @return string
     */
    public function getHighResPdfUrl()
    {
        return $this->container['highResPdfUrl'];
    }

    /**
     * Sets highResPdfUrl
     * @param string $highResPdfUrl
     * @return $this
     */
    public function setHighResPdfUrl($highResPdfUrl)
    {
        $this->container['highResPdfUrl'] = $highResPdfUrl;

        return $this;
    }

    /**
     * Gets proofPdfUrl
     * @return string
     */
    public function getProofPdfUrl()
    {
        return $this->container['proofPdfUrl'];
    }

    /**
     * Sets proofPdfUrl
     * @param string $proofPdfUrl
     * @return $this
     */
    public function setProofPdfUrl($proofPdfUrl)
    {
        $this->container['proofPdfUrl'] = $proofPdfUrl;

        return $this;
    }

    /**
     * Gets jpegsUrl
     * @return string
     */
    public function getJpegsUrl()
    {
        return $this->container['jpegsUrl'];
    }

    /**
     * Sets jpegsUrl
     * @param string $jpegsUrl
     * @return $this
     */
    public function setJpegsUrl($jpegsUrl)
    {
        $this->container['jpegsUrl'] = $jpegsUrl;

        return $this;
    }

    /**
     * Gets edited
     * @return \DateTime
     */
    public function getEdited()
    {
        return $this->container['edited'];
    }

    /**
     * Sets edited
     * @param \DateTime $edited
     * @return $this
     */
    public function setEdited($edited)
    {
        $this->container['edited'] = $edited;

        return $this;
    }

    /**
     * Gets expired
     * @return \DateTime
     */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
     * Sets expired
     * @param \DateTime $expired
     * @return $this
     */
    public function setExpired($expired)
    {
        $this->container['expired'] = $expired;

        return $this;
    }

    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets sentForApproval
     * @return \DateTime
     */
    public function getSentForApproval()
    {
        return $this->container['sentForApproval'];
    }

    /**
     * Sets sentForApproval
     * @param \DateTime $sentForApproval
     * @return $this
     */
    public function setSentForApproval($sentForApproval)
    {
        $this->container['sentForApproval'] = $sentForApproval;

        return $this;
    }

    /**
     * Gets approved
     * @return \DateTime
     */
    public function getApproved()
    {
        return $this->container['approved'];
    }

    /**
     * Sets approved
     * @param \DateTime $approved
     * @return $this
     */
    public function setApproved($approved)
    {
        $this->container['approved'] = $approved;

        return $this;
    }

    /**
     * Gets shared
     * @return \DateTime
     */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared
     * @param \DateTime $shared
     * @return $this
     */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;

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
     * Gets dynamicDataId
     * @return string
     */
    public function getDynamicDataId()
    {
        return $this->container['dynamicDataId'];
    }

    /**
     * Sets dynamicDataId
     * @param string $dynamicDataId
     * @return $this
     */
    public function setDynamicDataId($dynamicDataId)
    {
        $this->container['dynamicDataId'] = $dynamicDataId;

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
     * Gets requesterId
     * @return string
     */
    public function getRequesterId()
    {
        return $this->container['requesterId'];
    }

    /**
     * Sets requesterId
     * @param string $requesterId
     * @return $this
     */
    public function setRequesterId($requesterId)
    {
        $this->container['requesterId'] = $requesterId;

        return $this;
    }

    /**
     * Gets assigneeId
     * @return string
     */
    public function getAssigneeId()
    {
        return $this->container['assigneeId'];
    }

    /**
     * Sets assigneeId
     * @param string $assigneeId
     * @return $this
     */
    public function setAssigneeId($assigneeId)
    {
        $this->container['assigneeId'] = $assigneeId;

        return $this;
    }

    /**
     * Gets reviewerId
     * @return string
     */
    public function getReviewerId()
    {
        return $this->container['reviewerId'];
    }

    /**
     * Sets reviewerId
     * @param string $reviewerId
     * @return $this
     */
    public function setReviewerId($reviewerId)
    {
        $this->container['reviewerId'] = $reviewerId;

        return $this;
    }

    /**
     * Gets templateId
     * @return string
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     * @param string $templateId
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets portalId
     * @return string
     */
    public function getPortalId()
    {
        return $this->container['portalId'];
    }

    /**
     * Sets portalId
     * @param string $portalId
     * @return $this
     */
    public function setPortalId($portalId)
    {
        $this->container['portalId'] = $portalId;

        return $this;
    }

    /**
     * Gets rejectionCommentId
     * @return string
     */
    public function getRejectionCommentId()
    {
        return $this->container['rejectionCommentId'];
    }

    /**
     * Sets rejectionCommentId
     * @param string $rejectionCommentId
     * @return $this
     */
    public function setRejectionCommentId($rejectionCommentId)
    {
        $this->container['rejectionCommentId'] = $rejectionCommentId;

        return $this;
    }

    /**
     * Gets folderId
     * @return string
     */
    public function getFolderId()
    {
        return $this->container['folderId'];
    }

    /**
     * Sets folderId
     * @param string $folderId
     * @return $this
     */
    public function setFolderId($folderId)
    {
        $this->container['folderId'] = $folderId;

        return $this;
    }

    /**
     * Gets tags
     * @return \Swagger\Client\Model\Tag[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param \Swagger\Client\Model\Tag[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets template
     * @return \Swagger\Client\Model\Template
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     * @param \Swagger\Client\Model\Template $template
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets portal
     * @return \Swagger\Client\Model\Portal
     */
    public function getPortal()
    {
        return $this->container['portal'];
    }

    /**
     * Sets portal
     * @param \Swagger\Client\Model\Portal $portal
     * @return $this
     */
    public function setPortal($portal)
    {
        $this->container['portal'] = $portal;

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
     * Gets comments
     * @return \Swagger\Client\Model\DesignComment[]
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     * @param \Swagger\Client\Model\DesignComment[] $comments
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets rejectionComment
     * @return \Swagger\Client\Model\DesignComment
     */
    public function getRejectionComment()
    {
        return $this->container['rejectionComment'];
    }

    /**
     * Sets rejectionComment
     * @param \Swagger\Client\Model\DesignComment $rejectionComment
     * @return $this
     */
    public function setRejectionComment($rejectionComment)
    {
        $this->container['rejectionComment'] = $rejectionComment;

        return $this;
    }

    /**
     * Gets exports
     * @return \Swagger\Client\Model\DesignExport[]
     */
    public function getExports()
    {
        return $this->container['exports'];
    }

    /**
     * Sets exports
     * @param \Swagger\Client\Model\DesignExport[] $exports
     * @return $this
     */
    public function setExports($exports)
    {
        $this->container['exports'] = $exports;

        return $this;
    }

    /**
     * Gets requester
     * @return \Swagger\Client\Model\TeamMember
     */
    public function getRequester()
    {
        return $this->container['requester'];
    }

    /**
     * Sets requester
     * @param \Swagger\Client\Model\TeamMember $requester
     * @return $this
     */
    public function setRequester($requester)
    {
        $this->container['requester'] = $requester;

        return $this;
    }

    /**
     * Gets assignee
     * @return \Swagger\Client\Model\TeamMember
     */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
     * Sets assignee
     * @param \Swagger\Client\Model\TeamMember $assignee
     * @return $this
     */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;

        return $this;
    }

    /**
     * Gets reviewer
     * @return \Swagger\Client\Model\TeamMember
     */
    public function getReviewer()
    {
        return $this->container['reviewer'];
    }

    /**
     * Sets reviewer
     * @param \Swagger\Client\Model\TeamMember $reviewer
     * @return $this
     */
    public function setReviewer($reviewer)
    {
        $this->container['reviewer'] = $reviewer;

        return $this;
    }

    /**
     * Gets commenters
     * @return \Swagger\Client\Model\TeamMember[]
     */
    public function getCommenters()
    {
        return $this->container['commenters'];
    }

    /**
     * Sets commenters
     * @param \Swagger\Client\Model\TeamMember[] $commenters
     * @return $this
     */
    public function setCommenters($commenters)
    {
        $this->container['commenters'] = $commenters;

        return $this;
    }

    /**
     * Gets folder
     * @return \Swagger\Client\Model\DesignFolder
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     * @param \Swagger\Client\Model\DesignFolder $folder
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

        return $this;
    }

    /**
     * Gets permission
     * @return \Swagger\Client\Model\DesignPermissionSet
     */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
     * Sets permission
     * @param \Swagger\Client\Model\DesignPermissionSet $permission
     * @return $this
     */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;

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
     * Gets designMembers
     * @return \Swagger\Client\Model\DesignMember[]
     */
    public function getDesignMembers()
    {
        return $this->container['designMembers'];
    }

    /**
     * Sets designMembers
     * @param \Swagger\Client\Model\DesignMember[] $designMembers
     * @return $this
     */
    public function setDesignMembers($designMembers)
    {
        $this->container['designMembers'] = $designMembers;

        return $this;
    }

    /**
     * Gets dynamicData
     * @return \Swagger\Client\Model\DynamicData
     */
    public function getDynamicData()
    {
        return $this->container['dynamicData'];
    }

    /**
     * Sets dynamicData
     * @param \Swagger\Client\Model\DynamicData $dynamicData
     * @return $this
     */
    public function setDynamicData($dynamicData)
    {
        $this->container['dynamicData'] = $dynamicData;

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


