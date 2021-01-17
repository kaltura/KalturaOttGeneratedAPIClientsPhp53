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
class HomeNetworkService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new home network to a household
	 * 
	 * @return \Kaltura\Client\Type\HomeNetwork
	 */
	function add(\Kaltura\Client\Type\HomeNetwork $homeNetwork)
	{
		$kparams = array();
		$this->client->addParam($kparams, "homeNetwork", $homeNetwork->toParams());
		$this->client->queueServiceActionCall("homenetwork", "add", "KalturaHomeNetwork", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHomeNetwork");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\HomeNetwork");
		return $resultObject;
	}

	/**
	 * Delete household’s existing home network
	 * 
	 * @return bool
	 */
	function delete($externalId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "externalId", $externalId);
		$this->client->queueServiceActionCall("homenetwork", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Retrieve the household’s home networks
	 * 
	 * @return \Kaltura\Client\Type\HomeNetworkListResponse
	 */
	function listAction()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("homenetwork", "list", "KalturaHomeNetworkListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHomeNetworkListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\HomeNetworkListResponse");
		return $resultObject;
	}

	/**
	 * Update and existing home network for a household
	 * 
	 * @return \Kaltura\Client\Type\HomeNetwork
	 */
	function update($externalId, \Kaltura\Client\Type\HomeNetwork $homeNetwork)
	{
		$kparams = array();
		$this->client->addParam($kparams, "externalId", $externalId);
		$this->client->addParam($kparams, "homeNetwork", $homeNetwork->toParams());
		$this->client->queueServiceActionCall("homenetwork", "update", "KalturaHomeNetwork", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHomeNetwork");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\HomeNetwork");
		return $resultObject;
	}
}
