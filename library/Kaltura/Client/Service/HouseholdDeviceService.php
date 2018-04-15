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
class HouseholdDeviceService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add device to household
	 * 
	 * @return \Kaltura\Client\Type\HouseholdDevice
	 */
	function add(\Kaltura\Client\Type\HouseholdDevice $device)
	{
		$kparams = array();
		$this->client->addParam($kparams, "device", $device->toParams());
		$this->client->queueServiceActionCall("householddevice", "add", "KalturaHouseholdDevice", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHouseholdDevice");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\HouseholdDevice");
		return $resultObject;
	}

	/**
	 * Registers a device to a household using pin code
	 * 
	 * @return \Kaltura\Client\Type\HouseholdDevice
	 */
	function addByPin($deviceName, $pin)
	{
		$kparams = array();
		$this->client->addParam($kparams, "deviceName", $deviceName);
		$this->client->addParam($kparams, "pin", $pin);
		$this->client->queueServiceActionCall("householddevice", "addByPin", "KalturaHouseholdDevice", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHouseholdDevice");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\HouseholdDevice");
		return $resultObject;
	}

	/**
	 * Removes a device from household
	 * 
	 * @return bool
	 */
	function delete($udid)
	{
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("householddevice", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Generates device pin to use when adding a device to household by pin
	 * 
	 * @return \Kaltura\Client\Type\DevicePin
	 */
	function generatePin($udid, $brandId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "brandId", $brandId);
		$this->client->queueServiceActionCall("householddevice", "generatePin", "KalturaDevicePin", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDevicePin");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\DevicePin");
		return $resultObject;
	}

	/**
	 * Returns device registration status to the supplied household
	 * 
	 * @return \Kaltura\Client\Type\HouseholdDevice
	 */
	function get()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("householddevice", "get", "KalturaHouseholdDevice", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHouseholdDevice");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\HouseholdDevice");
		return $resultObject;
	}

	/**
	 * Returns the devices within the household
	 * 
	 * @return \Kaltura\Client\Type\HouseholdDeviceListResponse
	 */
	function listAction(\Kaltura\Client\Type\HouseholdDeviceFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("householddevice", "list", "KalturaHouseholdDeviceListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHouseholdDeviceListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\HouseholdDeviceListResponse");
		return $resultObject;
	}

	/**
	 * Update the name of the device by UDID
	 * 
	 * @return \Kaltura\Client\Type\HouseholdDevice
	 */
	function update($udid, \Kaltura\Client\Type\HouseholdDevice $device)
	{
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "device", $device->toParams());
		$this->client->queueServiceActionCall("householddevice", "update", "KalturaHouseholdDevice", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHouseholdDevice");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\HouseholdDevice");
		return $resultObject;
	}

	/**
	 * Update the name of the device by UDID
	 * 
	 * @return bool
	 */
	function updateStatus($udid, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("householddevice", "updateStatus", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}
}
