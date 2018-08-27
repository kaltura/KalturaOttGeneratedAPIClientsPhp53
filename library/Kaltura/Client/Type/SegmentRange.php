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
 * Segment that is based on a range of values
 * @package Kaltura
 * @subpackage Client
 */
class SegmentRange extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSegmentRange';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = \Kaltura\Client\ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(count($xml->gte))
			$this->gte = (float)$xml->gte;
		if(count($xml->gt))
			$this->gt = (float)$xml->gt;
		if(count($xml->lte))
			$this->lte = (float)$xml->lte;
		if(count($xml->lt))
			$this->lt = (float)$xml->lt;
	}
	/**
	 * Specific segment name
	 * @var string
	 * @readonly
	 */
	public $name = null;

	/**
	 * Specific segment name
	 * @var array<KalturaTranslationToken>
	 */
	public $multilingualName;

	/**
	 * Greater than or equals &gt;=
	 * @var float
	 */
	public $gte = null;

	/**
	 * Greater than &gt;
	 * @var float
	 */
	public $gt = null;

	/**
	 * Less than or equals
	 * @var float
	 */
	public $lte = null;

	/**
	 * Less than
	 * @var float
	 */
	public $lt = null;

}
