# # PurchaseOrderDTOAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of order. | [optional] [readonly]
**order_status** | **string** | Overall status of the order as it progresses through the receiving process. New orders should be created with a status of either New or Hold. | [optional]
**ship_to_facility** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**payment_terms** | **string** | When payment is due for the purchase order. The list of payment terms for an environment must be defined with the assistance of a Deposco representative. | [optional]
**currency_code** | **string** | Code for the currency type that should be used for the purchase order. Available values include &#x60;CAN&#x60;, &#x60;EUR&#x60;, &#x60;GBP&#x60;, &#x60;MXN&#x60;, and &#x60;USD&#x60;. | [optional]
**contract_number** | **string** | Trading partner contract number associated with the purchase order. | [optional]
**ack_reason_code** | **string** | Code that provides details on the overall acknowledgement status for the purchase order. A value of &#x60;AK&#x60; indicates that the order was accepted as-is, &#x60;RJ&#x60; indicates that the order was rejected, and &#x60;AC&#x60; indicates that the order was accepted with changes, which means that individual order lines were accepted or rejected, and quantities may be changed on accepted order lines. | [optional]
**inv_segmentation_plan** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**on_time** | **bool** | Reserved for future use. | [optional]
**vendor_compliant** | **bool** | Reserved for future use. | [optional]
**order_lines** | [**\BeLenka\Deposco\Model\PurchaseOrderLineCollectionDTO**](PurchaseOrderLineCollectionDTO.md) |  | [optional]
**shipments** | [**\BeLenka\Deposco\Model\PaginatedEntityReference**](PaginatedEntityReference.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
