# Tweak\Api\DataSourcePostgreSqlApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataSourcePostgreSqlsChangeStreamGet**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsChangeStreamGet) | **GET** /DataSourcePostgreSqls/change-stream | Create a change stream.
[**dataSourcePostgreSqlsChangeStreamPost**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsChangeStreamPost) | **POST** /DataSourcePostgreSqls/change-stream | Create a change stream.
[**dataSourcePostgreSqlsCountGet**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsCountGet) | **GET** /DataSourcePostgreSqls/count | Count instances of the model matched by where from the data source.
[**dataSourcePostgreSqlsFindOneGet**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsFindOneGet) | **GET** /DataSourcePostgreSqls/findOne | Find first instance of the model matched by filter from the data source.
[**dataSourcePostgreSqlsGet**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsGet) | **GET** /DataSourcePostgreSqls | Find all instances of the model matched by filter from the data source.
[**dataSourcePostgreSqlsIdDelete**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdDelete) | **DELETE** /DataSourcePostgreSqls/{id} | Delete a model instance by {{id}} from the data source.
[**dataSourcePostgreSqlsIdDynamicDatasCountGet**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdDynamicDatasCountGet) | **GET** /DataSourcePostgreSqls/{id}/dynamicDatas/count | Counts dynamicDatas of DataSourcePostgreSql.
[**dataSourcePostgreSqlsIdDynamicDatasDelete**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdDynamicDatasDelete) | **DELETE** /DataSourcePostgreSqls/{id}/dynamicDatas | Deletes all dynamicDatas of this model.
[**dataSourcePostgreSqlsIdDynamicDatasFkDelete**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdDynamicDatasFkDelete) | **DELETE** /DataSourcePostgreSqls/{id}/dynamicDatas/{fk} | Delete a related item by id for dynamicDatas.
[**dataSourcePostgreSqlsIdDynamicDatasFkGet**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdDynamicDatasFkGet) | **GET** /DataSourcePostgreSqls/{id}/dynamicDatas/{fk} | Find a related item by id for dynamicDatas.
[**dataSourcePostgreSqlsIdDynamicDatasFkPut**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdDynamicDatasFkPut) | **PUT** /DataSourcePostgreSqls/{id}/dynamicDatas/{fk} | Update a related item by id for dynamicDatas.
[**dataSourcePostgreSqlsIdDynamicDatasGet**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdDynamicDatasGet) | **GET** /DataSourcePostgreSqls/{id}/dynamicDatas | Queries dynamicDatas of DataSourcePostgreSql.
[**dataSourcePostgreSqlsIdDynamicDatasPost**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdDynamicDatasPost) | **POST** /DataSourcePostgreSqls/{id}/dynamicDatas | Creates a new instance in dynamicDatas of this model.
[**dataSourcePostgreSqlsIdExistsGet**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdExistsGet) | **GET** /DataSourcePostgreSqls/{id}/exists | Check whether a model instance exists in the data source.
[**dataSourcePostgreSqlsIdGet**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdGet) | **GET** /DataSourcePostgreSqls/{id} | Find a model instance by {{id}} from the data source.
[**dataSourcePostgreSqlsIdHead**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdHead) | **HEAD** /DataSourcePostgreSqls/{id} | Check whether a model instance exists in the data source.
[**dataSourcePostgreSqlsIdPatch**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdPatch) | **PATCH** /DataSourcePostgreSqls/{id} | Patch attributes for a model instance and persist it into the data source.
[**dataSourcePostgreSqlsIdPut**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdPut) | **PUT** /DataSourcePostgreSqls/{id} | Replace attributes for a model instance and persist it into the data source.
[**dataSourcePostgreSqlsIdReplacePost**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdReplacePost) | **POST** /DataSourcePostgreSqls/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**dataSourcePostgreSqlsIdTeamGet**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsIdTeamGet) | **GET** /DataSourcePostgreSqls/{id}/team | Fetches belongsTo relation team.
[**dataSourcePostgreSqlsPatch**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsPatch) | **PATCH** /DataSourcePostgreSqls | Patch an existing model instance or insert a new one into the data source.
[**dataSourcePostgreSqlsPost**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsPost) | **POST** /DataSourcePostgreSqls | Create a new instance of the model and persist it into the data source.
[**dataSourcePostgreSqlsPut**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsPut) | **PUT** /DataSourcePostgreSqls | Replace an existing model instance or insert a new one into the data source.
[**dataSourcePostgreSqlsReplaceOrCreatePost**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsReplaceOrCreatePost) | **POST** /DataSourcePostgreSqls/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**dataSourcePostgreSqlsUpdatePost**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsUpdatePost) | **POST** /DataSourcePostgreSqls/update | Update instances of the model matched by {{where}} from the data source.
[**dataSourcePostgreSqlsUpsertWithWherePost**](DataSourcePostgreSqlApi.md#dataSourcePostgreSqlsUpsertWithWherePost) | **POST** /DataSourcePostgreSqls/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **dataSourcePostgreSqlsChangeStreamGet**
> \SplFileObject dataSourcePostgreSqlsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourcePostgreSqlsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourcePostgreSqlsChangeStreamPost**
> \SplFileObject dataSourcePostgreSqlsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourcePostgreSqlsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **dataSourcePostgreSqlsCountGet**
> \Swagger\Client\Model\InlineResponse2001 dataSourcePostgreSqlsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourcePostgreSqlsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourcePostgreSqlsFindOneGet**
> \Swagger\Client\Model\DataSourcePostgreSql dataSourcePostgreSqlsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourcePostgreSqlsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/DataSourcePostgreSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsGet**
> \Swagger\Client\Model\DataSourcePostgreSql[] dataSourcePostgreSqlsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourcePostgreSqlsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourcePostgreSql[]**](../Model/DataSourcePostgreSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsIdDelete**
> object dataSourcePostgreSqlsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourcePostgreSqlsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **dataSourcePostgreSqlsIdDynamicDatasCountGet**
> \Swagger\Client\Model\InlineResponse2001 dataSourcePostgreSqlsIdDynamicDatasCountGet($id, $where)

Counts dynamicDatas of DataSourcePostgreSql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | DataSourcePostgreSql id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourcePostgreSqlsIdDynamicDatasCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdDynamicDatasCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourcePostgreSql id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsIdDynamicDatasDelete**
> dataSourcePostgreSqlsIdDynamicDatasDelete($id)

Deletes all dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | DataSourcePostgreSql id

try {
    $api_instance->dataSourcePostgreSqlsIdDynamicDatasDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdDynamicDatasDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourcePostgreSql id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsIdDynamicDatasFkDelete**
> dataSourcePostgreSqlsIdDynamicDatasFkDelete($id, $fk)

Delete a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | DataSourcePostgreSql id
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $api_instance->dataSourcePostgreSqlsIdDynamicDatasFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdDynamicDatasFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourcePostgreSql id |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsIdDynamicDatasFkGet**
> \Swagger\Client\Model\DynamicData dataSourcePostgreSqlsIdDynamicDatasFkGet($id, $fk)

Find a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | DataSourcePostgreSql id
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $result = $api_instance->dataSourcePostgreSqlsIdDynamicDatasFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdDynamicDatasFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourcePostgreSql id |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsIdDynamicDatasFkPut**
> \Swagger\Client\Model\DynamicData dataSourcePostgreSqlsIdDynamicDatasFkPut($id, $fk, $data)

Update a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | DataSourcePostgreSql id
$fk = "fk_example"; // string | Foreign key for dynamicDatas
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->dataSourcePostgreSqlsIdDynamicDatasFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdDynamicDatasFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourcePostgreSql id |
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

# **dataSourcePostgreSqlsIdDynamicDatasGet**
> \Swagger\Client\Model\DynamicData[] dataSourcePostgreSqlsIdDynamicDatasGet($id, $filter)

Queries dynamicDatas of DataSourcePostgreSql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | DataSourcePostgreSql id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->dataSourcePostgreSqlsIdDynamicDatasGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdDynamicDatasGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourcePostgreSql id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData[]**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsIdDynamicDatasPost**
> \Swagger\Client\Model\DynamicData dataSourcePostgreSqlsIdDynamicDatasPost($id, $data)

Creates a new instance in dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | DataSourcePostgreSql id
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->dataSourcePostgreSqlsIdDynamicDatasPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdDynamicDatasPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourcePostgreSql id |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 dataSourcePostgreSqlsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourcePostgreSqlsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourcePostgreSqlsIdGet**
> \Swagger\Client\Model\DataSourcePostgreSql dataSourcePostgreSqlsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourcePostgreSqlsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/DataSourcePostgreSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsIdHead**
> \Swagger\Client\Model\InlineResponse2002 dataSourcePostgreSqlsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourcePostgreSqlsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **dataSourcePostgreSqlsIdPatch**
> \Swagger\Client\Model\DataSourcePostgreSql dataSourcePostgreSqlsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | DataSourcePostgreSql id
$data = new \Swagger\Client\Model\DataSourcePostgreSql(); // \Swagger\Client\Model\DataSourcePostgreSql | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourcePostgreSqlsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourcePostgreSql id |
 **data** | [**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/\Swagger\Client\Model\DataSourcePostgreSql.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/DataSourcePostgreSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsIdPut**
> \Swagger\Client\Model\DataSourcePostgreSql dataSourcePostgreSqlsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourcePostgreSql(); // \Swagger\Client\Model\DataSourcePostgreSql | Model instance data

try {
    $result = $api_instance->dataSourcePostgreSqlsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/\Swagger\Client\Model\DataSourcePostgreSql.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/DataSourcePostgreSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsIdReplacePost**
> \Swagger\Client\Model\DataSourcePostgreSql dataSourcePostgreSqlsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourcePostgreSql(); // \Swagger\Client\Model\DataSourcePostgreSql | Model instance data

try {
    $result = $api_instance->dataSourcePostgreSqlsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/\Swagger\Client\Model\DataSourcePostgreSql.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/DataSourcePostgreSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsIdTeamGet**
> \Swagger\Client\Model\Team dataSourcePostgreSqlsIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$id = "id_example"; // string | DataSourcePostgreSql id
$refresh = true; // bool | 

try {
    $result = $api_instance->dataSourcePostgreSqlsIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourcePostgreSql id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsPatch**
> \Swagger\Client\Model\DataSourcePostgreSql dataSourcePostgreSqlsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$data = new \Swagger\Client\Model\DataSourcePostgreSql(); // \Swagger\Client\Model\DataSourcePostgreSql | Model instance data

try {
    $result = $api_instance->dataSourcePostgreSqlsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/\Swagger\Client\Model\DataSourcePostgreSql.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/DataSourcePostgreSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsPost**
> \Swagger\Client\Model\DataSourcePostgreSql dataSourcePostgreSqlsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$data = new \Swagger\Client\Model\DataSourcePostgreSql(); // \Swagger\Client\Model\DataSourcePostgreSql | Model instance data

try {
    $result = $api_instance->dataSourcePostgreSqlsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/\Swagger\Client\Model\DataSourcePostgreSql.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/DataSourcePostgreSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsPut**
> \Swagger\Client\Model\DataSourcePostgreSql dataSourcePostgreSqlsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$data = new \Swagger\Client\Model\DataSourcePostgreSql(); // \Swagger\Client\Model\DataSourcePostgreSql | Model instance data

try {
    $result = $api_instance->dataSourcePostgreSqlsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/\Swagger\Client\Model\DataSourcePostgreSql.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/DataSourcePostgreSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsReplaceOrCreatePost**
> \Swagger\Client\Model\DataSourcePostgreSql dataSourcePostgreSqlsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$data = new \Swagger\Client\Model\DataSourcePostgreSql(); // \Swagger\Client\Model\DataSourcePostgreSql | Model instance data

try {
    $result = $api_instance->dataSourcePostgreSqlsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/\Swagger\Client\Model\DataSourcePostgreSql.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/DataSourcePostgreSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsUpdatePost**
> \Swagger\Client\Model\InlineResponse2003 dataSourcePostgreSqlsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DataSourcePostgreSql(); // \Swagger\Client\Model\DataSourcePostgreSql | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourcePostgreSqlsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/\Swagger\Client\Model\DataSourcePostgreSql.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcePostgreSqlsUpsertWithWherePost**
> \Swagger\Client\Model\DataSourcePostgreSql dataSourcePostgreSqlsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourcePostgreSqlApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DataSourcePostgreSql(); // \Swagger\Client\Model\DataSourcePostgreSql | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourcePostgreSqlsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcePostgreSqlApi->dataSourcePostgreSqlsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/\Swagger\Client\Model\DataSourcePostgreSql.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/DataSourcePostgreSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

