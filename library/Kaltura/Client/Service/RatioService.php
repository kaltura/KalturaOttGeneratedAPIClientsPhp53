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
class RatioService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add new group ratio
	 * 
	 * @return \Kaltura\Client\Type\Ratio
	 */
	function add(\Kaltura\Client\Type\Ratio $ratio)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ratio", $ratio->toParams());
		$this->client->queueServiceActionCall("ratio", "add", "KalturaRatio", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRatio");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Ratio");
		return $resultObject;
	}

	/**
	 * Get the list of available ratios
	 * 
	 * @return \Kaltura\Client\Type\RatioListResponse
	 */
	function listAction()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("ratio", "list", "KalturaRatioListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRatioListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\RatioListResponse");
		return $resultObject;
	}

	/**
	 * Update group ratio&#39;s PrecisionPrecentage
	 * 
	 * @return \Kaltura\Client\Type\Ratio
	 */
	function update($id, \Kaltura\Client\Type\Ratio $ratio)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "ratio", $ratio->toParams());
		$this->client->queueServiceActionCall("ratio", "update", "KalturaRatio", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRatio");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Ratio");
		return $resultObject;
	}
}
