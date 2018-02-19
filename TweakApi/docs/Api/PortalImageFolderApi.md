# Tweak\Api\PortalImageFolderApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**portalImageFoldersChangeStreamGet**](PortalImageFolderApi.md#portalImageFoldersChangeStreamGet) | **GET** /PortalImageFolders/change-stream | Create a change stream.
[**portalImageFoldersChangeStreamPost**](PortalImageFolderApi.md#portalImageFoldersChangeStreamPost) | **POST** /PortalImageFolders/change-stream | Create a change stream.
[**portalImageFoldersCountGet**](PortalImageFolderApi.md#portalImageFoldersCountGet) | **GET** /PortalImageFolders/count | Count instances of the model matched by where from the data source.
[**portalImageFoldersFindOneGet**](PortalImageFolderApi.md#portalImageFoldersFindOneGet) | **GET** /PortalImageFolders/findOne | Find first instance of the model matched by filter from the data source.
[**portalImageFoldersGet**](PortalImageFolderApi.md#portalImageFoldersGet) | **GET** /PortalImageFolders | Find all instances of the model matched by filter from the data source.
[**portalImageFoldersIdDelete**](PortalImageFolderApi.md#portalImageFoldersIdDelete) | **DELETE** /PortalImageFolders/{id} | Delete a model instance by {{id}} from the data source.
[**portalImageFoldersIdExistsGet**](PortalImageFolderApi.md#portalImageFoldersIdExistsGet) | **GET** /PortalImageFolders/{id}/exists | Check whether a model instance exists in the data source.
[**portalImageFoldersIdFolderGet**](PortalImageFolderApi.md#portalImageFoldersIdFolderGet) | **GET** /PortalImageFolders/{id}/folder | Fetches belongsTo relation folder.
[**portalImageFoldersIdGet**](PortalImageFolderApi.md#portalImageFoldersIdGet) | **GET** /PortalImageFolders/{id} | Find a model instance by {{id}} from the data source.
[**portalImageFoldersIdHead**](PortalImageFolderApi.md#portalImageFoldersIdHead) | **HEAD** /PortalImageFolders/{id} | Check whether a model instance exists in the data source.
[**portalImageFoldersIdPatch**](PortalImageFolderApi.md#portalImageFoldersIdPatch) | **PATCH** /PortalImageFolders/{id} | Patch attributes for a model instance and persist it into the data source.
[**portalImageFoldersIdPortalGet**](PortalImageFolderApi.md#portalImageFoldersIdPortalGet) | **GET** /PortalImageFolders/{id}/portal | Fetches belongsTo relation portal.
[**portalImageFoldersIdPut**](PortalImageFolderApi.md#portalImageFoldersIdPut) | **PUT** /PortalImageFolders/{id} | Replace attributes for a model instance and persist it into the data source.
[**portalImageFoldersIdReplacePost**](PortalImageFolderApi.md#portalImageFoldersIdReplacePost) | **POST** /PortalImageFolders/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**portalImageFoldersPost**](PortalImageFolderApi.md#portalImageFoldersPost) | **POST** /PortalImageFolders | Create a new instance of the model and persist it into the data source.


# **portalImageFoldersChangeStreamGet**
> \SplFileObject portalImageFoldersChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->portalImageFoldersChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **portalImageFoldersChangeStreamPost**
> \SplFileObject portalImageFoldersChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->portalImageFoldersChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **portalImageFoldersCountGet**
> \Swagger\Client\Model\InlineResponse2001 portalImageFoldersCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalImageFoldersCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersCountGet: ', $e->getMessage(), PHP_EOL;
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

# **portalImageFoldersFindOneGet**
> \Swagger\Client\Model\PortalImageFolder portalImageFoldersFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalImageFoldersFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalImageFolder**](../Model/PortalImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalImageFoldersGet**
> \Swagger\Client\Model\PortalImageFolder[] portalImageFoldersGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalImageFoldersGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalImageFolder[]**](../Model/PortalImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalImageFoldersIdDelete**
> object portalImageFoldersIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalImageFoldersIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **portalImageFoldersIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 portalImageFoldersIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalImageFoldersIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **portalImageFoldersIdFolderGet**
> \Swagger\Client\Model\ImageFolder portalImageFoldersIdFolderGet($id, $refresh)

Fetches belongsTo relation folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$id = "id_example"; // string | PortalImageFolder id
$refresh = true; // bool | 

try {
    $result = $api_instance->portalImageFoldersIdFolderGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersIdFolderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalImageFolder id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalImageFoldersIdGet**
> \Swagger\Client\Model\PortalImageFolder portalImageFoldersIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalImageFoldersIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalImageFolder**](../Model/PortalImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalImageFoldersIdHead**
> \Swagger\Client\Model\InlineResponse2002 portalImageFoldersIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalImageFoldersIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersIdHead: ', $e->getMessage(), PHP_EOL;
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

# **portalImageFoldersIdPatch**
> \Swagger\Client\Model\PortalImageFolder portalImageFoldersIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$id = "id_example"; // string | PortalImageFolder id
$data = new \Swagger\Client\Model\PortalImageFolder(); // \Swagger\Client\Model\PortalImageFolder | An object of model property name/value pairs

try {
    $result = $api_instance->portalImageFoldersIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalImageFolder id |
 **data** | [**\Swagger\Client\Model\PortalImageFolder**](../Model/\Swagger\Client\Model\PortalImageFolder.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\PortalImageFolder**](../Model/PortalImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalImageFoldersIdPortalGet**
> \Swagger\Client\Model\Portal portalImageFoldersIdPortalGet($id, $refresh)

Fetches belongsTo relation portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$id = "id_example"; // string | PortalImageFolder id
$refresh = true; // bool | 

try {
    $result = $api_instance->portalImageFoldersIdPortalGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersIdPortalGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalImageFolder id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalImageFoldersIdPut**
> \Swagger\Client\Model\PortalImageFolder portalImageFoldersIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\PortalImageFolder(); // \Swagger\Client\Model\PortalImageFolder | Model instance data

try {
    $result = $api_instance->portalImageFoldersIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\PortalImageFolder**](../Model/\Swagger\Client\Model\PortalImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalImageFolder**](../Model/PortalImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalImageFoldersIdReplacePost**
> \Swagger\Client\Model\PortalImageFolder portalImageFoldersIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\PortalImageFolder(); // \Swagger\Client\Model\PortalImageFolder | Model instance data

try {
    $result = $api_instance->portalImageFoldersIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\PortalImageFolder**](../Model/\Swagger\Client\Model\PortalImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalImageFolder**](../Model/PortalImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalImageFoldersPost**
> \Swagger\Client\Model\PortalImageFolder portalImageFoldersPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalImageFolderApi();
$data = new \Swagger\Client\Model\PortalImageFolder(); // \Swagger\Client\Model\PortalImageFolder | Model instance data

try {
    $result = $api_instance->portalImageFoldersPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalImageFolderApi->portalImageFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PortalImageFolder**](../Model/\Swagger\Client\Model\PortalImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalImageFolder**](../Model/PortalImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

