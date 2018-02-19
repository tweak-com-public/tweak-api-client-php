# Tweak\Api\ProductSizeApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productSizesChangeStreamGet**](ProductSizeApi.md#productSizesChangeStreamGet) | **GET** /ProductSizes/change-stream | Create a change stream.
[**productSizesChangeStreamPost**](ProductSizeApi.md#productSizesChangeStreamPost) | **POST** /ProductSizes/change-stream | Create a change stream.
[**productSizesCountGet**](ProductSizeApi.md#productSizesCountGet) | **GET** /ProductSizes/count | Count instances of the model matched by where from the data source.
[**productSizesFindOneGet**](ProductSizeApi.md#productSizesFindOneGet) | **GET** /ProductSizes/findOne | Find first instance of the model matched by filter from the data source.
[**productSizesGet**](ProductSizeApi.md#productSizesGet) | **GET** /ProductSizes | Find all instances of the model matched by filter from the data source.
[**productSizesIdDelete**](ProductSizeApi.md#productSizesIdDelete) | **DELETE** /ProductSizes/{id} | Delete a model instance by {{id}} from the data source.
[**productSizesIdExistsGet**](ProductSizeApi.md#productSizesIdExistsGet) | **GET** /ProductSizes/{id}/exists | Check whether a model instance exists in the data source.
[**productSizesIdGet**](ProductSizeApi.md#productSizesIdGet) | **GET** /ProductSizes/{id} | Find a model instance by {{id}} from the data source.
[**productSizesIdHead**](ProductSizeApi.md#productSizesIdHead) | **HEAD** /ProductSizes/{id} | Check whether a model instance exists in the data source.
[**productSizesIdMaterialsCountGet**](ProductSizeApi.md#productSizesIdMaterialsCountGet) | **GET** /ProductSizes/{id}/materials/count | Counts materials of ProductSize.
[**productSizesIdMaterialsFkDelete**](ProductSizeApi.md#productSizesIdMaterialsFkDelete) | **DELETE** /ProductSizes/{id}/materials/{fk} | Delete a related item by id for materials.
[**productSizesIdMaterialsFkGet**](ProductSizeApi.md#productSizesIdMaterialsFkGet) | **GET** /ProductSizes/{id}/materials/{fk} | Find a related item by id for materials.
[**productSizesIdMaterialsFkPut**](ProductSizeApi.md#productSizesIdMaterialsFkPut) | **PUT** /ProductSizes/{id}/materials/{fk} | Update a related item by id for materials.
[**productSizesIdMaterialsGet**](ProductSizeApi.md#productSizesIdMaterialsGet) | **GET** /ProductSizes/{id}/materials | Queries materials of ProductSize.
[**productSizesIdMaterialsPost**](ProductSizeApi.md#productSizesIdMaterialsPost) | **POST** /ProductSizes/{id}/materials | Creates a new instance in materials of this model.
[**productSizesIdMaterialsRelFkDelete**](ProductSizeApi.md#productSizesIdMaterialsRelFkDelete) | **DELETE** /ProductSizes/{id}/materials/rel/{fk} | Remove the materials relation to an item by id.
[**productSizesIdMaterialsRelFkHead**](ProductSizeApi.md#productSizesIdMaterialsRelFkHead) | **HEAD** /ProductSizes/{id}/materials/rel/{fk} | Check the existence of materials relation to an item by id.
[**productSizesIdMaterialsRelFkPut**](ProductSizeApi.md#productSizesIdMaterialsRelFkPut) | **PUT** /ProductSizes/{id}/materials/rel/{fk} | Add a related item by id for materials.
[**productSizesIdPatch**](ProductSizeApi.md#productSizesIdPatch) | **PATCH** /ProductSizes/{id} | Patch attributes for a model instance and persist it into the data source.
[**productSizesIdPdfColorProfileGet**](ProductSizeApi.md#productSizesIdPdfColorProfileGet) | **GET** /ProductSizes/{id}/pdfColorProfile | Fetches belongsTo relation pdfColorProfile.
[**productSizesIdProductsCountGet**](ProductSizeApi.md#productSizesIdProductsCountGet) | **GET** /ProductSizes/{id}/products/count | Counts products of ProductSize.
[**productSizesIdProductsDelete**](ProductSizeApi.md#productSizesIdProductsDelete) | **DELETE** /ProductSizes/{id}/products | Deletes all products of this model.
[**productSizesIdProductsFkDelete**](ProductSizeApi.md#productSizesIdProductsFkDelete) | **DELETE** /ProductSizes/{id}/products/{fk} | Delete a related item by id for products.
[**productSizesIdProductsFkGet**](ProductSizeApi.md#productSizesIdProductsFkGet) | **GET** /ProductSizes/{id}/products/{fk} | Find a related item by id for products.
[**productSizesIdProductsFkPut**](ProductSizeApi.md#productSizesIdProductsFkPut) | **PUT** /ProductSizes/{id}/products/{fk} | Update a related item by id for products.
[**productSizesIdProductsGet**](ProductSizeApi.md#productSizesIdProductsGet) | **GET** /ProductSizes/{id}/products | Queries products of ProductSize.
[**productSizesIdProductsPost**](ProductSizeApi.md#productSizesIdProductsPost) | **POST** /ProductSizes/{id}/products | Creates a new instance in products of this model.
[**productSizesIdPut**](ProductSizeApi.md#productSizesIdPut) | **PUT** /ProductSizes/{id} | Replace attributes for a model instance and persist it into the data source.
[**productSizesIdReplacePost**](ProductSizeApi.md#productSizesIdReplacePost) | **POST** /ProductSizes/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**productSizesIdSizeMaterialsCountGet**](ProductSizeApi.md#productSizesIdSizeMaterialsCountGet) | **GET** /ProductSizes/{id}/sizeMaterials/count | Counts sizeMaterials of ProductSize.
[**productSizesIdSizeMaterialsFkDelete**](ProductSizeApi.md#productSizesIdSizeMaterialsFkDelete) | **DELETE** /ProductSizes/{id}/sizeMaterials/{fk} | Delete a related item by id for sizeMaterials.
[**productSizesIdSizeMaterialsFkGet**](ProductSizeApi.md#productSizesIdSizeMaterialsFkGet) | **GET** /ProductSizes/{id}/sizeMaterials/{fk} | Find a related item by id for sizeMaterials.
[**productSizesIdSizeMaterialsFkPut**](ProductSizeApi.md#productSizesIdSizeMaterialsFkPut) | **PUT** /ProductSizes/{id}/sizeMaterials/{fk} | Update a related item by id for sizeMaterials.
[**productSizesIdSizeMaterialsGet**](ProductSizeApi.md#productSizesIdSizeMaterialsGet) | **GET** /ProductSizes/{id}/sizeMaterials | Queries sizeMaterials of ProductSize.
[**productSizesIdSizeMaterialsPost**](ProductSizeApi.md#productSizesIdSizeMaterialsPost) | **POST** /ProductSizes/{id}/sizeMaterials | Creates a new instance in sizeMaterials of this model.
[**productSizesIdTypeGet**](ProductSizeApi.md#productSizesIdTypeGet) | **GET** /ProductSizes/{id}/type | Fetches belongsTo relation type.
[**productSizesPost**](ProductSizeApi.md#productSizesPost) | **POST** /ProductSizes | Create a new instance of the model and persist it into the data source.


# **productSizesChangeStreamGet**
> \SplFileObject productSizesChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->productSizesChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **productSizesChangeStreamPost**
> \SplFileObject productSizesChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->productSizesChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **productSizesCountGet**
> \Swagger\Client\Model\InlineResponse2001 productSizesCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productSizesCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesCountGet: ', $e->getMessage(), PHP_EOL;
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

# **productSizesFindOneGet**
> \Swagger\Client\Model\ProductSize productSizesFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productSizesFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesGet**
> \Swagger\Client\Model\ProductSize[] productSizesGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productSizesGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize[]**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdDelete**
> object productSizesIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productSizesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **productSizesIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 productSizesIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productSizesIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **productSizesIdGet**
> \Swagger\Client\Model\ProductSize productSizesIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->productSizesIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdHead**
> \Swagger\Client\Model\InlineResponse2002 productSizesIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->productSizesIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdHead: ', $e->getMessage(), PHP_EOL;
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

# **productSizesIdMaterialsCountGet**
> \Swagger\Client\Model\InlineResponse2001 productSizesIdMaterialsCountGet($id, $where)

Counts materials of ProductSize.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productSizesIdMaterialsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdMaterialsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdMaterialsFkDelete**
> productSizesIdMaterialsFkDelete($id, $fk)

Delete a related item by id for materials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$fk = "fk_example"; // string | Foreign key for materials

try {
    $api_instance->productSizesIdMaterialsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdMaterialsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **fk** | **string**| Foreign key for materials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdMaterialsFkGet**
> \Swagger\Client\Model\ProductMaterial productSizesIdMaterialsFkGet($id, $fk)

Find a related item by id for materials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$fk = "fk_example"; // string | Foreign key for materials

try {
    $result = $api_instance->productSizesIdMaterialsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdMaterialsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **fk** | **string**| Foreign key for materials |

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdMaterialsFkPut**
> \Swagger\Client\Model\ProductMaterial productSizesIdMaterialsFkPut($id, $fk, $data)

Update a related item by id for materials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$fk = "fk_example"; // string | Foreign key for materials
$data = new \Swagger\Client\Model\ProductMaterial(); // \Swagger\Client\Model\ProductMaterial | 

try {
    $result = $api_instance->productSizesIdMaterialsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdMaterialsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **fk** | **string**| Foreign key for materials |
 **data** | [**\Swagger\Client\Model\ProductMaterial**](../Model/\Swagger\Client\Model\ProductMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdMaterialsGet**
> \Swagger\Client\Model\ProductMaterial[] productSizesIdMaterialsGet($id, $filter)

Queries materials of ProductSize.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->productSizesIdMaterialsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial[]**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdMaterialsPost**
> \Swagger\Client\Model\ProductMaterial productSizesIdMaterialsPost($id, $data)

Creates a new instance in materials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$data = new \Swagger\Client\Model\ProductMaterial(); // \Swagger\Client\Model\ProductMaterial | 

try {
    $result = $api_instance->productSizesIdMaterialsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **data** | [**\Swagger\Client\Model\ProductMaterial**](../Model/\Swagger\Client\Model\ProductMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdMaterialsRelFkDelete**
> productSizesIdMaterialsRelFkDelete($id, $fk)

Remove the materials relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$fk = "fk_example"; // string | Foreign key for materials

try {
    $api_instance->productSizesIdMaterialsRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdMaterialsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **fk** | **string**| Foreign key for materials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdMaterialsRelFkHead**
> bool productSizesIdMaterialsRelFkHead($id, $fk)

Check the existence of materials relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$fk = "fk_example"; // string | Foreign key for materials

try {
    $result = $api_instance->productSizesIdMaterialsRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdMaterialsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **fk** | **string**| Foreign key for materials |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdMaterialsRelFkPut**
> \Swagger\Client\Model\ProductSizeMaterial productSizesIdMaterialsRelFkPut($id, $fk, $data)

Add a related item by id for materials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$fk = "fk_example"; // string | Foreign key for materials
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->productSizesIdMaterialsRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdMaterialsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **fk** | **string**| Foreign key for materials |
 **data** | [**\Swagger\Client\Model\ProductSizeMaterial**](../Model/\Swagger\Client\Model\ProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdPatch**
> \Swagger\Client\Model\ProductSize productSizesIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$data = new \Swagger\Client\Model\ProductSize(); // \Swagger\Client\Model\ProductSize | An object of model property name/value pairs

try {
    $result = $api_instance->productSizesIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **data** | [**\Swagger\Client\Model\ProductSize**](../Model/\Swagger\Client\Model\ProductSize.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdPdfColorProfileGet**
> \Swagger\Client\Model\ProductPdfColorProfile productSizesIdPdfColorProfileGet($id, $refresh)

Fetches belongsTo relation pdfColorProfile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$refresh = true; // bool | 

try {
    $result = $api_instance->productSizesIdPdfColorProfileGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdPdfColorProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductPdfColorProfile**](../Model/ProductPdfColorProfile.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdProductsCountGet**
> \Swagger\Client\Model\InlineResponse2001 productSizesIdProductsCountGet($id, $where)

Counts products of ProductSize.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productSizesIdProductsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdProductsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdProductsDelete**
> productSizesIdProductsDelete($id)

Deletes all products of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id

try {
    $api_instance->productSizesIdProductsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdProductsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdProductsFkDelete**
> productSizesIdProductsFkDelete($id, $fk)

Delete a related item by id for products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$fk = "fk_example"; // string | Foreign key for products

try {
    $api_instance->productSizesIdProductsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdProductsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **fk** | **string**| Foreign key for products |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdProductsFkGet**
> \Swagger\Client\Model\Product productSizesIdProductsFkGet($id, $fk)

Find a related item by id for products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$fk = "fk_example"; // string | Foreign key for products

try {
    $result = $api_instance->productSizesIdProductsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdProductsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **fk** | **string**| Foreign key for products |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdProductsFkPut**
> \Swagger\Client\Model\Product productSizesIdProductsFkPut($id, $fk, $data)

Update a related item by id for products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$fk = "fk_example"; // string | Foreign key for products
$data = new \Swagger\Client\Model\Product(); // \Swagger\Client\Model\Product | 

try {
    $result = $api_instance->productSizesIdProductsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdProductsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **fk** | **string**| Foreign key for products |
 **data** | [**\Swagger\Client\Model\Product**](../Model/\Swagger\Client\Model\Product.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdProductsGet**
> \Swagger\Client\Model\Product[] productSizesIdProductsGet($id, $filter)

Queries products of ProductSize.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->productSizesIdProductsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Product[]**](../Model/Product.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdProductsPost**
> \Swagger\Client\Model\Product productSizesIdProductsPost($id, $data)

Creates a new instance in products of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$data = new \Swagger\Client\Model\Product(); // \Swagger\Client\Model\Product | 

try {
    $result = $api_instance->productSizesIdProductsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdProductsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **data** | [**\Swagger\Client\Model\Product**](../Model/\Swagger\Client\Model\Product.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdPut**
> \Swagger\Client\Model\ProductSize productSizesIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\ProductSize(); // \Swagger\Client\Model\ProductSize | Model instance data

try {
    $result = $api_instance->productSizesIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\ProductSize**](../Model/\Swagger\Client\Model\ProductSize.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdReplacePost**
> \Swagger\Client\Model\ProductSize productSizesIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\ProductSize(); // \Swagger\Client\Model\ProductSize | Model instance data

try {
    $result = $api_instance->productSizesIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\ProductSize**](../Model/\Swagger\Client\Model\ProductSize.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdSizeMaterialsCountGet**
> \Swagger\Client\Model\InlineResponse2001 productSizesIdSizeMaterialsCountGet($id, $where)

Counts sizeMaterials of ProductSize.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->productSizesIdSizeMaterialsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdSizeMaterialsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdSizeMaterialsFkDelete**
> productSizesIdSizeMaterialsFkDelete($id, $fk)

Delete a related item by id for sizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$fk = "fk_example"; // string | Foreign key for sizeMaterials

try {
    $api_instance->productSizesIdSizeMaterialsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdSizeMaterialsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **fk** | **string**| Foreign key for sizeMaterials |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdSizeMaterialsFkGet**
> \Swagger\Client\Model\ProductSizeMaterial productSizesIdSizeMaterialsFkGet($id, $fk)

Find a related item by id for sizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$fk = "fk_example"; // string | Foreign key for sizeMaterials

try {
    $result = $api_instance->productSizesIdSizeMaterialsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdSizeMaterialsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **fk** | **string**| Foreign key for sizeMaterials |

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdSizeMaterialsFkPut**
> \Swagger\Client\Model\ProductSizeMaterial productSizesIdSizeMaterialsFkPut($id, $fk, $data)

Update a related item by id for sizeMaterials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$fk = "fk_example"; // string | Foreign key for sizeMaterials
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->productSizesIdSizeMaterialsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdSizeMaterialsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **fk** | **string**| Foreign key for sizeMaterials |
 **data** | [**\Swagger\Client\Model\ProductSizeMaterial**](../Model/\Swagger\Client\Model\ProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdSizeMaterialsGet**
> \Swagger\Client\Model\ProductSizeMaterial[] productSizesIdSizeMaterialsGet($id, $filter)

Queries sizeMaterials of ProductSize.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->productSizesIdSizeMaterialsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdSizeMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial[]**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdSizeMaterialsPost**
> \Swagger\Client\Model\ProductSizeMaterial productSizesIdSizeMaterialsPost($id, $data)

Creates a new instance in sizeMaterials of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$data = new \Swagger\Client\Model\ProductSizeMaterial(); // \Swagger\Client\Model\ProductSizeMaterial | 

try {
    $result = $api_instance->productSizesIdSizeMaterialsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdSizeMaterialsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **data** | [**\Swagger\Client\Model\ProductSizeMaterial**](../Model/\Swagger\Client\Model\ProductSizeMaterial.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductSizeMaterial**](../Model/ProductSizeMaterial.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesIdTypeGet**
> \Swagger\Client\Model\ProductType productSizesIdTypeGet($id, $refresh)

Fetches belongsTo relation type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$id = "id_example"; // string | ProductSize id
$refresh = true; // bool | 

try {
    $result = $api_instance->productSizesIdTypeGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesIdTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProductSize id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductType**](../Model/ProductType.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSizesPost**
> \Swagger\Client\Model\ProductSize productSizesPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ProductSizeApi();
$data = new \Swagger\Client\Model\ProductSize(); // \Swagger\Client\Model\ProductSize | Model instance data

try {
    $result = $api_instance->productSizesPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSizeApi->productSizesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ProductSize**](../Model/\Swagger\Client\Model\ProductSize.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ProductSize**](../Model/ProductSize.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

