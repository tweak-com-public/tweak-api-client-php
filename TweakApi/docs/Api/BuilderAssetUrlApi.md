# Tweak\Api\BuilderAssetUrlApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**builderAssetUrlsDesignsIdGet**](BuilderAssetUrlApi.md#builderAssetUrlsDesignsIdGet) | **GET** /BuilderAsset/urls/designs/{id} | Get folders for Builder Asset Backgrounds
[**builderAssetUrlsTemplatesIdGet**](BuilderAssetUrlApi.md#builderAssetUrlsTemplatesIdGet) | **GET** /BuilderAsset/urls/templates/{id} | Get folders for Builder Asset Backgrounds
[**builderAssetUrlsTweakTemplatesIdGet**](BuilderAssetUrlApi.md#builderAssetUrlsTweakTemplatesIdGet) | **GET** /BuilderAsset/urls/tweakTemplates/{id} | Get folders for Builder Asset Backgrounds


# **builderAssetUrlsDesignsIdGet**
> \Swagger\Client\Model\InlineResponse200 builderAssetUrlsDesignsIdGet($id)

Get folders for Builder Asset Backgrounds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\BuilderAssetUrlApi();
$id = "id_example"; // string | Design Id

try {
    $result = $api_instance->builderAssetUrlsDesignsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuilderAssetUrlApi->builderAssetUrlsDesignsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Design Id |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **builderAssetUrlsTemplatesIdGet**
> \Swagger\Client\Model\InlineResponse200 builderAssetUrlsTemplatesIdGet($id)

Get folders for Builder Asset Backgrounds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\BuilderAssetUrlApi();
$id = "id_example"; // string | Template Id

try {
    $result = $api_instance->builderAssetUrlsTemplatesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuilderAssetUrlApi->builderAssetUrlsTemplatesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Template Id |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **builderAssetUrlsTweakTemplatesIdGet**
> \Swagger\Client\Model\InlineResponse200 builderAssetUrlsTweakTemplatesIdGet($id)

Get folders for Builder Asset Backgrounds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\BuilderAssetUrlApi();
$id = "id_example"; // string | Tweak Template Id

try {
    $result = $api_instance->builderAssetUrlsTweakTemplatesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuilderAssetUrlApi->builderAssetUrlsTweakTemplatesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Tweak Template Id |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

