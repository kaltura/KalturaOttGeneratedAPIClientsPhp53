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
class HouseholdPaymentGatewayService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Disable payment-gateway on the household
	 * 
	 * @return bool
	 */
	function disable($paymentGatewayId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->queueServiceActionCall("householdpaymentgateway", "disable", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Enable a payment-gateway provider for the household.
	 * 
	 * @return bool
	 */
	function enable($paymentGatewayId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->queueServiceActionCall("householdpaymentgateway", "enable", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Get a household’s billing account identifier (charge ID) for a given payment gateway
	 * 
	 * @return string
	 */
	function getChargeID($paymentGatewayExternalId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayExternalId", $paymentGatewayExternalId);
		$this->client->queueServiceActionCall("householdpaymentgateway", "getChargeID", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Gets the Payment Gateway Configuration for the payment gateway identifier given
	 * 
	 * @return \Kaltura\Client\Type\PaymentGatewayConfiguration
	 */
	function invoke($paymentGatewayId, $intent, array $extraParameters)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->addParam($kparams, "intent", $intent);
		foreach($extraParameters as $index => $obj)
		{
			$this->client->addParam($kparams, "extraParameters:$index", $obj->toParams());
		}
		$this->client->queueServiceActionCall("householdpaymentgateway", "invoke", "KalturaPaymentGatewayConfiguration", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentGatewayConfiguration");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PaymentGatewayConfiguration");
		return $resultObject;
	}

	/**
	 * Get a list of all configured Payment Gateways providers available for the account. For each payment is provided with the household associated payment methods.
	 * 
	 * @return \Kaltura\Client\Type\HouseholdPaymentGatewayListResponse
	 */
	function listAction()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("householdpaymentgateway", "list", "KalturaHouseholdPaymentGatewayListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHouseholdPaymentGatewayListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\HouseholdPaymentGatewayListResponse");
		return $resultObject;
	}

	/**
	 * Resumes all the entitlements of the given payment gateway
	 * 
	 */
	function resume($paymentGatewayId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->queueServiceActionCall("householdpaymentgateway", "resume", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Set user billing account identifier (charge ID), for a specific household and a specific payment gateway
	 * 
	 * @return bool
	 */
	function setChargeID($paymentGatewayExternalId, $chargeId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayExternalId", $paymentGatewayExternalId);
		$this->client->addParam($kparams, "chargeId", $chargeId);
		$this->client->queueServiceActionCall("householdpaymentgateway", "setChargeID", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Suspends all the entitlements of the given payment gateway
	 * 
	 */
	function suspend($paymentGatewayId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->queueServiceActionCall("householdpaymentgateway", "suspend", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}
}
