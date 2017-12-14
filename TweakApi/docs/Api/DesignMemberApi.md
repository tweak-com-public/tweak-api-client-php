# Tweak\Api\DesignMemberApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**designMembersChangeStreamGet**](DesignMemberApi.md#designMembersChangeStreamGet) | **GET** /DesignMembers/change-stream | Create a change stream.
[**designMembersChangeStreamPost**](DesignMemberApi.md#designMembersChangeStreamPost) | **POST** /DesignMembers/change-stream | Create a change stream.
[**designMembersCountGet**](DesignMemberApi.md#designMembersCountGet) | **GET** /DesignMembers/count | Count instances of the model matched by where from the data source.
[**designMembersFindOneGet**](DesignMemberApi.md#designMembersFindOneGet) | **GET** /DesignMembers/findOne | Find first instance of the model matched by filter from the data source.
[**designMembersGet**](DesignMemberApi.md#designMembersGet) | **GET** /DesignMembers | Find all instances of the model matched by filter from the data source.
[**designMembersIdDelete**](DesignMemberApi.md#designMembersIdDelete) | **DELETE** /DesignMembers/{id} | Delete a model instance by {{id}} from the data source.
[**designMembersIdDesignGet**](DesignMemberApi.md#designMembersIdDesignGet) | **GET** /DesignMembers/{id}/design | Fetches belongsTo relation design.
[**designMembersIdExistsGet**](DesignMemberApi.md#designMembersIdExistsGet) | **GET** /DesignMembers/{id}/exists | Check whether a model instance exists in the data source.
[**designMembersIdGet**](DesignMemberApi.md#designMembersIdGet) | **GET** /DesignMembers/{id} | Find a model instance by {{id}} from the data source.
[**designMembersIdHead**](DesignMemberApi.md#designMembersIdHead) | **HEAD** /DesignMembers/{id} | Check whether a model instance exists in the data source.
[**designMembersIdMemberGet**](DesignMemberApi.md#designMembersIdMemberGet) | **GET** /DesignMembers/{id}/member | Fetches belongsTo relation member.
[**designMembersIdPatch**](DesignMemberApi.md#designMembersIdPatch) | **PATCH** /DesignMembers/{id} | Patch attributes for a model instance and persist it into the data source.
[**designMembersIdPut**](DesignMemberApi.md#designMembersIdPut) | **PUT** /DesignMembers/{id} | Replace attributes for a model instance and persist it into the data source.
[**designMembersIdReplacePost**](DesignMemberApi.md#designMembersIdReplacePost) | **POST** /DesignMembers/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**designMembersPatch**](DesignMemberApi.md#designMembersPatch) | **PATCH** /DesignMembers | Patch an existing model instance or insert a new one into the data source.
[**designMembersPost**](DesignMemberApi.md#designMembersPost) | **POST** /DesignMembers | Create a new instance of the model and persist it into the data source.
[**designMembersPut**](DesignMemberApi.md#designMembersPut) | **PUT** /DesignMembers | Replace an existing model instance or insert a new one into the data source.
[**designMembersReplaceOrCreatePost**](DesignMemberApi.md#designMembersReplaceOrCreatePost) | **POST** /DesignMembers/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**designMembersUpdatePost**](DesignMemberApi.md#designMembersUpdatePost) | **POST** /DesignMembers/update | Update instances of the model matched by {{where}} from the data source.
[**designMembersUpsertWithWherePost**](DesignMemberApi.md#designMembersUpsertWithWherePost) | **POST** /DesignMembers/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **designMembersChangeStreamGet**
> \SplFileObject designMembersChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->designMembersChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **designMembersChangeStreamPost**
> \SplFileObject designMembersChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->designMembersChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **designMembersCountGet**
> \Swagger\Client\Model\InlineResponse200 designMembersCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->designMembersCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersCountGet: ', $e->getMessage(), PHP_EOL;
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

# **designMembersFindOneGet**
> \Swagger\Client\Model\DesignMember designMembersFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designMembersFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designMembersGet**
> \Swagger\Client\Model\DesignMember[] designMembersGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designMembersGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember[]**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designMembersIdDelete**
> object designMembersIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designMembersIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **designMembersIdDesignGet**
> \Swagger\Client\Model\Design designMembersIdDesignGet($id, $refresh)

Fetches belongsTo relation design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$id = "id_example"; // string | DesignMember id
$refresh = true; // bool | 

try {
    $result = $api_instance->designMembersIdDesignGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersIdDesignGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignMember id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designMembersIdExistsGet**
> \Swagger\Client\Model\InlineResponse2001 designMembersIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designMembersIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **designMembersIdGet**
> \Swagger\Client\Model\DesignMember designMembersIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designMembersIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designMembersIdHead**
> \Swagger\Client\Model\InlineResponse2001 designMembersIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designMembersIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersIdHead: ', $e->getMessage(), PHP_EOL;
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

# **designMembersIdMemberGet**
> \Swagger\Client\Model\TeamMember designMembersIdMemberGet($id, $refresh)

Fetches belongsTo relation member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$id = "id_example"; // string | DesignMember id
$refresh = true; // bool | 

try {
    $result = $api_instance->designMembersIdMemberGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersIdMemberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignMember id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designMembersIdPatch**
> \Swagger\Client\Model\DesignMember designMembersIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$id = "id_example"; // string | DesignMember id
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | An object of model property name/value pairs

try {
    $result = $api_instance->designMembersIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignMember id |
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designMembersIdPut**
> \Swagger\Client\Model\DesignMember designMembersIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | Model instance data

try {
    $result = $api_instance->designMembersIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designMembersIdReplacePost**
> \Swagger\Client\Model\DesignMember designMembersIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | Model instance data

try {
    $result = $api_instance->designMembersIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designMembersPatch**
> \Swagger\Client\Model\DesignMember designMembersPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | Model instance data

try {
    $result = $api_instance->designMembersPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designMembersPost**
> \Swagger\Client\Model\DesignMember designMembersPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | Model instance data

try {
    $result = $api_instance->designMembersPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designMembersPut**
> \Swagger\Client\Model\DesignMember designMembersPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | Model instance data

try {
    $result = $api_instance->designMembersPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designMembersReplaceOrCreatePost**
> \Swagger\Client\Model\DesignMember designMembersReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | Model instance data

try {
    $result = $api_instance->designMembersReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designMembersUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 designMembersUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | An object of model property name/value pairs

try {
    $result = $api_instance->designMembersUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designMembersUpsertWithWherePost**
> \Swagger\Client\Model\DesignMember designMembersUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignMemberApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DesignMember(); // \Swagger\Client\Model\DesignMember | An object of model property name/value pairs

try {
    $result = $api_instance->designMembersUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignMemberApi->designMembersUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DesignMember**](../Model/\Swagger\Client\Model\DesignMember.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DesignMember**](../Model/DesignMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

