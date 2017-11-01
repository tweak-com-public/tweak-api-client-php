# Tweak\Api\PublicVBuilderConfigApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BuilderConfigDefaultGet**](PublicVBuilderConfigApi.md#v1BuilderConfigDefaultGet) | **GET** /v1/BuilderConfig/default | Get default BuilderConfig


# **v1BuilderConfigDefaultGet**
> \Swagger\Client\Model\TeamBuilderConfig v1BuilderConfigDefaultGet()

Get default BuilderConfig

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

$api_instance = new Tweak\Api\Api\PublicVBuilderConfigApi();

try {
    $result = $api_instance->v1BuilderConfigDefaultGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicVBuilderConfigApi->v1BuilderConfigDefaultGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token), [teamKey](../../README.md#teamKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

