# # InboundTransferOrderLineDTOAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_line_status** | **string** | Status of the order line. New order lines should be created with a status of New. | [optional] [readonly]
**ship_to_facility** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**co_line** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**inbound_lpn** | **string** | LPN number for the LPN in which stock is sent/received. | [optional]
**master_inbound_lpn** | **string** | LPN number for the pallet on which the LPN for the order line is stacked. | [optional]
**received_pack_quantity** | **int** | Quantity of the item/pack that was received. | [optional]
**received_damaged_pack_quantity** | **int** | Quantity of the item/pack that was received in a damaged condition. | [optional]
**receipt_lines** | [**\BeLenka\Deposco\Model\ReceiptCollectionDTO**](ReceiptCollectionDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
