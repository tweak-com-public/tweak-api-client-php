# Tweak\Api\DataSourceRestApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataSourceRestsChangeStreamGet**](DataSourceRestApi.md#dataSourceRestsChangeStreamGet) | **GET** /DataSourceRests/change-stream | Create a change stream.
[**dataSourceRestsChangeStreamPost**](DataSourceRestApi.md#dataSourceRestsChangeStreamPost) | **POST** /DataSourceRests/change-stream | Create a change stream.
[**dataSourceRestsCountGet**](DataSourceRestApi.md#dataSourceRestsCountGet) | **GET** /DataSourceRests/count | Count instances of the model matched by where from the data source.
[**dataSourceRestsFindOneGet**](DataSourceRestApi.md#dataSourceRestsFindOneGet) | **GET** /DataSourceRests/findOne | Find first instance of the model matched by filter from the data source.
[**dataSourceRestsGet**](DataSourceRestApi.md#dataSourceRestsGet) | **GET** /DataSourceRests | Find all instances of the model matched by filter from the data source.
[**dataSourceRestsIdDelete**](DataSourceRestApi.md#dataSourceRestsIdDelete) | **DELETE** /DataSourceRests/{id} | Delete a model instance by {{id}} from the data source.
[**dataSourceRestsIdDynamicDatasCountGet**](DataSourceRestApi.md#dataSourceRestsIdDynamicDatasCountGet) | **GET** /DataSourceRests/{id}/dynamicDatas/count | Counts dynamicDatas of DataSourceRest.
[**dataSourceRestsIdDynamicDatasDelete**](DataSourceRestApi.md#dataSourceRestsIdDynamicDatasDelete) | **DELETE** /DataSourceRests/{id}/dynamicDatas | Deletes all dynamicDatas of this model.
[**dataSourceRestsIdDynamicDatasFkDelete**](DataSourceRestApi.md#dataSourceRestsIdDynamicDatasFkDelete) | **DELETE** /DataSourceRests/{id}/dynamicDatas/{fk} | Delete a related item by id for dynamicDatas.
[**dataSourceRestsIdDynamicDatasFkGet**](DataSourceRestApi.md#dataSourceRestsIdDynamicDatasFkGet) | **GET** /DataSourceRests/{id}/dynamicDatas/{fk} | Find a related item by id for dynamicDatas.
[**dataSourceRestsIdDynamicDatasFkPut**](DataSourceRestApi.md#dataSourceRestsIdDynamicDatasFkPut) | **PUT** /DataSourceRests/{id}/dynamicDatas/{fk} | Update a related item by id for dynamicDatas.
[**dataSourceRestsIdDynamicDatasGet**](DataSourceRestApi.md#dataSourceRestsIdDynamicDatasGet) | **GET** /DataSourceRests/{id}/dynamicDatas | Queries dynamicDatas of DataSourceRest.
[**dataSourceRestsIdDynamicDatasPost**](DataSourceRestApi.md#dataSourceRestsIdDynamicDatasPost) | **POST** /DataSourceRests/{id}/dynamicDatas | Creates a new instance in dynamicDatas of this model.
[**dataSourceRestsIdExistsGet**](DataSourceRestApi.md#dataSourceRestsIdExistsGet) | **GET** /DataSourceRests/{id}/exists | Check whether a model instance exists in the data source.
[**dataSourceRestsIdGet**](DataSourceRestApi.md#dataSourceRestsIdGet) | **GET** /DataSourceRests/{id} | Find a model instance by {{id}} from the data source.
[**dataSourceRestsIdHead**](DataSourceRestApi.md#dataSourceRestsIdHead) | **HEAD** /DataSourceRests/{id} | Check whether a model instance exists in the data source.
[**dataSourceRestsIdPatch**](DataSourceRestApi.md#dataSourceRestsIdPatch) | **PATCH** /DataSourceRests/{id} | Patch attributes for a model instance and persist it into the data source.
[**dataSourceRestsIdPut**](DataSourceRestApi.md#dataSourceRestsIdPut) | **PUT** /DataSourceRests/{id} | Replace attributes for a model instance and persist it into the data source.
[**dataSourceRestsIdReplacePost**](DataSourceRestApi.md#dataSourceRestsIdReplacePost) | **POST** /DataSourceRests/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**dataSourceRestsIdTeamGet**](DataSourceRestApi.md#dataSourceRestsIdTeamGet) | **GET** /DataSourceRests/{id}/team | Fetches belongsTo relation team.
[**dataSourceRestsPost**](DataSourceRestApi.md#dataSourceRestsPost) | **POST** /DataSourceRests | Create a new instance of the model and persist it into the data source.


# **dataSourceRestsChangeStreamGet**
> \SplFileObject dataSourceRestsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourceRestsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRestsChangeStreamPost**
> \SplFileObject dataSourceRestsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourceRestsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRestsCountGet**
> \Swagger\Client\Model\InlineResponse2001 dataSourceRestsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourceRestsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRestsFindOneGet**
> \Swagger\Client\Model\DataSourceRest dataSourceRestsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceRestsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRest**](../Model/DataSourceRest.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRestsGet**
> \Swagger\Client\Model\DataSourceRest[] dataSourceRestsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceRestsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRest[]**](../Model/DataSourceRest.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRestsIdDelete**
> object dataSourceRestsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceRestsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRestsIdDynamicDatasCountGet**
> \Swagger\Client\Model\InlineResponse2001 dataSourceRestsIdDynamicDatasCountGet($id, $where)

Counts dynamicDatas of DataSourceRest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | DataSourceRest id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourceRestsIdDynamicDatasCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdDynamicDatasCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRest id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRestsIdDynamicDatasDelete**
> dataSourceRestsIdDynamicDatasDelete($id)

Deletes all dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | DataSourceRest id

try {
    $api_instance->dataSourceRestsIdDynamicDatasDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdDynamicDatasDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRest id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRestsIdDynamicDatasFkDelete**
> dataSourceRestsIdDynamicDatasFkDelete($id, $fk)

Delete a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | DataSourceRest id
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $api_instance->dataSourceRestsIdDynamicDatasFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdDynamicDatasFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRest id |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRestsIdDynamicDatasFkGet**
> \Swagger\Client\Model\DynamicData dataSourceRestsIdDynamicDatasFkGet($id, $fk)

Find a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | DataSourceRest id
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $result = $api_instance->dataSourceRestsIdDynamicDatasFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdDynamicDatasFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRest id |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRestsIdDynamicDatasFkPut**
> \Swagger\Client\Model\DynamicData dataSourceRestsIdDynamicDatasFkPut($id, $fk, $data)

Update a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | DataSourceRest id
$fk = "fk_example"; // string | Foreign key for dynamicDatas
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->dataSourceRestsIdDynamicDatasFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdDynamicDatasFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRest id |
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

# **dataSourceRestsIdDynamicDatasGet**
> \Swagger\Client\Model\DynamicData[] dataSourceRestsIdDynamicDatasGet($id, $filter)

Queries dynamicDatas of DataSourceRest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | DataSourceRest id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->dataSourceRestsIdDynamicDatasGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdDynamicDatasGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRest id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData[]**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRestsIdDynamicDatasPost**
> \Swagger\Client\Model\DynamicData dataSourceRestsIdDynamicDatasPost($id, $data)

Creates a new instance in dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | DataSourceRest id
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->dataSourceRestsIdDynamicDatasPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdDynamicDatasPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRest id |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRestsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 dataSourceRestsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceRestsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRestsIdGet**
> \Swagger\Client\Model\DataSourceRest dataSourceRestsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceRestsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRest**](../Model/DataSourceRest.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRestsIdHead**
> \Swagger\Client\Model\InlineResponse2002 dataSourceRestsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceRestsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRestsIdPatch**
> \Swagger\Client\Model\DataSourceRest dataSourceRestsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | DataSourceRest id
$data = new \Swagger\Client\Model\DataSourceRest(); // \Swagger\Client\Model\DataSourceRest | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourceRestsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRest id |
 **data** | [**\Swagger\Client\Model\DataSourceRest**](../Model/\Swagger\Client\Model\DataSourceRest.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRest**](../Model/DataSourceRest.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRestsIdPut**
> \Swagger\Client\Model\DataSourceRest dataSourceRestsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourceRest(); // \Swagger\Client\Model\DataSourceRest | Model instance data

try {
    $result = $api_instance->dataSourceRestsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourceRest**](../Model/\Swagger\Client\Model\DataSourceRest.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRest**](../Model/DataSourceRest.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRestsIdReplacePost**
> \Swagger\Client\Model\DataSourceRest dataSourceRestsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourceRest(); // \Swagger\Client\Model\DataSourceRest | Model instance data

try {
    $result = $api_instance->dataSourceRestsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourceRest**](../Model/\Swagger\Client\Model\DataSourceRest.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRest**](../Model/DataSourceRest.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRestsIdTeamGet**
> \Swagger\Client\Model\Team dataSourceRestsIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$id = "id_example"; // string | DataSourceRest id
$refresh = true; // bool | 

try {
    $result = $api_instance->dataSourceRestsIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRest id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRestsPost**
> \Swagger\Client\Model\DataSourceRest dataSourceRestsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRestApi();
$data = new \Swagger\Client\Model\DataSourceRest(); // \Swagger\Client\Model\DataSourceRest | Model instance data

try {
    $result = $api_instance->dataSourceRestsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRestApi->dataSourceRestsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceRest**](../Model/\Swagger\Client\Model\DataSourceRest.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRest**](../Model/DataSourceRest.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

