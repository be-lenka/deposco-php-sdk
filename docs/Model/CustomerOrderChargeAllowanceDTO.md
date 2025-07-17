# # CustomerOrderChargeAllowanceDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**indicator** | **string** | Code for whether this is an allowance or charge for the specified service. Possible values include &#x60;Charge&#x60;, &#x60;Allowance&#x60;, or both. | [optional]
**code** | **string** | Code for the type of allowance or charge for the specified service. |
**allow_charge_amount** | **int** | Amount of the allowance or charge. |
**agency** | **string** | Code for the agency that assigns the code values. | [optional]
**agency_code** | **string** | Agency code for the service, promotion, allowance, or charge. | [optional]
**allow_charge_percent_basis** | **int** | Code for the basis on which an allowance or charge percent is calculated. | [optional]
**allow_charge_percent** | **int** | Percentage of the allowance or charge. Percentages should be represented as real numbers. (0% through 100% should be normalized to 0.0 through 100.00.) | [optional]
**allow_charge_rate** | **int** | Value expressed in monetary currency that applies to the given quantity. Example: The rate is $5.00 off one dozen. | [optional]
**allow_charge_qty** | **int** | Numeric value of the quantity for the allowance or charge. | [optional]
**allow_charge_qty_uom** | **string** | Unit of measure for the quantity for the allowance or charge. | [optional]
**created_date** | **\DateTime** | Date and time that the charge allowance was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the charge allowance was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
