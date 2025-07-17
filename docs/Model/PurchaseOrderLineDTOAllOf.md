# # PurchaseOrderLineDTOAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_line_status** | **string** | Status of the order line. New order lines should be created with a status of New. | [optional] [readonly]
**ship_to_facility** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**inbound_lpn** | **string** | LPN number for the LPN in which stock is sent/received. Required when receiving LPNs against either a single purchase order or multiple purchase orders. | [optional]
**master_inbound_lpn** | **string** | LPN number for the pallet on which the LPN for the order line is stacked. | [optional]
**received_pack_quantity** | **int** | Quantity of the item/pack that was received. | [optional] [readonly]
**received_damaged_pack_quantity** | **int** | Quantity of the item/pack that was received in a damaged condition. | [optional] [readonly]
**returned_pack_quantity** | **int** | Quantity from the order line that was returned to the vendor. Must be a positive value. | [optional] [readonly]
**invoice** | **string** | Invoice number of an invoice that is associated with the order line. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
