# # ZoneDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**facility** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**name** | **string** | Name that identifies the zone. You may have multiple zones with the same name, each belonging to a different facility. |
**type** | **string** | Type of zone. Provide a value of &#x60;Picking&#x60; for all picking zones to ensure that users can be assigned to pick from those zones. Provide a value of &#x60;Staging&#x60; for all receiving and shipping zones. Other available values include &#x60;Consignment&#x60;, &#x60;General&#x60;, &#x60;Kitting&#x60;, &#x60;Non-Consignment&#x60;, and &#x60;Packing&#x60;. | [optional]
**pick_rating** | **int** | In pick and pass scenarios, the order/sequence of the zone in relation to other zones. Also used in some configurations of Batch Picking to assign a work group to a picking user based on the zone with the highest pick rating. | [optional]
**pick_system** | **string** | Used for build and release of pick waves for warehouse automation systems such as automated picking with robots. | [optional]
**max_number_of_units_to_work_group** | **int** | Used when building pick waves to define the total number of pickable items that are allowed for a work group in the zone. | [optional]
**allocate_all_stock_from_zone** | **bool** | Used during inventory allocation when releasing pick waves to completely deplete stock from the zone before allocating stock from another zone for an item. | [optional]
**default_location** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**locations** | [**\BeLenka\Deposco\Model\PaginatedEntityReference**](PaginatedEntityReference.md) |  | [optional]
**created_date** | **\DateTime** | Date and time that the zone was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the zone was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
