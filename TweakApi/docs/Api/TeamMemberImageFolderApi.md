# Tweak\Api\TeamMemberImageFolderApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamMemberImageFoldersChangeStreamGet**](TeamMemberImageFolderApi.md#teamMemberImageFoldersChangeStreamGet) | **GET** /TeamMemberImageFolders/change-stream | Create a change stream.
[**teamMemberImageFoldersChangeStreamPost**](TeamMemberImageFolderApi.md#teamMemberImageFoldersChangeStreamPost) | **POST** /TeamMemberImageFolders/change-stream | Create a change stream.
[**teamMemberImageFoldersCountGet**](TeamMemberImageFolderApi.md#teamMemberImageFoldersCountGet) | **GET** /TeamMemberImageFolders/count | Count instances of the model matched by where from the data source.
[**teamMemberImageFoldersFindOneGet**](TeamMemberImageFolderApi.md#teamMemberImageFoldersFindOneGet) | **GET** /TeamMemberImageFolders/findOne | Find first instance of the model matched by filter from the data source.
[**teamMemberImageFoldersGet**](TeamMemberImageFolderApi.md#teamMemberImageFoldersGet) | **GET** /TeamMemberImageFolders | Find all instances of the model matched by filter from the data source.
[**teamMemberImageFoldersIdDelete**](TeamMemberImageFolderApi.md#teamMemberImageFoldersIdDelete) | **DELETE** /TeamMemberImageFolders/{id} | Delete a model instance by {{id}} from the data source.
[**teamMemberImageFoldersIdExistsGet**](TeamMemberImageFolderApi.md#teamMemberImageFoldersIdExistsGet) | **GET** /TeamMemberImageFolders/{id}/exists | Check whether a model instance exists in the data source.
[**teamMemberImageFoldersIdFolderGet**](TeamMemberImageFolderApi.md#teamMemberImageFoldersIdFolderGet) | **GET** /TeamMemberImageFolders/{id}/folder | Fetches belongsTo relation folder.
[**teamMemberImageFoldersIdGet**](TeamMemberImageFolderApi.md#teamMemberImageFoldersIdGet) | **GET** /TeamMemberImageFolders/{id} | Find a model instance by {{id}} from the data source.
[**teamMemberImageFoldersIdHead**](TeamMemberImageFolderApi.md#teamMemberImageFoldersIdHead) | **HEAD** /TeamMemberImageFolders/{id} | Check whether a model instance exists in the data source.
[**teamMemberImageFoldersIdMemberGet**](TeamMemberImageFolderApi.md#teamMemberImageFoldersIdMemberGet) | **GET** /TeamMemberImageFolders/{id}/member | Fetches belongsTo relation member.
[**teamMemberImageFoldersIdPatch**](TeamMemberImageFolderApi.md#teamMemberImageFoldersIdPatch) | **PATCH** /TeamMemberImageFolders/{id} | Patch attributes for a model instance and persist it into the data source.
[**teamMemberImageFoldersIdPut**](TeamMemberImageFolderApi.md#teamMemberImageFoldersIdPut) | **PUT** /TeamMemberImageFolders/{id} | Replace attributes for a model instance and persist it into the data source.
[**teamMemberImageFoldersIdReplacePost**](TeamMemberImageFolderApi.md#teamMemberImageFoldersIdReplacePost) | **POST** /TeamMemberImageFolders/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**teamMemberImageFoldersPatch**](TeamMemberImageFolderApi.md#teamMemberImageFoldersPatch) | **PATCH** /TeamMemberImageFolders | Patch an existing model instance or insert a new one into the data source.
[**teamMemberImageFoldersPost**](TeamMemberImageFolderApi.md#teamMemberImageFoldersPost) | **POST** /TeamMemberImageFolders | Create a new instance of the model and persist it into the data source.
[**teamMemberImageFoldersPut**](TeamMemberImageFolderApi.md#teamMemberImageFoldersPut) | **PUT** /TeamMemberImageFolders | Replace an existing model instance or insert a new one into the data source.
[**teamMemberImageFoldersReplaceOrCreatePost**](TeamMemberImageFolderApi.md#teamMemberImageFoldersReplaceOrCreatePost) | **POST** /TeamMemberImageFolders/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**teamMemberImageFoldersUpdatePost**](TeamMemberImageFolderApi.md#teamMemberImageFoldersUpdatePost) | **POST** /TeamMemberImageFolders/update | Update instances of the model matched by {{where}} from the data source.
[**teamMemberImageFoldersUpsertWithWherePost**](TeamMemberImageFolderApi.md#teamMemberImageFoldersUpsertWithWherePost) | **POST** /TeamMemberImageFolders/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **teamMemberImageFoldersChangeStreamGet**
> \SplFileObject teamMemberImageFoldersChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamMemberImageFoldersChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **teamMemberImageFoldersChangeStreamPost**
> \SplFileObject teamMemberImageFoldersChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->teamMemberImageFoldersChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **teamMemberImageFoldersCountGet**
> \Swagger\Client\Model\InlineResponse200 teamMemberImageFoldersCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->teamMemberImageFoldersCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersCountGet: ', $e->getMessage(), PHP_EOL;
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

# **teamMemberImageFoldersFindOneGet**
> \Swagger\Client\Model\TeamMemberImageFolder teamMemberImageFoldersFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMemberImageFoldersFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/TeamMemberImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberImageFoldersGet**
> \Swagger\Client\Model\TeamMemberImageFolder[] teamMemberImageFoldersGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMemberImageFoldersGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamMemberImageFolder[]**](../Model/TeamMemberImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberImageFoldersIdDelete**
> object teamMemberImageFoldersIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamMemberImageFoldersIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **teamMemberImageFoldersIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 teamMemberImageFoldersIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamMemberImageFoldersIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **teamMemberImageFoldersIdFolderGet**
> \Swagger\Client\Model\ImageFolder teamMemberImageFoldersIdFolderGet($id, $refresh)

Fetches belongsTo relation folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$id = "id_example"; // string | TeamMemberImageFolder id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamMemberImageFoldersIdFolderGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersIdFolderGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMemberImageFolder id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberImageFoldersIdGet**
> \Swagger\Client\Model\TeamMemberImageFolder teamMemberImageFoldersIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->teamMemberImageFoldersIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/TeamMemberImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberImageFoldersIdHead**
> \Swagger\Client\Model\InlineResponse2002 teamMemberImageFoldersIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->teamMemberImageFoldersIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersIdHead: ', $e->getMessage(), PHP_EOL;
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

# **teamMemberImageFoldersIdMemberGet**
> \Swagger\Client\Model\TeamMember teamMemberImageFoldersIdMemberGet($id, $refresh)

Fetches belongsTo relation member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$id = "id_example"; // string | TeamMemberImageFolder id
$refresh = true; // bool | 

try {
    $result = $api_instance->teamMemberImageFoldersIdMemberGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersIdMemberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMemberImageFolder id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberImageFoldersIdPatch**
> \Swagger\Client\Model\TeamMemberImageFolder teamMemberImageFoldersIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$id = "id_example"; // string | TeamMemberImageFolder id
$data = new \Swagger\Client\Model\TeamMemberImageFolder(); // \Swagger\Client\Model\TeamMemberImageFolder | An object of model property name/value pairs

try {
    $result = $api_instance->teamMemberImageFoldersIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMemberImageFolder id |
 **data** | [**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/\Swagger\Client\Model\TeamMemberImageFolder.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/TeamMemberImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberImageFoldersIdPut**
> \Swagger\Client\Model\TeamMemberImageFolder teamMemberImageFoldersIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamMemberImageFolder(); // \Swagger\Client\Model\TeamMemberImageFolder | Model instance data

try {
    $result = $api_instance->teamMemberImageFoldersIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/\Swagger\Client\Model\TeamMemberImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/TeamMemberImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberImageFoldersIdReplacePost**
> \Swagger\Client\Model\TeamMemberImageFolder teamMemberImageFoldersIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\TeamMemberImageFolder(); // \Swagger\Client\Model\TeamMemberImageFolder | Model instance data

try {
    $result = $api_instance->teamMemberImageFoldersIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/\Swagger\Client\Model\TeamMemberImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/TeamMemberImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberImageFoldersPatch**
> \Swagger\Client\Model\TeamMemberImageFolder teamMemberImageFoldersPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$data = new \Swagger\Client\Model\TeamMemberImageFolder(); // \Swagger\Client\Model\TeamMemberImageFolder | Model instance data

try {
    $result = $api_instance->teamMemberImageFoldersPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/\Swagger\Client\Model\TeamMemberImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/TeamMemberImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberImageFoldersPost**
> \Swagger\Client\Model\TeamMemberImageFolder teamMemberImageFoldersPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$data = new \Swagger\Client\Model\TeamMemberImageFolder(); // \Swagger\Client\Model\TeamMemberImageFolder | Model instance data

try {
    $result = $api_instance->teamMemberImageFoldersPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/\Swagger\Client\Model\TeamMemberImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/TeamMemberImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberImageFoldersPut**
> \Swagger\Client\Model\TeamMemberImageFolder teamMemberImageFoldersPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$data = new \Swagger\Client\Model\TeamMemberImageFolder(); // \Swagger\Client\Model\TeamMemberImageFolder | Model instance data

try {
    $result = $api_instance->teamMemberImageFoldersPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/\Swagger\Client\Model\TeamMemberImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/TeamMemberImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberImageFoldersReplaceOrCreatePost**
> \Swagger\Client\Model\TeamMemberImageFolder teamMemberImageFoldersReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$data = new \Swagger\Client\Model\TeamMemberImageFolder(); // \Swagger\Client\Model\TeamMemberImageFolder | Model instance data

try {
    $result = $api_instance->teamMemberImageFoldersReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/\Swagger\Client\Model\TeamMemberImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/TeamMemberImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberImageFoldersUpdatePost**
> \Swagger\Client\Model\InlineResponse2001 teamMemberImageFoldersUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\TeamMemberImageFolder(); // \Swagger\Client\Model\TeamMemberImageFolder | An object of model property name/value pairs

try {
    $result = $api_instance->teamMemberImageFoldersUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/\Swagger\Client\Model\TeamMemberImageFolder.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMemberImageFoldersUpsertWithWherePost**
> \Swagger\Client\Model\TeamMemberImageFolder teamMemberImageFoldersUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\TeamMemberImageFolderApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\TeamMemberImageFolder(); // \Swagger\Client\Model\TeamMemberImageFolder | An object of model property name/value pairs

try {
    $result = $api_instance->teamMemberImageFoldersUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMemberImageFolderApi->teamMemberImageFoldersUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/\Swagger\Client\Model\TeamMemberImageFolder.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\TeamMemberImageFolder**](../Model/TeamMemberImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

