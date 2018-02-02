<?php
/**
 * BuilderAssetBackgroundApi
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

namespace Swagger\Client\Api;

use \Tweak\Api\Configuration;
use \Tweak\Api\ApiClient;
use \Tweak\Api\ApiException;
use \Tweak\Api\ObjectSerializer;

/**
 * BuilderAssetBackgroundApi Class Doc Comment
 *
 * @category Class
 * @package  Tweak\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuilderAssetBackgroundApi
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
     * @return BuilderAssetBackgroundApi
     */
    public function setApiClient(\Tweak\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation builderAssetBackgroundsFoldersFolderPathGet
     *
     * Get Builder Asset Backgrounds on a folders
     *
     * @param string $folderPath Folder path for backgrounds (required)
     * @param string $filter Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) (optional)
     * @return \Swagger\Client\Model\CloudinaryImage[]
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function builderAssetBackgroundsFoldersFolderPathGet($folderPath, $filter = null)
    {
        list($response) = $this->builderAssetBackgroundsFoldersFolderPathGetWithHttpInfo($folderPath, $filter);
        return $response;
    }

    /**
     * Operation builderAssetBackgroundsFoldersFolderPathGetWithHttpInfo
     *
     * Get Builder Asset Backgrounds on a folders
     *
     * @param string $folderPath Folder path for backgrounds (required)
     * @param string $filter Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) (optional)
     * @return array of \Swagger\Client\Model\CloudinaryImage[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function builderAssetBackgroundsFoldersFolderPathGetWithHttpInfo($folderPath, $filter = null)
    {
        // verify the required parameter 'folderPath' is set
        if ($folderPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folderPath when calling builderAssetBackgroundsFoldersFolderPathGet');
        }
        // parse inputs
        $resourcePath = "/BuilderAsset/backgrounds/folders/{folderPath}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/x-www-form-urlencoded','application/xml','text/xml'));

        // query params
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }
        // path params
        if ($folderPath !== null) {
            $resourcePath = str_replace(
                "{" . "folderPath" . "}",
                $this->apiClient->getSerializer()->toPathValue($folderPath),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\CloudinaryImage[]',
                '/BuilderAsset/backgrounds/folders/{folderPath}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CloudinaryImage[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CloudinaryImage[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation builderAssetBackgroundsFoldersGet
     *
     * Get folders for Builder Asset Backgrounds
     *
     * @return \Swagger\Client\Model\BuilderAssetBackgroundFolder[]
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function builderAssetBackgroundsFoldersGet()
    {
        list($response) = $this->builderAssetBackgroundsFoldersGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation builderAssetBackgroundsFoldersGetWithHttpInfo
     *
     * Get folders for Builder Asset Backgrounds
     *
     * @return array of \Swagger\Client\Model\BuilderAssetBackgroundFolder[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function builderAssetBackgroundsFoldersGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/BuilderAsset/backgrounds/folders";
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\BuilderAssetBackgroundFolder[]',
                '/BuilderAsset/backgrounds/folders'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\BuilderAssetBackgroundFolder[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BuilderAssetBackgroundFolder[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation builderAssetBackgroundsGet
     *
     * Get all Builder Asset Backgrounds
     *
     * @param string $filter Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) (optional)
     * @return \Swagger\Client\Model\CloudinaryImage[]
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function builderAssetBackgroundsGet($filter = null)
    {
        list($response) = $this->builderAssetBackgroundsGetWithHttpInfo($filter);
        return $response;
    }

    /**
     * Operation builderAssetBackgroundsGetWithHttpInfo
     *
     * Get all Builder Asset Backgrounds
     *
     * @param string $filter Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) (optional)
     * @return array of \Swagger\Client\Model\CloudinaryImage[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function builderAssetBackgroundsGetWithHttpInfo($filter = null)
    {
        // parse inputs
        $resourcePath = "/BuilderAsset/backgrounds";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/x-www-form-urlencoded','application/xml','text/xml'));

        // query params
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\CloudinaryImage[]',
                '/BuilderAsset/backgrounds'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CloudinaryImage[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CloudinaryImage[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
