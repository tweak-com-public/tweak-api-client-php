# Tweak\Api\DataSourceMySqlApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataSourceMySqlsChangeStreamGet**](DataSourceMySqlApi.md#dataSourceMySqlsChangeStreamGet) | **GET** /DataSourceMySqls/change-stream | Create a change stream.
[**dataSourceMySqlsChangeStreamPost**](DataSourceMySqlApi.md#dataSourceMySqlsChangeStreamPost) | **POST** /DataSourceMySqls/change-stream | Create a change stream.
[**dataSourceMySqlsCountGet**](DataSourceMySqlApi.md#dataSourceMySqlsCountGet) | **GET** /DataSourceMySqls/count | Count instances of the model matched by where from the data source.
[**dataSourceMySqlsFindOneGet**](DataSourceMySqlApi.md#dataSourceMySqlsFindOneGet) | **GET** /DataSourceMySqls/findOne | Find first instance of the model matched by filter from the data source.
[**dataSourceMySqlsGet**](DataSourceMySqlApi.md#dataSourceMySqlsGet) | **GET** /DataSourceMySqls | Find all instances of the model matched by filter from the data source.
[**dataSourceMySqlsIdDelete**](DataSourceMySqlApi.md#dataSourceMySqlsIdDelete) | **DELETE** /DataSourceMySqls/{id} | Delete a model instance by {{id}} from the data source.
[**dataSourceMySqlsIdDynamicDatasCountGet**](DataSourceMySqlApi.md#dataSourceMySqlsIdDynamicDatasCountGet) | **GET** /DataSourceMySqls/{id}/dynamicDatas/count | Counts dynamicDatas of DataSourceMySql.
[**dataSourceMySqlsIdDynamicDatasDelete**](DataSourceMySqlApi.md#dataSourceMySqlsIdDynamicDatasDelete) | **DELETE** /DataSourceMySqls/{id}/dynamicDatas | Deletes all dynamicDatas of this model.
[**dataSourceMySqlsIdDynamicDatasFkDelete**](DataSourceMySqlApi.md#dataSourceMySqlsIdDynamicDatasFkDelete) | **DELETE** /DataSourceMySqls/{id}/dynamicDatas/{fk} | Delete a related item by id for dynamicDatas.
[**dataSourceMySqlsIdDynamicDatasFkGet**](DataSourceMySqlApi.md#dataSourceMySqlsIdDynamicDatasFkGet) | **GET** /DataSourceMySqls/{id}/dynamicDatas/{fk} | Find a related item by id for dynamicDatas.
[**dataSourceMySqlsIdDynamicDatasFkPut**](DataSourceMySqlApi.md#dataSourceMySqlsIdDynamicDatasFkPut) | **PUT** /DataSourceMySqls/{id}/dynamicDatas/{fk} | Update a related item by id for dynamicDatas.
[**dataSourceMySqlsIdDynamicDatasGet**](DataSourceMySqlApi.md#dataSourceMySqlsIdDynamicDatasGet) | **GET** /DataSourceMySqls/{id}/dynamicDatas | Queries dynamicDatas of DataSourceMySql.
[**dataSourceMySqlsIdDynamicDatasPost**](DataSourceMySqlApi.md#dataSourceMySqlsIdDynamicDatasPost) | **POST** /DataSourceMySqls/{id}/dynamicDatas | Creates a new instance in dynamicDatas of this model.
[**dataSourceMySqlsIdExistsGet**](DataSourceMySqlApi.md#dataSourceMySqlsIdExistsGet) | **GET** /DataSourceMySqls/{id}/exists | Check whether a model instance exists in the data source.
[**dataSourceMySqlsIdGet**](DataSourceMySqlApi.md#dataSourceMySqlsIdGet) | **GET** /DataSourceMySqls/{id} | Find a model instance by {{id}} from the data source.
[**dataSourceMySqlsIdHead**](DataSourceMySqlApi.md#dataSourceMySqlsIdHead) | **HEAD** /DataSourceMySqls/{id} | Check whether a model instance exists in the data source.
[**dataSourceMySqlsIdPatch**](DataSourceMySqlApi.md#dataSourceMySqlsIdPatch) | **PATCH** /DataSourceMySqls/{id} | Patch attributes for a model instance and persist it into the data source.
[**dataSourceMySqlsIdPut**](DataSourceMySqlApi.md#dataSourceMySqlsIdPut) | **PUT** /DataSourceMySqls/{id} | Replace attributes for a model instance and persist it into the data source.
[**dataSourceMySqlsIdReplacePost**](DataSourceMySqlApi.md#dataSourceMySqlsIdReplacePost) | **POST** /DataSourceMySqls/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**dataSourceMySqlsIdTeamGet**](DataSourceMySqlApi.md#dataSourceMySqlsIdTeamGet) | **GET** /DataSourceMySqls/{id}/team | Fetches belongsTo relation team.
[**dataSourceMySqlsPost**](DataSourceMySqlApi.md#dataSourceMySqlsPost) | **POST** /DataSourceMySqls | Create a new instance of the model and persist it into the data source.


# **dataSourceMySqlsChangeStreamGet**
> \SplFileObject dataSourceMySqlsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourceMySqlsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceMySqlsChangeStreamPost**
> \SplFileObject dataSourceMySqlsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourceMySqlsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceMySqlsCountGet**
> \Swagger\Client\Model\InlineResponse2001 dataSourceMySqlsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourceMySqlsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceMySqlsFindOneGet**
> \Swagger\Client\Model\DataSourceMySql dataSourceMySqlsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceMySqlsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMySql**](../Model/DataSourceMySql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMySqlsGet**
> \Swagger\Client\Model\DataSourceMySql[] dataSourceMySqlsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceMySqlsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMySql[]**](../Model/DataSourceMySql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMySqlsIdDelete**
> object dataSourceMySqlsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceMySqlsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceMySqlsIdDynamicDatasCountGet**
> \Swagger\Client\Model\InlineResponse2001 dataSourceMySqlsIdDynamicDatasCountGet($id, $where)

Counts dynamicDatas of DataSourceMySql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | DataSourceMySql id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourceMySqlsIdDynamicDatasCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdDynamicDatasCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMySql id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMySqlsIdDynamicDatasDelete**
> dataSourceMySqlsIdDynamicDatasDelete($id)

Deletes all dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | DataSourceMySql id

try {
    $api_instance->dataSourceMySqlsIdDynamicDatasDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdDynamicDatasDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMySql id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMySqlsIdDynamicDatasFkDelete**
> dataSourceMySqlsIdDynamicDatasFkDelete($id, $fk)

Delete a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | DataSourceMySql id
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $api_instance->dataSourceMySqlsIdDynamicDatasFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdDynamicDatasFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMySql id |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMySqlsIdDynamicDatasFkGet**
> \Swagger\Client\Model\DynamicData dataSourceMySqlsIdDynamicDatasFkGet($id, $fk)

Find a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | DataSourceMySql id
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $result = $api_instance->dataSourceMySqlsIdDynamicDatasFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdDynamicDatasFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMySql id |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMySqlsIdDynamicDatasFkPut**
> \Swagger\Client\Model\DynamicData dataSourceMySqlsIdDynamicDatasFkPut($id, $fk, $data)

Update a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | DataSourceMySql id
$fk = "fk_example"; // string | Foreign key for dynamicDatas
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->dataSourceMySqlsIdDynamicDatasFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdDynamicDatasFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMySql id |
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

# **dataSourceMySqlsIdDynamicDatasGet**
> \Swagger\Client\Model\DynamicData[] dataSourceMySqlsIdDynamicDatasGet($id, $filter)

Queries dynamicDatas of DataSourceMySql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | DataSourceMySql id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->dataSourceMySqlsIdDynamicDatasGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdDynamicDatasGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMySql id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData[]**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMySqlsIdDynamicDatasPost**
> \Swagger\Client\Model\DynamicData dataSourceMySqlsIdDynamicDatasPost($id, $data)

Creates a new instance in dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | DataSourceMySql id
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->dataSourceMySqlsIdDynamicDatasPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdDynamicDatasPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMySql id |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMySqlsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 dataSourceMySqlsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceMySqlsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceMySqlsIdGet**
> \Swagger\Client\Model\DataSourceMySql dataSourceMySqlsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceMySqlsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMySql**](../Model/DataSourceMySql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMySqlsIdHead**
> \Swagger\Client\Model\InlineResponse2002 dataSourceMySqlsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceMySqlsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceMySqlsIdPatch**
> \Swagger\Client\Model\DataSourceMySql dataSourceMySqlsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | DataSourceMySql id
$data = new \Swagger\Client\Model\DataSourceMySql(); // \Swagger\Client\Model\DataSourceMySql | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourceMySqlsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMySql id |
 **data** | [**\Swagger\Client\Model\DataSourceMySql**](../Model/\Swagger\Client\Model\DataSourceMySql.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMySql**](../Model/DataSourceMySql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMySqlsIdPut**
> \Swagger\Client\Model\DataSourceMySql dataSourceMySqlsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourceMySql(); // \Swagger\Client\Model\DataSourceMySql | Model instance data

try {
    $result = $api_instance->dataSourceMySqlsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourceMySql**](../Model/\Swagger\Client\Model\DataSourceMySql.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMySql**](../Model/DataSourceMySql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMySqlsIdReplacePost**
> \Swagger\Client\Model\DataSourceMySql dataSourceMySqlsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourceMySql(); // \Swagger\Client\Model\DataSourceMySql | Model instance data

try {
    $result = $api_instance->dataSourceMySqlsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourceMySql**](../Model/\Swagger\Client\Model\DataSourceMySql.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMySql**](../Model/DataSourceMySql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMySqlsIdTeamGet**
> \Swagger\Client\Model\Team dataSourceMySqlsIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$id = "id_example"; // string | DataSourceMySql id
$refresh = true; // bool | 

try {
    $result = $api_instance->dataSourceMySqlsIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMySql id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMySqlsPost**
> \Swagger\Client\Model\DataSourceMySql dataSourceMySqlsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMySqlApi();
$data = new \Swagger\Client\Model\DataSourceMySql(); // \Swagger\Client\Model\DataSourceMySql | Model instance data

try {
    $result = $api_instance->dataSourceMySqlsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMySqlApi->dataSourceMySqlsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceMySql**](../Model/\Swagger\Client\Model\DataSourceMySql.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMySql**](../Model/DataSourceMySql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

