# # CustomerOrderPaymentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**co_retail_activity** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional] [readonly]
**payment_number** | **string** | ID number for the payment. | [optional]
**type** | **string** | Type of payment. |
**amount** | **int** | Amount of the payment. |
**currency_code** | **string** | Type of currency that was used for the payment, such as &#x60;USD&#x60;. |
**gateway_name** | **string** | Name of the gateway that was used to make the payment. | [optional]
**payment_method** | **string** | Method of payment, such as &#x60;CreditCard&#x60;. | [optional]
**card_type** | **string** | Type of credit or debit card that was used to make the payment. | [optional]
**debit_card** | **bool** | Whether the card that was used for the payment was a debit card. | [optional]
**authorized** | **bool** | Whether the payment was authorized. | [optional]
**authorization_number** | **string** | Authorization number for the payment. | [optional]
**authorization_date** | **\DateTime** | Date and time when the payment was authorized. | [optional]
**authorization_code** | **string** | Authorization code for the payment. | [optional]
**authorization_message** | **string** | Authorization message for the payment. | [optional]
**authorization_only** | **bool** | Whether the payment was only an authorization. | [optional]
**voided** | **bool** | Whether the payment was voided. | [optional]
**test_transaction** | **bool** | Whether the transaction for the payment was a test transaction. | [optional]
**cx_customer** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional] [readonly]
**customer_present** | **bool** | Whether the customer was present for the payment. | [optional]
**parent_payment_number** | **string** | ID number for the parent payment that is associated with this payment. | [optional]
**additional_data** | **string** | Additional data associated with the payment. | [optional]
**created_date** | **\DateTime** | Date and time that the payment was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the payment was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
