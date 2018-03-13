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
class SubscriptionSetService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new subscriptionSet
	 * 
	 * @return \Kaltura\Client\Type\SubscriptionSet
	 */
	function add(\Kaltura\Client\Type\SubscriptionSet $subscriptionSet)
	{
		$kparams = array();
		$this->client->addParam($kparams, "subscriptionSet", $subscriptionSet->toParams());
		$this->client->queueServiceActionCall("subscriptionset", "add", "KalturaSubscriptionSet", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSubscriptionSet");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SubscriptionSet");
		return $resultObject;
	}

	/**
	 * Delete a subscriptionSet
	 * 
	 * @return bool
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("subscriptionset", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Get the subscriptionSet according to the Identifier
	 * 
	 * @return \Kaltura\Client\Type\SubscriptionSet
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("subscriptionset", "get", "KalturaSubscriptionSet", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSubscriptionSet");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SubscriptionSet");
		return $resultObject;
	}

	/**
	 * Returns a list of subscriptionSets requested by ids or subscription ids
	 * 
	 * @return \Kaltura\Client\Type\SubscriptionSetListResponse
	 */
	function listAction(\Kaltura\Client\Type\SubscriptionSetFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("subscriptionset", "list", "KalturaSubscriptionSetListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSubscriptionSetListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SubscriptionSetListResponse");
		return $resultObject;
	}

	/**
	 * Update the subscriptionSet
	 * 
	 * @return \Kaltura\Client\Type\SubscriptionSet
	 */
	function update($id, \Kaltura\Client\Type\SubscriptionSet $subscriptionSet)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "subscriptionSet", $subscriptionSet->toParams());
		$this->client->queueServiceActionCall("subscriptionset", "update", "KalturaSubscriptionSet", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSubscriptionSet");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SubscriptionSet");
		return $resultObject;
	}
}
