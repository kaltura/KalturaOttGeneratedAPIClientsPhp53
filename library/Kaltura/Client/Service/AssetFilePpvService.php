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
class AssetFilePpvService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add asset file ppv
	 * 
	 * @return \Kaltura\Client\Type\AssetFilePpv
	 */
	function add(\Kaltura\Client\Type\AssetFilePpv $assetFilePpv)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetFilePpv", $assetFilePpv->toParams());
		$this->client->queueServiceActionCall("assetfileppv", "add", "KalturaAssetFilePpv", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetFilePpv");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetFilePpv");
		return $resultObject;
	}

	/**
	 * Delete asset file ppv
	 * 
	 * @return bool
	 */
	function delete($assetFileId, $ppvModuleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetFileId", $assetFileId);
		$this->client->addParam($kparams, "ppvModuleId", $ppvModuleId);
		$this->client->queueServiceActionCall("assetfileppv", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Return a list of asset files ppvs for the account with optional filter
	 * 
	 * @return \Kaltura\Client\Type\AssetFilePpvListResponse
	 */
	function listAction(\Kaltura\Client\Type\AssetFilePpvFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("assetfileppv", "list", "KalturaAssetFilePpvListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetFilePpvListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetFilePpvListResponse");
		return $resultObject;
	}

	/**
	 * Update assetFilePpv
	 * 
	 * @return \Kaltura\Client\Type\AssetFilePpv
	 */
	function update($assetFileId, $ppvModuleId, \Kaltura\Client\Type\AssetFilePpv $assetFilePpv)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetFileId", $assetFileId);
		$this->client->addParam($kparams, "ppvModuleId", $ppvModuleId);
		$this->client->addParam($kparams, "assetFilePpv", $assetFilePpv->toParams());
		$this->client->queueServiceActionCall("assetfileppv", "update", "KalturaAssetFilePpv", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetFilePpv");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetFilePpv");
		return $resultObject;
	}
}
