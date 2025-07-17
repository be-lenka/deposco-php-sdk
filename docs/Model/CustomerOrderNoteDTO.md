# # CustomerOrderNoteDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**title** | **string** | Title of the note. |
**body** | **string** | Full text of the note. |
**source** | **string** | Source system from which the note was imported, if applicable. Typically set to the name of the external system or to a general value of &#x60;External&#x60;. | [optional] [readonly]
**priority** | **string** | Priority for the note. | [optional]
**created_date** | **\DateTime** | Date and time that the note was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the note was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
