<?php
/**
 * BillingApi
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
 * OpenAPI spec version: 1.0.1-beta.1
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
 * BillingApi Class Doc Comment
 *
 * @category Class
 * @package  Tweak\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillingApi
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
     * @return BillingApi
     */
    public function setApiClient(\Tweak\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation billingsChangeStreamGet
     *
     * Create a change stream.
     *
     * @param string $options  (optional)
     * @return \SplFileObject
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsChangeStreamGet($options = null)
    {
        list($response) = $this->billingsChangeStreamGetWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation billingsChangeStreamGetWithHttpInfo
     *
     * Create a change stream.
     *
     * @param string $options  (optional)
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsChangeStreamGetWithHttpInfo($options = null)
    {
        // parse inputs
        $resourcePath = "/Billings/change-stream";
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
        if ($options !== null) {
            $queryParams['options'] = $this->apiClient->getSerializer()->toQueryValue($options);
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
                '\SplFileObject',
                '/Billings/change-stream'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\SplFileObject', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation billingsChangeStreamPost
     *
     * Create a change stream.
     *
     * @param string $options  (optional)
     * @return \SplFileObject
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsChangeStreamPost($options = null)
    {
        list($response) = $this->billingsChangeStreamPostWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation billingsChangeStreamPostWithHttpInfo
     *
     * Create a change stream.
     *
     * @param string $options  (optional)
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsChangeStreamPostWithHttpInfo($options = null)
    {
        // parse inputs
        $resourcePath = "/Billings/change-stream";
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

        // form params
        if ($options !== null) {
            $formParams['options'] = $this->apiClient->getSerializer()->toFormValue($options);
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
                '\SplFileObject',
                '/Billings/change-stream'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\SplFileObject', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation billingsCountriesGet
     *
     * List available countries
     *
     * @return string[]
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsCountriesGet()
    {
        list($response) = $this->billingsCountriesGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation billingsCountriesGetWithHttpInfo
     *
     * List available countries
     *
     * @return array of string[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsCountriesGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/Billings/countries";
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
                'string[]',
                '/Billings/countries'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'string[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation billingsIdPut
     *
     * Replace attributes for a model instance and persist it into the data source.
     *
     * @param string $id Model id (required)
     * @param \Swagger\Client\Model\Billing $data Model instance data (optional)
     * @return \Swagger\Client\Model\Billing
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsIdPut($id, $data = null)
    {
        list($response) = $this->billingsIdPutWithHttpInfo($id, $data);
        return $response;
    }

    /**
     * Operation billingsIdPutWithHttpInfo
     *
     * Replace attributes for a model instance and persist it into the data source.
     *
     * @param string $id Model id (required)
     * @param \Swagger\Client\Model\Billing $data Model instance data (optional)
     * @return array of \Swagger\Client\Model\Billing, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsIdPutWithHttpInfo($id, $data = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling billingsIdPut');
        }
        // parse inputs
        $resourcePath = "/Billings/{id}";
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Billing',
                '/Billings/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Billing', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Billing', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation billingsIdReplacePost
     *
     * Replace attributes for a model instance and persist it into the data source.
     *
     * @param string $id Model id (required)
     * @param \Swagger\Client\Model\Billing $data Model instance data (optional)
     * @return \Swagger\Client\Model\Billing
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsIdReplacePost($id, $data = null)
    {
        list($response) = $this->billingsIdReplacePostWithHttpInfo($id, $data);
        return $response;
    }

    /**
     * Operation billingsIdReplacePostWithHttpInfo
     *
     * Replace attributes for a model instance and persist it into the data source.
     *
     * @param string $id Model id (required)
     * @param \Swagger\Client\Model\Billing $data Model instance data (optional)
     * @return array of \Swagger\Client\Model\Billing, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsIdReplacePostWithHttpInfo($id, $data = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling billingsIdReplacePost');
        }
        // parse inputs
        $resourcePath = "/Billings/{id}/replace";
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
                '\Swagger\Client\Model\Billing',
                '/Billings/{id}/replace'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Billing', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Billing', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation billingsPut
     *
     * Replace an existing model instance or insert a new one into the data source.
     *
     * @param \Swagger\Client\Model\Billing $data Model instance data (optional)
     * @return \Swagger\Client\Model\Billing
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsPut($data = null)
    {
        list($response) = $this->billingsPutWithHttpInfo($data);
        return $response;
    }

    /**
     * Operation billingsPutWithHttpInfo
     *
     * Replace an existing model instance or insert a new one into the data source.
     *
     * @param \Swagger\Client\Model\Billing $data Model instance data (optional)
     * @return array of \Swagger\Client\Model\Billing, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsPutWithHttpInfo($data = null)
    {
        // parse inputs
        $resourcePath = "/Billings";
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Billing',
                '/Billings'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Billing', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Billing', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation billingsReplaceOrCreatePost
     *
     * Replace an existing model instance or insert a new one into the data source.
     *
     * @param \Swagger\Client\Model\Billing $data Model instance data (optional)
     * @return \Swagger\Client\Model\Billing
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsReplaceOrCreatePost($data = null)
    {
        list($response) = $this->billingsReplaceOrCreatePostWithHttpInfo($data);
        return $response;
    }

    /**
     * Operation billingsReplaceOrCreatePostWithHttpInfo
     *
     * Replace an existing model instance or insert a new one into the data source.
     *
     * @param \Swagger\Client\Model\Billing $data Model instance data (optional)
     * @return array of \Swagger\Client\Model\Billing, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsReplaceOrCreatePostWithHttpInfo($data = null)
    {
        // parse inputs
        $resourcePath = "/Billings/replaceOrCreate";
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Billing',
                '/Billings/replaceOrCreate'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Billing', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Billing', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation billingsTaxEvidenceCountryVatGet
     *
     * Get Tax Evidence by country and VAT
     *
     * @param string $country  (required)
     * @param string $vat  (required)
     * @return object
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsTaxEvidenceCountryVatGet($country, $vat)
    {
        list($response) = $this->billingsTaxEvidenceCountryVatGetWithHttpInfo($country, $vat);
        return $response;
    }

    /**
     * Operation billingsTaxEvidenceCountryVatGetWithHttpInfo
     *
     * Get Tax Evidence by country and VAT
     *
     * @param string $country  (required)
     * @param string $vat  (required)
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsTaxEvidenceCountryVatGetWithHttpInfo($country, $vat)
    {
        // verify the required parameter 'country' is set
        if ($country === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country when calling billingsTaxEvidenceCountryVatGet');
        }
        // verify the required parameter 'vat' is set
        if ($vat === null) {
            throw new \InvalidArgumentException('Missing the required parameter $vat when calling billingsTaxEvidenceCountryVatGet');
        }
        // parse inputs
        $resourcePath = "/Billings/taxEvidence/{country}/{vat}";
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
        if ($country !== null) {
            $resourcePath = str_replace(
                "{" . "country" . "}",
                $this->apiClient->getSerializer()->toPathValue($country),
                $resourcePath
            );
        }
        // path params
        if ($vat !== null) {
            $resourcePath = str_replace(
                "{" . "vat" . "}",
                $this->apiClient->getSerializer()->toPathValue($vat),
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
                'object',
                '/Billings/taxEvidence/{country}/{vat}'
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
     * Operation billingsUpsertWithWherePost
     *
     * Update an existing model instance or insert a new one into the data source based on the where criteria.
     *
     * @param string $where Criteria to match model instances (optional)
     * @param \Swagger\Client\Model\Billing $data An object of model property name/value pairs (optional)
     * @return \Swagger\Client\Model\Billing
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsUpsertWithWherePost($where = null, $data = null)
    {
        list($response) = $this->billingsUpsertWithWherePostWithHttpInfo($where, $data);
        return $response;
    }

    /**
     * Operation billingsUpsertWithWherePostWithHttpInfo
     *
     * Update an existing model instance or insert a new one into the data source based on the where criteria.
     *
     * @param string $where Criteria to match model instances (optional)
     * @param \Swagger\Client\Model\Billing $data An object of model property name/value pairs (optional)
     * @return array of \Swagger\Client\Model\Billing, HTTP status code, HTTP response headers (array of strings)
     * @throws \Tweak\Api\ApiException on non-2xx response
     */
    public function billingsUpsertWithWherePostWithHttpInfo($where = null, $data = null)
    {
        // parse inputs
        $resourcePath = "/Billings/upsertWithWhere";
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
                '\Swagger\Client\Model\Billing',
                '/Billings/upsertWithWhere'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Billing', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Billing', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
