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
class AssetService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new asset.
	 *             For metas of type bool-&gt; use kalturaBoolValue, type number-&gt; KalturaDoubleValue, type date -&gt; KalturaLongValue, type string -&gt; KalturaStringValue
	 * 
	 * @return \Kaltura\Client\Type\Asset
	 */
	function add(\Kaltura\Client\Type\Asset $asset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "asset", $asset->toParams());
		$this->client->queueServiceActionCall("asset", "add", "KalturaAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAsset");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Asset");
		return $resultObject;
	}

	/**
	 * Add new bulk upload batch job Conversion profile id can be specified in the API.
	 * 
	 * @return \Kaltura\Client\Type\BulkUpload
	 */
	function addFromBulkUpload($fileData, \Kaltura\Client\Type\BulkUploadJobData $bulkUploadJobData, \Kaltura\Client\Type\BulkUploadAssetData $bulkUploadAssetData)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->addParam($kparams, "bulkUploadJobData", $bulkUploadJobData->toParams());
		$this->client->addParam($kparams, "bulkUploadAssetData", $bulkUploadAssetData->toParams());
		$this->client->queueServiceActionCall("asset", "addFromBulkUpload", "KalturaBulkUpload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkUpload");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\BulkUpload");
		return $resultObject;
	}

	/**
	 * Returns a group-by result for media or EPG according to given filter. Lists values of each field and their respective count.
	 * 
	 * @return \Kaltura\Client\Type\AssetCount
	 */
	function count(\Kaltura\Client\Type\SearchAssetFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("asset", "count", "KalturaAssetCount", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetCount");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetCount");
		return $resultObject;
	}

	/**
	 * Delete an existing asset
	 * 
	 * @return bool
	 */
	function delete($id, $assetReferenceType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "assetReferenceType", $assetReferenceType);
		$this->client->queueServiceActionCall("asset", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Returns media or EPG asset by media / EPG internal or external identifier
	 * 
	 * @return \Kaltura\Client\Type\Asset
	 */
	function get($id, $assetReferenceType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "assetReferenceType", $assetReferenceType);
		$this->client->queueServiceActionCall("asset", "get", "KalturaAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAsset");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Asset");
		return $resultObject;
	}

	/**
	 * Returns the data for ads control
	 * 
	 * @return \Kaltura\Client\Type\AdsContext
	 */
	function getAdsContext($assetId, $assetType, \Kaltura\Client\Type\PlaybackContextOptions $contextDataParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "assetType", $assetType);
		$this->client->addParam($kparams, "contextDataParams", $contextDataParams->toParams());
		$this->client->queueServiceActionCall("asset", "getAdsContext", "KalturaAdsContext", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAdsContext");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AdsContext");
		return $resultObject;
	}

	/**
	 * This action delivers all data relevant for player
	 * 
	 * @return \Kaltura\Client\Type\PlaybackContext
	 */
	function getPlaybackContext($assetId, $assetType, \Kaltura\Client\Type\PlaybackContextOptions $contextDataParams, $sourceType = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "assetType", $assetType);
		$this->client->addParam($kparams, "contextDataParams", $contextDataParams->toParams());
		$this->client->addParam($kparams, "sourceType", $sourceType);
		$this->client->queueServiceActionCall("asset", "getPlaybackContext", "KalturaPlaybackContext", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlaybackContext");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PlaybackContext");
		return $resultObject;
	}

	/**
	 * This action delivers all data relevant for player
	 * 
	 * @return \Kaltura\Client\Type\PlaybackContext
	 */
	function getPlaybackManifest($assetId, $assetType, \Kaltura\Client\Type\PlaybackContextOptions $contextDataParams, $sourceType = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "assetType", $assetType);
		$this->client->addParam($kparams, "contextDataParams", $contextDataParams->toParams());
		$this->client->addParam($kparams, "sourceType", $sourceType);
		$this->client->queueServiceActionCall("asset", "getPlaybackManifest", "KalturaPlaybackContext", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlaybackContext");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PlaybackContext");
		return $resultObject;
	}

	/**
	 * Returns media or EPG assets. Filters by media identifiers or by EPG internal or external identifier.
	 * 
	 * @return \Kaltura\Client\Type\AssetListResponse
	 */
	function listAction(\Kaltura\Client\Type\AssetFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("asset", "list", "KalturaAssetListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAssetListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\AssetListResponse");
		return $resultObject;
	}

	/**
	 * remove metas and tags from asset
	 * 
	 * @return bool
	 */
	function removeMetasAndTags($id, $assetReferenceType, $idIn)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "assetReferenceType", $assetReferenceType);
		$this->client->addParam($kparams, "idIn", $idIn);
		$this->client->queueServiceActionCall("asset", "removeMetasAndTags", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * update an existing asset.
	 *             For metas of type bool-&gt; use kalturaBoolValue, type number-&gt; KalturaDoubleValue, type date -&gt; KalturaLongValue, type string -&gt; KalturaStringValue
	 * 
	 * @return \Kaltura\Client\Type\Asset
	 */
	function update($id, \Kaltura\Client\Type\Asset $asset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "asset", $asset->toParams());
		$this->client->queueServiceActionCall("asset", "update", "KalturaAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaAsset");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Asset");
		return $resultObject;
	}
}
