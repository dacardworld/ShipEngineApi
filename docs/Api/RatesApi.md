# ShipEngineApi\RatesApi

All URIs are relative to *https://api.shipengine.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calculateRates**](RatesApi.md#calculateRates) | **POST** /v1/rates | Get Shipping Rates
[**compareBulkRates**](RatesApi.md#compareBulkRates) | **POST** /v1/rates/bulk | Get Bulk Rates
[**estimateRates**](RatesApi.md#estimateRates) | **POST** /v1/rates/estimate | Estimate Rates
[**getRateById**](RatesApi.md#getRateById) | **GET** /v1/rates/{rate_id} | Get Rate By ID



## calculateRates

> \ShipEngineApi\Model\CalculateRatesResponseBody calculateRates($calculate_rates_request_body)

Get Shipping Rates

It's not uncommon that you want to give your customer the choice between whether they want to ship the fastest, cheapest, or the most trusted route. Most companies don't solely ship things using a single shipping option; so we provide functionality to show you all your options!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = ShipEngineApi\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ShipEngineApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new ShipEngineApi\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calculate_rates_request_body = new \ShipEngineApi\Model\CalculateRatesRequestBody(); // \ShipEngineApi\Model\CalculateRatesRequestBody | 

try {
    $result = $apiInstance->calculateRates($calculate_rates_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->calculateRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **calculate_rates_request_body** | [**\ShipEngineApi\Model\CalculateRatesRequestBody**](../Model/CalculateRatesRequestBody.md)|  |

### Return type

[**\ShipEngineApi\Model\CalculateRatesResponseBody**](../Model/CalculateRatesResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## compareBulkRates

> \ShipEngineApi\Model\BulkRate[] compareBulkRates($compare_bulk_rates_request_body)

Get Bulk Rates

Get Bulk Shipment Rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = ShipEngineApi\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ShipEngineApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new ShipEngineApi\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$compare_bulk_rates_request_body = new \ShipEngineApi\Model\CompareBulkRatesRequestBody(); // \ShipEngineApi\Model\CompareBulkRatesRequestBody | 

try {
    $result = $apiInstance->compareBulkRates($compare_bulk_rates_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->compareBulkRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **compare_bulk_rates_request_body** | [**\ShipEngineApi\Model\CompareBulkRatesRequestBody**](../Model/CompareBulkRatesRequestBody.md)|  |

### Return type

[**\ShipEngineApi\Model\BulkRate[]**](../Model/BulkRate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## estimateRates

> RateEstimate[] estimateRates($estimate_rates_request_body)

Estimate Rates

Get Rate Estimates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = ShipEngineApi\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ShipEngineApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new ShipEngineApi\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$estimate_rates_request_body = new \ShipEngineApi\Model\EstimateRatesRequestBody(); // \ShipEngineApi\Model\EstimateRatesRequestBody | 

try {
    $result = $apiInstance->estimateRates($estimate_rates_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->estimateRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **estimate_rates_request_body** | [**\ShipEngineApi\Model\EstimateRatesRequestBody**](../Model/EstimateRatesRequestBody.md)|  |

### Return type

[**RateEstimate[]**](../Model/RateEstimate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRateById

> \ShipEngineApi\Model\GetRateByIdResponseBody getRateById($rate_id)

Get Rate By ID

Retrieve a previously queried rate by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = ShipEngineApi\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ShipEngineApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API-Key', 'Bearer');


$apiInstance = new ShipEngineApi\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_id = 'rate_id_example'; // string | Rate ID

try {
    $result = $apiInstance->getRateById($rate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->getRateById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_id** | **string**| Rate ID |

### Return type

[**\ShipEngineApi\Model\GetRateByIdResponseBody**](../Model/GetRateByIdResponseBody.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

