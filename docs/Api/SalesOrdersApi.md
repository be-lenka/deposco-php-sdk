# BeLenka\Deposco\SalesOrdersApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSalesOrder()**](SalesOrdersApi.md#getSalesOrder) | **GET** /orders/salesOrders/{orderId} | Get a sales order |
| [**getSalesOrderLine()**](SalesOrdersApi.md#getSalesOrderLine) | **GET** /orders/salesOrders/{orderId}/orderLines/{orderLineId} | Get an order line for a sales order |
| [**getSalesOrderLines()**](SalesOrdersApi.md#getSalesOrderLines) | **GET** /orders/salesOrders/{orderId}/orderLines | Get a list of order lines for a sales order |
| [**getSalesOrderStatus()**](SalesOrdersApi.md#getSalesOrderStatus) | **GET** /orders/salesOrders/{orderId}/status | Get the status of a sales order |
| [**getSalesOrders()**](SalesOrdersApi.md#getSalesOrders) | **GET** /orders/salesOrders | Get a list of sales orders |
| [**postSalesOrderCancellation()**](SalesOrdersApi.md#postSalesOrderCancellation) | **POST** /orders/salesOrders/{orderId}/cancellations | Cancel all or part of a sales order |
| [**postSalesOrderStatus()**](SalesOrdersApi.md#postSalesOrderStatus) | **POST** /orders/salesOrders/{orderId}/status | Update the status of a sales order |
| [**postSalesOrders()**](SalesOrdersApi.md#postSalesOrders) | **POST** /orders/salesOrders | Create or update a sales order |
| [**updateSalesOrderLine()**](SalesOrdersApi.md#updateSalesOrderLine) | **POST** /orders/salesOrders/{orderId}/orderLines/{orderLineId} | Update an order line for a sales order |


## `getSalesOrder()`

```php
getSalesOrder($order_id): \BeLenka\Deposco\Model\SalesOrderDTO
```

Get a sales order

Retrieves the details of an existing sales order. Provide the unique identifier that was returned when the sales order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.

try {
    $result = $apiInstance->getSalesOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->getSalesOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |

### Return type

[**\BeLenka\Deposco\Model\SalesOrderDTO**](../Model/SalesOrderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesOrderLine()`

```php
getSalesOrderLine($order_id, $order_line_id): \BeLenka\Deposco\Model\SalesOrderLineDTO
```

Get an order line for a sales order

Retrieves the details of an existing order line for a sales order. Provide the unique identifiers that were returned when the sales order and order line were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_line_id = 56; // int | ID of the requested order line.

try {
    $result = $apiInstance->getSalesOrderLine($order_id, $order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->getSalesOrderLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_line_id** | **int**| ID of the requested order line. | |

### Return type

[**\BeLenka\Deposco\Model\SalesOrderLineDTO**](../Model/SalesOrderLineDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesOrderLines()`

```php
getSalesOrderLines($order_id, $search_id, $page_size, $created_after, $updated_after, $line_number, $order_line_status): \BeLenka\Deposco\Model\SalesOrderLineCollectionDTO
```

Get a list of order lines for a sales order

Retrieves a list of order lines for a sales order, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the sales order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\SalesOrdersApi(
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
    $result = $apiInstance->getSalesOrderLines($order_id, $search_id, $page_size, $created_after, $updated_after, $line_number, $order_line_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->getSalesOrderLines: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\Deposco\Model\SalesOrderLineCollectionDTO**](../Model/SalesOrderLineCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesOrderStatus()`

```php
getSalesOrderStatus($order_id): \BeLenka\Deposco\Model\SalesOrderStatusDTO
```

Get the status of a sales order

Retrieves the status of an existing sales order. Provide the unique identifier that was returned when the sales order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.

try {
    $result = $apiInstance->getSalesOrderStatus($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->getSalesOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |

### Return type

[**\BeLenka\Deposco\Model\SalesOrderStatusDTO**](../Model/SalesOrderStatusDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesOrders()`

```php
getSalesOrders($business_unit, $created_after, $updated_after, $search_id, $page_size, $number, $order_status): \BeLenka\Deposco\Model\SalesOrderCollectionDTO
```

Get a list of sales orders

Retrieves a list of sales orders, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\SalesOrdersApi(
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
$order_status = new \BeLenka\Deposco\Model\OrderStatus(); // OrderStatus | Status of the requested order.

try {
    $result = $apiInstance->getSalesOrders($business_unit, $created_after, $updated_after, $search_id, $page_size, $number, $order_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->getSalesOrders: ', $e->getMessage(), PHP_EOL;
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
| **order_status** | [**OrderStatus**](../Model/.md)| Status of the requested order. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\SalesOrderCollectionDTO**](../Model/SalesOrderCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesOrderCancellation()`

```php
postSalesOrderCancellation($order_id, $order_cancellation_dto): \BeLenka\Deposco\Model\SalesOrderDTO
```

Cancel all or part of a sales order

Cancels an entire sales order, order lines for a sales order, or a partial quantity for order lines for a sales order. Provide the unique identifier that was returned when the sales order was created.  The order must have a status of New, Hold, Ready for Fulfillment, Wave Built, or Back Ordered. In addition, an entire order can be canceled if it has a status of Draft, and a partial quantity of an order line can be canceled if the order has a status of Partially Released and there are backordered quantities for the order line. The cancellation can be applied only to the backordered quantity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_cancellation_dto = new \BeLenka\Deposco\Model\OrderCancellationDTO(); // \BeLenka\Deposco\Model\OrderCancellationDTO

try {
    $result = $apiInstance->postSalesOrderCancellation($order_id, $order_cancellation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->postSalesOrderCancellation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_cancellation_dto** | [**\BeLenka\Deposco\Model\OrderCancellationDTO**](../Model/OrderCancellationDTO.md)|  | [optional] |

### Return type

[**\BeLenka\Deposco\Model\SalesOrderDTO**](../Model/SalesOrderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesOrderStatus()`

```php
postSalesOrderStatus($order_id, $value): \BeLenka\Deposco\Model\SalesOrderDTO
```

Update the status of a sales order

Updates the status of an existing sales order. For example, you can update the status of an order from Hold to New when it is ready for fulfillment. Supported status updates include:  * From Draft to New, Hold, or Canceled * From New to Hold or Canceled * From Hold to New or Canceled * From Ready for Fulfillment to New, Hold, or Canceled * From Wave Built to New, Hold, or Canceled * From Back Ordered to New, Hold, or Canceled  Provide the unique identifier that was returned when the sales order was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$value = 'value_example'; // string | Status to which the requested sales order should be updated.

try {
    $result = $apiInstance->postSalesOrderStatus($order_id, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->postSalesOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **value** | **string**| Status to which the requested sales order should be updated. | |

### Return type

[**\BeLenka\Deposco\Model\SalesOrderDTO**](../Model/SalesOrderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesOrders()`

```php
postSalesOrders($sales_order_dto): \BeLenka\Deposco\Model\SalesOrderDTO
```

Create or update a sales order

Creates a new sales order or updates data for an existing sales order.  The requirements to update data for a sales order depend on the type of update:  * To update data attributes such as the shipping address, shipping service (Ship Via), planned ship date, or notes, the order must have a status of Draft, New, Hold, Ready for Fulfillment, Wave Built, or Back Ordered. * To add an order line or increase the quantity of an order line, the order must have a status of Draft, New, Hold, Ready for Fulfillment, Wave Built, or Back Ordered, and the order line must have a status of New or Back Ordered. If the order has a status of either Partially Released or Released and there are backordered or unreleased quantities for the order line, then you can increase the quantity of the order line. The increase is applied to the backordered or unreleased quantity.  Decreasing the quantity of an order line is considered a cancellation. Use the endpoint for canceling all or part of a sales order instead.  If the sales order is associated with a customer order, then updates are not allowed. The customer order must be updated instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order_dto = new \BeLenka\Deposco\Model\SalesOrderDTO(); // \BeLenka\Deposco\Model\SalesOrderDTO

try {
    $result = $apiInstance->postSalesOrders($sales_order_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->postSalesOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order_dto** | [**\BeLenka\Deposco\Model\SalesOrderDTO**](../Model/SalesOrderDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\SalesOrderDTO**](../Model/SalesOrderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSalesOrderLine()`

```php
updateSalesOrderLine($order_id, $order_line_id, $sales_order_line_dto): \BeLenka\Deposco\Model\SalesOrderLineDTO
```

Update an order line for a sales order

Updates data for an existing order line for a sales order. Provide the unique identifiers that were returned when the sales order and order line were created.  The requirements to update data for an order line depend on the type of update:  * To update data attributes such as lot numbers or notes, the order must have a status of Draft, New, Hold, Ready for Fulfillment, Wave Built, or Back Ordered. * To increase the quantity of an order line, the order must have a status of New, Hold, Ready for Fulfillment, Wave Built, or Back Ordered, and the order line must have a status of New or Back Ordered. If the order has a status of either Partially Released or Released and there are backordered or unreleased quantities for the order line, then you can increase the quantity of the order line. The increase is applied to the backordered or unreleased quantity.  Decreasing the quantity of an order line is considered a cancellation. Use the endpoint for canceling all or part of a sales order instead.  If the sales order is associated with a customer order, then updates are not allowed. The customer order must be updated instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_line_id = 56; // int | ID of the requested order line.
$sales_order_line_dto = new \BeLenka\Deposco\Model\SalesOrderLineDTO(); // \BeLenka\Deposco\Model\SalesOrderLineDTO

try {
    $result = $apiInstance->updateSalesOrderLine($order_id, $order_line_id, $sales_order_line_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->updateSalesOrderLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_line_id** | **int**| ID of the requested order line. | |
| **sales_order_line_dto** | [**\BeLenka\Deposco\Model\SalesOrderLineDTO**](../Model/SalesOrderLineDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\SalesOrderLineDTO**](../Model/SalesOrderLineDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
