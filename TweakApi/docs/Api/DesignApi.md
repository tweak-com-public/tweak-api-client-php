# Tweak\Api\DesignApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**designCount**](DesignApi.md#designCount) | **GET** /Designs/count | Count instances of the model matched by where from the data source.
[**designCreate**](DesignApi.md#designCreate) | **POST** /Designs | Create a new instance of the model and persist it into the data source.
[**designCreateChangeStreamGetDesignsChangeStream**](DesignApi.md#designCreateChangeStreamGetDesignsChangeStream) | **GET** /Designs/change-stream | Create a change stream.
[**designCreateChangeStreamPostDesignsChangeStream**](DesignApi.md#designCreateChangeStreamPostDesignsChangeStream) | **POST** /Designs/change-stream | Create a change stream.
[**designDeleteById**](DesignApi.md#designDeleteById) | **DELETE** /Designs/{id} | Delete a model instance by {{id}} from the data source.
[**designExistsGetDesignsidExists**](DesignApi.md#designExistsGetDesignsidExists) | **GET** /Designs/{id}/exists | Check whether a model instance exists in the data source.
[**designExistsHeadDesignsid**](DesignApi.md#designExistsHeadDesignsid) | **HEAD** /Designs/{id} | Check whether a model instance exists in the data source.
[**designFind**](DesignApi.md#designFind) | **GET** /Designs | Find all instances of the model matched by filter from the data source.
[**designFindById**](DesignApi.md#designFindById) | **GET** /Designs/{id} | Find a model instance by {{id}} from the data source.
[**designFindOne**](DesignApi.md#designFindOne) | **GET** /Designs/findOne | Find first instance of the model matched by filter from the data source.
[**designPrototypeCountCategories**](DesignApi.md#designPrototypeCountCategories) | **GET** /Designs/{id}/categories/count | Counts categories of Design.
[**designPrototypeCountTags**](DesignApi.md#designPrototypeCountTags) | **GET** /Designs/{id}/tags/count | Counts tags of Design.
[**designPrototypeCreateCategories**](DesignApi.md#designPrototypeCreateCategories) | **POST** /Designs/{id}/categories | Creates a new instance in categories of this model.
[**designPrototypeCreateTags**](DesignApi.md#designPrototypeCreateTags) | **POST** /Designs/{id}/tags | Creates a new instance in tags of this model.
[**designPrototypeDeleteCategories**](DesignApi.md#designPrototypeDeleteCategories) | **DELETE** /Designs/{id}/categories | Deletes all categories of this model.
[**designPrototypeDeleteTags**](DesignApi.md#designPrototypeDeleteTags) | **DELETE** /Designs/{id}/tags | Deletes all tags of this model.
[**designPrototypeDestroyByIdCategories**](DesignApi.md#designPrototypeDestroyByIdCategories) | **DELETE** /Designs/{id}/categories/{fk} | Delete a related item by id for categories.
[**designPrototypeDestroyByIdTags**](DesignApi.md#designPrototypeDestroyByIdTags) | **DELETE** /Designs/{id}/tags/{fk} | Delete a related item by id for tags.
[**designPrototypeFindByIdCategories**](DesignApi.md#designPrototypeFindByIdCategories) | **GET** /Designs/{id}/categories/{fk} | Find a related item by id for categories.
[**designPrototypeFindByIdTags**](DesignApi.md#designPrototypeFindByIdTags) | **GET** /Designs/{id}/tags/{fk} | Find a related item by id for tags.
[**designPrototypeGetCategories**](DesignApi.md#designPrototypeGetCategories) | **GET** /Designs/{id}/categories | Queries categories of Design.
[**designPrototypeGetCustomer**](DesignApi.md#designPrototypeGetCustomer) | **GET** /Designs/{id}/customer | Fetches belongsTo relation customer.
[**designPrototypeGetTags**](DesignApi.md#designPrototypeGetTags) | **GET** /Designs/{id}/tags | Queries tags of Design.
[**designPrototypeUpdateAttributesPatchDesignsid**](DesignApi.md#designPrototypeUpdateAttributesPatchDesignsid) | **PATCH** /Designs/{id} | Patch attributes for a model instance and persist it into the data source.
[**designPrototypeUpdateAttributesPutDesignsid**](DesignApi.md#designPrototypeUpdateAttributesPutDesignsid) | **PUT** /Designs/{id} | Patch attributes for a model instance and persist it into the data source.
[**designPrototypeUpdateByIdCategories**](DesignApi.md#designPrototypeUpdateByIdCategories) | **PUT** /Designs/{id}/categories/{fk} | Update a related item by id for categories.
[**designPrototypeUpdateByIdTags**](DesignApi.md#designPrototypeUpdateByIdTags) | **PUT** /Designs/{id}/tags/{fk} | Update a related item by id for tags.
[**designReplaceById**](DesignApi.md#designReplaceById) | **POST** /Designs/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**designReplaceOrCreate**](DesignApi.md#designReplaceOrCreate) | **POST** /Designs/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**designUpdateAll**](DesignApi.md#designUpdateAll) | **POST** /Designs/update | Update instances of the model matched by {{where}} from the data source.
[**designUpsertPatchDesigns**](DesignApi.md#designUpsertPatchDesigns) | **PATCH** /Designs | Patch an existing model instance or insert a new one into the data source.
[**designUpsertPutDesigns**](DesignApi.md#designUpsertPutDesigns) | **PUT** /Designs | Patch an existing model instance or insert a new one into the data source.
[**designUpsertWithWhere**](DesignApi.md#designUpsertWithWhere) | **POST** /Designs/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **designCount**
> \Swagger\Client\Model\InlineResponse200 designCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->designCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designCount: ', $e->getMessage(), PHP_EOL;
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

# **designCreate**
> \Swagger\Client\Model\Design designCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | Model instance data

try {
    $result = $api_instance->designCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCreateChangeStreamGetDesignsChangeStream**
> \SplFileObject designCreateChangeStreamGetDesignsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->designCreateChangeStreamGetDesignsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designCreateChangeStreamGetDesignsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **designCreateChangeStreamPostDesignsChangeStream**
> \SplFileObject designCreateChangeStreamPostDesignsChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->designCreateChangeStreamPostDesignsChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designCreateChangeStreamPostDesignsChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **designDeleteById**
> object designDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **designExistsGetDesignsidExists**
> \Swagger\Client\Model\InlineResponse2002 designExistsGetDesignsidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designExistsGetDesignsidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designExistsGetDesignsidExists: ', $e->getMessage(), PHP_EOL;
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

# **designExistsHeadDesignsid**
> \Swagger\Client\Model\InlineResponse2002 designExistsHeadDesignsid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designExistsHeadDesignsid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designExistsHeadDesignsid: ', $e->getMessage(), PHP_EOL;
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

# **designFind**
> \Swagger\Client\Model\Design[] designFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->designFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designFindById**
> \Swagger\Client\Model\Design designFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include

try {
    $result = $api_instance->designFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designFindOne**
> \Swagger\Client\Model\Design designFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->designFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeCountCategories**
> \Swagger\Client\Model\InlineResponse200 designPrototypeCountCategories($id, $where)

Counts categories of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->designPrototypeCountCategories($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeCountCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeCountTags**
> \Swagger\Client\Model\InlineResponse200 designPrototypeCountTags($id, $where)

Counts tags of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->designPrototypeCountTags($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeCountTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeCreateCategories**
> \Swagger\Client\Model\Category designPrototypeCreateCategories($id, $data)

Creates a new instance in categories of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$data = new \Swagger\Client\Model\Category(); // \Swagger\Client\Model\Category | 

try {
    $result = $api_instance->designPrototypeCreateCategories($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeCreateCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **data** | [**\Swagger\Client\Model\Category**](../Model/\Swagger\Client\Model\Category.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeCreateTags**
> \Swagger\Client\Model\Tag designPrototypeCreateTags($id, $data)

Creates a new instance in tags of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$data = new \Swagger\Client\Model\Tag(); // \Swagger\Client\Model\Tag | 

try {
    $result = $api_instance->designPrototypeCreateTags($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeCreateTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **data** | [**\Swagger\Client\Model\Tag**](../Model/\Swagger\Client\Model\Tag.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeDeleteCategories**
> designPrototypeDeleteCategories($id)

Deletes all categories of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id

try {
    $api_instance->designPrototypeDeleteCategories($id);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeDeleteCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeDeleteTags**
> designPrototypeDeleteTags($id)

Deletes all tags of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id

try {
    $api_instance->designPrototypeDeleteTags($id);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeDeleteTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeDestroyByIdCategories**
> designPrototypeDestroyByIdCategories($id, $fk)

Delete a related item by id for categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for categories

try {
    $api_instance->designPrototypeDestroyByIdCategories($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeDestroyByIdCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for categories |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeDestroyByIdTags**
> designPrototypeDestroyByIdTags($id, $fk)

Delete a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for tags

try {
    $api_instance->designPrototypeDestroyByIdTags($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeDestroyByIdTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for tags |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeFindByIdCategories**
> \Swagger\Client\Model\Category designPrototypeFindByIdCategories($id, $fk)

Find a related item by id for categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for categories

try {
    $result = $api_instance->designPrototypeFindByIdCategories($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeFindByIdCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for categories |

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeFindByIdTags**
> \Swagger\Client\Model\Tag designPrototypeFindByIdTags($id, $fk)

Find a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for tags

try {
    $result = $api_instance->designPrototypeFindByIdTags($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeFindByIdTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for tags |

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeGetCategories**
> \Swagger\Client\Model\Category[] designPrototypeGetCategories($id, $filter)

Queries categories of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->designPrototypeGetCategories($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeGetCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Category[]**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeGetCustomer**
> \Swagger\Client\Model\Customer designPrototypeGetCustomer($id, $refresh)

Fetches belongsTo relation customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$refresh = true; // bool | 

try {
    $result = $api_instance->designPrototypeGetCustomer($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeGetCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeGetTags**
> \Swagger\Client\Model\Tag[] designPrototypeGetTags($id, $filter)

Queries tags of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->designPrototypeGetTags($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeGetTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Tag[]**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeUpdateAttributesPatchDesignsid**
> \Swagger\Client\Model\Design designPrototypeUpdateAttributesPatchDesignsid($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | An object of model property name/value pairs

try {
    $result = $api_instance->designPrototypeUpdateAttributesPatchDesignsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeUpdateAttributesPatchDesignsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeUpdateAttributesPutDesignsid**
> \Swagger\Client\Model\Design designPrototypeUpdateAttributesPutDesignsid($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | An object of model property name/value pairs

try {
    $result = $api_instance->designPrototypeUpdateAttributesPutDesignsid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeUpdateAttributesPutDesignsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeUpdateByIdCategories**
> \Swagger\Client\Model\Category designPrototypeUpdateByIdCategories($id, $fk, $data)

Update a related item by id for categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for categories
$data = new \Swagger\Client\Model\Category(); // \Swagger\Client\Model\Category | 

try {
    $result = $api_instance->designPrototypeUpdateByIdCategories($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeUpdateByIdCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for categories |
 **data** | [**\Swagger\Client\Model\Category**](../Model/\Swagger\Client\Model\Category.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPrototypeUpdateByIdTags**
> \Swagger\Client\Model\Tag designPrototypeUpdateByIdTags($id, $fk, $data)

Update a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for tags
$data = new \Swagger\Client\Model\Tag(); // \Swagger\Client\Model\Tag | 

try {
    $result = $api_instance->designPrototypeUpdateByIdTags($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designPrototypeUpdateByIdTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for tags |
 **data** | [**\Swagger\Client\Model\Tag**](../Model/\Swagger\Client\Model\Tag.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designReplaceById**
> \Swagger\Client\Model\Design designReplaceById($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | Model instance data

try {
    $result = $api_instance->designReplaceById($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designReplaceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designReplaceOrCreate**
> \Swagger\Client\Model\Design designReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | Model instance data

try {
    $result = $api_instance->designReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designUpdateAll**
> \Swagger\Client\Model\InlineResponse2001 designUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | An object of model property name/value pairs

try {
    $result = $api_instance->designUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designUpsertPatchDesigns**
> \Swagger\Client\Model\Design designUpsertPatchDesigns($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | Model instance data

try {
    $result = $api_instance->designUpsertPatchDesigns($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designUpsertPatchDesigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designUpsertPutDesigns**
> \Swagger\Client\Model\Design designUpsertPutDesigns($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | Model instance data

try {
    $result = $api_instance->designUpsertPutDesigns($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designUpsertPutDesigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designUpsertWithWhere**
> \Swagger\Client\Model\Design designUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | An object of model property name/value pairs

try {
    $result = $api_instance->designUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

