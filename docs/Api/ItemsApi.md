# BeLenka\Deposco\ItemsApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteItemUPC()**](ItemsApi.md#deleteItemUPC) | **DELETE** /items/{itemId}/upcs/{upcId} | Delete an item UPC |
| [**deletePackUPC()**](ItemsApi.md#deletePackUPC) | **DELETE** /items/{itemId}/packs/{packId}/upcs/{upcId} | Delete a pack UPC |
| [**getHSCodes()**](ItemsApi.md#getHSCodes) | **GET** /items/{itemId}/hsCodes | Get a list of HS codes for an item |
| [**getItem()**](ItemsApi.md#getItem) | **GET** /items/{itemId} | Get an item |
| [**getItemPack()**](ItemsApi.md#getItemPack) | **GET** /items/{itemId}/packs/{packId} | Get a pack for an item |
| [**getItemUPCs()**](ItemsApi.md#getItemUPCs) | **GET** /items/{itemId}/upcs | Get a list of item UPCs for an item |
| [**getItemVendors()**](ItemsApi.md#getItemVendors) | **GET** /items/{itemId}/itemVendors | Get a list of item vendors for an item |
| [**getItems()**](ItemsApi.md#getItems) | **GET** /items | Get a list of items |
| [**getPackUPC()**](ItemsApi.md#getPackUPC) | **GET** /items/{itemId}/packs/{packId}/upcs | Get a list of pack UPCs for an item |
| [**postItem()**](ItemsApi.md#postItem) | **POST** /items | Create or update an item |


## `deleteItemUPC()`

```php
deleteItemUPC($item_id, $upc_id)
```

Delete an item UPC

Deletes an existing UPC for an item. Provide the unique identifiers that were returned when the item and UPC were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | ID of the requested item.
$upc_id = 'upc_id_example'; // string | ID of the requested item or pack UPC.

try {
    $apiInstance->deleteItemUPC($item_id, $upc_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->deleteItemUPC: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| ID of the requested item. | |
| **upc_id** | **string**| ID of the requested item or pack UPC. | |

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

## `deletePackUPC()`

```php
deletePackUPC($item_id, $pack_id, $upc_id)
```

Delete a pack UPC

Deletes an existing UPC for a pack and item. Provide the unique identifiers that were returned when the item, pack, and UPC were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | ID of the requested item.
$pack_id = 'pack_id_example'; // string | ID of the requested pack.
$upc_id = 'upc_id_example'; // string | ID of the requested item or pack UPC.

try {
    $apiInstance->deletePackUPC($item_id, $pack_id, $upc_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->deletePackUPC: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| ID of the requested item. | |
| **pack_id** | **string**| ID of the requested pack. | |
| **upc_id** | **string**| ID of the requested item or pack UPC. | |

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

## `getHSCodes()`

```php
getHSCodes($item_id, $business_unit, $search_id, $created_after, $updated_after, $page_size): \BeLenka\Deposco\Model\HSCodeCollectionDTO
```

Get a list of HS codes for an item

Retrieves a list of HS codes for an item, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the item was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | ID of the requested item.
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.

try {
    $result = $apiInstance->getHSCodes($item_id, $business_unit, $search_id, $created_after, $updated_after, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getHSCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| ID of the requested item. | |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |

### Return type

[**\BeLenka\Deposco\Model\HSCodeCollectionDTO**](../Model/HSCodeCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItem()`

```php
getItem($item_id): \BeLenka\Deposco\Model\ItemDTO
```

Get an item

Retrieves the details of an existing item. Provide the unique identifier that was returned when the item was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | ID of the requested item.

try {
    $result = $apiInstance->getItem($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| ID of the requested item. | |

### Return type

[**\BeLenka\Deposco\Model\ItemDTO**](../Model/ItemDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemPack()`

```php
getItemPack($item_id, $pack_id): \BeLenka\Deposco\Model\PackDTO
```

Get a pack for an item

Retrieves the details of an existing pack for an item. Provide the unique identifiers that were returned when the item and pack were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | ID of the requested item.
$pack_id = 'pack_id_example'; // string | ID of the requested pack.

try {
    $result = $apiInstance->getItemPack($item_id, $pack_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItemPack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| ID of the requested item. | |
| **pack_id** | **string**| ID of the requested pack. | |

### Return type

[**\BeLenka\Deposco\Model\PackDTO**](../Model/PackDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemUPCs()`

```php
getItemUPCs($item_id, $business_unit, $search_id, $created_after, $updated_after, $page_size): \BeLenka\Deposco\Model\ItemUPCCollectionDTO
```

Get a list of item UPCs for an item

Retrieves a list of item UPCs for an item, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the item was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | ID of the requested item.
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.

try {
    $result = $apiInstance->getItemUPCs($item_id, $business_unit, $search_id, $created_after, $updated_after, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItemUPCs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| ID of the requested item. | |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |

### Return type

[**\BeLenka\Deposco\Model\ItemUPCCollectionDTO**](../Model/ItemUPCCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemVendors()`

```php
getItemVendors($item_id, $business_unit, $search_id, $created_after, $updated_after, $page_size): \BeLenka\Deposco\Model\ItemVendorCollectionDTO
```

Get a list of item vendors for an item

Retrieves a list of item vendors for an item, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the item was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | ID of the requested item.
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.

try {
    $result = $apiInstance->getItemVendors($item_id, $business_unit, $search_id, $created_after, $updated_after, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItemVendors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| ID of the requested item. | |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |

### Return type

[**\BeLenka\Deposco\Model\ItemVendorCollectionDTO**](../Model/ItemVendorCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItems()`

```php
getItems($business_unit, $search_id, $number, $name, $created_after, $updated_after, $page_size): \BeLenka\Deposco\Model\ItemCollectionDTO
```

Get a list of items

Retrieves a list of items, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$number = 'number_example'; // string | Item number of the requested item.
$name = 'name_example'; // string | Name of the requested item.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.

try {
    $result = $apiInstance->getItems($business_unit, $search_id, $number, $name, $created_after, $updated_after, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **number** | **string**| Item number of the requested item. | [optional] |
| **name** | **string**| Name of the requested item. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |

### Return type

[**\BeLenka\Deposco\Model\ItemCollectionDTO**](../Model/ItemCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPackUPC()`

```php
getPackUPC($item_id, $pack_id, $business_unit, $search_id): \BeLenka\Deposco\Model\PackUPCCollectionDTO
```

Get a list of pack UPCs for an item

Retrieves a list of pack UPCs for an item and pack, paginated and sorted by ID in descending order. Provide the unique identifiers that were returned when the item and pack were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | ID of the requested item.
$pack_id = 'pack_id_example'; // string | ID of the requested pack.
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.

try {
    $result = $apiInstance->getPackUPC($item_id, $pack_id, $business_unit, $search_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getPackUPC: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| ID of the requested item. | |
| **pack_id** | **string**| ID of the requested pack. | |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\PackUPCCollectionDTO**](../Model/PackUPCCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postItem()`

```php
postItem($item_dto): \BeLenka\Deposco\Model\ItemDTO
```

Create or update an item

Creates a new item or updates data for an existing item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_dto = new \BeLenka\Deposco\Model\ItemDTO(); // \BeLenka\Deposco\Model\ItemDTO

try {
    $result = $apiInstance->postItem($item_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->postItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_dto** | [**\BeLenka\Deposco\Model\ItemDTO**](../Model/ItemDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\ItemDTO**](../Model/ItemDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
