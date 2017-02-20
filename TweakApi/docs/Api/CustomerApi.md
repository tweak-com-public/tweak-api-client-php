# Tweak\Api\CustomerApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerConfirm**](CustomerApi.md#customerConfirm) | **GET** /Customers/confirm | Confirm a user registration with email verification token.
[**customerCount**](CustomerApi.md#customerCount) | **GET** /Customers/count | Count instances of the model matched by where from the data source.
[**customerCreate**](CustomerApi.md#customerCreate) | **POST** /Customers | Create a new instance of the model and persist it into the data source.
[**customerCreateChangeStreamGetCustomersChangeStream**](CustomerApi.md#customerCreateChangeStreamGetCustomersChangeStream) | **GET** /Customers/change-stream | Create a change stream.
[**customerCreateChangeStreamPostCustomersChangeStream**](CustomerApi.md#customerCreateChangeStreamPostCustomersChangeStream) | **POST** /Customers/change-stream | Create a change stream.
[**customerDeleteById**](CustomerApi.md#customerDeleteById) | **DELETE** /Customers/{id} | Delete a model instance by {{id}} from the data source.
[**customerExistsGetCustomersidExists**](CustomerApi.md#customerExistsGetCustomersidExists) | **GET** /Customers/{id}/exists | Check whether a model instance exists in the data source.
[**customerExistsHeadCustomersid**](CustomerApi.md#customerExistsHeadCustomersid) | **HEAD** /Customers/{id} | Check whether a model instance exists in the data source.
[**customerFind**](CustomerApi.md#customerFind) | **GET** /Customers | Find all instances of the model matched by filter from the data source.
[**customerFindById**](CustomerApi.md#customerFindById) | **GET** /Customers/{id} | Find a model instance by {{id}} from the data source.
[**customerFindOne**](CustomerApi.md#customerFindOne) | **GET** /Customers/findOne | Find first instance of the model matched by filter from the data source.
[**customerLogin**](CustomerApi.md#customerLogin) | **POST** /Customers/login | Login a user with username/email and password.
[**customerLogout**](CustomerApi.md#customerLogout) | **POST** /Customers/logout | Logout a user with access token.
[**customerPrototypeCountAccessTokens**](CustomerApi.md#customerPrototypeCountAccessTokens) | **GET** /Customers/{id}/accessTokens/count | Counts accessTokens of Customer.
[**customerPrototypeCountDesigns**](CustomerApi.md#customerPrototypeCountDesigns) | **GET** /Customers/{id}/designs/count | Counts designs of Customer.
[**customerPrototypeCreateAccessTokens**](CustomerApi.md#customerPrototypeCreateAccessTokens) | **POST** /Customers/{id}/accessTokens | Creates a new instance in accessTokens of this model.
[**customerPrototypeCreateDesigns**](CustomerApi.md#customerPrototypeCreateDesigns) | **POST** /Customers/{id}/designs | Creates a new instance in designs of this model.
[**customerPrototypeDeleteAccessTokens**](CustomerApi.md#customerPrototypeDeleteAccessTokens) | **DELETE** /Customers/{id}/accessTokens | Deletes all accessTokens of this model.
[**customerPrototypeDeleteDesigns**](CustomerApi.md#customerPrototypeDeleteDesigns) | **DELETE** /Customers/{id}/designs | Deletes all designs of this model.
[**customerPrototypeDestroyByIdAccessTokens**](CustomerApi.md#customerPrototypeDestroyByIdAccessTokens) | **DELETE** /Customers/{id}/accessTokens/{fk} | Delete a related item by id for accessTokens.
[**customerPrototypeDestroyByIdDesigns**](CustomerApi.md#customerPrototypeDestroyByIdDesigns) | **DELETE** /Customers/{id}/designs/{fk} | Delete a related item by id for designs.
[**customerPrototypeFindByIdAccessTokens**](CustomerApi.md#customerPrototypeFindByIdAccessTokens) | **GET** /Customers/{id}/accessTokens/{fk} | Find a related item by id for accessTokens.
[**customerPrototypeFindByIdDesigns**](CustomerApi.md#customerPrototypeFindByIdDesigns) | **GET** /Customers/{id}/designs/{fk} | Find a related item by id for designs.
[**customerPrototypeGetAccessTokens**](CustomerApi.md#customerPrototypeGetAccessTokens) | **GET** /Customers/{id}/accessTokens | Queries accessTokens of Customer.
[**customerPrototypeGetDesigns**](CustomerApi.md#customerPrototypeGetDesigns) | **GET** /Customers/{id}/designs | Queries designs of Customer.
[**customerPrototypeUpdateAttributesPatchCustomersid**](CustomerApi.md#customerPrototypeUpdateAttributesPatchCustomersid) | **PATCH** /Customers/{id} | Patch attributes for a model instance and persist it into the data source.
[**customerPrototypeUpdateAttributesPutCustomersid**](CustomerApi.md#customerPrototypeUpdateAttributesPutCustomersid) | **PUT** /Customers/{id} | Patch attributes for a model instance and persist it into the data source.
[**customerPrototypeUpdateByIdAccessTokens**](CustomerApi.md#customerPrototypeUpdateByIdAccessTokens) | **PUT** /Customers/{id}/accessTokens/{fk} | Update a related item by id for accessTokens.
[**customerPrototypeUpdateByIdDesigns**](CustomerApi.md#customerPrototypeUpdateByIdDesigns) | **PUT** /Customers/{id}/designs/{fk} | Update a related item by id for designs.
[**customerReplaceById**](CustomerApi.md#customerReplaceById) | **POST** /Customers/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**customerReplaceOrCreate**](CustomerApi.md#customerReplaceOrCreate) | **POST** /Customers/replaceOrCreate | Replace an existing model instance or insert a new one into the data source.
[**customerResetPassword**](CustomerApi.md#customerResetPassword) | **POST** /Customers/reset | Reset password for a user with email.
[**customerUpdateAll**](CustomerApi.md#customerUpdateAll) | **POST** /Customers/update | Update instances of the model matched by {{where}} from the data source.
[**customerUpsertPatchCustomers**](CustomerApi.md#customerUpsertPatchCustomers) | **PATCH** /Customers | Patch an existing model instance or insert a new one into the data source.
[**customerUpsertPutCustomers**](CustomerApi.md#customerUpsertPutCustomers) | **PUT** /Customers | Patch an existing model instance or insert a new one into the data source.
[**customerUpsertWithWhere**](CustomerApi.md#customerUpsertWithWhere) | **POST** /Customers/upsertWithWhere | Update an existing model instance or insert a new one into the data source based on the where criteria.


# **customerConfirm**
> customerConfirm($uid, $token, $redirect)

Confirm a user registration with email verification token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$uid = "uid_example"; // string | 
$token = "token_example"; // string | 
$redirect = "redirect_example"; // string | 

try {
    $api_instance->customerConfirm($uid, $token, $redirect);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerConfirm: ', $e->getMessage(), PHP_EOL;
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

# **customerCount**
> \Swagger\Client\Model\InlineResponse200 customerCount($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customerCount($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCount: ', $e->getMessage(), PHP_EOL;
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

# **customerCreate**
> \Swagger\Client\Model\Customer customerCreate($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | Model instance data

try {
    $result = $api_instance->customerCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCreateChangeStreamGetCustomersChangeStream**
> \SplFileObject customerCreateChangeStreamGetCustomersChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->customerCreateChangeStreamGetCustomersChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCreateChangeStreamGetCustomersChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **customerCreateChangeStreamPostCustomersChangeStream**
> \SplFileObject customerCreateChangeStreamPostCustomersChangeStream($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->customerCreateChangeStreamPostCustomersChangeStream($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCreateChangeStreamPostCustomersChangeStream: ', $e->getMessage(), PHP_EOL;
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

# **customerDeleteById**
> object customerDeleteById($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->customerDeleteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **customerExistsGetCustomersidExists**
> \Swagger\Client\Model\InlineResponse2002 customerExistsGetCustomersidExists($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->customerExistsGetCustomersidExists($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerExistsGetCustomersidExists: ', $e->getMessage(), PHP_EOL;
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

# **customerExistsHeadCustomersid**
> \Swagger\Client\Model\InlineResponse2002 customerExistsHeadCustomersid($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->customerExistsHeadCustomersid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerExistsHeadCustomersid: ', $e->getMessage(), PHP_EOL;
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

# **customerFind**
> \Swagger\Client\Model\Customer[] customerFind($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->customerFind($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerFind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Swagger\Client\Model\Customer[]**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerFindById**
> \Swagger\Client\Model\Customer customerFindById($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include

try {
    $result = $api_instance->customerFindById($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerFindById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerFindOne**
> \Swagger\Client\Model\Customer customerFindOne($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit

try {
    $result = $api_instance->customerFindOne($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerLogin**
> object customerLogin($credentials, $include)

Login a user with username/email and password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$credentials = NULL; // object | 
$include = "include_example"; // string | Related objects to include in the response. See the description of return value for more details.

try {
    $result = $api_instance->customerLogin($credentials, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerLogin: ', $e->getMessage(), PHP_EOL;
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

# **customerLogout**
> customerLogout()

Logout a user with access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();

try {
    $api_instance->customerLogout();
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerLogout: ', $e->getMessage(), PHP_EOL;
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

# **customerPrototypeCountAccessTokens**
> \Swagger\Client\Model\InlineResponse200 customerPrototypeCountAccessTokens($id, $where)

Counts accessTokens of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customerPrototypeCountAccessTokens($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCountAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCountDesigns**
> \Swagger\Client\Model\InlineResponse200 customerPrototypeCountDesigns($id, $where)

Counts designs of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->customerPrototypeCountDesigns($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCountDesigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCreateAccessTokens**
> \Swagger\Client\Model\AccessToken customerPrototypeCreateAccessTokens($id, $data)

Creates a new instance in accessTokens of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Swagger\Client\Model\AccessToken(); // \Swagger\Client\Model\AccessToken | 

try {
    $result = $api_instance->customerPrototypeCreateAccessTokens($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCreateAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Swagger\Client\Model\AccessToken**](../Model/\Swagger\Client\Model\AccessToken.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeCreateDesigns**
> \Swagger\Client\Model\Design customerPrototypeCreateDesigns($id, $data)

Creates a new instance in designs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->customerPrototypeCreateDesigns($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeCreateDesigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDeleteAccessTokens**
> customerPrototypeDeleteAccessTokens($id)

Deletes all accessTokens of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id

try {
    $api_instance->customerPrototypeDeleteAccessTokens($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDeleteAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDeleteDesigns**
> customerPrototypeDeleteDesigns($id)

Deletes all designs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id

try {
    $api_instance->customerPrototypeDeleteDesigns($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDeleteDesigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDestroyByIdAccessTokens**
> customerPrototypeDestroyByIdAccessTokens($id, $fk)

Delete a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for accessTokens

try {
    $api_instance->customerPrototypeDestroyByIdAccessTokens($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDestroyByIdAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for accessTokens |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeDestroyByIdDesigns**
> customerPrototypeDestroyByIdDesigns($id, $fk)

Delete a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for designs

try {
    $api_instance->customerPrototypeDestroyByIdDesigns($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeDestroyByIdDesigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for designs |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeFindByIdAccessTokens**
> \Swagger\Client\Model\AccessToken customerPrototypeFindByIdAccessTokens($id, $fk)

Find a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for accessTokens

try {
    $result = $api_instance->customerPrototypeFindByIdAccessTokens($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeFindByIdAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for accessTokens |

### Return type

[**\Swagger\Client\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeFindByIdDesigns**
> \Swagger\Client\Model\Design customerPrototypeFindByIdDesigns($id, $fk)

Find a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for designs

try {
    $result = $api_instance->customerPrototypeFindByIdDesigns($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeFindByIdDesigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for designs |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeGetAccessTokens**
> \Swagger\Client\Model\AccessToken[] customerPrototypeGetAccessTokens($id, $filter)

Queries accessTokens of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customerPrototypeGetAccessTokens($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeGetAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\AccessToken[]**](../Model/AccessToken.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeGetDesigns**
> \Swagger\Client\Model\Design[] customerPrototypeGetDesigns($id, $filter)

Queries designs of Customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->customerPrototypeGetDesigns($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeGetDesigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeUpdateAttributesPatchCustomersid**
> \Swagger\Client\Model\Customer customerPrototypeUpdateAttributesPatchCustomersid($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | An object of model property name/value pairs

try {
    $result = $api_instance->customerPrototypeUpdateAttributesPatchCustomersid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeUpdateAttributesPatchCustomersid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeUpdateAttributesPutCustomersid**
> \Swagger\Client\Model\Customer customerPrototypeUpdateAttributesPutCustomersid($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | An object of model property name/value pairs

try {
    $result = $api_instance->customerPrototypeUpdateAttributesPutCustomersid($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeUpdateAttributesPutCustomersid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerPrototypeUpdateByIdAccessTokens**
> \Swagger\Client\Model\AccessToken customerPrototypeUpdateByIdAccessTokens($id, $fk, $data)

Update a related item by id for accessTokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for accessTokens
$data = new \Swagger\Client\Model\AccessToken(); // \Swagger\Client\Model\AccessToken | 

try {
    $result = $api_instance->customerPrototypeUpdateByIdAccessTokens($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeUpdateByIdAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
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

# **customerPrototypeUpdateByIdDesigns**
> \Swagger\Client\Model\Design customerPrototypeUpdateByIdDesigns($id, $fk, $data)

Update a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Customer id
$fk = "fk_example"; // string | Foreign key for designs
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->customerPrototypeUpdateByIdDesigns($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerPrototypeUpdateByIdDesigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Customer id |
 **fk** | **string**| Foreign key for designs |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerReplaceById**
> \Swagger\Client\Model\Customer customerReplaceById($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | Model instance data

try {
    $result = $api_instance->customerReplaceById($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerReplaceById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerReplaceOrCreate**
> \Swagger\Client\Model\Customer customerReplaceOrCreate($data)

Replace an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | Model instance data

try {
    $result = $api_instance->customerReplaceOrCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerReplaceOrCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerResetPassword**
> customerResetPassword($options)

Reset password for a user with email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$options = NULL; // object | 

try {
    $api_instance->customerResetPassword($options);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerResetPassword: ', $e->getMessage(), PHP_EOL;
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

# **customerUpdateAll**
> \Swagger\Client\Model\InlineResponse2001 customerUpdateAll($where, $data)

Update instances of the model matched by {{where}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | An object of model property name/value pairs

try {
    $result = $api_instance->customerUpdateAll($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerUpdateAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerUpsertPatchCustomers**
> \Swagger\Client\Model\Customer customerUpsertPatchCustomers($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | Model instance data

try {
    $result = $api_instance->customerUpsertPatchCustomers($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerUpsertPatchCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerUpsertPutCustomers**
> \Swagger\Client\Model\Customer customerUpsertPutCustomers($data)

Patch an existing model instance or insert a new one into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | Model instance data

try {
    $result = $api_instance->customerUpsertPutCustomers($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerUpsertPutCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerUpsertWithWhere**
> \Swagger\Client\Model\Customer customerUpsertWithWhere($where, $data)

Update an existing model instance or insert a new one into the data source based on the where criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\CustomerApi();
$where = "where_example"; // string | Criteria to match model instances
$data = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | An object of model property name/value pairs

try {
    $result = $api_instance->customerUpsertWithWhere($where, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerUpsertWithWhere: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]
 **data** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

