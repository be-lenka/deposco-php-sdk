# # BillableTransactionDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**status** | **string** | Status of the billable transaction. New transactions should be created with a status of &#x60;Pending Approval&#x60;. | [optional]
**description** | **string** | Text that provides additional identifying information for the billable transaction. | [optional]
**billing_profile** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**billing_config** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**transaction_type** | **string** | Type of billing config record that generated the billable transaction. | [optional]
**transaction_source** | **string** | Source system that created the billable transaction. Automatically set to the name of the API application that created the billable transaction, if applicable. | [optional] [readonly]
**transaction_number** | **string** | Reference number for the billable transaction in an external system. | [optional]
**facility** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**location** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**container_number** | **string** | Container number of the container that is associated with the billable transaction. | [optional]
**order_header** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**item** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**item_attributes** | [**\BeLenka\Deposco\Model\BillableTransactionDTOItemAttributes**](BillableTransactionDTOItemAttributes.md) |  | [optional]
**quantity** | **int** | Quantity for the activity that was performed for the billable transaction. | [optional]
**total_price** | **int** | Total price for the billable transaction. Calculated based on the &#x60;quantity&#x60; for the activity and the &#x60;price&#x60; for the associated billing config record. | [optional]
**total_cost** | **int** | Total cost for the billable transaction. This is an informational field that is typically used only for reporting purposes or for display purposes on an invoice. | [optional]
**currency_code** | **string** | ISO 4217 code for the currency that is used for the billable transaction, such as &#x60;USD&#x60;, &#x60;GBP&#x60;, or &#x60;EUR&#x60;. | [optional]
**effective_date** | **\DateTime** | Date on which the billable transaction is effective and can be included on an invoice. | [optional]
**associated_user** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**custom_attribute1** | **string** | Custom attribute for the billable transaction. | [optional]
**created_date** | **\DateTime** | Date and time that the billable transaction was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the billable transaction was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
