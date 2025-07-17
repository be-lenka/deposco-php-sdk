# # SalesOrderLineDTOAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_line_status** | **string** | Status of the order line. New order lines should be created with a status of New. | [optional] [readonly]
**ship_from_facility** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**co_line** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**allocated_quantity** | **int** | Inventory quantity of the item/pack that is being held for the order line. Commonly populated with the same value as the order pack quantity when sending orders to Deposco. | [optional]
**unallocated_quantity** | **int** | Quantity of the item/pack for the order line that does not have any allocated inventory. | [optional]
**picked_pack_quantity** | **int** | Quantity of the item/pack that has been picked to fulfill the order line. | [optional] [readonly]
**shortage_pack_quantity** | **int** | Quantity of the item/pack that is not being shipped for the order line. | [optional]
**shipped_pack_quantity** | **int** | Quantity of the item/pack that has shipped for the order line. Must be a positive value. | [optional] [readonly]
**returned_pack_quantity** | **int** | Quantity from the order line that was returned by the customer. Must be a positive value. | [optional]
**preallocated** | **bool** | Whether stock for the order line line was allocated during a separate process before the order was included on a pick wave. | [optional] [readonly]
**is_back_ordered** | **string** | Reason code that provides additional details when an order line is backordered. | [optional] [readonly]
**platinum_line_no** | **int** | Used in the Print 2 Panda process to determine the pack quantity. | [optional]
**directed_to_zone** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**allocate_from_zone** | **bool** | Whether to allocate stock to fulfill the order from the zone in the &#x60;directedToZone&#x60; field. | [optional]
**carrier_special_services** | [**\BeLenka\Deposco\Model\CarrierSpecialServiceDTO[]**](CarrierSpecialServiceDTO.md) | Array of carrier special service records for the order line. Carrier special service records contain information related to special services for shipping carriers such as dry ice and dangerous goods. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
