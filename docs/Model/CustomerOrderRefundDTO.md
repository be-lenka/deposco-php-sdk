# # CustomerOrderRefundDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**reference_number** | **string** | Reference number for the refund in the system from which the refund was applied. |
**type** | **string** | Type of refund. |
**total** | **int** | Total amount of the refund. |
**sub_total** | **int** | Amount that was refunded for the items on the order. This is the total refund amount excluding the tax amount that was refunded. | [optional]
**tax_total** | **int** | Total tax amount that was refunded. | [optional]
**co_payment** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional] [readonly]
**currency_code** | **string** | Type of currency that was used for the payment, such as &#x60;USD&#x60;. |
**created_date** | **\DateTime** | Date and time that the refund was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the refund was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
