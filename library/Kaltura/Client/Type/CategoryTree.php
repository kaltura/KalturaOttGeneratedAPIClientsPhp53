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
 * Category details
 * @package Kaltura
 * @subpackage Client
 */
class CategoryTree extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryTree';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = \Kaltura\Client\ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(count($xml->children))
		{
			if(empty($xml->children))
				$this->children = array();
			else
				$this->children = \Kaltura\Client\ParseUtils::unmarshalArray($xml->children, "KalturaCategoryTree");
		}
		if(count($xml->unifiedChannels))
		{
			if(empty($xml->unifiedChannels))
				$this->unifiedChannels = array();
			else
				$this->unifiedChannels = \Kaltura\Client\ParseUtils::unmarshalArray($xml->unifiedChannels, "KalturaUnifiedChannelInfo");
		}
		if(count($xml->dynamicData))
		{
			if(empty($xml->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = \Kaltura\Client\ParseUtils::unmarshalMap($xml->dynamicData, "KalturaStringValue");
		}
		if(count($xml->images))
		{
			if(empty($xml->images))
				$this->images = array();
			else
				$this->images = \Kaltura\Client\ParseUtils::unmarshalArray($xml->images, "KalturaImage");
		}
		if(count($xml->isActive))
		{
			if(!empty($xml->isActive) && $xml->isActive != 'false')
				$this->isActive = true;
			else
				$this->isActive = false;
		}
		if(count($xml->startDateInSeconds))
			$this->startDateInSeconds = (string)$xml->startDateInSeconds;
		if(count($xml->endDateInSeconds))
			$this->endDateInSeconds = (string)$xml->endDateInSeconds;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->versionId))
			$this->versionId = (string)$xml->versionId;
		if(count($xml->virtualAssetId))
			$this->virtualAssetId = (string)$xml->virtualAssetId;
		if(count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
	}
	/**
	 * Unique identifier for the category item
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Category name
	 * @var string
	 * @readonly
	 */
	public $name = null;

	/**
	 * Category name
	 * @var array<KalturaTranslationToken>
	 */
	public $multilingualName;

	/**
	 * List of category tree
	 * @var array<KalturaCategoryTree>
	 * @readonly
	 */
	public $children;

	/**
	 * List of unified Channels.
	 * @var array<KalturaUnifiedChannelInfo>
	 */
	public $unifiedChannels;

	/**
	 * Dynamic data
	 * @var array<string, KalturaStringValue>
	 */
	public $dynamicData;

	/**
	 * Category images
	 * @var array<KalturaImage>
	 */
	public $images;

	/**
	 * Category active status
	 * @var bool
	 */
	public $isActive = null;

	/**
	 * Start date in seconds
	 * @var int
	 */
	public $startDateInSeconds = null;

	/**
	 * End date in seconds
	 * @var int
	 */
	public $endDateInSeconds = null;

	/**
	 * Category type
	 * @var string
	 * @insertonly
	 */
	public $type = null;

	/**
	 * Unique identifier for the category version
	 * @var int
	 * @readonly
	 */
	public $versionId = null;

	/**
	 * Virtual asset id
	 * @var int
	 * @readonly
	 */
	public $virtualAssetId = null;

	/**
	 * Category reference identifier
	 * @var string
	 * @readonly
	 */
	public $referenceId = null;

}
