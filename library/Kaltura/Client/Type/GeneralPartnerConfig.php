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
namespace Kaltura\Client\Type;

/**
 * Partner General configuration
 * @package Kaltura
 * @subpackage Client
 */
class GeneralPartnerConfig extends \Kaltura\Client\Type\PartnerConfiguration
{
	public function getKalturaObjectType()
	{
		return 'KalturaGeneralPartnerConfig';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->partnerName))
			$this->partnerName = (string)$xml->partnerName;
		if(count($xml->mainLanguage))
			$this->mainLanguage = (int)$xml->mainLanguage;
		if(count($xml->secondaryLanguages))
			$this->secondaryLanguages = (string)$xml->secondaryLanguages;
		if(count($xml->deleteMediaPolicy))
			$this->deleteMediaPolicy = (string)$xml->deleteMediaPolicy;
		if(count($xml->mainCurrency))
			$this->mainCurrency = (int)$xml->mainCurrency;
		if(count($xml->secondaryCurrencies))
			$this->secondaryCurrencies = (string)$xml->secondaryCurrencies;
		if(count($xml->downgradePolicy))
			$this->downgradePolicy = (string)$xml->downgradePolicy;
		if(count($xml->mailSettings))
			$this->mailSettings = (string)$xml->mailSettings;
		if(count($xml->dateFormat))
			$this->dateFormat = (string)$xml->dateFormat;
		if(count($xml->householdLimitationModule))
			$this->householdLimitationModule = (int)$xml->householdLimitationModule;
		if(count($xml->enableRegionFiltering))
		{
			if(!empty($xml->enableRegionFiltering) && $xml->enableRegionFiltering != 'false')
				$this->enableRegionFiltering = true;
			else
				$this->enableRegionFiltering = false;
		}
		if(count($xml->defaultRegion))
			$this->defaultRegion = (int)$xml->defaultRegion;
		if(count($xml->rollingDeviceData) && !empty($xml->rollingDeviceData))
			$this->rollingDeviceData = \Kaltura\Client\ParseUtils::unmarshalObject($xml->rollingDeviceData, "KalturaRollingDeviceRemovalData");
		if(count($xml->finishedPercentThreshold))
			$this->finishedPercentThreshold = (int)$xml->finishedPercentThreshold;
		if(count($xml->suspensionProfileInheritanceType))
			$this->suspensionProfileInheritanceType = (string)$xml->suspensionProfileInheritanceType;
	}
	/**
	 * Partner name
	 * @var string
	 */
	public $partnerName = null;

	/**
	 * Main metadata language
	 * @var int
	 */
	public $mainLanguage = null;

	/**
	 * A list of comma separated languages ids.
	 * @var string
	 */
	public $secondaryLanguages = null;

	/**
	 * Delete media policy
	 * @var \Kaltura\Client\Enum\DeleteMediaPolicy
	 */
	public $deleteMediaPolicy = null;

	/**
	 * Main currency
	 * @var int
	 */
	public $mainCurrency = null;

	/**
	 * A list of comma separated currency ids.
	 * @var string
	 */
	public $secondaryCurrencies = null;

	/**
	 * Downgrade policy
	 * @var \Kaltura\Client\Enum\DowngradePolicy
	 */
	public $downgradePolicy = null;

	/**
	 * Mail settings
	 * @var string
	 */
	public $mailSettings = null;

	/**
	 * Default Date Format for Email notifications (default should be: DD Month YYYY)
	 * @var string
	 */
	public $dateFormat = null;

	/**
	 * Household limitation&#160;module
	 * @var int
	 */
	public $householdLimitationModule = null;

	/**
	 * Enable Region Filtering
	 * @var bool
	 */
	public $enableRegionFiltering = null;

	/**
	 * Default Region
	 * @var int
	 */
	public $defaultRegion = null;

	/**
	 * Rolling Device Policy
	 * @var \Kaltura\Client\Type\RollingDeviceRemovalData
	 */
	public $rollingDeviceData;

	/**
	 * Finished PercentThreshold
	 * @var int
	 */
	public $finishedPercentThreshold = null;

	/**
	 * Suspension Profile Inheritance
	 * @var \Kaltura\Client\Enum\SuspensionProfileInheritanceType
	 */
	public $suspensionProfileInheritanceType = null;

}
