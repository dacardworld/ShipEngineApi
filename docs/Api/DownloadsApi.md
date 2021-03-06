# ShipEngineApi\DownloadsApi

All URIs are relative to *https://api.shipengine.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadFile**](DownloadsApi.md#downloadFile) | **GET** /v1/downloads/{dir}/{subdir}/{filename} | Download File



## downloadFile

> \SplFileObject downloadFile($subdir, $filename, $dir, $download)

Download File

Get File

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = ShipEngineApi\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ShipEngineApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new ShipEngineApi\Api\DownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subdir = 'subdir_example'; // string | 
$filename = 'filename_example'; // string | 
$dir = 'dir_example'; // string | 
$download = 'download_example'; // string | 

try {
    $result = $apiInstance->downloadFile($subdir, $filename, $dir, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadsApi->downloadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subdir** | **string**|  |
 **filename** | **string**|  |
 **dir** | **string**|  |
 **download** | **string**|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/pdf, image/png, application/zpl, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

