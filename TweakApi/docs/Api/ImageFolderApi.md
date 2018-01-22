# Tweak\Api\ImageFolderApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**imageFoldersChangeStreamGet**](ImageFolderApi.md#imageFoldersChangeStreamGet) | **GET** /ImageFolders/change-stream | Create a change stream.
[**imageFoldersChangeStreamPost**](ImageFolderApi.md#imageFoldersChangeStreamPost) | **POST** /ImageFolders/change-stream | Create a change stream.
[**imageFoldersCountGet**](ImageFolderApi.md#imageFoldersCountGet) | **GET** /ImageFolders/count | Count instances of the model matched by where from the data source.
[**imageFoldersFindOneGet**](ImageFolderApi.md#imageFoldersFindOneGet) | **GET** /ImageFolders/findOne | Find first instance of the model matched by filter from the data source.
[**imageFoldersGet**](ImageFolderApi.md#imageFoldersGet) | **GET** /ImageFolders | Find all instances of the model matched by filter from the data source.
[**imageFoldersIdChildrenCountGet**](ImageFolderApi.md#imageFoldersIdChildrenCountGet) | **GET** /ImageFolders/{id}/children/count | Counts children of ImageFolder.
[**imageFoldersIdChildrenDelete**](ImageFolderApi.md#imageFoldersIdChildrenDelete) | **DELETE** /ImageFolders/{id}/children | Deletes all children of this model.
[**imageFoldersIdChildrenFkDelete**](ImageFolderApi.md#imageFoldersIdChildrenFkDelete) | **DELETE** /ImageFolders/{id}/children/{fk} | Delete a related item by id for children.
[**imageFoldersIdChildrenFkGet**](ImageFolderApi.md#imageFoldersIdChildrenFkGet) | **GET** /ImageFolders/{id}/children/{fk} | Find a related item by id for children.
[**imageFoldersIdChildrenFkPut**](ImageFolderApi.md#imageFoldersIdChildrenFkPut) | **PUT** /ImageFolders/{id}/children/{fk} | Update a related item by id for children.
[**imageFoldersIdChildrenGet**](ImageFolderApi.md#imageFoldersIdChildrenGet) | **GET** /ImageFolders/{id}/children | Queries children of ImageFolder.
[**imageFoldersIdChildrenPost**](ImageFolderApi.md#imageFoldersIdChildrenPost) | **POST** /ImageFolders/{id}/children | Creates a new instance in children of this model.
[**imageFoldersIdDelete**](ImageFolderApi.md#imageFoldersIdDelete) | **DELETE** /ImageFolders/{id} | Delete a model instance by {{id}} from the data source.
[**imageFoldersIdExistsGet**](ImageFolderApi.md#imageFoldersIdExistsGet) | **GET** /ImageFolders/{id}/exists | Check whether a model instance exists in the data source.
[**imageFoldersIdFolderMembersCountGet**](ImageFolderApi.md#imageFoldersIdFolderMembersCountGet) | **GET** /ImageFolders/{id}/folderMembers/count | Counts folderMembers of ImageFolder.
[**imageFoldersIdFolderMembersDelete**](ImageFolderApi.md#imageFoldersIdFolderMembersDelete) | **DELETE** /ImageFolders/{id}/folderMembers | Deletes all folderMembers of this model.
[**imageFoldersIdFolderMembersFkDelete**](ImageFolderApi.md#imageFoldersIdFolderMembersFkDelete) | **DELETE** /ImageFolders/{id}/folderMembers/{fk} | Delete a related item by id for folderMembers.
[**imageFoldersIdFolderMembersFkGet**](ImageFolderApi.md#imageFoldersIdFolderMembersFkGet) | **GET** /ImageFolders/{id}/folderMembers/{fk} | Find a related item by id for folderMembers.
[**imageFoldersIdFolderMembersFkPut**](ImageFolderApi.md#imageFoldersIdFolderMembersFkPut) | **PUT** /ImageFolders/{id}/folderMembers/{fk} | Update a related item by id for folderMembers.
[**imageFoldersIdFolderMembersGet**](ImageFolderApi.md#imageFoldersIdFolderMembersGet) | **GET** /ImageFolders/{id}/folderMembers | Queries folderMembers of ImageFolder.
[**imageFoldersIdFolderMembersPost**](ImageFolderApi.md#imageFoldersIdFolderMembersPost) | **POST** /ImageFolders/{id}/folderMembers | Creates a new instance in folderMembers of this model.
[**imageFoldersIdGet**](ImageFolderApi.md#imageFoldersIdGet) | **GET** /ImageFolders/{id} | Find a model instance by {{id}} from the data source.
[**imageFoldersIdHead**](ImageFolderApi.md#imageFoldersIdHead) | **HEAD** /ImageFolders/{id} | Check whether a model instance exists in the data source.
[**imageFoldersIdImagesCountGet**](ImageFolderApi.md#imageFoldersIdImagesCountGet) | **GET** /ImageFolders/{id}/images/count | Counts images of ImageFolder.
[**imageFoldersIdImagesDelete**](ImageFolderApi.md#imageFoldersIdImagesDelete) | **DELETE** /ImageFolders/{id}/images | Deletes all images of this model.
[**imageFoldersIdImagesFkDelete**](ImageFolderApi.md#imageFoldersIdImagesFkDelete) | **DELETE** /ImageFolders/{id}/images/{fk} | Delete a related item by id for images.
[**imageFoldersIdImagesFkGet**](ImageFolderApi.md#imageFoldersIdImagesFkGet) | **GET** /ImageFolders/{id}/images/{fk} | Find a related item by id for images.
[**imageFoldersIdImagesFkPut**](ImageFolderApi.md#imageFoldersIdImagesFkPut) | **PUT** /ImageFolders/{id}/images/{fk} | Update a related item by id for images.
[**imageFoldersIdImagesGet**](ImageFolderApi.md#imageFoldersIdImagesGet) | **GET** /ImageFolders/{id}/images | Queries images of ImageFolder.
[**imageFoldersIdImagesPost**](ImageFolderApi.md#imageFoldersIdImagesPost) | **POST** /ImageFolders/{id}/images | Creates a new instance in images of this model.
[**imageFoldersIdInvitationTicketsFkDelete**](ImageFolderApi.md#imageFoldersIdInvitationTicketsFkDelete) | **DELETE** /ImageFolders/{id}/invitationTickets/{fk} | Delete InvitationTickets for this ImageFolder
[**imageFoldersIdInvitationTicketsFkGet**](ImageFolderApi.md#imageFoldersIdInvitationTicketsFkGet) | **GET** /ImageFolders/{id}/invitationTickets/{fk} | Get InvitationTicket by Id for this ImageFolder
[**imageFoldersIdInvitationTicketsGet**](ImageFolderApi.md#imageFoldersIdInvitationTicketsGet) | **GET** /ImageFolders/{id}/invitationTickets | List InvitationTickets for this ImageFolder
[**imageFoldersIdMembersCountGet**](ImageFolderApi.md#imageFoldersIdMembersCountGet) | **GET** /ImageFolders/{id}/members/count | Counts members of ImageFolder.
[**imageFoldersIdMembersDelete**](ImageFolderApi.md#imageFoldersIdMembersDelete) | **DELETE** /ImageFolders/{id}/members | Deletes all members of this model.
[**imageFoldersIdMembersFkDelete**](ImageFolderApi.md#imageFoldersIdMembersFkDelete) | **DELETE** /ImageFolders/{id}/members/{fk} | Delete a related item by id for members.
[**imageFoldersIdMembersFkGet**](ImageFolderApi.md#imageFoldersIdMembersFkGet) | **GET** /ImageFolders/{id}/members/{fk} | Find a related item by id for members.
[**imageFoldersIdMembersFkPut**](ImageFolderApi.md#imageFoldersIdMembersFkPut) | **PUT** /ImageFolders/{id}/members/{fk} | Update a related item by id for members.
[**imageFoldersIdMembersGet**](ImageFolderApi.md#imageFoldersIdMembersGet) | **GET** /ImageFolders/{id}/members | Queries members of ImageFolder.
[**imageFoldersIdMembersPost**](ImageFolderApi.md#imageFoldersIdMembersPost) | **POST** /ImageFolders/{id}/members | Creates a new instance in members of this model.
[**imageFoldersIdMembersRelFkDelete**](ImageFolderApi.md#imageFoldersIdMembersRelFkDelete) | **DELETE** /ImageFolders/{id}/members/rel/{fk} | Remove the members relation to an item by id.
[**imageFoldersIdMembersRelFkHead**](ImageFolderApi.md#imageFoldersIdMembersRelFkHead) | **HEAD** /ImageFolders/{id}/members/rel/{fk} | Check the existence of members relation to an item by id.
[**imageFoldersIdMembersRelFkPut**](ImageFolderApi.md#imageFoldersIdMembersRelFkPut) | **PUT** /ImageFolders/{id}/members/rel/{fk} | Add a related item by id for members.
[**imageFoldersIdParentGet**](ImageFolderApi.md#imageFoldersIdParentGet) | **GET** /ImageFolders/{id}/parent | Fetches belongsTo relation parent.
[**imageFoldersIdPatch**](ImageFolderApi.md#imageFoldersIdPatch) | **PATCH** /ImageFolders/{id} | Patch attributes for a model instance and persist it into the data source.
[**imageFoldersIdPortalsCountGet**](ImageFolderApi.md#imageFoldersIdPortalsCountGet) | **GET** /ImageFolders/{id}/portals/count | Counts portals of ImageFolder.
[**imageFoldersIdPortalsDelete**](ImageFolderApi.md#imageFoldersIdPortalsDelete) | **DELETE** /ImageFolders/{id}/portals | Deletes all portals of this model.
[**imageFoldersIdPortalsFkDelete**](ImageFolderApi.md#imageFoldersIdPortalsFkDelete) | **DELETE** /ImageFolders/{id}/portals/{fk} | Delete a related item by id for portals.
[**imageFoldersIdPortalsFkGet**](ImageFolderApi.md#imageFoldersIdPortalsFkGet) | **GET** /ImageFolders/{id}/portals/{fk} | Find a related item by id for portals.
[**imageFoldersIdPortalsFkPut**](ImageFolderApi.md#imageFoldersIdPortalsFkPut) | **PUT** /ImageFolders/{id}/portals/{fk} | Update a related item by id for portals.
[**imageFoldersIdPortalsGet**](ImageFolderApi.md#imageFoldersIdPortalsGet) | **GET** /ImageFolders/{id}/portals | Queries portals of ImageFolder.
[**imageFoldersIdPortalsPost**](ImageFolderApi.md#imageFoldersIdPortalsPost) | **POST** /ImageFolders/{id}/portals | Creates a new instance in portals of this model.
[**imageFoldersIdPortalsRelFkDelete**](ImageFolderApi.md#imageFoldersIdPortalsRelFkDelete) | **DELETE** /ImageFolders/{id}/portals/rel/{fk} | Remove the portals relation to an item by id.
[**imageFoldersIdPortalsRelFkHead**](ImageFolderApi.md#imageFoldersIdPortalsRelFkHead) | **HEAD** /ImageFolders/{id}/portals/rel/{fk} | Check the existence of portals relation to an item by id.
[**imageFoldersIdPortalsRelFkPut**](ImageFolderApi.md#imageFoldersIdPortalsRelFkPut) | **PUT** /ImageFolders/{id}/portals/rel/{fk} | Add a related item by id for portals.
[**imageFoldersIdPut**](ImageFolderApi.md#imageFoldersIdPut) | **PUT** /ImageFolders/{id} | Replace attributes for a model instance and persist it into the data source.
[**imageFoldersIdReplacePost**](ImageFolderApi.md#imageFoldersIdReplacePost) | **POST** /ImageFolders/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**imageFoldersIdTeamGet**](ImageFolderApi.md#imageFoldersIdTeamGet) | **GET** /ImageFolders/{id}/team | Fetches belongsTo relation team.
[**imageFoldersPatch**](ImageFolderApi.md#imageFoldersPatch) | **PATCH** /ImageFolders | Patch an existing model instance or insert a new one into the data source.
[**imageFoldersPost**](ImageFolderApi.md#imageFoldersPost) | **POST** /ImageFolders | Create a new instance of the model and persist it into the data source.
[**imageFoldersPut**](ImageFolderApi.md#imageFoldersPut) | **PUT** /ImageFolders | Replace an existing model instance or insert a new one into the data source.
[**imageFoldersReplaceOrCreatePost**](ImageFolderApi.md#imageFoldersReplaceOrCreatePost) | **POST** /ImageFolders/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**imageFoldersUpdatePost**](ImageFolderApi.md#imageFoldersUpdatePost) | **POST** /ImageFolders/update | Update instances of the model matched by {{where}} from the data source.
[**imageFoldersUpsertWithWherePost**](ImageFolderApi.md#imageFoldersUpsertWithWherePost) | **POST** /ImageFolders/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **imageFoldersChangeStreamGet**
> \SplFileObject imageFoldersChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->imageFoldersChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **imageFoldersChangeStreamPost**
> \SplFileObject imageFoldersChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->imageFoldersChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **imageFoldersCountGet**
> \Swagger\Client\Model\InlineResponse2001 imageFoldersCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->imageFoldersCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersCountGet: ', $e->getMessage(), PHP_EOL;
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

# **imageFoldersFindOneGet**
> \Swagger\Client\Model\ImageFolder imageFoldersFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->imageFoldersFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersGet**
> \Swagger\Client\Model\ImageFolder[] imageFoldersGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->imageFoldersGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder[]**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdChildrenCountGet**
> \Swagger\Client\Model\InlineResponse2001 imageFoldersIdChildrenCountGet($id, $where)

Counts children of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->imageFoldersIdChildrenCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdChildrenCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdChildrenDelete**
> imageFoldersIdChildrenDelete($id)

Deletes all children of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id

try {
    $api_instance->imageFoldersIdChildrenDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdChildrenDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdChildrenFkDelete**
> imageFoldersIdChildrenFkDelete($id, $fk)

Delete a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for children

try {
    $api_instance->imageFoldersIdChildrenFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdChildrenFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for children |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdChildrenFkGet**
> \Swagger\Client\Model\ImageFolder imageFoldersIdChildrenFkGet($id, $fk)

Find a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for children

try {
    $result = $api_instance->imageFoldersIdChildrenFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdChildrenFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for children |

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdChildrenFkPut**
> \Swagger\Client\Model\ImageFolder imageFoldersIdChildrenFkPut($id, $fk, $data)

Update a related item by id for children.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for children
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->imageFoldersIdChildrenFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdChildrenFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for children |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdChildrenGet**
> \Swagger\Client\Model\ImageFolder[] imageFoldersIdChildrenGet($id, $filter)

Queries children of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->imageFoldersIdChildrenGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdChildrenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder[]**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdChildrenPost**
> \Swagger\Client\Model\ImageFolder imageFoldersIdChildrenPost($id, $data)

Creates a new instance in children of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | 

try {
    $result = $api_instance->imageFoldersIdChildrenPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdChildrenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdDelete**
> object imageFoldersIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->imageFoldersIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **imageFoldersIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 imageFoldersIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->imageFoldersIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **imageFoldersIdFolderMembersCountGet**
> \Swagger\Client\Model\InlineResponse2001 imageFoldersIdFolderMembersCountGet($id, $where)

Counts folderMembers of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->imageFoldersIdFolderMembersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdFolderMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdFolderMembersDelete**
> imageFoldersIdFolderMembersDelete($id)

Deletes all folderMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id

try {
    $api_instance->imageFoldersIdFolderMembersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdFolderMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdFolderMembersFkDelete**
> imageFoldersIdFolderMembersFkDelete($id, $fk)

Delete a related item by id for folderMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for folderMembers

try {
    $api_instance->imageFoldersIdFolderMembersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdFolderMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for folderMembers |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdFolderMembersFkGet**
> \Swagger\Client\Model\ImageFolderMember imageFoldersIdFolderMembersFkGet($id, $fk)

Find a related item by id for folderMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for folderMembers

try {
    $result = $api_instance->imageFoldersIdFolderMembersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdFolderMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for folderMembers |

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdFolderMembersFkPut**
> \Swagger\Client\Model\ImageFolderMember imageFoldersIdFolderMembersFkPut($id, $fk, $data)

Update a related item by id for folderMembers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for folderMembers
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | 

try {
    $result = $api_instance->imageFoldersIdFolderMembersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdFolderMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for folderMembers |
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdFolderMembersGet**
> \Swagger\Client\Model\ImageFolderMember[] imageFoldersIdFolderMembersGet($id, $filter)

Queries folderMembers of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->imageFoldersIdFolderMembersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdFolderMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember[]**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdFolderMembersPost**
> \Swagger\Client\Model\ImageFolderMember imageFoldersIdFolderMembersPost($id, $data)

Creates a new instance in folderMembers of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | 

try {
    $result = $api_instance->imageFoldersIdFolderMembersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdFolderMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdGet**
> \Swagger\Client\Model\ImageFolder imageFoldersIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->imageFoldersIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdHead**
> \Swagger\Client\Model\InlineResponse2002 imageFoldersIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->imageFoldersIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdHead: ', $e->getMessage(), PHP_EOL;
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

# **imageFoldersIdImagesCountGet**
> \Swagger\Client\Model\InlineResponse2001 imageFoldersIdImagesCountGet($id, $where)

Counts images of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->imageFoldersIdImagesCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdImagesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdImagesDelete**
> imageFoldersIdImagesDelete($id)

Deletes all images of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id

try {
    $api_instance->imageFoldersIdImagesDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdImagesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdImagesFkDelete**
> imageFoldersIdImagesFkDelete($id, $fk)

Delete a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for images

try {
    $api_instance->imageFoldersIdImagesFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdImagesFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for images |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdImagesFkGet**
> \Swagger\Client\Model\Image imageFoldersIdImagesFkGet($id, $fk)

Find a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for images

try {
    $result = $api_instance->imageFoldersIdImagesFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdImagesFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for images |

### Return type

[**\Swagger\Client\Model\Image**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdImagesFkPut**
> \Swagger\Client\Model\Image imageFoldersIdImagesFkPut($id, $fk, $data)

Update a related item by id for images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for images
$data = new \Swagger\Client\Model\Image(); // \Swagger\Client\Model\Image | 

try {
    $result = $api_instance->imageFoldersIdImagesFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdImagesFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for images |
 **data** | [**\Swagger\Client\Model\Image**](../Model/\Swagger\Client\Model\Image.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Image**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdImagesGet**
> \Swagger\Client\Model\Image[] imageFoldersIdImagesGet($id, $filter)

Queries images of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->imageFoldersIdImagesGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdImagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Image[]**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdImagesPost**
> \Swagger\Client\Model\Image imageFoldersIdImagesPost($id, $data)

Creates a new instance in images of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$data = new \Swagger\Client\Model\Image(); // \Swagger\Client\Model\Image | 

try {
    $result = $api_instance->imageFoldersIdImagesPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdImagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **data** | [**\Swagger\Client\Model\Image**](../Model/\Swagger\Client\Model\Image.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Image**](../Model/Image.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdInvitationTicketsFkDelete**
> object imageFoldersIdInvitationTicketsFkDelete($id, $id2, $fk)

Delete InvitationTickets for this ImageFolder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$id2 = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | InvitationTicket id

try {
    $result = $api_instance->imageFoldersIdInvitationTicketsFkDelete($id, $id2, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdInvitationTicketsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **id2** | **string**| ImageFolder id |
 **fk** | **string**| InvitationTicket id |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdInvitationTicketsFkGet**
> \Swagger\Client\Model\InvitationTicket imageFoldersIdInvitationTicketsFkGet($id, $id2, $fk, $filter)

Get InvitationTicket by Id for this ImageFolder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$id2 = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | InvitationTicket id
$filter = "filter_example"; // string | Only include changes that match this filter

try {
    $result = $api_instance->imageFoldersIdInvitationTicketsFkGet($id, $id2, $fk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdInvitationTicketsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **id2** | **string**| ImageFolder id |
 **fk** | **string**| InvitationTicket id |
 **filter** | **string**| Only include changes that match this filter | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdInvitationTicketsGet**
> \Swagger\Client\Model\InvitationTicket[] imageFoldersIdInvitationTicketsGet($id, $id2, $filter)

List InvitationTickets for this ImageFolder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$id2 = "id_example"; // string | ImageFolder id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->imageFoldersIdInvitationTicketsGet($id, $id2, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdInvitationTicketsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **id2** | **string**| ImageFolder id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket[]**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdMembersCountGet**
> \Swagger\Client\Model\InlineResponse2001 imageFoldersIdMembersCountGet($id, $where)

Counts members of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->imageFoldersIdMembersCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdMembersDelete**
> imageFoldersIdMembersDelete($id)

Deletes all members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id

try {
    $api_instance->imageFoldersIdMembersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdMembersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdMembersFkDelete**
> imageFoldersIdMembersFkDelete($id, $fk)

Delete a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->imageFoldersIdMembersFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdMembersFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdMembersFkGet**
> \Swagger\Client\Model\TeamMember imageFoldersIdMembersFkGet($id, $fk)

Find a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->imageFoldersIdMembersFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdMembersFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for members |

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdMembersFkPut**
> \Swagger\Client\Model\TeamMember imageFoldersIdMembersFkPut($id, $fk, $data)

Update a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->imageFoldersIdMembersFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdMembersFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for members |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdMembersGet**
> \Swagger\Client\Model\TeamMember[] imageFoldersIdMembersGet($id, $filter)

Queries members of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->imageFoldersIdMembersGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdMembersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember[]**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdMembersPost**
> \Swagger\Client\Model\TeamMember imageFoldersIdMembersPost($id, $data)

Creates a new instance in members of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$data = new \Swagger\Client\Model\TeamMember(); // \Swagger\Client\Model\TeamMember | 

try {
    $result = $api_instance->imageFoldersIdMembersPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **data** | [**\Swagger\Client\Model\TeamMember**](../Model/\Swagger\Client\Model\TeamMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdMembersRelFkDelete**
> imageFoldersIdMembersRelFkDelete($id, $fk)

Remove the members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for members

try {
    $api_instance->imageFoldersIdMembersRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdMembersRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for members |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdMembersRelFkHead**
> bool imageFoldersIdMembersRelFkHead($id, $fk)

Check the existence of members relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for members

try {
    $result = $api_instance->imageFoldersIdMembersRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdMembersRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for members |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdMembersRelFkPut**
> \Swagger\Client\Model\ImageFolderMember imageFoldersIdMembersRelFkPut($id, $fk, $data)

Add a related item by id for members.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for members
$data = new \Swagger\Client\Model\ImageFolderMember(); // \Swagger\Client\Model\ImageFolderMember | 

try {
    $result = $api_instance->imageFoldersIdMembersRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdMembersRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for members |
 **data** | [**\Swagger\Client\Model\ImageFolderMember**](../Model/\Swagger\Client\Model\ImageFolderMember.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolderMember**](../Model/ImageFolderMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdParentGet**
> \Swagger\Client\Model\ImageFolder imageFoldersIdParentGet($id, $refresh)

Fetches belongsTo relation parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$refresh = true; // bool | 

try {
    $result = $api_instance->imageFoldersIdParentGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdParentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdPatch**
> \Swagger\Client\Model\ImageFolder imageFoldersIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | An object of model property name/value pairs

try {
    $result = $api_instance->imageFoldersIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdPortalsCountGet**
> \Swagger\Client\Model\InlineResponse2001 imageFoldersIdPortalsCountGet($id, $where)

Counts portals of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->imageFoldersIdPortalsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdPortalsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdPortalsDelete**
> imageFoldersIdPortalsDelete($id)

Deletes all portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id

try {
    $api_instance->imageFoldersIdPortalsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdPortalsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdPortalsFkDelete**
> imageFoldersIdPortalsFkDelete($id, $fk)

Delete a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for portals

try {
    $api_instance->imageFoldersIdPortalsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdPortalsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for portals |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdPortalsFkGet**
> \Swagger\Client\Model\Portal imageFoldersIdPortalsFkGet($id, $fk)

Find a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for portals

try {
    $result = $api_instance->imageFoldersIdPortalsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdPortalsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for portals |

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdPortalsFkPut**
> \Swagger\Client\Model\Portal imageFoldersIdPortalsFkPut($id, $fk, $data)

Update a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for portals
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->imageFoldersIdPortalsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdPortalsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for portals |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdPortalsGet**
> \Swagger\Client\Model\Portal[] imageFoldersIdPortalsGet($id, $filter)

Queries portals of ImageFolder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->imageFoldersIdPortalsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdPortalsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal[]**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdPortalsPost**
> \Swagger\Client\Model\Portal imageFoldersIdPortalsPost($id, $data)

Creates a new instance in portals of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$data = new \Swagger\Client\Model\Portal(); // \Swagger\Client\Model\Portal | 

try {
    $result = $api_instance->imageFoldersIdPortalsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdPortalsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **data** | [**\Swagger\Client\Model\Portal**](../Model/\Swagger\Client\Model\Portal.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Portal**](../Model/Portal.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdPortalsRelFkDelete**
> imageFoldersIdPortalsRelFkDelete($id, $fk)

Remove the portals relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for portals

try {
    $api_instance->imageFoldersIdPortalsRelFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdPortalsRelFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for portals |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdPortalsRelFkHead**
> bool imageFoldersIdPortalsRelFkHead($id, $fk)

Check the existence of portals relation to an item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for portals

try {
    $result = $api_instance->imageFoldersIdPortalsRelFkHead($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdPortalsRelFkHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for portals |

### Return type

**bool**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdPortalsRelFkPut**
> \Swagger\Client\Model\PortalImageFolder imageFoldersIdPortalsRelFkPut($id, $fk, $data)

Add a related item by id for portals.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$fk = "fk_example"; // string | Foreign key for portals
$data = new \Swagger\Client\Model\PortalImageFolder(); // \Swagger\Client\Model\PortalImageFolder | 

try {
    $result = $api_instance->imageFoldersIdPortalsRelFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdPortalsRelFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **fk** | **string**| Foreign key for portals |
 **data** | [**\Swagger\Client\Model\PortalImageFolder**](../Model/\Swagger\Client\Model\PortalImageFolder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PortalImageFolder**](../Model/PortalImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdPut**
> \Swagger\Client\Model\ImageFolder imageFoldersIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | Model instance data

try {
    $result = $api_instance->imageFoldersIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdReplacePost**
> \Swagger\Client\Model\ImageFolder imageFoldersIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | Model instance data

try {
    $result = $api_instance->imageFoldersIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersIdTeamGet**
> \Swagger\Client\Model\Team imageFoldersIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$id = "id_example"; // string | ImageFolder id
$refresh = true; // bool | 

try {
    $result = $api_instance->imageFoldersIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ImageFolder id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersPatch**
> \Swagger\Client\Model\ImageFolder imageFoldersPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | Model instance data

try {
    $result = $api_instance->imageFoldersPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersPost**
> \Swagger\Client\Model\ImageFolder imageFoldersPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | Model instance data

try {
    $result = $api_instance->imageFoldersPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersPut**
> \Swagger\Client\Model\ImageFolder imageFoldersPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | Model instance data

try {
    $result = $api_instance->imageFoldersPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersReplaceOrCreatePost**
> \Swagger\Client\Model\ImageFolder imageFoldersReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | Model instance data

try {
    $result = $api_instance->imageFoldersReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersUpdatePost**
> \Swagger\Client\Model\InlineResponse2003 imageFoldersUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | An object of model property name/value pairs

try {
    $result = $api_instance->imageFoldersUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageFoldersUpsertWithWherePost**
> \Swagger\Client\Model\ImageFolder imageFoldersUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\ImageFolderApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\ImageFolder(); // \Swagger\Client\Model\ImageFolder | An object of model property name/value pairs

try {
    $result = $api_instance->imageFoldersUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageFolderApi->imageFoldersUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\ImageFolder**](../Model/\Swagger\Client\Model\ImageFolder.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\ImageFolder**](../Model/ImageFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

