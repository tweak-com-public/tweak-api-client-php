# Tweak\Api\TeamBuilderConfigProductGroupApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamBuilderConfigProductGroupsChangeStreamGet**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsChangeStreamGet) | **GET** /TeamBuilderConfigProductGroups/change-stream | Create a change stream.
[**teamBuilderConfigProductGroupsChangeStreamPost**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsChangeStreamPost) | **POST** /TeamBuilderConfigProductGroups/change-stream | Create a change stream.
[**teamBuilderConfigProductGroupsCountGet**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsCountGet) | **GET** /TeamBuilderConfigProductGroups/count | Count instances of the model matched by where from the data source.
[**teamBuilderConfigProductGroupsFindOneGet**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsFindOneGet) | **GET** /TeamBuilderConfigProductGroups/findOne | Find first instance of the model matched by filter from the data source.
[**teamBuilderConfigProductGroupsGet**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsGet) | **GET** /TeamBuilderConfigProductGroups | Find all instances of the model matched by filter from the data source.
[**teamBuilderConfigProductGroupsIdBuilderConfigGet**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsIdBuilderConfigGet) | **GET** /TeamBuilderConfigProductGroups/{id}/builderConfig | Fetches belongsTo relation builderConfig.
[**teamBuilderConfigProductGroupsIdDelete**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsIdDelete) | **DELETE** /TeamBuilderConfigProductGroups/{id} | Delete a model instance by {{id}} from the data source.
[**teamBuilderConfigProductGroupsIdExistsGet**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsIdExistsGet) | **GET** /TeamBuilderConfigProductGroups/{id}/exists | Check whether a model instance exists in the data source.
[**teamBuilderConfigProductGroupsIdGet**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsIdGet) | **GET** /TeamBuilderConfigProductGroups/{id} | Find a model instance by {{id}} from the data source.
[**teamBuilderConfigProductGroupsIdHead**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsIdHead) | **HEAD** /TeamBuilderConfigProductGroups/{id} | Check whether a model instance exists in the data source.
[**teamBuilderConfigProductGroupsIdPatch**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsIdPatch) | **PATCH** /TeamBuilderConfigProductGroups/{id} | Patch attributes for a model instance and persist it into the data source.
[**teamBuilderConfigProductGroupsIdProductGroupGet**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsIdProductGroupGet) | **GET** /TeamBuilderConfigProductGroups/{id}/productGroup | Fetches belongsTo relation productGroup.
[**teamBuilderConfigProductGroupsIdPut**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsIdPut) | **PUT** /TeamBuilderConfigProductGroups/{id} | Replace attributes for a model instance and persist it into the data source.
[**teamBuilderConfigProductGroupsIdReplacePost**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsIdReplacePost) | **POST** /TeamBuilderConfigProductGroups/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**teamBuilderConfigProductGroupsPatch**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsPatch) | **PATCH** /TeamBuilderConfigProductGroups | Patch an existing model instance or insert a new one into the data source.
[**teamBuilderConfigProductGroupsPost**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsPost) | **POST** /TeamBuilderConfigProductGroups | Create a new instance of the model and persist it into the data source.
[**teamBuilderConfigProductGroupsPut**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsPut) | **PUT** /TeamBuilderConfigProductGroups | Replace an existing model instance or insert a new one into the data source.
[**teamBuilderConfigProductGroupsReplaceOrCreatePost**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsReplaceOrCreatePost) | **POST** /TeamBuilderConfigProductGroups/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**teamBuilderConfigProductGroupsUpdatePost**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsUpdatePost) | **POST** /TeamBuilderConfigProductGroups/update | Update instances of the model matched by {{where}} from the data source.
[**teamBuilderConfigProductGroupsUpsertWithWherePost**](TeamBuilderConfigProductGroupApi.md#teamBuilderConfigProductGroupsUpsertWithWherePost) | **POST** /TeamBuilderConfigProductGroups/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **teamBuilderConfigProductGroupsChangeStreamGet**
> \SplFileObject teamBuilderConfigProductGroupsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigProductGroupsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductGroupsChangeStreamPost**
> \SplFileObject teamBuilderConfigProductGroupsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigProductGroupsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductGroupsCountGet**
> \Swagger\Client\Model\InlineResponse200 teamBuilderConfigProductGroupsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigProductGroupsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductGroupsFindOneGet**
> \Swagger\Client\Model\TeamBuilderConfigProductGroup teamBuilderConfigProductGroupsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigProductGroupsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/TeamBuilderConfigProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductGroupsGet**
> \Swagger\Client\Model\TeamBuilderConfigProductGroup[] teamBuilderConfigProductGroupsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigProductGroupsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductGroup[]**](../Model/TeamBuilderConfigProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductGroupsIdBuilderConfigGet**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigProductGroupsIdBuilderConfigGet($id, $refresh)

Fetches belongsTo relation builderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$id = "id_example"; // string | TeamBuilderConfigProductGroup id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigProductGroupsIdBuilderConfigGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsIdBuilderConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfigProductGroup id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductGroupsIdDelete**
> object teamBuilderConfigProductGroupsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigProductGroupsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductGroupsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigProductGroupsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigProductGroupsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductGroupsIdGet**
> \Swagger\Client\Model\TeamBuilderConfigProductGroup teamBuilderConfigProductGroupsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigProductGroupsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/TeamBuilderConfigProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductGroupsIdHead**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigProductGroupsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigProductGroupsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductGroupsIdPatch**
> \Swagger\Client\Model\TeamBuilderConfigProductGroup teamBuilderConfigProductGroupsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$id = "id_example"; // string | TeamBuilderConfigProductGroup id
$data = new \Swagger\Client\Model\TeamBuilderConfigProductGroup(); // \Swagger\Client\Model\TeamBuilderConfigProductGroup | An object of model property name/value pairs

try {
    $result = $api_instance->teamBuilderConfigProductGroupsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfigProductGroup id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductGroup.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/TeamBuilderConfigProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductGroupsIdProductGroupGet**
> \Swagger\Client\Model\ProductGroup teamBuilderConfigProductGroupsIdProductGroupGet($id, $refresh)

Fetches belongsTo relation productGroup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$id = "id_example"; // string | TeamBuilderConfigProductGroup id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigProductGroupsIdProductGroupGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsIdProductGroupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfigProductGroup id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductGroupsIdPut**
> \Swagger\Client\Model\TeamBuilderConfigProductGroup teamBuilderConfigProductGroupsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamBuilderConfigProductGroup(); // \Swagger\Client\Model\TeamBuilderConfigProductGroup | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductGroupsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductGroup.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/TeamBuilderConfigProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductGroupsIdReplacePost**
> \Swagger\Client\Model\TeamBuilderConfigProductGroup teamBuilderConfigProductGroupsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamBuilderConfigProductGroup(); // \Swagger\Client\Model\TeamBuilderConfigProductGroup | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductGroupsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductGroup.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/TeamBuilderConfigProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductGroupsPatch**
> \Swagger\Client\Model\TeamBuilderConfigProductGroup teamBuilderConfigProductGroupsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$data = new \Swagger\Client\Model\TeamBuilderConfigProductGroup(); // \Swagger\Client\Model\TeamBuilderConfigProductGroup | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductGroupsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductGroup.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/TeamBuilderConfigProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductGroupsPost**
> \Swagger\Client\Model\TeamBuilderConfigProductGroup teamBuilderConfigProductGroupsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$data = new \Swagger\Client\Model\TeamBuilderConfigProductGroup(); // \Swagger\Client\Model\TeamBuilderConfigProductGroup | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductGroupsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductGroup.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/TeamBuilderConfigProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductGroupsPut**
> \Swagger\Client\Model\TeamBuilderConfigProductGroup teamBuilderConfigProductGroupsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$data = new \Swagger\Client\Model\TeamBuilderConfigProductGroup(); // \Swagger\Client\Model\TeamBuilderConfigProductGroup | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductGroupsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductGroup.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/TeamBuilderConfigProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductGroupsReplaceOrCreatePost**
> \Swagger\Client\Model\TeamBuilderConfigProductGroup teamBuilderConfigProductGroupsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$data = new \Swagger\Client\Model\TeamBuilderConfigProductGroup(); // \Swagger\Client\Model\TeamBuilderConfigProductGroup | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductGroupsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductGroup.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/TeamBuilderConfigProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductGroupsUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 teamBuilderConfigProductGroupsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\TeamBuilderConfigProductGroup(); // \Swagger\Client\Model\TeamBuilderConfigProductGroup | An object of model property name/value pairs

try {
    $result = $api_instance->teamBuilderConfigProductGroupsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductGroup.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductGroupsUpsertWithWherePost**
> \Swagger\Client\Model\TeamBuilderConfigProductGroup teamBuilderConfigProductGroupsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductGroupApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\TeamBuilderConfigProductGroup(); // \Swagger\Client\Model\TeamBuilderConfigProductGroup | An object of model property name/value pairs

try {
    $result = $api_instance->teamBuilderConfigProductGroupsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductGroupApi->teamBuilderConfigProductGroupsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductGroup.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductGroup**](../Model/TeamBuilderConfigProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

