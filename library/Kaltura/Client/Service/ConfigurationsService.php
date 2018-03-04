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
// Copyright (C) 2006-2017  Kaltura Inc.
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
class ConfigurationsService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new device configuration to a configuration group
	 * 
	 * @return \Kaltura\Client\Type\Configurations
	 */
	function add(\Kaltura\Client\Type\Configurations $configurations)
	{
		$kparams = array();
		$this->client->addParam($kparams, "configurations", $configurations->toParams());
		$this->client->queueServiceActionCall("configurations", "add", "KalturaConfigurations", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfigurations");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Configurations");
		return $resultObject;
	}

	/**
	 * Delete a device configuration
	 * 
	 * @return bool
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("configurations", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Return the device configuration
	 * 
	 * @return \Kaltura\Client\Type\Configurations
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("configurations", "get", "KalturaConfigurations", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfigurations");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Configurations");
		return $resultObject;
	}

	/**
	 * Return a list of device configurations of a configuration group
	 * 
	 * @return \Kaltura\Client\Type\ConfigurationsListResponse
	 */
	function listAction(\Kaltura\Client\Type\ConfigurationsFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("configurations", "list", "KalturaConfigurationsListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfigurationsListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ConfigurationsListResponse");
		return $resultObject;
	}

	/**
	 * Return a device configuration applicable for a specific device (UDID), app name, software version, platform and optionally a configuration group’s tag
	 * 
	 * @return file
	 */
	function serveByDevice($applicationName, $clientVersion, $platform, $udid, $tag, $partnerId = 0)
	{
		$kparams = array();
		$this->client->addParam($kparams, "applicationName", $applicationName);
		$this->client->addParam($kparams, "clientVersion", $clientVersion);
		$this->client->addParam($kparams, "platform", $platform);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "tag", $tag);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall('configurations', 'serveByDevice', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	/**
	 * Update device configuration
	 * 
	 * @return \Kaltura\Client\Type\Configurations
	 */
	function update($id, \Kaltura\Client\Type\Configurations $configurations)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "configurations", $configurations->toParams());
		$this->client->queueServiceActionCall("configurations", "update", "KalturaConfigurations", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfigurations");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Configurations");
		return $resultObject;
	}
}
