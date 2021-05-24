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
class PricePlanService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Internal API !!!  Insert new PriceDetails for partner
	 * 
	 * @return \Kaltura\Client\Type\PricePlan
	 */
	function add(\Kaltura\Client\Type\PricePlan $pricePlan)
	{
		$kparams = array();
		$this->client->addParam($kparams, "pricePlan", $pricePlan->toParams());
		$this->client->queueServiceActionCall("priceplan", "add", "KalturaPricePlan", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPricePlan");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PricePlan");
		return $resultObject;
	}

	/**
	 * Internal API !!! Delete PricePlan
	 * 
	 * @return bool
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("priceplan", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Returns a list of price plans by IDs
	 * 
	 * @return \Kaltura\Client\Type\PricePlanListResponse
	 */
	function listAction(\Kaltura\Client\Type\PricePlanFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("priceplan", "list", "KalturaPricePlanListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPricePlanListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PricePlanListResponse");
		return $resultObject;
	}

	/**
	 * Updates a price plan
	 * 
	 * @return \Kaltura\Client\Type\PricePlan
	 */
	function update($id, \Kaltura\Client\Type\PricePlan $pricePlan)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "pricePlan", $pricePlan->toParams());
		$this->client->queueServiceActionCall("priceplan", "update", "KalturaPricePlan", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPricePlan");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PricePlan");
		return $resultObject;
	}
}
