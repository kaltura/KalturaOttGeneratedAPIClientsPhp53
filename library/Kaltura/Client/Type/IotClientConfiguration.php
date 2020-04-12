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
// Copyright (C) 2006-2020  Kaltura Inc.
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
 * Iot client Configuration
 * @package Kaltura
 * @subpackage Client
 */
class IotClientConfiguration extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaIotClientConfiguration';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->announcementTopic))
			$this->announcementTopic = (string)$xml->announcementTopic;
		if(count($xml->credentialsProvider) && !empty($xml->credentialsProvider))
			$this->credentialsProvider = \Kaltura\Client\ParseUtils::unmarshalObject($xml->credentialsProvider, "KalturaCredentialsProvider");
		if(count($xml->cognitoUserPool) && !empty($xml->cognitoUserPool))
			$this->cognitoUserPool = \Kaltura\Client\ParseUtils::unmarshalObject($xml->cognitoUserPool, "KalturaCognitoUserPool");
		if(count($xml->json))
			$this->json = (string)$xml->json;
	}
	/**
	 * announcementTopic
	 * @var string
	 */
	public $announcementTopic = null;

	/**
	 * KalturaCredentialsProvider
	 * @var \Kaltura\Client\Type\CredentialsProvider
	 */
	public $credentialsProvider;

	/**
	 * CognitoUserPool
	 * @var \Kaltura\Client\Type\CognitoUserPool
	 */
	public $cognitoUserPool;

	/**
	 * json
	 * @var string
	 */
	public $json = null;

}