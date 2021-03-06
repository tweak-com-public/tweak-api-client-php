<?php
/**
 * PublicVApi
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

namespace Swagger\Client\Api;

use \Tweak\Api\Configuration;
use \Tweak\Api\ApiClient;
use \Tweak\Api\ApiException;
use \Tweak\Api\ObjectSerializer;

/**
 * PublicVApi Class Doc Comment
 *
 * @category Class
 * @package  Tweak\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PublicVApi
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
     * @return PublicVApi
     */
    public function setApiClient(\Tweak\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v1BaseLocaleCountryCodeGet
     *
     * Get locale from Country Code
     *
     * @param string $countryCode Country code (required)
     * @return object
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function v1BaseLocaleCountryCodeGet($countryCode)
    {
        list($response) = $this->v1BaseLocaleCountryCodeGetWithHttpInfo($countryCode);
        return $response;
    }

    /**
     * Operation v1BaseLocaleCountryCodeGetWithHttpInfo
     *
     * Get locale from Country Code
     *
     * @param string $countryCode Country code (required)
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function v1BaseLocaleCountryCodeGetWithHttpInfo($countryCode)
    {
        // verify the required parameter 'countryCode' is set
        if ($countryCode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $countryCode when calling v1BaseLocaleCountryCodeGet');
        }
        // parse inputs
        $resourcePath = "/v1/Base/locale/country/code";
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
        if ($countryCode !== null) {
            $queryParams['countryCode'] = $this->apiClient->getSerializer()->toQueryValue($countryCode);
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/v1/Base/locale/country/code'
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

    /**
     * Operation v1BaseLocaleCountryNameGet
     *
     * Get locale from Country Name
     *
     * @param string $countryName Country name (required)
     * @return object
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function v1BaseLocaleCountryNameGet($countryName)
    {
        list($response) = $this->v1BaseLocaleCountryNameGetWithHttpInfo($countryName);
        return $response;
    }

    /**
     * Operation v1BaseLocaleCountryNameGetWithHttpInfo
     *
     * Get locale from Country Name
     *
     * @param string $countryName Country name (required)
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function v1BaseLocaleCountryNameGetWithHttpInfo($countryName)
    {
        // verify the required parameter 'countryName' is set
        if ($countryName === null) {
            throw new \InvalidArgumentException('Missing the required parameter $countryName when calling v1BaseLocaleCountryNameGet');
        }
        // parse inputs
        $resourcePath = "/v1/Base/locale/country/name";
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
        if ($countryName !== null) {
            $queryParams['countryName'] = $this->apiClient->getSerializer()->toQueryValue($countryName);
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/v1/Base/locale/country/name'
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

    /**
     * Operation v1BaseLocaleGet
     *
     * Get locale from client IP
     *
     * @return object
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function v1BaseLocaleGet()
    {
        list($response) = $this->v1BaseLocaleGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation v1BaseLocaleGetWithHttpInfo
     *
     * Get locale from client IP
     *
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function v1BaseLocaleGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/v1/Base/locale";
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/v1/Base/locale'
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
