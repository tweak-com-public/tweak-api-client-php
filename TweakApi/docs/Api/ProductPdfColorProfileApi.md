# Tweak\Api\ProductPdfColorProfileApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productPdfColorProfilesChangeStreamGet**](ProductPdfColorProfileApi.md#productPdfColorProfilesChangeStreamGet) | **GET** /ProductPdfColorProfiles/change-stream | Create a change stream.
[**productPdfColorProfilesChangeStreamPost**](ProductPdfColorProfileApi.md#productPdfColorProfilesChangeStreamPost) | **POST** /ProductPdfColorProfiles/change-stream | Create a change stream.
[**productPdfColorProfilesCountGet**](ProductPdfColorProfileApi.md#productPdfColorProfilesCountGet) | **GET** /ProductPdfColorProfiles/count | Count instances of the model matched by where from the data source.
[**productPdfColorProfilesFindOneGet**](ProductPdfColorProfileApi.md#productPdfColorProfilesFindOneGet) | **GET** /ProductPdfColorProfiles/findOne | Find first instance of the model matched by filter from the data source.
[**productPdfColorProfilesGet**](ProductPdfColorProfileApi.md#productPdfColorProfilesGet) | **GET** /ProductPdfColorProfiles | Find all instances of the model matched by filter from the data source.
[**productPdfColorProfilesIdDelete**](ProductPdfColorProfileApi.md#productPdfColorProfilesIdDelete) | **DELETE** /ProductPdfColorProfiles/{id} | Delete a model instance by {{id}} from the data source.
[**productPdfColorProfilesIdExistsGet**](ProductPdfColorProfileApi.md#productPdfColorProfilesIdExistsGet) | **GET** /ProductPdfColorProfiles/{id}/exists | Check whether a model instance exists in the data source.
[**productPdfColorProfilesIdGet**](ProductPdfColorProfileApi.md#productPdfColorProfilesIdGet) | **GET** /ProductPdfColorProfiles/{id} | Find a model instance by {{id}} from the data source.
[**productPdfColorProfilesIdHead**](ProductPdfColorProfileApi.md#productPdfColorProfilesIdHead) | **HEAD** /ProductPdfColorProfiles/{id} | Check whether a model instance exists in the data source.
[**productPdfColorProfilesIdPatch**](ProductPdfColorProfileApi.md#productPdfColorProfilesIdPatch) | **PATCH** /ProductPdfColorProfiles/{id} | Patch attributes for a model instance and persist it into the data source.
[**productPdfColorProfilesIdPut**](ProductPdfColorProfileApi.md#productPdfColorProfilesIdPut) | **PUT** /ProductPdfColorProfiles/{id} | Replace attributes for a model instance and persist it into the data source.
[**productPdfColorProfilesIdReplacePost**](ProductPdfColorProfileApi.md#productPdfColorProfilesIdReplacePost) | **POST** /ProductPdfColorProfiles/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**productPdfColorProfilesIdTeamGet**](ProductPdfColorProfileApi.md#productPdfColorProfilesIdTeamGet) | **GET** /ProductPdfColorProfiles/{id}/team | Fetches belongsTo relation team.
[**productPdfColorProfilesPatch**](ProductPdfColorProfileApi.md#productPdfColorProfilesPatch) | **PATCH** /ProductPdfColorProfiles | Patch an existing model instance or insert a new one into the data source.
[**productPdfColorProfilesPost**](ProductPdfColorProfileApi.md#productPdfColorProfilesPost) | **POST** /ProductPdfColorProfiles | Create a new instance of the model and persist it into the data source.
[**productPdfColorProfilesPut**](ProductPdfColorProfileApi.md#productPdfColorProfilesPut) | **PUT** /ProductPdfColorProfiles | Replace an existing model instance or insert a new one into the data source.
[**productPdfColorProfilesReplaceOrCreatePost**](ProductPdfColorProfileApi.md#productPdfColorProfilesReplaceOrCreatePost) | **POST** /ProductPdfColorProfiles/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**productPdfColorProfilesUpdatePost**](ProductPdfColorProfileApi.md#productPdfColorProfilesUpdatePost) | **POST** /ProductPdfColorProfiles/update | Update instances of the model matched by {{where}} from the data source.
[**productPdfColorProfilesUpsertWithWherePost**](ProductPdfColorProfileApi.md#productPdfColorProfilesUpsertWithWherePost) | **POST** /ProductPdfColorProfiles/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **productPdfColorProfilesChangeStreamGet**
> \SplFileObject productPdfColorProfilesChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->productPdfColorProfilesChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **productPdfColorProfilesChangeStreamPost**
> \SplFileObject productPdfColorProfilesChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->productPdfColorProfilesChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **productPdfColorProfilesCountGet**
> \Swagger\Client\Model\InlineResponse200 productPdfColorProfilesCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productPdfColorProfilesCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesCountGet: ', $e->getMessage(), PHP_EOL;
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

# **productPdfColorProfilesFindOneGet**
> \Swagger\Client\Model\ProductPdfColorProfile productPdfColorProfilesFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productPdfColorProfilesFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPdfColorProfilesGet**
> \Swagger\Client\Model\ProductPdfColorProfile[] productPdfColorProfilesGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productPdfColorProfilesGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile[]**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPdfColorProfilesIdDelete**
> object productPdfColorProfilesIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productPdfColorProfilesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **productPdfColorProfilesIdExistsGet**
> \Swagger\Client\Model\InlineResponse2001 productPdfColorProfilesIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productPdfColorProfilesIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **productPdfColorProfilesIdGet**
> \Swagger\Client\Model\ProductPdfColorProfile productPdfColorProfilesIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productPdfColorProfilesIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPdfColorProfilesIdHead**
> \Swagger\Client\Model\InlineResponse2001 productPdfColorProfilesIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productPdfColorProfilesIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesIdHead: ', $e->getMessage(), PHP_EOL;
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

# **productPdfColorProfilesIdPatch**
> \Swagger\Client\Model\ProductPdfColorProfile productPdfColorProfilesIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$id = "id_example"; // string | ProductPdfColorProfile id
$data = new \Swagger\Client\Model\ProductPdfColorProfile(); // \Swagger\Client\Model\ProductPdfColorProfile | An object of model property name/value pairs

try {
    $result = $api_instance->productPdfColorProfilesIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductPdfColorProfile id |
 **data** | [**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/\Swagger\Client\Model\ProductPdfColorProfile.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPdfColorProfilesIdPut**
> \Swagger\Client\Model\ProductPdfColorProfile productPdfColorProfilesIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\ProductPdfColorProfile(); // \Swagger\Client\Model\ProductPdfColorProfile | Model instance data

try {
    $result = $api_instance->productPdfColorProfilesIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/\Swagger\Client\Model\ProductPdfColorProfile.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPdfColorProfilesIdReplacePost**
> \Swagger\Client\Model\ProductPdfColorProfile productPdfColorProfilesIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\ProductPdfColorProfile(); // \Swagger\Client\Model\ProductPdfColorProfile | Model instance data

try {
    $result = $api_instance->productPdfColorProfilesIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/\Swagger\Client\Model\ProductPdfColorProfile.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPdfColorProfilesIdTeamGet**
> \Swagger\Client\Model\Team productPdfColorProfilesIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$id = "id_example"; // string | ProductPdfColorProfile id
$refresh = true; // bool | 

try {
    $result = $api_instance->productPdfColorProfilesIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductPdfColorProfile id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPdfColorProfilesPatch**
> \Swagger\Client\Model\ProductPdfColorProfile productPdfColorProfilesPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$data = new \Swagger\Client\Model\ProductPdfColorProfile(); // \Swagger\Client\Model\ProductPdfColorProfile | Model instance data

try {
    $result = $api_instance->productPdfColorProfilesPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/\Swagger\Client\Model\ProductPdfColorProfile.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPdfColorProfilesPost**
> \Swagger\Client\Model\ProductPdfColorProfile productPdfColorProfilesPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$data = new \Swagger\Client\Model\ProductPdfColorProfile(); // \Swagger\Client\Model\ProductPdfColorProfile | Model instance data

try {
    $result = $api_instance->productPdfColorProfilesPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/\Swagger\Client\Model\ProductPdfColorProfile.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPdfColorProfilesPut**
> \Swagger\Client\Model\ProductPdfColorProfile productPdfColorProfilesPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$data = new \Swagger\Client\Model\ProductPdfColorProfile(); // \Swagger\Client\Model\ProductPdfColorProfile | Model instance data

try {
    $result = $api_instance->productPdfColorProfilesPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/\Swagger\Client\Model\ProductPdfColorProfile.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPdfColorProfilesReplaceOrCreatePost**
> \Swagger\Client\Model\ProductPdfColorProfile productPdfColorProfilesReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$data = new \Swagger\Client\Model\ProductPdfColorProfile(); // \Swagger\Client\Model\ProductPdfColorProfile | Model instance data

try {
    $result = $api_instance->productPdfColorProfilesReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/\Swagger\Client\Model\ProductPdfColorProfile.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPdfColorProfilesUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 productPdfColorProfilesUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\ProductPdfColorProfile(); // \Swagger\Client\Model\ProductPdfColorProfile | An object of model property name/value pairs

try {
    $result = $api_instance->productPdfColorProfilesUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/\Swagger\Client\Model\ProductPdfColorProfile.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productPdfColorProfilesUpsertWithWherePost**
> \Swagger\Client\Model\ProductPdfColorProfile productPdfColorProfilesUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductPdfColorProfileApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\ProductPdfColorProfile(); // \Swagger\Client\Model\ProductPdfColorProfile | An object of model property name/value pairs

try {
    $result = $api_instance->productPdfColorProfilesUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPdfColorProfileApi->productPdfColorProfilesUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/\Swagger\Client\Model\ProductPdfColorProfile.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

