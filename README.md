# Deposco Fulfillment - PHP SDK 

Welcome to the Deposco API Reference! The Deposco API enables you to integrate your system with Deposco.

* Integrate a product information system (PIM) by creating and retrieving data for items, packs, UPCs, and kits.
* Set up warehouse data by creating facilities, zones, locations, and storage details.
* Create inbound orders that can be received and outbound orders that can be fulfilled with Deposco warehouse management processes.

This reference provides details on available operations, endpoints, parameters, schemas, and responses.  Example requests and responses are also available for you to use as a reference. You can copy the examples to use as a starting point for your own requests.

Review the guides to learn how the API is used in common business scenarios such as setting up the warehouse and integrating a Product Information Management (PIM) system.

When you're ready to get started, register for a developer account and then log in to create your application in the developer portal.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/be-lenka/deposco-php-sdk.git"
    }
  ],
  "require": {
    "be-lenka/deposco-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/BeLenka/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = \BeLenka\Deposco\Configuration::getDefaultConfiguration();

$refreshToken = '<refresh_token>';
$clientId = '<client_id>';
$secretId = '<secret_id>';

$token = new \BeLenka\Deposco\Auth($clientId, $secretId, $refreshToken, $config);
$token->authenticate();

$apiInstance = new \BeLenka\Deposco\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new \GuzzleHttp\Client(),
    $config
);

// string | Code for the company (business unit) to which the resource is assigned. Optional if the application is restricted to one company.
$business_unit = '<business_unit>';

// string | ID that is returned in the links section of incomplete search results. Specify the search ID in this parameter to continue retrieving search results. Other search-related parameters are overridden by this parameter.
$search_id = '';

// string | Item number of the requested item.
$number = '';

// string | Name of the requested item.
$name = '';

// \DateTime | Search field for finding records created after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$created_after = new \DateTime("2023-10-20T19:20:30+01:00");

// \DateTime | Search field for finding records updated after the specified date and time in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
$updated_after = new \DateTime("2023-10-20T19:20:30+01:00");

// int | Number of records returned on each page of the search results. The default page size is 50.
$page_size = 50;

try {
    $result = $apiInstance->getItems($business_unit, $search_id, $number, $name, $created_after, $updated_after, $page_size);
    print_r($result);
} catch (\Exception $e) {
    echo 'Exception when calling ItemsApi->getItems: ', $e->getMessage(), PHP_EOL;
}
```

## API Endpoints

All URIs are relative to *https://api.deposco.com/latest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AsynchronousOperationsApi* | [**getRequest**](docs/Api/AsynchronousOperationsApi.md#getrequest) | **GET** /async/{requestId} | Get the status of an asynchronous request
*AsynchronousOperationsApi* | [**postBulkImport**](docs/Api/AsynchronousOperationsApi.md#postbulkimport) | **POST** /async/bulkImports | Perform a bulk import
*BillableTransactionsApi* | [**getBillableTransactions**](docs/Api/BillableTransactionsApi.md#getbillabletransactions) | **GET** /billing/transactions | Get a list of billable transactions
*CompaniesApi* | [**getCompanies**](docs/Api/CompaniesApi.md#getcompanies) | **GET** /companies | Get a list of companies
*CompaniesApi* | [**getCompany**](docs/Api/CompaniesApi.md#getcompany) | **GET** /companies/{companyId} | Get a company
*CompaniesApi* | [**postCompanies**](docs/Api/CompaniesApi.md#postcompanies) | **POST** /companies | Create or update a company
*ContainersApi* | [**getContainerById**](docs/Api/ContainersApi.md#getcontainerbyid) | **GET** /containers/{containerId} | Get a container
*ContainersApi* | [**getContainers**](docs/Api/ContainersApi.md#getcontainers) | **GET** /containers | Get a list of containers
*ContainersApi* | [**postContainers**](docs/Api/ContainersApi.md#postcontainers) | **POST** /containers | Create or update a container
*CustomerOrdersApi* | [**getCustomerOrder**](docs/Api/CustomerOrdersApi.md#getcustomerorder) | **GET** /orders/customerOrders/{orderId} | Get a customer order
*CustomerOrdersApi* | [**getCustomerOrderLine**](docs/Api/CustomerOrdersApi.md#getcustomerorderline) | **GET** /orders/customerOrders/{orderId}/customerOrderLines/{orderLineId} | Get an order line for a customer order
*CustomerOrdersApi* | [**getCustomerOrderLines**](docs/Api/CustomerOrdersApi.md#getcustomerorderlines) | **GET** /orders/customerOrders/{orderId}/customerOrderLines | Get a list of order lines for a customer order
*CustomerOrdersApi* | [**getCustomerOrders**](docs/Api/CustomerOrdersApi.md#getcustomerorders) | **GET** /orders/customerOrders | Get a list of customer orders
*CustomerOrdersApi* | [**postCustomerOrder**](docs/Api/CustomerOrdersApi.md#postcustomerorder) | **POST** /orders/customerOrders | Create or update a customer order
*CustomerReturnsApi* | [**getCustomerReturn**](docs/Api/CustomerReturnsApi.md#getcustomerreturn) | **GET** /orders/customerReturns/{orderId} | Get a customer return
*CustomerReturnsApi* | [**getCustomerReturnLine**](docs/Api/CustomerReturnsApi.md#getcustomerreturnline) | **GET** /orders/customerReturns/{orderId}/orderLines/{orderLineId} | Get an order line for a customer return
*CustomerReturnsApi* | [**getCustomerReturnLines**](docs/Api/CustomerReturnsApi.md#getcustomerreturnlines) | **GET** /orders/customerReturns/{orderId}/orderLines | Get a list of order lines for a customer returns
*CustomerReturnsApi* | [**getCustomerReturnOrderStatus**](docs/Api/CustomerReturnsApi.md#getcustomerreturnorderstatus) | **GET** /orders/customerReturns/{orderId}/status | Get the status of a customer return
*CustomerReturnsApi* | [**getCustomerReturns**](docs/Api/CustomerReturnsApi.md#getcustomerreturns) | **GET** /orders/customerReturns | Get a list of customer returns
*CustomerReturnsApi* | [**postCustomerReturnOrderStatus**](docs/Api/CustomerReturnsApi.md#postcustomerreturnorderstatus) | **POST** /orders/customerReturns/{orderId}/status | Updates the status of a customer return
*CustomerReturnsApi* | [**postCustomerReturns**](docs/Api/CustomerReturnsApi.md#postcustomerreturns) | **POST** /orders/customerReturns | Create or update a customer return
*CustomerReturnsApi* | [**postCustomerReturnsCancellation**](docs/Api/CustomerReturnsApi.md#postcustomerreturnscancellation) | **POST** /orders/customerReturns/{orderId}/cancellations | Cancel all or part of an customer return
*CustomerReturnsApi* | [**updateCustomerReturnLine**](docs/Api/CustomerReturnsApi.md#updatecustomerreturnline) | **POST** /orders/customerReturns/{orderId}/orderLines/{orderLineId} | Update an order line for a customer return
*FacilitiesApi* | [**getFacilities**](docs/Api/FacilitiesApi.md#getfacilities) | **GET** /facilities | Get a list of facilities
*FacilitiesApi* | [**getFacility**](docs/Api/FacilitiesApi.md#getfacility) | **GET** /facilities/{facilityId} | Get a facility
*FacilitiesApi* | [**postFacility**](docs/Api/FacilitiesApi.md#postfacility) | **POST** /facilities | Create or update a facility
*InboundTransferOrdersApi* | [**getInboundTransferOrder**](docs/Api/InboundTransferOrdersApi.md#getinboundtransferorder) | **GET** /orders/inboundTransferOrders/{orderId} | Get an inbound transfer order
*InboundTransferOrdersApi* | [**getInboundTransferOrderLine**](docs/Api/InboundTransferOrdersApi.md#getinboundtransferorderline) | **GET** /orders/inboundTransferOrders/{orderId}/orderLines/{orderLineId} | Get an order line for an inbound transfer order
*InboundTransferOrdersApi* | [**getInboundTransferOrderLines**](docs/Api/InboundTransferOrdersApi.md#getinboundtransferorderlines) | **GET** /orders/inboundTransferOrders/{orderId}/orderLines | Get a list of order lines for an inbound transfer order
*InboundTransferOrdersApi* | [**getInboundTransferOrderStatus**](docs/Api/InboundTransferOrdersApi.md#getinboundtransferorderstatus) | **GET** /orders/inboundTransferOrders/{orderId}/status | Get the status of an inbound transfer order
*InboundTransferOrdersApi* | [**getInboundTransferOrders**](docs/Api/InboundTransferOrdersApi.md#getinboundtransferorders) | **GET** /orders/inboundTransferOrders | Get a list of inbound transfer orders
*InboundTransferOrdersApi* | [**postInboundTransferOrderCancellation**](docs/Api/InboundTransferOrdersApi.md#postinboundtransferordercancellation) | **POST** /orders/inboundTransferOrders/{orderId}/cancellations | Cancel all or part of an inbound transfer order
*InboundTransferOrdersApi* | [**postInboundTransferOrderStatus**](docs/Api/InboundTransferOrdersApi.md#postinboundtransferorderstatus) | **POST** /orders/inboundTransferOrders/{orderId}/status | Update the status of an inbound transfer order
*InboundTransferOrdersApi* | [**postInboundTransferOrders**](docs/Api/InboundTransferOrdersApi.md#postinboundtransferorders) | **POST** /orders/inboundTransferOrders | Create or update an inbound transfer order
*InboundTransferOrdersApi* | [**updateInboundTransferOrderLine**](docs/Api/InboundTransferOrdersApi.md#updateinboundtransferorderline) | **POST** /orders/inboundTransferOrders/{orderId}/orderLines/{orderLineId} | Update an order line for an inbound transfer order
*InventoryApi* | [**getInventoryAdjustments**](docs/Api/InventoryApi.md#getinventoryadjustments) | **GET** /inventory/inventoryAdjustments | Get a list of inventory adjustments
*InventoryApi* | [**updateDiscreteInventory**](docs/Api/InventoryApi.md#updatediscreteinventory) | **POST** /inventory/facilities/{facilityId}/locations/{locationId}/updates | Update inventory attributes
*ItemsApi* | [**deleteItemUPC**](docs/Api/ItemsApi.md#deleteitemupc) | **DELETE** /items/{itemId}/upcs/{upcId} | Delete an item UPC
*ItemsApi* | [**deletePackUPC**](docs/Api/ItemsApi.md#deletepackupc) | **DELETE** /items/{itemId}/packs/{packId}/upcs/{upcId} | Delete a pack UPC
*ItemsApi* | [**getHSCodes**](docs/Api/ItemsApi.md#gethscodes) | **GET** /items/{itemId}/hsCodes | Get a list of HS codes for an item
*ItemsApi* | [**getItem**](docs/Api/ItemsApi.md#getitem) | **GET** /items/{itemId} | Get an item
*ItemsApi* | [**getItemPack**](docs/Api/ItemsApi.md#getitempack) | **GET** /items/{itemId}/packs/{packId} | Get a pack for an item
*ItemsApi* | [**getItemUPCs**](docs/Api/ItemsApi.md#getitemupcs) | **GET** /items/{itemId}/upcs | Get a list of item UPCs for an item
*ItemsApi* | [**getItemVendors**](docs/Api/ItemsApi.md#getitemvendors) | **GET** /items/{itemId}/itemVendors | Get a list of item vendors for an item
*ItemsApi* | [**getItems**](docs/Api/ItemsApi.md#getitems) | **GET** /items | Get a list of items
*ItemsApi* | [**getPackUPC**](docs/Api/ItemsApi.md#getpackupc) | **GET** /items/{itemId}/packs/{packId}/upcs | Get a list of pack UPCs for an item
*ItemsApi* | [**postItem**](docs/Api/ItemsApi.md#postitem) | **POST** /items | Create or update an item
*KitsApi* | [**deleteKitDetail**](docs/Api/KitsApi.md#deletekitdetail) | **DELETE** /kitHeaders/{kitHeaderId}/kitDetails/{kitDetailId} | Delete a kit detail
*KitsApi* | [**getKitDetail**](docs/Api/KitsApi.md#getkitdetail) | **GET** /kitHeaders/{kitHeaderId}/kitDetails/{kitDetailId} | Get a kit detail
*KitsApi* | [**getKitDetails**](docs/Api/KitsApi.md#getkitdetails) | **GET** /kitHeaders/{kitHeaderId}/kitDetails | Get a list of kit details
*KitsApi* | [**getKitHeader**](docs/Api/KitsApi.md#getkitheader) | **GET** /kitHeaders/{kitHeaderId} | Get a kit header
*KitsApi* | [**getKitHeaders**](docs/Api/KitsApi.md#getkitheaders) | **GET** /kitHeaders | Get a list of kit headers
*KitsApi* | [**postKitHeaders**](docs/Api/KitsApi.md#postkitheaders) | **POST** /kitHeaders | Create or update a kit header
*LocationsApi* | [**deleteStorageDetailFromALocation**](docs/Api/LocationsApi.md#deletestoragedetailfromalocation) | **DELETE** /locations/{locationId}/storageDetails/{storageDetailId} | Delete a storage detail for a location
*LocationsApi* | [**getLocationById**](docs/Api/LocationsApi.md#getlocationbyid) | **GET** /locations/{locationId} | Get a location
*LocationsApi* | [**getLocations**](docs/Api/LocationsApi.md#getlocations) | **GET** /locations | Get a list of locations
*LocationsApi* | [**getStorageDetailById**](docs/Api/LocationsApi.md#getstoragedetailbyid) | **GET** /locations/{locationId}/storageDetails/{storageDetailId} | Get a storage detail for a location
*LocationsApi* | [**getStorageDetailsForALocation**](docs/Api/LocationsApi.md#getstoragedetailsforalocation) | **GET** /locations/{locationId}/storageDetails | Get a list of storage details for a location
*LocationsApi* | [**getZonesWithinLocation**](docs/Api/LocationsApi.md#getzoneswithinlocation) | **GET** /locations/{locationId}/zones | Get a list of zones for a location
*LocationsApi* | [**postLocations**](docs/Api/LocationsApi.md#postlocations) | **POST** /locations | Create or update a location
*OutboundShipmentsApi* | [**getOutboundShipment**](docs/Api/OutboundShipmentsApi.md#getoutboundshipment) | **GET** /shipments/outboundShipments/{shipmentId} | Get an outbound shipment
*OutboundShipmentsApi* | [**getOutboundShipmentLine**](docs/Api/OutboundShipmentsApi.md#getoutboundshipmentline) | **GET** /shipments/outboundShipments/{shipmentId}/shipmentLines/{shipmentLineId} | Get a shipment line for an outbound shipment
*OutboundShipmentsApi* | [**getOutboundShipmentLines**](docs/Api/OutboundShipmentsApi.md#getoutboundshipmentlines) | **GET** /shipments/outboundShipments/{shipmentId}/shipmentLines | Get a list of shipment lines for an outbound shipment
*OutboundShipmentsApi* | [**getOutboundShipments**](docs/Api/OutboundShipmentsApi.md#getoutboundshipments) | **GET** /shipments/outboundShipments | Get a list of outbound shipments
*OutboundTransferOrdersApi* | [**getOutboundTransferOrder**](docs/Api/OutboundTransferOrdersApi.md#getoutboundtransferorder) | **GET** /orders/outboundTransferOrders/{orderId} | Get an outbound transfer order
*OutboundTransferOrdersApi* | [**getOutboundTransferOrderLine**](docs/Api/OutboundTransferOrdersApi.md#getoutboundtransferorderline) | **GET** /orders/outboundTransferOrders/{orderId}/orderLines/{orderLineId} | Get an order line for an outbound transfer order
*OutboundTransferOrdersApi* | [**getOutboundTransferOrderLines**](docs/Api/OutboundTransferOrdersApi.md#getoutboundtransferorderlines) | **GET** /orders/outboundTransferOrders/{orderId}/orderLines | Get a list of order lines for an outbound transfer order
*OutboundTransferOrdersApi* | [**getOutboundTransferOrderStatus**](docs/Api/OutboundTransferOrdersApi.md#getoutboundtransferorderstatus) | **GET** /orders/outboundTransferOrders/{orderId}/status | Get the status of an outbound transfer order
*OutboundTransferOrdersApi* | [**getOutboundTransferOrders**](docs/Api/OutboundTransferOrdersApi.md#getoutboundtransferorders) | **GET** /orders/outboundTransferOrders | Get a list of outbound transfer orders
*OutboundTransferOrdersApi* | [**postOutboundTransferOrderCancellation**](docs/Api/OutboundTransferOrdersApi.md#postoutboundtransferordercancellation) | **POST** /orders/outboundTransferOrders/{orderId}/cancellations | Cancel all or part of an outbound transfer order
*OutboundTransferOrdersApi* | [**postOutboundTransferOrderStatus**](docs/Api/OutboundTransferOrdersApi.md#postoutboundtransferorderstatus) | **POST** /orders/outboundTransferOrders/{orderId}/status | Update the status of an outbound transfer order
*OutboundTransferOrdersApi* | [**postOutboundTransferOrders**](docs/Api/OutboundTransferOrdersApi.md#postoutboundtransferorders) | **POST** /orders/outboundTransferOrders | Create or update an outbound transfer order
*OutboundTransferOrdersApi* | [**updateOutboundTransferOrderLine**](docs/Api/OutboundTransferOrdersApi.md#updateoutboundtransferorderline) | **POST** /orders/outboundTransferOrders/{orderId}/orderLines/{orderLineId} | Update an order line for a outbound transfer order
*PurchaseOrdersApi* | [**getPurchaseOrder**](docs/Api/PurchaseOrdersApi.md#getpurchaseorder) | **GET** /orders/purchaseOrders/{orderId} | Get a purchase order
*PurchaseOrdersApi* | [**getPurchaseOrderLine**](docs/Api/PurchaseOrdersApi.md#getpurchaseorderline) | **GET** /orders/purchaseOrders/{orderId}/orderLines/{orderLineId} | Get an order line for a purchase order
*PurchaseOrdersApi* | [**getPurchaseOrderLines**](docs/Api/PurchaseOrdersApi.md#getpurchaseorderlines) | **GET** /orders/purchaseOrders/{orderId}/orderLines | Get a list of order lines for a purchase order
*PurchaseOrdersApi* | [**getPurchaseOrderOrderStatus**](docs/Api/PurchaseOrdersApi.md#getpurchaseorderorderstatus) | **GET** /orders/purchaseOrders/{orderId}/status | Get the status of a purchase order
*PurchaseOrdersApi* | [**getPurchaseOrders**](docs/Api/PurchaseOrdersApi.md#getpurchaseorders) | **GET** /orders/purchaseOrders | Get a list of purchase orders
*PurchaseOrdersApi* | [**postPurchaseOrder**](docs/Api/PurchaseOrdersApi.md#postpurchaseorder) | **POST** /orders/purchaseOrders | Create or update a purchase order
*PurchaseOrdersApi* | [**postPurchaseOrderCancellation**](docs/Api/PurchaseOrdersApi.md#postpurchaseordercancellation) | **POST** /orders/purchaseOrders/{orderId}/cancellations | Cancel all or part of a purchase order
*PurchaseOrdersApi* | [**postPurchaseOrderOrderStatus**](docs/Api/PurchaseOrdersApi.md#postpurchaseorderorderstatus) | **POST** /orders/purchaseOrders/{orderId}/status | Update the status of a purchase order
*PurchaseOrdersApi* | [**updatePurchaseOrderLine**](docs/Api/PurchaseOrdersApi.md#updatepurchaseorderline) | **POST** /orders/purchaseOrders/{orderId}/orderLines/{orderLineId} | Update an order line for a purchase order
*ReceiptsApi* | [**getReceipts**](docs/Api/ReceiptsApi.md#getreceipts) | **GET** /receipts | Get a list of receipts
*SalesOrdersApi* | [**getSalesOrder**](docs/Api/SalesOrdersApi.md#getsalesorder) | **GET** /orders/salesOrders/{orderId} | Get a sales order
*SalesOrdersApi* | [**getSalesOrderLine**](docs/Api/SalesOrdersApi.md#getsalesorderline) | **GET** /orders/salesOrders/{orderId}/orderLines/{orderLineId} | Get an order line for a sales order
*SalesOrdersApi* | [**getSalesOrderLines**](docs/Api/SalesOrdersApi.md#getsalesorderlines) | **GET** /orders/salesOrders/{orderId}/orderLines | Get a list of order lines for a sales order
*SalesOrdersApi* | [**getSalesOrderStatus**](docs/Api/SalesOrdersApi.md#getsalesorderstatus) | **GET** /orders/salesOrders/{orderId}/status | Get the status of a sales order
*SalesOrdersApi* | [**getSalesOrders**](docs/Api/SalesOrdersApi.md#getsalesorders) | **GET** /orders/salesOrders | Get a list of sales orders
*SalesOrdersApi* | [**postSalesOrderCancellation**](docs/Api/SalesOrdersApi.md#postsalesordercancellation) | **POST** /orders/salesOrders/{orderId}/cancellations | Cancel all or part of a sales order
*SalesOrdersApi* | [**postSalesOrderStatus**](docs/Api/SalesOrdersApi.md#postsalesorderstatus) | **POST** /orders/salesOrders/{orderId}/status | Update the status of a sales order
*SalesOrdersApi* | [**postSalesOrders**](docs/Api/SalesOrdersApi.md#postsalesorders) | **POST** /orders/salesOrders | Create or update a sales order
*SalesOrdersApi* | [**updateSalesOrderLine**](docs/Api/SalesOrdersApi.md#updatesalesorderline) | **POST** /orders/salesOrders/{orderId}/orderLines/{orderLineId} | Update an order line for a sales order
*TradingPartnersApi* | [**deleteTradingPartnerParameter**](docs/Api/TradingPartnersApi.md#deletetradingpartnerparameter) | **DELETE** /tradingPartners/{tradingPartnerId}/parameters/{parameterId} | Delete a trading partner parameter
*TradingPartnersApi* | [**getTradingPartner**](docs/Api/TradingPartnersApi.md#gettradingpartner) | **GET** /tradingPartners/{tradingPartnerId} | Get a trading partner
*TradingPartnersApi* | [**getTradingPartnerParameters**](docs/Api/TradingPartnersApi.md#gettradingpartnerparameters) | **GET** /tradingPartners/{tradingPartnerId}/parameters | Get a list of trading partner parameters
*TradingPartnersApi* | [**getTradingPartnerSites**](docs/Api/TradingPartnersApi.md#gettradingpartnersites) | **GET** /tradingPartners/{tradingPartnerId}/sites | Get a list of trading partner sites
*TradingPartnersApi* | [**getTradingPartners**](docs/Api/TradingPartnersApi.md#gettradingpartners) | **GET** /tradingPartners | Get a list of trading partners
*TradingPartnersApi* | [**postTradingPartner**](docs/Api/TradingPartnersApi.md#posttradingpartner) | **POST** /tradingPartners | Create or update a trading partner
*TripsApi* | [**getTripById**](docs/Api/TripsApi.md#gettripbyid) | **GET** /trips/{tripId} | Get a trip
*TripsApi* | [**getTrips**](docs/Api/TripsApi.md#gettrips) | **GET** /trips | Get a list of trips
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /users/{userId} | Get a user
*UsersApi* | [**getUsers**](docs/Api/UsersApi.md#getusers) | **GET** /users | Get a list of users
*VendorReturnsApi* | [**getVendorReturn**](docs/Api/VendorReturnsApi.md#getvendorreturn) | **GET** /orders/vendorReturns/{orderId} | Get a vendor return
*VendorReturnsApi* | [**getVendorReturnLine**](docs/Api/VendorReturnsApi.md#getvendorreturnline) | **GET** /orders/vendorReturns/{orderId}/orderLines/{orderLineId} | Get an order line for a vendor return
*VendorReturnsApi* | [**getVendorReturnLines**](docs/Api/VendorReturnsApi.md#getvendorreturnlines) | **GET** /orders/vendorReturns/{orderId}/orderLines | Get a list of order lines for a vendor return
*VendorReturnsApi* | [**getVendorReturnStatus**](docs/Api/VendorReturnsApi.md#getvendorreturnstatus) | **GET** /orders/vendorReturns/{orderId}/status | Get the status of a vendor return
*VendorReturnsApi* | [**getVendorReturns**](docs/Api/VendorReturnsApi.md#getvendorreturns) | **GET** /orders/vendorReturns | Get a list of vendor returns
*VendorReturnsApi* | [**postVendorReturnStatus**](docs/Api/VendorReturnsApi.md#postvendorreturnstatus) | **POST** /orders/vendorReturns/{orderId}/status | Update the status of a vendor return
*VendorReturnsApi* | [**postVendorReturns**](docs/Api/VendorReturnsApi.md#postvendorreturns) | **POST** /orders/vendorReturns | Create or update a vendor return
*VendorReturnsApi* | [**postVendorReturnsCancellation**](docs/Api/VendorReturnsApi.md#postvendorreturnscancellation) | **POST** /orders/vendorReturns/{orderId}/cancellations | Cancel all or part of a vendor return
*VendorReturnsApi* | [**updateVendorReturnLine**](docs/Api/VendorReturnsApi.md#updatevendorreturnline) | **POST** /orders/vendorReturns/{orderId}/orderLines/{orderLineId} | Update an order line for a vendor return
*ZonesApi* | [**deleteLocationWithinAZone**](docs/Api/ZonesApi.md#deletelocationwithinazone) | **DELETE** /zones/{zoneId}/locations/{locationId} | Remove a location from a zone
*ZonesApi* | [**getLocationsByZone**](docs/Api/ZonesApi.md#getlocationsbyzone) | **GET** /zones/{zoneId}/locations | Get a list of locations for a zone
*ZonesApi* | [**getZoneById**](docs/Api/ZonesApi.md#getzonebyid) | **GET** /zones/{zoneId} | Get a zone
*ZonesApi* | [**getZones**](docs/Api/ZonesApi.md#getzones) | **GET** /zones | Get a list of zones
*ZonesApi* | [**postZones**](docs/Api/ZonesApi.md#postzones) | **POST** /zones | Create or update a zone

## Models

- [AddressContactDTO](docs/Model/AddressContactDTO.md)
- [AddressDTO](docs/Model/AddressDTO.md)
- [AsyncBulkRequestDTO](docs/Model/AsyncBulkRequestDTO.md)
- [AsyncDetailDTO](docs/Model/AsyncDetailDTO.md)
- [AsyncRequestIdDTO](docs/Model/AsyncRequestIdDTO.md)
- [AsyncRequestIdDTORequest](docs/Model/AsyncRequestIdDTORequest.md)
- [AsyncResponseDTO](docs/Model/AsyncResponseDTO.md)
- [BadRequestAPIResponse](docs/Model/BadRequestAPIResponse.md)
- [BaseOrderHeaderDTO](docs/Model/BaseOrderHeaderDTO.md)
- [BaseOrderHeaderDTOWeight](docs/Model/BaseOrderHeaderDTOWeight.md)
- [BaseOrderLineDTO](docs/Model/BaseOrderLineDTO.md)
- [BaseOrderLineDTOWeight](docs/Model/BaseOrderLineDTOWeight.md)
- [BaseShipmentDTO](docs/Model/BaseShipmentDTO.md)
- [BaseShipmentDTOChargeableWeight](docs/Model/BaseShipmentDTOChargeableWeight.md)
- [BaseShipmentDTOOrderHeaders](docs/Model/BaseShipmentDTOOrderHeaders.md)
- [BaseShipmentDTOReturns](docs/Model/BaseShipmentDTOReturns.md)
- [BaseShipmentDTOShipmentDates](docs/Model/BaseShipmentDTOShipmentDates.md)
- [BaseShipmentDTOShippingCosts](docs/Model/BaseShipmentDTOShippingCosts.md)
- [BaseShipmentDTOTotalWeight](docs/Model/BaseShipmentDTOTotalWeight.md)
- [BaseShipmentLineDTO](docs/Model/BaseShipmentLineDTO.md)
- [BaseShipmentLineDTOChargeableWeight](docs/Model/BaseShipmentLineDTOChargeableWeight.md)
- [BaseShipmentLineDTOLineSerialNumbersInner](docs/Model/BaseShipmentLineDTOLineSerialNumbersInner.md)
- [BaseShipmentLineDTOOrderLineDetails](docs/Model/BaseShipmentLineDTOOrderLineDetails.md)
- [BaseShipmentLineDTOOrderLineDetailsPackDetails](docs/Model/BaseShipmentLineDTOOrderLineDetailsPackDetails.md)
- [BaseShipmentLineDTOPackDetails](docs/Model/BaseShipmentLineDTOPackDetails.md)
- [BaseShipmentLineDTOTotalWeight](docs/Model/BaseShipmentLineDTOTotalWeight.md)
- [BillableTransactionCollectionDTO](docs/Model/BillableTransactionCollectionDTO.md)
- [BillableTransactionDTO](docs/Model/BillableTransactionDTO.md)
- [BillableTransactionDTOItemAttributes](docs/Model/BillableTransactionDTOItemAttributes.md)
- [CarrierSpecialServiceDTO](docs/Model/CarrierSpecialServiceDTO.md)
- [ChannelDTO](docs/Model/ChannelDTO.md)
- [ChannelDTOSchedulerTask](docs/Model/ChannelDTOSchedulerTask.md)
- [ChannelListingDTO](docs/Model/ChannelListingDTO.md)
- [CollectionResourceMeta](docs/Model/CollectionResourceMeta.md)
- [CompanyDTO](docs/Model/CompanyDTO.md)
- [CompanyDTOAddress](docs/Model/CompanyDTOAddress.md)
- [CompanyDTOContact](docs/Model/CompanyDTOContact.md)
- [ComponentDTO](docs/Model/ComponentDTO.md)
- [ContainerCollectionDTO](docs/Model/ContainerCollectionDTO.md)
- [ContainerDTO](docs/Model/ContainerDTO.md)
- [CustomFieldDTO](docs/Model/CustomFieldDTO.md)
- [CustomerOrderChargeAllowanceDTO](docs/Model/CustomerOrderChargeAllowanceDTO.md)
- [CustomerOrderDTO](docs/Model/CustomerOrderDTO.md)
- [CustomerOrderDTOBillToContact](docs/Model/CustomerOrderDTOBillToContact.md)
- [CustomerOrderDTOFreightBillToContact](docs/Model/CustomerOrderDTOFreightBillToContact.md)
- [CustomerOrderDTORemitToContact](docs/Model/CustomerOrderDTORemitToContact.md)
- [CustomerOrderDTOReturnToContact](docs/Model/CustomerOrderDTOReturnToContact.md)
- [CustomerOrderDTOSalesRepContact](docs/Model/CustomerOrderDTOSalesRepContact.md)
- [CustomerOrderDTOSellerContact](docs/Model/CustomerOrderDTOSellerContact.md)
- [CustomerOrderDTOShipFromContact](docs/Model/CustomerOrderDTOShipFromContact.md)
- [CustomerOrderDTOShipToContact](docs/Model/CustomerOrderDTOShipToContact.md)
- [CustomerOrderDTOWeight](docs/Model/CustomerOrderDTOWeight.md)
- [CustomerOrderDateDTO](docs/Model/CustomerOrderDateDTO.md)
- [CustomerOrderDetailDTO](docs/Model/CustomerOrderDetailDTO.md)
- [CustomerOrderLineAllocationDTO](docs/Model/CustomerOrderLineAllocationDTO.md)
- [CustomerOrderLineCollectionDTO](docs/Model/CustomerOrderLineCollectionDTO.md)
- [CustomerOrderLineDTO](docs/Model/CustomerOrderLineDTO.md)
- [CustomerOrderLineDTOBillToContact](docs/Model/CustomerOrderLineDTOBillToContact.md)
- [CustomerOrderLineDTOFreightBillToContact](docs/Model/CustomerOrderLineDTOFreightBillToContact.md)
- [CustomerOrderLineDTORemitToContact](docs/Model/CustomerOrderLineDTORemitToContact.md)
- [CustomerOrderLineDTOSellerContact](docs/Model/CustomerOrderLineDTOSellerContact.md)
- [CustomerOrderLineDTOShipFromContact](docs/Model/CustomerOrderLineDTOShipFromContact.md)
- [CustomerOrderLineDTOShipToContact](docs/Model/CustomerOrderLineDTOShipToContact.md)
- [CustomerOrderLineDTOWeight](docs/Model/CustomerOrderLineDTOWeight.md)
- [CustomerOrderLineSiteDTO](docs/Model/CustomerOrderLineSiteDTO.md)
- [CustomerOrderNoteDTO](docs/Model/CustomerOrderNoteDTO.md)
- [CustomerOrderNoticeDTO](docs/Model/CustomerOrderNoticeDTO.md)
- [CustomerOrderPaymentDTO](docs/Model/CustomerOrderPaymentDTO.md)
- [CustomerOrderPaymentTermDTO](docs/Model/CustomerOrderPaymentTermDTO.md)
- [CustomerOrderReferenceDTO](docs/Model/CustomerOrderReferenceDTO.md)
- [CustomerOrderRefundDTO](docs/Model/CustomerOrderRefundDTO.md)
- [CustomerOrderRequestDTO](docs/Model/CustomerOrderRequestDTO.md)
- [CustomerOrderRequestDTOCustomerOrder](docs/Model/CustomerOrderRequestDTOCustomerOrder.md)
- [CustomerOrderResponseCollectionDTO](docs/Model/CustomerOrderResponseCollectionDTO.md)
- [CustomerOrderResponseDTO](docs/Model/CustomerOrderResponseDTO.md)
- [CustomerOrderResponseDTOCustomerOrder](docs/Model/CustomerOrderResponseDTOCustomerOrder.md)
- [CustomerOrderRetailActivityDTO](docs/Model/CustomerOrderRetailActivityDTO.md)
- [CustomerOrderTagDTO](docs/Model/CustomerOrderTagDTO.md)
- [CustomerOrderTaxDTO](docs/Model/CustomerOrderTaxDTO.md)
- [CustomerReturnCollectionDTO](docs/Model/CustomerReturnCollectionDTO.md)
- [CustomerReturnDTO](docs/Model/CustomerReturnDTO.md)
- [CustomerReturnLineCollectionDTO](docs/Model/CustomerReturnLineCollectionDTO.md)
- [CustomerReturnLineDTO](docs/Model/CustomerReturnLineDTO.md)
- [CustomerReturnLineStatusDTOPropertiesOrderLineStatus](docs/Model/CustomerReturnLineStatusDTOPropertiesOrderLineStatus.md)
- [CustomerReturnStatusDTO](docs/Model/CustomerReturnStatusDTO.md)
- [DateFormat](docs/Model/DateFormat.md)
- [Dimension](docs/Model/Dimension.md)
- [EntityRef](docs/Model/EntityRef.md)
- [ErrorMessage](docs/Model/ErrorMessage.md)
- [FacilityDTO](docs/Model/FacilityDTO.md)
- [FacilityDTOAddress](docs/Model/FacilityDTOAddress.md)
- [FacilityDTOContact](docs/Model/FacilityDTOContact.md)
- [ForbiddenAPIResponse](docs/Model/ForbiddenAPIResponse.md)
- [GetCompanies200Response](docs/Model/GetCompanies200Response.md)
- [GetFacilities200Response](docs/Model/GetFacilities200Response.md)
- [GetInboundTransferOrderLines200Response](docs/Model/GetInboundTransferOrderLines200Response.md)
- [GetInboundTransferOrders200Response](docs/Model/GetInboundTransferOrders200Response.md)
- [GetItemsDefaultResponse](docs/Model/GetItemsDefaultResponse.md)
- [GetOutboundTransferOrderLines200Response](docs/Model/GetOutboundTransferOrderLines200Response.md)
- [GetOutboundTransferOrders200Response](docs/Model/GetOutboundTransferOrders200Response.md)
- [HSCodeCollectionDTO](docs/Model/HSCodeCollectionDTO.md)
- [HSCodeDTO](docs/Model/HSCodeDTO.md)
- [InboundTransferOrderCollectionDTO](docs/Model/InboundTransferOrderCollectionDTO.md)
- [InboundTransferOrderDTO](docs/Model/InboundTransferOrderDTO.md)
- [InboundTransferOrderLineCollectionDTO](docs/Model/InboundTransferOrderLineCollectionDTO.md)
- [InboundTransferOrderLineDTO](docs/Model/InboundTransferOrderLineDTO.md)
- [InboundTransferOrderLineStatusDTOPropertiesOrderLineStatus](docs/Model/InboundTransferOrderLineStatusDTOPropertiesOrderLineStatus.md)
- [InboundTransferOrderStatusDTO](docs/Model/InboundTransferOrderStatusDTO.md)
- [InventoryAdjustmentCollectionDTO](docs/Model/InventoryAdjustmentCollectionDTO.md)
- [InventoryAdjustmentDTO](docs/Model/InventoryAdjustmentDTO.md)
- [InventoryUpdateDTO](docs/Model/InventoryUpdateDTO.md)
- [InventoryUpdateDTOExistingInventory](docs/Model/InventoryUpdateDTOExistingInventory.md)
- [InventoryUpdateDTOModifiedInventory](docs/Model/InventoryUpdateDTOModifiedInventory.md)
- [ItemCollectionDTO](docs/Model/ItemCollectionDTO.md)
- [ItemDTO](docs/Model/ItemDTO.md)
- [ItemDTOWeight](docs/Model/ItemDTOWeight.md)
- [ItemUPCCollectionDTO](docs/Model/ItemUPCCollectionDTO.md)
- [ItemUPCDTO](docs/Model/ItemUPCDTO.md)
- [ItemVendorCollectionDTO](docs/Model/ItemVendorCollectionDTO.md)
- [ItemVendorDTO](docs/Model/ItemVendorDTO.md)
- [KitDetailCollectionDTO](docs/Model/KitDetailCollectionDTO.md)
- [KitDetailDTO](docs/Model/KitDetailDTO.md)
- [KitHeaderCollectionDTO](docs/Model/KitHeaderCollectionDTO.md)
- [KitHeaderDTO](docs/Model/KitHeaderDTO.md)
- [Link](docs/Model/Link.md)
- [Locale](docs/Model/Locale.md)
- [LocationCollectionDTO](docs/Model/LocationCollectionDTO.md)
- [LocationDTO](docs/Model/LocationDTO.md)
- [Measurement](docs/Model/Measurement.md)
- [NotFoundAPIResponse](docs/Model/NotFoundAPIResponse.md)
- [NoteDTO](docs/Model/NoteDTO.md)
- [NullableEntityRef](docs/Model/NullableEntityRef.md)
- [OrderCancellationDTO](docs/Model/OrderCancellationDTO.md)
- [OrderCancellationDTOOrderLinesInner](docs/Model/OrderCancellationDTOOrderLinesInner.md)
- [OrderLineStatus](docs/Model/OrderLineStatus.md)
- [OrderStatus](docs/Model/OrderStatus.md)
- [OutboundShipmentCollectionDTO](docs/Model/OutboundShipmentCollectionDTO.md)
- [OutboundShipmentDTO](docs/Model/OutboundShipmentDTO.md)
- [OutboundShipmentLineCollectionDTO](docs/Model/OutboundShipmentLineCollectionDTO.md)
- [OutboundShipmentLineDTO](docs/Model/OutboundShipmentLineDTO.md)
- [OutboundTransferOrderCollectionDTO](docs/Model/OutboundTransferOrderCollectionDTO.md)
- [OutboundTransferOrderDTO](docs/Model/OutboundTransferOrderDTO.md)
- [OutboundTransferOrderDTOAllOfShipments](docs/Model/OutboundTransferOrderDTOAllOfShipments.md)
- [OutboundTransferOrderLineCollectionDTO](docs/Model/OutboundTransferOrderLineCollectionDTO.md)
- [OutboundTransferOrderLineDTO](docs/Model/OutboundTransferOrderLineDTO.md)
- [OutboundTransferOrderStatusDTO](docs/Model/OutboundTransferOrderStatusDTO.md)
- [OutboundTransferOrderStatusDTOPropertiesOrderStatus](docs/Model/OutboundTransferOrderStatusDTOPropertiesOrderStatus.md)
- [PackDTO](docs/Model/PackDTO.md)
- [PackDTOWeight](docs/Model/PackDTOWeight.md)
- [PackUPCCollectionDTO](docs/Model/PackUPCCollectionDTO.md)
- [PackUPCDTO](docs/Model/PackUPCDTO.md)
- [PaginatedEntityReference](docs/Model/PaginatedEntityReference.md)
- [PostReleaseStateDTO](docs/Model/PostReleaseStateDTO.md)
- [PropertiesOrderLineStatus](docs/Model/PropertiesOrderLineStatus.md)
- [PropertiesOrderStatus](docs/Model/PropertiesOrderStatus.md)
- [PurchaseOrderCollectionDTO](docs/Model/PurchaseOrderCollectionDTO.md)
- [PurchaseOrderDTO](docs/Model/PurchaseOrderDTO.md)
- [PurchaseOrderDTOAllOfShipments](docs/Model/PurchaseOrderDTOAllOfShipments.md)
- [PurchaseOrderLineCollectionDTO](docs/Model/PurchaseOrderLineCollectionDTO.md)
- [PurchaseOrderLineDTO](docs/Model/PurchaseOrderLineDTO.md)
- [PurchaseOrderStatusDTO](docs/Model/PurchaseOrderStatusDTO.md)
- [RateLimitAPIResponse](docs/Model/RateLimitAPIResponse.md)
- [ReceiptCollectionDTO](docs/Model/ReceiptCollectionDTO.md)
- [ReceiptDTO](docs/Model/ReceiptDTO.md)
- [SalesOrderCollectionDTO](docs/Model/SalesOrderCollectionDTO.md)
- [SalesOrderDTO](docs/Model/SalesOrderDTO.md)
- [SalesOrderDTOAllOfShipments](docs/Model/SalesOrderDTOAllOfShipments.md)
- [SalesOrderLineCollectionDTO](docs/Model/SalesOrderLineCollectionDTO.md)
- [SalesOrderLineDTO](docs/Model/SalesOrderLineDTO.md)
- [SalesOrderStatusDTO](docs/Model/SalesOrderStatusDTO.md)
- [SendASNDTO](docs/Model/SendASNDTO.md)
- [ShippedContainerCollectionDTO](docs/Model/ShippedContainerCollectionDTO.md)
- [ShippedContainerDTO](docs/Model/ShippedContainerDTO.md)
- [ShippedContainerDTOShippedContainerLinesInner](docs/Model/ShippedContainerDTOShippedContainerLinesInner.md)
- [ShippedContainerDTOWeight](docs/Model/ShippedContainerDTOWeight.md)
- [StorageCollectionDTO](docs/Model/StorageCollectionDTO.md)
- [StorageDTO](docs/Model/StorageDTO.md)
- [TimeZone](docs/Model/TimeZone.md)
- [TradingPartnerCollectionDTO](docs/Model/TradingPartnerCollectionDTO.md)
- [TradingPartnerDTO](docs/Model/TradingPartnerDTO.md)
- [TradingPartnerDTOAddress](docs/Model/TradingPartnerDTOAddress.md)
- [TradingPartnerDTOBillToAddress](docs/Model/TradingPartnerDTOBillToAddress.md)
- [TradingPartnerDTOBillToContact](docs/Model/TradingPartnerDTOBillToContact.md)
- [TradingPartnerDTOContact](docs/Model/TradingPartnerDTOContact.md)
- [TradingPartnerParameterCollectionDTO](docs/Model/TradingPartnerParameterCollectionDTO.md)
- [TradingPartnerParameterDTO](docs/Model/TradingPartnerParameterDTO.md)
- [TradingPartnerSiteCollectionDTO](docs/Model/TradingPartnerSiteCollectionDTO.md)
- [TradingPartnerSiteDTO](docs/Model/TradingPartnerSiteDTO.md)
- [TradingPartnerSiteDTOAddress](docs/Model/TradingPartnerSiteDTOAddress.md)
- [TripCollectionDTO](docs/Model/TripCollectionDTO.md)
- [TripDTO](docs/Model/TripDTO.md)
- [UnauthorizedAPIResponse](docs/Model/UnauthorizedAPIResponse.md)
- [UserCollectionDTO](docs/Model/UserCollectionDTO.md)
- [UserDTO](docs/Model/UserDTO.md)
- [VendorReturnCollectionDTO](docs/Model/VendorReturnCollectionDTO.md)
- [VendorReturnDTO](docs/Model/VendorReturnDTO.md)
- [VendorReturnDTOAllOfShipments](docs/Model/VendorReturnDTOAllOfShipments.md)
- [VendorReturnLineCollectionDTO](docs/Model/VendorReturnLineCollectionDTO.md)
- [VendorReturnLineDTO](docs/Model/VendorReturnLineDTO.md)
- [VendorReturnStatusDTO](docs/Model/VendorReturnStatusDTO.md)
- [WeightUOM](docs/Model/WeightUOM.md)
- [ZoneCollectionDTO](docs/Model/ZoneCollectionDTO.md)
- [ZoneDTO](docs/Model/ZoneDTO.md)

## Authorization

Authentication schemes defined for the API:
### oauth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://developer.deposco.com/applications/install?client_id={{client_id}}`
- **Scopes**: 
    - **items/read**: Read items
    - **items/write**: Modify items
    - **kits/read**: Read kits
    - **kits/write**: Modify kits
    - **tradingPartners/read**: Read trading partners
    - **tradingPartners/write**: Modify trading partners
    - **companies/read**: Read companies
    - **companies/write**: Modify companies
    - **facilities/read**: Read facilities
    - **facilities/write**: Modify facilities
    - **zones/read**: Read zones
    - **zones/write**: Modify zones
    - **locations/read**: Read locations
    - **locations/write**: Modify locations
    - **users/read**: Read users
    - **users/write**: Modify users
    - **salesOrders/read**: Read sales orders
    - **salesOrders/write**: Modify sales orders
    - **purchaseOrders/read**: Read purchase orders
    - **purchaseOrders/write**: Modify purchase orders
    - **outboundTransferOrders/read**: Read outbound transfer orders
    - **outboundTransferOrders/write**: Modify outbound transfer orders
    - **inboundTransferOrders/read**: Read inbound transfer orders
    - **inboundTransferOrders/write**: Modify inbound transfer orders
    - **customerReturns/read**: Read customer returns
    - **customerReturns/write**: Modify customer returns
    - **vendorReturns/read**: Read vendor returns
    - **vendorReturns/write**: Modify vendor returns
    - **customerOrders/read**: Read customer orders
    - **customerOrders/write**: Modify customer orders
    - **containers/read**: Read containers
    - **containers/write**: Modify containers
    - **trips/read**: Read trips
    - **trips/write**: Modify trips
    - **outboundShipments/read**: Read outbound shipments
    - **outboundShipments/write**: Modify outbound shipments
    - **receipts/read**: Read receipts
    - **receipts/write**: Modify receipts
    - **inventory/write**: Modify inventory
    - **inventoryAdjustments/read**: Read inventory adjustments
    - **itemDeliveryPromise/write**: Request Delivery Promise per item
    - **checkoutDeliveryPromise/write**: Request Delivery Promise per shopping cart

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.2519`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
