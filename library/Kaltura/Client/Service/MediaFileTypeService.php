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
class MediaFileTypeService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new media-file type
	 * 
	 * @return \Kaltura\Client\Type\MediaFileType
	 */
	function add(\Kaltura\Client\Type\MediaFileType $mediaFileType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaFileType", $mediaFileType->toParams());
		$this->client->queueServiceActionCall("mediafiletype", "add", "KalturaMediaFileType", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaFileType");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaFileType");
		return $resultObject;
	}

	/**
	 * Delete media-file type by id
	 * 
	 * @return bool
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("mediafiletype", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Returns a list of media-file types
	 * 
	 * @return \Kaltura\Client\Type\MediaFileTypeListResponse
	 */
	function listAction()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("mediafiletype", "list", "KalturaMediaFileTypeListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaFileTypeListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaFileTypeListResponse");
		return $resultObject;
	}

	/**
	 * Update existing media-file type
	 * 
	 * @return \Kaltura\Client\Type\MediaFileType
	 */
	function update($id, \Kaltura\Client\Type\MediaFileType $mediaFileType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "mediaFileType", $mediaFileType->toParams());
		$this->client->queueServiceActionCall("mediafiletype", "update", "KalturaMediaFileType", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaMediaFileType");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\MediaFileType");
		return $resultObject;
	}
}
