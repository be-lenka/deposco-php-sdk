# # CustomerReturnDTOAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of order. | [optional] [readonly]
**order_status** | **string** | Overall status of the customer return as it progresses through the receiving process. New customer returns should be created with a status of New. | [optional]
**ship_to_facility** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**parent_order** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**co_header** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**order_lines** | [**\BeLenka\Deposco\Model\CustomerReturnLineCollectionDTO**](CustomerReturnLineCollectionDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
