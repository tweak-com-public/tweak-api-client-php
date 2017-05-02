# Tweak\Api\DesignApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**designsChangeStreamGet**](DesignApi.md#designsChangeStreamGet) | **GET** /Designs/change-stream | Create a change stream.
[**designsChangeStreamPost**](DesignApi.md#designsChangeStreamPost) | **POST** /Designs/change-stream | Create a change stream.
[**designsCountGet**](DesignApi.md#designsCountGet) | **GET** /Designs/count | Count instances of the model matched by where from the data source.
[**designsFindOneGet**](DesignApi.md#designsFindOneGet) | **GET** /Designs/findOne | Find first instance of the model matched by filter from the data source.
[**designsGet**](DesignApi.md#designsGet) | **GET** /Designs | Find all instances of the model matched by filter from the data source.
[**designsIdAssigneeGet**](DesignApi.md#designsIdAssigneeGet) | **GET** /Designs/{id}/assignee | Fetches belongsTo relation assignee.
[**designsIdCommentersCountGet**](DesignApi.md#designsIdCommentersCountGet) | **GET** /Designs/{id}/commenters/count | Counts commenters of Design.
[**designsIdCommentersDelete**](DesignApi.md#designsIdCommentersDelete) | **DELETE** /Designs/{id}/commenters | Deletes all commenters of this model.
[**designsIdCommentersFkDelete**](DesignApi.md#designsIdCommentersFkDelete) | **DELETE** /Designs/{id}/commenters/{fk} | Delete a related item by id for commenters.
[**designsIdCommentersFkGet**](DesignApi.md#designsIdCommentersFkGet) | **GET** /Designs/{id}/commenters/{fk} | Find a related item by id for commenters.
[**designsIdCommentersFkPut**](DesignApi.md#designsIdCommentersFkPut) | **PUT** /Designs/{id}/commenters/{fk} | Update a related item by id for commenters.
[**designsIdCommentersGet**](DesignApi.md#designsIdCommentersGet) | **GET** /Designs/{id}/commenters | Queries commenters of Design.
[**designsIdCommentersPost**](DesignApi.md#designsIdCommentersPost) | **POST** /Designs/{id}/commenters | Creates a new instance in commenters of this model.
[**designsIdCommentersRelFkDelete**](DesignApi.md#designsIdCommentersRelFkDelete) | **DELETE** /Designs/{id}/commenters/rel/{fk} | Remove the commenters relation to an item by id.
[**designsIdCommentersRelFkHead**](DesignApi.md#designsIdCommentersRelFkHead) | **HEAD** /Designs/{id}/commenters/rel/{fk} | Check the existence of commenters relation to an item by id.
[**designsIdCommentersRelFkPut**](DesignApi.md#designsIdCommentersRelFkPut) | **PUT** /Designs/{id}/commenters/rel/{fk} | Add a related item by id for commenters.
[**designsIdCommentsCountGet**](DesignApi.md#designsIdCommentsCountGet) | **GET** /Designs/{id}/comments/count | Counts comments of Design.
[**designsIdCommentsDelete**](DesignApi.md#designsIdCommentsDelete) | **DELETE** /Designs/{id}/comments | Deletes all comments of this model.
[**designsIdCommentsFkDelete**](DesignApi.md#designsIdCommentsFkDelete) | **DELETE** /Designs/{id}/comments/{fk} | Delete a related item by id for comments.
[**designsIdCommentsFkGet**](DesignApi.md#designsIdCommentsFkGet) | **GET** /Designs/{id}/comments/{fk} | Find a related item by id for comments.
[**designsIdCommentsFkPut**](DesignApi.md#designsIdCommentsFkPut) | **PUT** /Designs/{id}/comments/{fk} | Update a related item by id for comments.
[**designsIdCommentsGet**](DesignApi.md#designsIdCommentsGet) | **GET** /Designs/{id}/comments | Queries comments of Design.
[**designsIdCommentsPost**](DesignApi.md#designsIdCommentsPost) | **POST** /Designs/{id}/comments | Creates a new instance in comments of this model.
[**designsIdCustomerGet**](DesignApi.md#designsIdCustomerGet) | **GET** /Designs/{id}/customer | Fetches belongsTo relation customer.
[**designsIdDelete**](DesignApi.md#designsIdDelete) | **DELETE** /Designs/{id} | Delete a model instance by {{id}} from the data source.
[**designsIdExistsGet**](DesignApi.md#designsIdExistsGet) | **GET** /Designs/{id}/exists | Check whether a model instance exists in the data source.
[**designsIdExportsCountGet**](DesignApi.md#designsIdExportsCountGet) | **GET** /Designs/{id}/exports/count | Counts exports of Design.
[**designsIdExportsDelete**](DesignApi.md#designsIdExportsDelete) | **DELETE** /Designs/{id}/exports | Deletes all exports of this model.
[**designsIdExportsFkDelete**](DesignApi.md#designsIdExportsFkDelete) | **DELETE** /Designs/{id}/exports/{fk} | Delete a related item by id for exports.
[**designsIdExportsFkGet**](DesignApi.md#designsIdExportsFkGet) | **GET** /Designs/{id}/exports/{fk} | Find a related item by id for exports.
[**designsIdExportsFkPut**](DesignApi.md#designsIdExportsFkPut) | **PUT** /Designs/{id}/exports/{fk} | Update a related item by id for exports.
[**designsIdExportsGet**](DesignApi.md#designsIdExportsGet) | **GET** /Designs/{id}/exports | Queries exports of Design.
[**designsIdExportsPost**](DesignApi.md#designsIdExportsPost) | **POST** /Designs/{id}/exports | Creates a new instance in exports of this model.
[**designsIdGet**](DesignApi.md#designsIdGet) | **GET** /Designs/{id} | Find a model instance by {{id}} from the data source.
[**designsIdHead**](DesignApi.md#designsIdHead) | **HEAD** /Designs/{id} | Check whether a model instance exists in the data source.
[**designsIdPatch**](DesignApi.md#designsIdPatch) | **PATCH** /Designs/{id} | Patch attributes for a model instance and persist it into the data source.
[**designsIdPortalGet**](DesignApi.md#designsIdPortalGet) | **GET** /Designs/{id}/portal | Fetches belongsTo relation portal.
[**designsIdPut**](DesignApi.md#designsIdPut) | **PUT** /Designs/{id} | Replace attributes for a model instance and persist it into the data source.
[**designsIdReplacePost**](DesignApi.md#designsIdReplacePost) | **POST** /Designs/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**designsIdRequesterGet**](DesignApi.md#designsIdRequesterGet) | **GET** /Designs/{id}/requester | Fetches belongsTo relation requester.
[**designsIdReviewerGet**](DesignApi.md#designsIdReviewerGet) | **GET** /Designs/{id}/reviewer | Fetches belongsTo relation reviewer.
[**designsIdTagsCountGet**](DesignApi.md#designsIdTagsCountGet) | **GET** /Designs/{id}/tags/count | Counts tags of Design.
[**designsIdTagsDelete**](DesignApi.md#designsIdTagsDelete) | **DELETE** /Designs/{id}/tags | Deletes all tags of this model.
[**designsIdTagsFkDelete**](DesignApi.md#designsIdTagsFkDelete) | **DELETE** /Designs/{id}/tags/{fk} | Delete a related item by id for tags.
[**designsIdTagsFkGet**](DesignApi.md#designsIdTagsFkGet) | **GET** /Designs/{id}/tags/{fk} | Find a related item by id for tags.
[**designsIdTagsFkPut**](DesignApi.md#designsIdTagsFkPut) | **PUT** /Designs/{id}/tags/{fk} | Update a related item by id for tags.
[**designsIdTagsGet**](DesignApi.md#designsIdTagsGet) | **GET** /Designs/{id}/tags | Queries tags of Design.
[**designsIdTagsPost**](DesignApi.md#designsIdTagsPost) | **POST** /Designs/{id}/tags | Creates a new instance in tags of this model.
[**designsIdTagsRelFkDelete**](DesignApi.md#designsIdTagsRelFkDelete) | **DELETE** /Designs/{id}/tags/rel/{fk} | Remove the tags relation to an item by id.
[**designsIdTagsRelFkHead**](DesignApi.md#designsIdTagsRelFkHead) | **HEAD** /Designs/{id}/tags/rel/{fk} | Check the existence of tags relation to an item by id.
[**designsIdTagsRelFkPut**](DesignApi.md#designsIdTagsRelFkPut) | **PUT** /Designs/{id}/tags/rel/{fk} | Add a related item by id for tags.
[**designsIdTemplateGet**](DesignApi.md#designsIdTemplateGet) | **GET** /Designs/{id}/template | Fetches belongsTo relation template.
[**designsPatch**](DesignApi.md#designsPatch) | **PATCH** /Designs | Patch an existing model instance or insert a new one into the data source.
[**designsPost**](DesignApi.md#designsPost) | **POST** /Designs | Create a new instance of the model and persist it into the data source.
[**designsPut**](DesignApi.md#designsPut) | **PUT** /Designs | Replace an existing model instance or insert a new one into the data source.
[**designsReplaceOrCreatePost**](DesignApi.md#designsReplaceOrCreatePost) | **POST** /Designs/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**designsUpdatePost**](DesignApi.md#designsUpdatePost) | **POST** /Designs/update | Update instances of the model matched by {{where}} from the data source.
[**designsUpsertWithWherePost**](DesignApi.md#designsUpsertWithWherePost) | **POST** /Designs/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **designsChangeStreamGet**
> \SplFileObject designsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->designsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **designsChangeStreamPost**
> \SplFileObject designsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->designsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **designsCountGet**
> \Swagger\Client\Model\InlineResponse200 designsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->designsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **designsFindOneGet**
> \Swagger\Client\Model\Design designsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsGet**
> \Swagger\Client\Model\Design[] designsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdAssigneeGet**
> \Swagger\Client\Model\TeamMember designsIdAssigneeGet($id, $refresh)

Fetches belongsTo relation assignee.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$refresh = true; // bool | 

try {
    $result = $api_instance->designsIdAssigneeGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdAssigneeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentersCountGet**
> \Swagger\Client\Model\InlineResponse200 designsIdCommentersCountGet($id, $where)

Counts commenters of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->designsIdCommentersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentersDelete**
> designsIdCommentersDelete($id)

Deletes all commenters of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id

try {
    $api_instance->designsIdCommentersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentersFkDelete**
> designsIdCommentersFkDelete($id, $fk)

Delete a related item by id for commenters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for commenters

try {
    $api_instance->designsIdCommentersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for commenters |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentersFkGet**
> \Swagger\Client\Model\TeamMember designsIdCommentersFkGet($id, $fk)

Find a related item by id for commenters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for commenters

try {
    $result = $api_instance->designsIdCommentersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for commenters |

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentersFkPut**
> \Swagger\Client\Model\TeamMember designsIdCommentersFkPut($id, $fk, $data)

Update a related item by id for commenters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for commenters
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->designsIdCommentersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for commenters |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentersGet**
> \Swagger\Client\Model\TeamMember[] designsIdCommentersGet($id, $filter)

Queries commenters of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->designsIdCommentersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember[]**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentersPost**
> \Swagger\Client\Model\TeamMember designsIdCommentersPost($id, $data)

Creates a new instance in commenters of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->designsIdCommentersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentersRelFkDelete**
> designsIdCommentersRelFkDelete($id, $fk)

Remove the commenters relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for commenters

try {
    $api_instance->designsIdCommentersRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for commenters |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentersRelFkHead**
> bool designsIdCommentersRelFkHead($id, $fk)

Check the existence of commenters relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for commenters

try {
    $result = $api_instance->designsIdCommentersRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for commenters |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentersRelFkPut**
> \Swagger\Client\Model\DesignComment designsIdCommentersRelFkPut($id, $fk, $data)

Add a related item by id for commenters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for commenters
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | 

try {
    $result = $api_instance->designsIdCommentersRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for commenters |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentsCountGet**
> \Swagger\Client\Model\InlineResponse200 designsIdCommentsCountGet($id, $where)

Counts comments of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->designsIdCommentsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentsDelete**
> designsIdCommentsDelete($id)

Deletes all comments of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id

try {
    $api_instance->designsIdCommentsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentsFkDelete**
> designsIdCommentsFkDelete($id, $fk)

Delete a related item by id for comments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for comments

try {
    $api_instance->designsIdCommentsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for comments |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentsFkGet**
> \Swagger\Client\Model\DesignComment designsIdCommentsFkGet($id, $fk)

Find a related item by id for comments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for comments

try {
    $result = $api_instance->designsIdCommentsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for comments |

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentsFkPut**
> \Swagger\Client\Model\DesignComment designsIdCommentsFkPut($id, $fk, $data)

Update a related item by id for comments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for comments
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | 

try {
    $result = $api_instance->designsIdCommentsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for comments |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentsGet**
> \Swagger\Client\Model\DesignComment[] designsIdCommentsGet($id, $filter)

Queries comments of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->designsIdCommentsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment[]**](../Model/DesignComment.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCommentsPost**
> \Swagger\Client\Model\DesignComment designsIdCommentsPost($id, $data)

Creates a new instance in comments of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | 

try {
    $result = $api_instance->designsIdCommentsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCommentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdCustomerGet**
> \Swagger\Client\Model\Customer designsIdCustomerGet($id, $refresh)

Fetches belongsTo relation customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$refresh = true; // bool | 

try {
    $result = $api_instance->designsIdCustomerGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdCustomerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdDelete**
> object designsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **designsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 designsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **designsIdExportsCountGet**
> \Swagger\Client\Model\InlineResponse200 designsIdExportsCountGet($id, $where)

Counts exports of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->designsIdExportsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdExportsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdExportsDelete**
> designsIdExportsDelete($id)

Deletes all exports of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id

try {
    $api_instance->designsIdExportsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdExportsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdExportsFkDelete**
> designsIdExportsFkDelete($id, $fk)

Delete a related item by id for exports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for exports

try {
    $api_instance->designsIdExportsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdExportsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for exports |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdExportsFkGet**
> \Swagger\Client\Model\DesignExport designsIdExportsFkGet($id, $fk)

Find a related item by id for exports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for exports

try {
    $result = $api_instance->designsIdExportsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdExportsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for exports |

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdExportsFkPut**
> \Swagger\Client\Model\DesignExport designsIdExportsFkPut($id, $fk, $data)

Update a related item by id for exports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for exports
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | 

try {
    $result = $api_instance->designsIdExportsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdExportsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for exports |
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdExportsGet**
> \Swagger\Client\Model\DesignExport[] designsIdExportsGet($id, $filter)

Queries exports of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->designsIdExportsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdExportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport[]**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdExportsPost**
> \Swagger\Client\Model\DesignExport designsIdExportsPost($id, $data)

Creates a new instance in exports of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$data = new \Swagger\Client\Model\DesignExport(); // \Swagger\Client\Model\DesignExport | 

try {
    $result = $api_instance->designsIdExportsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdExportsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **data** | [**\Swagger\Client\Model\DesignExport**](../Model/\Swagger\Client\Model\DesignExport.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignExport**](../Model/DesignExport.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdGet**
> \Swagger\Client\Model\Design designsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->designsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdHead**
> \Swagger\Client\Model\InlineResponse2002 designsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->designsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **designsIdPatch**
> \Swagger\Client\Model\Design designsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | An object of model property name/value pairs

try {
    $result = $api_instance->designsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdPortalGet**
> \Swagger\Client\Model\Portal designsIdPortalGet($id, $refresh)

Fetches belongsTo relation portal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$refresh = true; // bool | 

try {
    $result = $api_instance->designsIdPortalGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdPortalGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdPut**
> \Swagger\Client\Model\Design designsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | Model instance data

try {
    $result = $api_instance->designsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdReplacePost**
> \Swagger\Client\Model\Design designsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | Model instance data

try {
    $result = $api_instance->designsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdRequesterGet**
> \Swagger\Client\Model\TeamMember designsIdRequesterGet($id, $refresh)

Fetches belongsTo relation requester.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$refresh = true; // bool | 

try {
    $result = $api_instance->designsIdRequesterGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdRequesterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdReviewerGet**
> \Swagger\Client\Model\TeamMember designsIdReviewerGet($id, $refresh)

Fetches belongsTo relation reviewer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$refresh = true; // bool | 

try {
    $result = $api_instance->designsIdReviewerGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdReviewerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdTagsCountGet**
> \Swagger\Client\Model\InlineResponse200 designsIdTagsCountGet($id, $where)

Counts tags of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->designsIdTagsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdTagsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdTagsDelete**
> designsIdTagsDelete($id)

Deletes all tags of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id

try {
    $api_instance->designsIdTagsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdTagsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdTagsFkDelete**
> designsIdTagsFkDelete($id, $fk)

Delete a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for tags

try {
    $api_instance->designsIdTagsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdTagsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for tags |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdTagsFkGet**
> \Swagger\Client\Model\Tag designsIdTagsFkGet($id, $fk)

Find a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for tags

try {
    $result = $api_instance->designsIdTagsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdTagsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for tags |

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdTagsFkPut**
> \Swagger\Client\Model\Tag designsIdTagsFkPut($id, $fk, $data)

Update a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for tags
$data = new \Swagger\Client\Model\Tag(); // \Swagger\Client\Model\Tag | 

try {
    $result = $api_instance->designsIdTagsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdTagsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for tags |
 **data** | [**\Swagger\Client\Model\Tag**](../Model/\Swagger\Client\Model\Tag.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdTagsGet**
> \Swagger\Client\Model\Tag[] designsIdTagsGet($id, $filter)

Queries tags of Design.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->designsIdTagsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdTagsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Tag[]**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdTagsPost**
> \Swagger\Client\Model\Tag designsIdTagsPost($id, $data)

Creates a new instance in tags of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$data = new \Swagger\Client\Model\Tag(); // \Swagger\Client\Model\Tag | 

try {
    $result = $api_instance->designsIdTagsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdTagsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **data** | [**\Swagger\Client\Model\Tag**](../Model/\Swagger\Client\Model\Tag.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdTagsRelFkDelete**
> designsIdTagsRelFkDelete($id, $fk)

Remove the tags relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for tags

try {
    $api_instance->designsIdTagsRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdTagsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for tags |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdTagsRelFkHead**
> bool designsIdTagsRelFkHead($id, $fk)

Check the existence of tags relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for tags

try {
    $result = $api_instance->designsIdTagsRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdTagsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for tags |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdTagsRelFkPut**
> \Swagger\Client\Model\DesignTag designsIdTagsRelFkPut($id, $fk, $data)

Add a related item by id for tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$fk = "fk_example"; // string | Foreign key for tags
$data = new \Swagger\Client\Model\DesignTag(); // \Swagger\Client\Model\DesignTag | 

try {
    $result = $api_instance->designsIdTagsRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdTagsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **fk** | **string**| Foreign key for tags |
 **data** | [**\Swagger\Client\Model\DesignTag**](../Model/\Swagger\Client\Model\DesignTag.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignTag**](../Model/DesignTag.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsIdTemplateGet**
> \Swagger\Client\Model\Template designsIdTemplateGet($id, $refresh)

Fetches belongsTo relation template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$id = "id_example"; // string | Design id
$refresh = true; // bool | 

try {
    $result = $api_instance->designsIdTemplateGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsIdTemplateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Template**](../Model/Template.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsPatch**
> \Swagger\Client\Model\Design designsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | Model instance data

try {
    $result = $api_instance->designsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsPost**
> \Swagger\Client\Model\Design designsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | Model instance data

try {
    $result = $api_instance->designsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsPut**
> \Swagger\Client\Model\Design designsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | Model instance data

try {
    $result = $api_instance->designsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsReplaceOrCreatePost**
> \Swagger\Client\Model\Design designsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | Model instance data

try {
    $result = $api_instance->designsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsUpdatePost**
> \Swagger\Client\Model\InlineResponse2001 designsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | An object of model property name/value pairs

try {
    $result = $api_instance->designsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **designsUpsertWithWherePost**
> \Swagger\Client\Model\Design designsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DesignApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | An object of model property name/value pairs

try {
    $result = $api_instance->designsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignApi->designsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

