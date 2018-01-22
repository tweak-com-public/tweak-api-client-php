# Tweak\Api\ProductTypeApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productTypesChangeStreamGet**](ProductTypeApi.md#productTypesChangeStreamGet) | **GET** /ProductTypes/change-stream | Create a change stream.
[**productTypesChangeStreamPost**](ProductTypeApi.md#productTypesChangeStreamPost) | **POST** /ProductTypes/change-stream | Create a change stream.
[**productTypesCountGet**](ProductTypeApi.md#productTypesCountGet) | **GET** /ProductTypes/count | Count instances of the model matched by where from the data source.
[**productTypesFindOneGet**](ProductTypeApi.md#productTypesFindOneGet) | **GET** /ProductTypes/findOne | Find first instance of the model matched by filter from the data source.
[**productTypesGet**](ProductTypeApi.md#productTypesGet) | **GET** /ProductTypes | Find all instances of the model matched by filter from the data source.
[**productTypesIdDelete**](ProductTypeApi.md#productTypesIdDelete) | **DELETE** /ProductTypes/{id} | Delete a model instance by {{id}} from the data source.
[**productTypesIdExistsGet**](ProductTypeApi.md#productTypesIdExistsGet) | **GET** /ProductTypes/{id}/exists | Check whether a model instance exists in the data source.
[**productTypesIdGet**](ProductTypeApi.md#productTypesIdGet) | **GET** /ProductTypes/{id} | Find a model instance by {{id}} from the data source.
[**productTypesIdGroupGet**](ProductTypeApi.md#productTypesIdGroupGet) | **GET** /ProductTypes/{id}/group | Fetches belongsTo relation group.
[**productTypesIdHead**](ProductTypeApi.md#productTypesIdHead) | **HEAD** /ProductTypes/{id} | Check whether a model instance exists in the data source.
[**productTypesIdPatch**](ProductTypeApi.md#productTypesIdPatch) | **PATCH** /ProductTypes/{id} | Patch attributes for a model instance and persist it into the data source.
[**productTypesIdPut**](ProductTypeApi.md#productTypesIdPut) | **PUT** /ProductTypes/{id} | Replace attributes for a model instance and persist it into the data source.
[**productTypesIdReplacePost**](ProductTypeApi.md#productTypesIdReplacePost) | **POST** /ProductTypes/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**productTypesIdSizesCountGet**](ProductTypeApi.md#productTypesIdSizesCountGet) | **GET** /ProductTypes/{id}/sizes/count | Counts sizes of ProductType.
[**productTypesIdSizesDelete**](ProductTypeApi.md#productTypesIdSizesDelete) | **DELETE** /ProductTypes/{id}/sizes | Deletes all sizes of this model.
[**productTypesIdSizesFkDelete**](ProductTypeApi.md#productTypesIdSizesFkDelete) | **DELETE** /ProductTypes/{id}/sizes/{fk} | Delete a related item by id for sizes.
[**productTypesIdSizesFkGet**](ProductTypeApi.md#productTypesIdSizesFkGet) | **GET** /ProductTypes/{id}/sizes/{fk} | Find a related item by id for sizes.
[**productTypesIdSizesFkPut**](ProductTypeApi.md#productTypesIdSizesFkPut) | **PUT** /ProductTypes/{id}/sizes/{fk} | Update a related item by id for sizes.
[**productTypesIdSizesGet**](ProductTypeApi.md#productTypesIdSizesGet) | **GET** /ProductTypes/{id}/sizes | Queries sizes of ProductType.
[**productTypesIdSizesPost**](ProductTypeApi.md#productTypesIdSizesPost) | **POST** /ProductTypes/{id}/sizes | Creates a new instance in sizes of this model.
[**productTypesPatch**](ProductTypeApi.md#productTypesPatch) | **PATCH** /ProductTypes | Patch an existing model instance or insert a new one into the data source.
[**productTypesPost**](ProductTypeApi.md#productTypesPost) | **POST** /ProductTypes | Create a new instance of the model and persist it into the data source.
[**productTypesPut**](ProductTypeApi.md#productTypesPut) | **PUT** /ProductTypes | Replace an existing model instance or insert a new one into the data source.
[**productTypesReplaceOrCreatePost**](ProductTypeApi.md#productTypesReplaceOrCreatePost) | **POST** /ProductTypes/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**productTypesUpdatePost**](ProductTypeApi.md#productTypesUpdatePost) | **POST** /ProductTypes/update | Update instances of the model matched by {{where}} from the data source.
[**productTypesUpsertWithWherePost**](ProductTypeApi.md#productTypesUpsertWithWherePost) | **POST** /ProductTypes/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **productTypesChangeStreamGet**
> \SplFileObject productTypesChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->productTypesChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **productTypesChangeStreamPost**
> \SplFileObject productTypesChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->productTypesChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **productTypesCountGet**
> \Swagger\Client\Model\InlineResponse2001 productTypesCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productTypesCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesCountGet: ', $e->getMessage(), PHP_EOL;
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

# **productTypesFindOneGet**
> \Swagger\Client\Model\ProductType productTypesFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productTypesFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesGet**
> \Swagger\Client\Model\ProductType[] productTypesGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productTypesGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductType[]**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesIdDelete**
> object productTypesIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productTypesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **productTypesIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 productTypesIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productTypesIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **productTypesIdGet**
> \Swagger\Client\Model\ProductType productTypesIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productTypesIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesIdGroupGet**
> \Swagger\Client\Model\ProductGroup productTypesIdGroupGet($id, $refresh)

Fetches belongsTo relation group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | ProductType id
$refresh = true; // bool | 

try {
    $result = $api_instance->productTypesIdGroupGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdGroupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductType id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesIdHead**
> \Swagger\Client\Model\InlineResponse2002 productTypesIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productTypesIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdHead: ', $e->getMessage(), PHP_EOL;
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

# **productTypesIdPatch**
> \Swagger\Client\Model\ProductType productTypesIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | ProductType id
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | An object of model property name/value pairs

try {
    $result = $api_instance->productTypesIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductType id |
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesIdPut**
> \Swagger\Client\Model\ProductType productTypesIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | Model instance data

try {
    $result = $api_instance->productTypesIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesIdReplacePost**
> \Swagger\Client\Model\ProductType productTypesIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | Model instance data

try {
    $result = $api_instance->productTypesIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesIdSizesCountGet**
> \Swagger\Client\Model\InlineResponse2001 productTypesIdSizesCountGet($id, $where)

Counts sizes of ProductType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | ProductType id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productTypesIdSizesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdSizesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductType id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesIdSizesDelete**
> productTypesIdSizesDelete($id)

Deletes all sizes of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | ProductType id

try {
    $api_instance->productTypesIdSizesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdSizesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductType id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesIdSizesFkDelete**
> productTypesIdSizesFkDelete($id, $fk)

Delete a related item by id for sizes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | ProductType id
$fk = "fk_example"; // string | Foreign key for sizes

try {
    $api_instance->productTypesIdSizesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdSizesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductType id |
 **fk** | **string**| Foreign key for sizes |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesIdSizesFkGet**
> \Swagger\Client\Model\ProductSize productTypesIdSizesFkGet($id, $fk)

Find a related item by id for sizes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | ProductType id
$fk = "fk_example"; // string | Foreign key for sizes

try {
    $result = $api_instance->productTypesIdSizesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdSizesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductType id |
 **fk** | **string**| Foreign key for sizes |

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesIdSizesFkPut**
> \Swagger\Client\Model\ProductSize productTypesIdSizesFkPut($id, $fk, $data)

Update a related item by id for sizes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | ProductType id
$fk = "fk_example"; // string | Foreign key for sizes
$data = new \Swagger\Client\Model\ProductSize(); // \Swagger\Client\Model\ProductSize | 

try {
    $result = $api_instance->productTypesIdSizesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdSizesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductType id |
 **fk** | **string**| Foreign key for sizes |
 **data** | [**\Swagger\Client\Model\ProductSize**](../Model/\Swagger\Client\Model\ProductSize.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesIdSizesGet**
> \Swagger\Client\Model\ProductSize[] productTypesIdSizesGet($id, $filter)

Queries sizes of ProductType.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | ProductType id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->productTypesIdSizesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdSizesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductType id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize[]**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesIdSizesPost**
> \Swagger\Client\Model\ProductSize productTypesIdSizesPost($id, $data)

Creates a new instance in sizes of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$id = "id_example"; // string | ProductType id
$data = new \Swagger\Client\Model\ProductSize(); // \Swagger\Client\Model\ProductSize | 

try {
    $result = $api_instance->productTypesIdSizesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesIdSizesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductType id |
 **data** | [**\Swagger\Client\Model\ProductSize**](../Model/\Swagger\Client\Model\ProductSize.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesPatch**
> \Swagger\Client\Model\ProductType productTypesPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | Model instance data

try {
    $result = $api_instance->productTypesPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesPost**
> \Swagger\Client\Model\ProductType productTypesPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | Model instance data

try {
    $result = $api_instance->productTypesPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesPut**
> \Swagger\Client\Model\ProductType productTypesPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | Model instance data

try {
    $result = $api_instance->productTypesPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesReplaceOrCreatePost**
> \Swagger\Client\Model\ProductType productTypesReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | Model instance data

try {
    $result = $api_instance->productTypesReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesUpdatePost**
> \Swagger\Client\Model\InlineResponse2003 productTypesUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | An object of model property name/value pairs

try {
    $result = $api_instance->productTypesUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productTypesUpsertWithWherePost**
> \Swagger\Client\Model\ProductType productTypesUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductTypeApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | An object of model property name/value pairs

try {
    $result = $api_instance->productTypesUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTypeApi->productTypesUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

