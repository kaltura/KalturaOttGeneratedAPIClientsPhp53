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
class TopicNotificationMessageService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new topic notification message
	 * 
	 * @return \Kaltura\Client\Type\TopicNotificationMessage
	 */
	function add(\Kaltura\Client\Type\TopicNotificationMessage $topicNotificationMessage)
	{
		$kparams = array();
		$this->client->addParam($kparams, "topicNotificationMessage", $topicNotificationMessage->toParams());
		$this->client->queueServiceActionCall("topicnotificationmessage", "add", "KalturaTopicNotificationMessage", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaTopicNotificationMessage");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\TopicNotificationMessage");
		return $resultObject;
	}

	/**
	 * Delete an existing topic notification message
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("topicnotificationmessage", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Lists all topic notifications in the system.
	 * 
	 * @return \Kaltura\Client\Type\TopicNotificationMessageListResponse
	 */
	function listAction(\Kaltura\Client\Type\TopicNotificationMessageFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("topicnotificationmessage", "list", "KalturaTopicNotificationMessageListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaTopicNotificationMessageListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\TopicNotificationMessageListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing topic notification message
	 * 
	 * @return \Kaltura\Client\Type\TopicNotificationMessage
	 */
	function update($id, \Kaltura\Client\Type\TopicNotificationMessage $topicNotificationMessage)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "topicNotificationMessage", $topicNotificationMessage->toParams());
		$this->client->queueServiceActionCall("topicnotificationmessage", "update", "KalturaTopicNotificationMessage", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaTopicNotificationMessage");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\TopicNotificationMessage");
		return $resultObject;
	}
}
