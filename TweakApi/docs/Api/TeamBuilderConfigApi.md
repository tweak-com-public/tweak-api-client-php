# Tweak\Api\TeamBuilderConfigApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamBuilderConfigsChangeStreamGet**](TeamBuilderConfigApi.md#teamBuilderConfigsChangeStreamGet) | **GET** /TeamBuilderConfigs/change-stream | Create a change stream.
[**teamBuilderConfigsChangeStreamPost**](TeamBuilderConfigApi.md#teamBuilderConfigsChangeStreamPost) | **POST** /TeamBuilderConfigs/change-stream | Create a change stream.
[**teamBuilderConfigsCountGet**](TeamBuilderConfigApi.md#teamBuilderConfigsCountGet) | **GET** /TeamBuilderConfigs/count | Count instances of the model matched by where from the data source.
[**teamBuilderConfigsFindOneGet**](TeamBuilderConfigApi.md#teamBuilderConfigsFindOneGet) | **GET** /TeamBuilderConfigs/findOne | Find first instance of the model matched by filter from the data source.
[**teamBuilderConfigsGet**](TeamBuilderConfigApi.md#teamBuilderConfigsGet) | **GET** /TeamBuilderConfigs | Find all instances of the model matched by filter from the data source.
[**teamBuilderConfigsIdDelete**](TeamBuilderConfigApi.md#teamBuilderConfigsIdDelete) | **DELETE** /TeamBuilderConfigs/{id} | Delete a model instance by {{id}} from the data source.
[**teamBuilderConfigsIdExistsGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdExistsGet) | **GET** /TeamBuilderConfigs/{id}/exists | Check whether a model instance exists in the data source.
[**teamBuilderConfigsIdGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdGet) | **GET** /TeamBuilderConfigs/{id} | Find a model instance by {{id}} from the data source.
[**teamBuilderConfigsIdHead**](TeamBuilderConfigApi.md#teamBuilderConfigsIdHead) | **HEAD** /TeamBuilderConfigs/{id} | Check whether a model instance exists in the data source.
[**teamBuilderConfigsIdPatch**](TeamBuilderConfigApi.md#teamBuilderConfigsIdPatch) | **PATCH** /TeamBuilderConfigs/{id} | Patch attributes for a model instance and persist it into the data source.
[**teamBuilderConfigsIdPut**](TeamBuilderConfigApi.md#teamBuilderConfigsIdPut) | **PUT** /TeamBuilderConfigs/{id} | Replace attributes for a model instance and persist it into the data source.
[**teamBuilderConfigsIdReplacePost**](TeamBuilderConfigApi.md#teamBuilderConfigsIdReplacePost) | **POST** /TeamBuilderConfigs/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**teamBuilderConfigsIdTeamGet**](TeamBuilderConfigApi.md#teamBuilderConfigsIdTeamGet) | **GET** /TeamBuilderConfigs/{id}/team | Fetches belongsTo relation team.
[**teamBuilderConfigsPatch**](TeamBuilderConfigApi.md#teamBuilderConfigsPatch) | **PATCH** /TeamBuilderConfigs | Patch an existing model instance or insert a new one into the data source.
[**teamBuilderConfigsPost**](TeamBuilderConfigApi.md#teamBuilderConfigsPost) | **POST** /TeamBuilderConfigs | Create a new instance of the model and persist it into the data source.
[**teamBuilderConfigsPut**](TeamBuilderConfigApi.md#teamBuilderConfigsPut) | **PUT** /TeamBuilderConfigs | Replace an existing model instance or insert a new one into the data source.
[**teamBuilderConfigsReplaceOrCreatePost**](TeamBuilderConfigApi.md#teamBuilderConfigsReplaceOrCreatePost) | **POST** /TeamBuilderConfigs/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**teamBuilderConfigsUpdatePost**](TeamBuilderConfigApi.md#teamBuilderConfigsUpdatePost) | **POST** /TeamBuilderConfigs/update | Update instances of the model matched by {{where}} from the data source.
[**teamBuilderConfigsUpsertWithWherePost**](TeamBuilderConfigApi.md#teamBuilderConfigsUpsertWithWherePost) | **POST** /TeamBuilderConfigs/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **teamBuilderConfigsChangeStreamGet**
> \SplFileObject teamBuilderConfigsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigsChangeStreamPost**
> \SplFileObject teamBuilderConfigsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamBuilderConfigsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigsFindOneGet**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsGet**
> \Swagger\Client\Model\TeamBuilderConfig[] teamBuilderConfigsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig[]**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdDelete**
> object teamBuilderConfigsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigsIdGet**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdHead**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigsIdPatch**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | An object of model property name/value pairs

try {
    $result = $api_instance->teamBuilderConfigsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdPut**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | Model instance data

try {
    $result = $api_instance->teamBuilderConfigsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdReplacePost**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | Model instance data

try {
    $result = $api_instance->teamBuilderConfigsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsIdTeamGet**
> \Swagger\Client\Model\Team teamBuilderConfigsIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$id = "id_example"; // string | TeamBuilderConfig id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigsIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfig id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsPatch**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | Model instance data

try {
    $result = $api_instance->teamBuilderConfigsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsPost**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | Model instance data

try {
    $result = $api_instance->teamBuilderConfigsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsPut**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | Model instance data

try {
    $result = $api_instance->teamBuilderConfigsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsReplaceOrCreatePost**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | Model instance data

try {
    $result = $api_instance->teamBuilderConfigsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 teamBuilderConfigsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | An object of model property name/value pairs

try {
    $result = $api_instance->teamBuilderConfigsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigsUpsertWithWherePost**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\TeamBuilderConfig(); // \Swagger\Client\Model\TeamBuilderConfig | An object of model property name/value pairs

try {
    $result = $api_instance->teamBuilderConfigsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigApi->teamBuilderConfigsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\TeamBuilderConfig**](../Model/\Swagger\Client\Model\TeamBuilderConfig.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

