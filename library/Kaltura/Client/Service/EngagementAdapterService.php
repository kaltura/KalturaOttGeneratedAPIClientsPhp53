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
// Copyright (C) 2006-2020  Kaltura Inc.
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
class EngagementAdapterService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new Engagement adapter for partner
	 * 
	 * @return \Kaltura\Client\Type\EngagementAdapter
	 */
	function add(\Kaltura\Client\Type\EngagementAdapter $engagementAdapter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "engagementAdapter", $engagementAdapter->toParams());
		$this->client->queueServiceActionCall("engagementadapter", "add", "KalturaEngagementAdapter", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEngagementAdapter");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\EngagementAdapter");
		return $resultObject;
	}

	/**
	 * Delete Engagement adapter by Engagement adapter id
	 * 
	 * @return bool
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("engagementadapter", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Generate engagement adapter shared secret
	 * 
	 * @return \Kaltura\Client\Type\EngagementAdapter
	 */
	function generateSharedSecret($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("engagementadapter", "generateSharedSecret", "KalturaEngagementAdapter", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEngagementAdapter");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\EngagementAdapter");
		return $resultObject;
	}

	/**
	 * Returns all Engagement adapters for partner : id + name
	 * 
	 * @return \Kaltura\Client\Type\EngagementAdapter
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("engagementadapter", "get", "KalturaEngagementAdapter", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEngagementAdapter");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\EngagementAdapter");
		return $resultObject;
	}

	/**
	 * Returns all Engagement adapters for partner : id + name
	 * 
	 * @return \Kaltura\Client\Type\EngagementAdapterListResponse
	 */
	function listAction()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("engagementadapter", "list", "KalturaEngagementAdapterListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEngagementAdapterListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\EngagementAdapterListResponse");
		return $resultObject;
	}

	/**
	 * Update Engagement adapter details
	 * 
	 * @return \Kaltura\Client\Type\EngagementAdapter
	 */
	function update($id, \Kaltura\Client\Type\EngagementAdapter $engagementAdapter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "engagementAdapter", $engagementAdapter->toParams());
		$this->client->queueServiceActionCall("engagementadapter", "update", "KalturaEngagementAdapter", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEngagementAdapter");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\EngagementAdapter");
		return $resultObject;
	}
}
