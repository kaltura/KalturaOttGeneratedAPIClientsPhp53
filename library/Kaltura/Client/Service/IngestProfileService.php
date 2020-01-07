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
class IngestProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new ingest profile for partner
	 * 
	 * @return \Kaltura\Client\Type\IngestProfile
	 */
	function add(\Kaltura\Client\Type\IngestProfile $ingestProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ingestProfile", $ingestProfile->toParams());
		$this->client->queueServiceActionCall("ingestprofile", "add", "KalturaIngestProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaIngestProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\IngestProfile");
		return $resultObject;
	}

	/**
	 * Delete ingest profiles by ingest profiles id
	 * 
	 * @return bool
	 */
	function delete($ingestProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ingestProfileId", $ingestProfileId);
		$this->client->queueServiceActionCall("ingestprofile", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Returns all ingest profiles for partner
	 * 
	 * @return \Kaltura\Client\Type\IngestProfileListResponse
	 */
	function listAction()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("ingestprofile", "list", "KalturaIngestProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaIngestProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\IngestProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update ingest profile details
	 * 
	 * @return \Kaltura\Client\Type\IngestProfile
	 */
	function update($ingestProfileId, \Kaltura\Client\Type\IngestProfile $ingestProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ingestProfileId", $ingestProfileId);
		$this->client->addParam($kparams, "ingestProfile", $ingestProfile->toParams());
		$this->client->queueServiceActionCall("ingestprofile", "update", "KalturaIngestProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaIngestProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\IngestProfile");
		return $resultObject;
	}
}
