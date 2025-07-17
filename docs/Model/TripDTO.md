# # TripDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**business_unit** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**number** | **string** | Unique identification number for the trip. |
**status** | **string** | Status of the trip. A trip is open if it has been created but containers and shipments can still be added to the trip. An open trip can also be moved from one shipping door to another. A trip is set to a status of &#x60;Closed&#x60; when the trip can no longer be changed and the truck for the ship has left the facility. Trips are typically closed by warehouse management process. | [optional]
**delivery_type** | **string** | Whether the trip is for an &#x60;Internal&#x60; delivery to another facility (in other words, a transfer) or an &#x60;Outbound&#x60; delivery (typically through a shipping carrier). | [optional]
**ship_from_facility** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**shipping_carrier** | **string** | Shipping carrier through which the trip is being shipped. |
**account_number** | **string** | Pickup account number for the shipping carrier that is assigned to the trip. | [optional]
**license_number** | **string** | License number for the shipping carrier that is assigned to the trip. | [optional]
**freight_type** | **string** | Whether the trip is for &#x60;Parcel&#x60; or &#x60;Freight&#x60; shipments. | [optional] [default to 'Parcel']
**dock_door** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**driver_name** | **string** | Name of the driver of the truck on which the trip is loaded. | [optional]
**departure_time** | **\DateTime** | Date and time at which the truck for the trip departs the shipping door for the facility. | [optional]
**current_scheduled_delivery_date** | **\DateTime** | Date on which the trip is scheduled to be delivered. | [optional]
**estimated_delivery_date** | **\DateTime** | Date on which the trip is estimated to be delivered. | [optional]
**actual_arrival_time** | **\DateTime** | Date on which the trip is delivered. | [optional]
**carrier_alpha_code** | **string** | Standard Carrier Alpha Code (SCAC) for the trip. A SCAC is a unique 2 to 4-letter code used to identify carriers and transportation companies. | [optional]
**freight_class** | **string** | National Motor Freight Classification (NMFC) number for the trip. | [optional]
**transportation_method_code** | **string** | Transportation mode that is assigned to the BOL for the trip. Use a value of &#x60;ZZ&#x60; for &#x60;Mutually defined&#x60; or &#x60;LT&#x60; for &#x60;Less Than Trailer Load (LTL)&#x60;. | [optional]
**bol_number** | **string** | Bill of lading (BOL) number for the trip. A BOL is a legal document that details the type, quantity, and ownership of the goods, as well as their destination. | [optional]
**equipment_description_code** | **string** | Code that identifies the type of equipment that is used to transport the trip. | [optional]
**carrier_equipment_number** | **string** | Identifying number for the equipment that the carrier uses for the trip. This is typically the trailer number. | [optional]
**seal_number** | **string** | Unique identification number or authorization code for the trip to ensure the security and integrity of the cargo during transportation. | [optional]
**route** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional]
**ref_number** | **string** | Additional reference identification number for the trip. For example, this may contain a PO number for the order that is associated with the trip. | [optional]
**shipments** | [**\BeLenka\Deposco\Model\OutboundShipmentCollectionDTO**](OutboundShipmentCollectionDTO.md) |  | [optional]
**created_date** | **\DateTime** | Date and time that the trip was created. | [optional] [readonly]
**updated_date** | **\DateTime** | Date and time that the trip was last updated. | [optional] [readonly]
**created_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]
**updated_by** | [**\BeLenka\Deposco\Model\EntityRef**](EntityRef.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
