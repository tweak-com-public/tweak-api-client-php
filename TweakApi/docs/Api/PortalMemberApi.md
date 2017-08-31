# Tweak\Api\PortalMemberApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**portalMembersChangeStreamGet**](PortalMemberApi.md#portalMembersChangeStreamGet) | **GET** /PortalMembers/change-stream | Create a change stream.
[**portalMembersChangeStreamPost**](PortalMemberApi.md#portalMembersChangeStreamPost) | **POST** /PortalMembers/change-stream | Create a change stream.
[**portalMembersCountGet**](PortalMemberApi.md#portalMembersCountGet) | **GET** /PortalMembers/count | Count instances of the model matched by where from the data source.
[**portalMembersFindOneGet**](PortalMemberApi.md#portalMembersFindOneGet) | **GET** /PortalMembers/findOne | Find first instance of the model matched by filter from the data source.
[**portalMembersGet**](PortalMemberApi.md#portalMembersGet) | **GET** /PortalMembers | Find all instances of the model matched by filter from the data source.
[**portalMembersIdDelete**](PortalMemberApi.md#portalMembersIdDelete) | **DELETE** /PortalMembers/{id} | Delete a model instance by {{id}} from the data source.
[**portalMembersIdExistsGet**](PortalMemberApi.md#portalMembersIdExistsGet) | **GET** /PortalMembers/{id}/exists | Check whether a model instance exists in the data source.
[**portalMembersIdGet**](PortalMemberApi.md#portalMembersIdGet) | **GET** /PortalMembers/{id} | Find a model instance by {{id}} from the data source.
[**portalMembersIdHead**](PortalMemberApi.md#portalMembersIdHead) | **HEAD** /PortalMembers/{id} | Check whether a model instance exists in the data source.
[**portalMembersIdMemberGet**](PortalMemberApi.md#portalMembersIdMemberGet) | **GET** /PortalMembers/{id}/member | Fetches belongsTo relation member.
[**portalMembersIdPatch**](PortalMemberApi.md#portalMembersIdPatch) | **PATCH** /PortalMembers/{id} | Patch attributes for a model instance and persist it into the data source.
[**portalMembersIdPortalGet**](PortalMemberApi.md#portalMembersIdPortalGet) | **GET** /PortalMembers/{id}/portal | Fetches belongsTo relation portal.
[**portalMembersIdPut**](PortalMemberApi.md#portalMembersIdPut) | **PUT** /PortalMembers/{id} | Replace attributes for a model instance and persist it into the data source.
[**portalMembersIdReplacePost**](PortalMemberApi.md#portalMembersIdReplacePost) | **POST** /PortalMembers/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**portalMembersPatch**](PortalMemberApi.md#portalMembersPatch) | **PATCH** /PortalMembers | Patch an existing model instance or insert a new one into the data source.
[**portalMembersPost**](PortalMemberApi.md#portalMembersPost) | **POST** /PortalMembers | Create a new instance of the model and persist it into the data source.
[**portalMembersPut**](PortalMemberApi.md#portalMembersPut) | **PUT** /PortalMembers | Replace an existing model instance or insert a new one into the data source.
[**portalMembersReplaceOrCreatePost**](PortalMemberApi.md#portalMembersReplaceOrCreatePost) | **POST** /PortalMembers/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**portalMembersUpdatePost**](PortalMemberApi.md#portalMembersUpdatePost) | **POST** /PortalMembers/update | Update instances of the model matched by {{where}} from the data source.
[**portalMembersUpsertWithWherePost**](PortalMemberApi.md#portalMembersUpsertWithWherePost) | **POST** /PortalMembers/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **portalMembersChangeStreamGet**
> \SplFileObject portalMembersChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->portalMembersChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **portalMembersChangeStreamPost**
> \SplFileObject portalMembersChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->portalMembersChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **portalMembersCountGet**
> \Swagger\Client\Model\InlineResponse200 portalMembersCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalMembersCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersCountGet: ', $e->getMessage(), PHP_EOL;
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

# **portalMembersFindOneGet**
> \Swagger\Client\Model\PortalMember portalMembersFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalMembersFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersGet**
> \Swagger\Client\Model\PortalMember[] portalMembersGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalMembersGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember[]**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdDelete**
> object portalMembersIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalMembersIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **portalMembersIdExistsGet**
> \Swagger\Client\Model\InlineResponse2001 portalMembersIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalMembersIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **portalMembersIdGet**
> \Swagger\Client\Model\PortalMember portalMembersIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalMembersIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdHead**
> \Swagger\Client\Model\InlineResponse2001 portalMembersIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalMembersIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdHead: ', $e->getMessage(), PHP_EOL;
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

# **portalMembersIdMemberGet**
> \Swagger\Client\Model\TeamMember portalMembersIdMemberGet($id, $refresh)

Fetches belongsTo relation member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$id = "id_example"; // string | PortalMember id
$refresh = true; // bool | 

try {
    $result = $api_instance->portalMembersIdMemberGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdMemberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdPatch**
> \Swagger\Client\Model\PortalMember portalMembersIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$id = "id_example"; // string | PortalMember id
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | An object of model property name/value pairs

try {
    $result = $api_instance->portalMembersIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **data** | [**\Swagger\Client\Model\PortalMember**](../Model/\Swagger\Client\Model\PortalMember.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdPortalGet**
> \Swagger\Client\Model\Portal portalMembersIdPortalGet($id, $refresh)

Fetches belongsTo relation portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$id = "id_example"; // string | PortalMember id
$refresh = true; // bool | 

try {
    $result = $api_instance->portalMembersIdPortalGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdPortalGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdPut**
> \Swagger\Client\Model\PortalMember portalMembersIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | Model instance data

try {
    $result = $api_instance->portalMembersIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\PortalMember**](../Model/\Swagger\Client\Model\PortalMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdReplacePost**
> \Swagger\Client\Model\PortalMember portalMembersIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | Model instance data

try {
    $result = $api_instance->portalMembersIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\PortalMember**](../Model/\Swagger\Client\Model\PortalMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersPatch**
> \Swagger\Client\Model\PortalMember portalMembersPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | Model instance data

try {
    $result = $api_instance->portalMembersPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PortalMember**](../Model/\Swagger\Client\Model\PortalMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersPost**
> \Swagger\Client\Model\PortalMember portalMembersPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | Model instance data

try {
    $result = $api_instance->portalMembersPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PortalMember**](../Model/\Swagger\Client\Model\PortalMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersPut**
> \Swagger\Client\Model\PortalMember portalMembersPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | Model instance data

try {
    $result = $api_instance->portalMembersPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PortalMember**](../Model/\Swagger\Client\Model\PortalMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersReplaceOrCreatePost**
> \Swagger\Client\Model\PortalMember portalMembersReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | Model instance data

try {
    $result = $api_instance->portalMembersReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PortalMember**](../Model/\Swagger\Client\Model\PortalMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 portalMembersUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | An object of model property name/value pairs

try {
    $result = $api_instance->portalMembersUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\PortalMember**](../Model/\Swagger\Client\Model\PortalMember.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersUpsertWithWherePost**
> \Swagger\Client\Model\PortalMember portalMembersUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalMemberApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\PortalMember(); // \Swagger\Client\Model\PortalMember | An object of model property name/value pairs

try {
    $result = $api_instance->portalMembersUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\PortalMember**](../Model/\Swagger\Client\Model\PortalMember.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\PortalMember**](../Model/PortalMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

