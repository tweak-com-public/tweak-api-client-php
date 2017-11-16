# Tweak\Api\ProductGroupApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productGroupsChangeStreamGet**](ProductGroupApi.md#productGroupsChangeStreamGet) | **GET** /ProductGroups/change-stream | Create a change stream.
[**productGroupsChangeStreamPost**](ProductGroupApi.md#productGroupsChangeStreamPost) | **POST** /ProductGroups/change-stream | Create a change stream.
[**productGroupsCountGet**](ProductGroupApi.md#productGroupsCountGet) | **GET** /ProductGroups/count | Count instances of the model matched by where from the data source.
[**productGroupsFindOneGet**](ProductGroupApi.md#productGroupsFindOneGet) | **GET** /ProductGroups/findOne | Find first instance of the model matched by filter from the data source.
[**productGroupsGet**](ProductGroupApi.md#productGroupsGet) | **GET** /ProductGroups | Find all instances of the model matched by filter from the data source.
[**productGroupsIdDelete**](ProductGroupApi.md#productGroupsIdDelete) | **DELETE** /ProductGroups/{id} | Delete a model instance by {{id}} from the data source.
[**productGroupsIdExistsGet**](ProductGroupApi.md#productGroupsIdExistsGet) | **GET** /ProductGroups/{id}/exists | Check whether a model instance exists in the data source.
[**productGroupsIdGet**](ProductGroupApi.md#productGroupsIdGet) | **GET** /ProductGroups/{id} | Find a model instance by {{id}} from the data source.
[**productGroupsIdHead**](ProductGroupApi.md#productGroupsIdHead) | **HEAD** /ProductGroups/{id} | Check whether a model instance exists in the data source.
[**productGroupsIdPatch**](ProductGroupApi.md#productGroupsIdPatch) | **PATCH** /ProductGroups/{id} | Patch attributes for a model instance and persist it into the data source.
[**productGroupsIdPut**](ProductGroupApi.md#productGroupsIdPut) | **PUT** /ProductGroups/{id} | Replace attributes for a model instance and persist it into the data source.
[**productGroupsIdReplacePost**](ProductGroupApi.md#productGroupsIdReplacePost) | **POST** /ProductGroups/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**productGroupsIdTypesCountGet**](ProductGroupApi.md#productGroupsIdTypesCountGet) | **GET** /ProductGroups/{id}/types/count | Counts types of ProductGroup.
[**productGroupsIdTypesDelete**](ProductGroupApi.md#productGroupsIdTypesDelete) | **DELETE** /ProductGroups/{id}/types | Deletes all types of this model.
[**productGroupsIdTypesFkDelete**](ProductGroupApi.md#productGroupsIdTypesFkDelete) | **DELETE** /ProductGroups/{id}/types/{fk} | Delete a related item by id for types.
[**productGroupsIdTypesFkGet**](ProductGroupApi.md#productGroupsIdTypesFkGet) | **GET** /ProductGroups/{id}/types/{fk} | Find a related item by id for types.
[**productGroupsIdTypesFkPut**](ProductGroupApi.md#productGroupsIdTypesFkPut) | **PUT** /ProductGroups/{id}/types/{fk} | Update a related item by id for types.
[**productGroupsIdTypesGet**](ProductGroupApi.md#productGroupsIdTypesGet) | **GET** /ProductGroups/{id}/types | Queries types of ProductGroup.
[**productGroupsIdTypesPost**](ProductGroupApi.md#productGroupsIdTypesPost) | **POST** /ProductGroups/{id}/types | Creates a new instance in types of this model.
[**productGroupsPatch**](ProductGroupApi.md#productGroupsPatch) | **PATCH** /ProductGroups | Patch an existing model instance or insert a new one into the data source.
[**productGroupsPost**](ProductGroupApi.md#productGroupsPost) | **POST** /ProductGroups | Create a new instance of the model and persist it into the data source.
[**productGroupsPut**](ProductGroupApi.md#productGroupsPut) | **PUT** /ProductGroups | Replace an existing model instance or insert a new one into the data source.
[**productGroupsReplaceOrCreatePost**](ProductGroupApi.md#productGroupsReplaceOrCreatePost) | **POST** /ProductGroups/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**productGroupsUpdatePost**](ProductGroupApi.md#productGroupsUpdatePost) | **POST** /ProductGroups/update | Update instances of the model matched by {{where}} from the data source.
[**productGroupsUpsertWithWherePost**](ProductGroupApi.md#productGroupsUpsertWithWherePost) | **POST** /ProductGroups/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **productGroupsChangeStreamGet**
> \SplFileObject productGroupsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->productGroupsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **productGroupsChangeStreamPost**
> \SplFileObject productGroupsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->productGroupsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **productGroupsCountGet**
> \Swagger\Client\Model\InlineResponse200 productGroupsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productGroupsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **productGroupsFindOneGet**
> \Swagger\Client\Model\ProductGroup productGroupsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productGroupsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsGet**
> \Swagger\Client\Model\ProductGroup[] productGroupsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productGroupsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup[]**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsIdDelete**
> object productGroupsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productGroupsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **productGroupsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2001 productGroupsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productGroupsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **productGroupsIdGet**
> \Swagger\Client\Model\ProductGroup productGroupsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productGroupsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsIdHead**
> \Swagger\Client\Model\InlineResponse2001 productGroupsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productGroupsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **productGroupsIdPatch**
> \Swagger\Client\Model\ProductGroup productGroupsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$data = new \Swagger\Client\Model\ProductGroup(); // \Swagger\Client\Model\ProductGroup | An object of model property name/value pairs

try {
    $result = $api_instance->productGroupsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **data** | [**\Swagger\Client\Model\ProductGroup**](../Model/\Swagger\Client\Model\ProductGroup.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsIdPut**
> \Swagger\Client\Model\ProductGroup productGroupsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\ProductGroup(); // \Swagger\Client\Model\ProductGroup | Model instance data

try {
    $result = $api_instance->productGroupsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\ProductGroup**](../Model/\Swagger\Client\Model\ProductGroup.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsIdReplacePost**
> \Swagger\Client\Model\ProductGroup productGroupsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\ProductGroup(); // \Swagger\Client\Model\ProductGroup | Model instance data

try {
    $result = $api_instance->productGroupsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\ProductGroup**](../Model/\Swagger\Client\Model\ProductGroup.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsIdTypesCountGet**
> \Swagger\Client\Model\InlineResponse200 productGroupsIdTypesCountGet($id, $where)

Counts types of ProductGroup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productGroupsIdTypesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsIdTypesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsIdTypesDelete**
> productGroupsIdTypesDelete($id)

Deletes all types of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id

try {
    $api_instance->productGroupsIdTypesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsIdTypesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsIdTypesFkDelete**
> productGroupsIdTypesFkDelete($id, $fk)

Delete a related item by id for types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for types

try {
    $api_instance->productGroupsIdTypesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsIdTypesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for types |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsIdTypesFkGet**
> \Swagger\Client\Model\ProductType productGroupsIdTypesFkGet($id, $fk)

Find a related item by id for types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for types

try {
    $result = $api_instance->productGroupsIdTypesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsIdTypesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for types |

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsIdTypesFkPut**
> \Swagger\Client\Model\ProductType productGroupsIdTypesFkPut($id, $fk, $data)

Update a related item by id for types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$fk = "fk_example"; // string | Foreign key for types
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | 

try {
    $result = $api_instance->productGroupsIdTypesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsIdTypesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **fk** | **string**| Foreign key for types |
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsIdTypesGet**
> \Swagger\Client\Model\ProductType[] productGroupsIdTypesGet($id, $filter)

Queries types of ProductGroup.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->productGroupsIdTypesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsIdTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductType[]**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsIdTypesPost**
> \Swagger\Client\Model\ProductType productGroupsIdTypesPost($id, $data)

Creates a new instance in types of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$id = "id_example"; // string | ProductGroup id
$data = new \Swagger\Client\Model\ProductType(); // \Swagger\Client\Model\ProductType | 

try {
    $result = $api_instance->productGroupsIdTypesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsIdTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductGroup id |
 **data** | [**\Swagger\Client\Model\ProductType**](../Model/\Swagger\Client\Model\ProductType.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsPatch**
> \Swagger\Client\Model\ProductGroup productGroupsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$data = new \Swagger\Client\Model\ProductGroup(); // \Swagger\Client\Model\ProductGroup | Model instance data

try {
    $result = $api_instance->productGroupsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductGroup**](../Model/\Swagger\Client\Model\ProductGroup.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsPost**
> \Swagger\Client\Model\ProductGroup productGroupsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$data = new \Swagger\Client\Model\ProductGroup(); // \Swagger\Client\Model\ProductGroup | Model instance data

try {
    $result = $api_instance->productGroupsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductGroup**](../Model/\Swagger\Client\Model\ProductGroup.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsPut**
> \Swagger\Client\Model\ProductGroup productGroupsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$data = new \Swagger\Client\Model\ProductGroup(); // \Swagger\Client\Model\ProductGroup | Model instance data

try {
    $result = $api_instance->productGroupsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductGroup**](../Model/\Swagger\Client\Model\ProductGroup.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsReplaceOrCreatePost**
> \Swagger\Client\Model\ProductGroup productGroupsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$data = new \Swagger\Client\Model\ProductGroup(); // \Swagger\Client\Model\ProductGroup | Model instance data

try {
    $result = $api_instance->productGroupsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductGroup**](../Model/\Swagger\Client\Model\ProductGroup.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 productGroupsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\ProductGroup(); // \Swagger\Client\Model\ProductGroup | An object of model property name/value pairs

try {
    $result = $api_instance->productGroupsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\ProductGroup**](../Model/\Swagger\Client\Model\ProductGroup.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupsUpsertWithWherePost**
> \Swagger\Client\Model\ProductGroup productGroupsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductGroupApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\ProductGroup(); // \Swagger\Client\Model\ProductGroup | An object of model property name/value pairs

try {
    $result = $api_instance->productGroupsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\ProductGroup**](../Model/\Swagger\Client\Model\ProductGroup.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

