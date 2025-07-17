# # ChannelListingDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**item** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**integration** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**listing_status** | **string** | Status of the channel listing. A value of Linked indicates that the listing is active in the external system and linked to the item in Deposco. A value of Deleted is returned if the listing was created through a socket integration and then deleted in the external system. | [optional]
**pack_quantity** | **int** | Used in some sockets to perform the unit of measure conversion when an item is sold in different quantities. |
**description** | **string** | Reserved for future use for a description of the item from the external system. | [optional]
**listing_price** | **int** | Reserved for future use for the price of the item that is provided in the sales channel. | [optional]
**item_condition** | **string** | Reserved for future use primarily in marketplaces to designate an item as Used or New. | [optional]
**saleable** | **bool** | Whether Deposco should fulfill and process orders for the item. | [optional]
**sync_inventory** | **bool** | Used for socket integrations to indicate whether Deposco should perform inventory sync for the item. | [optional]
**ref1** | **string** | Internal reference for the item in the external system. This field should be set to the item number or ID. |
**ref2** | **string** | Internal reference for the item in the external system. | [optional]
**ref3** | **string** | Internal reference for the item in the external system. | [optional]
**ref4** | **string** | Internal reference for the item in the external system. | [optional]
**ref5** | **string** | Internal reference for the item in the external system. | [optional]
**sec_ref1** | **string** | Secondary reference for the item in the external system. | [optional]
**sec_ref2** | **string** | Secondary reference for the item in the external system. | [optional]
**sec_ref3** | **string** | Secondary reference for the item in the external system. | [optional]
**sec_ref4** | **string** | Secondary reference for the item in the external system. | [optional]
**sec_ref5** | **string** | Secondary reference for the item in the external system. | [optional]
**created_date** | **\DateTime** | Date and time that the channel listing was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the channel listing was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
