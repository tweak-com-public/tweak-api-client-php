# Tweak\Api\DesignTagApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**designTagsChangeStreamGet**](DesignTagApi.md#designTagsChangeStreamGet) | **GET** /DesignTags/change-stream | Create a change stream.
[**designTagsChangeStreamPost**](DesignTagApi.md#designTagsChangeStreamPost) | **POST** /DesignTags/change-stream | Create a change stream.
[**designTagsCountGet**](DesignTagApi.md#designTagsCountGet) | **GET** /DesignTags/count | Count instances of the model matched by where from the data source.
[**designTagsFindOneGet**](DesignTagApi.md#designTagsFindOneGet) | **GET** /DesignTags/findOne | Find first instance of the model matched by filter from the data source.
[**designTagsGet**](DesignTagApi.md#designTagsGet) | **GET** /DesignTags | Find all instances of the model matched by filter from the data source.
[**designTagsIdDelete**](DesignTagApi.md#designTagsIdDelete) | **DELETE** /DesignTags/{id} | Delete a model instance by {{id}} from the data source.
[**designTagsIdDesignGet**](DesignTagApi.md#designTagsIdDesignGet) | **GET** /DesignTags/{id}/design | Fetches belongsTo relation design.
[**designTagsIdExistsGet**](DesignTagApi.md#designTagsIdExistsGet) | **GET** /DesignTags/{id}/exists | Check whether a model instance exists in the data source.
[**designTagsIdGet**](DesignTagApi.md#designTagsIdGet) | **GET** /DesignTags/{id} | Find a model instance by {{id}} from the data source.
[**designTagsIdHead**](DesignTagApi.md#designTagsIdHead) | **HEAD** /DesignTags/{id} | Check whether a model instance exists in the data source.
[**designTagsIdPatch**](DesignTagApi.md#designTagsIdPatch) | **PATCH** /DesignTags/{id} | Patch attributes for a model instance and persist it into the data source.
[**designTagsIdPut**](DesignTagApi.md#designTagsIdPut) | **PUT** /DesignTags/{id} | Replace attributes for a model instance and persist it into the data source.
[**designTagsIdReplacePost**](DesignTagApi.md#designTagsIdReplacePost) | **POST** /DesignTags/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**designTagsIdTagGet**](DesignTagApi.md#designTagsIdTagGet) | **GET** /DesignTags/{id}/tag | Fetches belongsTo relation tag.
[**designTagsPatch**](DesignTagApi.md#designTagsPatch) | **PATCH** /DesignTags | Patch an existing model instance or insert a new one into the data source.
[**designTagsPost**](DesignTagApi.md#designTagsPost) | **POST** /DesignTags | Create a new instance of the model and persist it into the data source.
[**designTagsPut**](DesignTagApi.md#designTagsPut) | **PUT** /DesignTags | Replace an existing model instance or insert a new one into the data source.
[**designTagsReplaceOrCreatePost**](DesignTagApi.md#designTagsReplaceOrCreatePost) | **POST** /DesignTags/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**designTagsUpdatePost**](DesignTagApi.md#designTagsUpdatePost) | **POST** /DesignTags/update | Update instances of the model matched by {{where}} from the data source.
[**designTagsUpsertWithWherePost**](DesignTagApi.md#designTagsUpsertWithWherePost) | **POST** /DesignTags/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **designTagsChangeStreamGet**
> \SplFileObject designTagsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->designTagsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **designTagsChangeStreamPost**
> \SplFileObject designTagsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->designTagsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **designTagsCountGet**
> \Swagger\Client\Model\InlineResponse200 designTagsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->designTagsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **designTagsFindOneGet**
> \Swagger\Client\Model\DesignTag designTagsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designTagsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignTag**](../Model/DesignTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designTagsGet**
> \Swagger\Client\Model\DesignTag[] designTagsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designTagsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignTag[]**](../Model/DesignTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designTagsIdDelete**
> object designTagsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designTagsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **designTagsIdDesignGet**
> \Swagger\Client\Model\Design designTagsIdDesignGet($id, $refresh)

Fetches belongsTo relation design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$id = "id_example"; // string | DesignTag id
$refresh = true; // bool | 

try {
    $result = $api_instance->designTagsIdDesignGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsIdDesignGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignTag id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designTagsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2001 designTagsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designTagsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **designTagsIdGet**
> \Swagger\Client\Model\DesignTag designTagsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designTagsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignTag**](../Model/DesignTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designTagsIdHead**
> \Swagger\Client\Model\InlineResponse2001 designTagsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designTagsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **designTagsIdPatch**
> \Swagger\Client\Model\DesignTag designTagsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$id = "id_example"; // string | DesignTag id
$data = new \Swagger\Client\Model\DesignTag(); // \Swagger\Client\Model\DesignTag | An object of model property name/value pairs

try {
    $result = $api_instance->designTagsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignTag id |
 **data** | [**\Swagger\Client\Model\DesignTag**](../Model/\Swagger\Client\Model\DesignTag.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DesignTag**](../Model/DesignTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designTagsIdPut**
> \Swagger\Client\Model\DesignTag designTagsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DesignTag(); // \Swagger\Client\Model\DesignTag | Model instance data

try {
    $result = $api_instance->designTagsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DesignTag**](../Model/\Swagger\Client\Model\DesignTag.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignTag**](../Model/DesignTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designTagsIdReplacePost**
> \Swagger\Client\Model\DesignTag designTagsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DesignTag(); // \Swagger\Client\Model\DesignTag | Model instance data

try {
    $result = $api_instance->designTagsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DesignTag**](../Model/\Swagger\Client\Model\DesignTag.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignTag**](../Model/DesignTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designTagsIdTagGet**
> \Swagger\Client\Model\Tag designTagsIdTagGet($id, $refresh)

Fetches belongsTo relation tag.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$id = "id_example"; // string | DesignTag id
$refresh = true; // bool | 

try {
    $result = $api_instance->designTagsIdTagGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsIdTagGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignTag id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designTagsPatch**
> \Swagger\Client\Model\DesignTag designTagsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$data = new \Swagger\Client\Model\DesignTag(); // \Swagger\Client\Model\DesignTag | Model instance data

try {
    $result = $api_instance->designTagsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignTag**](../Model/\Swagger\Client\Model\DesignTag.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignTag**](../Model/DesignTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designTagsPost**
> \Swagger\Client\Model\DesignTag designTagsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$data = new \Swagger\Client\Model\DesignTag(); // \Swagger\Client\Model\DesignTag | Model instance data

try {
    $result = $api_instance->designTagsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignTag**](../Model/\Swagger\Client\Model\DesignTag.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignTag**](../Model/DesignTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designTagsPut**
> \Swagger\Client\Model\DesignTag designTagsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$data = new \Swagger\Client\Model\DesignTag(); // \Swagger\Client\Model\DesignTag | Model instance data

try {
    $result = $api_instance->designTagsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignTag**](../Model/\Swagger\Client\Model\DesignTag.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignTag**](../Model/DesignTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designTagsReplaceOrCreatePost**
> \Swagger\Client\Model\DesignTag designTagsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$data = new \Swagger\Client\Model\DesignTag(); // \Swagger\Client\Model\DesignTag | Model instance data

try {
    $result = $api_instance->designTagsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignTag**](../Model/\Swagger\Client\Model\DesignTag.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignTag**](../Model/DesignTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designTagsUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 designTagsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DesignTag(); // \Swagger\Client\Model\DesignTag | An object of model property name/value pairs

try {
    $result = $api_instance->designTagsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DesignTag**](../Model/\Swagger\Client\Model\DesignTag.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designTagsUpsertWithWherePost**
> \Swagger\Client\Model\DesignTag designTagsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignTagApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DesignTag(); // \Swagger\Client\Model\DesignTag | An object of model property name/value pairs

try {
    $result = $api_instance->designTagsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignTagApi->designTagsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DesignTag**](../Model/\Swagger\Client\Model\DesignTag.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DesignTag**](../Model/DesignTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

