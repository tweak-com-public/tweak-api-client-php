# Tweak\Api\PublicVBuilderAssetApi

All URIs are relative to *https://apicdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1BuilderAssetBackgroundsFoldersFolderPathGet**](PublicVBuilderAssetApi.md#v1BuilderAssetBackgroundsFoldersFolderPathGet) | **GET** /v1/BuilderAsset/backgrounds/folders/{folderPath} | Get Builder Asset Backgrounds on a folders
[**v1BuilderAssetBackgroundsFoldersGet**](PublicVBuilderAssetApi.md#v1BuilderAssetBackgroundsFoldersGet) | **GET** /v1/BuilderAsset/backgrounds/folders | Get folders for Builder Asset Backgrounds
[**v1BuilderAssetBackgroundsGet**](PublicVBuilderAssetApi.md#v1BuilderAssetBackgroundsGet) | **GET** /v1/BuilderAsset/backgrounds | Get all Builder Asset Backgrounds


# **v1BuilderAssetBackgroundsFoldersFolderPathGet**
> \Swagger\Client\Model\CloudinaryImage[] v1BuilderAssetBackgroundsFoldersFolderPathGet($folderPath, $filter)

Get Builder Asset Backgrounds on a folders

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

$api_instance = new Tweak\Api\Api\PublicVBuilderAssetApi();
$folderPath = "folderPath_example"; // string | Folder path for backgrounds
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->v1BuilderAssetBackgroundsFoldersFolderPathGet($folderPath, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicVBuilderAssetApi->v1BuilderAssetBackgroundsFoldersFolderPathGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folderPath** | **string**| Folder path for backgrounds |
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\CloudinaryImage[]**](../Model/CloudinaryImage.md)

### Authorization

[access_token](../../README.md#access_token), [teamKey](../../README.md#teamKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BuilderAssetBackgroundsFoldersGet**
> \Swagger\Client\Model\BuilderAssetBackgroundFolder[] v1BuilderAssetBackgroundsFoldersGet()

Get folders for Builder Asset Backgrounds

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

$api_instance = new Tweak\Api\Api\PublicVBuilderAssetApi();

try {
    $result = $api_instance->v1BuilderAssetBackgroundsFoldersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicVBuilderAssetApi->v1BuilderAssetBackgroundsFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BuilderAssetBackgroundFolder[]**](../Model/BuilderAssetBackgroundFolder.md)

### Authorization

[access_token](../../README.md#access_token), [teamKey](../../README.md#teamKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1BuilderAssetBackgroundsGet**
> \Swagger\Client\Model\CloudinaryImage[] v1BuilderAssetBackgroundsGet($filter)

Get all Builder Asset Backgrounds

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

$api_instance = new Tweak\Api\Api\PublicVBuilderAssetApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->v1BuilderAssetBackgroundsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicVBuilderAssetApi->v1BuilderAssetBackgroundsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\CloudinaryImage[]**](../Model/CloudinaryImage.md)

### Authorization

[access_token](../../README.md#access_token), [teamKey](../../README.md#teamKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

