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
class ExternalChannelProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new External channel for partner
	 * 
	 * @return \Kaltura\Client\Type\ExternalChannelProfile
	 */
	function add(\Kaltura\Client\Type\ExternalChannelProfile $externalChannel)
	{
		$kparams = array();
		$this->client->addParam($kparams, "externalChannel", $externalChannel->toParams());
		$this->client->queueServiceActionCall("externalchannelprofile", "add", "KalturaExternalChannelProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaExternalChannelProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ExternalChannelProfile");
		return $resultObject;
	}

	/**
	 * Delete External channel by External channel id
	 * 
	 * @return bool
	 */
	function delete($externalChannelId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "externalChannelId", $externalChannelId);
		$this->client->queueServiceActionCall("externalchannelprofile", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Returns all External channels for partner
	 * 
	 * @return \Kaltura\Client\Type\ExternalChannelProfileListResponse
	 */
	function listAction(\Kaltura\Client\Type\ExternalChannelProfileFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("externalchannelprofile", "list", "KalturaExternalChannelProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaExternalChannelProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ExternalChannelProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update External channel details
	 * 
	 * @return \Kaltura\Client\Type\ExternalChannelProfile
	 */
	function update($externalChannelId, \Kaltura\Client\Type\ExternalChannelProfile $externalChannel)
	{
		$kparams = array();
		$this->client->addParam($kparams, "externalChannelId", $externalChannelId);
		$this->client->addParam($kparams, "externalChannel", $externalChannel->toParams());
		$this->client->queueServiceActionCall("externalchannelprofile", "update", "KalturaExternalChannelProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaExternalChannelProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ExternalChannelProfile");
		return $resultObject;
	}
}
