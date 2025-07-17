# # CustomerOrderNoticeDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**notice_type** | **string** | Type of notice, which is &#x60;ERROR&#x60; in most cases. | [readonly]
**code** | **string** | Code for the issue type, such as &#x60;MISSING_REQUIRED&#x60;, &#x60;NO_ITEM_ON_LINE&#x60;, or &#x60;POTENTIAL_DUPLICATE_ORDER&#x60;. A list of of codes and recommended steps to resolve notices is available in the Deposco Help Center. | [readonly]
**message** | **string** | Description of the issue that generated the notice. | [readonly]
**field_name** | **string** | Field on the entity with missing or invalid data. | [optional] [readonly]
**provided_value** | **string** | Value that was provided in the field and caused the error. | [readonly]
**status** | **string** | Status of the notice. Available values are &#x60;New&#x60; and &#x60;Resolved&#x60;. | [readonly]
**comment** | **string** | Additional text that explains why the issue occurred or how it was resolved. | [optional] [readonly]
**created_date** | **\DateTime** | Date and time that the notice was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the notice was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
