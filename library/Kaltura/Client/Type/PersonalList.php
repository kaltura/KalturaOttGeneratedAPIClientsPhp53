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
 * @package Kaltura
 * @subpackage Client
 */
class PersonalList extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPersonalList';
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
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->ksql))
			$this->ksql = (string)$xml->ksql;
		if(count($xml->partnerListType))
			$this->partnerListType = (int)$xml->partnerListType;
	}
	/**
	 * Id
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Name
	 * @var string
	 */
	public $name = null;

	/**
	 * Create Date
	 * @var int
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Search assets using dynamic criteria. Provided collection of nested expressions with key, comparison operators, value, and logical conjunction.
	 *             Possible keys: any Tag or Meta defined in the system and the following reserved keys: start_date, end_date. 
	 *             epg_id, media_id - for specific asset IDs.
	 *             geo_block - only valid value is &quot;true&quot;: When enabled, only assets that are not restricted to the user by geo-block rules will return.
	 *             parental_rules - only valid value is &quot;true&quot;: When enabled, only assets that the user doesn&#39;t need to provide PIN code will return.
	 *             user_interests - only valid value is &quot;true&quot;. When enabled, only assets that the user defined as his interests (by tags and metas) will return.
	 *             epg_channel_id – the channel identifier of the EPG program.
	 *             entitled_assets - valid values: &quot;free&quot;, &quot;entitled&quot;, &quot;not_entitled&quot;, &quot;both&quot;. free - gets only free to watch assets. entitled - only those that the user is implicitly entitled to watch.
	 *             asset_type - valid values: &quot;media&quot;, &quot;epg&quot;, &quot;recording&quot; or any number that represents media type in group.
	 *             Comparison operators: for numerical fields =, &gt;, &gt;=, &lt;, &lt;=, : (in). 
	 *             For alpha-numerical fields =, != (not), ~ (like), !~, ^ (any word starts with), ^= (phrase starts with), + (exists), !+ (not exists).
	 *             Logical conjunction: and, or. 
	 *             Search values are limited to 20 characters each for the next operators: ~, !~, ^, ^=
	 *             (maximum length of entire filter is 4096 characters)
	 * @var string
	 */
	public $ksql = null;

	/**
	 * Partner List Type (optional)
	 * @var int
	 */
	public $partnerListType = null;

}
