# BeLenka\Deposco\ZonesApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteLocationWithinAZone()**](ZonesApi.md#deleteLocationWithinAZone) | **DELETE** /zones/{zoneId}/locations/{locationId} | Remove a location from a zone |
| [**getLocationsByZone()**](ZonesApi.md#getLocationsByZone) | **GET** /zones/{zoneId}/locations | Get a list of locations for a zone |
| [**getZoneById()**](ZonesApi.md#getZoneById) | **GET** /zones/{zoneId} | Get a zone |
| [**getZones()**](ZonesApi.md#getZones) | **GET** /zones | Get a list of zones |
| [**postZones()**](ZonesApi.md#postZones) | **POST** /zones | Create or update a zone |


## `deleteLocationWithinAZone()`

```php
deleteLocationWithinAZone($zone_id, $location_id)
```

Remove a location from a zone

Removes a location from a zone. Provide the unique identifier that was returned when the zone and location were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 'zone_id_example'; // string | ID of the requested zone.
$location_id = 'location_id_example'; // string | ID of the requested location.

try {
    $apiInstance->deleteLocationWithinAZone($zone_id, $location_id);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->deleteLocationWithinAZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**| ID of the requested zone. | |
| **location_id** | **string**| ID of the requested location. | |

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

## `getLocationsByZone()`

```php
getLocationsByZone($zone_id, $business_unit, $search_id, $locator, $name, $created_after, $updated_after, $page_size): \BeLenka\Deposco\Model\LocationCollectionDTO
```

Get a list of locations for a zone

Retrieves a list of locations for a zone, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the zone was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 'zone_id_example'; // string | ID of the requested zone.
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$locator = 'locator_example'; // string | Locator of the requested location for the zone.
$name = 'name_example'; // string | Name of the requested location for the zone.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.

try {
    $result = $apiInstance->getLocationsByZone($zone_id, $business_unit, $search_id, $locator, $name, $created_after, $updated_after, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->getLocationsByZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**| ID of the requested zone. | |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **locator** | **string**| Locator of the requested location for the zone. | [optional] |
| **name** | **string**| Name of the requested location for the zone. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |

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

## `getZoneById()`

```php
getZoneById($zone_id): \BeLenka\Deposco\Model\ZoneDTO
```

Get a zone

Retrieves the details of an existing zone. Provide the unique identifier that was returned when the zone was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_id = 'zone_id_example'; // string | ID of the requested zone.

try {
    $result = $apiInstance->getZoneById($zone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->getZoneById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**| ID of the requested zone. | |

### Return type

[**\BeLenka\Deposco\Model\ZoneDTO**](../Model/ZoneDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZones()`

```php
getZones($business_unit, $search_id, $name, $created_after, $updated_after, $page_size): \BeLenka\Deposco\Model\ZoneCollectionDTO
```

Get a list of zones

Retrieves a list of zones, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$name = 'name_example'; // string | Name of the requested zone.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.

try {
    $result = $apiInstance->getZones($business_unit, $search_id, $name, $created_after, $updated_after, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->getZones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **name** | **string**| Name of the requested zone. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |

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

## `postZones()`

```php
postZones($zone_dto): \BeLenka\Deposco\Model\ZoneDTO
```

Create or update a zone

Creates a new zone or updates data for an existing zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zone_dto = new \BeLenka\Deposco\Model\ZoneDTO(); // \BeLenka\Deposco\Model\ZoneDTO

try {
    $result = $apiInstance->postZones($zone_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonesApi->postZones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_dto** | [**\BeLenka\Deposco\Model\ZoneDTO**](../Model/ZoneDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\ZoneDTO**](../Model/ZoneDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
