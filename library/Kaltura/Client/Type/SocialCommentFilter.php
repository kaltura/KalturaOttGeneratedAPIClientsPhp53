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
class SocialCommentFilter extends \Kaltura\Client\Type\Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaSocialCommentFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->assetIdEqual))
			$this->assetIdEqual = (string)$xml->assetIdEqual;
		if(count($xml->assetTypeEqual))
			$this->assetTypeEqual = (string)$xml->assetTypeEqual;
		if(count($xml->socialPlatformEqual))
			$this->socialPlatformEqual = (string)$xml->socialPlatformEqual;
		if(count($xml->createDateGreaterThan))
			$this->createDateGreaterThan = (string)$xml->createDateGreaterThan;
	}
	/**
	 * Asset ID to filter by
	 * @var int
	 */
	public $assetIdEqual = null;

	/**
	 * Asset type to filter by, currently only VOD (media)
	 * @var \Kaltura\Client\Enum\AssetType
	 */
	public $assetTypeEqual = null;

	/**
	 * Comma separated list of social actions to filter by
	 * @var \Kaltura\Client\Enum\SocialPlatform
	 */
	public $socialPlatformEqual = null;

	/**
	 * The create date from which to get the comments
	 * @var int
	 */
	public $createDateGreaterThan = null;

}
