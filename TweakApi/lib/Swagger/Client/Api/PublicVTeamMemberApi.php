<?php
/**
 * PublicVTeamMemberApi
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
 * OpenAPI spec version: 1.0.3-alpha.4
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

namespace Swagger\Client\Api;

use \Tweak\Api\Configuration;
use \Tweak\Api\ApiClient;
use \Tweak\Api\ApiException;
use \Tweak\Api\ObjectSerializer;

/**
 * PublicVTeamMemberApi Class Doc Comment
 *
 * @category Class
 * @package  Tweak\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PublicVTeamMemberApi
{

    /**
     * API Client
     *
     * @var \Tweak\Api\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Tweak\Api\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Tweak\Api\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://apidevcdn.tweak.com/api');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Tweak\Api\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Tweak\Api\ApiClient $apiClient set the API client
     *
     * @return PublicVTeamMemberApi
     */
    public function setApiClient(\Tweak\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v1TeamMembersLoginPost
     *
     * Change portal
     *
     * @param string $id TeamMember id (required)
     * @param string $portalId Portal id (required)
     * @return \Swagger\Client\Model\TeamMemberAccessToken
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function v1TeamMembersLoginPost($id, $portalId)
    {
        list($response) = $this->v1TeamMembersLoginPostWithHttpInfo($id, $portalId);
        return $response;
    }

    /**
     * Operation v1TeamMembersLoginPostWithHttpInfo
     *
     * Change portal
     *
     * @param string $id TeamMember id (required)
     * @param string $portalId Portal id (required)
     * @return array of \Swagger\Client\Model\TeamMemberAccessToken, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function v1TeamMembersLoginPostWithHttpInfo($id, $portalId)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling v1TeamMembersLoginPost');
        }
        // verify the required parameter 'portalId' is set
        if ($portalId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $portalId when calling v1TeamMembersLoginPost');
        }
        // parse inputs
        $resourcePath = "/v1/TeamMembers/login";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/x-www-form-urlencoded','application/xml','text/xml'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($portalId !== null) {
            $resourcePath = str_replace(
                "{" . "portalId" . "}",
                $this->apiClient->getSerializer()->toPathValue($portalId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('teamKey');
        if (strlen($apiKey) !== 0) {
            $queryParams['teamKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\TeamMemberAccessToken',
                '/v1/TeamMembers/login'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\TeamMemberAccessToken', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\TeamMemberAccessToken', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1TeamMembersLogoutPost
     *
     * Logout a TeamMember
     *
     * @return void
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function v1TeamMembersLogoutPost()
    {
        list($response) = $this->v1TeamMembersLogoutPostWithHttpInfo();
        return $response;
    }

    /**
     * Operation v1TeamMembersLogoutPostWithHttpInfo
     *
     * Logout a TeamMember
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function v1TeamMembersLogoutPostWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/v1/TeamMembers/logout";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/x-www-form-urlencoded','application/xml','text/xml'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('teamKey');
        if (strlen($apiKey) !== 0) {
            $queryParams['teamKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v1/TeamMembers/logout'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation v1TeamMembersPost
     *
     * Create a Member
     *
     * @param \Swagger\Client\Model\PublicV1TeamMember $data Data to create Member (required)
     * @return object
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function v1TeamMembersPost($data)
    {
        list($response) = $this->v1TeamMembersPostWithHttpInfo($data);
        return $response;
    }

    /**
     * Operation v1TeamMembersPostWithHttpInfo
     *
     * Create a Member
     *
     * @param \Swagger\Client\Model\PublicV1TeamMember $data Data to create Member (required)
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function v1TeamMembersPostWithHttpInfo($data)
    {
        // verify the required parameter 'data' is set
        if ($data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data when calling v1TeamMembersPost');
        }
        // parse inputs
        $resourcePath = "/v1/TeamMembers";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/x-www-form-urlencoded','application/xml','text/xml'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($data)) {
            $_tempBody = $data;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('access_token');
        if (strlen($apiKey) !== 0) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('teamKey');
        if (strlen($apiKey) !== 0) {
            $queryParams['teamKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/v1/TeamMembers'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
