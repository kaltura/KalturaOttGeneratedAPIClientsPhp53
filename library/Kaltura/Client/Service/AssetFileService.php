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
class AssetFileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * get KalturaAssetFileContext
	 * 
	 * @return \Kaltura\Client\Type\AssetFileContext
	 */
	function getContext($id, $contextType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "contextType", $contextType);
		$this->client->queueServiceActionCall("assetfile", "getContext", "KalturaAssetFileContext", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetFileContext");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetFileContext");
		return $resultObject;
	}

	/**
	 * Redirects to play manifest
	 * 
	 * @return \Kaltura\Client\Type\AssetFile
	 */
	function playManifest($partnerId, $assetId, $assetType, $assetFileId, $contextType, $ks = null, $tokenizedUrl = null, $isAltUrl = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "assetType", $assetType);
		$this->client->addParam($kparams, "assetFileId", $assetFileId);
		$this->client->addParam($kparams, "contextType", $contextType);
		$this->client->addParam($kparams, "ks", $ks);
		$this->client->addParam($kparams, "tokenizedUrl", $tokenizedUrl);
		$this->client->addParam($kparams, "isAltUrl", $isAltUrl);
		$this->client->queueServiceActionCall("assetfile", "playManifest", "KalturaAssetFile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetFile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetFile");
		return $resultObject;
	}
}
