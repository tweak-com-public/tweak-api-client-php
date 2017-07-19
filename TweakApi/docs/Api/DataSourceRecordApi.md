# Tweak\Api\DataSourceRecordApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataSourceRecordsChangeStreamGet**](DataSourceRecordApi.md#dataSourceRecordsChangeStreamGet) | **GET** /DataSourceRecords/change-stream | Create a change stream.
[**dataSourceRecordsChangeStreamPost**](DataSourceRecordApi.md#dataSourceRecordsChangeStreamPost) | **POST** /DataSourceRecords/change-stream | Create a change stream.
[**dataSourceRecordsCountGet**](DataSourceRecordApi.md#dataSourceRecordsCountGet) | **GET** /DataSourceRecords/count | Count instances of the model matched by where from the data source.
[**dataSourceRecordsFindOneGet**](DataSourceRecordApi.md#dataSourceRecordsFindOneGet) | **GET** /DataSourceRecords/findOne | Find first instance of the model matched by filter from the data source.
[**dataSourceRecordsGet**](DataSourceRecordApi.md#dataSourceRecordsGet) | **GET** /DataSourceRecords | Find all instances of the model matched by filter from the data source.
[**dataSourceRecordsIdDataSourceGet**](DataSourceRecordApi.md#dataSourceRecordsIdDataSourceGet) | **GET** /DataSourceRecords/{id}/dataSource | Fetches belongsTo relation dataSource.
[**dataSourceRecordsIdDelete**](DataSourceRecordApi.md#dataSourceRecordsIdDelete) | **DELETE** /DataSourceRecords/{id} | Delete a model instance by {{id}} from the data source.
[**dataSourceRecordsIdExistsGet**](DataSourceRecordApi.md#dataSourceRecordsIdExistsGet) | **GET** /DataSourceRecords/{id}/exists | Check whether a model instance exists in the data source.
[**dataSourceRecordsIdGet**](DataSourceRecordApi.md#dataSourceRecordsIdGet) | **GET** /DataSourceRecords/{id} | Find a model instance by {{id}} from the data source.
[**dataSourceRecordsIdHead**](DataSourceRecordApi.md#dataSourceRecordsIdHead) | **HEAD** /DataSourceRecords/{id} | Check whether a model instance exists in the data source.
[**dataSourceRecordsIdPatch**](DataSourceRecordApi.md#dataSourceRecordsIdPatch) | **PATCH** /DataSourceRecords/{id} | Patch attributes for a model instance and persist it into the data source.
[**dataSourceRecordsIdPut**](DataSourceRecordApi.md#dataSourceRecordsIdPut) | **PUT** /DataSourceRecords/{id} | Replace attributes for a model instance and persist it into the data source.
[**dataSourceRecordsIdReplacePost**](DataSourceRecordApi.md#dataSourceRecordsIdReplacePost) | **POST** /DataSourceRecords/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**dataSourceRecordsIdTeamGet**](DataSourceRecordApi.md#dataSourceRecordsIdTeamGet) | **GET** /DataSourceRecords/{id}/team | Fetches belongsTo relation team.
[**dataSourceRecordsIdValuesCountGet**](DataSourceRecordApi.md#dataSourceRecordsIdValuesCountGet) | **GET** /DataSourceRecords/{id}/values/count | Counts values of DataSourceRecord.
[**dataSourceRecordsIdValuesDelete**](DataSourceRecordApi.md#dataSourceRecordsIdValuesDelete) | **DELETE** /DataSourceRecords/{id}/values | Deletes all values of this model.
[**dataSourceRecordsIdValuesFkDelete**](DataSourceRecordApi.md#dataSourceRecordsIdValuesFkDelete) | **DELETE** /DataSourceRecords/{id}/values/{fk} | Delete a related item by id for values.
[**dataSourceRecordsIdValuesFkGet**](DataSourceRecordApi.md#dataSourceRecordsIdValuesFkGet) | **GET** /DataSourceRecords/{id}/values/{fk} | Find a related item by id for values.
[**dataSourceRecordsIdValuesFkPut**](DataSourceRecordApi.md#dataSourceRecordsIdValuesFkPut) | **PUT** /DataSourceRecords/{id}/values/{fk} | Update a related item by id for values.
[**dataSourceRecordsIdValuesGet**](DataSourceRecordApi.md#dataSourceRecordsIdValuesGet) | **GET** /DataSourceRecords/{id}/values | Queries values of DataSourceRecord.
[**dataSourceRecordsIdValuesPost**](DataSourceRecordApi.md#dataSourceRecordsIdValuesPost) | **POST** /DataSourceRecords/{id}/values | Creates a new instance in values of this model.
[**dataSourceRecordsPatch**](DataSourceRecordApi.md#dataSourceRecordsPatch) | **PATCH** /DataSourceRecords | Patch an existing model instance or insert a new one into the data source.
[**dataSourceRecordsPost**](DataSourceRecordApi.md#dataSourceRecordsPost) | **POST** /DataSourceRecords | Create a new instance of the model and persist it into the data source.
[**dataSourceRecordsPut**](DataSourceRecordApi.md#dataSourceRecordsPut) | **PUT** /DataSourceRecords | Replace an existing model instance or insert a new one into the data source.
[**dataSourceRecordsReplaceOrCreatePost**](DataSourceRecordApi.md#dataSourceRecordsReplaceOrCreatePost) | **POST** /DataSourceRecords/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**dataSourceRecordsUpdatePost**](DataSourceRecordApi.md#dataSourceRecordsUpdatePost) | **POST** /DataSourceRecords/update | Update instances of the model matched by {{where}} from the data source.
[**dataSourceRecordsUpsertWithWherePost**](DataSourceRecordApi.md#dataSourceRecordsUpsertWithWherePost) | **POST** /DataSourceRecords/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **dataSourceRecordsChangeStreamGet**
> \SplFileObject dataSourceRecordsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourceRecordsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRecordsChangeStreamPost**
> \SplFileObject dataSourceRecordsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourceRecordsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRecordsCountGet**
> \Swagger\Client\Model\InlineResponse200 dataSourceRecordsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourceRecordsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRecordsFindOneGet**
> \Swagger\Client\Model\DataSourceRecord dataSourceRecordsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceRecordsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecord**](../Model/DataSourceRecord.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsGet**
> \Swagger\Client\Model\DataSourceRecord[] dataSourceRecordsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceRecordsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecord[]**](../Model/DataSourceRecord.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsIdDataSourceGet**
> \Swagger\Client\Model\DataSource dataSourceRecordsIdDataSourceGet($id, $refresh)

Fetches belongsTo relation dataSource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | DataSourceRecord id
$refresh = true; // bool | 

try {
    $result = $api_instance->dataSourceRecordsIdDataSourceGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdDataSourceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecord id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSource**](../Model/DataSource.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsIdDelete**
> object dataSourceRecordsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceRecordsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRecordsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 dataSourceRecordsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceRecordsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRecordsIdGet**
> \Swagger\Client\Model\DataSourceRecord dataSourceRecordsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceRecordsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecord**](../Model/DataSourceRecord.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsIdHead**
> \Swagger\Client\Model\InlineResponse2002 dataSourceRecordsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceRecordsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRecordsIdPatch**
> \Swagger\Client\Model\DataSourceRecord dataSourceRecordsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | DataSourceRecord id
$data = new \Swagger\Client\Model\DataSourceRecord(); // \Swagger\Client\Model\DataSourceRecord | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourceRecordsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecord id |
 **data** | [**\Swagger\Client\Model\DataSourceRecord**](../Model/\Swagger\Client\Model\DataSourceRecord.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecord**](../Model/DataSourceRecord.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsIdPut**
> \Swagger\Client\Model\DataSourceRecord dataSourceRecordsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourceRecord(); // \Swagger\Client\Model\DataSourceRecord | Model instance data

try {
    $result = $api_instance->dataSourceRecordsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourceRecord**](../Model/\Swagger\Client\Model\DataSourceRecord.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecord**](../Model/DataSourceRecord.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsIdReplacePost**
> \Swagger\Client\Model\DataSourceRecord dataSourceRecordsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourceRecord(); // \Swagger\Client\Model\DataSourceRecord | Model instance data

try {
    $result = $api_instance->dataSourceRecordsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourceRecord**](../Model/\Swagger\Client\Model\DataSourceRecord.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecord**](../Model/DataSourceRecord.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsIdTeamGet**
> \Swagger\Client\Model\Team dataSourceRecordsIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | DataSourceRecord id
$refresh = true; // bool | 

try {
    $result = $api_instance->dataSourceRecordsIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecord id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsIdValuesCountGet**
> \Swagger\Client\Model\InlineResponse200 dataSourceRecordsIdValuesCountGet($id, $where)

Counts values of DataSourceRecord.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | DataSourceRecord id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourceRecordsIdValuesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdValuesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecord id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsIdValuesDelete**
> dataSourceRecordsIdValuesDelete($id)

Deletes all values of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | DataSourceRecord id

try {
    $api_instance->dataSourceRecordsIdValuesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdValuesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecord id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsIdValuesFkDelete**
> dataSourceRecordsIdValuesFkDelete($id, $fk)

Delete a related item by id for values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | DataSourceRecord id
$fk = "fk_example"; // string | Foreign key for values

try {
    $api_instance->dataSourceRecordsIdValuesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdValuesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecord id |
 **fk** | **string**| Foreign key for values |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsIdValuesFkGet**
> \Swagger\Client\Model\DataSourceRecordValue dataSourceRecordsIdValuesFkGet($id, $fk)

Find a related item by id for values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | DataSourceRecord id
$fk = "fk_example"; // string | Foreign key for values

try {
    $result = $api_instance->dataSourceRecordsIdValuesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdValuesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecord id |
 **fk** | **string**| Foreign key for values |

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsIdValuesFkPut**
> \Swagger\Client\Model\DataSourceRecordValue dataSourceRecordsIdValuesFkPut($id, $fk, $data)

Update a related item by id for values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | DataSourceRecord id
$fk = "fk_example"; // string | Foreign key for values
$data = new \Swagger\Client\Model\DataSourceRecordValue(); // \Swagger\Client\Model\DataSourceRecordValue | 

try {
    $result = $api_instance->dataSourceRecordsIdValuesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdValuesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecord id |
 **fk** | **string**| Foreign key for values |
 **data** | [**\Swagger\Client\Model\DataSourceRecordValue**](../Model/\Swagger\Client\Model\DataSourceRecordValue.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsIdValuesGet**
> \Swagger\Client\Model\DataSourceRecordValue[] dataSourceRecordsIdValuesGet($id, $filter)

Queries values of DataSourceRecord.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | DataSourceRecord id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->dataSourceRecordsIdValuesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecord id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue[]**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsIdValuesPost**
> \Swagger\Client\Model\DataSourceRecordValue dataSourceRecordsIdValuesPost($id, $data)

Creates a new instance in values of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$id = "id_example"; // string | DataSourceRecord id
$data = new \Swagger\Client\Model\DataSourceRecordValue(); // \Swagger\Client\Model\DataSourceRecordValue | 

try {
    $result = $api_instance->dataSourceRecordsIdValuesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsIdValuesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecord id |
 **data** | [**\Swagger\Client\Model\DataSourceRecordValue**](../Model/\Swagger\Client\Model\DataSourceRecordValue.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsPatch**
> \Swagger\Client\Model\DataSourceRecord dataSourceRecordsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$data = new \Swagger\Client\Model\DataSourceRecord(); // \Swagger\Client\Model\DataSourceRecord | Model instance data

try {
    $result = $api_instance->dataSourceRecordsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceRecord**](../Model/\Swagger\Client\Model\DataSourceRecord.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecord**](../Model/DataSourceRecord.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsPost**
> \Swagger\Client\Model\DataSourceRecord dataSourceRecordsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$data = new \Swagger\Client\Model\DataSourceRecord(); // \Swagger\Client\Model\DataSourceRecord | Model instance data

try {
    $result = $api_instance->dataSourceRecordsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceRecord**](../Model/\Swagger\Client\Model\DataSourceRecord.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecord**](../Model/DataSourceRecord.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsPut**
> \Swagger\Client\Model\DataSourceRecord dataSourceRecordsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$data = new \Swagger\Client\Model\DataSourceRecord(); // \Swagger\Client\Model\DataSourceRecord | Model instance data

try {
    $result = $api_instance->dataSourceRecordsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceRecord**](../Model/\Swagger\Client\Model\DataSourceRecord.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecord**](../Model/DataSourceRecord.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsReplaceOrCreatePost**
> \Swagger\Client\Model\DataSourceRecord dataSourceRecordsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$data = new \Swagger\Client\Model\DataSourceRecord(); // \Swagger\Client\Model\DataSourceRecord | Model instance data

try {
    $result = $api_instance->dataSourceRecordsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceRecord**](../Model/\Swagger\Client\Model\DataSourceRecord.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecord**](../Model/DataSourceRecord.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsUpdatePost**
> \Swagger\Client\Model\InlineResponse2001 dataSourceRecordsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DataSourceRecord(); // \Swagger\Client\Model\DataSourceRecord | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourceRecordsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DataSourceRecord**](../Model/\Swagger\Client\Model\DataSourceRecord.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordsUpsertWithWherePost**
> \Swagger\Client\Model\DataSourceRecord dataSourceRecordsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DataSourceRecord(); // \Swagger\Client\Model\DataSourceRecord | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourceRecordsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordApi->dataSourceRecordsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DataSourceRecord**](../Model/\Swagger\Client\Model\DataSourceRecord.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecord**](../Model/DataSourceRecord.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

