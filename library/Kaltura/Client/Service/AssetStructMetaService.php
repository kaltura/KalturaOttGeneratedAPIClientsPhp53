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
class AssetStructMetaService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Return a list of asset struct metas for the account with optional filter
	 * 
	 * @return \Kaltura\Client\Type\AssetStructMetaListResponse
	 */
	function listAction(\Kaltura\Client\Type\AssetStructMetaFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("assetstructmeta", "list", "KalturaAssetStructMetaListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetStructMetaListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetStructMetaListResponse");
		return $resultObject;
	}

	/**
	 * Update Asset struct meta
	 * 
	 * @return \Kaltura\Client\Type\AssetStructMeta
	 */
	function update($assetStructId, $metaId, \Kaltura\Client\Type\AssetStructMeta $assetStructMeta)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetStructId", $assetStructId);
		$this->client->addParam($kparams, "metaId", $metaId);
		$this->client->addParam($kparams, "assetStructMeta", $assetStructMeta->toParams());
		$this->client->queueServiceActionCall("assetstructmeta", "update", "KalturaAssetStructMeta", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetStructMeta");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetStructMeta");
		return $resultObject;
	}
}
