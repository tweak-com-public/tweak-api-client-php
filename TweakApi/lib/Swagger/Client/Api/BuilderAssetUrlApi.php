<?php
/**
 * BuilderAssetUrlApi
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
 * OpenAPI spec version: 1.0.6-alpha.4
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
 * BuilderAssetUrlApi Class Doc Comment
 *
 * @category Class
 * @package  Tweak\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuilderAssetUrlApi
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
            $apiClient->getConfig()->setHost('https://apistagecdn.tweak.com/api');
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
     * @return BuilderAssetUrlApi
     */
    public function setApiClient(\Tweak\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation builderAssetUrlsDesignsIdGet
     *
     * Get folders for Builder Asset Backgrounds
     *
     * @param string $id Design Id (required)
     * @return \Swagger\Client\Model\InlineResponse200
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function builderAssetUrlsDesignsIdGet($id)
    {
        list($response) = $this->builderAssetUrlsDesignsIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation builderAssetUrlsDesignsIdGetWithHttpInfo
     *
     * Get folders for Builder Asset Backgrounds
     *
     * @param string $id Design Id (required)
     * @return array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function builderAssetUrlsDesignsIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling builderAssetUrlsDesignsIdGet');
        }
        // parse inputs
        $resourcePath = "/BuilderAsset/urls/designs/{id}";
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
                '\Swagger\Client\Model\InlineResponse200',
                '/BuilderAsset/urls/designs/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation builderAssetUrlsTemplatesIdGet
     *
     * Get folders for Builder Asset Backgrounds
     *
     * @param string $id Template Id (required)
     * @return \Swagger\Client\Model\InlineResponse200
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function builderAssetUrlsTemplatesIdGet($id)
    {
        list($response) = $this->builderAssetUrlsTemplatesIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation builderAssetUrlsTemplatesIdGetWithHttpInfo
     *
     * Get folders for Builder Asset Backgrounds
     *
     * @param string $id Template Id (required)
     * @return array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function builderAssetUrlsTemplatesIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling builderAssetUrlsTemplatesIdGet');
        }
        // parse inputs
        $resourcePath = "/BuilderAsset/urls/templates/{id}";
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
                '\Swagger\Client\Model\InlineResponse200',
                '/BuilderAsset/urls/templates/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation builderAssetUrlsTweakTemplatesIdGet
     *
     * Get folders for Builder Asset Backgrounds
     *
     * @param string $id Tweak Template Id (required)
     * @return \Swagger\Client\Model\InlineResponse200
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function builderAssetUrlsTweakTemplatesIdGet($id)
    {
        list($response) = $this->builderAssetUrlsTweakTemplatesIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation builderAssetUrlsTweakTemplatesIdGetWithHttpInfo
     *
     * Get folders for Builder Asset Backgrounds
     *
     * @param string $id Tweak Template Id (required)
     * @return array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function builderAssetUrlsTweakTemplatesIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling builderAssetUrlsTweakTemplatesIdGet');
        }
        // parse inputs
        $resourcePath = "/BuilderAsset/urls/tweakTemplates/{id}";
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
                '\Swagger\Client\Model\InlineResponse200',
                '/BuilderAsset/urls/tweakTemplates/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
