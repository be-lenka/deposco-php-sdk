# # CustomerOrderTaxDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**tax_type** | **string** | Identification of the type of duty, tax, or fee applicable to commodities or of tax applicable to services. |
**tax_percentage** | **int** | Amount of tax applied as a percentage. | [optional]
**tax_amount** | **int** | Amount of tax applied in raw currency. |
**tax_exempt_code** | **string** | Code for whether the order or item is exempt from the tax. |
**created_date** | **\DateTime** | Date and time that the tax was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that tax was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
