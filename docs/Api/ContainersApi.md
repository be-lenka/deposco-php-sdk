# BeLenka\Deposco\ContainersApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getContainerById()**](ContainersApi.md#getContainerById) | **GET** /containers/{containerId} | Get a container |
| [**getContainers()**](ContainersApi.md#getContainers) | **GET** /containers | Get a list of containers |
| [**postContainers()**](ContainersApi.md#postContainers) | **POST** /containers | Create or update a container |


## `getContainerById()`

```php
getContainerById($container_id): \BeLenka\Deposco\Model\ContainerDTO
```

Get a container

Retrieves the details of an existing container. Provide the unique identifier that was returned when the container was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_id = 'container_id_example'; // string | ID of the requested container.

try {
    $result = $apiInstance->getContainerById($container_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->getContainerById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **container_id** | **string**| ID of the requested container. | |

### Return type

[**\BeLenka\Deposco\Model\ContainerDTO**](../Model/ContainerDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContainers()`

```php
getContainers($business_unit, $search_id, $page_size, $lpn_number, $number, $created_after, $updated_after): \BeLenka\Deposco\Model\ContainerCollectionDTO
```

Get a list of containers

Retrieves a list of containers, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.
$lpn_number = 'lpn_number_example'; // string | LPN number of the requested container.
$number = 'number_example'; // string | Number of the requested container.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.

try {
    $result = $apiInstance->getContainers($business_unit, $search_id, $page_size, $lpn_number, $number, $created_after, $updated_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->getContainers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |
| **lpn_number** | **string**| LPN number of the requested container. | [optional] |
| **number** | **string**| Number of the requested container. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\ContainerCollectionDTO**](../Model/ContainerCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContainers()`

```php
postContainers($container_dto): \BeLenka\Deposco\Model\ContainerDTO
```

Create or update a container

Creates a new container or updates data for an existing container.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$container_dto = new \BeLenka\Deposco\Model\ContainerDTO(); // \BeLenka\Deposco\Model\ContainerDTO

try {
    $result = $apiInstance->postContainers($container_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->postContainers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **container_dto** | [**\BeLenka\Deposco\Model\ContainerDTO**](../Model/ContainerDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\ContainerDTO**](../Model/ContainerDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
