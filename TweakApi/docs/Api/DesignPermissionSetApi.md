# Tweak\Api\DesignPermissionSetApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**designPermissionSetsChangeStreamGet**](DesignPermissionSetApi.md#designPermissionSetsChangeStreamGet) | **GET** /DesignPermissionSets/change-stream | Create a change stream.
[**designPermissionSetsChangeStreamPost**](DesignPermissionSetApi.md#designPermissionSetsChangeStreamPost) | **POST** /DesignPermissionSets/change-stream | Create a change stream.
[**designPermissionSetsCountGet**](DesignPermissionSetApi.md#designPermissionSetsCountGet) | **GET** /DesignPermissionSets/count | Count instances of the model matched by where from the data source.
[**designPermissionSetsFindOneGet**](DesignPermissionSetApi.md#designPermissionSetsFindOneGet) | **GET** /DesignPermissionSets/findOne | Find first instance of the model matched by filter from the data source.
[**designPermissionSetsGet**](DesignPermissionSetApi.md#designPermissionSetsGet) | **GET** /DesignPermissionSets | Find all instances of the model matched by filter from the data source.
[**designPermissionSetsIdDelete**](DesignPermissionSetApi.md#designPermissionSetsIdDelete) | **DELETE** /DesignPermissionSets/{id} | Delete a model instance by {{id}} from the data source.
[**designPermissionSetsIdDesignGet**](DesignPermissionSetApi.md#designPermissionSetsIdDesignGet) | **GET** /DesignPermissionSets/{id}/design | Fetches belongsTo relation design.
[**designPermissionSetsIdExistsGet**](DesignPermissionSetApi.md#designPermissionSetsIdExistsGet) | **GET** /DesignPermissionSets/{id}/exists | Check whether a model instance exists in the data source.
[**designPermissionSetsIdGet**](DesignPermissionSetApi.md#designPermissionSetsIdGet) | **GET** /DesignPermissionSets/{id} | Find a model instance by {{id}} from the data source.
[**designPermissionSetsIdHead**](DesignPermissionSetApi.md#designPermissionSetsIdHead) | **HEAD** /DesignPermissionSets/{id} | Check whether a model instance exists in the data source.
[**designPermissionSetsIdPatch**](DesignPermissionSetApi.md#designPermissionSetsIdPatch) | **PATCH** /DesignPermissionSets/{id} | Patch attributes for a model instance and persist it into the data source.
[**designPermissionSetsIdPut**](DesignPermissionSetApi.md#designPermissionSetsIdPut) | **PUT** /DesignPermissionSets/{id} | Replace attributes for a model instance and persist it into the data source.
[**designPermissionSetsIdReplacePost**](DesignPermissionSetApi.md#designPermissionSetsIdReplacePost) | **POST** /DesignPermissionSets/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**designPermissionSetsPatch**](DesignPermissionSetApi.md#designPermissionSetsPatch) | **PATCH** /DesignPermissionSets | Patch an existing model instance or insert a new one into the data source.
[**designPermissionSetsPost**](DesignPermissionSetApi.md#designPermissionSetsPost) | **POST** /DesignPermissionSets | Create a new instance of the model and persist it into the data source.
[**designPermissionSetsPut**](DesignPermissionSetApi.md#designPermissionSetsPut) | **PUT** /DesignPermissionSets | Replace an existing model instance or insert a new one into the data source.
[**designPermissionSetsReplaceOrCreatePost**](DesignPermissionSetApi.md#designPermissionSetsReplaceOrCreatePost) | **POST** /DesignPermissionSets/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**designPermissionSetsUpdatePost**](DesignPermissionSetApi.md#designPermissionSetsUpdatePost) | **POST** /DesignPermissionSets/update | Update instances of the model matched by {{where}} from the data source.
[**designPermissionSetsUpsertWithWherePost**](DesignPermissionSetApi.md#designPermissionSetsUpsertWithWherePost) | **POST** /DesignPermissionSets/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **designPermissionSetsChangeStreamGet**
> \SplFileObject designPermissionSetsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->designPermissionSetsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **designPermissionSetsChangeStreamPost**
> \SplFileObject designPermissionSetsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->designPermissionSetsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **designPermissionSetsCountGet**
> \Swagger\Client\Model\InlineResponse200 designPermissionSetsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->designPermissionSetsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **designPermissionSetsFindOneGet**
> \Swagger\Client\Model\DesignPermissionSet designPermissionSetsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designPermissionSetsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignPermissionSet**](../Model/DesignPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPermissionSetsGet**
> \Swagger\Client\Model\DesignPermissionSet[] designPermissionSetsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designPermissionSetsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignPermissionSet[]**](../Model/DesignPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPermissionSetsIdDelete**
> object designPermissionSetsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designPermissionSetsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **designPermissionSetsIdDesignGet**
> \Swagger\Client\Model\Design designPermissionSetsIdDesignGet($id, $refresh)

Fetches belongsTo relation design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$id = "id_example"; // string | DesignPermissionSet id
$refresh = true; // bool | 

try {
    $result = $api_instance->designPermissionSetsIdDesignGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsIdDesignGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignPermissionSet id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPermissionSetsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2001 designPermissionSetsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designPermissionSetsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **designPermissionSetsIdGet**
> \Swagger\Client\Model\DesignPermissionSet designPermissionSetsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designPermissionSetsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignPermissionSet**](../Model/DesignPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPermissionSetsIdHead**
> \Swagger\Client\Model\InlineResponse2001 designPermissionSetsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designPermissionSetsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **designPermissionSetsIdPatch**
> \Swagger\Client\Model\DesignPermissionSet designPermissionSetsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$id = "id_example"; // string | DesignPermissionSet id
$data = new \Swagger\Client\Model\DesignPermissionSet(); // \Swagger\Client\Model\DesignPermissionSet | An object of model property name/value pairs

try {
    $result = $api_instance->designPermissionSetsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignPermissionSet id |
 **data** | [**\Swagger\Client\Model\DesignPermissionSet**](../Model/\Swagger\Client\Model\DesignPermissionSet.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DesignPermissionSet**](../Model/DesignPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPermissionSetsIdPut**
> \Swagger\Client\Model\DesignPermissionSet designPermissionSetsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DesignPermissionSet(); // \Swagger\Client\Model\DesignPermissionSet | Model instance data

try {
    $result = $api_instance->designPermissionSetsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DesignPermissionSet**](../Model/\Swagger\Client\Model\DesignPermissionSet.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignPermissionSet**](../Model/DesignPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPermissionSetsIdReplacePost**
> \Swagger\Client\Model\DesignPermissionSet designPermissionSetsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DesignPermissionSet(); // \Swagger\Client\Model\DesignPermissionSet | Model instance data

try {
    $result = $api_instance->designPermissionSetsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DesignPermissionSet**](../Model/\Swagger\Client\Model\DesignPermissionSet.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignPermissionSet**](../Model/DesignPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPermissionSetsPatch**
> \Swagger\Client\Model\DesignPermissionSet designPermissionSetsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$data = new \Swagger\Client\Model\DesignPermissionSet(); // \Swagger\Client\Model\DesignPermissionSet | Model instance data

try {
    $result = $api_instance->designPermissionSetsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignPermissionSet**](../Model/\Swagger\Client\Model\DesignPermissionSet.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignPermissionSet**](../Model/DesignPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPermissionSetsPost**
> \Swagger\Client\Model\DesignPermissionSet designPermissionSetsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$data = new \Swagger\Client\Model\DesignPermissionSet(); // \Swagger\Client\Model\DesignPermissionSet | Model instance data

try {
    $result = $api_instance->designPermissionSetsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignPermissionSet**](../Model/\Swagger\Client\Model\DesignPermissionSet.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignPermissionSet**](../Model/DesignPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPermissionSetsPut**
> \Swagger\Client\Model\DesignPermissionSet designPermissionSetsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$data = new \Swagger\Client\Model\DesignPermissionSet(); // \Swagger\Client\Model\DesignPermissionSet | Model instance data

try {
    $result = $api_instance->designPermissionSetsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignPermissionSet**](../Model/\Swagger\Client\Model\DesignPermissionSet.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignPermissionSet**](../Model/DesignPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPermissionSetsReplaceOrCreatePost**
> \Swagger\Client\Model\DesignPermissionSet designPermissionSetsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$data = new \Swagger\Client\Model\DesignPermissionSet(); // \Swagger\Client\Model\DesignPermissionSet | Model instance data

try {
    $result = $api_instance->designPermissionSetsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignPermissionSet**](../Model/\Swagger\Client\Model\DesignPermissionSet.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignPermissionSet**](../Model/DesignPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPermissionSetsUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 designPermissionSetsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DesignPermissionSet(); // \Swagger\Client\Model\DesignPermissionSet | An object of model property name/value pairs

try {
    $result = $api_instance->designPermissionSetsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DesignPermissionSet**](../Model/\Swagger\Client\Model\DesignPermissionSet.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designPermissionSetsUpsertWithWherePost**
> \Swagger\Client\Model\DesignPermissionSet designPermissionSetsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignPermissionSetApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DesignPermissionSet(); // \Swagger\Client\Model\DesignPermissionSet | An object of model property name/value pairs

try {
    $result = $api_instance->designPermissionSetsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignPermissionSetApi->designPermissionSetsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DesignPermissionSet**](../Model/\Swagger\Client\Model\DesignPermissionSet.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DesignPermissionSet**](../Model/DesignPermissionSet.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

