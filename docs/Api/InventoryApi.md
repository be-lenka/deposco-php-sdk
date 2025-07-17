# BeLenka\Deposco\InventoryApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInventoryAdjustments()**](InventoryApi.md#getInventoryAdjustments) | **GET** /inventory/inventoryAdjustments | Get a list of inventory adjustments |
| [**updateDiscreteInventory()**](InventoryApi.md#updateDiscreteInventory) | **POST** /inventory/facilities/{facilityId}/locations/{locationId}/updates | Update inventory attributes |


## `getInventoryAdjustments()`

```php
getInventoryAdjustments($business_unit, $search_id, $action_type, $facility_number, $item_number, $created_after, $page_size): \BeLenka\Deposco\Model\InventoryAdjustmentCollectionDTO
```

Get a list of inventory adjustments

Retrieves a list of inventory adjustments, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$action_type = 'action_type_example'; // string | Action type of the requested inventory adjustment.
$facility_number = 'facility_number_example'; // string | Facility number of the facility for the requested inventory adjustment.
$item_number = 'item_number_example'; // string | Item number of the item for the requested inventory adjustment.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.

try {
    $result = $apiInstance->getInventoryAdjustments($business_unit, $search_id, $action_type, $facility_number, $item_number, $created_after, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->getInventoryAdjustments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **action_type** | **string**| Action type of the requested inventory adjustment. | [optional] |
| **facility_number** | **string**| Facility number of the facility for the requested inventory adjustment. | [optional] |
| **item_number** | **string**| Item number of the item for the requested inventory adjustment. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |

### Return type

[**\BeLenka\Deposco\Model\InventoryAdjustmentCollectionDTO**](../Model/InventoryAdjustmentCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDiscreteInventory()`

```php
updateDiscreteInventory($facility_id, $location_id, $inventory_update_dto, $business_unit): \BeLenka\Deposco\Model\InventoryUpdateDTO
```

Update inventory attributes

Updates inventory attributes for an item at a specific location in a facility. Available attributes include status, quantity, inventory condition, and item tracking attributes such as lot number, serial number, born on date, and expiration date.       <div class=\"alert alert-info d-flex gap-3\">         <i class=\"material-icons\">info</i><p class=\"mb-0\"><b>Product Subscription Requirement</b>:       Discrete Inventory</p> </div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 'facility_id_example'; // string | ID of the requested facility.
$location_id = 'location_id_example'; // string | ID of the requested location.
$inventory_update_dto = new \BeLenka\Deposco\Model\InventoryUpdateDTO(); // \BeLenka\Deposco\Model\InventoryUpdateDTO
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.

try {
    $result = $apiInstance->updateDiscreteInventory($facility_id, $location_id, $inventory_update_dto, $business_unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->updateDiscreteInventory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **facility_id** | **string**| ID of the requested facility. | |
| **location_id** | **string**| ID of the requested location. | |
| **inventory_update_dto** | [**\BeLenka\Deposco\Model\InventoryUpdateDTO**](../Model/InventoryUpdateDTO.md)|  | |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\InventoryUpdateDTO**](../Model/InventoryUpdateDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
