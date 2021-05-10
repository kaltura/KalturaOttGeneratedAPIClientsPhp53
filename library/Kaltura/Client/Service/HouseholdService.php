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
class HouseholdService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Creates a household for the user
	 * 
	 * @return \Kaltura\Client\Type\Household
	 */
	function add(\Kaltura\Client\Type\Household $household)
	{
		$kparams = array();
		$this->client->addParam($kparams, "household", $household->toParams());
		$this->client->queueServiceActionCall("household", "add", "KalturaHousehold", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHousehold");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Household");
		return $resultObject;
	}

	/**
	 * Fully delete a household. Delete all of the household information, including users, devices, entitlements, payment methods and notification date.
	 * 
	 * @return bool
	 */
	function delete($id = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("household", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Returns the household model
	 * 
	 * @return \Kaltura\Client\Type\Household
	 */
	function get($id = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("household", "get", "KalturaHousehold", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHousehold");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Household");
		return $resultObject;
	}

	/**
	 * Get recently watched media for user, ordered by recently watched first.
	 * 
	 * @return \Kaltura\Client\Type\HouseholdListResponse
	 */
	function listAction(\Kaltura\Client\Type\HouseholdFilter $filter, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("household", "list", "KalturaHouseholdListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHouseholdListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\HouseholdListResponse");
		return $resultObject;
	}

	/**
	 * Purge a household. Delete all of the household information, including users, devices, entitlements, payment methods and notification date.
	 * 
	 * @return bool
	 */
	function purge($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("household", "purge", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Reset a household’s time limitation for removing user or device
	 * 
	 * @return \Kaltura\Client\Type\Household
	 */
	function resetFrequency($frequencyType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "frequencyType", $frequencyType);
		$this->client->queueServiceActionCall("household", "resetFrequency", "KalturaHousehold", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHousehold");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Household");
		return $resultObject;
	}

	/**
	 * Resumed a given household service to its previous service settings
	 * 
	 * @return bool
	 */
	function resume()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("household", "resume", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Suspend a given household service. Sets the household status to “suspended&quot;.The household service settings are maintained for later resume
	 * 
	 * @return bool
	 */
	function suspend($roleId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "roleId", $roleId);
		$this->client->queueServiceActionCall("household", "suspend", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Update the household name and description
	 * 
	 * @return \Kaltura\Client\Type\Household
	 */
	function update(\Kaltura\Client\Type\Household $household)
	{
		$kparams = array();
		$this->client->addParam($kparams, "household", $household->toParams());
		$this->client->queueServiceActionCall("household", "update", "KalturaHousehold", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHousehold");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Household");
		return $resultObject;
	}
}
