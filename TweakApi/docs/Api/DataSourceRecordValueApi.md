# Tweak\Api\DataSourceRecordValueApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataSourceRecordValuesChangeStreamGet**](DataSourceRecordValueApi.md#dataSourceRecordValuesChangeStreamGet) | **GET** /DataSourceRecordValues/change-stream | Create a change stream.
[**dataSourceRecordValuesChangeStreamPost**](DataSourceRecordValueApi.md#dataSourceRecordValuesChangeStreamPost) | **POST** /DataSourceRecordValues/change-stream | Create a change stream.
[**dataSourceRecordValuesCountGet**](DataSourceRecordValueApi.md#dataSourceRecordValuesCountGet) | **GET** /DataSourceRecordValues/count | Count instances of the model matched by where from the data source.
[**dataSourceRecordValuesFindOneGet**](DataSourceRecordValueApi.md#dataSourceRecordValuesFindOneGet) | **GET** /DataSourceRecordValues/findOne | Find first instance of the model matched by filter from the data source.
[**dataSourceRecordValuesGet**](DataSourceRecordValueApi.md#dataSourceRecordValuesGet) | **GET** /DataSourceRecordValues | Find all instances of the model matched by filter from the data source.
[**dataSourceRecordValuesIdDataSourceGet**](DataSourceRecordValueApi.md#dataSourceRecordValuesIdDataSourceGet) | **GET** /DataSourceRecordValues/{id}/dataSource | Fetches belongsTo relation dataSource.
[**dataSourceRecordValuesIdDelete**](DataSourceRecordValueApi.md#dataSourceRecordValuesIdDelete) | **DELETE** /DataSourceRecordValues/{id} | Delete a model instance by {{id}} from the data source.
[**dataSourceRecordValuesIdExistsGet**](DataSourceRecordValueApi.md#dataSourceRecordValuesIdExistsGet) | **GET** /DataSourceRecordValues/{id}/exists | Check whether a model instance exists in the data source.
[**dataSourceRecordValuesIdGet**](DataSourceRecordValueApi.md#dataSourceRecordValuesIdGet) | **GET** /DataSourceRecordValues/{id} | Find a model instance by {{id}} from the data source.
[**dataSourceRecordValuesIdHead**](DataSourceRecordValueApi.md#dataSourceRecordValuesIdHead) | **HEAD** /DataSourceRecordValues/{id} | Check whether a model instance exists in the data source.
[**dataSourceRecordValuesIdKeyGet**](DataSourceRecordValueApi.md#dataSourceRecordValuesIdKeyGet) | **GET** /DataSourceRecordValues/{id}/key | Fetches belongsTo relation key.
[**dataSourceRecordValuesIdPatch**](DataSourceRecordValueApi.md#dataSourceRecordValuesIdPatch) | **PATCH** /DataSourceRecordValues/{id} | Patch attributes for a model instance and persist it into the data source.
[**dataSourceRecordValuesIdPut**](DataSourceRecordValueApi.md#dataSourceRecordValuesIdPut) | **PUT** /DataSourceRecordValues/{id} | Replace attributes for a model instance and persist it into the data source.
[**dataSourceRecordValuesIdReplacePost**](DataSourceRecordValueApi.md#dataSourceRecordValuesIdReplacePost) | **POST** /DataSourceRecordValues/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**dataSourceRecordValuesIdTeamGet**](DataSourceRecordValueApi.md#dataSourceRecordValuesIdTeamGet) | **GET** /DataSourceRecordValues/{id}/team | Fetches belongsTo relation team.
[**dataSourceRecordValuesIdValuesGet**](DataSourceRecordValueApi.md#dataSourceRecordValuesIdValuesGet) | **GET** /DataSourceRecordValues/{id}/values | Fetches belongsTo relation values.
[**dataSourceRecordValuesPatch**](DataSourceRecordValueApi.md#dataSourceRecordValuesPatch) | **PATCH** /DataSourceRecordValues | Patch an existing model instance or insert a new one into the data source.
[**dataSourceRecordValuesPost**](DataSourceRecordValueApi.md#dataSourceRecordValuesPost) | **POST** /DataSourceRecordValues | Create a new instance of the model and persist it into the data source.
[**dataSourceRecordValuesPut**](DataSourceRecordValueApi.md#dataSourceRecordValuesPut) | **PUT** /DataSourceRecordValues | Replace an existing model instance or insert a new one into the data source.
[**dataSourceRecordValuesReplaceOrCreatePost**](DataSourceRecordValueApi.md#dataSourceRecordValuesReplaceOrCreatePost) | **POST** /DataSourceRecordValues/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**dataSourceRecordValuesUpdatePost**](DataSourceRecordValueApi.md#dataSourceRecordValuesUpdatePost) | **POST** /DataSourceRecordValues/update | Update instances of the model matched by {{where}} from the data source.
[**dataSourceRecordValuesUpsertWithWherePost**](DataSourceRecordValueApi.md#dataSourceRecordValuesUpsertWithWherePost) | **POST** /DataSourceRecordValues/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **dataSourceRecordValuesChangeStreamGet**
> \SplFileObject dataSourceRecordValuesChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourceRecordValuesChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRecordValuesChangeStreamPost**
> \SplFileObject dataSourceRecordValuesChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourceRecordValuesChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRecordValuesCountGet**
> \Swagger\Client\Model\InlineResponse2001 dataSourceRecordValuesCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourceRecordValuesCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesCountGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRecordValuesFindOneGet**
> \Swagger\Client\Model\DataSourceRecordValue dataSourceRecordValuesFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceRecordValuesFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesGet**
> \Swagger\Client\Model\DataSourceRecordValue[] dataSourceRecordValuesGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceRecordValuesGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue[]**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesIdDataSourceGet**
> \Swagger\Client\Model\DataSource dataSourceRecordValuesIdDataSourceGet($id, $refresh)

Fetches belongsTo relation dataSource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$id = "id_example"; // string | DataSourceRecordValue id
$refresh = true; // bool | 

try {
    $result = $api_instance->dataSourceRecordValuesIdDataSourceGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesIdDataSourceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecordValue id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSource**](../Model/DataSource.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesIdDelete**
> object dataSourceRecordValuesIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceRecordValuesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRecordValuesIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 dataSourceRecordValuesIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceRecordValuesIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRecordValuesIdGet**
> \Swagger\Client\Model\DataSourceRecordValue dataSourceRecordValuesIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceRecordValuesIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesIdHead**
> \Swagger\Client\Model\InlineResponse2002 dataSourceRecordValuesIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceRecordValuesIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesIdHead: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceRecordValuesIdKeyGet**
> \Swagger\Client\Model\DataSourceKey dataSourceRecordValuesIdKeyGet($id, $refresh)

Fetches belongsTo relation key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$id = "id_example"; // string | DataSourceRecordValue id
$refresh = true; // bool | 

try {
    $result = $api_instance->dataSourceRecordValuesIdKeyGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesIdKeyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecordValue id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceKey**](../Model/DataSourceKey.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesIdPatch**
> \Swagger\Client\Model\DataSourceRecordValue dataSourceRecordValuesIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$id = "id_example"; // string | DataSourceRecordValue id
$data = new \Swagger\Client\Model\DataSourceRecordValue(); // \Swagger\Client\Model\DataSourceRecordValue | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourceRecordValuesIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecordValue id |
 **data** | [**\Swagger\Client\Model\DataSourceRecordValue**](../Model/\Swagger\Client\Model\DataSourceRecordValue.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesIdPut**
> \Swagger\Client\Model\DataSourceRecordValue dataSourceRecordValuesIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourceRecordValue(); // \Swagger\Client\Model\DataSourceRecordValue | Model instance data

try {
    $result = $api_instance->dataSourceRecordValuesIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourceRecordValue**](../Model/\Swagger\Client\Model\DataSourceRecordValue.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesIdReplacePost**
> \Swagger\Client\Model\DataSourceRecordValue dataSourceRecordValuesIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourceRecordValue(); // \Swagger\Client\Model\DataSourceRecordValue | Model instance data

try {
    $result = $api_instance->dataSourceRecordValuesIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourceRecordValue**](../Model/\Swagger\Client\Model\DataSourceRecordValue.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesIdTeamGet**
> \Swagger\Client\Model\Team dataSourceRecordValuesIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$id = "id_example"; // string | DataSourceRecordValue id
$refresh = true; // bool | 

try {
    $result = $api_instance->dataSourceRecordValuesIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecordValue id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesIdValuesGet**
> \Swagger\Client\Model\DataSourceRecord dataSourceRecordValuesIdValuesGet($id, $refresh)

Fetches belongsTo relation values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$id = "id_example"; // string | DataSourceRecordValue id
$refresh = true; // bool | 

try {
    $result = $api_instance->dataSourceRecordValuesIdValuesGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesIdValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceRecordValue id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecord**](../Model/DataSourceRecord.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesPatch**
> \Swagger\Client\Model\DataSourceRecordValue dataSourceRecordValuesPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$data = new \Swagger\Client\Model\DataSourceRecordValue(); // \Swagger\Client\Model\DataSourceRecordValue | Model instance data

try {
    $result = $api_instance->dataSourceRecordValuesPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceRecordValue**](../Model/\Swagger\Client\Model\DataSourceRecordValue.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesPost**
> \Swagger\Client\Model\DataSourceRecordValue dataSourceRecordValuesPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$data = new \Swagger\Client\Model\DataSourceRecordValue(); // \Swagger\Client\Model\DataSourceRecordValue | Model instance data

try {
    $result = $api_instance->dataSourceRecordValuesPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceRecordValue**](../Model/\Swagger\Client\Model\DataSourceRecordValue.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesPut**
> \Swagger\Client\Model\DataSourceRecordValue dataSourceRecordValuesPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$data = new \Swagger\Client\Model\DataSourceRecordValue(); // \Swagger\Client\Model\DataSourceRecordValue | Model instance data

try {
    $result = $api_instance->dataSourceRecordValuesPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceRecordValue**](../Model/\Swagger\Client\Model\DataSourceRecordValue.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesReplaceOrCreatePost**
> \Swagger\Client\Model\DataSourceRecordValue dataSourceRecordValuesReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$data = new \Swagger\Client\Model\DataSourceRecordValue(); // \Swagger\Client\Model\DataSourceRecordValue | Model instance data

try {
    $result = $api_instance->dataSourceRecordValuesReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceRecordValue**](../Model/\Swagger\Client\Model\DataSourceRecordValue.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesUpdatePost**
> \Swagger\Client\Model\InlineResponse2003 dataSourceRecordValuesUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DataSourceRecordValue(); // \Swagger\Client\Model\DataSourceRecordValue | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourceRecordValuesUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DataSourceRecordValue**](../Model/\Swagger\Client\Model\DataSourceRecordValue.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceRecordValuesUpsertWithWherePost**
> \Swagger\Client\Model\DataSourceRecordValue dataSourceRecordValuesUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceRecordValueApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DataSourceRecordValue(); // \Swagger\Client\Model\DataSourceRecordValue | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourceRecordValuesUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceRecordValueApi->dataSourceRecordValuesUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DataSourceRecordValue**](../Model/\Swagger\Client\Model\DataSourceRecordValue.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRecordValue**](../Model/DataSourceRecordValue.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

