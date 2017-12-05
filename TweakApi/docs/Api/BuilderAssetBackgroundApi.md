# Tweak\Api\BuilderAssetBackgroundApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**builderAssetBackgroundsFoldersFolderPathGet**](BuilderAssetBackgroundApi.md#builderAssetBackgroundsFoldersFolderPathGet) | **GET** /BuilderAsset/backgrounds/folders/{folderPath} | Get Builder Asset Backgrounds on a folders
[**builderAssetBackgroundsFoldersGet**](BuilderAssetBackgroundApi.md#builderAssetBackgroundsFoldersGet) | **GET** /BuilderAsset/backgrounds/folders | Get folders for Builder Asset Backgrounds
[**builderAssetBackgroundsGet**](BuilderAssetBackgroundApi.md#builderAssetBackgroundsGet) | **GET** /BuilderAsset/backgrounds | Get all Builder Asset Backgrounds


# **builderAssetBackgroundsFoldersFolderPathGet**
> \Swagger\Client\Model\CloudinaryImage[] builderAssetBackgroundsFoldersFolderPathGet($folderPath, $filter)

Get Builder Asset Backgrounds on a folders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\BuilderAssetBackgroundApi();
$folderPath = "folderPath_example"; // string | Folder path for backgrounds
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->builderAssetBackgroundsFoldersFolderPathGet($folderPath, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuilderAssetBackgroundApi->builderAssetBackgroundsFoldersFolderPathGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **builderAssetBackgroundsFoldersGet**
> \Swagger\Client\Model\BuilderAssetBackgroundFolder[] builderAssetBackgroundsFoldersGet()

Get folders for Builder Asset Backgrounds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\BuilderAssetBackgroundApi();

try {
    $result = $api_instance->builderAssetBackgroundsFoldersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuilderAssetBackgroundApi->builderAssetBackgroundsFoldersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BuilderAssetBackgroundFolder[]**](../Model/BuilderAssetBackgroundFolder.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **builderAssetBackgroundsGet**
> \Swagger\Client\Model\CloudinaryImage[] builderAssetBackgroundsGet($filter)

Get all Builder Asset Backgrounds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\BuilderAssetBackgroundApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->builderAssetBackgroundsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuilderAssetBackgroundApi->builderAssetBackgroundsGet: ', $e->getMessage(), PHP_EOL;
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

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

