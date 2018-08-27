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
// Copyright (C) 2006-2018  Kaltura Inc.
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
 * Segmentation type which takes certain values of a tag/meta as segments
 * @package Kaltura
 * @subpackage Client
 */
class SegmentValues extends \Kaltura\Client\Type\BaseSegmentValue
{
	public function getKalturaObjectType()
	{
		return 'KalturaSegmentValues';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->source) && !empty($xml->source))
			$this->source = \Kaltura\Client\ParseUtils::unmarshalObject($xml->source, "KalturaSegmentSource");
		if(count($xml->threshold))
			$this->threshold = (int)$xml->threshold;
		if(count($xml->values))
		{
			if(empty($xml->values))
				$this->values = array();
			else
				$this->values = \Kaltura\Client\ParseUtils::unmarshalArray($xml->values, "KalturaSegmentValue");
		}
	}
	/**
	 * Segment values source
	 * @var \Kaltura\Client\Type\SegmentSource
	 */
	public $source;

	/**
	 * Threshold - minimum score to be met for all values in general (can be overriden)
	 * @var int
	 */
	public $threshold = null;

	/**
	 * List of segment values
	 * @var array<KalturaSegmentValue>
	 */
	public $values;

}