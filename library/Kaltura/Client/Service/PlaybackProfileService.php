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
class PlaybackProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new Playback adapter for partner
	 * 
	 * @return \Kaltura\Client\Type\PlaybackProfile
	 */
	function add(\Kaltura\Client\Type\PlaybackProfile $playbackProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "playbackProfile", $playbackProfile->toParams());
		$this->client->queueServiceActionCall("playbackprofile", "add", "KalturaPlaybackProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlaybackProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PlaybackProfile");
		return $resultObject;
	}

	/**
	 * Delete Playback adapter by Playback adapter id
	 * 
	 * @return bool
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("playbackprofile", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Generate playback adapter shared secret
	 * 
	 * @return \Kaltura\Client\Type\PlaybackProfile
	 */
	function generateSharedSecret($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("playbackprofile", "generateSharedSecret", "KalturaPlaybackProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlaybackProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PlaybackProfile");
		return $resultObject;
	}

	/**
	 * Returns all playback profiles for partner : id + name
	 * 
	 * @return \Kaltura\Client\Type\PlaybackProfileListResponse
	 */
	function listAction(\Kaltura\Client\Type\PlaybackProfileFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("playbackprofile", "list", "KalturaPlaybackProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlaybackProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PlaybackProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update Playback adapter details
	 * 
	 * @return \Kaltura\Client\Type\PlaybackProfile
	 */
	function update($id, \Kaltura\Client\Type\PlaybackProfile $playbackProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "playbackProfile", $playbackProfile->toParams());
		$this->client->queueServiceActionCall("playbackprofile", "update", "KalturaPlaybackProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlaybackProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PlaybackProfile");
		return $resultObject;
	}
}
