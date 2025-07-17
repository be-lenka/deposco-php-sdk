# # VendorReturnDTOAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of order. | [optional] [readonly]
**parent_order** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**order_status** | **string** | Overall status of the vendor return as it progresses through the fulfillment process. New vendor returns should be created with a status of New. | [optional]
**ship_from_facility** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**duty_paid_by** | **string** | Used for international shipments to identify how duties are paid for the order. Set to DDP if duties are paid by the shipper or DDU if duties are paid by the recipient. If no value is specified, then the value for the shipping service that is assigned to the order is used. Supported only for certain shipping carriers such as UPS, FedEx, DHL eCommerce, DHL Express, and Globegistics. | [optional]
**duty_paid_by_type** | **string** | Identifies how to determine the account that is responsible for payment of international shipping duties for the order when &#x60;dutyPaidBy&#x60; is set to &#x60;DDP&#x60;. | [optional]
**duty_paid_by_contact_name** | **string** | Name of the contact person for the party that is responsible for payment of international shipping duties for the order when &#x60;dutyPaidBy&#x60; is set to &#x60;DDP&#x60;. | [optional]
**duty_paid_by_account** | **string** | Account number that is used to pay international shipping duties for the order when &#x60;dutyPaidBy&#x60; is set to &#x60;DDP&#x60;. | [optional]
**duty_paid_by_postal_code** | **string** | Postal (ZIP) code of the address for the party that is responsible for payment of international shipping duties for the order when &#x60;dutyPaidBy&#x60; is set to &#x60;DDP&#x60;. | [optional]
**duty_paid_by_country** | **string** | Two-letter (ISO 3166-1 alpha-2) country code of the address for the party that is responsible for payment of international shipping duties for the order when &#x60;dutyPaidBy&#x60; is set to &#x60;DDP&#x60;. | [optional]
**directed_to_zone** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**order_lines** | [**\BeLenka\Deposco\Model\VendorReturnLineCollectionDTO**](VendorReturnLineCollectionDTO.md) |  | [optional]
**shipments** | [**\BeLenka\Deposco\Model\PaginatedEntityReference**](PaginatedEntityReference.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
