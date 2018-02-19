# Tweak\Api\TemplatePermissionSetApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**templatePermissionSetsChangeStreamGet**](TemplatePermissionSetApi.md#templatePermissionSetsChangeStreamGet) | **GET** /TemplatePermissionSets/change-stream | Create a change stream.
[**templatePermissionSetsChangeStreamPost**](TemplatePermissionSetApi.md#templatePermissionSetsChangeStreamPost) | **POST** /TemplatePermissionSets/change-stream | Create a change stream.
[**templatePermissionSetsCountGet**](TemplatePermissionSetApi.md#templatePermissionSetsCountGet) | **GET** /TemplatePermissionSets/count | Count instances of the model matched by where from the data source.
[**templatePermissionSetsFindOneGet**](TemplatePermissionSetApi.md#templatePermissionSetsFindOneGet) | **GET** /TemplatePermissionSets/findOne | Find first instance of the model matched by filter from the data source.
[**templatePermissionSetsGet**](TemplatePermissionSetApi.md#templatePermissionSetsGet) | **GET** /TemplatePermissionSets | Find all instances of the model matched by filter from the data source.
[**templatePermissionSetsIdDelete**](TemplatePermissionSetApi.md#templatePermissionSetsIdDelete) | **DELETE** /TemplatePermissionSets/{id} | Delete a model instance by {{id}} from the data source.
[**templatePermissionSetsIdExistsGet**](TemplatePermissionSetApi.md#templatePermissionSetsIdExistsGet) | **GET** /TemplatePermissionSets/{id}/exists | Check whether a model instance exists in the data source.
[**templatePermissionSetsIdGet**](TemplatePermissionSetApi.md#templatePermissionSetsIdGet) | **GET** /TemplatePermissionSets/{id} | Find a model instance by {{id}} from the data source.
[**templatePermissionSetsIdHead**](TemplatePermissionSetApi.md#templatePermissionSetsIdHead) | **HEAD** /TemplatePermissionSets/{id} | Check whether a model instance exists in the data source.
[**templatePermissionSetsIdPatch**](TemplatePermissionSetApi.md#templatePermissionSetsIdPatch) | **PATCH** /TemplatePermissionSets/{id} | Patch attributes for a model instance and persist it into the data source.
[**templatePermissionSetsIdPut**](TemplatePermissionSetApi.md#templatePermissionSetsIdPut) | **PUT** /TemplatePermissionSets/{id} | Replace attributes for a model instance and persist it into the data source.
[**templatePermissionSetsIdReplacePost**](TemplatePermissionSetApi.md#templatePermissionSetsIdReplacePost) | **POST** /TemplatePermissionSets/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**templatePermissionSetsIdTemplateGet**](TemplatePermissionSetApi.md#templatePermissionSetsIdTemplateGet) | **GET** /TemplatePermissionSets/{id}/template | Fetches belongsTo relation template.
[**templatePermissionSetsPost**](TemplatePermissionSetApi.md#templatePermissionSetsPost) | **POST** /TemplatePermissionSets | Create a new instance of the model and persist it into the data source.


# **templatePermissionSetsChangeStreamGet**
> \SplFileObject templatePermissionSetsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplatePermissionSetApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->templatePermissionSetsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatePermissionSetApi->templatePermissionSetsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **templatePermissionSetsChangeStreamPost**
> \SplFileObject templatePermissionSetsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplatePermissionSetApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->templatePermissionSetsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatePermissionSetApi->templatePermissionSetsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **templatePermissionSetsCountGet**
> \Swagger\Client\Model\InlineResponse2001 templatePermissionSetsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplatePermissionSetApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->templatePermissionSetsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatePermissionSetApi->templatePermissionSetsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **templatePermissionSetsFindOneGet**
> \Swagger\Client\Model\TemplatePermissionSet templatePermissionSetsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplatePermissionSetApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->templatePermissionSetsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatePermissionSetApi->templatePermissionSetsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TemplatePermissionSet**](../Model/TemplatePermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templatePermissionSetsGet**
> \Swagger\Client\Model\TemplatePermissionSet[] templatePermissionSetsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplatePermissionSetApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->templatePermissionSetsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatePermissionSetApi->templatePermissionSetsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TemplatePermissionSet[]**](../Model/TemplatePermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templatePermissionSetsIdDelete**
> object templatePermissionSetsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplatePermissionSetApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->templatePermissionSetsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatePermissionSetApi->templatePermissionSetsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **templatePermissionSetsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 templatePermissionSetsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplatePermissionSetApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->templatePermissionSetsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatePermissionSetApi->templatePermissionSetsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **templatePermissionSetsIdGet**
> \Swagger\Client\Model\TemplatePermissionSet templatePermissionSetsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplatePermissionSetApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->templatePermissionSetsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatePermissionSetApi->templatePermissionSetsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TemplatePermissionSet**](../Model/TemplatePermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templatePermissionSetsIdHead**
> \Swagger\Client\Model\InlineResponse2002 templatePermissionSetsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplatePermissionSetApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->templatePermissionSetsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatePermissionSetApi->templatePermissionSetsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **templatePermissionSetsIdPatch**
> \Swagger\Client\Model\TemplatePermissionSet templatePermissionSetsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplatePermissionSetApi();
$id = "id_example"; // string | TemplatePermissionSet id
$data = new \Swagger\Client\Model\TemplatePermissionSet(); // \Swagger\Client\Model\TemplatePermissionSet | An object of model property name/value pairs

try {
    $result = $api_instance->templatePermissionSetsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatePermissionSetApi->templatePermissionSetsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TemplatePermissionSet id |
 **data** | [**\Swagger\Client\Model\TemplatePermissionSet**](../Model/\Swagger\Client\Model\TemplatePermissionSet.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TemplatePermissionSet**](../Model/TemplatePermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templatePermissionSetsIdPut**
> \Swagger\Client\Model\TemplatePermissionSet templatePermissionSetsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplatePermissionSetApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TemplatePermissionSet(); // \Swagger\Client\Model\TemplatePermissionSet | Model instance data

try {
    $result = $api_instance->templatePermissionSetsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatePermissionSetApi->templatePermissionSetsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TemplatePermissionSet**](../Model/\Swagger\Client\Model\TemplatePermissionSet.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TemplatePermissionSet**](../Model/TemplatePermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templatePermissionSetsIdReplacePost**
> \Swagger\Client\Model\TemplatePermissionSet templatePermissionSetsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplatePermissionSetApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TemplatePermissionSet(); // \Swagger\Client\Model\TemplatePermissionSet | Model instance data

try {
    $result = $api_instance->templatePermissionSetsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatePermissionSetApi->templatePermissionSetsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TemplatePermissionSet**](../Model/\Swagger\Client\Model\TemplatePermissionSet.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TemplatePermissionSet**](../Model/TemplatePermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templatePermissionSetsIdTemplateGet**
> \Swagger\Client\Model\Template templatePermissionSetsIdTemplateGet($id, $refresh)

Fetches belongsTo relation template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplatePermissionSetApi();
$id = "id_example"; // string | TemplatePermissionSet id
$refresh = true; // bool | 

try {
    $result = $api_instance->templatePermissionSetsIdTemplateGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatePermissionSetApi->templatePermissionSetsIdTemplateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TemplatePermissionSet id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templatePermissionSetsPost**
> \Swagger\Client\Model\TemplatePermissionSet templatePermissionSetsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplatePermissionSetApi();
$data = new \Swagger\Client\Model\TemplatePermissionSet(); // \Swagger\Client\Model\TemplatePermissionSet | Model instance data

try {
    $result = $api_instance->templatePermissionSetsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatePermissionSetApi->templatePermissionSetsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TemplatePermissionSet**](../Model/\Swagger\Client\Model\TemplatePermissionSet.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TemplatePermissionSet**](../Model/TemplatePermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

