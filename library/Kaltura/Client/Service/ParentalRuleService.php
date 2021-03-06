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
class ParentalRuleService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new parentalRule
	 * 
	 * @return \Kaltura\Client\Type\ParentalRule
	 */
	function add(\Kaltura\Client\Type\ParentalRule $parentalRule)
	{
		$kparams = array();
		$this->client->addParam($kparams, "parentalRule", $parentalRule->toParams());
		$this->client->queueServiceActionCall("parentalrule", "add", "KalturaParentalRule", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaParentalRule");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ParentalRule");
		return $resultObject;
	}

	/**
	 * Delete an existing parentalRule
	 * 
	 * @return bool
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("parentalrule", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Disables a parental rule that was previously defined by the household master. Disable can be at specific user or household level.
	 * 
	 * @return bool
	 */
	function disable($ruleId, $entityReference)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ruleId", $ruleId);
		$this->client->addParam($kparams, "entityReference", $entityReference);
		$this->client->queueServiceActionCall("parentalrule", "disable", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Disables a parental rule that was defined at account level. Disable can be at specific user or household level.
	 * 
	 * @return bool
	 */
	function disableDefault($entityReference)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entityReference", $entityReference);
		$this->client->queueServiceActionCall("parentalrule", "disableDefault", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Enable a parental rules for a user
	 * 
	 * @return bool
	 */
	function enable($ruleId, $entityReference)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ruleId", $ruleId);
		$this->client->addParam($kparams, "entityReference", $entityReference);
		$this->client->queueServiceActionCall("parentalrule", "enable", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Get an existing parentalRule by identifier
	 * 
	 * @return \Kaltura\Client\Type\ParentalRule
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("parentalrule", "get", "KalturaParentalRule", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaParentalRule");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ParentalRule");
		return $resultObject;
	}

	/**
	 * Return the parental rules that applies for the user or household. Can include rules that have been associated in account, household, or user level.
	 *             Association level is also specified in the response.
	 * 
	 * @return \Kaltura\Client\Type\ParentalRuleListResponse
	 */
	function listAction(\Kaltura\Client\Type\ParentalRuleFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("parentalrule", "list", "KalturaParentalRuleListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaParentalRuleListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ParentalRuleListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing parentalRule
	 * 
	 * @return \Kaltura\Client\Type\ParentalRule
	 */
	function update($id, \Kaltura\Client\Type\ParentalRule $parentalRule)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "parentalRule", $parentalRule->toParams());
		$this->client->queueServiceActionCall("parentalrule", "update", "KalturaParentalRule", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaParentalRule");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ParentalRule");
		return $resultObject;
	}
}
