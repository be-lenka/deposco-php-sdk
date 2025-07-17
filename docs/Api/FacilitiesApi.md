# BeLenka\Deposco\FacilitiesApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFacilities()**](FacilitiesApi.md#getFacilities) | **GET** /facilities | Get a list of facilities |
| [**getFacility()**](FacilitiesApi.md#getFacility) | **GET** /facilities/{facilityId} | Get a facility |
| [**postFacility()**](FacilitiesApi.md#postFacility) | **POST** /facilities | Create or update a facility |


## `getFacilities()`

```php
getFacilities($business_unit, $created_after, $updated_after, $search_id, $page_size, $number, $name): \BeLenka\Deposco\Model\GetFacilities200Response
```

Get a list of facilities

Retrieves a list of facilities, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\FacilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.
$number = 'number_example'; // string | Facility number of the requested facility.
$name = 'name_example'; // string | Name of the requested facility.

try {
    $result = $apiInstance->getFacilities($business_unit, $created_after, $updated_after, $search_id, $page_size, $number, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilitiesApi->getFacilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |
| **number** | **string**| Facility number of the requested facility. | [optional] |
| **name** | **string**| Name of the requested facility. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\GetFacilities200Response**](../Model/GetFacilities200Response.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFacility()`

```php
getFacility($facility_id): \BeLenka\Deposco\Model\FacilityDTO
```

Get a facility

Retrieves the details of an existing facility. Provide the unique identifier that was returned when the facility was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\FacilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 'facility_id_example'; // string | ID of the requested facility.

try {
    $result = $apiInstance->getFacility($facility_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilitiesApi->getFacility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **facility_id** | **string**| ID of the requested facility. | |

### Return type

[**\BeLenka\Deposco\Model\FacilityDTO**](../Model/FacilityDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFacility()`

```php
postFacility($facility_dto): \BeLenka\Deposco\Model\FacilityDTO
```

Create or update a facility

Creates a new facility or updates data for an existing facility.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\FacilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_dto = new \BeLenka\Deposco\Model\FacilityDTO(); // \BeLenka\Deposco\Model\FacilityDTO

try {
    $result = $apiInstance->postFacility($facility_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilitiesApi->postFacility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **facility_dto** | [**\BeLenka\Deposco\Model\FacilityDTO**](../Model/FacilityDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\FacilityDTO**](../Model/FacilityDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
