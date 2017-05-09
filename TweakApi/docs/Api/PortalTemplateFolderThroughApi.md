# Tweak\Api\PortalTemplateFolderThroughApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**portalTemplateFolderThroughsChangeStreamGet**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsChangeStreamGet) | **GET** /PortalTemplateFolderThroughs/change-stream | Create a change stream.
[**portalTemplateFolderThroughsChangeStreamPost**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsChangeStreamPost) | **POST** /PortalTemplateFolderThroughs/change-stream | Create a change stream.
[**portalTemplateFolderThroughsCountGet**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsCountGet) | **GET** /PortalTemplateFolderThroughs/count | Count instances of the model matched by where from the data source.
[**portalTemplateFolderThroughsFindOneGet**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsFindOneGet) | **GET** /PortalTemplateFolderThroughs/findOne | Find first instance of the model matched by filter from the data source.
[**portalTemplateFolderThroughsGet**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsGet) | **GET** /PortalTemplateFolderThroughs | Find all instances of the model matched by filter from the data source.
[**portalTemplateFolderThroughsIdDelete**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsIdDelete) | **DELETE** /PortalTemplateFolderThroughs/{id} | Delete a model instance by {{id}} from the data source.
[**portalTemplateFolderThroughsIdExistsGet**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsIdExistsGet) | **GET** /PortalTemplateFolderThroughs/{id}/exists | Check whether a model instance exists in the data source.
[**portalTemplateFolderThroughsIdGet**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsIdGet) | **GET** /PortalTemplateFolderThroughs/{id} | Find a model instance by {{id}} from the data source.
[**portalTemplateFolderThroughsIdHead**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsIdHead) | **HEAD** /PortalTemplateFolderThroughs/{id} | Check whether a model instance exists in the data source.
[**portalTemplateFolderThroughsIdPatch**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsIdPatch) | **PATCH** /PortalTemplateFolderThroughs/{id} | Patch attributes for a model instance and persist it into the data source.
[**portalTemplateFolderThroughsIdPortalFolderGet**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsIdPortalFolderGet) | **GET** /PortalTemplateFolderThroughs/{id}/portalFolder | Fetches belongsTo relation portalFolder.
[**portalTemplateFolderThroughsIdPut**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsIdPut) | **PUT** /PortalTemplateFolderThroughs/{id} | Replace attributes for a model instance and persist it into the data source.
[**portalTemplateFolderThroughsIdReplacePost**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsIdReplacePost) | **POST** /PortalTemplateFolderThroughs/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**portalTemplateFolderThroughsIdTemplateGet**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsIdTemplateGet) | **GET** /PortalTemplateFolderThroughs/{id}/template | Fetches belongsTo relation template.
[**portalTemplateFolderThroughsPatch**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsPatch) | **PATCH** /PortalTemplateFolderThroughs | Patch an existing model instance or insert a new one into the data source.
[**portalTemplateFolderThroughsPost**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsPost) | **POST** /PortalTemplateFolderThroughs | Create a new instance of the model and persist it into the data source.
[**portalTemplateFolderThroughsPut**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsPut) | **PUT** /PortalTemplateFolderThroughs | Replace an existing model instance or insert a new one into the data source.
[**portalTemplateFolderThroughsReplaceOrCreatePost**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsReplaceOrCreatePost) | **POST** /PortalTemplateFolderThroughs/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**portalTemplateFolderThroughsUpdatePost**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsUpdatePost) | **POST** /PortalTemplateFolderThroughs/update | Update instances of the model matched by {{where}} from the data source.
[**portalTemplateFolderThroughsUpsertWithWherePost**](PortalTemplateFolderThroughApi.md#portalTemplateFolderThroughsUpsertWithWherePost) | **POST** /PortalTemplateFolderThroughs/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **portalTemplateFolderThroughsChangeStreamGet**
> \SplFileObject portalTemplateFolderThroughsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->portalTemplateFolderThroughsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplateFolderThroughsChangeStreamPost**
> \SplFileObject portalTemplateFolderThroughsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->portalTemplateFolderThroughsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplateFolderThroughsCountGet**
> \Swagger\Client\Model\InlineResponse200 portalTemplateFolderThroughsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalTemplateFolderThroughsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplateFolderThroughsFindOneGet**
> \Swagger\Client\Model\PortalTemplateFolderThrough portalTemplateFolderThroughsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalTemplateFolderThroughsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/PortalTemplateFolderThrough.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFolderThroughsGet**
> \Swagger\Client\Model\PortalTemplateFolderThrough[] portalTemplateFolderThroughsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalTemplateFolderThroughsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolderThrough[]**](../Model/PortalTemplateFolderThrough.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFolderThroughsIdDelete**
> object portalTemplateFolderThroughsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalTemplateFolderThroughsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplateFolderThroughsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 portalTemplateFolderThroughsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalTemplateFolderThroughsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplateFolderThroughsIdGet**
> \Swagger\Client\Model\PortalTemplateFolderThrough portalTemplateFolderThroughsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalTemplateFolderThroughsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/PortalTemplateFolderThrough.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFolderThroughsIdHead**
> \Swagger\Client\Model\InlineResponse2002 portalTemplateFolderThroughsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalTemplateFolderThroughsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplateFolderThroughsIdPatch**
> \Swagger\Client\Model\PortalTemplateFolderThrough portalTemplateFolderThroughsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$id = "id_example"; // string | PortalTemplateFolderThrough id
$data = new \Swagger\Client\Model\PortalTemplateFolderThrough(); // \Swagger\Client\Model\PortalTemplateFolderThrough | An object of model property name/value pairs

try {
    $result = $api_instance->portalTemplateFolderThroughsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolderThrough id |
 **data** | [**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/\Swagger\Client\Model\PortalTemplateFolderThrough.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/PortalTemplateFolderThrough.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFolderThroughsIdPortalFolderGet**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFolderThroughsIdPortalFolderGet($id, $refresh)

Fetches belongsTo relation portalFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$id = "id_example"; // string | PortalTemplateFolderThrough id
$refresh = true; // bool | 

try {
    $result = $api_instance->portalTemplateFolderThroughsIdPortalFolderGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsIdPortalFolderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolderThrough id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFolderThroughsIdPut**
> \Swagger\Client\Model\PortalTemplateFolderThrough portalTemplateFolderThroughsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\PortalTemplateFolderThrough(); // \Swagger\Client\Model\PortalTemplateFolderThrough | Model instance data

try {
    $result = $api_instance->portalTemplateFolderThroughsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/\Swagger\Client\Model\PortalTemplateFolderThrough.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/PortalTemplateFolderThrough.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFolderThroughsIdReplacePost**
> \Swagger\Client\Model\PortalTemplateFolderThrough portalTemplateFolderThroughsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\PortalTemplateFolderThrough(); // \Swagger\Client\Model\PortalTemplateFolderThrough | Model instance data

try {
    $result = $api_instance->portalTemplateFolderThroughsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/\Swagger\Client\Model\PortalTemplateFolderThrough.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/PortalTemplateFolderThrough.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFolderThroughsIdTemplateGet**
> \Swagger\Client\Model\Template portalTemplateFolderThroughsIdTemplateGet($id, $refresh)

Fetches belongsTo relation template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$id = "id_example"; // string | PortalTemplateFolderThrough id
$refresh = true; // bool | 

try {
    $result = $api_instance->portalTemplateFolderThroughsIdTemplateGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsIdTemplateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolderThrough id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFolderThroughsPatch**
> \Swagger\Client\Model\PortalTemplateFolderThrough portalTemplateFolderThroughsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$data = new \Swagger\Client\Model\PortalTemplateFolderThrough(); // \Swagger\Client\Model\PortalTemplateFolderThrough | Model instance data

try {
    $result = $api_instance->portalTemplateFolderThroughsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/\Swagger\Client\Model\PortalTemplateFolderThrough.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/PortalTemplateFolderThrough.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFolderThroughsPost**
> \Swagger\Client\Model\PortalTemplateFolderThrough portalTemplateFolderThroughsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$data = new \Swagger\Client\Model\PortalTemplateFolderThrough(); // \Swagger\Client\Model\PortalTemplateFolderThrough | Model instance data

try {
    $result = $api_instance->portalTemplateFolderThroughsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/\Swagger\Client\Model\PortalTemplateFolderThrough.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/PortalTemplateFolderThrough.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFolderThroughsPut**
> \Swagger\Client\Model\PortalTemplateFolderThrough portalTemplateFolderThroughsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$data = new \Swagger\Client\Model\PortalTemplateFolderThrough(); // \Swagger\Client\Model\PortalTemplateFolderThrough | Model instance data

try {
    $result = $api_instance->portalTemplateFolderThroughsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/\Swagger\Client\Model\PortalTemplateFolderThrough.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/PortalTemplateFolderThrough.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFolderThroughsReplaceOrCreatePost**
> \Swagger\Client\Model\PortalTemplateFolderThrough portalTemplateFolderThroughsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$data = new \Swagger\Client\Model\PortalTemplateFolderThrough(); // \Swagger\Client\Model\PortalTemplateFolderThrough | Model instance data

try {
    $result = $api_instance->portalTemplateFolderThroughsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/\Swagger\Client\Model\PortalTemplateFolderThrough.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/PortalTemplateFolderThrough.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFolderThroughsUpdatePost**
> \Swagger\Client\Model\InlineResponse2001 portalTemplateFolderThroughsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\PortalTemplateFolderThrough(); // \Swagger\Client\Model\PortalTemplateFolderThrough | An object of model property name/value pairs

try {
    $result = $api_instance->portalTemplateFolderThroughsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/\Swagger\Client\Model\PortalTemplateFolderThrough.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFolderThroughsUpsertWithWherePost**
> \Swagger\Client\Model\PortalTemplateFolderThrough portalTemplateFolderThroughsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderThroughApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\PortalTemplateFolderThrough(); // \Swagger\Client\Model\PortalTemplateFolderThrough | An object of model property name/value pairs

try {
    $result = $api_instance->portalTemplateFolderThroughsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderThroughApi->portalTemplateFolderThroughsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/\Swagger\Client\Model\PortalTemplateFolderThrough.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolderThrough**](../Model/PortalTemplateFolderThrough.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

