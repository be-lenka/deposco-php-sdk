# BeLenka\Deposco\TradingPartnersApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteTradingPartnerParameter()**](TradingPartnersApi.md#deleteTradingPartnerParameter) | **DELETE** /tradingPartners/{tradingPartnerId}/parameters/{parameterId} | Delete a trading partner parameter |
| [**getTradingPartner()**](TradingPartnersApi.md#getTradingPartner) | **GET** /tradingPartners/{tradingPartnerId} | Get a trading partner |
| [**getTradingPartnerParameters()**](TradingPartnersApi.md#getTradingPartnerParameters) | **GET** /tradingPartners/{tradingPartnerId}/parameters | Get a list of trading partner parameters |
| [**getTradingPartnerSites()**](TradingPartnersApi.md#getTradingPartnerSites) | **GET** /tradingPartners/{tradingPartnerId}/sites | Get a list of trading partner sites |
| [**getTradingPartners()**](TradingPartnersApi.md#getTradingPartners) | **GET** /tradingPartners | Get a list of trading partners |
| [**postTradingPartner()**](TradingPartnersApi.md#postTradingPartner) | **POST** /tradingPartners | Create or update a trading partner |


## `deleteTradingPartnerParameter()`

```php
deleteTradingPartnerParameter($trading_partner_id, $parameter_id)
```

Delete a trading partner parameter

Deletes an existing parameter for a trading partner. Provide the unique identifier that was returned when the trading partner and parameter were created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\TradingPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trading_partner_id = 56; // int | ID of the requested trading partner.
$parameter_id = 56; // int | ID of the requested trading partner parameter.

try {
    $apiInstance->deleteTradingPartnerParameter($trading_partner_id, $parameter_id);
} catch (Exception $e) {
    echo 'Exception when calling TradingPartnersApi->deleteTradingPartnerParameter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trading_partner_id** | **int**| ID of the requested trading partner. | |
| **parameter_id** | **int**| ID of the requested trading partner parameter. | |

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

## `getTradingPartner()`

```php
getTradingPartner($trading_partner_id): \BeLenka\Deposco\Model\TradingPartnerDTO
```

Get a trading partner

Retrieves the details of an existing trading partner. Provide the unique identifier that was returned when the trading partner was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\TradingPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trading_partner_id = 56; // int | ID of the requested trading partner.

try {
    $result = $apiInstance->getTradingPartner($trading_partner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradingPartnersApi->getTradingPartner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trading_partner_id** | **int**| ID of the requested trading partner. | |

### Return type

[**\BeLenka\Deposco\Model\TradingPartnerDTO**](../Model/TradingPartnerDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTradingPartnerParameters()`

```php
getTradingPartnerParameters($trading_partner_id, $business_unit, $created_after, $updated_after, $search_id, $page_size, $code): \BeLenka\Deposco\Model\TradingPartnerParameterCollectionDTO
```

Get a list of trading partner parameters

Retrieves a list of parameters for a trading partner, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the trading partner was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\TradingPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trading_partner_id = 56; // int | ID of the requested trading partner.
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.
$code = 'code_example'; // string | Code of the trading partner for the requested parameters.

try {
    $result = $apiInstance->getTradingPartnerParameters($trading_partner_id, $business_unit, $created_after, $updated_after, $search_id, $page_size, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradingPartnersApi->getTradingPartnerParameters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trading_partner_id** | **int**| ID of the requested trading partner. | |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |
| **code** | **string**| Code of the trading partner for the requested parameters. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\TradingPartnerParameterCollectionDTO**](../Model/TradingPartnerParameterCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTradingPartnerSites()`

```php
getTradingPartnerSites($trading_partner_id, $business_unit, $created_after, $updated_after, $search_id, $page_size, $site_code): \BeLenka\Deposco\Model\TradingPartnerSiteCollectionDTO
```

Get a list of trading partner sites

Retrieves a list of sites for a trading partner, paginated and sorted by ID in descending order. Provide the unique identifier that was returned when the trading partner was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\TradingPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trading_partner_id = 56; // int | ID of the requested trading partner.
$business_unit = 'business_unit_example'; // string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.
$site_code = 'site_code_example'; // string | Code of the trading partner for the requested sites.

try {
    $result = $apiInstance->getTradingPartnerSites($trading_partner_id, $business_unit, $created_after, $updated_after, $search_id, $page_size, $site_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradingPartnersApi->getTradingPartnerSites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trading_partner_id** | **int**| ID of the requested trading partner. | |
| **business_unit** | **string**| Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company. | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |
| **site_code** | **string**| Code of the trading partner for the requested sites. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\TradingPartnerSiteCollectionDTO**](../Model/TradingPartnerSiteCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTradingPartners()`

```php
getTradingPartners($business_unit, $created_after, $updated_after, $search_id, $page_size, $code, $name): \BeLenka\Deposco\Model\TradingPartnerCollectionDTO
```

Get a list of trading partners

Retrieves a list of trading partners, paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\TradingPartnersApi(
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
$code = 'code_example'; // string | Code of the requested trading partner.
$name = 'name_example'; // string | Name of the requested trading partner.

try {
    $result = $apiInstance->getTradingPartners($business_unit, $created_after, $updated_after, $search_id, $page_size, $code, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradingPartnersApi->getTradingPartners: ', $e->getMessage(), PHP_EOL;
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
| **code** | **string**| Code of the requested trading partner. | [optional] |
| **name** | **string**| Name of the requested trading partner. | [optional] |

### Return type

[**\BeLenka\Deposco\Model\TradingPartnerCollectionDTO**](../Model/TradingPartnerCollectionDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTradingPartner()`

```php
postTradingPartner($trading_partner_dto): \BeLenka\Deposco\Model\TradingPartnerDTO
```

Create or update a trading partner

Creates a new trading partner or updates data for an existing trading partner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\TradingPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trading_partner_dto = new \BeLenka\Deposco\Model\TradingPartnerDTO(); // \BeLenka\Deposco\Model\TradingPartnerDTO

try {
    $result = $apiInstance->postTradingPartner($trading_partner_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradingPartnersApi->postTradingPartner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trading_partner_dto** | [**\BeLenka\Deposco\Model\TradingPartnerDTO**](../Model/TradingPartnerDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\TradingPartnerDTO**](../Model/TradingPartnerDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
