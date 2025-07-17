# BeLenka\Deposco\VendorReturnsApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getVendorReturn()**](VendorReturnsApi.md#getVendorReturn) | **GET** /orders/vendorReturns/{orderId} | Get a vendor return |
| [**getVendorReturnLine()**](VendorReturnsApi.md#getVendorReturnLine) | **GET** /orders/vendorReturns/{orderId}/orderLines/{orderLineId} | Get an order line for a vendor return |
| [**getVendorReturnLines()**](VendorReturnsApi.md#getVendorReturnLines) | **GET** /orders/vendorReturns/{orderId}/orderLines | Get a list of order lines for a vendor return |
| [**getVendorReturnStatus()**](VendorReturnsApi.md#getVendorReturnStatus) | **GET** /orders/vendorReturns/{orderId}/status | Get the status of a vendor return |
| [**getVendorReturns()**](VendorReturnsApi.md#getVendorReturns) | **GET** /orders/vendorReturns | Get a list of vendor returns |
| [**postVendorReturnStatus()**](VendorReturnsApi.md#postVendorReturnStatus) | **POST** /orders/vendorReturns/{orderId}/status | Update the status of a vendor return |
| [**postVendorReturns()**](VendorReturnsApi.md#postVendorReturns) | **POST** /orders/vendorReturns | Create or update a vendor return |
| [**postVendorReturnsCancellation()**](VendorReturnsApi.md#postVendorReturnsCancellation) | **POST** /orders/vendorReturns/{orderId}/cancellations | Cancel all or part of a vendor return |
| [**updateVendorReturnLine()**](VendorReturnsApi.md#updateVendorReturnLine) | **POST** /orders/vendorReturns/{orderId}/orderLines/{orderLineId} | Update an order line for a vendor return |


## `getVendorReturn()`

```php
getVendorReturn($order_id): \BeLenka\Deposco\Model\VendorReturnDTO
```

Get a vendor return

Retrieves the details of an existing vendor return. Provide the unique identifier that was returned when the vendor return was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\VendorReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.

try {
    $result = $apiInstance->getVendorReturn($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorReturnsApi->getVendorReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |

### Return type

[**\BeLenka\Deposco\Model\VendorReturnDTO**](../Model/VendorReturnDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVendorReturnLine()`

```php
getVendorReturnLine($order_id, $order_line_id): \BeLenka\Deposco\Model\VendorReturnLineDTO
```

Get an order line for a vendor return

Retrieves the details of an existing order line for a vendor return. Provide the unique identifiers that were returned when the vendor return and order line were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\VendorReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_line_id = 56; // int | ID of the requested order line.

try {
    $result = $apiInstance->getVendorReturnLine($order_id, $order_line_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorReturnsApi->getVendorReturnLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_line_id** | **int**| ID of the requested order line. | |

### Return type

[**\BeLenka\Deposco\Model\VendorReturnLineDTO**](../Model/VendorReturnLineDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVendorReturnLines()`

```php
getVendorReturnLines($order_id, $search_id, $page_size, $created_after, $updated_after, $line_number, $order_line_status): \BeLenka\Deposco\Model\VendorReturnLineCollectionDTO
```

Get a list of order lines for a vendor return

Retrieves a list of order lines for a vendor return, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the vendor return was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\VendorReturnsApi(
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
    $result = $apiInstance->getVendorReturnLines($order_id, $search_id, $page_size, $created_after, $updated_after, $line_number, $order_line_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorReturnsApi->getVendorReturnLines: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\Deposco\Model\VendorReturnLineCollectionDTO**](../Model/VendorReturnLineCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVendorReturnStatus()`

```php
getVendorReturnStatus($order_id): \BeLenka\Deposco\Model\VendorReturnStatusDTO
```

Get the status of a vendor return

Retrieves the status of an existing vendor return. Provide the unique identifier that was returned when the vendor return was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\VendorReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.

try {
    $result = $apiInstance->getVendorReturnStatus($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorReturnsApi->getVendorReturnStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |

### Return type

[**\BeLenka\Deposco\Model\VendorReturnStatusDTO**](../Model/VendorReturnStatusDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVendorReturns()`

```php
getVendorReturns($business_unit, $created_after, $updated_after, $search_id, $page_size, $number, $order_status): \BeLenka\Deposco\Model\VendorReturnCollectionDTO
```

Get a list of vendor returns

Retrieves a list of vendor returns, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\VendorReturnsApi(
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
    $result = $apiInstance->getVendorReturns($business_unit, $created_after, $updated_after, $search_id, $page_size, $number, $order_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorReturnsApi->getVendorReturns: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\Deposco\Model\VendorReturnCollectionDTO**](../Model/VendorReturnCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postVendorReturnStatus()`

```php
postVendorReturnStatus($order_id, $value): \BeLenka\Deposco\Model\VendorReturnDTO
```

Update the status of a vendor return

Updates the status of an existing vendor return from either New or Hold to New, Hold, or Canceled. For example, you can update the status of an order from Hold to New when it is ready for fulfillment. Provide the unique identifier that was returned when the vendor return was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\VendorReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$value = 'value_example'; // string | Status to which the requested vendor order should be updated.

try {
    $result = $apiInstance->postVendorReturnStatus($order_id, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorReturnsApi->postVendorReturnStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **value** | **string**| Status to which the requested vendor order should be updated. | |

### Return type

[**\BeLenka\Deposco\Model\VendorReturnDTO**](../Model/VendorReturnDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postVendorReturns()`

```php
postVendorReturns($vendor_return_dto): \BeLenka\Deposco\Model\VendorReturnDTO
```

Create or update a vendor return

Creates a new vendor return or updates data for an existing vendor return.  The requirements to update data for a vendor return depend on the type of update:  * To update data attributes such as the shipping address, shipping service (Ship Via), planned ship date, or notes, the order must have a status of Draft, New, Hold, Ready for Fulfillment, Wave Built, or Back Ordered.  * To add an order line or increase the quantity of an order line, the order must have a status of Draft, New, Hold, Ready for Fulfillment, Wave Built, or Back Ordered, and the order line must have a status of New or Back Ordered. If the order has a status of Partially Released and there are backordered or unreleased quantities for the order line, then you can increase the quantity of the order line. The increase is applied to the backordered or unreleased quantity.  Decreasing the quantity of an order line is considered a cancellation. Use the endpoint for canceling all or part of a vendor return instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\VendorReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendor_return_dto = new \BeLenka\Deposco\Model\VendorReturnDTO(); // \BeLenka\Deposco\Model\VendorReturnDTO

try {
    $result = $apiInstance->postVendorReturns($vendor_return_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorReturnsApi->postVendorReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vendor_return_dto** | [**\BeLenka\Deposco\Model\VendorReturnDTO**](../Model/VendorReturnDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\VendorReturnDTO**](../Model/VendorReturnDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postVendorReturnsCancellation()`

```php
postVendorReturnsCancellation($order_id, $order_cancellation_dto): \BeLenka\Deposco\Model\VendorReturnDTO
```

Cancel all or part of a vendor return

Cancels an entire vendor return, order lines for a vendor return, or a partial quantity for order lines for a vendor return. Provide the unique identifier that was returned when the vendor return was created.  The order must have a status of New, Hold, Ready for Fulfillment, Wave Built, or Back Ordered. A partial quantity of an order line can also be canceled if the order has a status of Partially Released and there are backordered quantities for the order line. The cancellation can be applied only to the backordered quantity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\VendorReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_cancellation_dto = new \BeLenka\Deposco\Model\OrderCancellationDTO(); // \BeLenka\Deposco\Model\OrderCancellationDTO

try {
    $result = $apiInstance->postVendorReturnsCancellation($order_id, $order_cancellation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorReturnsApi->postVendorReturnsCancellation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_cancellation_dto** | [**\BeLenka\Deposco\Model\OrderCancellationDTO**](../Model/OrderCancellationDTO.md)|  | [optional] |

### Return type

[**\BeLenka\Deposco\Model\VendorReturnDTO**](../Model/VendorReturnDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVendorReturnLine()`

```php
updateVendorReturnLine($order_id, $order_line_id, $vendor_return_line_dto): \BeLenka\Deposco\Model\VendorReturnLineDTO
```

Update an order line for a vendor return

Updates data for an existing order line for a vendor return. Provide the unique identifiers that were returned when the vendor return and order line were created.  The requirements to update data for an order line depend on the type of update:  * To update data attributes such as lot numbers or notes, the order must have a status of Draft, New, Hold, Ready for Fulfillment, Wave Built, or Back Ordered.  * To increase the quantity of an order line, the order must have a status of Draft, New, Hold, Ready for Fulfillment, Wave Built, or Back Ordered, and the order line must have a status of New or Back Ordered. If the order has a status of Partially Released and there are backordered or unreleased quantities for the order line, then you can increase the quantity of the order line. The increase is applied to the backordered or unreleased quantity.  Decreasing the quantity of an order line is considered a cancellation. Use the endpoint for canceling all or part of a vendor return instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\VendorReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the requested order header.
$order_line_id = 56; // int | ID of the requested order line.
$vendor_return_line_dto = new \BeLenka\Deposco\Model\VendorReturnLineDTO(); // \BeLenka\Deposco\Model\VendorReturnLineDTO

try {
    $result = $apiInstance->updateVendorReturnLine($order_id, $order_line_id, $vendor_return_line_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorReturnsApi->updateVendorReturnLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the requested order header. | |
| **order_line_id** | **int**| ID of the requested order line. | |
| **vendor_return_line_dto** | [**\BeLenka\Deposco\Model\VendorReturnLineDTO**](../Model/VendorReturnLineDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\VendorReturnLineDTO**](../Model/VendorReturnLineDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
