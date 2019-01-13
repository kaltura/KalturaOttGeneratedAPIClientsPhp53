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
class SocialService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * List social accounts
	 * 
	 * @return \Kaltura\Client\Type\Social
	 */
	function get($type)
	{
		$kparams = array();
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("social", "get", "KalturaSocial", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSocial");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Social");
		return $resultObject;
	}

	/**
	 * Return the user object with social information according to a provided external social token
	 * 
	 * @return \Kaltura\Client\Type\Social
	 */
	function getByToken($partnerId, $token, $type)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("social", "getByToken", "KalturaSocial", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSocial");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Social");
		return $resultObject;
	}

	/**
	 * Retrieve the social network’s configuration information
	 * 
	 * @return \Kaltura\Client\Type\SocialConfig
	 */
	function getConfiguration($type, $partnerId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("social", "getConfiguration", "KalturaSocialConfig", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSocialConfig");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SocialConfig");
		return $resultObject;
	}

	/**
	 * Login using social token
	 * 
	 * @return \Kaltura\Client\Type\LoginResponse
	 */
	function login($partnerId, $token, $type, $udid = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("social", "login", "KalturaLoginResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLoginResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LoginResponse");
		return $resultObject;
	}

	/**
	 * Connect an existing user in the system to an external social network user
	 * 
	 * @return \Kaltura\Client\Type\Social
	 */
	function merge($token, $type)
	{
		$kparams = array();
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("social", "merge", "KalturaSocial", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSocial");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Social");
		return $resultObject;
	}

	/**
	 * Create a new user in the system using a provided external social token
	 * 
	 * @return \Kaltura\Client\Type\Social
	 */
	function register($partnerId, $token, $type, $email = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "email", $email);
		$this->client->queueServiceActionCall("social", "register", "KalturaSocial", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSocial");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Social");
		return $resultObject;
	}

	/**
	 * Disconnect an existing user in the system from its external social network user
	 * 
	 * @return \Kaltura\Client\Type\Social
	 */
	function unmerge($type)
	{
		$kparams = array();
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("social", "unmerge", "KalturaSocial", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSocial");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Social");
		return $resultObject;
	}

	/**
	 * Set the user social network’s configuration information
	 * 
	 * @return \Kaltura\Client\Type\SocialConfig
	 */
	function UpdateConfiguration(\Kaltura\Client\Type\SocialConfig $configuration)
	{
		$kparams = array();
		$this->client->addParam($kparams, "configuration", $configuration->toParams());
		$this->client->queueServiceActionCall("social", "UpdateConfiguration", "KalturaSocialConfig", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSocialConfig");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SocialConfig");
		return $resultObject;
	}
}
