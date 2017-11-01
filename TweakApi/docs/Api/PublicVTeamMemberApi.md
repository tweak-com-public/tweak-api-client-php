# Tweak\Api\PublicVTeamMemberApi

All URIs are relative to *https://apistagecdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1TeamMembersLoginPost**](PublicVTeamMemberApi.md#v1TeamMembersLoginPost) | **POST** /v1/TeamMembers/login | Change portal
[**v1TeamMembersLogoutPost**](PublicVTeamMemberApi.md#v1TeamMembersLogoutPost) | **POST** /v1/TeamMembers/logout | Logout a TeamMember
[**v1TeamMembersPost**](PublicVTeamMemberApi.md#v1TeamMembersPost) | **POST** /v1/TeamMembers | Create a Member


# **v1TeamMembersLoginPost**
> \Swagger\Client\Model\TeamMemberAccessToken v1TeamMembersLoginPost($id, $portalId)

Change portal

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

$api_instance = new Tweak\Api\Api\PublicVTeamMemberApi();
$id = "id_example"; // string | TeamMember id
$portalId = "portalId_example"; // string | Portal id

try {
    $result = $api_instance->v1TeamMembersLoginPost($id, $portalId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicVTeamMemberApi->v1TeamMembersLoginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| TeamMember id |
 **portalId** | **string**| Portal id |

### Return type

[**\Swagger\Client\Model\TeamMemberAccessToken**](../Model/TeamMemberAccessToken.md)

### Authorization

[access_token](../../README.md#access_token), [teamKey](../../README.md#teamKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TeamMembersLogoutPost**
> v1TeamMembersLogoutPost()

Logout a TeamMember

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

$api_instance = new Tweak\Api\Api\PublicVTeamMemberApi();

try {
    $api_instance->v1TeamMembersLogoutPost();
} catch (Exception $e) {
    echo 'Exception when calling PublicVTeamMemberApi->v1TeamMembersLogoutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token), [teamKey](../../README.md#teamKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TeamMembersPost**
> object v1TeamMembersPost($data)

Create a Member

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

$api_instance = new Tweak\Api\Api\PublicVTeamMemberApi();
$data = new \Swagger\Client\Model\PublicV1TeamMember(); // \Swagger\Client\Model\PublicV1TeamMember | Data to create Member

try {
    $result = $api_instance->v1TeamMembersPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicVTeamMemberApi->v1TeamMembersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\PublicV1TeamMember**](../Model/\Swagger\Client\Model\PublicV1TeamMember.md)| Data to create Member |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token), [teamKey](../../README.md#teamKey)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

