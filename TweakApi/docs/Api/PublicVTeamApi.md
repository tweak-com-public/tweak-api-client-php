# Tweak\Api\PublicVTeamApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1TeamBuilderConfigsDefaultGet**](PublicVTeamApi.md#v1TeamBuilderConfigsDefaultGet) | **GET** /v1/Team/builderConfigs/default | Get default Team&#39;s BuilderConfig
[**v1TeamBuilderConfigsIdGet**](PublicVTeamApi.md#v1TeamBuilderConfigsIdGet) | **GET** /v1/Team/builderConfigs/{id} | Get Team&#39;s BuilderConfig by id


# **v1TeamBuilderConfigsDefaultGet**
> \Swagger\Client\Model\TeamBuilderConfig v1TeamBuilderConfigsDefaultGet()

Get default Team's BuilderConfig

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

$api_instance = new Tweak\Api\Api\PublicVTeamApi();

try {
    $result = $api_instance->v1TeamBuilderConfigsDefaultGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicVTeamApi->v1TeamBuilderConfigsDefaultGet: ', $e->getMessage(), PHP_EOL;
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

# **v1TeamBuilderConfigsIdGet**
> \Swagger\Client\Model\TeamBuilderConfig v1TeamBuilderConfigsIdGet($id)

Get Team's BuilderConfig by id

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

$api_instance = new Tweak\Api\Api\PublicVTeamApi();
$id = "id_example"; // string | BuilderConfig id

try {
    $result = $api_instance->v1TeamBuilderConfigsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicVTeamApi->v1TeamBuilderConfigsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| BuilderConfig id |

### Return type

[**\Swagger\Client\Model\TeamBuilderConfig**](../Model/TeamBuilderConfig.md)

### Authorization

[access_token](../../README.md#access_token), [teamKey](../../README.md#teamKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

