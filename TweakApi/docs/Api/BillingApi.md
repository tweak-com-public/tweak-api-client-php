# Tweak\Api\BillingApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingsChangeStreamGet**](BillingApi.md#billingsChangeStreamGet) | **GET** /Billings/change-stream | Create a change stream.
[**billingsChangeStreamPost**](BillingApi.md#billingsChangeStreamPost) | **POST** /Billings/change-stream | Create a change stream.
[**billingsCountriesGet**](BillingApi.md#billingsCountriesGet) | **GET** /Billings/countries | List available countries
[**billingsIdPut**](BillingApi.md#billingsIdPut) | **PUT** /Billings/{id} | Replace attributes for a model instance and persist it into the data source.
[**billingsIdReplacePost**](BillingApi.md#billingsIdReplacePost) | **POST** /Billings/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**billingsTaxEvidenceCountryVatGet**](BillingApi.md#billingsTaxEvidenceCountryVatGet) | **GET** /Billings/taxEvidence/{country}/{vat} | Get Tax Evidence by country and VAT


# **billingsChangeStreamGet**
> \SplFileObject billingsChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\BillingApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->billingsChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingsChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **billingsChangeStreamPost**
> \SplFileObject billingsChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\BillingApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->billingsChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingsChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **billingsCountriesGet**
> string[] billingsCountriesGet()

List available countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\BillingApi();

try {
    $result = $api_instance->billingsCountriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingsCountriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingsIdPut**
> \Swagger\Client\Model\Billing billingsIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\BillingApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\Billing(); // \Swagger\Client\Model\Billing | Model instance data

try {
    $result = $api_instance->billingsIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Billing**](../Model/\Swagger\Client\Model\Billing.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Billing**](../Model/Billing.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingsIdReplacePost**
> \Swagger\Client\Model\Billing billingsIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\BillingApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\Billing(); // \Swagger\Client\Model\Billing | Model instance data

try {
    $result = $api_instance->billingsIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingsIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\Billing**](../Model/\Swagger\Client\Model\Billing.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\Billing**](../Model/Billing.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingsTaxEvidenceCountryVatGet**
> object billingsTaxEvidenceCountryVatGet($country, $vat)

Get Tax Evidence by country and VAT

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\BillingApi();
$country = "country_example"; // string | 
$vat = "vat_example"; // string | 

try {
    $result = $api_instance->billingsTaxEvidenceCountryVatGet($country, $vat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingsTaxEvidenceCountryVatGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**|  |
 **vat** | **string**|  |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

