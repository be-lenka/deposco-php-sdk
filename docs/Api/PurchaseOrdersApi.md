# BeLenka\Deposco\PurchaseOrdersApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPurchaseOrder()**](PurchaseOrdersApi.md#getPurchaseOrder) | **GET** /orders/purchaseOrders/{orderId} | Get a purchase order |
| [**getPurchaseOrderLine()**](PurchaseOrdersApi.md#getPurchaseOrderLine) | **GET** /orders/purchaseOrders/{orderId}/orderLines/{orderLineId} | Get an order line for a purchase order |
| [**getPurchaseOrderLines()**](PurchaseOrdersApi.md#getPurchaseOrderLines) | **GET** /orders/purchaseOrders/{orderId}/orderLines | Get a list of order lines for a purchase order |
| [**getPurchaseOrderOrderStatus()**](PurchaseOrdersApi.md#getPurchaseOrderOrderStatus) | **GET** /orders/purchaseOrders/{orderId}/status | Get the status of a purchase order |
| [**getPurchaseOrders()**](PurchaseOrdersApi.md#getPurchaseOrders) | **GET** /orders/purchaseOrders | Get a list of purchase orders |
| [**postPurchaseOrder()**](PurchaseOrdersApi.md#postPurchaseOrder) | **POST** /orders/purchaseOrders | Create or update a purchase order |
| [**postPurchaseOrderCancellation()**](PurchaseOrdersApi.md#postPurchaseOrderCancellation) | **POST** /orders/purchaseOrders/{orderId}/cancellations | Cancel all or part of a purchase order |
| [**postPurchaseOrderOrderStatus()**](PurchaseOrdersApi.md#postPurchaseOrderOrderStatus) | **POST** /orders/purchaseOrders/{orderId}/status | Update the status of a purchase order |
| [**updatePurchaseOrderLine()**](PurchaseOrdersApi.md#updatePurchaseOrderLine) | **POST** /orders/purchaseOrders/{orderId}/orderLines/{orderLineId} | Update an order line for a purchase order |


## `getPurchaseOrder()`

```php
getPurchaseOrder($order_id): \BeLenka\Deposco\Model\PurchaseOrderDTO
```

Get a purchase order

Retrieves the details of an existing purchase order. Provide the unique identifier that was returned when the purchase order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.

try {
    $result = $apiInstance->getPurchaseOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->getPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |

### Return type

[**\BeLenka\Deposco\Model\PurchaseOrderDTO**](../Model/PurchaseOrderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchaseOrderLine()`

```php
getPurchaseOrderLine($order_id, $order_line_id): \BeLenka\Deposco\Model\PurchaseOrderLineDTO
```

Get an order line for a purchase order

Retrieves the details of an existing order line for a purchase order. Provide the unique identifiers that were returned when the purchase order and order line were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_line_id = 56; // int | ID of the requested order line.

try {
    $result = $apiInstance->getPurchaseOrderLine($order_id, $order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->getPurchaseOrderLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_line_id** | **int**| ID of the requested order line. | |

### Return type

[**\BeLenka\Deposco\Model\PurchaseOrderLineDTO**](../Model/PurchaseOrderLineDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchaseOrderLines()`

```php
getPurchaseOrderLines($order_id, $search_id, $page_size, $created_after, $updated_after, $line_number, $order_line_status): \BeLenka\Deposco\Model\PurchaseOrderLineCollectionDTO
```

Get a list of order lines for a purchase order

Retrieves a list of order lines for a purchase order, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the purchase order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\PurchaseOrdersApi(
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
$order_line_status = new \BeLenka\Deposco\Model\PropertiesOrderLineStatus(); // PropertiesOrderLineStatus | Status of the requested order line.

try {
    $result = $apiInstance->getPurchaseOrderLines($order_id, $search_id, $page_size, $created_after, $updated_after, $line_number, $order_line_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->getPurchaseOrderLines: ', $e->getMessage(), PHP_EOL;
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
| **order_line_status** | [**PropertiesOrderLineStatus**](../Model/.md)| Status of the requested order line. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\PurchaseOrderLineCollectionDTO**](../Model/PurchaseOrderLineCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchaseOrderOrderStatus()`

```php
getPurchaseOrderOrderStatus($order_id): \BeLenka\Deposco\Model\PurchaseOrderStatusDTO
```

Get the status of a purchase order

Retrieves the status of an existing purchase order. Provide the unique identifier that was returned when the purchase order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.

try {
    $result = $apiInstance->getPurchaseOrderOrderStatus($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->getPurchaseOrderOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |

### Return type

[**\BeLenka\Deposco\Model\PurchaseOrderStatusDTO**](../Model/PurchaseOrderStatusDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchaseOrders()`

```php
getPurchaseOrders($business_unit, $search_id, $page_size, $created_after, $updated_after, $number, $order_status): \BeLenka\Deposco\Model\PurchaseOrderCollectionDTO
```

Get a list of purchase orders

Retrieves a list of purchase orders, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$page_size = 25; // int | Number of records returned on each page of the search results. The default page size is 25.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$number = 'number_example'; // string | Order number of the requested order.
$order_status = new \BeLenka\Deposco\Model\PropertiesOrderStatus(); // PropertiesOrderStatus | Status of the requested order.

try {
    $result = $apiInstance->getPurchaseOrders($business_unit, $search_id, $page_size, $created_after, $updated_after, $number, $order_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->getPurchaseOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 25. | [optional] [default to 25] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **number** | **string**| Order number of the requested order. | [optional] |
| **order_status** | [**PropertiesOrderStatus**](../Model/.md)| Status of the requested order. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\PurchaseOrderCollectionDTO**](../Model/PurchaseOrderCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPurchaseOrder()`

```php
postPurchaseOrder($purchase_order_dto): \BeLenka\Deposco\Model\PurchaseOrderDTO
```

Create or update a purchase order

Creates a new purchase order or updates data for an existing purchase order.  You can update data attributes, add an order line, or increase the quantity of an order line when the purchase order is in any status except for Closed or Canceled.  Decreasing the quantity of an order line is considered a cancellation. Use the endpoint for canceling all or part of a purchase order instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order_dto = new \BeLenka\Deposco\Model\PurchaseOrderDTO(); // \BeLenka\Deposco\Model\PurchaseOrderDTO

try {
    $result = $apiInstance->postPurchaseOrder($purchase_order_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->postPurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order_dto** | [**\BeLenka\Deposco\Model\PurchaseOrderDTO**](../Model/PurchaseOrderDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\PurchaseOrderDTO**](../Model/PurchaseOrderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPurchaseOrderCancellation()`

```php
postPurchaseOrderCancellation($order_id, $order_cancellation_dto): \BeLenka\Deposco\Model\PurchaseOrderDTO
```

Cancel all or part of a purchase order

Cancels an entire purchase order, order lines for a purchase order, or a partial quantity for order lines for a purchase order. Provide the unique identifier that was returned when the purchase order was created.  To cancel an entire purchase order, the order must have a status of New, Hold, In-Transit, Arrived, or Receiving.  To cancel an order line for a purchase order or a partial quantity of an order line, the order must have a status of New, Hold, In-Transit, Arrived, Receiving, or Partial Receipt, and the order line must have a status of New.  You can also cancel an entire purchase order if it has a status of Draft.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_cancellation_dto = new \BeLenka\Deposco\Model\OrderCancellationDTO(); // \BeLenka\Deposco\Model\OrderCancellationDTO

try {
    $result = $apiInstance->postPurchaseOrderCancellation($order_id, $order_cancellation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->postPurchaseOrderCancellation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_cancellation_dto** | [**\BeLenka\Deposco\Model\OrderCancellationDTO**](../Model/OrderCancellationDTO.md)|  | [optional] |

### Return type

[**\BeLenka\Deposco\Model\PurchaseOrderDTO**](../Model/PurchaseOrderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPurchaseOrderOrderStatus()`

```php
postPurchaseOrderOrderStatus($order_id, $value): \BeLenka\Deposco\Model\PurchaseOrderDTO
```

Update the status of a purchase order

Updates the status of an existing purchase order. Supported status updates include:  * From Draft to New, Hold, or Canceled * From New to Hold, In-Transit, Arrived, or Canceled * From Hold to New, In-Transit, Arrived, or Canceled * From In-Transit to New, Arrived, or Canceled * From Arrived to Canceled * From Receiving to Canceled * From Received to Closed    Provide the unique identifier that was returned when the purchase order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$value = 'value_example'; // string | Status to which the requested purchase order should be updated.

try {
    $result = $apiInstance->postPurchaseOrderOrderStatus($order_id, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->postPurchaseOrderOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **value** | **string**| Status to which the requested purchase order should be updated. | |

### Return type

[**\BeLenka\Deposco\Model\PurchaseOrderDTO**](../Model/PurchaseOrderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePurchaseOrderLine()`

```php
updatePurchaseOrderLine($order_id, $order_line_id, $purchase_order_line_dto): \BeLenka\Deposco\Model\PurchaseOrderLineDTO
```

Update an order line for a purchase order

Updates data for an existing order line for a purchase order. Provide the unique identifiers that were returned when the purchase order and order line were created.  You can update an order line when the purchase order is in any status except for Closed or Canceled.  Decreasing the quantity of an order line is considered a cancellation. Use the endpoint for canceling all or part of a purchase order instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_line_id = 56; // int | ID of the requested order line.
$purchase_order_line_dto = new \BeLenka\Deposco\Model\PurchaseOrderLineDTO(); // \BeLenka\Deposco\Model\PurchaseOrderLineDTO

try {
    $result = $apiInstance->updatePurchaseOrderLine($order_id, $order_line_id, $purchase_order_line_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->updatePurchaseOrderLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_line_id** | **int**| ID of the requested order line. | |
| **purchase_order_line_dto** | [**\BeLenka\Deposco\Model\PurchaseOrderLineDTO**](../Model/PurchaseOrderLineDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\PurchaseOrderLineDTO**](../Model/PurchaseOrderLineDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
