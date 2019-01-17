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
// Copyright (C) 2006-2018  Kaltura Inc.
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
class AssetUserRuleService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add asset user rule
	 * 
	 * @return \Kaltura\Client\Type\AssetUserRule
	 */
	function add(\Kaltura\Client\Type\AssetUserRule $assetUserRule)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetUserRule", $assetUserRule->toParams());
		$this->client->queueServiceActionCall("assetuserrule", "add", "KalturaAssetUserRule", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetUserRule");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetUserRule");
		return $resultObject;
	}

	/**
	 * Attach AssetUserRule To User
	 * 
	 */
	function attachUser($ruleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ruleId", $ruleId);
		$this->client->queueServiceActionCall("assetuserrule", "attachUser", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Delete asset user rule
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("assetuserrule", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Detach AssetUserRule from user
	 * 
	 */
	function detachUser($ruleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ruleId", $ruleId);
		$this->client->queueServiceActionCall("assetuserrule", "detachUser", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Get the list of asset user rules for the partner
	 * 
	 * @return \Kaltura\Client\Type\AssetUserRuleListResponse
	 */
	function listAction(\Kaltura\Client\Type\AssetUserRuleFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("assetuserrule", "list", "KalturaAssetUserRuleListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetUserRuleListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetUserRuleListResponse");
		return $resultObject;
	}

	/**
	 * Update asset user rule
	 * 
	 * @return \Kaltura\Client\Type\AssetUserRule
	 */
	function update($id, \Kaltura\Client\Type\AssetUserRule $assetUserRule)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "assetUserRule", $assetUserRule->toParams());
		$this->client->queueServiceActionCall("assetuserrule", "update", "KalturaAssetUserRule", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetUserRule");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetUserRule");
		return $resultObject;
	}
}
