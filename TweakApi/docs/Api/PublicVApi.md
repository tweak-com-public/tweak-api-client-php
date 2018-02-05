# Tweak\Api\PublicVApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BaseLocaleCountryCodeGet**](PublicVApi.md#v1BaseLocaleCountryCodeGet) | **GET** /v1/Base/locale/country/code | Get locale from Country Code
[**v1BaseLocaleCountryNameGet**](PublicVApi.md#v1BaseLocaleCountryNameGet) | **GET** /v1/Base/locale/country/name | Get locale from Country Name
[**v1BaseLocaleGet**](PublicVApi.md#v1BaseLocaleGet) | **GET** /v1/Base/locale | Get locale from client IP


# **v1BaseLocaleCountryCodeGet**
> object v1BaseLocaleCountryCodeGet($countryCode)

Get locale from Country Code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure API key authorization: teamKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('teamKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('teamKey', 'Bearer');

$api_instance = new Tweak\Api\Api\PublicVApi();
$countryCode = "countryCode_example"; // string | Country code

try {
    $result = $api_instance->v1BaseLocaleCountryCodeGet($countryCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicVApi->v1BaseLocaleCountryCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countryCode** | **string**| Country code |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token), [teamKey](../../README.md#teamKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BaseLocaleCountryNameGet**
> object v1BaseLocaleCountryNameGet($countryName)

Get locale from Country Name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure API key authorization: teamKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('teamKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('teamKey', 'Bearer');

$api_instance = new Tweak\Api\Api\PublicVApi();
$countryName = "countryName_example"; // string | Country name

try {
    $result = $api_instance->v1BaseLocaleCountryNameGet($countryName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicVApi->v1BaseLocaleCountryNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countryName** | **string**| Country name |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token), [teamKey](../../README.md#teamKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BaseLocaleGet**
> object v1BaseLocaleGet()

Get locale from client IP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure API key authorization: teamKey
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('teamKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('teamKey', 'Bearer');

$api_instance = new Tweak\Api\Api\PublicVApi();

try {
    $result = $api_instance->v1BaseLocaleGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicVApi->v1BaseLocaleGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token), [teamKey](../../README.md#teamKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

