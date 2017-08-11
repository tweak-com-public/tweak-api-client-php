# Tweak\Api\DataSourceKeyApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataSourcesChangeStreamGet**](DataSourceKeyApi.md#dataSourcesChangeStreamGet) | **GET** /DataSources/change-stream | Create a change stream.
[**dataSourcesChangeStreamPost**](DataSourceKeyApi.md#dataSourcesChangeStreamPost) | **POST** /DataSources/change-stream | Create a change stream.
[**dataSourcesCountGet**](DataSourceKeyApi.md#dataSourcesCountGet) | **GET** /DataSources/count | Count instances of the model matched by where from the data source.
[**dataSourcesFindOneGet**](DataSourceKeyApi.md#dataSourcesFindOneGet) | **GET** /DataSources/findOne | Find first instance of the model matched by filter from the data source.
[**dataSourcesGet**](DataSourceKeyApi.md#dataSourcesGet) | **GET** /DataSources | Find all instances of the model matched by filter from the data source.
[**dataSourcesIdDataSourceGet**](DataSourceKeyApi.md#dataSourcesIdDataSourceGet) | **GET** /DataSources/{id}/dataSource | Fetches belongsTo relation dataSource.
[**dataSourcesIdDelete**](DataSourceKeyApi.md#dataSourcesIdDelete) | **DELETE** /DataSources/{id} | Delete a model instance by {{id}} from the data source.
[**dataSourcesIdExistsGet**](DataSourceKeyApi.md#dataSourcesIdExistsGet) | **GET** /DataSources/{id}/exists | Check whether a model instance exists in the data source.
[**dataSourcesIdGet**](DataSourceKeyApi.md#dataSourcesIdGet) | **GET** /DataSources/{id} | Find a model instance by {{id}} from the data source.
[**dataSourcesIdHead**](DataSourceKeyApi.md#dataSourcesIdHead) | **HEAD** /DataSources/{id} | Check whether a model instance exists in the data source.
[**dataSourcesIdPatch**](DataSourceKeyApi.md#dataSourcesIdPatch) | **PATCH** /DataSources/{id} | Patch attributes for a model instance and persist it into the data source.
[**dataSourcesIdPut**](DataSourceKeyApi.md#dataSourcesIdPut) | **PUT** /DataSources/{id} | Replace attributes for a model instance and persist it into the data source.
[**dataSourcesIdRecordValuesCountGet**](DataSourceKeyApi.md#dataSourcesIdRecordValuesCountGet) | **GET** /DataSources/{id}/recordValues/count | Counts recordValues of DataSourceKey.
[**dataSourcesIdRecordValuesDelete**](DataSourceKeyApi.md#dataSourcesIdRecordValuesDelete) | **DELETE** /DataSources/{id}/recordValues | Deletes all recordValues of this model.
[**dataSourcesIdRecordValuesFkDelete**](DataSourceKeyApi.md#dataSourcesIdRecordValuesFkDelete) | **DELETE** /DataSources/{id}/recordValues/{fk} | Delete a related item by id for recordValues.
[**dataSourcesIdRecordValuesFkGet**](DataSourceKeyApi.md#dataSourcesIdRecordValuesFkGet) | **GET** /DataSources/{id}/recordValues/{fk} | Find a related item by id for recordValues.
[**dataSourcesIdRecordValuesFkPut**](DataSourceKeyApi.md#dataSourcesIdRecordValuesFkPut) | **PUT** /DataSources/{id}/recordValues/{fk} | Update a related item by id for recordValues.
[**dataSourcesIdRecordValuesGet**](DataSourceKeyApi.md#dataSourcesIdRecordValuesGet) | **GET** /DataSources/{id}/recordValues | Queries recordValues of DataSourceKey.
[**dataSourcesIdRecordValuesPost**](DataSourceKeyApi.md#dataSourcesIdRecordValuesPost) | **POST** /DataSources/{id}/recordValues | Creates a new instance in recordValues of this model.
[**dataSourcesIdReplacePost**](DataSourceKeyApi.md#dataSourcesIdReplacePost) | **POST** /DataSources/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**dataSourcesIdTeamGet**](DataSourceKeyApi.md#dataSourcesIdTeamGet) | **GET** /DataSources/{id}/team | Fetches belongsTo relation team.
[**dataSourcesPatch**](DataSourceKeyApi.md#dataSourcesPatch) | **PATCH** /DataSources | Patch an existing model instance or insert a new one into the data source.
[**dataSourcesPost**](DataSourceKeyApi.md#dataSourcesPost) | **POST** /DataSources | Create a new instance of the model and persist it into the data source.
[**dataSourcesPut**](DataSourceKeyApi.md#dataSourcesPut) | **PUT** /DataSources | Replace an existing model instance or insert a new one into the data source.
[**dataSourcesReplaceOrCreatePost**](DataSourceKeyApi.md#dataSourcesReplaceOrCreatePost) | **POST** /DataSources/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**dataSourcesUpdatePost**](DataSourceKeyApi.md#dataSourcesUpdatePost) | **POST** /DataSources/update | Update instances of the model matched by {{where}} from the data source.
[**dataSourcesUpsertWithWherePost**](DataSourceKeyApi.md#dataSourcesUpsertWithWherePost) | **POST** /DataSources/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **dataSourcesChangeStreamGet**
> \SplFileObject dataSourcesChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourcesChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourcesChangeStreamPost**
> \SplFileObject dataSourcesChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourcesChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **dataSourcesCountGet**
> \Swagger\Client\Model\InlineResponse200 dataSourcesCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourcesCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesFindOneGet**
> \Swagger\Client\Model\DataSourceKey dataSourcesFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourcesFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesGet**
> \Swagger\Client\Model\DataSourceKey[] dataSourcesGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourcesGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey[]**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdDataSourceGet**
> \Swagger\Client\Model\DataSource dataSourcesIdDataSourceGet($id, $refresh)

Fetches belongsTo relation dataSource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | DataSourceKey id
$refresh = true; // bool | 

try {
    $result = $api_instance->dataSourcesIdDataSourceGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdDataSourceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceKey id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSource**](../Model/DataSource.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdDelete**
> object dataSourcesIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourcesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **dataSourcesIdExistsGet**
> \Swagger\Client\Model\InlineResponse2001 dataSourcesIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourcesIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdExistsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdGet**
> \Swagger\Client\Model\DataSourceKey dataSourcesIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourcesIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdHead**
> \Swagger\Client\Model\InlineResponse2001 dataSourcesIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourcesIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdPatch**
> \Swagger\Client\Model\DataSourceKey dataSourcesIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | DataSourceKey id
$data = new \Swagger\Client\Model\DataSourceKey(); // \Swagger\Client\Model\DataSourceKey | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourcesIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceKey id |
 **data** | [**\Swagger\Client\Model\DataSourceKey**](../Model/\Swagger\Client\Model\DataSourceKey.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdPut**
> \Swagger\Client\Model\DataSourceKey dataSourcesIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourceKey(); // \Swagger\Client\Model\DataSourceKey | Model instance data

try {
    $result = $api_instance->dataSourcesIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourceKey**](../Model/\Swagger\Client\Model\DataSourceKey.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdRecordValuesCountGet**
> \Swagger\Client\Model\InlineResponse200 dataSourcesIdRecordValuesCountGet($id, $where)

Counts recordValues of DataSourceKey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | DataSourceKey id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourcesIdRecordValuesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdRecordValuesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceKey id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdRecordValuesDelete**
> dataSourcesIdRecordValuesDelete($id)

Deletes all recordValues of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | DataSourceKey id

try {
    $api_instance->dataSourcesIdRecordValuesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdRecordValuesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceKey id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdRecordValuesFkDelete**
> dataSourcesIdRecordValuesFkDelete($id, $fk)

Delete a related item by id for recordValues.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | DataSourceKey id
$fk = "fk_example"; // string | Foreign key for recordValues

try {
    $api_instance->dataSourcesIdRecordValuesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdRecordValuesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceKey id |
 **fk** | **string**| Foreign key for recordValues |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdRecordValuesFkGet**
> \Swagger\Client\Model\DataSourceRecordValue dataSourcesIdRecordValuesFkGet($id, $fk)

Find a related item by id for recordValues.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | DataSourceKey id
$fk = "fk_example"; // string | Foreign key for recordValues

try {
    $result = $api_instance->dataSourcesIdRecordValuesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdRecordValuesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceKey id |
 **fk** | **string**| Foreign key for recordValues |

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdRecordValuesFkPut**
> \Swagger\Client\Model\DataSourceRecordValue dataSourcesIdRecordValuesFkPut($id, $fk, $data)

Update a related item by id for recordValues.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | DataSourceKey id
$fk = "fk_example"; // string | Foreign key for recordValues
$data = new \Swagger\Client\Model\DataSourceRecordValue(); // \Swagger\Client\Model\DataSourceRecordValue | 

try {
    $result = $api_instance->dataSourcesIdRecordValuesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdRecordValuesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceKey id |
 **fk** | **string**| Foreign key for recordValues |
 **data** | [**\Swagger\Client\Model\DataSourceRecordValue**](../Model/\Swagger\Client\Model\DataSourceRecordValue.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdRecordValuesGet**
> \Swagger\Client\Model\DataSourceRecordValue[] dataSourcesIdRecordValuesGet($id, $filter)

Queries recordValues of DataSourceKey.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | DataSourceKey id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->dataSourcesIdRecordValuesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdRecordValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceKey id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue[]**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdRecordValuesPost**
> \Swagger\Client\Model\DataSourceRecordValue dataSourcesIdRecordValuesPost($id, $data)

Creates a new instance in recordValues of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | DataSourceKey id
$data = new \Swagger\Client\Model\DataSourceRecordValue(); // \Swagger\Client\Model\DataSourceRecordValue | 

try {
    $result = $api_instance->dataSourcesIdRecordValuesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdRecordValuesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceKey id |
 **data** | [**\Swagger\Client\Model\DataSourceRecordValue**](../Model/\Swagger\Client\Model\DataSourceRecordValue.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdReplacePost**
> \Swagger\Client\Model\DataSourceKey dataSourcesIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourceKey(); // \Swagger\Client\Model\DataSourceKey | Model instance data

try {
    $result = $api_instance->dataSourcesIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourceKey**](../Model/\Swagger\Client\Model\DataSourceKey.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesIdTeamGet**
> \Swagger\Client\Model\Team dataSourcesIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$id = "id_example"; // string | DataSourceKey id
$refresh = true; // bool | 

try {
    $result = $api_instance->dataSourcesIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceKey id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesPatch**
> \Swagger\Client\Model\DataSourceKey dataSourcesPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$data = new \Swagger\Client\Model\DataSourceKey(); // \Swagger\Client\Model\DataSourceKey | Model instance data

try {
    $result = $api_instance->dataSourcesPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceKey**](../Model/\Swagger\Client\Model\DataSourceKey.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesPost**
> \Swagger\Client\Model\DataSourceKey dataSourcesPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$data = new \Swagger\Client\Model\DataSourceKey(); // \Swagger\Client\Model\DataSourceKey | Model instance data

try {
    $result = $api_instance->dataSourcesPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceKey**](../Model/\Swagger\Client\Model\DataSourceKey.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesPut**
> \Swagger\Client\Model\DataSourceKey dataSourcesPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$data = new \Swagger\Client\Model\DataSourceKey(); // \Swagger\Client\Model\DataSourceKey | Model instance data

try {
    $result = $api_instance->dataSourcesPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceKey**](../Model/\Swagger\Client\Model\DataSourceKey.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesReplaceOrCreatePost**
> \Swagger\Client\Model\DataSourceKey dataSourcesReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$data = new \Swagger\Client\Model\DataSourceKey(); // \Swagger\Client\Model\DataSourceKey | Model instance data

try {
    $result = $api_instance->dataSourcesReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceKey**](../Model/\Swagger\Client\Model\DataSourceKey.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 dataSourcesUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DataSourceKey(); // \Swagger\Client\Model\DataSourceKey | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourcesUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DataSourceKey**](../Model/\Swagger\Client\Model\DataSourceKey.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourcesUpsertWithWherePost**
> \Swagger\Client\Model\DataSourceKey dataSourcesUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceKeyApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DataSourceKey(); // \Swagger\Client\Model\DataSourceKey | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourcesUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceKeyApi->dataSourcesUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DataSourceKey**](../Model/\Swagger\Client\Model\DataSourceKey.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

