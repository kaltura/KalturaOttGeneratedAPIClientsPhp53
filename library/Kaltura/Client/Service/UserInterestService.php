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
class UserInterestService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new user interest for partner user
	 * 
	 * @return \Kaltura\Client\Type\UserInterest
	 */
	function add(\Kaltura\Client\Type\UserInterest $userInterest)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userInterest", $userInterest->toParams());
		$this->client->queueServiceActionCall("userinterest", "add", "KalturaUserInterest", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserInterest");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UserInterest");
		return $resultObject;
	}

	/**
	 * Delete new user interest for partner user
	 * 
	 * @return bool
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("userinterest", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Delete new user interest for partner user
	 * 
	 */
	function deleteWithToken($id, $token, $partnerId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("userinterest", "deleteWithToken", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * Returns all Engagement for partner
	 * 
	 * @return \Kaltura\Client\Type\UserInterestListResponse
	 */
	function listAction()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("userinterest", "list", "KalturaUserInterestListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserInterestListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UserInterestListResponse");
		return $resultObject;
	}
}
