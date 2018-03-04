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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DeviceReport extends \Kaltura\Client\Type\Report
{
	public function getKalturaObjectType()
	{
		return 'KalturaDeviceReport';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->configurationGroupId))
			$this->configurationGroupId = (string)$xml->configurationGroupId;
		if(count($xml->udid))
			$this->udid = (string)$xml->udid;
		if(count($xml->pushParameters) && !empty($xml->pushParameters))
			$this->pushParameters = \Kaltura\Client\ParseUtils::unmarshalObject($xml->pushParameters, "KalturaPushParams");
		if(count($xml->versionNumber))
			$this->versionNumber = (string)$xml->versionNumber;
		if(count($xml->versionPlatform))
			$this->versionPlatform = (string)$xml->versionPlatform;
		if(count($xml->versionAppName))
			$this->versionAppName = (string)$xml->versionAppName;
		if(count($xml->lastAccessIP))
			$this->lastAccessIP = (string)$xml->lastAccessIP;
		if(count($xml->lastAccessDate))
			$this->lastAccessDate = (string)$xml->lastAccessDate;
		if(count($xml->userAgent))
			$this->userAgent = (string)$xml->userAgent;
		if(count($xml->operationSystem))
			$this->operationSystem = (string)$xml->operationSystem;
	}
	/**
	 * Partner id
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * Configuration group id
	 * @var string
	 */
	public $configurationGroupId = null;

	/**
	 * Device UDID
	 * @var string
	 */
	public $udid = null;

	/**
	 * Push parameters
	 * @var \Kaltura\Client\Type\PushParams
	 */
	public $pushParameters;

	/**
	 * Version number
	 * @var string
	 */
	public $versionNumber = null;

	/**
	 * Version platform
	 * @var \Kaltura\Client\Enum\Platform
	 */
	public $versionPlatform = null;

	/**
	 * Version application name
	 * @var string
	 */
	public $versionAppName = null;

	/**
	 * Last access IP
	 * @var string
	 */
	public $lastAccessIP = null;

	/**
	 * Last access date
	 * @var int
	 */
	public $lastAccessDate = null;

	/**
	 * User agent
	 * @var string
	 */
	public $userAgent = null;

	/**
	 * Operation system
	 * @var string
	 */
	public $operationSystem = null;

}
