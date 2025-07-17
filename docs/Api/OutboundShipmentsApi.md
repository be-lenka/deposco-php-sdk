# BeLenka\Deposco\OutboundShipmentsApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOutboundShipment()**](OutboundShipmentsApi.md#getOutboundShipment) | **GET** /shipments/outboundShipments/{shipmentId} | Get an outbound shipment |
| [**getOutboundShipmentLine()**](OutboundShipmentsApi.md#getOutboundShipmentLine) | **GET** /shipments/outboundShipments/{shipmentId}/shipmentLines/{shipmentLineId} | Get a shipment line for an outbound shipment |
| [**getOutboundShipmentLines()**](OutboundShipmentsApi.md#getOutboundShipmentLines) | **GET** /shipments/outboundShipments/{shipmentId}/shipmentLines | Get a list of shipment lines for an outbound shipment |
| [**getOutboundShipments()**](OutboundShipmentsApi.md#getOutboundShipments) | **GET** /shipments/outboundShipments | Get a list of outbound shipments |


## `getOutboundShipment()`

```php
getOutboundShipment($shipment_id): \BeLenka\Deposco\Model\OutboundShipmentDTO
```

Get an outbound shipment

Retrieves the details of an existing outbound shipment. Provide the unique identifier that was returned when the shipment was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\OutboundShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 56; // int | ID of the requested shipment.

try {
    $result = $apiInstance->getOutboundShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundShipmentsApi->getOutboundShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_id** | **int**| ID of the requested shipment. | |

### Return type

[**\BeLenka\Deposco\Model\OutboundShipmentDTO**](../Model/OutboundShipmentDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboundShipmentLine()`

```php
getOutboundShipmentLine($shipment_id, $shipment_line_id): \BeLenka\Deposco\Model\OutboundShipmentLineDTO
```

Get a shipment line for an outbound shipment

Retrieves the details of an existing shipment line for an outbound shipment. Provide the unique identifiers that were returned when the outbound shipment and shipment line were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\OutboundShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 56; // int | ID of the requested shipment.
$shipment_line_id = 56; // int | ID of the requested shipment line.

try {
    $result = $apiInstance->getOutboundShipmentLine($shipment_id, $shipment_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundShipmentsApi->getOutboundShipmentLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_id** | **int**| ID of the requested shipment. | |
| **shipment_line_id** | **int**| ID of the requested shipment line. | |

### Return type

[**\BeLenka\Deposco\Model\OutboundShipmentLineDTO**](../Model/OutboundShipmentLineDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboundShipmentLines()`

```php
getOutboundShipmentLines($shipment_id, $search_id, $page_size, $created_after, $updated_after, $shipment_line_number): \BeLenka\Deposco\Model\OutboundShipmentLineCollectionDTO
```

Get a list of shipment lines for an outbound shipment

Retrieves a list of shipment lines for an outbound shipment, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the shipment was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\OutboundShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 56; // int | ID of the requested shipment.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$shipment_line_number = 'shipment_line_number_example'; // string | Line number of the requested shipment line.

try {
    $result = $apiInstance->getOutboundShipmentLines($shipment_id, $search_id, $page_size, $created_after, $updated_after, $shipment_line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundShipmentsApi->getOutboundShipmentLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_id** | **int**| ID of the requested shipment. | |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **shipment_line_number** | **string**| Line number of the requested shipment line. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\OutboundShipmentLineCollectionDTO**](../Model/OutboundShipmentLineCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboundShipments()`

```php
getOutboundShipments($business_unit, $search_id, $page_size, $created_after, $updated_after, $shipment_number, $order_number, $customer_order_number, $shipment_status, $shipped_after): \BeLenka\Deposco\Model\OutboundShipmentCollectionDTO
```

Get a list of outbound shipments

Retrieves a list of outbound shipments, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\OutboundShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$shipment_number = 'shipment_number_example'; // string | Number of the requested shipment.
$order_number = 'order_number_example'; // string | Order number of the order that is related to the requested shipments.
$customer_order_number = 'customer_order_number_example'; // string | Customer order number for the order that is related to the requested shipments. This parameter filters results based on the `customerOrderNumber` field on the order header. For fulfillment orders that were generated from customer orders in Bright Order, `customerOrderNumber` is set to the `externalOrderNumber` on the customer order header.
$shipment_status = 'shipment_status_example'; // string | Status of the requested shipments.
$shipped_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding shipments that were shipped on or after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. Note that results are returned based on the actual ship date, not the shipment creation date.

try {
    $result = $apiInstance->getOutboundShipments($business_unit, $search_id, $page_size, $created_after, $updated_after, $shipment_number, $order_number, $customer_order_number, $shipment_status, $shipped_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundShipmentsApi->getOutboundShipments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **shipment_number** | **string**| Number of the requested shipment. | [optional] |
| **order_number** | **string**| Order number of the order that is related to the requested shipments. | [optional] |
| **customer_order_number** | **string**| Customer order number for the order that is related to the requested shipments. This parameter filters results based on the &#x60;customerOrderNumber&#x60; field on the order header. For fulfillment orders that were generated from customer orders in Bright Order, &#x60;customerOrderNumber&#x60; is set to the &#x60;externalOrderNumber&#x60; on the customer order header. | [optional] |
| **shipment_status** | **string**| Status of the requested shipments. | [optional] |
| **shipped_after** | **\DateTime**| Search field for finding shipments that were shipped on or after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. Note that results are returned based on the actual ship date, not the shipment creation date. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\OutboundShipmentCollectionDTO**](../Model/OutboundShipmentCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
