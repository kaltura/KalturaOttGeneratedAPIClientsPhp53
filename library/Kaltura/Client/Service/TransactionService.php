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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class TransactionService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * downgrade specific subscription for a household. entitlements will be updated on the existing subscription end date.
	 * 
	 */
	function downgrade(\Kaltura\Client\Type\Purchase $purchase)
	{
		$kparams = array();
		$this->client->addParam($kparams, "purchase", $purchase->toParams());
		$this->client->queueServiceActionCall("transaction", "downgrade", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Retrieve the purchase session identifier
	 * 
	 * @return bigint
	 */
	function getPurchaseSessionId(\Kaltura\Client\Type\PurchaseSession $purchaseSession)
	{
		$kparams = array();
		$this->client->addParam($kparams, "purchaseSession", $purchaseSession->toParams());
		$this->client->queueServiceActionCall("transaction", "getPurchaseSessionId", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Purchase specific product or subscription for a household. Upon successful charge entitlements to use the requested product or subscription are granted.
	 * 
	 * @return \Kaltura\Client\Type\Transaction
	 */
	function purchase(\Kaltura\Client\Type\Purchase $purchase)
	{
		$kparams = array();
		$this->client->addParam($kparams, "purchase", $purchase->toParams());
		$this->client->queueServiceActionCall("transaction", "purchase", "KalturaTransaction", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaTransaction");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Transaction");
		return $resultObject;
	}

	/**
	 * This method shall set the waiver flag on the user entitlement table and the waiver date field to the current date.
	 * 
	 * @return bool
	 */
	function setWaiver($assetId, $transactionType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "transactionType", $transactionType);
		$this->client->queueServiceActionCall("transaction", "setWaiver", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Updates a pending purchase transaction state.
	 * 
	 */
	function updateStatus($paymentGatewayId, $externalTransactionId, $signature, \Kaltura\Client\Type\TransactionStatus $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->addParam($kparams, "externalTransactionId", $externalTransactionId);
		$this->client->addParam($kparams, "signature", $signature);
		$this->client->addParam($kparams, "status", $status->toParams());
		$this->client->queueServiceActionCall("transaction", "updateStatus", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * upgrade specific subscription for a household. Upon successful charge entitlements to use the requested product or subscription are granted.
	 * 
	 * @return \Kaltura\Client\Type\Transaction
	 */
	function upgrade(\Kaltura\Client\Type\Purchase $purchase)
	{
		$kparams = array();
		$this->client->addParam($kparams, "purchase", $purchase->toParams());
		$this->client->queueServiceActionCall("transaction", "upgrade", "KalturaTransaction", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaTransaction");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Transaction");
		return $resultObject;
	}

	/**
	 * Verifies PPV/Subscription/Collection client purchase (such as InApp) and entitles the user.
	 * 
	 * @return \Kaltura\Client\Type\Transaction
	 */
	function validateReceipt(\Kaltura\Client\Type\ExternalReceipt $externalReceipt)
	{
		$kparams = array();
		$this->client->addParam($kparams, "externalReceipt", $externalReceipt->toParams());
		$this->client->queueServiceActionCall("transaction", "validateReceipt", "KalturaTransaction", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaTransaction");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Transaction");
		return $resultObject;
	}
}
