<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2017  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================


/**
 * @namespace
 */
namespace Kaltura\Client\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class EntitlementService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Immediately cancel a subscription, PPV or collection. Cancel is possible only if within cancellation window and content not already consumed
	 * 
	 * @return bool
	 */
	function cancel($assetId, $transactionType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "transactionType", $transactionType);
		$this->client->queueServiceActionCall("entitlement", "cancel", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Cancel a household service subscription at the next renewal. The subscription stays valid till the next renewal.
	 * 
	 */
	function cancelRenewal($subscriptionId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "subscriptionId", $subscriptionId);
		$this->client->queueServiceActionCall("entitlement", "cancelRenewal", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Cancel Scheduled Subscription
	 * 
	 * @return bool
	 */
	function cancelScheduledSubscription($scheduledSubscriptionId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduledSubscriptionId", $scheduledSubscriptionId);
		$this->client->queueServiceActionCall("entitlement", "cancelScheduledSubscription", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Reconcile the user household&#39;s entitlements with an external entitlements source. This request is frequency protected to avoid too frequent calls per household.
	 * 
	 * @return bool
	 */
	function externalReconcile()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("entitlement", "externalReconcile", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Immediately cancel a subscription, PPV or collection. Cancel applies regardless of cancellation window and content consumption status
	 * 
	 * @return bool
	 */
	function forceCancel($assetId, $transactionType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "transactionType", $transactionType);
		$this->client->queueServiceActionCall("entitlement", "forceCancel", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Grant household for an entitlement for a PPV or Subscription.
	 * 
	 * @return bool
	 */
	function grant($productId, $productType, $history, $contentId = 0)
	{
		$kparams = array();
		$this->client->addParam($kparams, "productId", $productId);
		$this->client->addParam($kparams, "productType", $productType);
		$this->client->addParam($kparams, "history", $history);
		$this->client->addParam($kparams, "contentId", $contentId);
		$this->client->queueServiceActionCall("entitlement", "grant", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Gets all the entitled media items for a household
	 * 
	 * @return \Kaltura\Client\Type\EntitlementListResponse
	 */
	function listAction(\Kaltura\Client\Type\EntitlementFilter $filter, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("entitlement", "list", "KalturaEntitlementListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntitlementListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\EntitlementListResponse");
		return $resultObject;
	}

	/**
	 * Swap current entitlement (subscription) with new entitlement (subscription) - only Grant
	 * 
	 * @return bool
	 */
	function swap($currentProductId, $newProductId, $history)
	{
		$kparams = array();
		$this->client->addParam($kparams, "currentProductId", $currentProductId);
		$this->client->addParam($kparams, "newProductId", $newProductId);
		$this->client->addParam($kparams, "history", $history);
		$this->client->queueServiceActionCall("entitlement", "swap", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Update Kaltura Entitelment by Purchase id
	 * 
	 * @return \Kaltura\Client\Type\Entitlement
	 */
	function update($id, \Kaltura\Client\Type\Entitlement $entitlement)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "entitlement", $entitlement->toParams());
		$this->client->queueServiceActionCall("entitlement", "update", "KalturaEntitlement", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntitlement");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Entitlement");
		return $resultObject;
	}
}
