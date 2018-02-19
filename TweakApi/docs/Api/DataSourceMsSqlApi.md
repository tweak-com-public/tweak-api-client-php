# Tweak\Api\DataSourceMsSqlApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataSourceMsSqlsChangeStreamGet**](DataSourceMsSqlApi.md#dataSourceMsSqlsChangeStreamGet) | **GET** /DataSourceMsSqls/change-stream | Create a change stream.
[**dataSourceMsSqlsChangeStreamPost**](DataSourceMsSqlApi.md#dataSourceMsSqlsChangeStreamPost) | **POST** /DataSourceMsSqls/change-stream | Create a change stream.
[**dataSourceMsSqlsCountGet**](DataSourceMsSqlApi.md#dataSourceMsSqlsCountGet) | **GET** /DataSourceMsSqls/count | Count instances of the model matched by where from the data source.
[**dataSourceMsSqlsFindOneGet**](DataSourceMsSqlApi.md#dataSourceMsSqlsFindOneGet) | **GET** /DataSourceMsSqls/findOne | Find first instance of the model matched by filter from the data source.
[**dataSourceMsSqlsGet**](DataSourceMsSqlApi.md#dataSourceMsSqlsGet) | **GET** /DataSourceMsSqls | Find all instances of the model matched by filter from the data source.
[**dataSourceMsSqlsIdDelete**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdDelete) | **DELETE** /DataSourceMsSqls/{id} | Delete a model instance by {{id}} from the data source.
[**dataSourceMsSqlsIdDynamicDatasCountGet**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdDynamicDatasCountGet) | **GET** /DataSourceMsSqls/{id}/dynamicDatas/count | Counts dynamicDatas of DataSourceMsSql.
[**dataSourceMsSqlsIdDynamicDatasDelete**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdDynamicDatasDelete) | **DELETE** /DataSourceMsSqls/{id}/dynamicDatas | Deletes all dynamicDatas of this model.
[**dataSourceMsSqlsIdDynamicDatasFkDelete**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdDynamicDatasFkDelete) | **DELETE** /DataSourceMsSqls/{id}/dynamicDatas/{fk} | Delete a related item by id for dynamicDatas.
[**dataSourceMsSqlsIdDynamicDatasFkGet**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdDynamicDatasFkGet) | **GET** /DataSourceMsSqls/{id}/dynamicDatas/{fk} | Find a related item by id for dynamicDatas.
[**dataSourceMsSqlsIdDynamicDatasFkPut**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdDynamicDatasFkPut) | **PUT** /DataSourceMsSqls/{id}/dynamicDatas/{fk} | Update a related item by id for dynamicDatas.
[**dataSourceMsSqlsIdDynamicDatasGet**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdDynamicDatasGet) | **GET** /DataSourceMsSqls/{id}/dynamicDatas | Queries dynamicDatas of DataSourceMsSql.
[**dataSourceMsSqlsIdDynamicDatasPost**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdDynamicDatasPost) | **POST** /DataSourceMsSqls/{id}/dynamicDatas | Creates a new instance in dynamicDatas of this model.
[**dataSourceMsSqlsIdExistsGet**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdExistsGet) | **GET** /DataSourceMsSqls/{id}/exists | Check whether a model instance exists in the data source.
[**dataSourceMsSqlsIdGet**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdGet) | **GET** /DataSourceMsSqls/{id} | Find a model instance by {{id}} from the data source.
[**dataSourceMsSqlsIdHead**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdHead) | **HEAD** /DataSourceMsSqls/{id} | Check whether a model instance exists in the data source.
[**dataSourceMsSqlsIdPatch**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdPatch) | **PATCH** /DataSourceMsSqls/{id} | Patch attributes for a model instance and persist it into the data source.
[**dataSourceMsSqlsIdPut**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdPut) | **PUT** /DataSourceMsSqls/{id} | Replace attributes for a model instance and persist it into the data source.
[**dataSourceMsSqlsIdReplacePost**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdReplacePost) | **POST** /DataSourceMsSqls/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**dataSourceMsSqlsIdTeamGet**](DataSourceMsSqlApi.md#dataSourceMsSqlsIdTeamGet) | **GET** /DataSourceMsSqls/{id}/team | Fetches belongsTo relation team.
[**dataSourceMsSqlsPost**](DataSourceMsSqlApi.md#dataSourceMsSqlsPost) | **POST** /DataSourceMsSqls | Create a new instance of the model and persist it into the data source.


# **dataSourceMsSqlsChangeStreamGet**
> \SplFileObject dataSourceMsSqlsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourceMsSqlsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options** | **string**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsChangeStreamPost**
> \SplFileObject dataSourceMsSqlsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourceMsSqlsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options** | **string**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsCountGet**
> \Swagger\Client\Model\InlineResponse2001 dataSourceMsSqlsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourceMsSqlsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsFindOneGet**
> \Swagger\Client\Model\DataSourceMsSql dataSourceMsSqlsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceMsSqlsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMsSql**](../Model/DataSourceMsSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsGet**
> \Swagger\Client\Model\DataSourceMsSql[] dataSourceMsSqlsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceMsSqlsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMsSql[]**](../Model/DataSourceMsSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdDelete**
> object dataSourceMsSqlsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceMsSqlsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdDynamicDatasCountGet**
> \Swagger\Client\Model\InlineResponse2001 dataSourceMsSqlsIdDynamicDatasCountGet($id, $where)

Counts dynamicDatas of DataSourceMsSql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | DataSourceMsSql id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourceMsSqlsIdDynamicDatasCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdDynamicDatasCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMsSql id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdDynamicDatasDelete**
> dataSourceMsSqlsIdDynamicDatasDelete($id)

Deletes all dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | DataSourceMsSql id

try {
    $api_instance->dataSourceMsSqlsIdDynamicDatasDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdDynamicDatasDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMsSql id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdDynamicDatasFkDelete**
> dataSourceMsSqlsIdDynamicDatasFkDelete($id, $fk)

Delete a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | DataSourceMsSql id
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $api_instance->dataSourceMsSqlsIdDynamicDatasFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdDynamicDatasFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMsSql id |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdDynamicDatasFkGet**
> \Swagger\Client\Model\DynamicData dataSourceMsSqlsIdDynamicDatasFkGet($id, $fk)

Find a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | DataSourceMsSql id
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $result = $api_instance->dataSourceMsSqlsIdDynamicDatasFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdDynamicDatasFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMsSql id |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdDynamicDatasFkPut**
> \Swagger\Client\Model\DynamicData dataSourceMsSqlsIdDynamicDatasFkPut($id, $fk, $data)

Update a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | DataSourceMsSql id
$fk = "fk_example"; // string | Foreign key for dynamicDatas
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->dataSourceMsSqlsIdDynamicDatasFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdDynamicDatasFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMsSql id |
 **fk** | **string**| Foreign key for dynamicDatas |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdDynamicDatasGet**
> \Swagger\Client\Model\DynamicData[] dataSourceMsSqlsIdDynamicDatasGet($id, $filter)

Queries dynamicDatas of DataSourceMsSql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | DataSourceMsSql id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->dataSourceMsSqlsIdDynamicDatasGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdDynamicDatasGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMsSql id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData[]**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdDynamicDatasPost**
> \Swagger\Client\Model\DynamicData dataSourceMsSqlsIdDynamicDatasPost($id, $data)

Creates a new instance in dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | DataSourceMsSql id
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->dataSourceMsSqlsIdDynamicDatasPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdDynamicDatasPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMsSql id |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 dataSourceMsSqlsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceMsSqlsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdExistsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdGet**
> \Swagger\Client\Model\DataSourceMsSql dataSourceMsSqlsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceMsSqlsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMsSql**](../Model/DataSourceMsSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdHead**
> \Swagger\Client\Model\InlineResponse2002 dataSourceMsSqlsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceMsSqlsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdPatch**
> \Swagger\Client\Model\DataSourceMsSql dataSourceMsSqlsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | DataSourceMsSql id
$data = new \Swagger\Client\Model\DataSourceMsSql(); // \Swagger\Client\Model\DataSourceMsSql | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourceMsSqlsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMsSql id |
 **data** | [**\Swagger\Client\Model\DataSourceMsSql**](../Model/\Swagger\Client\Model\DataSourceMsSql.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMsSql**](../Model/DataSourceMsSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdPut**
> \Swagger\Client\Model\DataSourceMsSql dataSourceMsSqlsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourceMsSql(); // \Swagger\Client\Model\DataSourceMsSql | Model instance data

try {
    $result = $api_instance->dataSourceMsSqlsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourceMsSql**](../Model/\Swagger\Client\Model\DataSourceMsSql.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMsSql**](../Model/DataSourceMsSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdReplacePost**
> \Swagger\Client\Model\DataSourceMsSql dataSourceMsSqlsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourceMsSql(); // \Swagger\Client\Model\DataSourceMsSql | Model instance data

try {
    $result = $api_instance->dataSourceMsSqlsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourceMsSql**](../Model/\Swagger\Client\Model\DataSourceMsSql.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMsSql**](../Model/DataSourceMsSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsIdTeamGet**
> \Swagger\Client\Model\Team dataSourceMsSqlsIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$id = "id_example"; // string | DataSourceMsSql id
$refresh = true; // bool | 

try {
    $result = $api_instance->dataSourceMsSqlsIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMsSql id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMsSqlsPost**
> \Swagger\Client\Model\DataSourceMsSql dataSourceMsSqlsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMsSqlApi();
$data = new \Swagger\Client\Model\DataSourceMsSql(); // \Swagger\Client\Model\DataSourceMsSql | Model instance data

try {
    $result = $api_instance->dataSourceMsSqlsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMsSqlApi->dataSourceMsSqlsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceMsSql**](../Model/\Swagger\Client\Model\DataSourceMsSql.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMsSql**](../Model/DataSourceMsSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

