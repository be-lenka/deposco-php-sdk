# BeLenka\Deposco\AsynchronousOperationsApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRequest()**](AsynchronousOperationsApi.md#getRequest) | **GET** /async/{requestId} | Get the status of an asynchronous request |
| [**postBulkImport()**](AsynchronousOperationsApi.md#postBulkImport) | **POST** /async/bulkImports | Perform a bulk import |


## `getRequest()`

```php
getRequest($request_id): \BeLenka\Deposco\Model\AsyncResponseDTO
```

Get the status of an asynchronous request

Retrieves the status of an asynchronous request. Provide the unique identifier that was returned when the request was submitted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BeLenka\Deposco\Api\AsynchronousOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_id = 'request_id_example'; // string | ID of the asynchronous request for which a status is requested. The request ID is returned in the response for the asynchronous request.

try {
    $result = $apiInstance->getRequest($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsynchronousOperationsApi->getRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_id** | **string**| ID of the asynchronous request for which a status is requested. The request ID is returned in the response for the asynchronous request. | |

### Return type

[**\BeLenka\Deposco\Model\AsyncResponseDTO**](../Model/AsyncResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBulkImport()`

```php
postBulkImport($async_bulk_request_dto): \BeLenka\Deposco\Model\AsyncRequestIdDTO
```

Perform a bulk import

Performs a bulk import to create or update multiple entities in a single asynchronous request.   All of the entities that are listed in the request body must be the same type of entity, and the entity type must be provided as a parameter for the request. The entities must be provided in an array of JSON objects. Refer to the POST endpoint for the specific entity type for details on the required format for the JSON objects.  Only one bulk import request can be processed at a time, and the objects in the request may not be processed in the order they were listed. The request must be less than the maximum file size for the API gateway of 10 MB. The import must complete within one hour. Otherwise, the import stops processing.  If the bulk import request is successfully received in Deposco, then an HTTP status code of 202 is returned in the response along with a transaction ID.  You can then retrieve the status of the asynchronous request by using the `GET` endpoint for asynchronous operations and the transaction ID. One of the following responses is returned for the status request: - `Success` - All entities were successfully created or updated. - `Failed` - None of the entities were successfully created or updated. Individual error messages are provided for each entity. - `Partially Failed` - Some entities were successfully created or updated, but a failure occurred for one or more entities. - `Processing` - The request is still processing. - `Error` - An unexpected error occurred.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new BeLenka\Deposco\Api\AsynchronousOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$async_bulk_request_dto = new \BeLenka\Deposco\Model\AsyncBulkRequestDTO(); // \BeLenka\Deposco\Model\AsyncBulkRequestDTO

try {
    $result = $apiInstance->postBulkImport($async_bulk_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsynchronousOperationsApi->postBulkImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **async_bulk_request_dto** | [**\BeLenka\Deposco\Model\AsyncBulkRequestDTO**](../Model/AsyncBulkRequestDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\AsyncRequestIdDTO**](../Model/AsyncRequestIdDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
