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
class RecordingService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Issue a record request for a program
	 * 
	 * @return \Kaltura\Client\Type\Recording
	 */
	function add(\Kaltura\Client\Type\Recording $recording)
	{
		$kparams = array();
		$this->client->addParam($kparams, "recording", $recording->toParams());
		$this->client->queueServiceActionCall("recording", "add", "KalturaRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Recording");
		return $resultObject;
	}

	/**
	 * Delete list of user&#39;s recordings. Recording can be deleted only in status Recorded.
	 *             Possible error codes for each recording: RecordingNotFound = 3039, RecordingStatusNotValid = 3043, Error = 1
	 * 
	 * @return array
	 */
	function bulkdelete($recordingIds)
	{
		$kparams = array();
		$this->client->addParam($kparams, "recordingIds", $recordingIds);
		$this->client->queueServiceActionCall("recording", "bulkdelete", "KalturaActionResult", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalArray($resultXmlObject->result, "KalturaActionResult");
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	/**
	 * Cancel a previously requested recording. Cancel recording can be called for recording in status Scheduled or Recording Only
	 * 
	 * @return \Kaltura\Client\Type\Recording
	 */
	function cancel($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "cancel", "KalturaRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Recording");
		return $resultObject;
	}

	/**
	 * Delete one or more user recording(s). Delete recording can be called only for recordings in status Recorded
	 * 
	 * @return \Kaltura\Client\Type\Recording
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "delete", "KalturaRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Recording");
		return $resultObject;
	}

	/**
	 * Returns recording object by internal identifier
	 * 
	 * @return \Kaltura\Client\Type\Recording
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "get", "KalturaRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Recording");
		return $resultObject;
	}

	/**
	 * Return a list of recordings for the household with optional filter by status and KSQL.
	 * 
	 * @return \Kaltura\Client\Type\RecordingListResponse
	 */
	function listAction(\Kaltura\Client\Type\RecordingFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("recording", "list", "KalturaRecordingListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecordingListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\RecordingListResponse");
		return $resultObject;
	}

	/**
	 * Deprecated, please use recording.update instead
	 *             Protects an existing recording from the cleanup process for the defined protection period
	 * 
	 * @return \Kaltura\Client\Type\Recording
	 */
	function protect($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "protect", "KalturaRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Recording");
		return $resultObject;
	}

	/**
	 * Update an existing recording with is protected field
	 * 
	 * @return \Kaltura\Client\Type\Recording
	 */
	function update($id, \Kaltura\Client\Type\Recording $recording)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "recording", $recording->toParams());
		$this->client->queueServiceActionCall("recording", "update", "KalturaRecording", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Recording");
		return $resultObject;
	}
}
