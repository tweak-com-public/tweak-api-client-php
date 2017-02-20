# Tweak\Api\UserApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userConfirm**](UserApi.md#userConfirm) | **GET** /Users/confirm | Confirm a user registration with email verification token.
[**userCount**](UserApi.md#userCount) | **GET** /Users/count | Count instances of the model matched by where from the data source.
[**userCreate**](UserApi.md#userCreate) | **POST** /Users | Create a new instance of the model and persist it into the data source.
[**userCreateChangeStreamGetUsersChangeStream**](UserApi.md#userCreateChangeStreamGetUsersChangeStream) | **GET** /Users/change-stream | Create a change stream.
[**userCreateChangeStreamPostUsersChangeStream**](UserApi.md#userCreateChangeStreamPostUsersChangeStream) | **POST** /Users/change-stream | Create a change stream.
[**userDeleteById**](UserApi.md#userDeleteById) | **DELETE** /Users/{id} | Delete a model instance by {{id}} from the data source.
[**userExistsGetUsersidExists**](UserApi.md#userExistsGetUsersidExists) | **GET** /Users/{id}/exists | Check whether a model instance exists in the data source.
[**userExistsHeadUsersid**](UserApi.md#userExistsHeadUsersid) | **HEAD** /Users/{id} | Check whether a model instance exists in the data source.
[**userFind**](UserApi.md#userFind) | **GET** /Users | Find all instances of the model matched by filter from the data source.
[**userFindById**](UserApi.md#userFindById) | **GET** /Users/{id} | Find a model instance by {{id}} from the data source.
[**userFindOne**](UserApi.md#userFindOne) | **GET** /Users/findOne | Find first instance of the model matched by filter from the data source.
[**userLogin**](UserApi.md#userLogin) | **POST** /Users/login | Login a user with username/email and password.
[**userLogout**](UserApi.md#userLogout) | **POST** /Users/logout | Logout a user with access token.
[**userPrototypeCountAccessTokens**](UserApi.md#userPrototypeCountAccessTokens) | **GET** /Users/{id}/accessTokens/count | Counts accessTokens of User.
[**userPrototypeCreateAccessTokens**](UserApi.md#userPrototypeCreateAccessTokens) | **POST** /Users/{id}/accessTokens | Creates a new instance in accessTokens of this model.
[**userPrototypeDeleteAccessTokens**](UserApi.md#userPrototypeDeleteAccessTokens) | **DELETE** /Users/{id}/accessTokens | Deletes all accessTokens of this model.
[**userPrototypeDestroyByIdAccessTokens**](UserApi.md#userPrototypeDestroyByIdAccessTokens) | **DELETE** /Users/{id}/accessTokens/{fk} | Delete a related item by id for accessTokens.
[**userPrototypeFindByIdAccessTokens**](UserApi.md#userPrototypeFindByIdAccessTokens) | **GET** /Users/{id}/accessTokens/{fk} | Find a related item by id for accessTokens.
[**userPrototypeGetAccessTokens**](UserApi.md#userPrototypeGetAccessTokens) | **GET** /Users/{id}/accessTokens | Queries accessTokens of User.
[**userPrototypeUpdateAttributesPatchUsersid**](UserApi.md#userPrototypeUpdateAttributesPatchUsersid) | **PATCH** /Users/{id} | Patch attributes for a model instance and persist it into the data source.
[**userPrototypeUpdateAttributesPutUsersid**](UserApi.md#userPrototypeUpdateAttributesPutUsersid) | **PUT** /Users/{id} | Patch attributes for a model instance and persist it into the data source.
[**userPrototypeUpdateByIdAccessTokens**](UserApi.md#userPrototypeUpdateByIdAccessTokens) | **PUT** /Users/{id}/accessTokens/{fk} | Update a related item by id for accessTokens.
[**userReplaceById**](UserApi.md#userReplaceById) | **POST** /Users/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**userReplaceOrCreate**](UserApi.md#userReplaceOrCreate) | **POST** /Users/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**userResetPassword**](UserApi.md#userResetPassword) | **POST** /Users/reset | Reset password for a user with email.
[**userUpdateAll**](UserApi.md#userUpdateAll) | **POST** /Users/update | Update instances of the model matched by {{where}} from the data source.
[**userUpsertPatchUsers**](UserApi.md#userUpsertPatchUsers) | **PATCH** /Users | Patch an existing model instance or insert a new one into the data source.
[**userUpsertPutUsers**](UserApi.md#userUpsertPutUsers) | **PUT** /Users | Patch an existing model instance or insert a new one into the data source.
[**userUpsertWithWhere**](UserApi.md#userUpsertWithWhere) | **POST** /Users/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **userConfirm**
> userConfirm($uid, $token, $redirect)

Confirm a user registration with email verification token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$uid = "uid_example"; // string | 
$token = "token_example"; // string | 
$redirect = "redirect_example"; // string | 

try {
    $api_instance->userConfirm($uid, $token, $redirect);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**|  |
 **token** | **string**|  |
 **redirect** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCount**
> \Swagger\Client\Model\InlineResponse200 userCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->userCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCount: ', $e->getMessage(), PHP_EOL;
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

# **userCreate**
> \Swagger\Client\Model\User userCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$data = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | Model instance data

try {
    $result = $api_instance->userCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\User**](../Model/\Swagger\Client\Model\User.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userCreateChangeStreamGetUsersChangeStream**
> \SplFileObject userCreateChangeStreamGetUsersChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->userCreateChangeStreamGetUsersChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCreateChangeStreamGetUsersChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **userCreateChangeStreamPostUsersChangeStream**
> \SplFileObject userCreateChangeStreamPostUsersChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->userCreateChangeStreamPostUsersChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userCreateChangeStreamPostUsersChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **userDeleteById**
> object userDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->userDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **userExistsGetUsersidExists**
> \Swagger\Client\Model\InlineResponse2002 userExistsGetUsersidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->userExistsGetUsersidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userExistsGetUsersidExists: ', $e->getMessage(), PHP_EOL;
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

# **userExistsHeadUsersid**
> \Swagger\Client\Model\InlineResponse2002 userExistsHeadUsersid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->userExistsHeadUsersid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userExistsHeadUsersid: ', $e->getMessage(), PHP_EOL;
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

# **userFind**
> \Swagger\Client\Model\User[] userFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->userFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Swagger\Client\Model\User[]**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userFindById**
> \Swagger\Client\Model\User userFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include

try {
    $result = $api_instance->userFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userFindOne**
> \Swagger\Client\Model\User userFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->userFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userLogin**
> object userLogin($credentials, $include)

Login a user with username/email and password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$credentials = NULL; // object | 
$include = "include_example"; // string | Related objects to include in the response. See the description of return value for more details.

try {
    $result = $api_instance->userLogin($credentials, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials** | **object**|  |
 **include** | **string**| Related objects to include in the response. See the description of return value for more details. | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userLogout**
> userLogout()

Logout a user with access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();

try {
    $api_instance->userLogout();
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userLogout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeCountAccessTokens**
> \Swagger\Client\Model\InlineResponse200 userPrototypeCountAccessTokens($id, $where)

Counts accessTokens of User.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$id = "id_example"; // string | User id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->userPrototypeCountAccessTokens($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeCountAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeCreateAccessTokens**
> \Swagger\Client\Model\AccessToken userPrototypeCreateAccessTokens($id, $data)

Creates a new instance in accessTokens of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$id = "id_example"; // string | User id
$data = new \Swagger\Client\Model\AccessToken(); // \Swagger\Client\Model\AccessToken | 

try {
    $result = $api_instance->userPrototypeCreateAccessTokens($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeCreateAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |
 **data** | [**\Swagger\Client\Model\AccessToken**](../Model/\Swagger\Client\Model\AccessToken.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeDeleteAccessTokens**
> userPrototypeDeleteAccessTokens($id)

Deletes all accessTokens of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$id = "id_example"; // string | User id

try {
    $api_instance->userPrototypeDeleteAccessTokens($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeDeleteAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeDestroyByIdAccessTokens**
> userPrototypeDestroyByIdAccessTokens($id, $fk)

Delete a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$id = "id_example"; // string | User id
$fk = "fk_example"; // string | Foreign key for accessTokens

try {
    $api_instance->userPrototypeDestroyByIdAccessTokens($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeDestroyByIdAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |
 **fk** | **string**| Foreign key for accessTokens |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeFindByIdAccessTokens**
> \Swagger\Client\Model\AccessToken userPrototypeFindByIdAccessTokens($id, $fk)

Find a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$id = "id_example"; // string | User id
$fk = "fk_example"; // string | Foreign key for accessTokens

try {
    $result = $api_instance->userPrototypeFindByIdAccessTokens($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeFindByIdAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |
 **fk** | **string**| Foreign key for accessTokens |

### Return type

[**\Swagger\Client\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeGetAccessTokens**
> \Swagger\Client\Model\AccessToken[] userPrototypeGetAccessTokens($id, $filter)

Queries accessTokens of User.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$id = "id_example"; // string | User id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->userPrototypeGetAccessTokens($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeGetAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\AccessToken[]**](../Model/AccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeUpdateAttributesPatchUsersid**
> \Swagger\Client\Model\User userPrototypeUpdateAttributesPatchUsersid($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$id = "id_example"; // string | User id
$data = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | An object of model property name/value pairs

try {
    $result = $api_instance->userPrototypeUpdateAttributesPatchUsersid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeUpdateAttributesPatchUsersid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |
 **data** | [**\Swagger\Client\Model\User**](../Model/\Swagger\Client\Model\User.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeUpdateAttributesPutUsersid**
> \Swagger\Client\Model\User userPrototypeUpdateAttributesPutUsersid($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$id = "id_example"; // string | User id
$data = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | An object of model property name/value pairs

try {
    $result = $api_instance->userPrototypeUpdateAttributesPutUsersid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeUpdateAttributesPutUsersid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |
 **data** | [**\Swagger\Client\Model\User**](../Model/\Swagger\Client\Model\User.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPrototypeUpdateByIdAccessTokens**
> \Swagger\Client\Model\AccessToken userPrototypeUpdateByIdAccessTokens($id, $fk, $data)

Update a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$id = "id_example"; // string | User id
$fk = "fk_example"; // string | Foreign key for accessTokens
$data = new \Swagger\Client\Model\AccessToken(); // \Swagger\Client\Model\AccessToken | 

try {
    $result = $api_instance->userPrototypeUpdateByIdAccessTokens($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userPrototypeUpdateByIdAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User id |
 **fk** | **string**| Foreign key for accessTokens |
 **data** | [**\Swagger\Client\Model\AccessToken**](../Model/\Swagger\Client\Model\AccessToken.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userReplaceById**
> \Swagger\Client\Model\User userReplaceById($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | Model instance data

try {
    $result = $api_instance->userReplaceById($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userReplaceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\User**](../Model/\Swagger\Client\Model\User.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userReplaceOrCreate**
> \Swagger\Client\Model\User userReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$data = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | Model instance data

try {
    $result = $api_instance->userReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\User**](../Model/\Swagger\Client\Model\User.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userResetPassword**
> userResetPassword($options)

Reset password for a user with email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$options = NULL; // object | 

try {
    $api_instance->userResetPassword($options);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userResetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options** | **object**|  |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpdateAll**
> \Swagger\Client\Model\InlineResponse2001 userUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | An object of model property name/value pairs

try {
    $result = $api_instance->userUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\User**](../Model/\Swagger\Client\Model\User.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpsertPatchUsers**
> \Swagger\Client\Model\User userUpsertPatchUsers($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$data = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | Model instance data

try {
    $result = $api_instance->userUpsertPatchUsers($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUpsertPatchUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\User**](../Model/\Swagger\Client\Model\User.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpsertPutUsers**
> \Swagger\Client\Model\User userUpsertPutUsers($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$data = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | Model instance data

try {
    $result = $api_instance->userUpsertPutUsers($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUpsertPutUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\User**](../Model/\Swagger\Client\Model\User.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpsertWithWhere**
> \Swagger\Client\Model\User userUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\UserApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | An object of model property name/value pairs

try {
    $result = $api_instance->userUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\User**](../Model/\Swagger\Client\Model\User.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

