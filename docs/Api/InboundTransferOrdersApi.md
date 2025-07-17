# BeLenka\Deposco\InboundTransferOrdersApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInboundTransferOrder()**](InboundTransferOrdersApi.md#getInboundTransferOrder) | **GET** /orders/inboundTransferOrders/{orderId} | Get an inbound transfer order |
| [**getInboundTransferOrderLine()**](InboundTransferOrdersApi.md#getInboundTransferOrderLine) | **GET** /orders/inboundTransferOrders/{orderId}/orderLines/{orderLineId} | Get an order line for an inbound transfer order |
| [**getInboundTransferOrderLines()**](InboundTransferOrdersApi.md#getInboundTransferOrderLines) | **GET** /orders/inboundTransferOrders/{orderId}/orderLines | Get a list of order lines for an inbound transfer order |
| [**getInboundTransferOrderStatus()**](InboundTransferOrdersApi.md#getInboundTransferOrderStatus) | **GET** /orders/inboundTransferOrders/{orderId}/status | Get the status of an inbound transfer order |
| [**getInboundTransferOrders()**](InboundTransferOrdersApi.md#getInboundTransferOrders) | **GET** /orders/inboundTransferOrders | Get a list of inbound transfer orders |
| [**postInboundTransferOrderCancellation()**](InboundTransferOrdersApi.md#postInboundTransferOrderCancellation) | **POST** /orders/inboundTransferOrders/{orderId}/cancellations | Cancel all or part of an inbound transfer order |
| [**postInboundTransferOrderStatus()**](InboundTransferOrdersApi.md#postInboundTransferOrderStatus) | **POST** /orders/inboundTransferOrders/{orderId}/status | Update the status of an inbound transfer order |
| [**postInboundTransferOrders()**](InboundTransferOrdersApi.md#postInboundTransferOrders) | **POST** /orders/inboundTransferOrders | Create or update an inbound transfer order |
| [**updateInboundTransferOrderLine()**](InboundTransferOrdersApi.md#updateInboundTransferOrderLine) | **POST** /orders/inboundTransferOrders/{orderId}/orderLines/{orderLineId} | Update an order line for an inbound transfer order |


## `getInboundTransferOrder()`

```php
getInboundTransferOrder($order_id): \BeLenka\Deposco\Model\InboundTransferOrderDTO
```

Get an inbound transfer order

Retrieves the details of an existing inbound transfer order. Provide the unique identifier that was returned when the inbound transfer order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\InboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.

try {
    $result = $apiInstance->getInboundTransferOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundTransferOrdersApi->getInboundTransferOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |

### Return type

[**\BeLenka\Deposco\Model\InboundTransferOrderDTO**](../Model/InboundTransferOrderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundTransferOrderLine()`

```php
getInboundTransferOrderLine($order_id, $order_line_id): \BeLenka\Deposco\Model\InboundTransferOrderLineDTO
```

Get an order line for an inbound transfer order

Retrieves the details of an existing order line for an inbound transfer order. Provide the unique identifiers that were returned when the inbound transfer order and order line were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\InboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_line_id = 56; // int | ID of the requested order line.

try {
    $result = $apiInstance->getInboundTransferOrderLine($order_id, $order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundTransferOrdersApi->getInboundTransferOrderLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_line_id** | **int**| ID of the requested order line. | |

### Return type

[**\BeLenka\Deposco\Model\InboundTransferOrderLineDTO**](../Model/InboundTransferOrderLineDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundTransferOrderLines()`

```php
getInboundTransferOrderLines($order_id, $search_id, $page_size, $created_after, $updated_after, $line_number, $order_line_status): \BeLenka\Deposco\Model\GetInboundTransferOrderLines200Response
```

Get a list of order lines for an inbound transfer order

Retrieves a list of order lines for an inbound transfer order, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the inbound transfer order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\InboundTransferOrdersApi(
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
$order_line_status = new \BeLenka\Deposco\Model\InboundTransferOrderLineStatusDTOPropertiesOrderLineStatus(); // InboundTransferOrderLineStatusDTOPropertiesOrderLineStatus | Status of the requested order line.

try {
    $result = $apiInstance->getInboundTransferOrderLines($order_id, $search_id, $page_size, $created_after, $updated_after, $line_number, $order_line_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundTransferOrdersApi->getInboundTransferOrderLines: ', $e->getMessage(), PHP_EOL;
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
| **order_line_status** | [**InboundTransferOrderLineStatusDTOPropertiesOrderLineStatus**](../Model/.md)| Status of the requested order line. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\GetInboundTransferOrderLines200Response**](../Model/GetInboundTransferOrderLines200Response.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundTransferOrderStatus()`

```php
getInboundTransferOrderStatus($order_id): \BeLenka\Deposco\Model\InboundTransferOrderStatusDTO
```

Get the status of an inbound transfer order

Retrieves the status of an existing inbound transfer order. Provide the unique identifier that was returned when the inbound transfer order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\InboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.

try {
    $result = $apiInstance->getInboundTransferOrderStatus($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundTransferOrdersApi->getInboundTransferOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |

### Return type

[**\BeLenka\Deposco\Model\InboundTransferOrderStatusDTO**](../Model/InboundTransferOrderStatusDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboundTransferOrders()`

```php
getInboundTransferOrders($business_unit, $created_after, $updated_after, $search_id, $page_size, $number, $order_status): \BeLenka\Deposco\Model\GetInboundTransferOrders200Response
```

Get a list of inbound transfer orders

Retrieves a list of inbound transfer orders, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\InboundTransferOrdersApi(
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
$order_status = new \BeLenka\Deposco\Model\InboundTransferOrderStatusDTO(); // InboundTransferOrderStatusDTO | Status of the requested order.

try {
    $result = $apiInstance->getInboundTransferOrders($business_unit, $created_after, $updated_after, $search_id, $page_size, $number, $order_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundTransferOrdersApi->getInboundTransferOrders: ', $e->getMessage(), PHP_EOL;
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
| **order_status** | [**InboundTransferOrderStatusDTO**](../Model/.md)| Status of the requested order. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\GetInboundTransferOrders200Response**](../Model/GetInboundTransferOrders200Response.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postInboundTransferOrderCancellation()`

```php
postInboundTransferOrderCancellation($order_id, $order_cancellation_dto): \BeLenka\Deposco\Model\InboundTransferOrderDTO
```

Cancel all or part of an inbound transfer order

Cancels an entire inbound transfer order, order lines for an inbound transfer order, or a partial quantity for order lines for an inbound transfer order. Provide the unique identifier that was returned when the inbound transfer order was created.  The order must have a status of New or Receiving.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\InboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_cancellation_dto = new \BeLenka\Deposco\Model\OrderCancellationDTO(); // \BeLenka\Deposco\Model\OrderCancellationDTO

try {
    $result = $apiInstance->postInboundTransferOrderCancellation($order_id, $order_cancellation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundTransferOrdersApi->postInboundTransferOrderCancellation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_cancellation_dto** | [**\BeLenka\Deposco\Model\OrderCancellationDTO**](../Model/OrderCancellationDTO.md)|  | [optional] |

### Return type

[**\BeLenka\Deposco\Model\InboundTransferOrderDTO**](../Model/InboundTransferOrderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postInboundTransferOrderStatus()`

```php
postInboundTransferOrderStatus($order_id, $value): \BeLenka\Deposco\Model\InboundTransferOrderStatusDTO
```

Update the status of an inbound transfer order

Updates the status of an existing inbound transfer order from either New or Receiving to Canceled. Provide the unique identifier that was returned when the inbound transfer order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\InboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$value = 'value_example'; // string | Status to which the requested order should be updated.

try {
    $result = $apiInstance->postInboundTransferOrderStatus($order_id, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundTransferOrdersApi->postInboundTransferOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **value** | **string**| Status to which the requested order should be updated. | |

### Return type

[**\BeLenka\Deposco\Model\InboundTransferOrderStatusDTO**](../Model/InboundTransferOrderStatusDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postInboundTransferOrders()`

```php
postInboundTransferOrders($inbound_transfer_order_dto): \BeLenka\Deposco\Model\InboundTransferOrderDTO
```

Create or update an inbound transfer order

Creates a new inbound transfer order or updates data for an existing inbound transfer order.  You can update data attributes, add an order line, or increase the quantity of an order line when the inbound transfer order is in any status except Canceled.  Decreasing the quantity of an order line is considered a cancellation. Use the endpoint for canceling all or part of an inbound transfer order instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\InboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbound_transfer_order_dto = new \BeLenka\Deposco\Model\InboundTransferOrderDTO(); // \BeLenka\Deposco\Model\InboundTransferOrderDTO

try {
    $result = $apiInstance->postInboundTransferOrders($inbound_transfer_order_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundTransferOrdersApi->postInboundTransferOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **inbound_transfer_order_dto** | [**\BeLenka\Deposco\Model\InboundTransferOrderDTO**](../Model/InboundTransferOrderDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\InboundTransferOrderDTO**](../Model/InboundTransferOrderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInboundTransferOrderLine()`

```php
updateInboundTransferOrderLine($order_id, $order_line_id, $inbound_transfer_order_line_dto): \BeLenka\Deposco\Model\InboundTransferOrderLineDTO
```

Update an order line for an inbound transfer order

Updates data for an existing order line for an inbound transfer order. Provide the unique identifiers that were returned when the inbound transfer order and order line were created.  You can update an order line when the inbound transfer order is in any status except Canceled.  Decreasing the quantity of an order line is considered a cancellation. Use the endpoint for canceling all or part of an inbound transfer order instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\InboundTransferOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_line_id = 56; // int | ID of the requested order line.
$inbound_transfer_order_line_dto = new \BeLenka\Deposco\Model\InboundTransferOrderLineDTO(); // \BeLenka\Deposco\Model\InboundTransferOrderLineDTO

try {
    $result = $apiInstance->updateInboundTransferOrderLine($order_id, $order_line_id, $inbound_transfer_order_line_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundTransferOrdersApi->updateInboundTransferOrderLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_line_id** | **int**| ID of the requested order line. | |
| **inbound_transfer_order_line_dto** | [**\BeLenka\Deposco\Model\InboundTransferOrderLineDTO**](../Model/InboundTransferOrderLineDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\InboundTransferOrderLineDTO**](../Model/InboundTransferOrderLineDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
