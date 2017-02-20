# Tweak\Api\CategoryApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**categoryCount**](CategoryApi.md#categoryCount) | **GET** /Categories/count | Count instances of the model matched by where from the data source.
[**categoryCreate**](CategoryApi.md#categoryCreate) | **POST** /Categories | Create a new instance of the model and persist it into the data source.
[**categoryCreateChangeStreamGetCategoriesChangeStream**](CategoryApi.md#categoryCreateChangeStreamGetCategoriesChangeStream) | **GET** /Categories/change-stream | Create a change stream.
[**categoryCreateChangeStreamPostCategoriesChangeStream**](CategoryApi.md#categoryCreateChangeStreamPostCategoriesChangeStream) | **POST** /Categories/change-stream | Create a change stream.
[**categoryDeleteById**](CategoryApi.md#categoryDeleteById) | **DELETE** /Categories/{id} | Delete a model instance by {{id}} from the data source.
[**categoryExistsGetCategoriesidExists**](CategoryApi.md#categoryExistsGetCategoriesidExists) | **GET** /Categories/{id}/exists | Check whether a model instance exists in the data source.
[**categoryExistsHeadCategoriesid**](CategoryApi.md#categoryExistsHeadCategoriesid) | **HEAD** /Categories/{id} | Check whether a model instance exists in the data source.
[**categoryFind**](CategoryApi.md#categoryFind) | **GET** /Categories | Find all instances of the model matched by filter from the data source.
[**categoryFindById**](CategoryApi.md#categoryFindById) | **GET** /Categories/{id} | Find a model instance by {{id}} from the data source.
[**categoryFindOne**](CategoryApi.md#categoryFindOne) | **GET** /Categories/findOne | Find first instance of the model matched by filter from the data source.
[**categoryPrototypeCountChildren**](CategoryApi.md#categoryPrototypeCountChildren) | **GET** /Categories/{id}/children/count | Counts children of Category.
[**categoryPrototypeCreateChildren**](CategoryApi.md#categoryPrototypeCreateChildren) | **POST** /Categories/{id}/children | Creates a new instance in children of this model.
[**categoryPrototypeDeleteChildren**](CategoryApi.md#categoryPrototypeDeleteChildren) | **DELETE** /Categories/{id}/children | Deletes all children of this model.
[**categoryPrototypeDestroyByIdChildren**](CategoryApi.md#categoryPrototypeDestroyByIdChildren) | **DELETE** /Categories/{id}/children/{fk} | Delete a related item by id for children.
[**categoryPrototypeFindByIdChildren**](CategoryApi.md#categoryPrototypeFindByIdChildren) | **GET** /Categories/{id}/children/{fk} | Find a related item by id for children.
[**categoryPrototypeGetChildren**](CategoryApi.md#categoryPrototypeGetChildren) | **GET** /Categories/{id}/children | Queries children of Category.
[**categoryPrototypeGetParent**](CategoryApi.md#categoryPrototypeGetParent) | **GET** /Categories/{id}/parent | Fetches belongsTo relation parent.
[**categoryPrototypeUpdateAttributesPatchCategoriesid**](CategoryApi.md#categoryPrototypeUpdateAttributesPatchCategoriesid) | **PATCH** /Categories/{id} | Patch attributes for a model instance and persist it into the data source.
[**categoryPrototypeUpdateAttributesPutCategoriesid**](CategoryApi.md#categoryPrototypeUpdateAttributesPutCategoriesid) | **PUT** /Categories/{id} | Patch attributes for a model instance and persist it into the data source.
[**categoryPrototypeUpdateByIdChildren**](CategoryApi.md#categoryPrototypeUpdateByIdChildren) | **PUT** /Categories/{id}/children/{fk} | Update a related item by id for children.
[**categoryReplaceById**](CategoryApi.md#categoryReplaceById) | **POST** /Categories/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**categoryReplaceOrCreate**](CategoryApi.md#categoryReplaceOrCreate) | **POST** /Categories/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**categoryUpdateAll**](CategoryApi.md#categoryUpdateAll) | **POST** /Categories/update | Update instances of the model matched by {{where}} from the data source.
[**categoryUpsertPatchCategories**](CategoryApi.md#categoryUpsertPatchCategories) | **PATCH** /Categories | Patch an existing model instance or insert a new one into the data source.
[**categoryUpsertPutCategories**](CategoryApi.md#categoryUpsertPutCategories) | **PUT** /Categories | Patch an existing model instance or insert a new one into the data source.
[**categoryUpsertWithWhere**](CategoryApi.md#categoryUpsertWithWhere) | **POST** /Categories/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **categoryCount**
> \Swagger\Client\Model\InlineResponse200 categoryCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->categoryCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryCount: ', $e->getMessage(), PHP_EOL;
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

# **categoryCreate**
> \Swagger\Client\Model\Category categoryCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$data = new \Swagger\Client\Model\Category(); // \Swagger\Client\Model\Category | Model instance data

try {
    $result = $api_instance->categoryCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Category**](../Model/\Swagger\Client\Model\Category.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryCreateChangeStreamGetCategoriesChangeStream**
> \SplFileObject categoryCreateChangeStreamGetCategoriesChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->categoryCreateChangeStreamGetCategoriesChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryCreateChangeStreamGetCategoriesChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **categoryCreateChangeStreamPostCategoriesChangeStream**
> \SplFileObject categoryCreateChangeStreamPostCategoriesChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->categoryCreateChangeStreamPostCategoriesChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryCreateChangeStreamPostCategoriesChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **categoryDeleteById**
> object categoryDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->categoryDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **categoryExistsGetCategoriesidExists**
> \Swagger\Client\Model\InlineResponse2002 categoryExistsGetCategoriesidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->categoryExistsGetCategoriesidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryExistsGetCategoriesidExists: ', $e->getMessage(), PHP_EOL;
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

# **categoryExistsHeadCategoriesid**
> \Swagger\Client\Model\InlineResponse2002 categoryExistsHeadCategoriesid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->categoryExistsHeadCategoriesid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryExistsHeadCategoriesid: ', $e->getMessage(), PHP_EOL;
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

# **categoryFind**
> \Swagger\Client\Model\Category[] categoryFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->categoryFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Swagger\Client\Model\Category[]**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryFindById**
> \Swagger\Client\Model\Category categoryFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include

try {
    $result = $api_instance->categoryFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryFindOne**
> \Swagger\Client\Model\Category categoryFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->categoryFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryPrototypeCountChildren**
> \Swagger\Client\Model\InlineResponse200 categoryPrototypeCountChildren($id, $where)

Counts children of Category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Category id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->categoryPrototypeCountChildren($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryPrototypeCountChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Category id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryPrototypeCreateChildren**
> \Swagger\Client\Model\Category categoryPrototypeCreateChildren($id, $data)

Creates a new instance in children of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Category id
$data = new \Swagger\Client\Model\Category(); // \Swagger\Client\Model\Category | 

try {
    $result = $api_instance->categoryPrototypeCreateChildren($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryPrototypeCreateChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Category id |
 **data** | [**\Swagger\Client\Model\Category**](../Model/\Swagger\Client\Model\Category.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryPrototypeDeleteChildren**
> categoryPrototypeDeleteChildren($id)

Deletes all children of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Category id

try {
    $api_instance->categoryPrototypeDeleteChildren($id);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryPrototypeDeleteChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Category id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryPrototypeDestroyByIdChildren**
> categoryPrototypeDestroyByIdChildren($id, $fk)

Delete a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Category id
$fk = "fk_example"; // string | Foreign key for children

try {
    $api_instance->categoryPrototypeDestroyByIdChildren($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryPrototypeDestroyByIdChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Category id |
 **fk** | **string**| Foreign key for children |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryPrototypeFindByIdChildren**
> \Swagger\Client\Model\Category categoryPrototypeFindByIdChildren($id, $fk)

Find a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Category id
$fk = "fk_example"; // string | Foreign key for children

try {
    $result = $api_instance->categoryPrototypeFindByIdChildren($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryPrototypeFindByIdChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Category id |
 **fk** | **string**| Foreign key for children |

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryPrototypeGetChildren**
> \Swagger\Client\Model\Category[] categoryPrototypeGetChildren($id, $filter)

Queries children of Category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Category id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->categoryPrototypeGetChildren($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryPrototypeGetChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Category id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Category[]**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryPrototypeGetParent**
> \Swagger\Client\Model\Category categoryPrototypeGetParent($id, $refresh)

Fetches belongsTo relation parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Category id
$refresh = true; // bool | 

try {
    $result = $api_instance->categoryPrototypeGetParent($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryPrototypeGetParent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Category id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryPrototypeUpdateAttributesPatchCategoriesid**
> \Swagger\Client\Model\Category categoryPrototypeUpdateAttributesPatchCategoriesid($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Category id
$data = new \Swagger\Client\Model\Category(); // \Swagger\Client\Model\Category | An object of model property name/value pairs

try {
    $result = $api_instance->categoryPrototypeUpdateAttributesPatchCategoriesid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryPrototypeUpdateAttributesPatchCategoriesid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Category id |
 **data** | [**\Swagger\Client\Model\Category**](../Model/\Swagger\Client\Model\Category.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryPrototypeUpdateAttributesPutCategoriesid**
> \Swagger\Client\Model\Category categoryPrototypeUpdateAttributesPutCategoriesid($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Category id
$data = new \Swagger\Client\Model\Category(); // \Swagger\Client\Model\Category | An object of model property name/value pairs

try {
    $result = $api_instance->categoryPrototypeUpdateAttributesPutCategoriesid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryPrototypeUpdateAttributesPutCategoriesid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Category id |
 **data** | [**\Swagger\Client\Model\Category**](../Model/\Swagger\Client\Model\Category.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryPrototypeUpdateByIdChildren**
> \Swagger\Client\Model\Category categoryPrototypeUpdateByIdChildren($id, $fk, $data)

Update a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Category id
$fk = "fk_example"; // string | Foreign key for children
$data = new \Swagger\Client\Model\Category(); // \Swagger\Client\Model\Category | 

try {
    $result = $api_instance->categoryPrototypeUpdateByIdChildren($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryPrototypeUpdateByIdChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Category id |
 **fk** | **string**| Foreign key for children |
 **data** | [**\Swagger\Client\Model\Category**](../Model/\Swagger\Client\Model\Category.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryReplaceById**
> \Swagger\Client\Model\Category categoryReplaceById($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\Category(); // \Swagger\Client\Model\Category | Model instance data

try {
    $result = $api_instance->categoryReplaceById($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryReplaceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Category**](../Model/\Swagger\Client\Model\Category.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryReplaceOrCreate**
> \Swagger\Client\Model\Category categoryReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$data = new \Swagger\Client\Model\Category(); // \Swagger\Client\Model\Category | Model instance data

try {
    $result = $api_instance->categoryReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Category**](../Model/\Swagger\Client\Model\Category.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryUpdateAll**
> \Swagger\Client\Model\InlineResponse2001 categoryUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\Category(); // \Swagger\Client\Model\Category | An object of model property name/value pairs

try {
    $result = $api_instance->categoryUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\Category**](../Model/\Swagger\Client\Model\Category.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryUpsertPatchCategories**
> \Swagger\Client\Model\Category categoryUpsertPatchCategories($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$data = new \Swagger\Client\Model\Category(); // \Swagger\Client\Model\Category | Model instance data

try {
    $result = $api_instance->categoryUpsertPatchCategories($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryUpsertPatchCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Category**](../Model/\Swagger\Client\Model\Category.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryUpsertPutCategories**
> \Swagger\Client\Model\Category categoryUpsertPutCategories($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$data = new \Swagger\Client\Model\Category(); // \Swagger\Client\Model\Category | Model instance data

try {
    $result = $api_instance->categoryUpsertPutCategories($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryUpsertPutCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Category**](../Model/\Swagger\Client\Model\Category.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryUpsertWithWhere**
> \Swagger\Client\Model\Category categoryUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CategoryApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\Category(); // \Swagger\Client\Model\Category | An object of model property name/value pairs

try {
    $result = $api_instance->categoryUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\Category**](../Model/\Swagger\Client\Model\Category.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

