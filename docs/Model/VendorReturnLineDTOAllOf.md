# # VendorReturnLineDTOAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_line_status** | **string** | Status of the order line. New order lines should be created with a status of New. | [optional]
**ship_from_facility** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**allocated_quantity** | **int** | Inventory quantity of the item/pack that is being held for the order line. Commonly populated with the same value as the order pack quantity when sending orders to Deposco. | [optional] [readonly]
**unallocated_quantity** | **int** | Quantity of the item/pack for the order line that does not have any allocated inventory. | [optional] [readonly]
**picked_pack_quantity** | **int** | Quantity of the item/pack that has been picked for the order line. | [optional] [readonly]
**shipped_pack_quantity** | **int** | Quantity of the item/pack that has shipped for the order line. Must be a positive value. | [optional] [readonly]
**preallocated** | **bool** | Whether stock for the order line line was allocated during a separate process before the order was included on a pick wave. | [optional] [readonly]
**is_back_ordered** | **string** | Reason code that provides additional details when an order line is backordered. | [optional] [readonly]
**directed_to_zone** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**allocate_from_zone** | **bool** | Whether to allocate stock to fulfill the order from the zone in the &#x60;directedToZone&#x60; field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
