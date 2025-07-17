# # FacilityDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**number** | **string** | Unique code that identifies the facility. Consider using an abbreviated descriptive naming convention for the facility number, such as LA-DC for the Los Angeles distribution center facility. |
**name** | **string** | Name of the facility. | [optional]
**type** | **string** | Type of facility. | [optional]
**is_virtual** | **bool** | Used with Bright Order. Whether the inventory in the facility is managed by Deposco (&#x60;false&#x60;) or by a different system (&#x60;true&#x60;). Customer orders can be routed to virtual facilities for fulfillment through a system other than Deposco. | [optional]
**dba_name** | **string** | User-friendly doing business as (DBA) name for the company that uses the facility. | [optional]
**description** | **string** | Text that provides more information about the facility. | [optional]
**phone** | **string** | Primary phone number for the facility. | [optional]
**contact** | [**\BeLenka\Deposco\Model\FacilityDTOContact**](FacilityDTOContact.md) |  | [optional]
**address** | [**\BeLenka\Deposco\Model\FacilityDTOAddress**](FacilityDTOAddress.md) |  | [optional]
**facility_uom_system** | **string** | Whether &#x60;Metric&#x60; (CM/KG) or &#x60;Imperial&#x60; (IN/LB) units of measure (UOM) are used for outbound warehouse processes at the facility such as packing, shipping, rate shopping, and cartonization. | [optional]
**time_zone** | [**\BeLenka\Deposco\Model\TimeZone**](TimeZone.md) |  | [optional]
**enable_customer_pickup** | **bool** | Used with Bright Order. Whether the facility is used to fulfill orders by pickup in store or only by shipping. | [optional]
**enable_ship_to_customer** | **bool** | Used with Bright Order. Whether the facility is used to fulfill orders by shipping or only by pickup in store. | [optional]
**latitude** | **int** | Latitude of the facility. Used with Bright Order for the geo-proximity method for order routing. | [optional]
**longitude** | **int** | Longitude of the facility. Used with Bright Order for the geo-proximity method for order routing. | [optional]
**square_feet** | **int** | Size of the facility in square feet. | [optional]
**fulfillment_facility** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**import_reference** | **string** | Identifying information for the facility in an external system if the facility is imported. | [optional]
**created_date** | **\DateTime** | Date and time that the facility was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the facility was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
