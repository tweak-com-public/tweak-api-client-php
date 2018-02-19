# Tweak\Api\TeamBuilderConfigProductSizeMaterialApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamBuilderConfigProductSizeMaterialsChangeStreamGet**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsChangeStreamGet) | **GET** /TeamBuilderConfigProductSizeMaterials/change-stream | Create a change stream.
[**teamBuilderConfigProductSizeMaterialsChangeStreamPost**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsChangeStreamPost) | **POST** /TeamBuilderConfigProductSizeMaterials/change-stream | Create a change stream.
[**teamBuilderConfigProductSizeMaterialsCountGet**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsCountGet) | **GET** /TeamBuilderConfigProductSizeMaterials/count | Count instances of the model matched by where from the data source.
[**teamBuilderConfigProductSizeMaterialsFindOneGet**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsFindOneGet) | **GET** /TeamBuilderConfigProductSizeMaterials/findOne | Find first instance of the model matched by filter from the data source.
[**teamBuilderConfigProductSizeMaterialsGet**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsGet) | **GET** /TeamBuilderConfigProductSizeMaterials | Find all instances of the model matched by filter from the data source.
[**teamBuilderConfigProductSizeMaterialsIdBuilderConfigGet**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsIdBuilderConfigGet) | **GET** /TeamBuilderConfigProductSizeMaterials/{id}/builderConfig | Fetches belongsTo relation builderConfig.
[**teamBuilderConfigProductSizeMaterialsIdDelete**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsIdDelete) | **DELETE** /TeamBuilderConfigProductSizeMaterials/{id} | Delete a model instance by {{id}} from the data source.
[**teamBuilderConfigProductSizeMaterialsIdExistsGet**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsIdExistsGet) | **GET** /TeamBuilderConfigProductSizeMaterials/{id}/exists | Check whether a model instance exists in the data source.
[**teamBuilderConfigProductSizeMaterialsIdGet**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsIdGet) | **GET** /TeamBuilderConfigProductSizeMaterials/{id} | Find a model instance by {{id}} from the data source.
[**teamBuilderConfigProductSizeMaterialsIdHead**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsIdHead) | **HEAD** /TeamBuilderConfigProductSizeMaterials/{id} | Check whether a model instance exists in the data source.
[**teamBuilderConfigProductSizeMaterialsIdPatch**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsIdPatch) | **PATCH** /TeamBuilderConfigProductSizeMaterials/{id} | Patch attributes for a model instance and persist it into the data source.
[**teamBuilderConfigProductSizeMaterialsIdPdfColorProfileGet**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsIdPdfColorProfileGet) | **GET** /TeamBuilderConfigProductSizeMaterials/{id}/pdfColorProfile | Fetches belongsTo relation pdfColorProfile.
[**teamBuilderConfigProductSizeMaterialsIdProductSizeMaterialGet**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsIdProductSizeMaterialGet) | **GET** /TeamBuilderConfigProductSizeMaterials/{id}/productSizeMaterial | Fetches belongsTo relation productSizeMaterial.
[**teamBuilderConfigProductSizeMaterialsIdPut**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsIdPut) | **PUT** /TeamBuilderConfigProductSizeMaterials/{id} | Replace attributes for a model instance and persist it into the data source.
[**teamBuilderConfigProductSizeMaterialsIdReplacePost**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsIdReplacePost) | **POST** /TeamBuilderConfigProductSizeMaterials/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**teamBuilderConfigProductSizeMaterialsPost**](TeamBuilderConfigProductSizeMaterialApi.md#teamBuilderConfigProductSizeMaterialsPost) | **POST** /TeamBuilderConfigProductSizeMaterials | Create a new instance of the model and persist it into the data source.


# **teamBuilderConfigProductSizeMaterialsChangeStreamGet**
> \SplFileObject teamBuilderConfigProductSizeMaterialsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductSizeMaterialsChangeStreamPost**
> \SplFileObject teamBuilderConfigProductSizeMaterialsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductSizeMaterialsCountGet**
> \Swagger\Client\Model\InlineResponse2001 teamBuilderConfigProductSizeMaterialsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductSizeMaterialsFindOneGet**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial teamBuilderConfigProductSizeMaterialsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizeMaterialsGet**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial[] teamBuilderConfigProductSizeMaterialsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial[]**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizeMaterialsIdBuilderConfigGet**
> \Swagger\Client\Model\TeamBuilderConfig teamBuilderConfigProductSizeMaterialsIdBuilderConfigGet($id, $refresh)

Fetches belongsTo relation builderConfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$id = "id_example"; // string | TeamBuilderConfigProductSizeMaterial id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsIdBuilderConfigGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsIdBuilderConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfigProductSizeMaterial id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizeMaterialsIdDelete**
> object teamBuilderConfigProductSizeMaterialsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductSizeMaterialsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 teamBuilderConfigProductSizeMaterialsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductSizeMaterialsIdGet**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial teamBuilderConfigProductSizeMaterialsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizeMaterialsIdHead**
> \Swagger\Client\Model\InlineResponse2002 teamBuilderConfigProductSizeMaterialsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **teamBuilderConfigProductSizeMaterialsIdPatch**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial teamBuilderConfigProductSizeMaterialsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$id = "id_example"; // string | TeamBuilderConfigProductSizeMaterial id
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial(); // \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial | An object of model property name/value pairs

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfigProductSizeMaterial id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizeMaterialsIdPdfColorProfileGet**
> \Swagger\Client\Model\ProductPdfColorProfile teamBuilderConfigProductSizeMaterialsIdPdfColorProfileGet($id, $refresh)

Fetches belongsTo relation pdfColorProfile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$id = "id_example"; // string | TeamBuilderConfigProductSizeMaterial id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsIdPdfColorProfileGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsIdPdfColorProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfigProductSizeMaterial id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizeMaterialsIdProductSizeMaterialGet**
> \Swagger\Client\Model\ProductSizeMaterial teamBuilderConfigProductSizeMaterialsIdProductSizeMaterialGet($id, $refresh)

Fetches belongsTo relation productSizeMaterial.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$id = "id_example"; // string | TeamBuilderConfigProductSizeMaterial id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsIdProductSizeMaterialGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsIdProductSizeMaterialGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamBuilderConfigProductSizeMaterial id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizeMaterialsIdPut**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial teamBuilderConfigProductSizeMaterialsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial(); // \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizeMaterialsIdReplacePost**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial teamBuilderConfigProductSizeMaterialsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial(); // \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamBuilderConfigProductSizeMaterialsPost**
> \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial teamBuilderConfigProductSizeMaterialsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamBuilderConfigProductSizeMaterialApi();
$data = new \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial(); // \Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial | Model instance data

try {
    $result = $api_instance->teamBuilderConfigProductSizeMaterialsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamBuilderConfigProductSizeMaterialApi->teamBuilderConfigProductSizeMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamBuilderConfigProductSizeMaterial**](../Model/TeamBuilderConfigProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

