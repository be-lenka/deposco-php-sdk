# BeLenka\Deposco\ReceiptsApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getReceipts()**](ReceiptsApi.md#getReceipts) | **GET** /receipts | Get a list of receipts |


## `getReceipts()`

```php
getReceipts($order_id, $order_line_id, $business_unit, $created_after, $updated_after, $search_id, $page_size, $status, $lot_number, $serial_number): \BeLenka\Deposco\Model\ReceiptCollectionDTO
```

Get a list of receipts

Retrieves a list of receipts, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the related order header.
$order_line_id = 56; // int | ID of the related order line.
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.
$status = 'status_example'; // string | Status of the receipt.
$lot_number = 'lot_number_example'; // string | Lot number of the receipt.
$serial_number = 'serial_number_example'; // string | Serial number of the receipt.

try {
    $result = $apiInstance->getReceipts($order_id, $order_line_id, $business_unit, $created_after, $updated_after, $search_id, $page_size, $status, $lot_number, $serial_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| ID of the related order header. | |
| **order_line_id** | **int**| ID of the related order line. | |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |
| **status** | **string**| Status of the receipt. | [optional] |
| **lot_number** | **string**| Lot number of the receipt. | [optional] |
| **serial_number** | **string**| Serial number of the receipt. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\ReceiptCollectionDTO**](../Model/ReceiptCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
