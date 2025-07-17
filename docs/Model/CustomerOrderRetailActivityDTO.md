# # CustomerOrderRetailActivityDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**type** | **string** | Type of retail transaction. | [optional]
**retail_transaction_id** | **string** | Universally unique transaction number from the source POS system for when a unique id is needed across multiple stores. |
**sequence_number** | **string** | Sequence number of the transaction. In many cases, a retail store restarts the sequence number for transactions to zero (0) each day. | [optional]
**batch** | **string** | Batch ID when the retail activity is part of a group of transactions. | [optional]
**batch_sequence_number** | **int** | Sequence number for the retail transaction when the transaction is part of a batch of transactions. | [optional]
**reference_number** | **string** | Customer-facing receipt number for the transaction. In POS systems, this is sometimes called the invoice number or ticket number. The value can include hyphens (-) but must not include a period (.). | [optional]
**facility** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**register** | **string** | Store register at which the transaction occurred. | [optional]
**till** | **string** | Cash till in the store register at which the transaction occurred. | [optional]
**associate** | **string** | Store associate or operator who performed the transaction at the workstation in the retail store. | [optional]
**user** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**business_day_date** | **\DateTime** | Business day on which the transaction occurred. | [optional]
**transaction_start_date** | **\DateTime** | Start date and time for the transaction. | [optional]
**transaction_end_date** | **\DateTime** | End date and time for the transaction. | [optional]
**transaction_source** | **string** | Name of the point-of-sale (POS) system from which the retail transaction was sent. |
**test_transaction** | **bool** | Whether the transaction is a test transaction used for training or testing. | [optional]
**voided** | **bool** | Whether the transaction was voided. | [optional]
**reason_code** | **string** | Used for return and void transactions to explain why the transaction occurred. | [optional]
**created_date** | **\DateTime** | Date and time that the retail activity was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the retail activity was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
