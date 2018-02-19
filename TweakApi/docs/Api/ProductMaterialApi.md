# Tweak\Api\ProductMaterialApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productMaterialsChangeStreamGet**](ProductMaterialApi.md#productMaterialsChangeStreamGet) | **GET** /ProductMaterials/change-stream | Create a change stream.
[**productMaterialsChangeStreamPost**](ProductMaterialApi.md#productMaterialsChangeStreamPost) | **POST** /ProductMaterials/change-stream | Create a change stream.
[**productMaterialsCountGet**](ProductMaterialApi.md#productMaterialsCountGet) | **GET** /ProductMaterials/count | Count instances of the model matched by where from the data source.
[**productMaterialsFindOneGet**](ProductMaterialApi.md#productMaterialsFindOneGet) | **GET** /ProductMaterials/findOne | Find first instance of the model matched by filter from the data source.
[**productMaterialsGet**](ProductMaterialApi.md#productMaterialsGet) | **GET** /ProductMaterials | Find all instances of the model matched by filter from the data source.
[**productMaterialsIdDelete**](ProductMaterialApi.md#productMaterialsIdDelete) | **DELETE** /ProductMaterials/{id} | Delete a model instance by {{id}} from the data source.
[**productMaterialsIdExistsGet**](ProductMaterialApi.md#productMaterialsIdExistsGet) | **GET** /ProductMaterials/{id}/exists | Check whether a model instance exists in the data source.
[**productMaterialsIdGet**](ProductMaterialApi.md#productMaterialsIdGet) | **GET** /ProductMaterials/{id} | Find a model instance by {{id}} from the data source.
[**productMaterialsIdHead**](ProductMaterialApi.md#productMaterialsIdHead) | **HEAD** /ProductMaterials/{id} | Check whether a model instance exists in the data source.
[**productMaterialsIdPatch**](ProductMaterialApi.md#productMaterialsIdPatch) | **PATCH** /ProductMaterials/{id} | Patch attributes for a model instance and persist it into the data source.
[**productMaterialsIdPut**](ProductMaterialApi.md#productMaterialsIdPut) | **PUT** /ProductMaterials/{id} | Replace attributes for a model instance and persist it into the data source.
[**productMaterialsIdReplacePost**](ProductMaterialApi.md#productMaterialsIdReplacePost) | **POST** /ProductMaterials/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**productMaterialsIdTeamGet**](ProductMaterialApi.md#productMaterialsIdTeamGet) | **GET** /ProductMaterials/{id}/team | Fetches belongsTo relation team.
[**productMaterialsPost**](ProductMaterialApi.md#productMaterialsPost) | **POST** /ProductMaterials | Create a new instance of the model and persist it into the data source.


# **productMaterialsChangeStreamGet**
> \SplFileObject productMaterialsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductMaterialApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->productMaterialsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMaterialApi->productMaterialsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **productMaterialsChangeStreamPost**
> \SplFileObject productMaterialsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductMaterialApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->productMaterialsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMaterialApi->productMaterialsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **productMaterialsCountGet**
> \Swagger\Client\Model\InlineResponse2001 productMaterialsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductMaterialApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productMaterialsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMaterialApi->productMaterialsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **productMaterialsFindOneGet**
> \Swagger\Client\Model\ProductMaterial productMaterialsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductMaterialApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productMaterialsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMaterialApi->productMaterialsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productMaterialsGet**
> \Swagger\Client\Model\ProductMaterial[] productMaterialsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductMaterialApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productMaterialsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMaterialApi->productMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial[]**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productMaterialsIdDelete**
> object productMaterialsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductMaterialApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productMaterialsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMaterialApi->productMaterialsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **productMaterialsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 productMaterialsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductMaterialApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productMaterialsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMaterialApi->productMaterialsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **productMaterialsIdGet**
> \Swagger\Client\Model\ProductMaterial productMaterialsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductMaterialApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productMaterialsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMaterialApi->productMaterialsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productMaterialsIdHead**
> \Swagger\Client\Model\InlineResponse2002 productMaterialsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductMaterialApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productMaterialsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMaterialApi->productMaterialsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **productMaterialsIdPatch**
> \Swagger\Client\Model\ProductMaterial productMaterialsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductMaterialApi();
$id = "id_example"; // string | ProductMaterial id
$data = new \Swagger\Client\Model\ProductMaterial(); // \Swagger\Client\Model\ProductMaterial | An object of model property name/value pairs

try {
    $result = $api_instance->productMaterialsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMaterialApi->productMaterialsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductMaterial id |
 **data** | [**\Swagger\Client\Model\ProductMaterial**](../Model/\Swagger\Client\Model\ProductMaterial.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productMaterialsIdPut**
> \Swagger\Client\Model\ProductMaterial productMaterialsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductMaterialApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\ProductMaterial(); // \Swagger\Client\Model\ProductMaterial | Model instance data

try {
    $result = $api_instance->productMaterialsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMaterialApi->productMaterialsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\ProductMaterial**](../Model/\Swagger\Client\Model\ProductMaterial.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productMaterialsIdReplacePost**
> \Swagger\Client\Model\ProductMaterial productMaterialsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductMaterialApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\ProductMaterial(); // \Swagger\Client\Model\ProductMaterial | Model instance data

try {
    $result = $api_instance->productMaterialsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMaterialApi->productMaterialsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\ProductMaterial**](../Model/\Swagger\Client\Model\ProductMaterial.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productMaterialsIdTeamGet**
> \Swagger\Client\Model\Team productMaterialsIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductMaterialApi();
$id = "id_example"; // string | ProductMaterial id
$refresh = true; // bool | 

try {
    $result = $api_instance->productMaterialsIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMaterialApi->productMaterialsIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductMaterial id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productMaterialsPost**
> \Swagger\Client\Model\ProductMaterial productMaterialsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductMaterialApi();
$data = new \Swagger\Client\Model\ProductMaterial(); // \Swagger\Client\Model\ProductMaterial | Model instance data

try {
    $result = $api_instance->productMaterialsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMaterialApi->productMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductMaterial**](../Model/\Swagger\Client\Model\ProductMaterial.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

