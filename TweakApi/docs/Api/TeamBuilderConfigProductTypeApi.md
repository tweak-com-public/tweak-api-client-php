# Tweak\Api\TeamBuilderConfigProductTypeApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamBuilderConfigProductTypesChangeStreamGet**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesChangeStreamGet) | **GET** /TeamBuilderConfigProductTypes/change-stream | Create a change stream.
[**teamBuilderConfigProductTypesChangeStreamPost**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesChangeStreamPost) | **POST** /TeamBuilderConfigProductTypes/change-stream | Create a change stream.
[**teamBuilderConfigProductTypesCountGet**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesCountGet) | **GET** /TeamBuilderConfigProductTypes/count | Count instances of the model matched by where from the data source.
[**teamBuilderConfigProductTypesFindOneGet**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesFindOneGet) | **GET** /TeamBuilderConfigProductTypes/findOne | Find first instance of the model matched by filter from the data source.
[**teamBuilderConfigProductTypesGet**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesGet) | **GET** /TeamBuilderConfigProductTypes | Find all instances of the model matched by filter from the data source.
[**teamBuilderConfigProductTypesIdBuilderConfigGet**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesIdBuilderConfigGet) | **GET** /TeamBuilderConfigProductTypes/{id}/builderConfig | Fetches belongsTo relation builderConfig.
[**teamBuilderConfigProductTypesIdDelete**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesIdDelete) | **DELETE** /TeamBuilderConfigProductTypes/{id} | Delete a model instance by {{id}} from the data source.
[**teamBuilderConfigProductTypesIdExistsGet**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesIdExistsGet) | **GET** /TeamBuilderConfigProductTypes/{id}/exists | Check whether a model instance exists in the data source.
[**teamBuilderConfigProductTypesIdGet**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesIdGet) | **GET** /TeamBuilderConfigProductTypes/{id} | Find a model instance by {{id}} from the data source.
[**teamBuilderConfigProductTypesIdHead**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesIdHead) | **HEAD** /TeamBuilderConfigProductTypes/{id} | Check whether a model instance exists in the data source.
[**teamBuilderConfigProductTypesIdPatch**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesIdPatch) | **PATCH** /TeamBuilderConfigProductTypes/{id} | Patch attributes for a model instance and persist it into the data source.
[**teamBuilderConfigProductTypesIdProductTypeGet**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesIdProductTypeGet) | **GET** /TeamBuilderConfigProductTypes/{id}/productType | Fetches belongsTo relation productType.
[**teamBuilderConfigProductTypesIdPut**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesIdPut) | **PUT** /TeamBuilderConfigProductTypes/{id} | Replace attributes for a model instance and persist it into the data source.
[**teamBuilderConfigProductTypesIdReplacePost**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesIdReplacePost) | **POST** /TeamBuilderConfigProductTypes/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**teamBuilderConfigProductTypesPost**](TeamBuilderConfigProductTypeApi.md#teamBuilderConfigProductTypesPost) | **POST** /TeamBuilderConfigProductTypes | Create a new instance of the model and persist it into the data source.


# **teamBuilderConfigProductTypesChangeStreamGet**
> \SplFileObject teamBuilderConfigProductTypesChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigProductTypesChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductTypesChangeStreamPost**
> \SplFileObject teamBuilderConfigProductTypesChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigProductTypesChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductTypesCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigProductTypesCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigProductTypesCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesCountGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductTypesFindOneGet**
> \Swagger\Client\Model\TeamBuilderConfigProductType teamBuilderConfigProductTypesFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigProductTypesFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductType**](../Model/TeamBuilderConfigProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductTypesGet**
> \Swagger\Client\Model\TeamBuilderConfigProductType[] teamBuilderConfigProductTypesGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigProductTypesGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductType[]**](../Model/TeamBuilderConfigProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductTypesIdBuilderConfigGet**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigProductTypesIdBuilderConfigGet($id, $refresh)

Fetches belongsTo relation builderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$id = "id_example"; // string | TeamBuilderConfigProductType id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigProductTypesIdBuilderConfigGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesIdBuilderConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfigProductType id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductTypesIdDelete**
> object teamBuilderConfigProductTypesIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigProductTypesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductTypesIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 teamBuilderConfigProductTypesIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigProductTypesIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductTypesIdGet**
> \Swagger\Client\Model\TeamBuilderConfigProductType teamBuilderConfigProductTypesIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigProductTypesIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductType**](../Model/TeamBuilderConfigProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductTypesIdHead**
> \Swagger\Client\Model\InlineResponse2002 teamBuilderConfigProductTypesIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigProductTypesIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesIdHead: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductTypesIdPatch**
> \Swagger\Client\Model\TeamBuilderConfigProductType teamBuilderConfigProductTypesIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$id = "id_example"; // string | TeamBuilderConfigProductType id
$data = new \Swagger\Client\Model\TeamBuilderConfigProductType(); // \Swagger\Client\Model\TeamBuilderConfigProductType | An object of model property name/value pairs

try {
    $result = $api_instance->teamBuilderConfigProductTypesIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfigProductType id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductType**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductType.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductType**](../Model/TeamBuilderConfigProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductTypesIdProductTypeGet**
> \Swagger\Client\Model\ProductType teamBuilderConfigProductTypesIdProductTypeGet($id, $refresh)

Fetches belongsTo relation productType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$id = "id_example"; // string | TeamBuilderConfigProductType id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigProductTypesIdProductTypeGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesIdProductTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfigProductType id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductTypesIdPut**
> \Swagger\Client\Model\TeamBuilderConfigProductType teamBuilderConfigProductTypesIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamBuilderConfigProductType(); // \Swagger\Client\Model\TeamBuilderConfigProductType | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductTypesIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductType**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductType.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductType**](../Model/TeamBuilderConfigProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductTypesIdReplacePost**
> \Swagger\Client\Model\TeamBuilderConfigProductType teamBuilderConfigProductTypesIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamBuilderConfigProductType(); // \Swagger\Client\Model\TeamBuilderConfigProductType | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductTypesIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductType**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductType.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductType**](../Model/TeamBuilderConfigProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductTypesPost**
> \Swagger\Client\Model\TeamBuilderConfigProductType teamBuilderConfigProductTypesPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductTypeApi();
$data = new \Swagger\Client\Model\TeamBuilderConfigProductType(); // \Swagger\Client\Model\TeamBuilderConfigProductType | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductTypesPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductTypeApi->teamBuilderConfigProductTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductType**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductType.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductType**](../Model/TeamBuilderConfigProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

