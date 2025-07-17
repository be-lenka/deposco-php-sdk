# BeLenka\Deposco\KitsApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteKitDetail()**](KitsApi.md#deleteKitDetail) | **DELETE** /kitHeaders/{kitHeaderId}/kitDetails/{kitDetailId} | Delete a kit detail |
| [**getKitDetail()**](KitsApi.md#getKitDetail) | **GET** /kitHeaders/{kitHeaderId}/kitDetails/{kitDetailId} | Get a kit detail |
| [**getKitDetails()**](KitsApi.md#getKitDetails) | **GET** /kitHeaders/{kitHeaderId}/kitDetails | Get a list of kit details |
| [**getKitHeader()**](KitsApi.md#getKitHeader) | **GET** /kitHeaders/{kitHeaderId} | Get a kit header |
| [**getKitHeaders()**](KitsApi.md#getKitHeaders) | **GET** /kitHeaders | Get a list of kit headers |
| [**postKitHeaders()**](KitsApi.md#postKitHeaders) | **POST** /kitHeaders | Create or update a kit header |


## `deleteKitDetail()`

```php
deleteKitDetail($kit_header_id, $kit_detail_id)
```

Delete a kit detail

Deletes an existing kit detail record for a kit header. Provide the unique identifiers that were returned for the kit header and kit detail record when the kit was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\KitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kit_header_id = 'kit_header_id_example'; // string | ID of the requested kit header record.
$kit_detail_id = 'kit_detail_id_example'; // string | ID of the requested kit detail record.

try {
    $apiInstance->deleteKitDetail($kit_header_id, $kit_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling KitsApi->deleteKitDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **kit_header_id** | **string**| ID of the requested kit header record. | |
| **kit_detail_id** | **string**| ID of the requested kit detail record. | |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKitDetail()`

```php
getKitDetail($kit_header_id, $kit_detail_id): \BeLenka\Deposco\Model\KitDetailDTO
```

Get a kit detail

Retrieves the details of an existing kit detail record for a kit header. Provide the unique identifiers that were returned for the kit header and kit detail record when the kit was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\KitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kit_header_id = 'kit_header_id_example'; // string | ID of the requested kit header record.
$kit_detail_id = 'kit_detail_id_example'; // string | ID of the requested kit detail record.

try {
    $result = $apiInstance->getKitDetail($kit_header_id, $kit_detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitsApi->getKitDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **kit_header_id** | **string**| ID of the requested kit header record. | |
| **kit_detail_id** | **string**| ID of the requested kit detail record. | |

### Return type

[**\BeLenka\Deposco\Model\KitDetailDTO**](../Model/KitDetailDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKitDetails()`

```php
getKitDetails($kit_header_id, $business_unit, $search_id, $page_size, $item_number, $type, $updated_after, $created_after): \BeLenka\Deposco\Model\KitDetailCollectionDTO
```

Get a list of kit details

Retrieves a list of kit detail records for a kit header, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the kit header was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\KitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kit_header_id = 'kit_header_id_example'; // string | ID of the requested kit header record.
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.
$item_number = 'item_number_example'; // string | Item number that is associated with the requested kit detail record.
$type = 'type_example'; // string | Whether the kit detail record is for an input or output item for the kit.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.

try {
    $result = $apiInstance->getKitDetails($kit_header_id, $business_unit, $search_id, $page_size, $item_number, $type, $updated_after, $created_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitsApi->getKitDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **kit_header_id** | **string**| ID of the requested kit header record. | |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |
| **item_number** | **string**| Item number that is associated with the requested kit detail record. | [optional] |
| **type** | **string**| Whether the kit detail record is for an input or output item for the kit. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\KitDetailCollectionDTO**](../Model/KitDetailCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKitHeader()`

```php
getKitHeader($kit_header_id): \BeLenka\Deposco\Model\KitHeaderDTO
```

Get a kit header

Retrieves the details of an existing kit. Provide the unique identifier that was returned when the kit header was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\KitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kit_header_id = 'kit_header_id_example'; // string | ID of the requested kit header record.

try {
    $result = $apiInstance->getKitHeader($kit_header_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitsApi->getKitHeader: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **kit_header_id** | **string**| ID of the requested kit header record. | |

### Return type

[**\BeLenka\Deposco\Model\KitHeaderDTO**](../Model/KitHeaderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKitHeaders()`

```php
getKitHeaders($business_unit, $search_id, $name, $created_after, $updated_after, $page_size): \BeLenka\Deposco\Model\KitHeaderCollectionDTO
```

Get a list of kit headers

Retrieves a list of kits, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\KitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$name = 'name_example'; // string | Name of the requested kit header.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.

try {
    $result = $apiInstance->getKitHeaders($business_unit, $search_id, $name, $created_after, $updated_after, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitsApi->getKitHeaders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **name** | **string**| Name of the requested kit header. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |

### Return type

[**\BeLenka\Deposco\Model\KitHeaderCollectionDTO**](../Model/KitHeaderCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postKitHeaders()`

```php
postKitHeaders($kit_header_dto): \BeLenka\Deposco\Model\KitHeaderDTO
```

Create or update a kit header

Creates a new kit or updates data for an existing kit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\KitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kit_header_dto = new \BeLenka\Deposco\Model\KitHeaderDTO(); // \BeLenka\Deposco\Model\KitHeaderDTO

try {
    $result = $apiInstance->postKitHeaders($kit_header_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KitsApi->postKitHeaders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **kit_header_dto** | [**\BeLenka\Deposco\Model\KitHeaderDTO**](../Model/KitHeaderDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\KitHeaderDTO**](../Model/KitHeaderDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
