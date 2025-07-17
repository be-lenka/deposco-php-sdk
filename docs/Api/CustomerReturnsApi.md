# BeLenka\Deposco\CustomerReturnsApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomerReturn()**](CustomerReturnsApi.md#getCustomerReturn) | **GET** /orders/customerReturns/{orderId} | Get a customer return |
| [**getCustomerReturnLine()**](CustomerReturnsApi.md#getCustomerReturnLine) | **GET** /orders/customerReturns/{orderId}/orderLines/{orderLineId} | Get an order line for a customer return |
| [**getCustomerReturnLines()**](CustomerReturnsApi.md#getCustomerReturnLines) | **GET** /orders/customerReturns/{orderId}/orderLines | Get a list of order lines for a customer returns |
| [**getCustomerReturnOrderStatus()**](CustomerReturnsApi.md#getCustomerReturnOrderStatus) | **GET** /orders/customerReturns/{orderId}/status | Get the status of a customer return |
| [**getCustomerReturns()**](CustomerReturnsApi.md#getCustomerReturns) | **GET** /orders/customerReturns | Get a list of customer returns |
| [**postCustomerReturnOrderStatus()**](CustomerReturnsApi.md#postCustomerReturnOrderStatus) | **POST** /orders/customerReturns/{orderId}/status | Updates the status of a customer return |
| [**postCustomerReturns()**](CustomerReturnsApi.md#postCustomerReturns) | **POST** /orders/customerReturns | Create or update a customer return |
| [**postCustomerReturnsCancellation()**](CustomerReturnsApi.md#postCustomerReturnsCancellation) | **POST** /orders/customerReturns/{orderId}/cancellations | Cancel all or part of an customer return |
| [**updateCustomerReturnLine()**](CustomerReturnsApi.md#updateCustomerReturnLine) | **POST** /orders/customerReturns/{orderId}/orderLines/{orderLineId} | Update an order line for a customer return |


## `getCustomerReturn()`

```php
getCustomerReturn($order_id): \BeLenka\Deposco\Model\CustomerReturnDTO
```

Get a customer return

Retrieves the details of an existing customer return. Provide the unique identifier that was returned when the customer return was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CustomerReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.

try {
    $result = $apiInstance->getCustomerReturn($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->getCustomerReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |

### Return type

[**\BeLenka\Deposco\Model\CustomerReturnDTO**](../Model/CustomerReturnDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerReturnLine()`

```php
getCustomerReturnLine($order_id, $order_line_id): \BeLenka\Deposco\Model\CustomerReturnLineDTO
```

Get an order line for a customer return

Retrieves the details of an existing order line for a customer return. Provide the unique identifiers that were returned when the customer return and order line were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CustomerReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_line_id = 56; // int | ID of the requested order line.

try {
    $result = $apiInstance->getCustomerReturnLine($order_id, $order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->getCustomerReturnLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_line_id** | **int**| ID of the requested order line. | |

### Return type

[**\BeLenka\Deposco\Model\CustomerReturnLineDTO**](../Model/CustomerReturnLineDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerReturnLines()`

```php
getCustomerReturnLines($order_id, $search_id, $page_size, $created_after, $updated_after, $line_number, $order_line_status): \BeLenka\Deposco\Model\CustomerReturnLineCollectionDTO
```

Get a list of order lines for a customer returns

Retrieves a list of order lines for a customer return, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the customer return was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CustomerReturnsApi(
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
$order_line_status = new \BeLenka\Deposco\Model\CustomerReturnLineStatusDTOPropertiesOrderLineStatus(); // CustomerReturnLineStatusDTOPropertiesOrderLineStatus | Status of the requested order line.

try {
    $result = $apiInstance->getCustomerReturnLines($order_id, $search_id, $page_size, $created_after, $updated_after, $line_number, $order_line_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->getCustomerReturnLines: ', $e->getMessage(), PHP_EOL;
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
| **order_line_status** | [**CustomerReturnLineStatusDTOPropertiesOrderLineStatus**](../Model/.md)| Status of the requested order line. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\CustomerReturnLineCollectionDTO**](../Model/CustomerReturnLineCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerReturnOrderStatus()`

```php
getCustomerReturnOrderStatus($order_id): \BeLenka\Deposco\Model\CustomerReturnStatusDTO
```

Get the status of a customer return

Retrieves the status of an existing customer return. Provide the unique identifier that was returned when the customer return was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CustomerReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.

try {
    $result = $apiInstance->getCustomerReturnOrderStatus($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->getCustomerReturnOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |

### Return type

[**\BeLenka\Deposco\Model\CustomerReturnStatusDTO**](../Model/CustomerReturnStatusDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerReturns()`

```php
getCustomerReturns($business_unit, $created_after, $updated_after, $search_id, $page_size, $number, $order_status): \BeLenka\Deposco\Model\CustomerReturnCollectionDTO
```

Get a list of customer returns

Retrieves a list of customer returns, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CustomerReturnsApi(
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
$order_status = new \BeLenka\Deposco\Model\CustomerReturnStatusDTO(); // CustomerReturnStatusDTO | Status of the requested order.

try {
    $result = $apiInstance->getCustomerReturns($business_unit, $created_after, $updated_after, $search_id, $page_size, $number, $order_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->getCustomerReturns: ', $e->getMessage(), PHP_EOL;
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
| **order_status** | [**CustomerReturnStatusDTO**](../Model/.md)| Status of the requested order. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\CustomerReturnCollectionDTO**](../Model/CustomerReturnCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCustomerReturnOrderStatus()`

```php
postCustomerReturnOrderStatus($order_id, $value): \BeLenka\Deposco\Model\CustomerReturnDTO
```

Updates the status of a customer return

Updates the status of an existing customer return. Supported status updates include:  * From New to Canceled * From Receiving to Canceled  Provide the unique identifier that was returned when the customer return was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CustomerReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$value = 'value_example'; // string | Status to which the requested purchase order should be updated.

try {
    $result = $apiInstance->postCustomerReturnOrderStatus($order_id, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->postCustomerReturnOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **value** | **string**| Status to which the requested purchase order should be updated. | |

### Return type

[**\BeLenka\Deposco\Model\CustomerReturnDTO**](../Model/CustomerReturnDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCustomerReturns()`

```php
postCustomerReturns($customer_return_dto): \BeLenka\Deposco\Model\CustomerReturnDTO
```

Create or update a customer return

Creates a new customer return or updates data for an existing customer return.  You can update data attributes, add an order line, or increase the quantity of an order line when the customer return is in any status except Canceled.  Decreasing the quantity of an order line is considered a cancellation. Use the endpoint for canceling all or part of a customer return instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CustomerReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return_dto = new \BeLenka\Deposco\Model\CustomerReturnDTO(); // \BeLenka\Deposco\Model\CustomerReturnDTO

try {
    $result = $apiInstance->postCustomerReturns($customer_return_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->postCustomerReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_return_dto** | [**\BeLenka\Deposco\Model\CustomerReturnDTO**](../Model/CustomerReturnDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\CustomerReturnDTO**](../Model/CustomerReturnDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCustomerReturnsCancellation()`

```php
postCustomerReturnsCancellation($order_id, $order_cancellation_dto): \BeLenka\Deposco\Model\CustomerReturnDTO
```

Cancel all or part of an customer return

Cancels an entire customer return, order lines for a customer return, or a partial quantity for order lines for a customer return. Provide the unique identifier that was returned when the customer return was created.  The order must have a status of New or Receiving.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CustomerReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_cancellation_dto = new \BeLenka\Deposco\Model\OrderCancellationDTO(); // \BeLenka\Deposco\Model\OrderCancellationDTO

try {
    $result = $apiInstance->postCustomerReturnsCancellation($order_id, $order_cancellation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->postCustomerReturnsCancellation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_cancellation_dto** | [**\BeLenka\Deposco\Model\OrderCancellationDTO**](../Model/OrderCancellationDTO.md)|  | [optional] |

### Return type

[**\BeLenka\Deposco\Model\CustomerReturnDTO**](../Model/CustomerReturnDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomerReturnLine()`

```php
updateCustomerReturnLine($order_id, $order_line_id, $customer_return_line_dto): \BeLenka\Deposco\Model\CustomerReturnLineDTO
```

Update an order line for a customer return

Updates data for an existing order line for a customer return. Provide the unique identifiers that were returned when the customer return and order line were created.  You can update an order line when the customer return is in any status except Canceled.  Decreasing the quantity of an order line is considered a cancellation. Use the endpoint for canceling all or part of a customer return instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CustomerReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_line_id = 56; // int | ID of the requested order line.
$customer_return_line_dto = new \BeLenka\Deposco\Model\CustomerReturnLineDTO(); // \BeLenka\Deposco\Model\CustomerReturnLineDTO

try {
    $result = $apiInstance->updateCustomerReturnLine($order_id, $order_line_id, $customer_return_line_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->updateCustomerReturnLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_line_id** | **int**| ID of the requested order line. | |
| **customer_return_line_dto** | [**\BeLenka\Deposco\Model\CustomerReturnLineDTO**](../Model/CustomerReturnLineDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\CustomerReturnLineDTO**](../Model/CustomerReturnLineDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
