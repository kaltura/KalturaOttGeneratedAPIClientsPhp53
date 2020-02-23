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
 * Category details
 * @package Kaltura
 * @subpackage Client
 */
class CategoryItem extends \Kaltura\Client\Type\CrudObject
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryItem';
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
		if(count($xml->parentCategoryId))
			$this->parentCategoryId = (string)$xml->parentCategoryId;
		if(count($xml->childCategoriesIds))
			$this->childCategoriesIds = (string)$xml->childCategoriesIds;
		if(count($xml->unifiedChannels))
		{
			if(empty($xml->unifiedChannels))
				$this->unifiedChannels = array();
			else
				$this->unifiedChannels = \Kaltura\Client\ParseUtils::unmarshalArray($xml->unifiedChannels, "KalturaUnifiedChannel");
		}
		if(count($xml->dynamicData))
		{
			if(empty($xml->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = \Kaltura\Client\ParseUtils::unmarshalMap($xml->dynamicData, "KalturaStringValue");
		}
	}
	/**
	 * Unique identifier for the category
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Category name
	 * @var string
	 */
	public $name = null;

	/**
	 * Category parent identifier
	 * @var int
	 * @readonly
	 */
	public $parentCategoryId = null;

	/**
	 * Comma separated list of child categories&#39; Ids.
	 * @var string
	 */
	public $childCategoriesIds = null;

	/**
	 * List of unified Channels.
	 * @var array<KalturaUnifiedChannel>
	 */
	public $unifiedChannels;

	/**
	 * Dynamic data
	 * @var array<string, KalturaStringValue>
	 */
	public $dynamicData;

}