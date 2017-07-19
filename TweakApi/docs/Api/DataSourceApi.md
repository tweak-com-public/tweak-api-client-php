# Tweak\Api\DataSourceApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataSourcesIdKeysCountGet**](DataSourceApi.md#dataSourcesIdKeysCountGet) | **GET** /DataSources/{id}/keys/count | Counts keys of DataSource.
[**dataSourcesIdKeysDelete**](DataSourceApi.md#dataSourcesIdKeysDelete) | **DELETE** /DataSources/{id}/keys | Deletes all keys of this model.
[**dataSourcesIdKeysFkDelete**](DataSourceApi.md#dataSourcesIdKeysFkDelete) | **DELETE** /DataSources/{id}/keys/{fk} | Delete a related item by id for keys.
[**dataSourcesIdKeysFkGet**](DataSourceApi.md#dataSourcesIdKeysFkGet) | **GET** /DataSources/{id}/keys/{fk} | Find a related item by id for keys.
[**dataSourcesIdKeysFkPut**](DataSourceApi.md#dataSourcesIdKeysFkPut) | **PUT** /DataSources/{id}/keys/{fk} | Update a related item by id for keys.
[**dataSourcesIdKeysGet**](DataSourceApi.md#dataSourcesIdKeysGet) | **GET** /DataSources/{id}/keys | Queries keys of DataSource.
[**dataSourcesIdKeysPost**](DataSourceApi.md#dataSourcesIdKeysPost) | **POST** /DataSources/{id}/keys | Creates a new instance in keys of this model.


# **dataSourcesIdKeysCountGet**
> \Swagger\Client\Model\InlineResponse200 dataSourcesIdKeysCountGet($id, $where)

Counts keys of DataSource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceApi();
$id = "id_example"; // string | DataSource id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourcesIdKeysCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceApi->dataSourcesIdKeysCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSource id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdKeysDelete**
> dataSourcesIdKeysDelete($id)

Deletes all keys of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceApi();
$id = "id_example"; // string | DataSource id

try {
    $api_instance->dataSourcesIdKeysDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceApi->dataSourcesIdKeysDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSource id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdKeysFkDelete**
> dataSourcesIdKeysFkDelete($id, $fk)

Delete a related item by id for keys.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceApi();
$id = "id_example"; // string | DataSource id
$fk = "fk_example"; // string | Foreign key for keys

try {
    $api_instance->dataSourcesIdKeysFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceApi->dataSourcesIdKeysFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSource id |
 **fk** | **string**| Foreign key for keys |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdKeysFkGet**
> \Swagger\Client\Model\DataSourceKey dataSourcesIdKeysFkGet($id, $fk)

Find a related item by id for keys.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceApi();
$id = "id_example"; // string | DataSource id
$fk = "fk_example"; // string | Foreign key for keys

try {
    $result = $api_instance->dataSourcesIdKeysFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceApi->dataSourcesIdKeysFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSource id |
 **fk** | **string**| Foreign key for keys |

### Return type

[**\Swagger\Client\Model\DataSourceKey**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdKeysFkPut**
> \Swagger\Client\Model\DataSourceKey dataSourcesIdKeysFkPut($id, $fk, $data)

Update a related item by id for keys.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceApi();
$id = "id_example"; // string | DataSource id
$fk = "fk_example"; // string | Foreign key for keys
$data = new \Swagger\Client\Model\DataSourceKey(); // \Swagger\Client\Model\DataSourceKey | 

try {
    $result = $api_instance->dataSourcesIdKeysFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceApi->dataSourcesIdKeysFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSource id |
 **fk** | **string**| Foreign key for keys |
 **data** | [**\Swagger\Client\Model\DataSourceKey**](../Model/\Swagger\Client\Model\DataSourceKey.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdKeysGet**
> \Swagger\Client\Model\DataSourceKey[] dataSourcesIdKeysGet($id, $filter)

Queries keys of DataSource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceApi();
$id = "id_example"; // string | DataSource id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->dataSourcesIdKeysGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceApi->dataSourcesIdKeysGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSource id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey[]**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdKeysPost**
> \Swagger\Client\Model\DataSourceKey dataSourcesIdKeysPost($id, $data)

Creates a new instance in keys of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceApi();
$id = "id_example"; // string | DataSource id
$data = new \Swagger\Client\Model\DataSourceKey(); // \Swagger\Client\Model\DataSourceKey | 

try {
    $result = $api_instance->dataSourcesIdKeysPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceApi->dataSourcesIdKeysPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSource id |
 **data** | [**\Swagger\Client\Model\DataSourceKey**](../Model/\Swagger\Client\Model\DataSourceKey.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

