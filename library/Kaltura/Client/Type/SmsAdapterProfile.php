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
 * Sms adapter profile
 * @package Kaltura
 * @subpackage Client
 */
class SmsAdapterProfile extends \Kaltura\Client\Type\CrudObject
{
	public function getKalturaObjectType()
	{
		return 'KalturaSmsAdapterProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->adapterUrl))
			$this->adapterUrl = (string)$xml->adapterUrl;
		if(count($xml->sharedSecret))
			$this->sharedSecret = (string)$xml->sharedSecret;
		if(count($xml->isActive))
			$this->isActive = (int)$xml->isActive;
		if(count($xml->settings))
		{
			if(empty($xml->settings))
				$this->settings = array();
			else
				$this->settings = \Kaltura\Client\ParseUtils::unmarshalMap($xml->settings, "KalturaStringValue");
		}
		if(count($xml->externalIdentifier))
			$this->externalIdentifier = (string)$xml->externalIdentifier;
		if(count($xml->name))
			$this->name = (string)$xml->name;
	}
	/**
	 * id
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * adapter url
	 * @var string
	 */
	public $adapterUrl = null;

	/**
	 * Shared Secret
	 * @var string
	 */
	public $sharedSecret = null;

	/**
	 * SSO Adapter is active status
	 * @var int
	 */
	public $isActive = null;

	/**
	 * SSO Adapter extra parameters
	 * @var array<string, KalturaStringValue>
	 */
	public $settings;

	/**
	 * SSO Adapter external identifier
	 * @var string
	 */
	public $externalIdentifier = null;

	/**
	 * Name
	 * @var string
	 */
	public $name = null;

}
