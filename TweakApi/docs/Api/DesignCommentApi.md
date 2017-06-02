# Tweak\Api\DesignCommentApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**designCommentsChangeStreamGet**](DesignCommentApi.md#designCommentsChangeStreamGet) | **GET** /DesignComments/change-stream | Create a change stream.
[**designCommentsChangeStreamPost**](DesignCommentApi.md#designCommentsChangeStreamPost) | **POST** /DesignComments/change-stream | Create a change stream.
[**designCommentsCountGet**](DesignCommentApi.md#designCommentsCountGet) | **GET** /DesignComments/count | Count instances of the model matched by where from the data source.
[**designCommentsFindOneGet**](DesignCommentApi.md#designCommentsFindOneGet) | **GET** /DesignComments/findOne | Find first instance of the model matched by filter from the data source.
[**designCommentsGet**](DesignCommentApi.md#designCommentsGet) | **GET** /DesignComments | Find all instances of the model matched by filter from the data source.
[**designCommentsIdCommenterGet**](DesignCommentApi.md#designCommentsIdCommenterGet) | **GET** /DesignComments/{id}/commenter | Fetches belongsTo relation commenter.
[**designCommentsIdDelete**](DesignCommentApi.md#designCommentsIdDelete) | **DELETE** /DesignComments/{id} | Delete a model instance by {{id}} from the data source.
[**designCommentsIdDesignGet**](DesignCommentApi.md#designCommentsIdDesignGet) | **GET** /DesignComments/{id}/design | Fetches belongsTo relation design.
[**designCommentsIdExistsGet**](DesignCommentApi.md#designCommentsIdExistsGet) | **GET** /DesignComments/{id}/exists | Check whether a model instance exists in the data source.
[**designCommentsIdGet**](DesignCommentApi.md#designCommentsIdGet) | **GET** /DesignComments/{id} | Find a model instance by {{id}} from the data source.
[**designCommentsIdHead**](DesignCommentApi.md#designCommentsIdHead) | **HEAD** /DesignComments/{id} | Check whether a model instance exists in the data source.
[**designCommentsIdPatch**](DesignCommentApi.md#designCommentsIdPatch) | **PATCH** /DesignComments/{id} | Patch attributes for a model instance and persist it into the data source.
[**designCommentsIdPut**](DesignCommentApi.md#designCommentsIdPut) | **PUT** /DesignComments/{id} | Replace attributes for a model instance and persist it into the data source.
[**designCommentsIdReplacePost**](DesignCommentApi.md#designCommentsIdReplacePost) | **POST** /DesignComments/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**designCommentsIdRepliesCountGet**](DesignCommentApi.md#designCommentsIdRepliesCountGet) | **GET** /DesignComments/{id}/replies/count | Counts replies of DesignComment.
[**designCommentsIdRepliesDelete**](DesignCommentApi.md#designCommentsIdRepliesDelete) | **DELETE** /DesignComments/{id}/replies | Deletes all replies of this model.
[**designCommentsIdRepliesFkDelete**](DesignCommentApi.md#designCommentsIdRepliesFkDelete) | **DELETE** /DesignComments/{id}/replies/{fk} | Delete a related item by id for replies.
[**designCommentsIdRepliesFkGet**](DesignCommentApi.md#designCommentsIdRepliesFkGet) | **GET** /DesignComments/{id}/replies/{fk} | Find a related item by id for replies.
[**designCommentsIdRepliesFkPut**](DesignCommentApi.md#designCommentsIdRepliesFkPut) | **PUT** /DesignComments/{id}/replies/{fk} | Update a related item by id for replies.
[**designCommentsIdRepliesGet**](DesignCommentApi.md#designCommentsIdRepliesGet) | **GET** /DesignComments/{id}/replies | Queries replies of DesignComment.
[**designCommentsIdRepliesPost**](DesignCommentApi.md#designCommentsIdRepliesPost) | **POST** /DesignComments/{id}/replies | Creates a new instance in replies of this model.
[**designCommentsIdReplyOfGet**](DesignCommentApi.md#designCommentsIdReplyOfGet) | **GET** /DesignComments/{id}/replyOf | Fetches belongsTo relation replyOf.
[**designCommentsPatch**](DesignCommentApi.md#designCommentsPatch) | **PATCH** /DesignComments | Patch an existing model instance or insert a new one into the data source.
[**designCommentsPost**](DesignCommentApi.md#designCommentsPost) | **POST** /DesignComments | Create a new instance of the model and persist it into the data source.
[**designCommentsPut**](DesignCommentApi.md#designCommentsPut) | **PUT** /DesignComments | Replace an existing model instance or insert a new one into the data source.
[**designCommentsReplaceOrCreatePost**](DesignCommentApi.md#designCommentsReplaceOrCreatePost) | **POST** /DesignComments/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**designCommentsUpdatePost**](DesignCommentApi.md#designCommentsUpdatePost) | **POST** /DesignComments/update | Update instances of the model matched by {{where}} from the data source.
[**designCommentsUpsertWithWherePost**](DesignCommentApi.md#designCommentsUpsertWithWherePost) | **POST** /DesignComments/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **designCommentsChangeStreamGet**
> \SplFileObject designCommentsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->designCommentsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsChangeStreamPost**
> \SplFileObject designCommentsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->designCommentsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsCountGet**
> \Swagger\Client\Model\InlineResponse200 designCommentsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->designCommentsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsCountGet: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsFindOneGet**
> \Swagger\Client\Model\DesignComment designCommentsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designCommentsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsGet**
> \Swagger\Client\Model\DesignComment[] designCommentsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designCommentsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment[]**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdCommenterGet**
> \Swagger\Client\Model\TeamMember designCommentsIdCommenterGet($id, $refresh)

Fetches belongsTo relation commenter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | DesignComment id
$refresh = true; // bool | 

try {
    $result = $api_instance->designCommentsIdCommenterGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdCommenterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignComment id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdDelete**
> object designCommentsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designCommentsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdDelete: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdDesignGet**
> \Swagger\Client\Model\Design designCommentsIdDesignGet($id, $refresh)

Fetches belongsTo relation design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | DesignComment id
$refresh = true; // bool | 

try {
    $result = $api_instance->designCommentsIdDesignGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdDesignGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignComment id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 designCommentsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designCommentsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdGet**
> \Swagger\Client\Model\DesignComment designCommentsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designCommentsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdHead**
> \Swagger\Client\Model\InlineResponse2002 designCommentsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designCommentsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdHead: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdPatch**
> \Swagger\Client\Model\DesignComment designCommentsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | DesignComment id
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | An object of model property name/value pairs

try {
    $result = $api_instance->designCommentsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignComment id |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdPut**
> \Swagger\Client\Model\DesignComment designCommentsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | Model instance data

try {
    $result = $api_instance->designCommentsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdReplacePost**
> \Swagger\Client\Model\DesignComment designCommentsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | Model instance data

try {
    $result = $api_instance->designCommentsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdRepliesCountGet**
> \Swagger\Client\Model\InlineResponse200 designCommentsIdRepliesCountGet($id, $where)

Counts replies of DesignComment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | DesignComment id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->designCommentsIdRepliesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdRepliesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignComment id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdRepliesDelete**
> designCommentsIdRepliesDelete($id)

Deletes all replies of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | DesignComment id

try {
    $api_instance->designCommentsIdRepliesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdRepliesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignComment id |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdRepliesFkDelete**
> designCommentsIdRepliesFkDelete($id, $fk)

Delete a related item by id for replies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | DesignComment id
$fk = "fk_example"; // string | Foreign key for replies

try {
    $api_instance->designCommentsIdRepliesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdRepliesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignComment id |
 **fk** | **string**| Foreign key for replies |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdRepliesFkGet**
> \Swagger\Client\Model\DesignComment designCommentsIdRepliesFkGet($id, $fk)

Find a related item by id for replies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | DesignComment id
$fk = "fk_example"; // string | Foreign key for replies

try {
    $result = $api_instance->designCommentsIdRepliesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdRepliesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignComment id |
 **fk** | **string**| Foreign key for replies |

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdRepliesFkPut**
> \Swagger\Client\Model\DesignComment designCommentsIdRepliesFkPut($id, $fk, $data)

Update a related item by id for replies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | DesignComment id
$fk = "fk_example"; // string | Foreign key for replies
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | 

try {
    $result = $api_instance->designCommentsIdRepliesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdRepliesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignComment id |
 **fk** | **string**| Foreign key for replies |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdRepliesGet**
> \Swagger\Client\Model\DesignComment[] designCommentsIdRepliesGet($id, $filter)

Queries replies of DesignComment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | DesignComment id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->designCommentsIdRepliesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdRepliesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignComment id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment[]**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdRepliesPost**
> \Swagger\Client\Model\DesignComment designCommentsIdRepliesPost($id, $data)

Creates a new instance in replies of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | DesignComment id
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | 

try {
    $result = $api_instance->designCommentsIdRepliesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdRepliesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignComment id |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsIdReplyOfGet**
> \Swagger\Client\Model\DesignComment designCommentsIdReplyOfGet($id, $refresh)

Fetches belongsTo relation replyOf.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$id = "id_example"; // string | DesignComment id
$refresh = true; // bool | 

try {
    $result = $api_instance->designCommentsIdReplyOfGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsIdReplyOfGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DesignComment id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsPatch**
> \Swagger\Client\Model\DesignComment designCommentsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | Model instance data

try {
    $result = $api_instance->designCommentsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsPost**
> \Swagger\Client\Model\DesignComment designCommentsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | Model instance data

try {
    $result = $api_instance->designCommentsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsPut**
> \Swagger\Client\Model\DesignComment designCommentsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | Model instance data

try {
    $result = $api_instance->designCommentsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsReplaceOrCreatePost**
> \Swagger\Client\Model\DesignComment designCommentsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | Model instance data

try {
    $result = $api_instance->designCommentsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsUpdatePost**
> \Swagger\Client\Model\InlineResponse2001 designCommentsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | An object of model property name/value pairs

try {
    $result = $api_instance->designCommentsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designCommentsUpsertWithWherePost**
> \Swagger\Client\Model\DesignComment designCommentsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignCommentApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | An object of model property name/value pairs

try {
    $result = $api_instance->designCommentsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignCommentApi->designCommentsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

