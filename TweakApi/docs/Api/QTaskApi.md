# Tweak\Api\QTaskApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**qTasksChangeStreamGet**](QTaskApi.md#qTasksChangeStreamGet) | **GET** /QTasks/change-stream | Create a change stream.
[**qTasksChangeStreamPost**](QTaskApi.md#qTasksChangeStreamPost) | **POST** /QTasks/change-stream | Create a change stream.
[**qTasksCountGet**](QTaskApi.md#qTasksCountGet) | **GET** /QTasks/count | Count instances of the model matched by where from the data source.
[**qTasksFindOneGet**](QTaskApi.md#qTasksFindOneGet) | **GET** /QTasks/findOne | Find first instance of the model matched by filter from the data source.
[**qTasksGet**](QTaskApi.md#qTasksGet) | **GET** /QTasks | Find all instances of the model matched by filter from the data source.
[**qTasksIdDelete**](QTaskApi.md#qTasksIdDelete) | **DELETE** /QTasks/{id} | Delete a model instance by {{id}} from the data source.
[**qTasksIdExistsGet**](QTaskApi.md#qTasksIdExistsGet) | **GET** /QTasks/{id}/exists | Check whether a model instance exists in the data source.
[**qTasksIdGet**](QTaskApi.md#qTasksIdGet) | **GET** /QTasks/{id} | Find a model instance by {{id}} from the data source.
[**qTasksIdHead**](QTaskApi.md#qTasksIdHead) | **HEAD** /QTasks/{id} | Check whether a model instance exists in the data source.
[**qTasksIdItemGet**](QTaskApi.md#qTasksIdItemGet) | **GET** /QTasks/{id}/item | Fetches belongsTo relation item.
[**qTasksIdPatch**](QTaskApi.md#qTasksIdPatch) | **PATCH** /QTasks/{id} | Patch attributes for a model instance and persist it into the data source.
[**qTasksIdPut**](QTaskApi.md#qTasksIdPut) | **PUT** /QTasks/{id} | Replace attributes for a model instance and persist it into the data source.
[**qTasksIdReplacePost**](QTaskApi.md#qTasksIdReplacePost) | **POST** /QTasks/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**qTasksPatch**](QTaskApi.md#qTasksPatch) | **PATCH** /QTasks | Patch an existing model instance or insert a new one into the data source.
[**qTasksPost**](QTaskApi.md#qTasksPost) | **POST** /QTasks | Create a new instance of the model and persist it into the data source.
[**qTasksPut**](QTaskApi.md#qTasksPut) | **PUT** /QTasks | Replace an existing model instance or insert a new one into the data source.
[**qTasksReplaceOrCreatePost**](QTaskApi.md#qTasksReplaceOrCreatePost) | **POST** /QTasks/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**qTasksUpdatePost**](QTaskApi.md#qTasksUpdatePost) | **POST** /QTasks/update | Update instances of the model matched by {{where}} from the data source.
[**qTasksUpsertWithWherePost**](QTaskApi.md#qTasksUpsertWithWherePost) | **POST** /QTasks/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **qTasksChangeStreamGet**
> \SplFileObject qTasksChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->qTasksChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **qTasksChangeStreamPost**
> \SplFileObject qTasksChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->qTasksChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **qTasksCountGet**
> \Swagger\Client\Model\InlineResponse2001 qTasksCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->qTasksCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksCountGet: ', $e->getMessage(), PHP_EOL;
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

# **qTasksFindOneGet**
> \Swagger\Client\Model\QTask qTasksFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->qTasksFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\QTask**](../Model/QTask.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qTasksGet**
> \Swagger\Client\Model\QTask[] qTasksGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->qTasksGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\QTask[]**](../Model/QTask.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qTasksIdDelete**
> object qTasksIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->qTasksIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **qTasksIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 qTasksIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->qTasksIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **qTasksIdGet**
> \Swagger\Client\Model\QTask qTasksIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->qTasksIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\QTask**](../Model/QTask.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qTasksIdHead**
> \Swagger\Client\Model\InlineResponse2002 qTasksIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->qTasksIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksIdHead: ', $e->getMessage(), PHP_EOL;
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

# **qTasksIdItemGet**
> \Swagger\Client\Model\PersistedModel qTasksIdItemGet($id, $refresh)

Fetches belongsTo relation item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$id = "id_example"; // string | QTask id
$refresh = true; // bool | 

try {
    $result = $api_instance->qTasksIdItemGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksIdItemGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| QTask id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\PersistedModel**](../Model/PersistedModel.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qTasksIdPatch**
> \Swagger\Client\Model\QTask qTasksIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$id = "id_example"; // string | QTask id
$data = new \Swagger\Client\Model\QTask(); // \Swagger\Client\Model\QTask | An object of model property name/value pairs

try {
    $result = $api_instance->qTasksIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| QTask id |
 **data** | [**\Swagger\Client\Model\QTask**](../Model/\Swagger\Client\Model\QTask.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\QTask**](../Model/QTask.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qTasksIdPut**
> \Swagger\Client\Model\QTask qTasksIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\QTask(); // \Swagger\Client\Model\QTask | Model instance data

try {
    $result = $api_instance->qTasksIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\QTask**](../Model/\Swagger\Client\Model\QTask.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\QTask**](../Model/QTask.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qTasksIdReplacePost**
> \Swagger\Client\Model\QTask qTasksIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\QTask(); // \Swagger\Client\Model\QTask | Model instance data

try {
    $result = $api_instance->qTasksIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\QTask**](../Model/\Swagger\Client\Model\QTask.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\QTask**](../Model/QTask.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qTasksPatch**
> \Swagger\Client\Model\QTask qTasksPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$data = new \Swagger\Client\Model\QTask(); // \Swagger\Client\Model\QTask | Model instance data

try {
    $result = $api_instance->qTasksPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\QTask**](../Model/\Swagger\Client\Model\QTask.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\QTask**](../Model/QTask.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qTasksPost**
> \Swagger\Client\Model\QTask qTasksPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$data = new \Swagger\Client\Model\QTask(); // \Swagger\Client\Model\QTask | Model instance data

try {
    $result = $api_instance->qTasksPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\QTask**](../Model/\Swagger\Client\Model\QTask.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\QTask**](../Model/QTask.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qTasksPut**
> \Swagger\Client\Model\QTask qTasksPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$data = new \Swagger\Client\Model\QTask(); // \Swagger\Client\Model\QTask | Model instance data

try {
    $result = $api_instance->qTasksPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\QTask**](../Model/\Swagger\Client\Model\QTask.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\QTask**](../Model/QTask.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qTasksReplaceOrCreatePost**
> \Swagger\Client\Model\QTask qTasksReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$data = new \Swagger\Client\Model\QTask(); // \Swagger\Client\Model\QTask | Model instance data

try {
    $result = $api_instance->qTasksReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\QTask**](../Model/\Swagger\Client\Model\QTask.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\QTask**](../Model/QTask.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qTasksUpdatePost**
> \Swagger\Client\Model\InlineResponse2003 qTasksUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\QTask(); // \Swagger\Client\Model\QTask | An object of model property name/value pairs

try {
    $result = $api_instance->qTasksUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\QTask**](../Model/\Swagger\Client\Model\QTask.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **qTasksUpsertWithWherePost**
> \Swagger\Client\Model\QTask qTasksUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\QTaskApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\QTask(); // \Swagger\Client\Model\QTask | An object of model property name/value pairs

try {
    $result = $api_instance->qTasksUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QTaskApi->qTasksUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\QTask**](../Model/\Swagger\Client\Model\QTask.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\QTask**](../Model/QTask.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

