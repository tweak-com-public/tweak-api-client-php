# Tweak\Api\DynamicDataApi

All URIs are relative to *https://apidevcdn.tweak.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dynamicDataChangeStreamGet**](DynamicDataApi.md#dynamicDataChangeStreamGet) | **GET** /DynamicData/change-stream | Create a change stream.
[**dynamicDataChangeStreamPost**](DynamicDataApi.md#dynamicDataChangeStreamPost) | **POST** /DynamicData/change-stream | Create a change stream.
[**dynamicDataCountGet**](DynamicDataApi.md#dynamicDataCountGet) | **GET** /DynamicData/count | Count instances of the model matched by where from the data source.
[**dynamicDataFindOneGet**](DynamicDataApi.md#dynamicDataFindOneGet) | **GET** /DynamicData/findOne | Find first instance of the model matched by filter from the data source.
[**dynamicDataGet**](DynamicDataApi.md#dynamicDataGet) | **GET** /DynamicData | Find all instances of the model matched by filter from the data source.
[**dynamicDataIdDataSourceMongoGet**](DynamicDataApi.md#dynamicDataIdDataSourceMongoGet) | **GET** /DynamicData/{id}/dataSourceMongo | Fetches belongsTo relation dataSourceMongo.
[**dynamicDataIdDataSourceMsSqlGet**](DynamicDataApi.md#dynamicDataIdDataSourceMsSqlGet) | **GET** /DynamicData/{id}/dataSourceMsSql | Fetches belongsTo relation dataSourceMsSql.
[**dynamicDataIdDataSourceMySqlGet**](DynamicDataApi.md#dynamicDataIdDataSourceMySqlGet) | **GET** /DynamicData/{id}/dataSourceMySql | Fetches belongsTo relation dataSourceMySql.
[**dynamicDataIdDataSourceOracleGet**](DynamicDataApi.md#dynamicDataIdDataSourceOracleGet) | **GET** /DynamicData/{id}/dataSourceOracle | Fetches belongsTo relation dataSourceOracle.
[**dynamicDataIdDataSourcePostgreSqlGet**](DynamicDataApi.md#dynamicDataIdDataSourcePostgreSqlGet) | **GET** /DynamicData/{id}/dataSourcePostgreSql | Fetches belongsTo relation dataSourcePostgreSql.
[**dynamicDataIdDataSourceRestGet**](DynamicDataApi.md#dynamicDataIdDataSourceRestGet) | **GET** /DynamicData/{id}/dataSourceRest | Fetches belongsTo relation dataSourceRest.
[**dynamicDataIdDataSourceSoapGet**](DynamicDataApi.md#dynamicDataIdDataSourceSoapGet) | **GET** /DynamicData/{id}/dataSourceSoap | Fetches belongsTo relation dataSourceSoap.
[**dynamicDataIdDelete**](DynamicDataApi.md#dynamicDataIdDelete) | **DELETE** /DynamicData/{id} | Delete a model instance by {{id}} from the data source.
[**dynamicDataIdDesignsCountGet**](DynamicDataApi.md#dynamicDataIdDesignsCountGet) | **GET** /DynamicData/{id}/designs/count | Counts designs of DynamicData.
[**dynamicDataIdDesignsFkDelete**](DynamicDataApi.md#dynamicDataIdDesignsFkDelete) | **DELETE** /DynamicData/{id}/designs/{fk} | Delete a related item by id for designs.
[**dynamicDataIdDesignsFkGet**](DynamicDataApi.md#dynamicDataIdDesignsFkGet) | **GET** /DynamicData/{id}/designs/{fk} | Find a related item by id for designs.
[**dynamicDataIdDesignsFkPut**](DynamicDataApi.md#dynamicDataIdDesignsFkPut) | **PUT** /DynamicData/{id}/designs/{fk} | Update a related item by id for designs.
[**dynamicDataIdDesignsGet**](DynamicDataApi.md#dynamicDataIdDesignsGet) | **GET** /DynamicData/{id}/designs | Queries designs of DynamicData.
[**dynamicDataIdDesignsPost**](DynamicDataApi.md#dynamicDataIdDesignsPost) | **POST** /DynamicData/{id}/designs | Creates a new instance in designs of this model.
[**dynamicDataIdExistsGet**](DynamicDataApi.md#dynamicDataIdExistsGet) | **GET** /DynamicData/{id}/exists | Check whether a model instance exists in the data source.
[**dynamicDataIdFetchRawGet**](DynamicDataApi.md#dynamicDataIdFetchRawGet) | **GET** /DynamicData/{id}/fetch/raw | Fetch raw datas from external servers.
[**dynamicDataIdGet**](DynamicDataApi.md#dynamicDataIdGet) | **GET** /DynamicData/{id} | Find a model instance by {{id}} from the data source.
[**dynamicDataIdHead**](DynamicDataApi.md#dynamicDataIdHead) | **HEAD** /DynamicData/{id} | Check whether a model instance exists in the data source.
[**dynamicDataIdPatch**](DynamicDataApi.md#dynamicDataIdPatch) | **PATCH** /DynamicData/{id} | Patch attributes for a model instance and persist it into the data source.
[**dynamicDataIdPut**](DynamicDataApi.md#dynamicDataIdPut) | **PUT** /DynamicData/{id} | Replace attributes for a model instance and persist it into the data source.
[**dynamicDataIdRecordsCountGet**](DynamicDataApi.md#dynamicDataIdRecordsCountGet) | **GET** /DynamicData/{id}/records/count | Count Dynamic Data records
[**dynamicDataIdRecordsDelete**](DynamicDataApi.md#dynamicDataIdRecordsDelete) | **DELETE** /DynamicData/{id}/records | Delete all matching records.
[**dynamicDataIdRecordsFkDelete**](DynamicDataApi.md#dynamicDataIdRecordsFkDelete) | **DELETE** /DynamicData/{id}/records/{fk} | Delete a model instance by {{fk}} from the data source.
[**dynamicDataIdRecordsFkGet**](DynamicDataApi.md#dynamicDataIdRecordsFkGet) | **GET** /DynamicData/{id}/records/{fk} | Find a model instance by {{fk}} from the data source.
[**dynamicDataIdRecordsFkPropertyNameUploadPut**](DynamicDataApi.md#dynamicDataIdRecordsFkPropertyNameUploadPut) | **PUT** /DynamicData/{id}/records/{fk}/{propertyName}/upload | Replace attributes for a model instance and persist it into the data source.
[**dynamicDataIdRecordsFkPut**](DynamicDataApi.md#dynamicDataIdRecordsFkPut) | **PUT** /DynamicData/{id}/records/{fk} | Replace attributes for a model instance and persist it into the data source.
[**dynamicDataIdRecordsGet**](DynamicDataApi.md#dynamicDataIdRecordsGet) | **GET** /DynamicData/{id}/records | Find all instances of the model matched by filter from the data source.
[**dynamicDataIdRecordsMigratePost**](DynamicDataApi.md#dynamicDataIdRecordsMigratePost) | **POST** /DynamicData/{id}/records/migrate | Request migration for Dynamic Data records
[**dynamicDataIdRecordsPost**](DynamicDataApi.md#dynamicDataIdRecordsPost) | **POST** /DynamicData/{id}/records | Create a new instance of the model and persist it into the data source.
[**dynamicDataIdRecordsUploadCsvPost**](DynamicDataApi.md#dynamicDataIdRecordsUploadCsvPost) | **POST** /DynamicData/{id}/records/upload/csv | Upload CSV for this Dynamic Data
[**dynamicDataIdReplacePost**](DynamicDataApi.md#dynamicDataIdReplacePost) | **POST** /DynamicData/{id}/replace | Replace attributes for a model instance and persist it into the data source.
[**dynamicDataIdTeamGet**](DynamicDataApi.md#dynamicDataIdTeamGet) | **GET** /DynamicData/{id}/team | Fetches belongsTo relation team.
[**dynamicDataPost**](DynamicDataApi.md#dynamicDataPost) | **POST** /DynamicData | Create a new instance of the model and persist it into the data source.


# **dynamicDataChangeStreamGet**
> \SplFileObject dynamicDataChangeStreamGet($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dynamicDataChangeStreamGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataChangeStreamGet: ', $e->getMessage(), PHP_EOL;
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

# **dynamicDataChangeStreamPost**
> \SplFileObject dynamicDataChangeStreamPost($options)

Create a change stream.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$options = "options_example"; // string | 

try {
    $result = $api_instance->dynamicDataChangeStreamPost($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataChangeStreamPost: ', $e->getMessage(), PHP_EOL;
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

# **dynamicDataCountGet**
> \Swagger\Client\Model\InlineResponse2001 dynamicDataCountGet($where)

Count instances of the model matched by where from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dynamicDataCountGet($where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataFindOneGet**
> \Swagger\Client\Model\DynamicData dynamicDataFindOneGet($filter)

Find first instance of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dynamicDataFindOneGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataFindOneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataGet**
> \Swagger\Client\Model\DynamicData[] dynamicDataGet($filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dynamicDataGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData[]**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdDataSourceMongoGet**
> \Swagger\Client\Model\DataSourceMongo dynamicDataIdDataSourceMongoGet($id, $refresh)

Fetches belongsTo relation dataSourceMongo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$refresh = true; // bool | 

try {
    $result = $api_instance->dynamicDataIdDataSourceMongoGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdDataSourceMongoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMongo**](../Model/DataSourceMongo.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdDataSourceMsSqlGet**
> \Swagger\Client\Model\DataSourceMsSql dynamicDataIdDataSourceMsSqlGet($id, $refresh)

Fetches belongsTo relation dataSourceMsSql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$refresh = true; // bool | 

try {
    $result = $api_instance->dynamicDataIdDataSourceMsSqlGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdDataSourceMsSqlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMsSql**](../Model/DataSourceMsSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdDataSourceMySqlGet**
> \Swagger\Client\Model\DataSourceMySql dynamicDataIdDataSourceMySqlGet($id, $refresh)

Fetches belongsTo relation dataSourceMySql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$refresh = true; // bool | 

try {
    $result = $api_instance->dynamicDataIdDataSourceMySqlGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdDataSourceMySqlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceMySql**](../Model/DataSourceMySql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdDataSourceOracleGet**
> \Swagger\Client\Model\DataSourceOracle dynamicDataIdDataSourceOracleGet($id, $refresh)

Fetches belongsTo relation dataSourceOracle.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$refresh = true; // bool | 

try {
    $result = $api_instance->dynamicDataIdDataSourceOracleGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdDataSourceOracleGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceOracle**](../Model/DataSourceOracle.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdDataSourcePostgreSqlGet**
> \Swagger\Client\Model\DataSourcePostgreSql dynamicDataIdDataSourcePostgreSqlGet($id, $refresh)

Fetches belongsTo relation dataSourcePostgreSql.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$refresh = true; // bool | 

try {
    $result = $api_instance->dynamicDataIdDataSourcePostgreSqlGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdDataSourcePostgreSqlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourcePostgreSql**](../Model/DataSourcePostgreSql.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdDataSourceRestGet**
> \Swagger\Client\Model\DataSourceRest dynamicDataIdDataSourceRestGet($id, $refresh)

Fetches belongsTo relation dataSourceRest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$refresh = true; // bool | 

try {
    $result = $api_instance->dynamicDataIdDataSourceRestGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdDataSourceRestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceRest**](../Model/DataSourceRest.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdDataSourceSoapGet**
> \Swagger\Client\Model\DataSourceSoap dynamicDataIdDataSourceSoapGet($id, $refresh)

Fetches belongsTo relation dataSourceSoap.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$refresh = true; // bool | 

try {
    $result = $api_instance->dynamicDataIdDataSourceSoapGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdDataSourceSoapGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\DataSourceSoap**](../Model/DataSourceSoap.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdDelete**
> object dynamicDataIdDelete($id)

Delete a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dynamicDataIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **dynamicDataIdDesignsCountGet**
> \Swagger\Client\Model\InlineResponse2001 dynamicDataIdDesignsCountGet($id, $where)

Counts designs of DynamicData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dynamicDataIdDesignsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdDesignsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdDesignsFkDelete**
> dynamicDataIdDesignsFkDelete($id, $fk)

Delete a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$fk = "fk_example"; // string | Foreign key for designs

try {
    $api_instance->dynamicDataIdDesignsFkDelete($id, $fk);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdDesignsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **fk** | **string**| Foreign key for designs |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdDesignsFkGet**
> \Swagger\Client\Model\Design dynamicDataIdDesignsFkGet($id, $fk)

Find a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$fk = "fk_example"; // string | Foreign key for designs

try {
    $result = $api_instance->dynamicDataIdDesignsFkGet($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdDesignsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **fk** | **string**| Foreign key for designs |

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdDesignsFkPut**
> \Swagger\Client\Model\Design dynamicDataIdDesignsFkPut($id, $fk, $data)

Update a related item by id for designs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$fk = "fk_example"; // string | Foreign key for designs
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->dynamicDataIdDesignsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdDesignsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
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

# **dynamicDataIdDesignsGet**
> \Swagger\Client\Model\Design[] dynamicDataIdDesignsGet($id, $filter)

Queries designs of DynamicData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$filter = "filter_example"; // string | 

try {
    $result = $api_instance->dynamicDataIdDesignsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdDesignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **filter** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Design[]**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdDesignsPost**
> \Swagger\Client\Model\Design dynamicDataIdDesignsPost($id, $data)

Creates a new instance in designs of this model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$data = new \Swagger\Client\Model\Design(); // \Swagger\Client\Model\Design | 

try {
    $result = $api_instance->dynamicDataIdDesignsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdDesignsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **data** | [**\Swagger\Client\Model\Design**](../Model/\Swagger\Client\Model\Design.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Design**](../Model/Design.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdExistsGet**
> \Swagger\Client\Model\InlineResponse2002 dynamicDataIdExistsGet($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dynamicDataIdExistsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdExistsGet: ', $e->getMessage(), PHP_EOL;
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

# **dynamicDataIdFetchRawGet**
> \Swagger\Client\Model\XAny dynamicDataIdFetchRawGet($id, $params)

Fetch raw datas from external servers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$params = "params_example"; // string | Request parameters

try {
    $result = $api_instance->dynamicDataIdFetchRawGet($id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdFetchRawGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **params** | **string**| Request parameters | [optional]

### Return type

[**\Swagger\Client\Model\XAny**](../Model/XAny.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdGet**
> \Swagger\Client\Model\DynamicData dynamicDataIdGet($id, $filter)

Find a model instance by {{id}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dynamicDataIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdHead**
> \Swagger\Client\Model\InlineResponse2002 dynamicDataIdHead($id)

Check whether a model instance exists in the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | Model id

try {
    $result = $api_instance->dynamicDataIdHead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdHead: ', $e->getMessage(), PHP_EOL;
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

# **dynamicDataIdPatch**
> \Swagger\Client\Model\DynamicData dynamicDataIdPatch($id, $data)

Patch attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | An object of model property name/value pairs

try {
    $result = $api_instance->dynamicDataIdPatch($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)| An object of model property name/value pairs | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdPut**
> \Swagger\Client\Model\DynamicData dynamicDataIdPut($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | Model instance data

try {
    $result = $api_instance->dynamicDataIdPut($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdRecordsCountGet**
> \Swagger\Client\Model\InlineResponse2001 dynamicDataIdRecordsCountGet($id, $where)

Count Dynamic Data records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$where = "where_example"; // string | Criteria to match model instances

try {
    $result = $api_instance->dynamicDataIdRecordsCountGet($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdRecordsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **where** | **string**| Criteria to match model instances | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdRecordsDelete**
> object dynamicDataIdRecordsDelete($id, $where)

Delete all matching records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$where = "where_example"; // string | filter.where object

try {
    $result = $api_instance->dynamicDataIdRecordsDelete($id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdRecordsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **where** | **string**| filter.where object | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdRecordsFkDelete**
> object dynamicDataIdRecordsFkDelete($id, $fk)

Delete a model instance by {{fk}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$fk = "fk_example"; // string | Model id

try {
    $result = $api_instance->dynamicDataIdRecordsFkDelete($id, $fk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdRecordsFkDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **fk** | **string**| Model id |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdRecordsFkGet**
> object dynamicDataIdRecordsFkGet($id, $fk, $filter)

Find a model instance by {{fk}} from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$fk = "fk_example"; // string | Model id
$filter = "filter_example"; // string | Filter defining fields and include - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dynamicDataIdRecordsFkGet($id, $fk, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdRecordsFkGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **fk** | **string**| Model id |
 **filter** | **string**| Filter defining fields and include - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdRecordsFkPropertyNameUploadPut**
> object dynamicDataIdRecordsFkPropertyNameUploadPut($id, $fk, $propertyName, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$fk = "fk_example"; // string | Model id
$propertyName = "propertyName_example"; // string | Model property name
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | Model instance data

try {
    $result = $api_instance->dynamicDataIdRecordsFkPropertyNameUploadPut($id, $fk, $propertyName, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdRecordsFkPropertyNameUploadPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **fk** | **string**| Model id |
 **propertyName** | **string**| Model property name |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)| Model instance data | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdRecordsFkPut**
> object dynamicDataIdRecordsFkPut($id, $fk, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$fk = "fk_example"; // string | Model id
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | Model instance data

try {
    $result = $api_instance->dynamicDataIdRecordsFkPut($id, $fk, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdRecordsFkPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **fk** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)| Model instance data | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdRecordsGet**
> object[] dynamicDataIdRecordsGet($id, $filter)

Find all instances of the model matched by filter from the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$filter = "filter_example"; // string | Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\"something\":\"value\"})

try {
    $result = $api_instance->dynamicDataIdRecordsGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdRecordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **filter** | **string**| Filter defining fields, where, include, order, offset, and limit - must be a JSON-encoded string ({\&quot;something\&quot;:\&quot;value\&quot;}) | [optional]

### Return type

**object[]**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdRecordsMigratePost**
> object dynamicDataIdRecordsMigratePost($id, $data)

Request migration for Dynamic Data records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | 

try {
    $result = $api_instance->dynamicDataIdRecordsMigratePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdRecordsMigratePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)|  | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdRecordsPost**
> object dynamicDataIdRecordsPost($id, $data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | Model instance data

try {
    $result = $api_instance->dynamicDataIdRecordsPost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdRecordsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)| Model instance data | [optional]

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdRecordsUploadCsvPost**
> object dynamicDataIdRecordsUploadCsvPost($id)

Upload CSV for this Dynamic Data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id

try {
    $result = $api_instance->dynamicDataIdRecordsUploadCsvPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdRecordsUploadCsvPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |

### Return type

**object**

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdReplacePost**
> \Swagger\Client\Model\DynamicData dynamicDataIdReplacePost($id, $data)

Replace attributes for a model instance and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | Model id
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | Model instance data

try {
    $result = $api_instance->dynamicDataIdReplacePost($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdReplacePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Model id |
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataIdTeamGet**
> \Swagger\Client\Model\Team dynamicDataIdTeamGet($id, $refresh)

Fetches belongsTo relation team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$id = "id_example"; // string | DynamicData id
$refresh = true; // bool | 

try {
    $result = $api_instance->dynamicDataIdTeamGet($id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataIdTeamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| DynamicData id |
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dynamicDataPost**
> \Swagger\Client\Model\DynamicData dynamicDataPost($data)

Create a new instance of the model and persist it into the data source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
Tweak\Api\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Tweak\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Tweak\Api\Api\DynamicDataApi();
$data = new \Swagger\Client\Model\DynamicData(); // \Swagger\Client\Model\DynamicData | Model instance data

try {
    $result = $api_instance->dynamicDataPost($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicDataApi->dynamicDataPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\DynamicData**](../Model/\Swagger\Client\Model\DynamicData.md)| Model instance data | [optional]

### Return type

[**\Swagger\Client\Model\DynamicData**](../Model/DynamicData.md)

### Authorization

[access_token](../../README.md#access_token)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, application/xml, text/xml
 - **Accept**: application/json, application/xml, text/xml, application/javascript, text/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

