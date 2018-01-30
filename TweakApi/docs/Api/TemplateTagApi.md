# Tweak\Api\TemplateTagApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**templateTagsChangeStreamGet**](TemplateTagApi.md#templateTagsChangeStreamGet) | **GET** /TemplateTags/change-stream | Create a change stream.
[**templateTagsChangeStreamPost**](TemplateTagApi.md#templateTagsChangeStreamPost) | **POST** /TemplateTags/change-stream | Create a change stream.
[**templateTagsCountGet**](TemplateTagApi.md#templateTagsCountGet) | **GET** /TemplateTags/count | Count instances of the model matched by where from the data source.
[**templateTagsFindOneGet**](TemplateTagApi.md#templateTagsFindOneGet) | **GET** /TemplateTags/findOne | Find first instance of the model matched by filter from the data source.
[**templateTagsGet**](TemplateTagApi.md#templateTagsGet) | **GET** /TemplateTags | Find all instances of the model matched by filter from the data source.
[**templateTagsIdDelete**](TemplateTagApi.md#templateTagsIdDelete) | **DELETE** /TemplateTags/{id} | Delete a model instance by {{id}} from the data source.
[**templateTagsIdExistsGet**](TemplateTagApi.md#templateTagsIdExistsGet) | **GET** /TemplateTags/{id}/exists | Check whether a model instance exists in the data source.
[**templateTagsIdGet**](TemplateTagApi.md#templateTagsIdGet) | **GET** /TemplateTags/{id} | Find a model instance by {{id}} from the data source.
[**templateTagsIdHead**](TemplateTagApi.md#templateTagsIdHead) | **HEAD** /TemplateTags/{id} | Check whether a model instance exists in the data source.
[**templateTagsIdPatch**](TemplateTagApi.md#templateTagsIdPatch) | **PATCH** /TemplateTags/{id} | Patch attributes for a model instance and persist it into the data source.
[**templateTagsIdPut**](TemplateTagApi.md#templateTagsIdPut) | **PUT** /TemplateTags/{id} | Replace attributes for a model instance and persist it into the data source.
[**templateTagsIdReplacePost**](TemplateTagApi.md#templateTagsIdReplacePost) | **POST** /TemplateTags/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**templateTagsIdTagGet**](TemplateTagApi.md#templateTagsIdTagGet) | **GET** /TemplateTags/{id}/tag | Fetches belongsTo relation tag.
[**templateTagsIdTemplateGet**](TemplateTagApi.md#templateTagsIdTemplateGet) | **GET** /TemplateTags/{id}/template | Fetches belongsTo relation template.
[**templateTagsPatch**](TemplateTagApi.md#templateTagsPatch) | **PATCH** /TemplateTags | Patch an existing model instance or insert a new one into the data source.
[**templateTagsPost**](TemplateTagApi.md#templateTagsPost) | **POST** /TemplateTags | Create a new instance of the model and persist it into the data source.
[**templateTagsPut**](TemplateTagApi.md#templateTagsPut) | **PUT** /TemplateTags | Replace an existing model instance or insert a new one into the data source.
[**templateTagsReplaceOrCreatePost**](TemplateTagApi.md#templateTagsReplaceOrCreatePost) | **POST** /TemplateTags/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**templateTagsUpdatePost**](TemplateTagApi.md#templateTagsUpdatePost) | **POST** /TemplateTags/update | Update instances of the model matched by {{where}} from the data source.
[**templateTagsUpsertWithWherePost**](TemplateTagApi.md#templateTagsUpsertWithWherePost) | **POST** /TemplateTags/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **templateTagsChangeStreamGet**
> \SplFileObject templateTagsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->templateTagsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **templateTagsChangeStreamPost**
> \SplFileObject templateTagsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->templateTagsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **templateTagsCountGet**
> \Swagger\Client\Model\InlineResponse2001 templateTagsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->templateTagsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **templateTagsFindOneGet**
> \Swagger\Client\Model\TemplateTag templateTagsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->templateTagsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TemplateTag**](../Model/TemplateTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateTagsGet**
> \Swagger\Client\Model\TemplateTag[] templateTagsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->templateTagsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TemplateTag[]**](../Model/TemplateTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateTagsIdDelete**
> object templateTagsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->templateTagsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **templateTagsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 templateTagsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->templateTagsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **templateTagsIdGet**
> \Swagger\Client\Model\TemplateTag templateTagsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->templateTagsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TemplateTag**](../Model/TemplateTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateTagsIdHead**
> \Swagger\Client\Model\InlineResponse2002 templateTagsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->templateTagsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **templateTagsIdPatch**
> \Swagger\Client\Model\TemplateTag templateTagsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$id = "id_example"; // string | TemplateTag id
$data = new \Swagger\Client\Model\TemplateTag(); // \Swagger\Client\Model\TemplateTag | An object of model property name/value pairs

try {
    $result = $api_instance->templateTagsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TemplateTag id |
 **data** | [**\Swagger\Client\Model\TemplateTag**](../Model/\Swagger\Client\Model\TemplateTag.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TemplateTag**](../Model/TemplateTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateTagsIdPut**
> \Swagger\Client\Model\TemplateTag templateTagsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TemplateTag(); // \Swagger\Client\Model\TemplateTag | Model instance data

try {
    $result = $api_instance->templateTagsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TemplateTag**](../Model/\Swagger\Client\Model\TemplateTag.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TemplateTag**](../Model/TemplateTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateTagsIdReplacePost**
> \Swagger\Client\Model\TemplateTag templateTagsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TemplateTag(); // \Swagger\Client\Model\TemplateTag | Model instance data

try {
    $result = $api_instance->templateTagsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TemplateTag**](../Model/\Swagger\Client\Model\TemplateTag.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TemplateTag**](../Model/TemplateTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateTagsIdTagGet**
> \Swagger\Client\Model\Tag templateTagsIdTagGet($id, $refresh)

Fetches belongsTo relation tag.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$id = "id_example"; // string | TemplateTag id
$refresh = true; // bool | 

try {
    $result = $api_instance->templateTagsIdTagGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsIdTagGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TemplateTag id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateTagsIdTemplateGet**
> \Swagger\Client\Model\Template templateTagsIdTemplateGet($id, $refresh)

Fetches belongsTo relation template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$id = "id_example"; // string | TemplateTag id
$refresh = true; // bool | 

try {
    $result = $api_instance->templateTagsIdTemplateGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsIdTemplateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TemplateTag id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateTagsPatch**
> \Swagger\Client\Model\TemplateTag templateTagsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$data = new \Swagger\Client\Model\TemplateTag(); // \Swagger\Client\Model\TemplateTag | Model instance data

try {
    $result = $api_instance->templateTagsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TemplateTag**](../Model/\Swagger\Client\Model\TemplateTag.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TemplateTag**](../Model/TemplateTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateTagsPost**
> \Swagger\Client\Model\TemplateTag templateTagsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$data = new \Swagger\Client\Model\TemplateTag(); // \Swagger\Client\Model\TemplateTag | Model instance data

try {
    $result = $api_instance->templateTagsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TemplateTag**](../Model/\Swagger\Client\Model\TemplateTag.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TemplateTag**](../Model/TemplateTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateTagsPut**
> \Swagger\Client\Model\TemplateTag templateTagsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$data = new \Swagger\Client\Model\TemplateTag(); // \Swagger\Client\Model\TemplateTag | Model instance data

try {
    $result = $api_instance->templateTagsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TemplateTag**](../Model/\Swagger\Client\Model\TemplateTag.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TemplateTag**](../Model/TemplateTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateTagsReplaceOrCreatePost**
> \Swagger\Client\Model\TemplateTag templateTagsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$data = new \Swagger\Client\Model\TemplateTag(); // \Swagger\Client\Model\TemplateTag | Model instance data

try {
    $result = $api_instance->templateTagsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TemplateTag**](../Model/\Swagger\Client\Model\TemplateTag.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TemplateTag**](../Model/TemplateTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateTagsUpdatePost**
> \Swagger\Client\Model\InlineResponse2003 templateTagsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\TemplateTag(); // \Swagger\Client\Model\TemplateTag | An object of model property name/value pairs

try {
    $result = $api_instance->templateTagsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\TemplateTag**](../Model/\Swagger\Client\Model\TemplateTag.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templateTagsUpsertWithWherePost**
> \Swagger\Client\Model\TemplateTag templateTagsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TemplateTagApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\TemplateTag(); // \Swagger\Client\Model\TemplateTag | An object of model property name/value pairs

try {
    $result = $api_instance->templateTagsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateTagApi->templateTagsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\TemplateTag**](../Model/\Swagger\Client\Model\TemplateTag.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TemplateTag**](../Model/TemplateTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

