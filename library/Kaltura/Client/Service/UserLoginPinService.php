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
class UserLoginPinService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Generate a time and usage expiry login-PIN that can allow a single/multiple login/s per PIN. 
	 *             If an active login-PIN already exists. Calling this API again for same user will add another login-PIN
	 * 
	 * @return \Kaltura\Client\Type\UserLoginPin
	 */
	function add($secret = null, $pinUsages = null, $pinDuration = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "secret", $secret);
		$this->client->addParam($kparams, "pinUsages", $pinUsages);
		$this->client->addParam($kparams, "pinDuration", $pinDuration);
		$this->client->queueServiceActionCall("userloginpin", "add", "KalturaUserLoginPin", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserLoginPin");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UserLoginPin");
		return $resultObject;
	}

	/**
	 * Immediately deletes a given pre set login pin code for the user.
	 * 
	 * @return bool
	 */
	function delete($pinCode)
	{
		$kparams = array();
		$this->client->addParam($kparams, "pinCode", $pinCode);
		$this->client->queueServiceActionCall("userloginpin", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Immediately expire all active login-PINs for a user
	 * 
	 * @return bool
	 */
	function deleteAll()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("userloginpin", "deleteAll", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Set a time and usage expiry login-PIN that can allow a single login per PIN. If an active login-PIN already exists. Calling this API again for same user will add another login-PIN
	 * 
	 * @return \Kaltura\Client\Type\UserLoginPin
	 */
	function update($pinCode, $secret = null, $pinUsages = null, $pinDuration = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "pinCode", $pinCode);
		$this->client->addParam($kparams, "secret", $secret);
		$this->client->addParam($kparams, "pinUsages", $pinUsages);
		$this->client->addParam($kparams, "pinDuration", $pinDuration);
		$this->client->queueServiceActionCall("userloginpin", "update", "KalturaUserLoginPin", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserLoginPin");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\UserLoginPin");
		return $resultObject;
	}
}
