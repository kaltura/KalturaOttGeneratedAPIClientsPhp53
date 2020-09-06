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
class SmsAdapterProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add an object
	 * 
	 * @return \Kaltura\Client\Type\SmsAdapterProfile
	 */
	function add(\Kaltura\Client\Type\SmsAdapterProfile $objectToAdd)
	{
		$kparams = array();
		$this->client->addParam($kparams, "objectToAdd", $objectToAdd->toParams());
		$this->client->queueServiceActionCall("smsadapterprofile", "add", "KalturaSmsAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSmsAdapterProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SmsAdapterProfile");
		return $resultObject;
	}

	/**
	 * Update an object
	 * 
	 * @return \Kaltura\Client\Type\SmsAdapterProfile
	 */
	function update($id, \Kaltura\Client\Type\SmsAdapterProfile $objectToUpdate)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "objectToUpdate", $objectToUpdate->toParams());
		$this->client->queueServiceActionCall("smsadapterprofile", "update", "KalturaSmsAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSmsAdapterProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SmsAdapterProfile");
		return $resultObject;
	}

	/**
	 * Get an object
	 * 
	 * @return \Kaltura\Client\Type\SmsAdapterProfile
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("smsadapterprofile", "get", "KalturaSmsAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSmsAdapterProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SmsAdapterProfile");
		return $resultObject;
	}

	/**
	 * 
	 * @return \Kaltura\Client\Type\SmsAdapterProfileListResponse
	 */
	function listAction(\Kaltura\Client\Type\SmsAdapterProfileFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("smsadapterprofile", "list", "KalturaSmsAdapterProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSmsAdapterProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SmsAdapterProfileListResponse");
		return $resultObject;
	}

	/**
	 * Delete an object
	 * 
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("smsadapterprofile", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Generate Sms Adapter shared secret
	 * 
	 * @return \Kaltura\Client\Type\SmsAdapterProfile
	 */
	function generateSharedSecret($smsAdapterId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "smsAdapterId", $smsAdapterId);
		$this->client->queueServiceActionCall("smsadapterprofile", "generateSharedSecret", "KalturaSmsAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSmsAdapterProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SmsAdapterProfile");
		return $resultObject;
	}
}
