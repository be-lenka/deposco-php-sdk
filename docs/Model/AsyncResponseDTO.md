# # AsyncResponseDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status of the asynchronous request. | [optional]
**total_entities** | **int** | Total number of entities that were processed for the request. | [optional]
**successes** | **int** | Total number of entities that were successfully processed for the request. | [optional]
**failures** | **int** | Total number of entities with a processing failure for the request. | [optional]
**error_message** | **string** | Text that describes the error that occurred for the request. | [optional]
**results** | [**\BeLenka\Deposco\Model\AsyncDetailDTO[]**](AsyncDetailDTO.md) | Array of status updates for the asynchronous request. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
