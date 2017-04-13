# Tweak\Api\PortalMemberApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**portalMembersChangeStreamGet**](PortalMemberApi.md#portalMembersChangeStreamGet) | **GET** /PortalMembers/change-stream | Create a change stream.
[**portalMembersChangeStreamPost**](PortalMemberApi.md#portalMembersChangeStreamPost) | **POST** /PortalMembers/change-stream | Create a change stream.
[**portalMembersCountGet**](PortalMemberApi.md#portalMembersCountGet) | **GET** /PortalMembers/count | Count instances of the model matched by where from the data source.
[**portalMembersFindOneGet**](PortalMemberApi.md#portalMembersFindOneGet) | **GET** /PortalMembers/findOne | Find first instance of the model matched by filter from the data source.
[**portalMembersGet**](PortalMemberApi.md#portalMembersGet) | **GET** /PortalMembers | Find all instances of the model matched by filter from the data source.
[**portalMembersIdAssignedDesignsCountGet**](PortalMemberApi.md#portalMembersIdAssignedDesignsCountGet) | **GET** /PortalMembers/{id}/assignedDesigns/count | Counts assignedDesigns of PortalMember.
[**portalMembersIdAssignedDesignsDelete**](PortalMemberApi.md#portalMembersIdAssignedDesignsDelete) | **DELETE** /PortalMembers/{id}/assignedDesigns | Deletes all assignedDesigns of this model.
[**portalMembersIdAssignedDesignsFkDelete**](PortalMemberApi.md#portalMembersIdAssignedDesignsFkDelete) | **DELETE** /PortalMembers/{id}/assignedDesigns/{fk} | Delete a related item by id for assignedDesigns.
[**portalMembersIdAssignedDesignsFkGet**](PortalMemberApi.md#portalMembersIdAssignedDesignsFkGet) | **GET** /PortalMembers/{id}/assignedDesigns/{fk} | Find a related item by id for assignedDesigns.
[**portalMembersIdAssignedDesignsFkPut**](PortalMemberApi.md#portalMembersIdAssignedDesignsFkPut) | **PUT** /PortalMembers/{id}/assignedDesigns/{fk} | Update a related item by id for assignedDesigns.
[**portalMembersIdAssignedDesignsGet**](PortalMemberApi.md#portalMembersIdAssignedDesignsGet) | **GET** /PortalMembers/{id}/assignedDesigns | Queries assignedDesigns of PortalMember.
[**portalMembersIdAssignedDesignsPost**](PortalMemberApi.md#portalMembersIdAssignedDesignsPost) | **POST** /PortalMembers/{id}/assignedDesigns | Creates a new instance in assignedDesigns of this model.
[**portalMembersIdAssignedDesignsRelFkDelete**](PortalMemberApi.md#portalMembersIdAssignedDesignsRelFkDelete) | **DELETE** /PortalMembers/{id}/assignedDesigns/rel/{fk} | Remove the assignedDesigns relation to an item by id.
[**portalMembersIdAssignedDesignsRelFkHead**](PortalMemberApi.md#portalMembersIdAssignedDesignsRelFkHead) | **HEAD** /PortalMembers/{id}/assignedDesigns/rel/{fk} | Check the existence of assignedDesigns relation to an item by id.
[**portalMembersIdAssignedDesignsRelFkPut**](PortalMemberApi.md#portalMembersIdAssignedDesignsRelFkPut) | **PUT** /PortalMembers/{id}/assignedDesigns/rel/{fk} | Add a related item by id for assignedDesigns.
[**portalMembersIdCommentedDesignsCountGet**](PortalMemberApi.md#portalMembersIdCommentedDesignsCountGet) | **GET** /PortalMembers/{id}/commentedDesigns/count | Counts commentedDesigns of PortalMember.
[**portalMembersIdCommentedDesignsDelete**](PortalMemberApi.md#portalMembersIdCommentedDesignsDelete) | **DELETE** /PortalMembers/{id}/commentedDesigns | Deletes all commentedDesigns of this model.
[**portalMembersIdCommentedDesignsFkDelete**](PortalMemberApi.md#portalMembersIdCommentedDesignsFkDelete) | **DELETE** /PortalMembers/{id}/commentedDesigns/{fk} | Delete a related item by id for commentedDesigns.
[**portalMembersIdCommentedDesignsFkGet**](PortalMemberApi.md#portalMembersIdCommentedDesignsFkGet) | **GET** /PortalMembers/{id}/commentedDesigns/{fk} | Find a related item by id for commentedDesigns.
[**portalMembersIdCommentedDesignsFkPut**](PortalMemberApi.md#portalMembersIdCommentedDesignsFkPut) | **PUT** /PortalMembers/{id}/commentedDesigns/{fk} | Update a related item by id for commentedDesigns.
[**portalMembersIdCommentedDesignsGet**](PortalMemberApi.md#portalMembersIdCommentedDesignsGet) | **GET** /PortalMembers/{id}/commentedDesigns | Queries commentedDesigns of PortalMember.
[**portalMembersIdCommentedDesignsPost**](PortalMemberApi.md#portalMembersIdCommentedDesignsPost) | **POST** /PortalMembers/{id}/commentedDesigns | Creates a new instance in commentedDesigns of this model.
[**portalMembersIdCommentedDesignsRelFkDelete**](PortalMemberApi.md#portalMembersIdCommentedDesignsRelFkDelete) | **DELETE** /PortalMembers/{id}/commentedDesigns/rel/{fk} | Remove the commentedDesigns relation to an item by id.
[**portalMembersIdCommentedDesignsRelFkHead**](PortalMemberApi.md#portalMembersIdCommentedDesignsRelFkHead) | **HEAD** /PortalMembers/{id}/commentedDesigns/rel/{fk} | Check the existence of commentedDesigns relation to an item by id.
[**portalMembersIdCommentedDesignsRelFkPut**](PortalMemberApi.md#portalMembersIdCommentedDesignsRelFkPut) | **PUT** /PortalMembers/{id}/commentedDesigns/rel/{fk} | Add a related item by id for commentedDesigns.
[**portalMembersIdDelete**](PortalMemberApi.md#portalMembersIdDelete) | **DELETE** /PortalMembers/{id} | Delete a model instance by {{id}} from the data source.
[**portalMembersIdExistsGet**](PortalMemberApi.md#portalMembersIdExistsGet) | **GET** /PortalMembers/{id}/exists | Check whether a model instance exists in the data source.
[**portalMembersIdGet**](PortalMemberApi.md#portalMembersIdGet) | **GET** /PortalMembers/{id} | Find a model instance by {{id}} from the data source.
[**portalMembersIdHead**](PortalMemberApi.md#portalMembersIdHead) | **HEAD** /PortalMembers/{id} | Check whether a model instance exists in the data source.
[**portalMembersIdMemberGet**](PortalMemberApi.md#portalMembersIdMemberGet) | **GET** /PortalMembers/{id}/member | Fetches belongsTo relation member.
[**portalMembersIdPatch**](PortalMemberApi.md#portalMembersIdPatch) | **PATCH** /PortalMembers/{id} | Patch attributes for a model instance and persist it into the data source.
[**portalMembersIdPortalGet**](PortalMemberApi.md#portalMembersIdPortalGet) | **GET** /PortalMembers/{id}/portal | Fetches belongsTo relation portal.
[**portalMembersIdPut**](PortalMemberApi.md#portalMembersIdPut) | **PUT** /PortalMembers/{id} | Replace attributes for a model instance and persist it into the data source.
[**portalMembersIdReplacePost**](PortalMemberApi.md#portalMembersIdReplacePost) | **POST** /PortalMembers/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**portalMembersIdRequesterDesignsCountGet**](PortalMemberApi.md#portalMembersIdRequesterDesignsCountGet) | **GET** /PortalMembers/{id}/requesterDesigns/count | Counts requesterDesigns of PortalMember.
[**portalMembersIdRequesterDesignsDelete**](PortalMemberApi.md#portalMembersIdRequesterDesignsDelete) | **DELETE** /PortalMembers/{id}/requesterDesigns | Deletes all requesterDesigns of this model.
[**portalMembersIdRequesterDesignsFkDelete**](PortalMemberApi.md#portalMembersIdRequesterDesignsFkDelete) | **DELETE** /PortalMembers/{id}/requesterDesigns/{fk} | Delete a related item by id for requesterDesigns.
[**portalMembersIdRequesterDesignsFkGet**](PortalMemberApi.md#portalMembersIdRequesterDesignsFkGet) | **GET** /PortalMembers/{id}/requesterDesigns/{fk} | Find a related item by id for requesterDesigns.
[**portalMembersIdRequesterDesignsFkPut**](PortalMemberApi.md#portalMembersIdRequesterDesignsFkPut) | **PUT** /PortalMembers/{id}/requesterDesigns/{fk} | Update a related item by id for requesterDesigns.
[**portalMembersIdRequesterDesignsGet**](PortalMemberApi.md#portalMembersIdRequesterDesignsGet) | **GET** /PortalMembers/{id}/requesterDesigns | Queries requesterDesigns of PortalMember.
[**portalMembersIdRequesterDesignsPost**](PortalMemberApi.md#portalMembersIdRequesterDesignsPost) | **POST** /PortalMembers/{id}/requesterDesigns | Creates a new instance in requesterDesigns of this model.
[**portalMembersIdReviewedDesignsCountGet**](PortalMemberApi.md#portalMembersIdReviewedDesignsCountGet) | **GET** /PortalMembers/{id}/reviewedDesigns/count | Counts reviewedDesigns of PortalMember.
[**portalMembersIdReviewedDesignsDelete**](PortalMemberApi.md#portalMembersIdReviewedDesignsDelete) | **DELETE** /PortalMembers/{id}/reviewedDesigns | Deletes all reviewedDesigns of this model.
[**portalMembersIdReviewedDesignsFkDelete**](PortalMemberApi.md#portalMembersIdReviewedDesignsFkDelete) | **DELETE** /PortalMembers/{id}/reviewedDesigns/{fk} | Delete a related item by id for reviewedDesigns.
[**portalMembersIdReviewedDesignsFkGet**](PortalMemberApi.md#portalMembersIdReviewedDesignsFkGet) | **GET** /PortalMembers/{id}/reviewedDesigns/{fk} | Find a related item by id for reviewedDesigns.
[**portalMembersIdReviewedDesignsFkPut**](PortalMemberApi.md#portalMembersIdReviewedDesignsFkPut) | **PUT** /PortalMembers/{id}/reviewedDesigns/{fk} | Update a related item by id for reviewedDesigns.
[**portalMembersIdReviewedDesignsGet**](PortalMemberApi.md#portalMembersIdReviewedDesignsGet) | **GET** /PortalMembers/{id}/reviewedDesigns | Queries reviewedDesigns of PortalMember.
[**portalMembersIdReviewedDesignsPost**](PortalMemberApi.md#portalMembersIdReviewedDesignsPost) | **POST** /PortalMembers/{id}/reviewedDesigns | Creates a new instance in reviewedDesigns of this model.
[**portalMembersIdReviewedDesignsRelFkDelete**](PortalMemberApi.md#portalMembersIdReviewedDesignsRelFkDelete) | **DELETE** /PortalMembers/{id}/reviewedDesigns/rel/{fk} | Remove the reviewedDesigns relation to an item by id.
[**portalMembersIdReviewedDesignsRelFkHead**](PortalMemberApi.md#portalMembersIdReviewedDesignsRelFkHead) | **HEAD** /PortalMembers/{id}/reviewedDesigns/rel/{fk} | Check the existence of reviewedDesigns relation to an item by id.
[**portalMembersIdReviewedDesignsRelFkPut**](PortalMemberApi.md#portalMembersIdReviewedDesignsRelFkPut) | **PUT** /PortalMembers/{id}/reviewedDesigns/rel/{fk} | Add a related item by id for reviewedDesigns.
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

# **portalMembersIdAssignedDesignsCountGet**
> \Swagger\Client\Model\InlineResponse200 portalMembersIdAssignedDesignsCountGet($id, $where)

Counts assignedDesigns of PortalMember.

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
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalMembersIdAssignedDesignsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdAssignedDesignsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdAssignedDesignsDelete**
> portalMembersIdAssignedDesignsDelete($id)

Deletes all assignedDesigns of this model.

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

try {
    $api_instance->portalMembersIdAssignedDesignsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdAssignedDesignsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdAssignedDesignsFkDelete**
> portalMembersIdAssignedDesignsFkDelete($id, $fk)

Delete a related item by id for assignedDesigns.

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
$fk = "fk_example"; // string | Foreign key for assignedDesigns

try {
    $api_instance->portalMembersIdAssignedDesignsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdAssignedDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for assignedDesigns |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdAssignedDesignsFkGet**
> \Swagger\Client\Model\Design portalMembersIdAssignedDesignsFkGet($id, $fk)

Find a related item by id for assignedDesigns.

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
$fk = "fk_example"; // string | Foreign key for assignedDesigns

try {
    $result = $api_instance->portalMembersIdAssignedDesignsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdAssignedDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for assignedDesigns |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdAssignedDesignsFkPut**
> \Swagger\Client\Model\Design portalMembersIdAssignedDesignsFkPut($id, $fk, $data)

Update a related item by id for assignedDesigns.

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
$fk = "fk_example"; // string | Foreign key for assignedDesigns
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->portalMembersIdAssignedDesignsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdAssignedDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for assignedDesigns |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdAssignedDesignsGet**
> \Swagger\Client\Model\Design[] portalMembersIdAssignedDesignsGet($id, $filter)

Queries assignedDesigns of PortalMember.

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
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalMembersIdAssignedDesignsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdAssignedDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdAssignedDesignsPost**
> \Swagger\Client\Model\Design portalMembersIdAssignedDesignsPost($id, $data)

Creates a new instance in assignedDesigns of this model.

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
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->portalMembersIdAssignedDesignsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdAssignedDesignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdAssignedDesignsRelFkDelete**
> portalMembersIdAssignedDesignsRelFkDelete($id, $fk)

Remove the assignedDesigns relation to an item by id.

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
$fk = "fk_example"; // string | Foreign key for assignedDesigns

try {
    $api_instance->portalMembersIdAssignedDesignsRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdAssignedDesignsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for assignedDesigns |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdAssignedDesignsRelFkHead**
> bool portalMembersIdAssignedDesignsRelFkHead($id, $fk)

Check the existence of assignedDesigns relation to an item by id.

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
$fk = "fk_example"; // string | Foreign key for assignedDesigns

try {
    $result = $api_instance->portalMembersIdAssignedDesignsRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdAssignedDesignsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for assignedDesigns |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdAssignedDesignsRelFkPut**
> \Swagger\Client\Model\DesignAssignee portalMembersIdAssignedDesignsRelFkPut($id, $fk, $data)

Add a related item by id for assignedDesigns.

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
$fk = "fk_example"; // string | Foreign key for assignedDesigns
$data = new \Swagger\Client\Model\DesignAssignee(); // \Swagger\Client\Model\DesignAssignee | 

try {
    $result = $api_instance->portalMembersIdAssignedDesignsRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdAssignedDesignsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for assignedDesigns |
 **data** | [**\Swagger\Client\Model\DesignAssignee**](../Model/\Swagger\Client\Model\DesignAssignee.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignAssignee**](../Model/DesignAssignee.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdCommentedDesignsCountGet**
> \Swagger\Client\Model\InlineResponse200 portalMembersIdCommentedDesignsCountGet($id, $where)

Counts commentedDesigns of PortalMember.

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
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalMembersIdCommentedDesignsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdCommentedDesignsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdCommentedDesignsDelete**
> portalMembersIdCommentedDesignsDelete($id)

Deletes all commentedDesigns of this model.

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

try {
    $api_instance->portalMembersIdCommentedDesignsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdCommentedDesignsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdCommentedDesignsFkDelete**
> portalMembersIdCommentedDesignsFkDelete($id, $fk)

Delete a related item by id for commentedDesigns.

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
$fk = "fk_example"; // string | Foreign key for commentedDesigns

try {
    $api_instance->portalMembersIdCommentedDesignsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdCommentedDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for commentedDesigns |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdCommentedDesignsFkGet**
> \Swagger\Client\Model\Design portalMembersIdCommentedDesignsFkGet($id, $fk)

Find a related item by id for commentedDesigns.

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
$fk = "fk_example"; // string | Foreign key for commentedDesigns

try {
    $result = $api_instance->portalMembersIdCommentedDesignsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdCommentedDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for commentedDesigns |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdCommentedDesignsFkPut**
> \Swagger\Client\Model\Design portalMembersIdCommentedDesignsFkPut($id, $fk, $data)

Update a related item by id for commentedDesigns.

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
$fk = "fk_example"; // string | Foreign key for commentedDesigns
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->portalMembersIdCommentedDesignsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdCommentedDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for commentedDesigns |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdCommentedDesignsGet**
> \Swagger\Client\Model\Design[] portalMembersIdCommentedDesignsGet($id, $filter)

Queries commentedDesigns of PortalMember.

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
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalMembersIdCommentedDesignsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdCommentedDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdCommentedDesignsPost**
> \Swagger\Client\Model\Design portalMembersIdCommentedDesignsPost($id, $data)

Creates a new instance in commentedDesigns of this model.

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
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->portalMembersIdCommentedDesignsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdCommentedDesignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdCommentedDesignsRelFkDelete**
> portalMembersIdCommentedDesignsRelFkDelete($id, $fk)

Remove the commentedDesigns relation to an item by id.

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
$fk = "fk_example"; // string | Foreign key for commentedDesigns

try {
    $api_instance->portalMembersIdCommentedDesignsRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdCommentedDesignsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for commentedDesigns |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdCommentedDesignsRelFkHead**
> bool portalMembersIdCommentedDesignsRelFkHead($id, $fk)

Check the existence of commentedDesigns relation to an item by id.

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
$fk = "fk_example"; // string | Foreign key for commentedDesigns

try {
    $result = $api_instance->portalMembersIdCommentedDesignsRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdCommentedDesignsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for commentedDesigns |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdCommentedDesignsRelFkPut**
> \Swagger\Client\Model\DesignComment portalMembersIdCommentedDesignsRelFkPut($id, $fk, $data)

Add a related item by id for commentedDesigns.

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
$fk = "fk_example"; // string | Foreign key for commentedDesigns
$data = new \Swagger\Client\Model\DesignComment(); // \Swagger\Client\Model\DesignComment | 

try {
    $result = $api_instance->portalMembersIdCommentedDesignsRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdCommentedDesignsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for commentedDesigns |
 **data** | [**\Swagger\Client\Model\DesignComment**](../Model/\Swagger\Client\Model\DesignComment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignComment**](../Model/DesignComment.md)

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
> \Swagger\Client\Model\InlineResponse2002 portalMembersIdExistsGet($id)

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

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

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
> \Swagger\Client\Model\InlineResponse2002 portalMembersIdHead($id)

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

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

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

# **portalMembersIdRequesterDesignsCountGet**
> \Swagger\Client\Model\InlineResponse200 portalMembersIdRequesterDesignsCountGet($id, $where)

Counts requesterDesigns of PortalMember.

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
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalMembersIdRequesterDesignsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdRequesterDesignsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdRequesterDesignsDelete**
> portalMembersIdRequesterDesignsDelete($id)

Deletes all requesterDesigns of this model.

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

try {
    $api_instance->portalMembersIdRequesterDesignsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdRequesterDesignsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdRequesterDesignsFkDelete**
> portalMembersIdRequesterDesignsFkDelete($id, $fk)

Delete a related item by id for requesterDesigns.

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
$fk = "fk_example"; // string | Foreign key for requesterDesigns

try {
    $api_instance->portalMembersIdRequesterDesignsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdRequesterDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for requesterDesigns |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdRequesterDesignsFkGet**
> \Swagger\Client\Model\Design portalMembersIdRequesterDesignsFkGet($id, $fk)

Find a related item by id for requesterDesigns.

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
$fk = "fk_example"; // string | Foreign key for requesterDesigns

try {
    $result = $api_instance->portalMembersIdRequesterDesignsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdRequesterDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for requesterDesigns |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdRequesterDesignsFkPut**
> \Swagger\Client\Model\Design portalMembersIdRequesterDesignsFkPut($id, $fk, $data)

Update a related item by id for requesterDesigns.

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
$fk = "fk_example"; // string | Foreign key for requesterDesigns
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->portalMembersIdRequesterDesignsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdRequesterDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for requesterDesigns |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdRequesterDesignsGet**
> \Swagger\Client\Model\Design[] portalMembersIdRequesterDesignsGet($id, $filter)

Queries requesterDesigns of PortalMember.

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
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalMembersIdRequesterDesignsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdRequesterDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdRequesterDesignsPost**
> \Swagger\Client\Model\Design portalMembersIdRequesterDesignsPost($id, $data)

Creates a new instance in requesterDesigns of this model.

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
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->portalMembersIdRequesterDesignsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdRequesterDesignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdReviewedDesignsCountGet**
> \Swagger\Client\Model\InlineResponse200 portalMembersIdReviewedDesignsCountGet($id, $where)

Counts reviewedDesigns of PortalMember.

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
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->portalMembersIdReviewedDesignsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdReviewedDesignsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdReviewedDesignsDelete**
> portalMembersIdReviewedDesignsDelete($id)

Deletes all reviewedDesigns of this model.

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

try {
    $api_instance->portalMembersIdReviewedDesignsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdReviewedDesignsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdReviewedDesignsFkDelete**
> portalMembersIdReviewedDesignsFkDelete($id, $fk)

Delete a related item by id for reviewedDesigns.

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
$fk = "fk_example"; // string | Foreign key for reviewedDesigns

try {
    $api_instance->portalMembersIdReviewedDesignsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdReviewedDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for reviewedDesigns |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdReviewedDesignsFkGet**
> \Swagger\Client\Model\Design portalMembersIdReviewedDesignsFkGet($id, $fk)

Find a related item by id for reviewedDesigns.

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
$fk = "fk_example"; // string | Foreign key for reviewedDesigns

try {
    $result = $api_instance->portalMembersIdReviewedDesignsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdReviewedDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for reviewedDesigns |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdReviewedDesignsFkPut**
> \Swagger\Client\Model\Design portalMembersIdReviewedDesignsFkPut($id, $fk, $data)

Update a related item by id for reviewedDesigns.

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
$fk = "fk_example"; // string | Foreign key for reviewedDesigns
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->portalMembersIdReviewedDesignsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdReviewedDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for reviewedDesigns |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdReviewedDesignsGet**
> \Swagger\Client\Model\Design[] portalMembersIdReviewedDesignsGet($id, $filter)

Queries reviewedDesigns of PortalMember.

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
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->portalMembersIdReviewedDesignsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdReviewedDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdReviewedDesignsPost**
> \Swagger\Client\Model\Design portalMembersIdReviewedDesignsPost($id, $data)

Creates a new instance in reviewedDesigns of this model.

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
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->portalMembersIdReviewedDesignsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdReviewedDesignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdReviewedDesignsRelFkDelete**
> portalMembersIdReviewedDesignsRelFkDelete($id, $fk)

Remove the reviewedDesigns relation to an item by id.

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
$fk = "fk_example"; // string | Foreign key for reviewedDesigns

try {
    $api_instance->portalMembersIdReviewedDesignsRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdReviewedDesignsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for reviewedDesigns |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdReviewedDesignsRelFkHead**
> bool portalMembersIdReviewedDesignsRelFkHead($id, $fk)

Check the existence of reviewedDesigns relation to an item by id.

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
$fk = "fk_example"; // string | Foreign key for reviewedDesigns

try {
    $result = $api_instance->portalMembersIdReviewedDesignsRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdReviewedDesignsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for reviewedDesigns |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portalMembersIdReviewedDesignsRelFkPut**
> \Swagger\Client\Model\DesignReview portalMembersIdReviewedDesignsRelFkPut($id, $fk, $data)

Add a related item by id for reviewedDesigns.

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
$fk = "fk_example"; // string | Foreign key for reviewedDesigns
$data = new \Swagger\Client\Model\DesignReview(); // \Swagger\Client\Model\DesignReview | 

try {
    $result = $api_instance->portalMembersIdReviewedDesignsRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalMemberApi->portalMembersIdReviewedDesignsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PortalMember id |
 **fk** | **string**| Foreign key for reviewedDesigns |
 **data** | [**\Swagger\Client\Model\DesignReview**](../Model/\Swagger\Client\Model\DesignReview.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DesignReview**](../Model/DesignReview.md)

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
> \Swagger\Client\Model\InlineResponse2001 portalMembersUpdatePost($where, $data)

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

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

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

