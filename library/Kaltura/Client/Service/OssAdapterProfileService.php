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
class OssAdapterProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new OSS adapter for partner
	 * 
	 * @return \Kaltura\Client\Type\OSSAdapterProfile
	 */
	function add(\Kaltura\Client\Type\OSSAdapterProfile $ossAdapter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ossAdapter", $ossAdapter->toParams());
		$this->client->queueServiceActionCall("ossadapterprofile", "add", "KalturaOSSAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOSSAdapterProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OSSAdapterProfile");
		return $resultObject;
	}

	/**
	 * Delete OSS adapter by OSS adapter id
	 * 
	 * @return bool
	 */
	function delete($ossAdapterId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ossAdapterId", $ossAdapterId);
		$this->client->queueServiceActionCall("ossadapterprofile", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Generate oss adapter shared secret
	 * 
	 * @return \Kaltura\Client\Type\OSSAdapterProfile
	 */
	function generateSharedSecret($ossAdapterId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ossAdapterId", $ossAdapterId);
		$this->client->queueServiceActionCall("ossadapterprofile", "generateSharedSecret", "KalturaOSSAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOSSAdapterProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OSSAdapterProfile");
		return $resultObject;
	}

	/**
	 * Returns all OSS adapters for partner : id + name
	 * 
	 * @return \Kaltura\Client\Type\OSSAdapterProfile
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("ossadapterprofile", "get", "KalturaOSSAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOSSAdapterProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OSSAdapterProfile");
		return $resultObject;
	}

	/**
	 * Returns all OSS adapters for partner : id + name
	 * 
	 * @return \Kaltura\Client\Type\OSSAdapterProfileListResponse
	 */
	function listAction()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("ossadapterprofile", "list", "KalturaOSSAdapterProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOSSAdapterProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OSSAdapterProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update OSS adapter details
	 * 
	 * @return \Kaltura\Client\Type\OSSAdapterProfile
	 */
	function update($ossAdapterId, \Kaltura\Client\Type\OSSAdapterProfile $ossAdapter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ossAdapterId", $ossAdapterId);
		$this->client->addParam($kparams, "ossAdapter", $ossAdapter->toParams());
		$this->client->queueServiceActionCall("ossadapterprofile", "update", "KalturaOSSAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOSSAdapterProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OSSAdapterProfile");
		return $resultObject;
	}
}
