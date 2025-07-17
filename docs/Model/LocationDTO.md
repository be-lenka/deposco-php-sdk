# # LocationDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**facility** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**zones** | [**\BeLenka\Deposco\Model\PaginatedEntityReference**](PaginatedEntityReference.md) |  | [optional]
**number** | **string** | Unique, descriptive code that identifies the location. For the Receiving and Shipping locations, include an abbreviated reference to the facility, such as LA-Receiving for the receiving location at the Los Angeles facility or CHI-Shipping for the shipping location at the Chicago facility. For other locations, include an abbreviated reference to the facility as well as other location identifiers such as the aisle, rack, and shelf. For example, NY-01AA03 might be the number for the third shelf on rack AA in aisle 01 in the New York facility. | [optional]
**locator** | **string** | Unique identifier for the facility, typically represented as a barcode, that users can scan to confirm that picks and moves are occurring at the correct location within the facility. For the Receiving and Shipping locations, the locator is &#x60;Receiving&#x60; and &#x60;Shipping&#x60;, respectively. |
**name** | **string** | Name that identifies the location. | [optional]
**description** | **string** | Text that provides additional information about the location. | [optional]
**type** | **string** | Type of location. Used for sorting, filtering, and reporting purposes. | [optional]
**storage_type** | **string** | Type of storage that the location is used for:  - &#x60;Staging&#x60; - Use this value for all shipping and receiving locations.  - &#x60;Split Case Picking&#x60; - Use this value to automatically convert stock units to the lowest unit of measure for the pack when stock is moved to this location.  - &#x60;Putwall Slot&#x60; and &#x60;Putwall Staging&#x60; - Use these values for locations associated with a put wall, which is used to sort picked orders before packing.  - The remaining values are informational only, and do not impact any workflow processes or other product functionality. | [optional]
**status** | **string** | Current status of the location. | [optional]
**dimensions** | [**\BeLenka\Deposco\Model\Dimension**](Dimension.md) |  | [optional]
**pickable** | **bool** | Whether the location is available to be picked from. When a pick wave is released, the wave includes pick tasks only for pickable locations. | [optional]
**reserved** | **bool** | Whether the location is used for reserve storage. The replenishment process validates that this field is set to &#x60;true&#x60; when determining whether you can replenish from a location. | [optional]
**lpn_controlled** | **bool** | Whether the location includes LPNs that can be used to identify which stock unit to move, pick, or pack. | [optional]
**mixed_item_threshold** | **string** | Whether more than one item is stored in the location. Move processes validate this behavior and will either allow or prevent a user from putting a second item in the location. | [optional]
**cycle_count** | **bool** | Whether cycle counts should occur for the location. | [optional]
**cycle_count_frequency** | **int** | Frequency in days at which cycle counts should occur for the location. This field is informational only, and does not impact any workflow processes or other product functionality. | [optional]
**last_counted_date** | **\DateTime** | Date on which either a cycle count or a physical count occurred for the location. | [optional] [readonly]
**pick_sequence** | **int** | Numeric value that indicates the order in which the location should be picked from in relation to other locations. | [optional]
**putaway_sequence** | **int** | Numeric value that indicates the order in which stock should be put away after receiving or during replenishment in relation to other locations. | [optional]
**use_for_kit** | **bool** | Whether the location is used for assembling the component items for a bundled product. This option is informational only, and does not impact any workflow processes or other product functionality. | [optional]
**allocated_to_business_unit** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**custom_attribute1** | **string** | Custom field for the location. | [optional]
**custom_attribute2** | **string** | Custom field for the location. | [optional]
**custom_attribute3** | **string** | Custom field for the location. | [optional]
**storage_details** | [**\BeLenka\Deposco\Model\StorageCollectionDTO**](StorageCollectionDTO.md) |  | [optional]
**created_date** | **\DateTime** | Date and time that the location was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the location was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
