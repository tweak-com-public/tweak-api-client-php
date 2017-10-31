<?php
/**
 * DataSourceApi
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
 * OpenAPI spec version: 1.0.2-alpha.6
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
 * DataSourceApi Class Doc Comment
 *
 * @category Class
 * @package  Tweak\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DataSourceApi
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
     * @return DataSourceApi
     */
    public function setApiClient(\Tweak\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation dataSourcesIdKeysCountGet
     *
     * Counts keys of DataSource.
     *
     * @param string $id DataSource id (required)
     * @param string $where Criteria to match model instances (optional)
     * @return \Swagger\Client\Model\InlineResponse200
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function dataSourcesIdKeysCountGet($id, $where = null)
    {
        list($response) = $this->dataSourcesIdKeysCountGetWithHttpInfo($id, $where);
        return $response;
    }

    /**
     * Operation dataSourcesIdKeysCountGetWithHttpInfo
     *
     * Counts keys of DataSource.
     *
     * @param string $id DataSource id (required)
     * @param string $where Criteria to match model instances (optional)
     * @return array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function dataSourcesIdKeysCountGetWithHttpInfo($id, $where = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling dataSourcesIdKeysCountGet');
        }
        // parse inputs
        $resourcePath = "/DataSources/{id}/keys/count";
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
        if ($where !== null) {
            $queryParams['where'] = $this->apiClient->getSerializer()->toQueryValue($where);
        }
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
                '/DataSources/{id}/keys/count'
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
     * Operation dataSourcesIdKeysDelete
     *
     * Deletes all keys of this model.
     *
     * @param string $id DataSource id (required)
     * @return void
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function dataSourcesIdKeysDelete($id)
    {
        list($response) = $this->dataSourcesIdKeysDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation dataSourcesIdKeysDeleteWithHttpInfo
     *
     * Deletes all keys of this model.
     *
     * @param string $id DataSource id (required)
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function dataSourcesIdKeysDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling dataSourcesIdKeysDelete');
        }
        // parse inputs
        $resourcePath = "/DataSources/{id}/keys";
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/DataSources/{id}/keys'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation dataSourcesIdKeysFkDelete
     *
     * Delete a related item by id for keys.
     *
     * @param string $id DataSource id (required)
     * @param string $fk Foreign key for keys (required)
     * @return void
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function dataSourcesIdKeysFkDelete($id, $fk)
    {
        list($response) = $this->dataSourcesIdKeysFkDeleteWithHttpInfo($id, $fk);
        return $response;
    }

    /**
     * Operation dataSourcesIdKeysFkDeleteWithHttpInfo
     *
     * Delete a related item by id for keys.
     *
     * @param string $id DataSource id (required)
     * @param string $fk Foreign key for keys (required)
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function dataSourcesIdKeysFkDeleteWithHttpInfo($id, $fk)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling dataSourcesIdKeysFkDelete');
        }
        // verify the required parameter 'fk' is set
        if ($fk === null) {
            throw new \InvalidArgumentException('Missing the required parameter $fk when calling dataSourcesIdKeysFkDelete');
        }
        // parse inputs
        $resourcePath = "/DataSources/{id}/keys/{fk}";
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
        if ($fk !== null) {
            $resourcePath = str_replace(
                "{" . "fk" . "}",
                $this->apiClient->getSerializer()->toPathValue($fk),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/DataSources/{id}/keys/{fk}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation dataSourcesIdKeysFkGet
     *
     * Find a related item by id for keys.
     *
     * @param string $id DataSource id (required)
     * @param string $fk Foreign key for keys (required)
     * @return \Swagger\Client\Model\DataSourceKey
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function dataSourcesIdKeysFkGet($id, $fk)
    {
        list($response) = $this->dataSourcesIdKeysFkGetWithHttpInfo($id, $fk);
        return $response;
    }

    /**
     * Operation dataSourcesIdKeysFkGetWithHttpInfo
     *
     * Find a related item by id for keys.
     *
     * @param string $id DataSource id (required)
     * @param string $fk Foreign key for keys (required)
     * @return array of \Swagger\Client\Model\DataSourceKey, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function dataSourcesIdKeysFkGetWithHttpInfo($id, $fk)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling dataSourcesIdKeysFkGet');
        }
        // verify the required parameter 'fk' is set
        if ($fk === null) {
            throw new \InvalidArgumentException('Missing the required parameter $fk when calling dataSourcesIdKeysFkGet');
        }
        // parse inputs
        $resourcePath = "/DataSources/{id}/keys/{fk}";
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
        if ($fk !== null) {
            $resourcePath = str_replace(
                "{" . "fk" . "}",
                $this->apiClient->getSerializer()->toPathValue($fk),
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
                '\Swagger\Client\Model\DataSourceKey',
                '/DataSources/{id}/keys/{fk}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DataSourceKey', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DataSourceKey', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation dataSourcesIdKeysFkPut
     *
     * Update a related item by id for keys.
     *
     * @param string $id DataSource id (required)
     * @param string $fk Foreign key for keys (required)
     * @param \Swagger\Client\Model\DataSourceKey $data  (optional)
     * @return \Swagger\Client\Model\DataSourceKey
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function dataSourcesIdKeysFkPut($id, $fk, $data = null)
    {
        list($response) = $this->dataSourcesIdKeysFkPutWithHttpInfo($id, $fk, $data);
        return $response;
    }

    /**
     * Operation dataSourcesIdKeysFkPutWithHttpInfo
     *
     * Update a related item by id for keys.
     *
     * @param string $id DataSource id (required)
     * @param string $fk Foreign key for keys (required)
     * @param \Swagger\Client\Model\DataSourceKey $data  (optional)
     * @return array of \Swagger\Client\Model\DataSourceKey, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function dataSourcesIdKeysFkPutWithHttpInfo($id, $fk, $data = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling dataSourcesIdKeysFkPut');
        }
        // verify the required parameter 'fk' is set
        if ($fk === null) {
            throw new \InvalidArgumentException('Missing the required parameter $fk when calling dataSourcesIdKeysFkPut');
        }
        // parse inputs
        $resourcePath = "/DataSources/{id}/keys/{fk}";
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
        if ($fk !== null) {
            $resourcePath = str_replace(
                "{" . "fk" . "}",
                $this->apiClient->getSerializer()->toPathValue($fk),
                $resourcePath
            );
        }
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\DataSourceKey',
                '/DataSources/{id}/keys/{fk}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DataSourceKey', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DataSourceKey', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation dataSourcesIdKeysGet
     *
     * Queries keys of DataSource.
     *
     * @param string $id DataSource id (required)
     * @param string $filter  (optional)
     * @return \Swagger\Client\Model\DataSourceKey[]
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function dataSourcesIdKeysGet($id, $filter = null)
    {
        list($response) = $this->dataSourcesIdKeysGetWithHttpInfo($id, $filter);
        return $response;
    }

    /**
     * Operation dataSourcesIdKeysGetWithHttpInfo
     *
     * Queries keys of DataSource.
     *
     * @param string $id DataSource id (required)
     * @param string $filter  (optional)
     * @return array of \Swagger\Client\Model\DataSourceKey[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function dataSourcesIdKeysGetWithHttpInfo($id, $filter = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling dataSourcesIdKeysGet');
        }
        // parse inputs
        $resourcePath = "/DataSources/{id}/keys";
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
                '\Swagger\Client\Model\DataSourceKey[]',
                '/DataSources/{id}/keys'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DataSourceKey[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DataSourceKey[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation dataSourcesIdKeysPost
     *
     * Creates a new instance in keys of this model.
     *
     * @param string $id DataSource id (required)
     * @param \Swagger\Client\Model\DataSourceKey $data  (optional)
     * @return \Swagger\Client\Model\DataSourceKey
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function dataSourcesIdKeysPost($id, $data = null)
    {
        list($response) = $this->dataSourcesIdKeysPostWithHttpInfo($id, $data);
        return $response;
    }

    /**
     * Operation dataSourcesIdKeysPostWithHttpInfo
     *
     * Creates a new instance in keys of this model.
     *
     * @param string $id DataSource id (required)
     * @param \Swagger\Client\Model\DataSourceKey $data  (optional)
     * @return array of \Swagger\Client\Model\DataSourceKey, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function dataSourcesIdKeysPostWithHttpInfo($id, $data = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling dataSourcesIdKeysPost');
        }
        // parse inputs
        $resourcePath = "/DataSources/{id}/keys";
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\DataSourceKey',
                '/DataSources/{id}/keys'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DataSourceKey', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DataSourceKey', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
