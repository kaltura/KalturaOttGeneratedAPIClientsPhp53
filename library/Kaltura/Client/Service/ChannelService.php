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
class ChannelService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new channel for partner. Currently supports only KSQL channel
	 * 
	 * @return \Kaltura\Client\Type\Channel
	 */
	function add(\Kaltura\Client\Type\Channel $channel)
	{
		$kparams = array();
		$this->client->addParam($kparams, "channel", $channel->toParams());
		$this->client->queueServiceActionCall("channel", "add", "KalturaChannel", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaChannel");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Channel");
		return $resultObject;
	}

	/**
	 * Delete channel by its channel id
	 * 
	 * @return bool
	 */
	function delete($channelId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "channelId", $channelId);
		$this->client->queueServiceActionCall("channel", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Returns channel info
	 * 
	 * @return \Kaltura\Client\Type\Channel
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("channel", "get", "KalturaChannel", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaChannel");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Channel");
		return $resultObject;
	}

	/**
	 * Update channel details. Currently supports only KSQL channel
	 * 
	 * @return \Kaltura\Client\Type\Channel
	 */
	function update($channelId, \Kaltura\Client\Type\Channel $channel)
	{
		$kparams = array();
		$this->client->addParam($kparams, "channelId", $channelId);
		$this->client->addParam($kparams, "channel", $channel->toParams());
		$this->client->queueServiceActionCall("channel", "update", "KalturaChannel", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaChannel");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Channel");
		return $resultObject;
	}
}
