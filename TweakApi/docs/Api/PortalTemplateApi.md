# Tweak\Api\PortalTemplateApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**portalTemplatesChangeStreamGet**](PortalTemplateApi.md#portalTemplatesChangeStreamGet) | **GET** /PortalTemplates/change-stream | Create a change stream.
[**portalTemplatesChangeStreamPost**](PortalTemplateApi.md#portalTemplatesChangeStreamPost) | **POST** /PortalTemplates/change-stream | Create a change stream.
[**portalTemplatesCountGet**](PortalTemplateApi.md#portalTemplatesCountGet) | **GET** /PortalTemplates/count | Count instances of the model matched by where from the data source.
[**portalTemplatesFindOneGet**](PortalTemplateApi.md#portalTemplatesFindOneGet) | **GET** /PortalTemplates/findOne | Find first instance of the model matched by filter from the data source.
[**portalTemplatesGet**](PortalTemplateApi.md#portalTemplatesGet) | **GET** /PortalTemplates | Find all instances of the model matched by filter from the data source.
[**portalTemplatesIdDelete**](PortalTemplateApi.md#portalTemplatesIdDelete) | **DELETE** /PortalTemplates/{id} | Delete a model instance by {{id}} from the data source.
[**portalTemplatesIdExistsGet**](PortalTemplateApi.md#portalTemplatesIdExistsGet) | **GET** /PortalTemplates/{id}/exists | Check whether a model instance exists in the data source.
[**portalTemplatesIdFolderGet**](PortalTemplateApi.md#portalTemplatesIdFolderGet) | **GET** /PortalTemplates/{id}/folder | Fetches belongsTo relation folder.
[**portalTemplatesIdGet**](PortalTemplateApi.md#portalTemplatesIdGet) | **GET** /PortalTemplates/{id} | Find a model instance by {{id}} from the data source.
[**portalTemplatesIdHead**](PortalTemplateApi.md#portalTemplatesIdHead) | **HEAD** /PortalTemplates/{id} | Check whether a model instance exists in the data source.
[**portalTemplatesIdPatch**](PortalTemplateApi.md#portalTemplatesIdPatch) | **PATCH** /PortalTemplates/{id} | Patch attributes for a model instance and persist it into the data source.
[**portalTemplatesIdPortalGet**](PortalTemplateApi.md#portalTemplatesIdPortalGet) | **GET** /PortalTemplates/{id}/portal | Fetches belongsTo relation portal.
[**portalTemplatesIdPut**](PortalTemplateApi.md#portalTemplatesIdPut) | **PUT** /PortalTemplates/{id} | Replace attributes for a model instance and persist it into the data source.
[**portalTemplatesIdReplacePost**](PortalTemplateApi.md#portalTemplatesIdReplacePost) | **POST** /PortalTemplates/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**portalTemplatesIdTemplateGet**](PortalTemplateApi.md#portalTemplatesIdTemplateGet) | **GET** /PortalTemplates/{id}/template | Fetches belongsTo relation template.
[**portalTemplatesPost**](PortalTemplateApi.md#portalTemplatesPost) | **POST** /PortalTemplates | Create a new instance of the model and persist it into the data source.


# **portalTemplatesChangeStreamGet**
> \SplFileObject portalTemplatesChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->portalTemplatesChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplatesChangeStreamPost**
> \SplFileObject portalTemplatesChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->portalTemplatesChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplatesCountGet**
> \Swagger\Client\Model\InlineResponse2001 portalTemplatesCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalTemplatesCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesCountGet: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplatesFindOneGet**
> \Swagger\Client\Model\PortalTemplate portalTemplatesFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalTemplatesFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplatesGet**
> \Swagger\Client\Model\PortalTemplate[] portalTemplatesGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalTemplatesGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate[]**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplatesIdDelete**
> object portalTemplatesIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalTemplatesIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplatesIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 portalTemplatesIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalTemplatesIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplatesIdFolderGet**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplatesIdFolderGet($id, $refresh)

Fetches belongsTo relation folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$id = "id_example"; // string | PortalTemplate id
$refresh = true; // bool | 

try {
    $result = $api_instance->portalTemplatesIdFolderGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesIdFolderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplate id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplatesIdGet**
> \Swagger\Client\Model\PortalTemplate portalTemplatesIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalTemplatesIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplatesIdHead**
> \Swagger\Client\Model\InlineResponse2002 portalTemplatesIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalTemplatesIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesIdHead: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplatesIdPatch**
> \Swagger\Client\Model\PortalTemplate portalTemplatesIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$id = "id_example"; // string | PortalTemplate id
$data = new \Swagger\Client\Model\PortalTemplate(); // \Swagger\Client\Model\PortalTemplate | An object of model property name/value pairs

try {
    $result = $api_instance->portalTemplatesIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplate id |
 **data** | [**\Swagger\Client\Model\PortalTemplate**](../Model/\Swagger\Client\Model\PortalTemplate.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplatesIdPortalGet**
> \Swagger\Client\Model\Portal portalTemplatesIdPortalGet($id, $refresh)

Fetches belongsTo relation portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$id = "id_example"; // string | PortalTemplate id
$refresh = true; // bool | 

try {
    $result = $api_instance->portalTemplatesIdPortalGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesIdPortalGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplate id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplatesIdPut**
> \Swagger\Client\Model\PortalTemplate portalTemplatesIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\PortalTemplate(); // \Swagger\Client\Model\PortalTemplate | Model instance data

try {
    $result = $api_instance->portalTemplatesIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\PortalTemplate**](../Model/\Swagger\Client\Model\PortalTemplate.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplatesIdReplacePost**
> \Swagger\Client\Model\PortalTemplate portalTemplatesIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\PortalTemplate(); // \Swagger\Client\Model\PortalTemplate | Model instance data

try {
    $result = $api_instance->portalTemplatesIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\PortalTemplate**](../Model/\Swagger\Client\Model\PortalTemplate.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplatesIdTemplateGet**
> \Swagger\Client\Model\Template portalTemplatesIdTemplateGet($id, $refresh)

Fetches belongsTo relation template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$id = "id_example"; // string | PortalTemplate id
$refresh = true; // bool | 

try {
    $result = $api_instance->portalTemplatesIdTemplateGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesIdTemplateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplate id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplatesPost**
> \Swagger\Client\Model\PortalTemplate portalTemplatesPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateApi();
$data = new \Swagger\Client\Model\PortalTemplate(); // \Swagger\Client\Model\PortalTemplate | Model instance data

try {
    $result = $api_instance->portalTemplatesPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateApi->portalTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PortalTemplate**](../Model/\Swagger\Client\Model\PortalTemplate.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

