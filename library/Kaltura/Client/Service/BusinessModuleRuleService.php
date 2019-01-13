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
// Copyright (C) 2006-2019  Kaltura Inc.
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
class BusinessModuleRuleService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add business module rule
	 * 
	 * @return \Kaltura\Client\Type\BusinessModuleRule
	 */
	function add(\Kaltura\Client\Type\BusinessModuleRule $businessModuleRule)
	{
		$kparams = array();
		$this->client->addParam($kparams, "businessModuleRule", $businessModuleRule->toParams());
		$this->client->queueServiceActionCall("businessmodulerule", "add", "KalturaBusinessModuleRule", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBusinessModuleRule");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BusinessModuleRule");
		return $resultObject;
	}

	/**
	 * Delete business module rule
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("businessmodulerule", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Get business module rule by ID
	 * 
	 * @return \Kaltura\Client\Type\BusinessModuleRule
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("businessmodulerule", "get", "KalturaBusinessModuleRule", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBusinessModuleRule");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BusinessModuleRule");
		return $resultObject;
	}

	/**
	 * Get the list of business module rules for the partner
	 * 
	 * @return \Kaltura\Client\Type\BusinessModuleRuleListResponse
	 */
	function listAction(\Kaltura\Client\Type\BusinessModuleRuleFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("businessmodulerule", "list", "KalturaBusinessModuleRuleListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBusinessModuleRuleListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BusinessModuleRuleListResponse");
		return $resultObject;
	}

	/**
	 * Update business module rule
	 * 
	 * @return \Kaltura\Client\Type\BusinessModuleRule
	 */
	function update($id, \Kaltura\Client\Type\BusinessModuleRule $businessModuleRule)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "businessModuleRule", $businessModuleRule->toParams());
		$this->client->queueServiceActionCall("businessmodulerule", "update", "KalturaBusinessModuleRule", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBusinessModuleRule");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BusinessModuleRule");
		return $resultObject;
	}
}
