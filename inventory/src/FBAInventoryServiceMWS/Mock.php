<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     FBAInventoryServiceMWS
 *  @copyright   Copyright 2009 Amazon.com, Inc. All Rights Reserved.
 *  @link        http://mws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2010-10-01
 */
/******************************************************************************* 
 * 
 *  FBA Inventory Service MWS PHP5 Library
 *  Generated: Fri Oct 22 09:52:21 UTC 2010
 * 
 */

/**
 *  @see FBAInventoryServiceMWS_Interface
 */

/**
 * The inventory service allows sellers to stay up to date on the
 * status of inventory in Amazon's fulfillment centers.
 * Check Inventory Status: Sellers can discover when inventory
 * items change status and get the current availability status to
 * keep product listing information up to date
 * 
 */
class  FBAInventoryServiceMWS_Mock implements FBAInventoryServiceMWS_Interface
{
    // Public API ------------------------------------------------------------//

            
    /**
     * List Inventory Supply By Next Token 
     * Continues pagination over a resultset of inventory data for inventory
     * items.
     * 
     * This operation is used in conjunction with ListUpdatedInventorySupply.
     * Please refer to documentation for that operation for further details.
     *   
     * @param mixed $request array of parameters for FBAInventoryServiceMWS_Model_ListInventorySupplyByNextToken request or FBAInventoryServiceMWS_Model_ListInventorySupplyByNextToken object itself
     * @see FBAInventoryServiceMWS_Model_ListInventorySupplyByNextToken
     * @return FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenResponse FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenResponse
     *
     * @throws FBAInventoryServiceMWS_Exception
     */
    public function listInventorySupplyByNextToken($request) 
    {
        return FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenResponse::fromXML($this->_invoke('ListInventorySupplyByNextToken'));
    }


            
    /**
     * List Inventory Supply 
     * Get information about the supply of seller-owned inventory in
     * Amazon's fulfillment network. "Supply" is inventory that is available
     * for fulfilling (a.k.a. Multi-Channel Fulfillment) orders. In general
     * this includes all sellable inventory that has been received by Amazon,
     * that is not reserved for existing orders or for internal FC processes,
     * and also inventory expected to be received from inbound shipments.
     * This operation provides 2 typical usages by setting different
     * ListInventorySupplyRequest value:
     * 
     * 1. Set value to SellerSkus and not set value to QueryStartDateTime,
     * this operation will return all sellable inventory that has been received
     * by Amazon's fulfillment network for these SellerSkus.
     * 2. Not set value to SellerSkus and set value to QueryStartDateTime,
     * This operation will return information about the supply of all seller-owned
     * inventory in Amazon's fulfillment network, for inventory items that may have had
     * recent changes in inventory levels. It provides the most efficient mechanism
     * for clients to maintain local copies of inventory supply data.
     * Only 1 of these 2 parameters (SellerSkus and QueryStartDateTime) can be set value for 1 request.
     * If both with values or neither with values, an exception will be thrown.
     * This operation is used with ListInventorySupplyByNextToken
     * to paginate over the resultset. Begin pagination by invoking the
     * ListInventorySupply operation, and retrieve the first set of
     * results. If more results are available,continuing iteratively requesting further
     * pages results by invoking the ListInventorySupplyByNextToken operation (each time
     * passing in the NextToken value from the previous result), until the returned NextToken
     * is null, indicating no further results are available.
     *   
     * @param mixed $request array of parameters for FBAInventoryServiceMWS_Model_ListInventorySupply request or FBAInventoryServiceMWS_Model_ListInventorySupply object itself
     * @see FBAInventoryServiceMWS_Model_ListInventorySupply
     * @return FBAInventoryServiceMWS_Model_ListInventorySupplyResponse FBAInventoryServiceMWS_Model_ListInventorySupplyResponse
     *
     * @throws FBAInventoryServiceMWS_Exception
     */
    public function listInventorySupply($request) 
    {
        return FBAInventoryServiceMWS_Model_ListInventorySupplyResponse::fromXML($this->_invoke('ListInventorySupply'));
    }


            
    /**
     * Get Service Status 
     * Gets the status of the service.
     * Status is one of GREEN, RED representing:
     * GREEN: This API section of the service is operating normally.
     * RED: The service is disrupted.
     *   
     * @param mixed $request array of parameters for FBAInventoryServiceMWS_Model_GetServiceStatus request or FBAInventoryServiceMWS_Model_GetServiceStatus object itself
     * @see FBAInventoryServiceMWS_Model_GetServiceStatus
     * @return FBAInventoryServiceMWS_Model_GetServiceStatusResponse FBAInventoryServiceMWS_Model_GetServiceStatusResponse
     *
     * @throws FBAInventoryServiceMWS_Exception
     */
    public function getServiceStatus($request) 
    {
        return FBAInventoryServiceMWS_Model_GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents('FBAInventoryServiceMWS/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}