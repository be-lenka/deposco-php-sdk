# # InboundTransferOrderDTOAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of order. | [optional] [readonly]
**order_status** | **string** | Overall status of the order as it progresses through the receiving process. New orders should be created with a status of either New or Hold. | [optional]
**ship_to_facility** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**ship_from_facility** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**customer_order_headers** | [**\BeLenka\Deposco\Model\EntityRef[]**](EntityRef.md) | Array of customer orders (from Bright Order) that are associated with the inbound transfer order. | [optional] [readonly]
**order_lines** | [**\BeLenka\Deposco\Model\InboundTransferOrderLineCollectionDTO**](InboundTransferOrderLineCollectionDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
