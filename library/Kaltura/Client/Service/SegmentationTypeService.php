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
class SegmentationTypeService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Adds a new segmentation type to the system
	 * 
	 * @return \Kaltura\Client\Type\SegmentationType
	 */
	function add(\Kaltura\Client\Type\SegmentationType $segmentationType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "segmentationType", $segmentationType->toParams());
		$this->client->queueServiceActionCall("segmentationtype", "add", "KalturaSegmentationType", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSegmentationType");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SegmentationType");
		return $resultObject;
	}

	/**
	 * Delete a segmentation type from the system
	 * 
	 * @return bool
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("segmentationtype", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Lists all segmentation types in group
	 * 
	 * @return \Kaltura\Client\Type\SegmentationTypeListResponse
	 */
	function listAction(\Kaltura\Client\Type\SegmentationTypeFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("segmentationtype", "list", "KalturaSegmentationTypeListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSegmentationTypeListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SegmentationTypeListResponse");
		return $resultObject;
	}

	/**
	 * Updates an existing segmentation type
	 * 
	 * @return \Kaltura\Client\Type\SegmentationType
	 */
	function update($segmentationTypeId, \Kaltura\Client\Type\SegmentationType $segmentationType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "segmentationTypeId", $segmentationTypeId);
		$this->client->addParam($kparams, "segmentationType", $segmentationType->toParams());
		$this->client->queueServiceActionCall("segmentationtype", "update", "KalturaSegmentationType", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSegmentationType");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SegmentationType");
		return $resultObject;
	}
}
