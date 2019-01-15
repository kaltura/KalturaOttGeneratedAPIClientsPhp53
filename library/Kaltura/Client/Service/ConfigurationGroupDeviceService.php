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
class ConfigurationGroupDeviceService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Associate a collection of devices to a configuration group. If a device is already associated to another group – old association is replaced
	 * 
	 * @return bool
	 */
	function add(\Kaltura\Client\Type\ConfigurationGroupDevice $configurationGroupDevice)
	{
		$kparams = array();
		$this->client->addParam($kparams, "configurationGroupDevice", $configurationGroupDevice->toParams());
		$this->client->queueServiceActionCall("configurationgroupdevice", "add", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Remove a device association
	 * 
	 * @return bool
	 */
	function delete($udid)
	{
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("configurationgroupdevice", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Return the configuration group to which a specific device is associated to
	 * 
	 * @return \Kaltura\Client\Type\ConfigurationGroupDevice
	 */
	function get($udid)
	{
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("configurationgroupdevice", "get", "KalturaConfigurationGroupDevice", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfigurationGroupDevice");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ConfigurationGroupDevice");
		return $resultObject;
	}

	/**
	 * Return the list of associated devices for a given configuration group
	 * 
	 * @return \Kaltura\Client\Type\ConfigurationGroupDeviceListResponse
	 */
	function listAction(\Kaltura\Client\Type\ConfigurationGroupDeviceFilter $filter, \Kaltura\Client\Type\FilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("configurationgroupdevice", "list", "KalturaConfigurationGroupDeviceListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfigurationGroupDeviceListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\ConfigurationGroupDeviceListResponse");
		return $resultObject;
	}
}
