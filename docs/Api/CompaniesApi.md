# BeLenka\Deposco\CompaniesApi

All URIs are relative to https://api.deposco.com/latest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCompanies()**](CompaniesApi.md#getCompanies) | **GET** /companies | Get a list of companies |
| [**getCompany()**](CompaniesApi.md#getCompany) | **GET** /companies/{companyId} | Get a company |
| [**postCompanies()**](CompaniesApi.md#postCompanies) | **POST** /companies | Create or update a company |


## `getCompanies()`

```php
getCompanies($search_id, $code, $created_after, $updated_after, $page_size): \BeLenka\Deposco\Model\GetCompanies200Response
```

Get a list of companies

Retrieves a list of companies (business units), paginated and sorted by ID in descending order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_id = 'search_id_example'; // string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$code = 'code_example'; // string | Search field for Company code
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$page_size = 50; // int | Number of records returned on each page of the search results. The default page size is 50.

try {
    $result = $apiInstance->getCompanies($search_id, $code, $created_after, $updated_after, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_id** | **string**| ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter. | [optional] |
| **code** | **string**| Search field for Company code | [optional] |
| **created_after** | **\DateTime**| Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **updated_after** | **\DateTime**| Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. | [optional] |
| **page_size** | **int**| Number of records returned on each page of the search results. The default page size is 50. | [optional] [default to 50] |

### Return type

[**\BeLenka\Deposco\Model\GetCompanies200Response**](../Model/GetCompanies200Response.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompany()`

```php
getCompany($company_id): \BeLenka\Deposco\Model\CompanyDTO
```

Get a company

Retrieves the details of an existing company (business unit). Provide the unique identifier that was returned when the company was created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | ID of the requested company or business unit.

try {
    $result = $apiInstance->getCompany($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| ID of the requested company or business unit. | |

### Return type

[**\BeLenka\Deposco\Model\CompanyDTO**](../Model/CompanyDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCompanies()`

```php
postCompanies($company_dto): \BeLenka\Deposco\Model\CompanyDTO
```

Create or update a company

Creates a new company (business unit) or updates data for an existing company.  You cannot delete a company or update the code for a company after it has been created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = BeLenka\Deposco\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\Deposco\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_dto = new \BeLenka\Deposco\Model\CompanyDTO(); // \BeLenka\Deposco\Model\CompanyDTO

try {
    $result = $apiInstance->postCompanies($company_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->postCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_dto** | [**\BeLenka\Deposco\Model\CompanyDTO**](../Model/CompanyDTO.md)|  | |

### Return type

[**\BeLenka\Deposco\Model\CompanyDTO**](../Model/CompanyDTO.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
