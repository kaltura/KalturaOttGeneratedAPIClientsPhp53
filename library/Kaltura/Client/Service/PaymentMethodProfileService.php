<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
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
class PaymentMethodProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * TBD
	 * 
	 * @return \Kaltura\Client\Type\PaymentMethodProfile
	 */
	function add(\Kaltura\Client\Type\PaymentMethodProfile $paymentMethod)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentMethod", $paymentMethod->toParams());
		$this->client->queueServiceActionCall("paymentmethodprofile", "add", "KalturaPaymentMethodProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentMethodProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PaymentMethodProfile");
		return $resultObject;
	}

	/**
	 * Delete payment method profile
	 * 
	 * @return bool
	 */
	function delete($paymentMethodId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentMethodId", $paymentMethodId);
		$this->client->queueServiceActionCall("paymentmethodprofile", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * TBD
	 * 
	 * @return \Kaltura\Client\Type\PaymentMethodProfileListResponse
	 */
	function listAction(\Kaltura\Client\Type\PaymentMethodProfileFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("paymentmethodprofile", "list", "KalturaPaymentMethodProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentMethodProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PaymentMethodProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update payment method
	 * 
	 * @return \Kaltura\Client\Type\PaymentMethodProfile
	 */
	function update($paymentMethodId, \Kaltura\Client\Type\PaymentMethodProfile $paymentMethod)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentMethodId", $paymentMethodId);
		$this->client->addParam($kparams, "paymentMethod", $paymentMethod->toParams());
		$this->client->queueServiceActionCall("paymentmethodprofile", "update", "KalturaPaymentMethodProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentMethodProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PaymentMethodProfile");
		return $resultObject;
	}
}
