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
 * Engagement Adapter
 * @package Kaltura
 * @subpackage Client
 */
class EngagementAdapter extends \Kaltura\Client\Type\EngagementAdapterBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEngagementAdapter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->isActive))
		{
			if(!empty($xml->isActive) && $xml->isActive != 'false')
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(count($xml->adapterUrl))
			$this->adapterUrl = (string)$xml->adapterUrl;
		if(count($xml->providerUrl))
			$this->providerUrl = (string)$xml->providerUrl;
		if(count($xml->engagementAdapterSettings))
		{
			if(empty($xml->engagementAdapterSettings))
				$this->engagementAdapterSettings = array();
			else
				$this->engagementAdapterSettings = \Kaltura\Client\ParseUtils::unmarshalMap($xml->engagementAdapterSettings, "KalturaStringValue");
		}
		if(count($xml->sharedSecret))
			$this->sharedSecret = (string)$xml->sharedSecret;
	}
	/**
	 * Engagement adapter active status
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * Engagement adapter adapter URL
	 * @var string
	 */
	public $adapterUrl = null;

	/**
	 * Engagement provider adapter URL
	 * @var string
	 */
	public $providerUrl = null;

	/**
	 * Engagement adapter extra parameters
	 * @var array<string, KalturaStringValue>
	 */
	public $engagementAdapterSettings;

	/**
	 * Shared Secret
	 * @var string
	 * @readonly
	 */
	public $sharedSecret = null;

}
