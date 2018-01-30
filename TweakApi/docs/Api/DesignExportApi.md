# Tweak\Api\DesignExportApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**designExportsChangeStreamGet**](DesignExportApi.md#designExportsChangeStreamGet) | **GET** /DesignExports/change-stream | Create a change stream.
[**designExportsChangeStreamPost**](DesignExportApi.md#designExportsChangeStreamPost) | **POST** /DesignExports/change-stream | Create a change stream.
[**designExportsCountGet**](DesignExportApi.md#designExportsCountGet) | **GET** /DesignExports/count | Count instances of the model matched by where from the data source.
[**designExportsFindOneGet**](DesignExportApi.md#designExportsFindOneGet) | **GET** /DesignExports/findOne | Find first instance of the model matched by filter from the data source.
[**designExportsGet**](DesignExportApi.md#designExportsGet) | **GET** /DesignExports | Find all instances of the model matched by filter from the data source.
[**designExportsIdDelete**](DesignExportApi.md#designExportsIdDelete) | **DELETE** /DesignExports/{id} | Delete a model instance by {{id}} from the data source.
[**designExportsIdDesignsGet**](DesignExportApi.md#designExportsIdDesignsGet) | **GET** /DesignExports/{id}/designs | Fetches belongsTo relation designs.
[**designExportsIdExistsGet**](DesignExportApi.md#designExportsIdExistsGet) | **GET** /DesignExports/{id}/exists | Check whether a model instance exists in the data source.
[**designExportsIdGet**](DesignExportApi.md#designExportsIdGet) | **GET** /DesignExports/{id} | Find a model instance by {{id}} from the data source.
[**designExportsIdHead**](DesignExportApi.md#designExportsIdHead) | **HEAD** /DesignExports/{id} | Check whether a model instance exists in the data source.
[**designExportsIdPatch**](DesignExportApi.md#designExportsIdPatch) | **PATCH** /DesignExports/{id} | Patch attributes for a model instance and persist it into the data source.
[**designExportsIdPut**](DesignExportApi.md#designExportsIdPut) | **PUT** /DesignExports/{id} | Replace attributes for a model instance and persist it into the data source.
[**designExportsIdReplacePost**](DesignExportApi.md#designExportsIdReplacePost) | **POST** /DesignExports/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**designExportsIdRequesterGet**](DesignExportApi.md#designExportsIdRequesterGet) | **GET** /DesignExports/{id}/requester | Fetches belongsTo relation requester.
[**designExportsPatch**](DesignExportApi.md#designExportsPatch) | **PATCH** /DesignExports | Patch an existing model instance or insert a new one into the data source.
[**designExportsPost**](DesignExportApi.md#designExportsPost) | **POST** /DesignExports | Create a new instance of the model and persist it into the data source.
[**designExportsPut**](DesignExportApi.md#designExportsPut) | **PUT** /DesignExports | Replace an existing model instance or insert a new one into the data source.
[**designExportsReplaceOrCreatePost**](DesignExportApi.md#designExportsReplaceOrCreatePost) | **POST** /DesignExports/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**designExportsUpdatePost**](DesignExportApi.md#designExportsUpdatePost) | **POST** /DesignExports/update | Update instances of the model matched by {{where}} from the data source.
[**designExportsUpsertWithWherePost**](DesignExportApi.md#designExportsUpsertWithWherePost) | **POST** /DesignExports/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **designExportsChangeStreamGet**
> \SplFileObject designExportsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->designExportsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **designExportsChangeStreamPost**
> \SplFileObject designExportsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->designExportsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **designExportsCountGet**
> \Swagger\Client\Model\InlineResponse2001 designExportsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->designExportsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **designExportsFindOneGet**
> \Swagger\Client\Model\DesignExport designExportsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designExportsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designExportsGet**
> \Swagger\Client\Model\DesignExport[] designExportsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designExportsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport[]**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designExportsIdDelete**
> object designExportsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designExportsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **designExportsIdDesignsGet**
> \Swagger\Client\Model\Design designExportsIdDesignsGet($id, $refresh)

Fetches belongsTo relation designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$id = "id_example"; // string | DesignExport id
$refresh = true; // bool | 

try {
    $result = $api_instance->designExportsIdDesignsGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsIdDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignExport id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designExportsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 designExportsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designExportsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **designExportsIdGet**
> \Swagger\Client\Model\DesignExport designExportsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designExportsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designExportsIdHead**
> \Swagger\Client\Model\InlineResponse2002 designExportsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designExportsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **designExportsIdPatch**
> \Swagger\Client\Model\DesignExport designExportsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$id = "id_example"; // string | DesignExport id
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | An object of model property name/value pairs

try {
    $result = $api_instance->designExportsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignExport id |
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designExportsIdPut**
> \Swagger\Client\Model\DesignExport designExportsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | Model instance data

try {
    $result = $api_instance->designExportsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designExportsIdReplacePost**
> \Swagger\Client\Model\DesignExport designExportsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | Model instance data

try {
    $result = $api_instance->designExportsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designExportsIdRequesterGet**
> \Swagger\Client\Model\TeamMember designExportsIdRequesterGet($id, $refresh)

Fetches belongsTo relation requester.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$id = "id_example"; // string | DesignExport id
$refresh = true; // bool | 

try {
    $result = $api_instance->designExportsIdRequesterGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsIdRequesterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignExport id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designExportsPatch**
> \Swagger\Client\Model\DesignExport designExportsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | Model instance data

try {
    $result = $api_instance->designExportsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designExportsPost**
> \Swagger\Client\Model\DesignExport designExportsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | Model instance data

try {
    $result = $api_instance->designExportsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designExportsPut**
> \Swagger\Client\Model\DesignExport designExportsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | Model instance data

try {
    $result = $api_instance->designExportsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designExportsReplaceOrCreatePost**
> \Swagger\Client\Model\DesignExport designExportsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | Model instance data

try {
    $result = $api_instance->designExportsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designExportsUpdatePost**
> \Swagger\Client\Model\InlineResponse2003 designExportsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | An object of model property name/value pairs

try {
    $result = $api_instance->designExportsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designExportsUpsertWithWherePost**
> \Swagger\Client\Model\DesignExport designExportsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignExportApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | An object of model property name/value pairs

try {
    $result = $api_instance->designExportsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignExportApi->designExportsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

