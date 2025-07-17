# BeLenka\Deposco\OutboundTransferOrdersApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOutboundTransferOrder()**](OutboundTransferOrdersApi.md#getOutboundTransferOrder) | **GET** /orders/outboundTransferOrders/{orderId} | Get an outbound transfer order |
| [**getOutboundTransferOrderLine()**](OutboundTransferOrdersApi.md#getOutboundTransferOrderLine) | **GET** /orders/outboundTransferOrders/{orderId}/orderLines/{orderLineId} | Get an order line for an outbound transfer order |
| [**getOutboundTransferOrderLines()**](OutboundTransferOrdersApi.md#getOutboundTransferOrderLines) | **GET** /orders/outboundTransferOrders/{orderId}/orderLines | Get a list of order lines for an outbound transfer order |
| [**getOutboundTransferOrderStatus()**](OutboundTransferOrdersApi.md#getOutboundTransferOrderStatus) | **GET** /orders/outboundTransferOrders/{orderId}/status | Get the status of an outbound transfer order |
| [**getOutboundTransferOrders()**](OutboundTransferOrdersApi.md#getOutboundTransferOrders) | **GET** /orders/outboundTransferOrders | Get a list of outbound transfer orders |
| [**postOutboundTransferOrderCancellation()**](OutboundTransferOrdersApi.md#postOutboundTransferOrderCancellation) | **POST** /orders/outboundTransferOrders/{orderId}/cancellations | Cancel all or part of an outbound transfer order |
| [**postOutboundTransferOrderStatus()**](OutboundTransferOrdersApi.md#postOutboundTransferOrderStatus) | **POST** /orders/outboundTransferOrders/{orderId}/status | Update the status of an outbound transfer order |
| [**postOutboundTransferOrders()**](OutboundTransferOrdersApi.md#postOutboundTransferOrders) | **POST** /orders/outboundTransferOrders | Create or update an outbound transfer order |
| [**updateOutboundTransferOrderLine()**](OutboundTransferOrdersApi.md#updateOutboundTransferOrderLine) | **POST** /orders/outboundTransferOrders/{orderId}/orderLines/{orderLineId} | Update an order line for a outbound transfer order |


## `getOutboundTransferOrder()`

```php
getOutboundTransferOrder($order_id): \BeLenka\Deposco\Model\OutboundTransferOrderDTO
```

Get an outbound transfer order

Retrieves the details of an existing outbound transfer order. Provide the unique identifier that was returned when the outbound transfer order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\OutboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.

try {
    $result = $apiInstance->getOutboundTransferOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundTransferOrdersApi->getOutboundTransferOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |

### Return type

[**\BeLenka\Deposco\Model\OutboundTransferOrderDTO**](../Model/OutboundTransferOrderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboundTransferOrderLine()`

```php
getOutboundTransferOrderLine($order_id, $order_line_id): \BeLenka\Deposco\Model\OutboundTransferOrderLineDTO
```

Get an order line for an outbound transfer order

Retrieves the details of an existing order line for an outbound transfer order. Provide the unique identifiers that were returned when the outbound transfer order and order line were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\OutboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_line_id = 56; // int | ID of the requested order line.

try {
    $result = $apiInstance->getOutboundTransferOrderLine($order_id, $order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundTransferOrdersApi->getOutboundTransferOrderLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_line_id** | **int**| ID of the requested order line. | |

### Return type

[**\BeLenka\Deposco\Model\OutboundTransferOrderLineDTO**](../Model/OutboundTransferOrderLineDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboundTransferOrderLines()`

```php
getOutboundTransferOrderLines($order_id, $search_id, $page_size, $created_after, $updated_after, $line_number, $order_line_status): \BeLenka\Deposco\Model\GetOutboundTransferOrderLines200Response
```

Get a list of order lines for an outbound transfer order

Retrieves a list of order lines for an outbound transfer order, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the outbound transfer order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\OutboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$page_size = 25; // int | Number of records returned on each page of the search results. The default page size is 25.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$line_number = 'line_number_example'; // string | Line number of the requested order line.
$order_line_status = new \BeLenka\Deposco\Model\OrderLineStatus(); // OrderLineStatus | Status of the requested order line.

try {
    $result = $apiInstance->getOutboundTransferOrderLines($order_id, $search_id, $page_size, $created_after, $updated_after, $line_number, $order_line_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundTransferOrdersApi->getOutboundTransferOrderLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 25. | [optional] [default to 25] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **line_number** | **string**| Line number of the requested order line. | [optional] |
| **order_line_status** | [**OrderLineStatus**](../Model/.md)| Status of the requested order line. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\GetOutboundTransferOrderLines200Response**](../Model/GetOutboundTransferOrderLines200Response.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboundTransferOrderStatus()`

```php
getOutboundTransferOrderStatus($order_id): \BeLenka\Deposco\Model\OutboundTransferOrderStatusDTO
```

Get the status of an outbound transfer order

Retrieves the status of an existing outbound transfer order. Provide the unique identifier that was returned when the outbound transfer order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\OutboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.

try {
    $result = $apiInstance->getOutboundTransferOrderStatus($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundTransferOrdersApi->getOutboundTransferOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |

### Return type

[**\BeLenka\Deposco\Model\OutboundTransferOrderStatusDTO**](../Model/OutboundTransferOrderStatusDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutboundTransferOrders()`

```php
getOutboundTransferOrders($business_unit, $created_after, $updated_after, $search_id, $page_size, $number, $order_status): \BeLenka\Deposco\Model\GetOutboundTransferOrders200Response
```

Get a list of outbound transfer orders

Retrieves a list of outbound transfer orders, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\OutboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$page_size = 25; // int | Number of records returned on each page of the search results. The default page size is 25.
$number = 'number_example'; // string | Order number of the requested order.
$order_status = new \BeLenka\Deposco\Model\OutboundTransferOrderStatusDTOPropertiesOrderStatus(); // OutboundTransferOrderStatusDTOPropertiesOrderStatus | Status of the requested order.

try {
    $result = $apiInstance->getOutboundTransferOrders($business_unit, $created_after, $updated_after, $search_id, $page_size, $number, $order_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundTransferOrdersApi->getOutboundTransferOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 25. | [optional] [default to 25] |
| **number** | **string**| Order number of the requested order. | [optional] |
| **order_status** | [**OutboundTransferOrderStatusDTOPropertiesOrderStatus**](../Model/.md)| Status of the requested order. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\GetOutboundTransferOrders200Response**](../Model/GetOutboundTransferOrders200Response.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOutboundTransferOrderCancellation()`

```php
postOutboundTransferOrderCancellation($order_id, $order_cancellation_dto): \BeLenka\Deposco\Model\OutboundTransferOrderDTO
```

Cancel all or part of an outbound transfer order

Cancels an entire outbound transfer order, order lines for an outbound transfer order, or a partial quantity for order lines for an outbound transfer order. Provide the unique identifier that was returned when the outbound transfer order was created.  The order must have a status of New, Wave Built, or Back Ordered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\OutboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_cancellation_dto = new \BeLenka\Deposco\Model\OrderCancellationDTO(); // \BeLenka\Deposco\Model\OrderCancellationDTO

try {
    $result = $apiInstance->postOutboundTransferOrderCancellation($order_id, $order_cancellation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundTransferOrdersApi->postOutboundTransferOrderCancellation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_cancellation_dto** | [**\BeLenka\Deposco\Model\OrderCancellationDTO**](../Model/OrderCancellationDTO.md)|  | [optional] |

### Return type

[**\BeLenka\Deposco\Model\OutboundTransferOrderDTO**](../Model/OutboundTransferOrderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOutboundTransferOrderStatus()`

```php
postOutboundTransferOrderStatus($order_id, $value): \BeLenka\Deposco\Model\OutboundTransferOrderStatusDTO
```

Update the status of an outbound transfer order

Updates the status of an existing outbound transfer order. Supported status updates include:    * From New to Hold or Canceled * From Hold to New or Canceled * From Ready for Fulfillment to New, Hold, or Canceled * From Wave Built to New, Hold, or Canceled * From Back Ordered to New, Hold, or Canceled  Provide the unique identifier that was returned when the outbound transfer order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\OutboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$value = 'value_example'; // string | Status to which the requested order should be updated.

try {
    $result = $apiInstance->postOutboundTransferOrderStatus($order_id, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundTransferOrdersApi->postOutboundTransferOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **value** | **string**| Status to which the requested order should be updated. | |

### Return type

[**\BeLenka\Deposco\Model\OutboundTransferOrderStatusDTO**](../Model/OutboundTransferOrderStatusDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOutboundTransferOrders()`

```php
postOutboundTransferOrders($outbound_transfer_order_dto): \BeLenka\Deposco\Model\OutboundTransferOrderDTO
```

Create or update an outbound transfer order

Creates a new outbound transfer order or updates data for an existing outbound transfer order.  The requirements to update data for an outbound transfer order depend on the type of update:  - To update data attributes such as the shipping service (Ship Via), planned ship date, or notes, the order must have a status of Draft, New, Ready for Fulfillment, Wave Built, or Back Ordered.  - To add an order line or increase the quantity of an order line, the order must have a status of Draft, New, Ready for Fulfillment, Wave Built, or Back Ordered, and the order line must have a status of New or Back Ordered. If the order has a status of Released and there are backordered or unreleased quantities for the order line, then you can increase the quantity of the order line. The increase is applied to the backordered or unreleased quantity.  Decreasing the quantity of an order line is considered a cancellation. Use the endpoint for canceling all or part of an outbound transfer order instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\OutboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$outbound_transfer_order_dto = new \BeLenka\Deposco\Model\OutboundTransferOrderDTO(); // \BeLenka\Deposco\Model\OutboundTransferOrderDTO

try {
    $result = $apiInstance->postOutboundTransferOrders($outbound_transfer_order_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundTransferOrdersApi->postOutboundTransferOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **outbound_transfer_order_dto** | [**\BeLenka\Deposco\Model\OutboundTransferOrderDTO**](../Model/OutboundTransferOrderDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\OutboundTransferOrderDTO**](../Model/OutboundTransferOrderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOutboundTransferOrderLine()`

```php
updateOutboundTransferOrderLine($order_id, $order_line_id, $outbound_transfer_order_line_dto): \BeLenka\Deposco\Model\OutboundTransferOrderLineDTO
```

Update an order line for a outbound transfer order

Updates data for an existing order line for an outbound transfer order. Provide the unique identifiers that were returned when the outbound transfer order and order line were created.  The requirements to update data for an order line depend on the type of update:  - To update data attributes such as the shipping service (Ship Via), planned ship date, or notes, the order must have a status of Draft, New, Ready for Fulfillment, Wave Built, or Back Ordered.  - To increase the quantity of an order line, the order must have a status of Draft, New, Ready for Fulfillment, Wave Built, or Back Ordered, and the order line must have a status of New or Back Ordered. You can also increase the quantity of the order line if the order has a status of Released and there are backordered or unreleased quantities for the order line. The increase is applied to the backordered or unreleased quantity.  Decreasing the quantity of an order line is considered a cancellation. Use the endpoint for canceling all or part of an outbound transfer order instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\OutboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_line_id = 56; // int | ID of the requested order line.
$outbound_transfer_order_line_dto = new \BeLenka\Deposco\Model\OutboundTransferOrderLineDTO(); // \BeLenka\Deposco\Model\OutboundTransferOrderLineDTO

try {
    $result = $apiInstance->updateOutboundTransferOrderLine($order_id, $order_line_id, $outbound_transfer_order_line_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundTransferOrdersApi->updateOutboundTransferOrderLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_line_id** | **int**| ID of the requested order line. | |
| **outbound_transfer_order_line_dto** | [**\BeLenka\Deposco\Model\OutboundTransferOrderLineDTO**](../Model/OutboundTransferOrderLineDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\OutboundTransferOrderLineDTO**](../Model/OutboundTransferOrderLineDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
