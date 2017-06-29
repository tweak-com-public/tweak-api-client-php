# Tweak\Api\ImageFolderMemberApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**imageFolderMembersChangeStreamGet**](ImageFolderMemberApi.md#imageFolderMembersChangeStreamGet) | **GET** /ImageFolderMembers/change-stream | Create a change stream.
[**imageFolderMembersChangeStreamPost**](ImageFolderMemberApi.md#imageFolderMembersChangeStreamPost) | **POST** /ImageFolderMembers/change-stream | Create a change stream.
[**imageFolderMembersCountGet**](ImageFolderMemberApi.md#imageFolderMembersCountGet) | **GET** /ImageFolderMembers/count | Count instances of the model matched by where from the data source.
[**imageFolderMembersFindOneGet**](ImageFolderMemberApi.md#imageFolderMembersFindOneGet) | **GET** /ImageFolderMembers/findOne | Find first instance of the model matched by filter from the data source.
[**imageFolderMembersGet**](ImageFolderMemberApi.md#imageFolderMembersGet) | **GET** /ImageFolderMembers | Find all instances of the model matched by filter from the data source.
[**imageFolderMembersIdDelete**](ImageFolderMemberApi.md#imageFolderMembersIdDelete) | **DELETE** /ImageFolderMembers/{id} | Delete a model instance by {{id}} from the data source.
[**imageFolderMembersIdExistsGet**](ImageFolderMemberApi.md#imageFolderMembersIdExistsGet) | **GET** /ImageFolderMembers/{id}/exists | Check whether a model instance exists in the data source.
[**imageFolderMembersIdFolderGet**](ImageFolderMemberApi.md#imageFolderMembersIdFolderGet) | **GET** /ImageFolderMembers/{id}/folder | Fetches belongsTo relation folder.
[**imageFolderMembersIdGet**](ImageFolderMemberApi.md#imageFolderMembersIdGet) | **GET** /ImageFolderMembers/{id} | Find a model instance by {{id}} from the data source.
[**imageFolderMembersIdHead**](ImageFolderMemberApi.md#imageFolderMembersIdHead) | **HEAD** /ImageFolderMembers/{id} | Check whether a model instance exists in the data source.
[**imageFolderMembersIdMemberGet**](ImageFolderMemberApi.md#imageFolderMembersIdMemberGet) | **GET** /ImageFolderMembers/{id}/member | Fetches belongsTo relation member.
[**imageFolderMembersIdPatch**](ImageFolderMemberApi.md#imageFolderMembersIdPatch) | **PATCH** /ImageFolderMembers/{id} | Patch attributes for a model instance and persist it into the data source.
[**imageFolderMembersIdPut**](ImageFolderMemberApi.md#imageFolderMembersIdPut) | **PUT** /ImageFolderMembers/{id} | Replace attributes for a model instance and persist it into the data source.
[**imageFolderMembersIdReplacePost**](ImageFolderMemberApi.md#imageFolderMembersIdReplacePost) | **POST** /ImageFolderMembers/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**imageFolderMembersPatch**](ImageFolderMemberApi.md#imageFolderMembersPatch) | **PATCH** /ImageFolderMembers | Patch an existing model instance or insert a new one into the data source.
[**imageFolderMembersPost**](ImageFolderMemberApi.md#imageFolderMembersPost) | **POST** /ImageFolderMembers | Create a new instance of the model and persist it into the data source.
[**imageFolderMembersPut**](ImageFolderMemberApi.md#imageFolderMembersPut) | **PUT** /ImageFolderMembers | Replace an existing model instance or insert a new one into the data source.
[**imageFolderMembersReplaceOrCreatePost**](ImageFolderMemberApi.md#imageFolderMembersReplaceOrCreatePost) | **POST** /ImageFolderMembers/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**imageFolderMembersUpdatePost**](ImageFolderMemberApi.md#imageFolderMembersUpdatePost) | **POST** /ImageFolderMembers/update | Update instances of the model matched by {{where}} from the data source.
[**imageFolderMembersUpsertWithWherePost**](ImageFolderMemberApi.md#imageFolderMembersUpsertWithWherePost) | **POST** /ImageFolderMembers/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **imageFolderMembersChangeStreamGet**
> \SplFileObject imageFolderMembersChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->imageFolderMembersChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **imageFolderMembersChangeStreamPost**
> \SplFileObject imageFolderMembersChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->imageFolderMembersChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **imageFolderMembersCountGet**
> \Swagger\Client\Model\InlineResponse200 imageFolderMembersCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->imageFolderMembersCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersCountGet: ', $e->getMessage(), PHP_EOL;
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

# **imageFolderMembersFindOneGet**
> \Swagger\Client\Model\ImageFolderMember imageFolderMembersFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->imageFolderMembersFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFolderMembersGet**
> \Swagger\Client\Model\ImageFolderMember[] imageFolderMembersGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->imageFolderMembersGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember[]**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFolderMembersIdDelete**
> object imageFolderMembersIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->imageFolderMembersIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **imageFolderMembersIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 imageFolderMembersIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->imageFolderMembersIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **imageFolderMembersIdFolderGet**
> \Swagger\Client\Model\ImageFolder imageFolderMembersIdFolderGet($id, $refresh)

Fetches belongsTo relation folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$id = "id_example"; // string | ImageFolderMember id
$refresh = true; // bool | 

try {
    $result = $api_instance->imageFolderMembersIdFolderGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersIdFolderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolderMember id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFolderMembersIdGet**
> \Swagger\Client\Model\ImageFolderMember imageFolderMembersIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->imageFolderMembersIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFolderMembersIdHead**
> \Swagger\Client\Model\InlineResponse2002 imageFolderMembersIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->imageFolderMembersIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersIdHead: ', $e->getMessage(), PHP_EOL;
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

# **imageFolderMembersIdMemberGet**
> \Swagger\Client\Model\TeamMember imageFolderMembersIdMemberGet($id, $refresh)

Fetches belongsTo relation member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$id = "id_example"; // string | ImageFolderMember id
$refresh = true; // bool | 

try {
    $result = $api_instance->imageFolderMembersIdMemberGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersIdMemberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolderMember id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFolderMembersIdPatch**
> \Swagger\Client\Model\ImageFolderMember imageFolderMembersIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$id = "id_example"; // string | ImageFolderMember id
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | An object of model property name/value pairs

try {
    $result = $api_instance->imageFolderMembersIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolderMember id |
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFolderMembersIdPut**
> \Swagger\Client\Model\ImageFolderMember imageFolderMembersIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | Model instance data

try {
    $result = $api_instance->imageFolderMembersIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFolderMembersIdReplacePost**
> \Swagger\Client\Model\ImageFolderMember imageFolderMembersIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | Model instance data

try {
    $result = $api_instance->imageFolderMembersIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFolderMembersPatch**
> \Swagger\Client\Model\ImageFolderMember imageFolderMembersPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | Model instance data

try {
    $result = $api_instance->imageFolderMembersPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFolderMembersPost**
> \Swagger\Client\Model\ImageFolderMember imageFolderMembersPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | Model instance data

try {
    $result = $api_instance->imageFolderMembersPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFolderMembersPut**
> \Swagger\Client\Model\ImageFolderMember imageFolderMembersPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | Model instance data

try {
    $result = $api_instance->imageFolderMembersPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFolderMembersReplaceOrCreatePost**
> \Swagger\Client\Model\ImageFolderMember imageFolderMembersReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | Model instance data

try {
    $result = $api_instance->imageFolderMembersReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFolderMembersUpdatePost**
> \Swagger\Client\Model\InlineResponse2001 imageFolderMembersUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | An object of model property name/value pairs

try {
    $result = $api_instance->imageFolderMembersUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFolderMembersUpsertWithWherePost**
> \Swagger\Client\Model\ImageFolderMember imageFolderMembersUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderMemberApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | An object of model property name/value pairs

try {
    $result = $api_instance->imageFolderMembersUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderMemberApi->imageFolderMembersUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

