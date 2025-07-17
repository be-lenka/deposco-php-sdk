# # ContainerDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  |
**lpn_number** | **string** | Unique LPN label number or barcode for the container that is scanned during warehouse management processes. |
**number** | **string** | Unique identification code for the container. May be the same as the value in &#x60;lpnNumber&#x60;. |
**type** | **string** | Type of container. | [optional]
**secondary_type** | **string** | When shipping on a pallet, the &#x60;type&#x60; of the container is &#x60;Shipping&#x60;, and the &#x60;secondaryType&#x60; is &#x60;Pallet&#x60;. | [optional]
**carton_type** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**description** | **string** | Text that provides additional information about the container. | [optional]
**status** | **string** | Status of the container. New containers should be created with a status of &#x60;Ready&#x60;. | [optional]
**gtin** | **string** | Reserved for future use. | [optional]
**dimensions** | [**\BeLenka\Deposco\Model\Dimension**](Dimension.md) |  | [optional]
**weight** | **int** | Weight of the container. | [optional]
**weight_uom** | **string** | Unit of measure for the weight of the container. | [optional]
**active_zone** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**location** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**cart** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**cart_slot_number** | **int** | Slot on a cart in which the container is located. Used for cartonization. | [optional]
**copy_source_lpn_number** | **string** | Previous source container for the current container. For example, if you pick into a transient container, and then move the stock into a shipping container, then this field can be used on the shipping container record to store the identification code of the transient container. | [optional]
**parent** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional]
**master_lpn_number** | **string** | LPN number of an outer container in which other containers are packed for an inbound shipment (which may also be called an _advance ship notice_ or _ASN_). | [optional]
**package_type** | **string** | Type of package for the container, which enables shipping carriers to determine how the container is packed. Typically populated on the shipping service request. | [optional]
**shipment** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional] [readonly]
**trip** | [**\BeLenka\Deposco\Model\NullableEntityRef**](NullableEntityRef.md) |  | [optional] [readonly]
**insured_value** | **int** | Value of the contents of a shipping container, which is used to calculate the insurance for the container that is sent to the shipping providers. | [optional]
**shipping_cost** | **int** | Cost to ship the container. | [optional]
**base_tracking_link** | **string** | Link for opening a page on the shipping carrier&#39;s website to track the status of the shipment that is assigned to the container. | [optional]
**tracking_url** | **string** | URL that is used with the shipment tracking number for tracking the status of the shipment that is assigned to the container. | [optional]
**tracking_number** | **string** | Tracking number for the shipment that is associated with the container. | [optional]
**tracking_number2** | **string** | Secondary tracking number that is provided by some services that use multiple tracking numbers. | [optional]
**return_tracking_number** | **string** | Tracking number for the return shipping label that is included in the container. | [optional]
**usps_construct_code** | **string** | Construct Code from the U.S. Postal Service. The Construct Code is a barcode that consolidates the ZIP code, mailer ID, and serial number. | [optional]
**order_header_sequence** | **int** | Used during cartonization at the wave to identify the sequence of the container in relation to other containers that are created during the build and release wave process for a single order. | [optional]
**order_header_sequence_total** | **int** | Used during cartonization at the wave to identify the sequence of the container in relation to other containers that are created during the build and release wave process for a single order. | [optional]
**pick_wave_sequence** | **int** | Used in cubing to identify the sequence of the container in relation to other containers that are created during the build and release wave process. This sequence applies to the entire wave and can span multiple orders. | [optional]
**pick_wave_sequence_total** | **int** | Used in cubing to identify the sequence of the container in relation to other containers that are created during the build and release wave process. This sequence applies to the entire wave and can span multiple orders. | [optional]
**sequence** | **int** | Used by the Print to Panda process to determine the x of y values for a container. | [optional]
**sequence_total** | **int** | Used by the Print to Panda process to determine the x of y values for a container. | [optional]
**printed** | **bool** | Used by the Print to Panda process to indicate whether a retailer label was printed for the container. | [optional]
**sscc_lpn_number** | **string** | Used by the Print to Panda process to store the SSCC number for the pallet, if the process is configured to generate one. | [optional]
**reference_number1** | **string** | Used by the Assign Trip to Container process to store the trip number. | [optional]
**created_date** | **\DateTime** | Date and time that the container was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the container was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
