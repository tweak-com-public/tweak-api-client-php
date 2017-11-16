# Tweak\Api\TeamBuilderConfigProductSizeApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamBuilderConfigProductSizesChangeStreamGet**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesChangeStreamGet) | **GET** /TeamBuilderConfigProductSizes/change-stream | Create a change stream.
[**teamBuilderConfigProductSizesChangeStreamPost**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesChangeStreamPost) | **POST** /TeamBuilderConfigProductSizes/change-stream | Create a change stream.
[**teamBuilderConfigProductSizesCountGet**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesCountGet) | **GET** /TeamBuilderConfigProductSizes/count | Count instances of the model matched by where from the data source.
[**teamBuilderConfigProductSizesFindOneGet**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesFindOneGet) | **GET** /TeamBuilderConfigProductSizes/findOne | Find first instance of the model matched by filter from the data source.
[**teamBuilderConfigProductSizesGet**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesGet) | **GET** /TeamBuilderConfigProductSizes | Find all instances of the model matched by filter from the data source.
[**teamBuilderConfigProductSizesIdBuilderConfigGet**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesIdBuilderConfigGet) | **GET** /TeamBuilderConfigProductSizes/{id}/builderConfig | Fetches belongsTo relation builderConfig.
[**teamBuilderConfigProductSizesIdDelete**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesIdDelete) | **DELETE** /TeamBuilderConfigProductSizes/{id} | Delete a model instance by {{id}} from the data source.
[**teamBuilderConfigProductSizesIdExistsGet**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesIdExistsGet) | **GET** /TeamBuilderConfigProductSizes/{id}/exists | Check whether a model instance exists in the data source.
[**teamBuilderConfigProductSizesIdGet**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesIdGet) | **GET** /TeamBuilderConfigProductSizes/{id} | Find a model instance by {{id}} from the data source.
[**teamBuilderConfigProductSizesIdHead**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesIdHead) | **HEAD** /TeamBuilderConfigProductSizes/{id} | Check whether a model instance exists in the data source.
[**teamBuilderConfigProductSizesIdPatch**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesIdPatch) | **PATCH** /TeamBuilderConfigProductSizes/{id} | Patch attributes for a model instance and persist it into the data source.
[**teamBuilderConfigProductSizesIdProductSizeGet**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesIdProductSizeGet) | **GET** /TeamBuilderConfigProductSizes/{id}/productSize | Fetches belongsTo relation productSize.
[**teamBuilderConfigProductSizesIdPut**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesIdPut) | **PUT** /TeamBuilderConfigProductSizes/{id} | Replace attributes for a model instance and persist it into the data source.
[**teamBuilderConfigProductSizesIdReplacePost**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesIdReplacePost) | **POST** /TeamBuilderConfigProductSizes/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**teamBuilderConfigProductSizesPatch**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesPatch) | **PATCH** /TeamBuilderConfigProductSizes | Patch an existing model instance or insert a new one into the data source.
[**teamBuilderConfigProductSizesPost**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesPost) | **POST** /TeamBuilderConfigProductSizes | Create a new instance of the model and persist it into the data source.
[**teamBuilderConfigProductSizesPut**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesPut) | **PUT** /TeamBuilderConfigProductSizes | Replace an existing model instance or insert a new one into the data source.
[**teamBuilderConfigProductSizesReplaceOrCreatePost**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesReplaceOrCreatePost) | **POST** /TeamBuilderConfigProductSizes/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**teamBuilderConfigProductSizesUpdatePost**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesUpdatePost) | **POST** /TeamBuilderConfigProductSizes/update | Update instances of the model matched by {{where}} from the data source.
[**teamBuilderConfigProductSizesUpsertWithWherePost**](TeamBuilderConfigProductSizeApi.md#teamBuilderConfigProductSizesUpsertWithWherePost) | **POST** /TeamBuilderConfigProductSizes/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **teamBuilderConfigProductSizesChangeStreamGet**
> \SplFileObject teamBuilderConfigProductSizesChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigProductSizesChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductSizesChangeStreamPost**
> \SplFileObject teamBuilderConfigProductSizesChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigProductSizesChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductSizesCountGet**
> \Swagger\Client\Model\InlineResponse200 teamBuilderConfigProductSizesCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigProductSizesCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesCountGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductSizesFindOneGet**
> \Swagger\Client\Model\TeamBuilderConfigProductSize teamBuilderConfigProductSizesFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigProductSizesFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/TeamBuilderConfigProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizesGet**
> \Swagger\Client\Model\TeamBuilderConfigProductSize[] teamBuilderConfigProductSizesGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigProductSizesGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSize[]**](../Model/TeamBuilderConfigProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizesIdBuilderConfigGet**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigProductSizesIdBuilderConfigGet($id, $refresh)

Fetches belongsTo relation builderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$id = "id_example"; // string | TeamBuilderConfigProductSize id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigProductSizesIdBuilderConfigGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesIdBuilderConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfigProductSize id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizesIdDelete**
> object teamBuilderConfigProductSizesIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigProductSizesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductSizesIdExistsGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigProductSizesIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigProductSizesIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductSizesIdGet**
> \Swagger\Client\Model\TeamBuilderConfigProductSize teamBuilderConfigProductSizesIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigProductSizesIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/TeamBuilderConfigProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizesIdHead**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigProductSizesIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigProductSizesIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesIdHead: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductSizesIdPatch**
> \Swagger\Client\Model\TeamBuilderConfigProductSize teamBuilderConfigProductSizesIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$id = "id_example"; // string | TeamBuilderConfigProductSize id
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSize(); // \Swagger\Client\Model\TeamBuilderConfigProductSize | An object of model property name/value pairs

try {
    $result = $api_instance->teamBuilderConfigProductSizesIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfigProductSize id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSize.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/TeamBuilderConfigProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizesIdProductSizeGet**
> \Swagger\Client\Model\ProductSize teamBuilderConfigProductSizesIdProductSizeGet($id, $refresh)

Fetches belongsTo relation productSize.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$id = "id_example"; // string | TeamBuilderConfigProductSize id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigProductSizesIdProductSizeGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesIdProductSizeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfigProductSize id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizesIdPut**
> \Swagger\Client\Model\TeamBuilderConfigProductSize teamBuilderConfigProductSizesIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSize(); // \Swagger\Client\Model\TeamBuilderConfigProductSize | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductSizesIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSize.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/TeamBuilderConfigProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizesIdReplacePost**
> \Swagger\Client\Model\TeamBuilderConfigProductSize teamBuilderConfigProductSizesIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSize(); // \Swagger\Client\Model\TeamBuilderConfigProductSize | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductSizesIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSize.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/TeamBuilderConfigProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizesPatch**
> \Swagger\Client\Model\TeamBuilderConfigProductSize teamBuilderConfigProductSizesPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSize(); // \Swagger\Client\Model\TeamBuilderConfigProductSize | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductSizesPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSize.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/TeamBuilderConfigProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizesPost**
> \Swagger\Client\Model\TeamBuilderConfigProductSize teamBuilderConfigProductSizesPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSize(); // \Swagger\Client\Model\TeamBuilderConfigProductSize | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductSizesPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSize.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/TeamBuilderConfigProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizesPut**
> \Swagger\Client\Model\TeamBuilderConfigProductSize teamBuilderConfigProductSizesPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSize(); // \Swagger\Client\Model\TeamBuilderConfigProductSize | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductSizesPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSize.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/TeamBuilderConfigProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizesReplaceOrCreatePost**
> \Swagger\Client\Model\TeamBuilderConfigProductSize teamBuilderConfigProductSizesReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSize(); // \Swagger\Client\Model\TeamBuilderConfigProductSize | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductSizesReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSize.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/TeamBuilderConfigProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizesUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 teamBuilderConfigProductSizesUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSize(); // \Swagger\Client\Model\TeamBuilderConfigProductSize | An object of model property name/value pairs

try {
    $result = $api_instance->teamBuilderConfigProductSizesUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSize.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizesUpsertWithWherePost**
> \Swagger\Client\Model\TeamBuilderConfigProductSize teamBuilderConfigProductSizesUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSize(); // \Swagger\Client\Model\TeamBuilderConfigProductSize | An object of model property name/value pairs

try {
    $result = $api_instance->teamBuilderConfigProductSizesUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeApi->teamBuilderConfigProductSizesUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSize.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSize**](../Model/TeamBuilderConfigProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

