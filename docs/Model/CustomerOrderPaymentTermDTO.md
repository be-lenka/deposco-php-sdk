# # CustomerOrderPaymentTermDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**terms_type** | **string** | Code or name associated with a specific set of payment terms. |
**description** | **string** | Text that provides additional information about the payment terms. | [optional]
**terms_basis_date_code** | **string** | Date code from which the payment term duration is calculated. | [optional]
**net_due_days** | **int** | Number of days from the basis date code within which payment is due. |
**net_due_date** | **\DateTime** | Date by which payment is due. | [optional]
**discount_date** | **\DateTime** | Date before which payment is at a discounted rate. | [optional]
**discount_rate** | **int** | Discount rate that is applied based on the payment terms. | [optional]
**discount_amount** | **int** | Discount amount that is applied based on the payment terms. |
**discount_percentage** | **int** | Discount percentage that is applied within the discount date. | [optional]
**discount_due_days** | **int** | Days from basis date code within which payment is at a discounted rate. | [optional]
**created_date** | **\DateTime** | Date and time that the payment term was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the payment term was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
