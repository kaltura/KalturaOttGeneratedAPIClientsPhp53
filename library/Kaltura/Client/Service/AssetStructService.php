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
// Copyright (C) 2006-2019  Kaltura Inc.
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
class AssetStructService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new assetStruct
	 * 
	 * @return \Kaltura\Client\Type\AssetStruct
	 */
	function add(\Kaltura\Client\Type\AssetStruct $assetStruct)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetStruct", $assetStruct->toParams());
		$this->client->queueServiceActionCall("assetstruct", "add", "KalturaAssetStruct", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetStruct");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetStruct");
		return $resultObject;
	}

	/**
	 * Delete an existing assetStruct
	 * 
	 * @return bool
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("assetstruct", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Return a list of asset structs for the account with optional filter
	 * 
	 * @return \Kaltura\Client\Type\AssetStructListResponse
	 */
	function listAction(\Kaltura\Client\Type\AssetStructFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("assetstruct", "list", "KalturaAssetStructListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetStructListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetStructListResponse");
		return $resultObject;
	}

	/**
	 * Update an existing assetStruct
	 * 
	 * @return \Kaltura\Client\Type\AssetStruct
	 */
	function update($id, \Kaltura\Client\Type\AssetStruct $assetStruct)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "assetStruct", $assetStruct->toParams());
		$this->client->queueServiceActionCall("assetstruct", "update", "KalturaAssetStruct", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetStruct");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetStruct");
		return $resultObject;
	}
}
