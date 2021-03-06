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
 * @package Kaltura
 * @subpackage Client
 */
class PlaybackSource extends \Kaltura\Client\Type\MediaFile
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlaybackSource';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->format))
			$this->format = (string)$xml->format;
		if(count($xml->protocols))
			$this->protocols = (string)$xml->protocols;
		if(count($xml->drm))
		{
			if(empty($xml->drm))
				$this->drm = array();
			else
				$this->drm = \Kaltura\Client\ParseUtils::unmarshalArray($xml->drm, "KalturaDrmPlaybackPluginData");
		}
		if(count($xml->isTokenized))
		{
			if(!empty($xml->isTokenized) && $xml->isTokenized != 'false')
				$this->isTokenized = true;
			else
				$this->isTokenized = false;
		}
		if(count($xml->businessModuleId))
			$this->businessModuleId = (int)$xml->businessModuleId;
		if(count($xml->businessModuleType))
			$this->businessModuleType = (string)$xml->businessModuleType;
	}
	/**
	 * Source format according to delivery profile streamer type (applehttp, mpegdash etc.)
	 * @var string
	 */
	public $format = null;

	/**
	 * Comma separated string according to deliveryProfile media protocols (&#39;http,https&#39; etc.)
	 * @var string
	 */
	public $protocols = null;

	/**
	 * DRM data object containing relevant license URL ,scheme name and certificate
	 * @var array<KalturaDrmPlaybackPluginData>
	 */
	public $drm;

	/**
	 * Is Tokenized
	 * @var bool
	 */
	public $isTokenized = null;

	/**
	 * Business Module Id
	 * @var int
	 * @readonly
	 */
	public $businessModuleId = null;

	/**
	 * Business Module Type
	 * @var \Kaltura\Client\Enum\TransactionType
	 * @readonly
	 */
	public $businessModuleType = null;

}
