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
class SsoAdapterProfileService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Insert new sso adapter for partner
	 * 
	 * @return \Kaltura\Client\Type\SSOAdapterProfile
	 */
	function add(\Kaltura\Client\Type\SSOAdapterProfile $ssoAdapter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ssoAdapter", $ssoAdapter->toParams());
		$this->client->queueServiceActionCall("ssoadapterprofile", "add", "KalturaSSOAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSSOAdapterProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SSOAdapterProfile");
		return $resultObject;
	}

	/**
	 * Delete sso adapters by sso adapters id
	 * 
	 * @return bool
	 */
	function delete($ssoAdapterId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ssoAdapterId", $ssoAdapterId);
		$this->client->queueServiceActionCall("ssoadapterprofile", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Generate SSO Adapter shared secret
	 * 
	 * @return \Kaltura\Client\Type\SSOAdapterProfile
	 */
	function generateSharedSecret($ssoAdapterId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ssoAdapterId", $ssoAdapterId);
		$this->client->queueServiceActionCall("ssoadapterprofile", "generateSharedSecret", "KalturaSSOAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSSOAdapterProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SSOAdapterProfile");
		return $resultObject;
	}

	/**
	 * Request validation against 3rd party
	 * 
	 * @return \Kaltura\Client\Type\SSOAdapterProfileInvoke
	 */
	function invoke($intent, array $adapterData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "intent", $intent);
		foreach($adapterData as $index => $obj)
		{
			$this->client->addParam($kparams, "adapterData:$index", $obj->toParams());
		}
		$this->client->queueServiceActionCall("ssoadapterprofile", "invoke", "KalturaSSOAdapterProfileInvoke", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSSOAdapterProfileInvoke");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SSOAdapterProfileInvoke");
		return $resultObject;
	}

	/**
	 * Returns all sso adapters for partner : id + name
	 * 
	 * @return \Kaltura\Client\Type\SSOAdapterProfileListResponse
	 */
	function listAction()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("ssoadapterprofile", "list", "KalturaSSOAdapterProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSSOAdapterProfileListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SSOAdapterProfileListResponse");
		return $resultObject;
	}

	/**
	 * Update sso adapter details
	 * 
	 * @return \Kaltura\Client\Type\SSOAdapterProfile
	 */
	function update($ssoAdapterId, \Kaltura\Client\Type\SSOAdapterProfile $ssoAdapter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "ssoAdapterId", $ssoAdapterId);
		$this->client->addParam($kparams, "ssoAdapter", $ssoAdapter->toParams());
		$this->client->queueServiceActionCall("ssoadapterprofile", "update", "KalturaSSOAdapterProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSSOAdapterProfile");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SSOAdapterProfile");
		return $resultObject;
	}
}
