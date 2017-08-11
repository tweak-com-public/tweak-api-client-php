# Tweak\Api\PortalTemplateFolderApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**portalTemplateFoldersChangeStreamGet**](PortalTemplateFolderApi.md#portalTemplateFoldersChangeStreamGet) | **GET** /PortalTemplateFolders/change-stream | Create a change stream.
[**portalTemplateFoldersChangeStreamPost**](PortalTemplateFolderApi.md#portalTemplateFoldersChangeStreamPost) | **POST** /PortalTemplateFolders/change-stream | Create a change stream.
[**portalTemplateFoldersCountGet**](PortalTemplateFolderApi.md#portalTemplateFoldersCountGet) | **GET** /PortalTemplateFolders/count | Count instances of the model matched by where from the data source.
[**portalTemplateFoldersFindOneGet**](PortalTemplateFolderApi.md#portalTemplateFoldersFindOneGet) | **GET** /PortalTemplateFolders/findOne | Find first instance of the model matched by filter from the data source.
[**portalTemplateFoldersGet**](PortalTemplateFolderApi.md#portalTemplateFoldersGet) | **GET** /PortalTemplateFolders | Find all instances of the model matched by filter from the data source.
[**portalTemplateFoldersIdChildrenCountGet**](PortalTemplateFolderApi.md#portalTemplateFoldersIdChildrenCountGet) | **GET** /PortalTemplateFolders/{id}/children/count | Counts children of PortalTemplateFolder.
[**portalTemplateFoldersIdChildrenDelete**](PortalTemplateFolderApi.md#portalTemplateFoldersIdChildrenDelete) | **DELETE** /PortalTemplateFolders/{id}/children | Deletes all children of this model.
[**portalTemplateFoldersIdChildrenFkDelete**](PortalTemplateFolderApi.md#portalTemplateFoldersIdChildrenFkDelete) | **DELETE** /PortalTemplateFolders/{id}/children/{fk} | Delete a related item by id for children.
[**portalTemplateFoldersIdChildrenFkGet**](PortalTemplateFolderApi.md#portalTemplateFoldersIdChildrenFkGet) | **GET** /PortalTemplateFolders/{id}/children/{fk} | Find a related item by id for children.
[**portalTemplateFoldersIdChildrenFkPut**](PortalTemplateFolderApi.md#portalTemplateFoldersIdChildrenFkPut) | **PUT** /PortalTemplateFolders/{id}/children/{fk} | Update a related item by id for children.
[**portalTemplateFoldersIdChildrenGet**](PortalTemplateFolderApi.md#portalTemplateFoldersIdChildrenGet) | **GET** /PortalTemplateFolders/{id}/children | Queries children of PortalTemplateFolder.
[**portalTemplateFoldersIdChildrenPost**](PortalTemplateFolderApi.md#portalTemplateFoldersIdChildrenPost) | **POST** /PortalTemplateFolders/{id}/children | Creates a new instance in children of this model.
[**portalTemplateFoldersIdDelete**](PortalTemplateFolderApi.md#portalTemplateFoldersIdDelete) | **DELETE** /PortalTemplateFolders/{id} | Delete a model instance by {{id}} from the data source.
[**portalTemplateFoldersIdExistsGet**](PortalTemplateFolderApi.md#portalTemplateFoldersIdExistsGet) | **GET** /PortalTemplateFolders/{id}/exists | Check whether a model instance exists in the data source.
[**portalTemplateFoldersIdGet**](PortalTemplateFolderApi.md#portalTemplateFoldersIdGet) | **GET** /PortalTemplateFolders/{id} | Find a model instance by {{id}} from the data source.
[**portalTemplateFoldersIdHead**](PortalTemplateFolderApi.md#portalTemplateFoldersIdHead) | **HEAD** /PortalTemplateFolders/{id} | Check whether a model instance exists in the data source.
[**portalTemplateFoldersIdParentGet**](PortalTemplateFolderApi.md#portalTemplateFoldersIdParentGet) | **GET** /PortalTemplateFolders/{id}/parent | Fetches belongsTo relation parent.
[**portalTemplateFoldersIdPatch**](PortalTemplateFolderApi.md#portalTemplateFoldersIdPatch) | **PATCH** /PortalTemplateFolders/{id} | Patch attributes for a model instance and persist it into the data source.
[**portalTemplateFoldersIdPortalGet**](PortalTemplateFolderApi.md#portalTemplateFoldersIdPortalGet) | **GET** /PortalTemplateFolders/{id}/portal | Fetches belongsTo relation portal.
[**portalTemplateFoldersIdPut**](PortalTemplateFolderApi.md#portalTemplateFoldersIdPut) | **PUT** /PortalTemplateFolders/{id} | Replace attributes for a model instance and persist it into the data source.
[**portalTemplateFoldersIdReplacePost**](PortalTemplateFolderApi.md#portalTemplateFoldersIdReplacePost) | **POST** /PortalTemplateFolders/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**portalTemplateFoldersIdTemplatesCountGet**](PortalTemplateFolderApi.md#portalTemplateFoldersIdTemplatesCountGet) | **GET** /PortalTemplateFolders/{id}/templates/count | Counts templates of PortalTemplateFolder.
[**portalTemplateFoldersIdTemplatesDelete**](PortalTemplateFolderApi.md#portalTemplateFoldersIdTemplatesDelete) | **DELETE** /PortalTemplateFolders/{id}/templates | Deletes all templates of this model.
[**portalTemplateFoldersIdTemplatesFkDelete**](PortalTemplateFolderApi.md#portalTemplateFoldersIdTemplatesFkDelete) | **DELETE** /PortalTemplateFolders/{id}/templates/{fk} | Delete a related item by id for templates.
[**portalTemplateFoldersIdTemplatesFkGet**](PortalTemplateFolderApi.md#portalTemplateFoldersIdTemplatesFkGet) | **GET** /PortalTemplateFolders/{id}/templates/{fk} | Find a related item by id for templates.
[**portalTemplateFoldersIdTemplatesFkPut**](PortalTemplateFolderApi.md#portalTemplateFoldersIdTemplatesFkPut) | **PUT** /PortalTemplateFolders/{id}/templates/{fk} | Update a related item by id for templates.
[**portalTemplateFoldersIdTemplatesGet**](PortalTemplateFolderApi.md#portalTemplateFoldersIdTemplatesGet) | **GET** /PortalTemplateFolders/{id}/templates | Queries templates of PortalTemplateFolder.
[**portalTemplateFoldersIdTemplatesPost**](PortalTemplateFolderApi.md#portalTemplateFoldersIdTemplatesPost) | **POST** /PortalTemplateFolders/{id}/templates | Creates a new instance in templates of this model.
[**portalTemplateFoldersIdTemplatesRelFkDelete**](PortalTemplateFolderApi.md#portalTemplateFoldersIdTemplatesRelFkDelete) | **DELETE** /PortalTemplateFolders/{id}/templates/rel/{fk} | Remove the templates relation to an item by id.
[**portalTemplateFoldersIdTemplatesRelFkHead**](PortalTemplateFolderApi.md#portalTemplateFoldersIdTemplatesRelFkHead) | **HEAD** /PortalTemplateFolders/{id}/templates/rel/{fk} | Check the existence of templates relation to an item by id.
[**portalTemplateFoldersIdTemplatesRelFkPut**](PortalTemplateFolderApi.md#portalTemplateFoldersIdTemplatesRelFkPut) | **PUT** /PortalTemplateFolders/{id}/templates/rel/{fk} | Add a related item by id for templates.
[**portalTemplateFoldersPatch**](PortalTemplateFolderApi.md#portalTemplateFoldersPatch) | **PATCH** /PortalTemplateFolders | Patch an existing model instance or insert a new one into the data source.
[**portalTemplateFoldersPost**](PortalTemplateFolderApi.md#portalTemplateFoldersPost) | **POST** /PortalTemplateFolders | Create a new instance of the model and persist it into the data source.
[**portalTemplateFoldersPut**](PortalTemplateFolderApi.md#portalTemplateFoldersPut) | **PUT** /PortalTemplateFolders | Replace an existing model instance or insert a new one into the data source.
[**portalTemplateFoldersReplaceOrCreatePost**](PortalTemplateFolderApi.md#portalTemplateFoldersReplaceOrCreatePost) | **POST** /PortalTemplateFolders/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**portalTemplateFoldersUpdatePost**](PortalTemplateFolderApi.md#portalTemplateFoldersUpdatePost) | **POST** /PortalTemplateFolders/update | Update instances of the model matched by {{where}} from the data source.
[**portalTemplateFoldersUpsertWithWherePost**](PortalTemplateFolderApi.md#portalTemplateFoldersUpsertWithWherePost) | **POST** /PortalTemplateFolders/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **portalTemplateFoldersChangeStreamGet**
> \SplFileObject portalTemplateFoldersChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->portalTemplateFoldersChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplateFoldersChangeStreamPost**
> \SplFileObject portalTemplateFoldersChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->portalTemplateFoldersChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplateFoldersCountGet**
> \Swagger\Client\Model\InlineResponse200 portalTemplateFoldersCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalTemplateFoldersCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersCountGet: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplateFoldersFindOneGet**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFoldersFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalTemplateFoldersFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersGet**
> \Swagger\Client\Model\PortalTemplateFolder[] portalTemplateFoldersGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalTemplateFoldersGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder[]**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdChildrenCountGet**
> \Swagger\Client\Model\InlineResponse200 portalTemplateFoldersIdChildrenCountGet($id, $where)

Counts children of PortalTemplateFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalTemplateFoldersIdChildrenCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdChildrenCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdChildrenDelete**
> portalTemplateFoldersIdChildrenDelete($id)

Deletes all children of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id

try {
    $api_instance->portalTemplateFoldersIdChildrenDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdChildrenDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdChildrenFkDelete**
> portalTemplateFoldersIdChildrenFkDelete($id, $fk)

Delete a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$fk = "fk_example"; // string | Foreign key for children

try {
    $api_instance->portalTemplateFoldersIdChildrenFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdChildrenFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **fk** | **string**| Foreign key for children |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdChildrenFkGet**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFoldersIdChildrenFkGet($id, $fk)

Find a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$fk = "fk_example"; // string | Foreign key for children

try {
    $result = $api_instance->portalTemplateFoldersIdChildrenFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdChildrenFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **fk** | **string**| Foreign key for children |

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdChildrenFkPut**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFoldersIdChildrenFkPut($id, $fk, $data)

Update a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$fk = "fk_example"; // string | Foreign key for children
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | 

try {
    $result = $api_instance->portalTemplateFoldersIdChildrenFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdChildrenFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **fk** | **string**| Foreign key for children |
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdChildrenGet**
> \Swagger\Client\Model\PortalTemplateFolder[] portalTemplateFoldersIdChildrenGet($id, $filter)

Queries children of PortalTemplateFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalTemplateFoldersIdChildrenGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdChildrenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder[]**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdChildrenPost**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFoldersIdChildrenPost($id, $data)

Creates a new instance in children of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | 

try {
    $result = $api_instance->portalTemplateFoldersIdChildrenPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdChildrenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdDelete**
> object portalTemplateFoldersIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalTemplateFoldersIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplateFoldersIdExistsGet**
> \Swagger\Client\Model\InlineResponse2001 portalTemplateFoldersIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalTemplateFoldersIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplateFoldersIdGet**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFoldersIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->portalTemplateFoldersIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdHead**
> \Swagger\Client\Model\InlineResponse2001 portalTemplateFoldersIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->portalTemplateFoldersIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdHead: ', $e->getMessage(), PHP_EOL;
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

# **portalTemplateFoldersIdParentGet**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFoldersIdParentGet($id, $refresh)

Fetches belongsTo relation parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$refresh = true; // bool | 

try {
    $result = $api_instance->portalTemplateFoldersIdParentGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdParentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdPatch**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFoldersIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | An object of model property name/value pairs

try {
    $result = $api_instance->portalTemplateFoldersIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdPortalGet**
> \Swagger\Client\Model\Portal portalTemplateFoldersIdPortalGet($id, $refresh)

Fetches belongsTo relation portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$refresh = true; // bool | 

try {
    $result = $api_instance->portalTemplateFoldersIdPortalGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdPortalGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdPut**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFoldersIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | Model instance data

try {
    $result = $api_instance->portalTemplateFoldersIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdReplacePost**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFoldersIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | Model instance data

try {
    $result = $api_instance->portalTemplateFoldersIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdTemplatesCountGet**
> \Swagger\Client\Model\InlineResponse200 portalTemplateFoldersIdTemplatesCountGet($id, $where)

Counts templates of PortalTemplateFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalTemplateFoldersIdTemplatesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdTemplatesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdTemplatesDelete**
> portalTemplateFoldersIdTemplatesDelete($id)

Deletes all templates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id

try {
    $api_instance->portalTemplateFoldersIdTemplatesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdTemplatesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdTemplatesFkDelete**
> portalTemplateFoldersIdTemplatesFkDelete($id, $fk)

Delete a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $api_instance->portalTemplateFoldersIdTemplatesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdTemplatesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **fk** | **string**| Foreign key for templates |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdTemplatesFkGet**
> \Swagger\Client\Model\Template portalTemplateFoldersIdTemplatesFkGet($id, $fk)

Find a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $result = $api_instance->portalTemplateFoldersIdTemplatesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdTemplatesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **fk** | **string**| Foreign key for templates |

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdTemplatesFkPut**
> \Swagger\Client\Model\Template portalTemplateFoldersIdTemplatesFkPut($id, $fk, $data)

Update a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$fk = "fk_example"; // string | Foreign key for templates
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->portalTemplateFoldersIdTemplatesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdTemplatesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **fk** | **string**| Foreign key for templates |
 **data** | [**\Swagger\Client\Model\Template**](../Model/\Swagger\Client\Model\Template.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdTemplatesGet**
> \Swagger\Client\Model\Template[] portalTemplateFoldersIdTemplatesGet($id, $filter)

Queries templates of PortalTemplateFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalTemplateFoldersIdTemplatesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Template[]**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdTemplatesPost**
> \Swagger\Client\Model\Template portalTemplateFoldersIdTemplatesPost($id, $data)

Creates a new instance in templates of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$data = new \Swagger\Client\Model\Template(); // \Swagger\Client\Model\Template | 

try {
    $result = $api_instance->portalTemplateFoldersIdTemplatesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **data** | [**\Swagger\Client\Model\Template**](../Model/\Swagger\Client\Model\Template.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdTemplatesRelFkDelete**
> portalTemplateFoldersIdTemplatesRelFkDelete($id, $fk)

Remove the templates relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $api_instance->portalTemplateFoldersIdTemplatesRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdTemplatesRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **fk** | **string**| Foreign key for templates |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdTemplatesRelFkHead**
> bool portalTemplateFoldersIdTemplatesRelFkHead($id, $fk)

Check the existence of templates relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$fk = "fk_example"; // string | Foreign key for templates

try {
    $result = $api_instance->portalTemplateFoldersIdTemplatesRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdTemplatesRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **fk** | **string**| Foreign key for templates |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersIdTemplatesRelFkPut**
> \Swagger\Client\Model\PortalTemplate portalTemplateFoldersIdTemplatesRelFkPut($id, $fk, $data)

Add a related item by id for templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$id = "id_example"; // string | PortalTemplateFolder id
$fk = "fk_example"; // string | Foreign key for templates
$data = new \Swagger\Client\Model\PortalTemplate(); // \Swagger\Client\Model\PortalTemplate | 

try {
    $result = $api_instance->portalTemplateFoldersIdTemplatesRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersIdTemplatesRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalTemplateFolder id |
 **fk** | **string**| Foreign key for templates |
 **data** | [**\Swagger\Client\Model\PortalTemplate**](../Model/\Swagger\Client\Model\PortalTemplate.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplate**](../Model/PortalTemplate.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersPatch**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFoldersPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | Model instance data

try {
    $result = $api_instance->portalTemplateFoldersPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersPost**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFoldersPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | Model instance data

try {
    $result = $api_instance->portalTemplateFoldersPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersPut**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFoldersPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | Model instance data

try {
    $result = $api_instance->portalTemplateFoldersPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersReplaceOrCreatePost**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFoldersReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | Model instance data

try {
    $result = $api_instance->portalTemplateFoldersReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 portalTemplateFoldersUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | An object of model property name/value pairs

try {
    $result = $api_instance->portalTemplateFoldersUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalTemplateFoldersUpsertWithWherePost**
> \Swagger\Client\Model\PortalTemplateFolder portalTemplateFoldersUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\PortalTemplateFolderApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\PortalTemplateFolder(); // \Swagger\Client\Model\PortalTemplateFolder | An object of model property name/value pairs

try {
    $result = $api_instance->portalTemplateFoldersUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalTemplateFolderApi->portalTemplateFoldersUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\PortalTemplateFolder**](../Model/\Swagger\Client\Model\PortalTemplateFolder.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\PortalTemplateFolder**](../Model/PortalTemplateFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

