# Tweak\Api\InvitationTicketApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invitationTicketsChangeStreamGet**](InvitationTicketApi.md#invitationTicketsChangeStreamGet) | **GET** /InvitationTickets/change-stream | Create a change stream.
[**invitationTicketsChangeStreamPost**](InvitationTicketApi.md#invitationTicketsChangeStreamPost) | **POST** /InvitationTickets/change-stream | Create a change stream.
[**invitationTicketsCountGet**](InvitationTicketApi.md#invitationTicketsCountGet) | **GET** /InvitationTickets/count | Count instances of the model matched by where from the data source.
[**invitationTicketsFindOneGet**](InvitationTicketApi.md#invitationTicketsFindOneGet) | **GET** /InvitationTickets/findOne | Find first instance of the model matched by filter from the data source.
[**invitationTicketsGet**](InvitationTicketApi.md#invitationTicketsGet) | **GET** /InvitationTickets | Find all instances of the model matched by filter from the data source.
[**invitationTicketsIdDelete**](InvitationTicketApi.md#invitationTicketsIdDelete) | **DELETE** /InvitationTickets/{id} | Delete a model instance by {{id}} from the data source.
[**invitationTicketsIdExistsGet**](InvitationTicketApi.md#invitationTicketsIdExistsGet) | **GET** /InvitationTickets/{id}/exists | Check whether a model instance exists in the data source.
[**invitationTicketsIdGet**](InvitationTicketApi.md#invitationTicketsIdGet) | **GET** /InvitationTickets/{id} | Find a model instance by {{id}} from the data source.
[**invitationTicketsIdHead**](InvitationTicketApi.md#invitationTicketsIdHead) | **HEAD** /InvitationTickets/{id} | Check whether a model instance exists in the data source.
[**invitationTicketsIdInviteeGet**](InvitationTicketApi.md#invitationTicketsIdInviteeGet) | **GET** /InvitationTickets/{id}/invitee | Fetches belongsTo relation invitee.
[**invitationTicketsIdInviterGet**](InvitationTicketApi.md#invitationTicketsIdInviterGet) | **GET** /InvitationTickets/{id}/inviter | Fetches belongsTo relation inviter.
[**invitationTicketsIdPatch**](InvitationTicketApi.md#invitationTicketsIdPatch) | **PATCH** /InvitationTickets/{id} | Patch attributes for a model instance and persist it into the data source.
[**invitationTicketsIdPut**](InvitationTicketApi.md#invitationTicketsIdPut) | **PUT** /InvitationTickets/{id} | Replace attributes for a model instance and persist it into the data source.
[**invitationTicketsIdReplacePost**](InvitationTicketApi.md#invitationTicketsIdReplacePost) | **POST** /InvitationTickets/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**invitationTicketsPatch**](InvitationTicketApi.md#invitationTicketsPatch) | **PATCH** /InvitationTickets | Patch an existing model instance or insert a new one into the data source.
[**invitationTicketsPost**](InvitationTicketApi.md#invitationTicketsPost) | **POST** /InvitationTickets | Create a new instance of the model and persist it into the data source.
[**invitationTicketsPut**](InvitationTicketApi.md#invitationTicketsPut) | **PUT** /InvitationTickets | Replace an existing model instance or insert a new one into the data source.
[**invitationTicketsReplaceOrCreatePost**](InvitationTicketApi.md#invitationTicketsReplaceOrCreatePost) | **POST** /InvitationTickets/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**invitationTicketsUpdatePost**](InvitationTicketApi.md#invitationTicketsUpdatePost) | **POST** /InvitationTickets/update | Update instances of the model matched by {{where}} from the data source.
[**invitationTicketsUpsertWithWherePost**](InvitationTicketApi.md#invitationTicketsUpsertWithWherePost) | **POST** /InvitationTickets/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **invitationTicketsChangeStreamGet**
> \SplFileObject invitationTicketsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->invitationTicketsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **invitationTicketsChangeStreamPost**
> \SplFileObject invitationTicketsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->invitationTicketsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **invitationTicketsCountGet**
> \Swagger\Client\Model\InlineResponse200 invitationTicketsCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->invitationTicketsCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **invitationTicketsFindOneGet**
> \Swagger\Client\Model\InvitationTicket invitationTicketsFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->invitationTicketsFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitationTicketsGet**
> \Swagger\Client\Model\InvitationTicket[] invitationTicketsGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->invitationTicketsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket[]**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitationTicketsIdDelete**
> object invitationTicketsIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->invitationTicketsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **invitationTicketsIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 invitationTicketsIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->invitationTicketsIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **invitationTicketsIdGet**
> \Swagger\Client\Model\InvitationTicket invitationTicketsIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->invitationTicketsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitationTicketsIdHead**
> \Swagger\Client\Model\InlineResponse2002 invitationTicketsIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->invitationTicketsIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsIdHead: ', $e->getMessage(), PHP_EOL;
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

# **invitationTicketsIdInviteeGet**
> \Swagger\Client\Model\Customer invitationTicketsIdInviteeGet($id, $refresh)

Fetches belongsTo relation invitee.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$id = "id_example"; // string | InvitationTicket id
$refresh = true; // bool | 

try {
    $result = $api_instance->invitationTicketsIdInviteeGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsIdInviteeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| InvitationTicket id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitationTicketsIdInviterGet**
> \Swagger\Client\Model\TeamMember invitationTicketsIdInviterGet($id, $refresh)

Fetches belongsTo relation inviter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$id = "id_example"; // string | InvitationTicket id
$refresh = true; // bool | 

try {
    $result = $api_instance->invitationTicketsIdInviterGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsIdInviterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| InvitationTicket id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitationTicketsIdPatch**
> \Swagger\Client\Model\InvitationTicket invitationTicketsIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$id = "id_example"; // string | InvitationTicket id
$data = new \Swagger\Client\Model\InvitationTicket(); // \Swagger\Client\Model\InvitationTicket | An object of model property name/value pairs

try {
    $result = $api_instance->invitationTicketsIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| InvitationTicket id |
 **data** | [**\Swagger\Client\Model\InvitationTicket**](../Model/\Swagger\Client\Model\InvitationTicket.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitationTicketsIdPut**
> \Swagger\Client\Model\InvitationTicket invitationTicketsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\InvitationTicket(); // \Swagger\Client\Model\InvitationTicket | Model instance data

try {
    $result = $api_instance->invitationTicketsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\InvitationTicket**](../Model/\Swagger\Client\Model\InvitationTicket.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitationTicketsIdReplacePost**
> \Swagger\Client\Model\InvitationTicket invitationTicketsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\InvitationTicket(); // \Swagger\Client\Model\InvitationTicket | Model instance data

try {
    $result = $api_instance->invitationTicketsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\InvitationTicket**](../Model/\Swagger\Client\Model\InvitationTicket.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitationTicketsPatch**
> \Swagger\Client\Model\InvitationTicket invitationTicketsPatch($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$data = new \Swagger\Client\Model\InvitationTicket(); // \Swagger\Client\Model\InvitationTicket | Model instance data

try {
    $result = $api_instance->invitationTicketsPatch($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\InvitationTicket**](../Model/\Swagger\Client\Model\InvitationTicket.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitationTicketsPost**
> \Swagger\Client\Model\InvitationTicket invitationTicketsPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$data = new \Swagger\Client\Model\InvitationTicket(); // \Swagger\Client\Model\InvitationTicket | Model instance data

try {
    $result = $api_instance->invitationTicketsPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\InvitationTicket**](../Model/\Swagger\Client\Model\InvitationTicket.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitationTicketsPut**
> \Swagger\Client\Model\InvitationTicket invitationTicketsPut($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$data = new \Swagger\Client\Model\InvitationTicket(); // \Swagger\Client\Model\InvitationTicket | Model instance data

try {
    $result = $api_instance->invitationTicketsPut($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\InvitationTicket**](../Model/\Swagger\Client\Model\InvitationTicket.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitationTicketsReplaceOrCreatePost**
> \Swagger\Client\Model\InvitationTicket invitationTicketsReplaceOrCreatePost($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$data = new \Swagger\Client\Model\InvitationTicket(); // \Swagger\Client\Model\InvitationTicket | Model instance data

try {
    $result = $api_instance->invitationTicketsReplaceOrCreatePost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsReplaceOrCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\InvitationTicket**](../Model/\Swagger\Client\Model\InvitationTicket.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitationTicketsUpdatePost**
> \Swagger\Client\Model\InlineResponse2001 invitationTicketsUpdatePost($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\InvitationTicket(); // \Swagger\Client\Model\InvitationTicket | An object of model property name/value pairs

try {
    $result = $api_instance->invitationTicketsUpdatePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\InvitationTicket**](../Model/\Swagger\Client\Model\InvitationTicket.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invitationTicketsUpsertWithWherePost**
> \Swagger\Client\Model\InvitationTicket invitationTicketsUpsertWithWherePost($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\InvitationTicketApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\InvitationTicket(); // \Swagger\Client\Model\InvitationTicket | An object of model property name/value pairs

try {
    $result = $api_instance->invitationTicketsUpsertWithWherePost($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationTicketApi->invitationTicketsUpsertWithWherePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\InvitationTicket**](../Model/\Swagger\Client\Model\InvitationTicket.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InvitationTicket**](../Model/InvitationTicket.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
