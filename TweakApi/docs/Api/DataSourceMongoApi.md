# Tweak\Api\DataSourceMongoApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataSourceMongosChangeStreamGet**](DataSourceMongoApi.md#dataSourceMongosChangeStreamGet) | **GET** /DataSourceMongos/change-stream | Create a change stream.
[**dataSourceMongosChangeStreamPost**](DataSourceMongoApi.md#dataSourceMongosChangeStreamPost) | **POST** /DataSourceMongos/change-stream | Create a change stream.
[**dataSourceMongosCountGet**](DataSourceMongoApi.md#dataSourceMongosCountGet) | **GET** /DataSourceMongos/count | Count instances of the model matched by where from the data source.
[**dataSourceMongosFindOneGet**](DataSourceMongoApi.md#dataSourceMongosFindOneGet) | **GET** /DataSourceMongos/findOne | Find first instance of the model matched by filter from the data source.
[**dataSourceMongosGet**](DataSourceMongoApi.md#dataSourceMongosGet) | **GET** /DataSourceMongos | Find all instances of the model matched by filter from the data source.
[**dataSourceMongosIdDelete**](DataSourceMongoApi.md#dataSourceMongosIdDelete) | **DELETE** /DataSourceMongos/{id} | Delete a model instance by {{id}} from the data source.
[**dataSourceMongosIdDynamicDatasCountGet**](DataSourceMongoApi.md#dataSourceMongosIdDynamicDatasCountGet) | **GET** /DataSourceMongos/{id}/dynamicDatas/count | Counts dynamicDatas of DataSourceMongo.
[**dataSourceMongosIdDynamicDatasDelete**](DataSourceMongoApi.md#dataSourceMongosIdDynamicDatasDelete) | **DELETE** /DataSourceMongos/{id}/dynamicDatas | Deletes all dynamicDatas of this model.
[**dataSourceMongosIdDynamicDatasFkDelete**](DataSourceMongoApi.md#dataSourceMongosIdDynamicDatasFkDelete) | **DELETE** /DataSourceMongos/{id}/dynamicDatas/{fk} | Delete a related item by id for dynamicDatas.
[**dataSourceMongosIdDynamicDatasFkGet**](DataSourceMongoApi.md#dataSourceMongosIdDynamicDatasFkGet) | **GET** /DataSourceMongos/{id}/dynamicDatas/{fk} | Find a related item by id for dynamicDatas.
[**dataSourceMongosIdDynamicDatasFkPut**](DataSourceMongoApi.md#dataSourceMongosIdDynamicDatasFkPut) | **PUT** /DataSourceMongos/{id}/dynamicDatas/{fk} | Update a related item by id for dynamicDatas.
[**dataSourceMongosIdDynamicDatasGet**](DataSourceMongoApi.md#dataSourceMongosIdDynamicDatasGet) | **GET** /DataSourceMongos/{id}/dynamicDatas | Queries dynamicDatas of DataSourceMongo.
[**dataSourceMongosIdDynamicDatasPost**](DataSourceMongoApi.md#dataSourceMongosIdDynamicDatasPost) | **POST** /DataSourceMongos/{id}/dynamicDatas | Creates a new instance in dynamicDatas of this model.
[**dataSourceMongosIdExistsGet**](DataSourceMongoApi.md#dataSourceMongosIdExistsGet) | **GET** /DataSourceMongos/{id}/exists | Check whether a model instance exists in the data source.
[**dataSourceMongosIdGet**](DataSourceMongoApi.md#dataSourceMongosIdGet) | **GET** /DataSourceMongos/{id} | Find a model instance by {{id}} from the data source.
[**dataSourceMongosIdHead**](DataSourceMongoApi.md#dataSourceMongosIdHead) | **HEAD** /DataSourceMongos/{id} | Check whether a model instance exists in the data source.
[**dataSourceMongosIdPatch**](DataSourceMongoApi.md#dataSourceMongosIdPatch) | **PATCH** /DataSourceMongos/{id} | Patch attributes for a model instance and persist it into the data source.
[**dataSourceMongosIdPut**](DataSourceMongoApi.md#dataSourceMongosIdPut) | **PUT** /DataSourceMongos/{id} | Replace attributes for a model instance and persist it into the data source.
[**dataSourceMongosIdReplacePost**](DataSourceMongoApi.md#dataSourceMongosIdReplacePost) | **POST** /DataSourceMongos/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**dataSourceMongosIdTeamGet**](DataSourceMongoApi.md#dataSourceMongosIdTeamGet) | **GET** /DataSourceMongos/{id}/team | Fetches belongsTo relation team.
[**dataSourceMongosPost**](DataSourceMongoApi.md#dataSourceMongosPost) | **POST** /DataSourceMongos | Create a new instance of the model and persist it into the data source.


# **dataSourceMongosChangeStreamGet**
> \SplFileObject dataSourceMongosChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourceMongosChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceMongosChangeStreamPost**
> \SplFileObject dataSourceMongosChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dataSourceMongosChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceMongosCountGet**
> \Swagger\Client\Model\InlineResponse2001 dataSourceMongosCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourceMongosCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosCountGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceMongosFindOneGet**
> \Swagger\Client\Model\DataSourceMongo dataSourceMongosFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceMongosFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMongo**](../Model/DataSourceMongo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMongosGet**
> \Swagger\Client\Model\DataSourceMongo[] dataSourceMongosGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceMongosGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMongo[]**](../Model/DataSourceMongo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMongosIdDelete**
> object dataSourceMongosIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceMongosIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceMongosIdDynamicDatasCountGet**
> \Swagger\Client\Model\InlineResponse2001 dataSourceMongosIdDynamicDatasCountGet($id, $where)

Counts dynamicDatas of DataSourceMongo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | DataSourceMongo id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dataSourceMongosIdDynamicDatasCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdDynamicDatasCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMongo id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMongosIdDynamicDatasDelete**
> dataSourceMongosIdDynamicDatasDelete($id)

Deletes all dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | DataSourceMongo id

try {
    $api_instance->dataSourceMongosIdDynamicDatasDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdDynamicDatasDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMongo id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMongosIdDynamicDatasFkDelete**
> dataSourceMongosIdDynamicDatasFkDelete($id, $fk)

Delete a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | DataSourceMongo id
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $api_instance->dataSourceMongosIdDynamicDatasFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdDynamicDatasFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMongo id |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMongosIdDynamicDatasFkGet**
> \Swagger\Client\Model\DynamicData dataSourceMongosIdDynamicDatasFkGet($id, $fk)

Find a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | DataSourceMongo id
$fk = "fk_example"; // string | Foreign key for dynamicDatas

try {
    $result = $api_instance->dataSourceMongosIdDynamicDatasFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdDynamicDatasFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMongo id |
 **fk** | **string**| Foreign key for dynamicDatas |

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMongosIdDynamicDatasFkPut**
> \Swagger\Client\Model\DynamicData dataSourceMongosIdDynamicDatasFkPut($id, $fk, $data)

Update a related item by id for dynamicDatas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | DataSourceMongo id
$fk = "fk_example"; // string | Foreign key for dynamicDatas
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->dataSourceMongosIdDynamicDatasFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdDynamicDatasFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMongo id |
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

# **dataSourceMongosIdDynamicDatasGet**
> \Swagger\Client\Model\DynamicData[] dataSourceMongosIdDynamicDatasGet($id, $filter)

Queries dynamicDatas of DataSourceMongo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | DataSourceMongo id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->dataSourceMongosIdDynamicDatasGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdDynamicDatasGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMongo id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData[]**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMongosIdDynamicDatasPost**
> \Swagger\Client\Model\DynamicData dataSourceMongosIdDynamicDatasPost($id, $data)

Creates a new instance in dynamicDatas of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | DataSourceMongo id
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->dataSourceMongosIdDynamicDatasPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdDynamicDatasPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMongo id |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMongosIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 dataSourceMongosIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceMongosIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceMongosIdGet**
> \Swagger\Client\Model\DataSourceMongo dataSourceMongosIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dataSourceMongosIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMongo**](../Model/DataSourceMongo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMongosIdHead**
> \Swagger\Client\Model\InlineResponse2002 dataSourceMongosIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dataSourceMongosIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdHead: ', $e->getMessage(), PHP_EOL;
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

# **dataSourceMongosIdPatch**
> \Swagger\Client\Model\DataSourceMongo dataSourceMongosIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | DataSourceMongo id
$data = new \Swagger\Client\Model\DataSourceMongo(); // \Swagger\Client\Model\DataSourceMongo | An object of model property name/value pairs

try {
    $result = $api_instance->dataSourceMongosIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMongo id |
 **data** | [**\Swagger\Client\Model\DataSourceMongo**](../Model/\Swagger\Client\Model\DataSourceMongo.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMongo**](../Model/DataSourceMongo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMongosIdPut**
> \Swagger\Client\Model\DataSourceMongo dataSourceMongosIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourceMongo(); // \Swagger\Client\Model\DataSourceMongo | Model instance data

try {
    $result = $api_instance->dataSourceMongosIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourceMongo**](../Model/\Swagger\Client\Model\DataSourceMongo.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMongo**](../Model/DataSourceMongo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMongosIdReplacePost**
> \Swagger\Client\Model\DataSourceMongo dataSourceMongosIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DataSourceMongo(); // \Swagger\Client\Model\DataSourceMongo | Model instance data

try {
    $result = $api_instance->dataSourceMongosIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DataSourceMongo**](../Model/\Swagger\Client\Model\DataSourceMongo.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMongo**](../Model/DataSourceMongo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMongosIdTeamGet**
> \Swagger\Client\Model\Team dataSourceMongosIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$id = "id_example"; // string | DataSourceMongo id
$refresh = true; // bool | 

try {
    $result = $api_instance->dataSourceMongosIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DataSourceMongo id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataSourceMongosPost**
> \Swagger\Client\Model\DataSourceMongo dataSourceMongosPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DataSourceMongoApi();
$data = new \Swagger\Client\Model\DataSourceMongo(); // \Swagger\Client\Model\DataSourceMongo | Model instance data

try {
    $result = $api_instance->dataSourceMongosPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourceMongoApi->dataSourceMongosPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DataSourceMongo**](../Model/\Swagger\Client\Model\DataSourceMongo.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMongo**](../Model/DataSourceMongo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

