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
class ReminderService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new future reminder
	 * 
	 * @return \Kaltura\Client\Type\Reminder
	 */
	function add(\Kaltura\Client\Type\Reminder $reminder)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reminder", $reminder->toParams());
		$this->client->queueServiceActionCall("reminder", "add", "KalturaReminder", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaReminder");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Reminder");
		return $resultObject;
	}

	/**
	 * Delete a reminder. Reminder cannot be delete while being sent.
	 * 
	 * @return bool
	 */
	function delete($id, $type)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("reminder", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Delete a reminder. Reminder cannot be delete while being sent.
	 * 
	 */
	function deleteWithToken($id, $type, $token, $partnerId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("reminder", "deleteWithToken", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Return a list of reminders with optional filter by KSQL.
	 * 
	 * @return \Kaltura\Client\Type\ReminderListResponse
	 */
	function listAction(\Kaltura\Client\Type\ReminderFilter $filter, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getClientException("Action is not supported as part of multi-request.", ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("reminder", "list", "KalturaReminderListResponse", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaReminderListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ReminderListResponse");
		return $resultObject;
	}
}
