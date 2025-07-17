# BeLenka\Deposco\LocationsApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStorageDetailFromALocation()**](LocationsApi.md#deleteStorageDetailFromALocation) | **DELETE** /locations/{locationId}/storageDetails/{storageDetailId} | Delete a storage detail for a location |
| [**getLocationById()**](LocationsApi.md#getLocationById) | **GET** /locations/{locationId} | Get a location |
| [**getLocations()**](LocationsApi.md#getLocations) | **GET** /locations | Get a list of locations |
| [**getStorageDetailById()**](LocationsApi.md#getStorageDetailById) | **GET** /locations/{locationId}/storageDetails/{storageDetailId} | Get a storage detail for a location |
| [**getStorageDetailsForALocation()**](LocationsApi.md#getStorageDetailsForALocation) | **GET** /locations/{locationId}/storageDetails | Get a list of storage details for a location |
| [**getZonesWithinLocation()**](LocationsApi.md#getZonesWithinLocation) | **GET** /locations/{locationId}/zones | Get a list of zones for a location |
| [**postLocations()**](LocationsApi.md#postLocations) | **POST** /locations | Create or update a location |


## `deleteStorageDetailFromALocation()`

```php
deleteStorageDetailFromALocation($location_id, $storage_detail_id)
```

Delete a storage detail for a location

Deletes an existing storage detail record for a location. Provide the unique identifier that was returned when the location and storage detail record were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 'location_id_example'; // string | ID of the requested location.
$storage_detail_id = 'storage_detail_id_example'; // string | ID of the requested storage detail record.

try {
    $apiInstance->deleteStorageDetailFromALocation($location_id, $storage_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->deleteStorageDetailFromALocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **location_id** | **string**| ID of the requested location. | |
| **storage_detail_id** | **string**| ID of the requested storage detail record. | |

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

## `getLocationById()`

```php
getLocationById($location_id): \BeLenka\Deposco\Model\LocationDTO
```

Get a location

Retrieves the details of an existing location. Provide the unique identifier that was returned when the location was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 'location_id_example'; // string | ID of the requested location.

try {
    $result = $apiInstance->getLocationById($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **location_id** | **string**| ID of the requested location. | |

### Return type

[**\BeLenka\Deposco\Model\LocationDTO**](../Model/LocationDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocations()`

```php
getLocations($business_unit, $search_id, $locator, $name, $facility_number, $created_after, $updated_after): \BeLenka\Deposco\Model\LocationCollectionDTO
```

Get a list of locations

Retrieves a list of locations, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$locator = 'locator_example'; // string | Locator of the requested location.
$name = 'name_example'; // string | Name of the requested location.
$facility_number = 'facility_number_example'; // string | Number of the facility.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.

try {
    $result = $apiInstance->getLocations($business_unit, $search_id, $locator, $name, $facility_number, $created_after, $updated_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **locator** | **string**| Locator of the requested location. | [optional] |
| **name** | **string**| Name of the requested location. | [optional] |
| **facility_number** | **string**| Number of the facility. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\LocationCollectionDTO**](../Model/LocationCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStorageDetailById()`

```php
getStorageDetailById($location_id, $storage_detail_id): \BeLenka\Deposco\Model\StorageDTO
```

Get a storage detail for a location

Retrieves the details of an existing storage detail record for a location. Provide the unique identifier that was returned when the location and storage detail record were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 'location_id_example'; // string | ID of the requested location.
$storage_detail_id = 'storage_detail_id_example'; // string | ID of the requested storage detail record.

try {
    $result = $apiInstance->getStorageDetailById($location_id, $storage_detail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getStorageDetailById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **location_id** | **string**| ID of the requested location. | |
| **storage_detail_id** | **string**| ID of the requested storage detail record. | |

### Return type

[**\BeLenka\Deposco\Model\StorageDTO**](../Model/StorageDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStorageDetailsForALocation()`

```php
getStorageDetailsForALocation($location_id, $business_unit, $search_id, $page_size, $created_after, $updated_after): \BeLenka\Deposco\Model\StorageCollectionDTO
```

Get a list of storage details for a location

Retrieves a list of storage detail records for a location, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the location was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 'location_id_example'; // string | ID of the requested location.
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.

try {
    $result = $apiInstance->getStorageDetailsForALocation($location_id, $business_unit, $search_id, $page_size, $created_after, $updated_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getStorageDetailsForALocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **location_id** | **string**| ID of the requested location. | |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\StorageCollectionDTO**](../Model/StorageCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZonesWithinLocation()`

```php
getZonesWithinLocation($location_id, $business_unit, $search_id, $page_size, $created_after, $updated_after, $name): \BeLenka\Deposco\Model\ZoneCollectionDTO
```

Get a list of zones for a location

Retrieves a list of zones for a location, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the location was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 'location_id_example'; // string | ID of the requested location.
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$name = 'name_example'; // string | Name of the requested zone for the location.

try {
    $result = $apiInstance->getZonesWithinLocation($location_id, $business_unit, $search_id, $page_size, $created_after, $updated_after, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getZonesWithinLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **location_id** | **string**| ID of the requested location. | |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **name** | **string**| Name of the requested zone for the location. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\ZoneCollectionDTO**](../Model/ZoneCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postLocations()`

```php
postLocations($location_dto): \BeLenka\Deposco\Model\LocationDTO
```

Create or update a location

Creates a new location or updates data for an existing location.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_dto = new \BeLenka\Deposco\Model\LocationDTO(); // \BeLenka\Deposco\Model\LocationDTO

try {
    $result = $apiInstance->postLocations($location_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->postLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **location_dto** | [**\BeLenka\Deposco\Model\LocationDTO**](../Model/LocationDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\LocationDTO**](../Model/LocationDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
