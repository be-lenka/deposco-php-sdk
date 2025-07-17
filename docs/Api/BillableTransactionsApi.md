# BeLenka\Deposco\BillableTransactionsApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBillableTransactions()**](BillableTransactionsApi.md#getBillableTransactions) | **GET** /billing/transactions | Get a list of billable transactions |


## `getBillableTransactions()`

```php
getBillableTransactions($business_unit, $billing_profile_name, $billing_config_type, $facility, $status, $order_id, $transaction_type, $transaction_number, $transaction_source, $created_after, $updated_after, $search_id, $page_size): \BeLenka\Deposco\Model\BillableTransactionCollectionDTO
```

Get a list of billable transactions

Retrieves a list of billable transactions, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\BillableTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$billing_profile_name = 'billing_profile_name_example'; // string | Name of the billing profile that is associated with the requested billable transaction.
$billing_config_type = 'billing_config_type_example'; // string | Type of billing config record that is associated with the requested billable transaction.
$facility = 'facility_example'; // string | Facility number of the facility for the requested billable transaction.
$status = 'status_example'; // string | Status of the requested billable transaction.
$order_id = 'order_id_example'; // string | ID of the order header that is associated with the requested billable transaction.
$transaction_type = 'transaction_type_example'; // string | Type of the requested billable transaction.
$transaction_number = 'transaction_number_example'; // string | Transaction number of the requested billable transaction.
$transaction_source = 'transaction_source_example'; // string | Source system from which the requested billable transaction was generated.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.

try {
    $result = $apiInstance->getBillableTransactions($business_unit, $billing_profile_name, $billing_config_type, $facility, $status, $order_id, $transaction_type, $transaction_number, $transaction_source, $created_after, $updated_after, $search_id, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableTransactionsApi->getBillableTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **billing_profile_name** | **string**| Name of the billing profile that is associated with the requested billable transaction. | [optional] |
| **billing_config_type** | **string**| Type of billing config record that is associated with the requested billable transaction. | [optional] |
| **facility** | **string**| Facility number of the facility for the requested billable transaction. | [optional] |
| **status** | **string**| Status of the requested billable transaction. | [optional] |
| **order_id** | **string**| ID of the order header that is associated with the requested billable transaction. | [optional] |
| **transaction_type** | **string**| Type of the requested billable transaction. | [optional] |
| **transaction_number** | **string**| Transaction number of the requested billable transaction. | [optional] |
| **transaction_source** | **string**| Source system from which the requested billable transaction was generated. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |

### Return type

[**\BeLenka\Deposco\Model\BillableTransactionCollectionDTO**](../Model/BillableTransactionCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
