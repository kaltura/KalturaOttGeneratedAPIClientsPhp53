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
// Copyright (C) 2006-2018  Kaltura Inc.
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
class ConfigurationGroupService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a new configuration group
	 * 
	 * @return \Kaltura\Client\Type\ConfigurationGroup
	 */
	function add(\Kaltura\Client\Type\ConfigurationGroup $configurationGroup)
	{
		$kparams = array();
		$this->client->addParam($kparams, "configurationGroup", $configurationGroup->toParams());
		$this->client->queueServiceActionCall("configurationgroup", "add", "KalturaConfigurationGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfigurationGroup");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ConfigurationGroup");
		return $resultObject;
	}

	/**
	 * Remove a configuration group, including its tags, device configurations and devices associations
	 * 
	 * @return bool
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("configurationgroup", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Return the configuration group details, including group identifiers, tags, and number of associated devices, and list of device configuration
	 * 
	 * @return \Kaltura\Client\Type\ConfigurationGroup
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("configurationgroup", "get", "KalturaConfigurationGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfigurationGroup");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ConfigurationGroup");
		return $resultObject;
	}

	/**
	 * Return the list of configuration groups
	 * 
	 * @return \Kaltura\Client\Type\ConfigurationGroupListResponse
	 */
	function listAction()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("configurationgroup", "list", "KalturaConfigurationGroupListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfigurationGroupListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ConfigurationGroupListResponse");
		return $resultObject;
	}

	/**
	 * Update configuration group name
	 * 
	 * @return \Kaltura\Client\Type\ConfigurationGroup
	 */
	function update($id, \Kaltura\Client\Type\ConfigurationGroup $configurationGroup)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "configurationGroup", $configurationGroup->toParams());
		$this->client->queueServiceActionCall("configurationgroup", "update", "KalturaConfigurationGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfigurationGroup");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ConfigurationGroup");
		return $resultObject;
	}
}
