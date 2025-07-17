# BeLenka\Deposco\CustomerOrdersApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomerOrder()**](CustomerOrdersApi.md#getCustomerOrder) | **GET** /orders/customerOrders/{orderId} | Get a customer order |
| [**getCustomerOrderLine()**](CustomerOrdersApi.md#getCustomerOrderLine) | **GET** /orders/customerOrders/{orderId}/customerOrderLines/{orderLineId} | Get an order line for a customer order |
| [**getCustomerOrderLines()**](CustomerOrdersApi.md#getCustomerOrderLines) | **GET** /orders/customerOrders/{orderId}/customerOrderLines | Get a list of order lines for a customer order |
| [**getCustomerOrders()**](CustomerOrdersApi.md#getCustomerOrders) | **GET** /orders/customerOrders | Get a list of customer orders |
| [**postCustomerOrder()**](CustomerOrdersApi.md#postCustomerOrder) | **POST** /orders/customerOrders | Create or update a customer order |


## `getCustomerOrder()`

```php
getCustomerOrder($order_id): \BeLenka\Deposco\Model\CustomerOrderResponseDTO
```

Get a customer order

Retrieves the details of an existing customer order. Provide the unique identifier for the customer order.       <div class=\"alert alert-info d-flex gap-3\">         <i class=\"material-icons\">info</i><p class=\"mb-0\"><b>Product Subscription Requirement</b>:       Enterprise Order Management</p> </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CustomerOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.

try {
    $result = $apiInstance->getCustomerOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerOrdersApi->getCustomerOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |

### Return type

[**\BeLenka\Deposco\Model\CustomerOrderResponseDTO**](../Model/CustomerOrderResponseDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerOrderLine()`

```php
getCustomerOrderLine($order_id, $order_line_id): \BeLenka\Deposco\Model\CustomerOrderLineDTO
```

Get an order line for a customer order

Retrieves the details of an existing order line for a customer order. Provide the unique identifiers for the customer order and order line.       <div class=\"alert alert-info d-flex gap-3\">         <i class=\"material-icons\">info</i><p class=\"mb-0\"><b>Product Subscription Requirement</b>:       Enterprise Order Management</p> </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CustomerOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_line_id = 56; // int | ID of the requested order line.

try {
    $result = $apiInstance->getCustomerOrderLine($order_id, $order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerOrdersApi->getCustomerOrderLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_line_id** | **int**| ID of the requested order line. | |

### Return type

[**\BeLenka\Deposco\Model\CustomerOrderLineDTO**](../Model/CustomerOrderLineDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerOrderLines()`

```php
getCustomerOrderLines($order_id, $search_id, $created_after, $updated_after, $page_size, $external_line_number): \BeLenka\Deposco\Model\CustomerOrderLineCollectionDTO
```

Get a list of order lines for a customer order

Retrieves a list of order lines for a customer order, paginated and sorted by ID in descending order. Provide the unique identifier for the customer order.       <div class=\"alert alert-info d-flex gap-3\">         <i class=\"material-icons\">info</i><p class=\"mb-0\"><b>Product Subscription Requirement</b>:       Enterprise Order Management</p> </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CustomerOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$page_size = 25; // int | Number of records returned on each page of the search results. The default page size is 25.
$external_line_number = 'external_line_number_example'; // string | Search field for external line number

try {
    $result = $apiInstance->getCustomerOrderLines($order_id, $search_id, $created_after, $updated_after, $page_size, $external_line_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerOrdersApi->getCustomerOrderLines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 25. | [optional] [default to 25] |
| **external_line_number** | **string**| Search field for external line number | [optional] |

### Return type

[**\BeLenka\Deposco\Model\CustomerOrderLineCollectionDTO**](../Model/CustomerOrderLineCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerOrders()`

```php
getCustomerOrders($business_unit, $search_id, $created_after, $updated_after, $page_size, $external_order_number, $trading_partner_code): \BeLenka\Deposco\Model\CustomerOrderResponseCollectionDTO
```

Get a list of customer orders

Retrieves a list of customer orders, paginated and sorted by ID in descending order.       <div class=\"alert alert-info d-flex gap-3\">         <i class=\"material-icons\">info</i><p class=\"mb-0\"><b>Product Subscription Requirement</b>:       Enterprise Order Management</p> </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CustomerOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$page_size = 25; // int | Number of records returned on each page of the search results. The default page size is 25.
$external_order_number = 'external_order_number_example'; // string | Order number in an external system for the requested customer order.
$trading_partner_code = 'trading_partner_code_example'; // string | Code for the trading partner that is assigned to the requested customer orders.

try {
    $result = $apiInstance->getCustomerOrders($business_unit, $search_id, $created_after, $updated_after, $page_size, $external_order_number, $trading_partner_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerOrdersApi->getCustomerOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 25. | [optional] [default to 25] |
| **external_order_number** | **string**| Order number in an external system for the requested customer order. | [optional] |
| **trading_partner_code** | **string**| Code for the trading partner that is assigned to the requested customer orders. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\CustomerOrderResponseCollectionDTO**](../Model/CustomerOrderResponseCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCustomerOrder()`

```php
postCustomerOrder($customer_order_request_dto): \BeLenka\Deposco\Model\AsyncRequestIdDTO
```

Create or update a customer order

Creates a new customer order or updates data for an existing customer order.  If the customer order is successfully received in Deposco, then an HTTP status code of 202 is returned in the response as well as a request status of Pending and a transaction ID. Event-based processing then takes a new order through automated validations and actions to prepare the order for fulfillment. If acknowledgements have been enabled in the order management profile that is assigned to the order, then the order may be accepted or rejected.  You can then retrieve the status of the staged request by using the GET operation with the asynchronous operations (async) endpoint and the transaction ID to determine the status of the order, or use the GET operation with the customer order endpoint to retrieve functional information for the order.  The requirements to update data for a customer order depend on the status of the customer order and any associated fulfillment orders, as well as the order management profile that is assigned to the order.  Decreasing the quantity of an order line is considered a cancellation. Use the endpoint for canceling all or part of a customer order instead.       <div class=\"alert alert-info d-flex gap-3\">         <i class=\"material-icons\">info</i><p class=\"mb-0\"><b>Product Subscription Requirement</b>:       Enterprise Order Management</p> </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CustomerOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_order_request_dto = new \BeLenka\Deposco\Model\CustomerOrderRequestDTO(); // \BeLenka\Deposco\Model\CustomerOrderRequestDTO

try {
    $result = $apiInstance->postCustomerOrder($customer_order_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerOrdersApi->postCustomerOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_order_request_dto** | [**\BeLenka\Deposco\Model\CustomerOrderRequestDTO**](../Model/CustomerOrderRequestDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\AsyncRequestIdDTO**](../Model/AsyncRequestIdDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
