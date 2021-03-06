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
 * Promotion
 * @package Kaltura
 * @subpackage Client
 */
class Promotion extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPromotion';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->discountModuleId))
			$this->discountModuleId = (string)$xml->discountModuleId;
		if(count($xml->conditions))
		{
			if(empty($xml->conditions))
				$this->conditions = array();
			else
				$this->conditions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->conditions, "KalturaCondition");
		}
		if(count($xml->numberOfRecurring))
			$this->numberOfRecurring = (int)$xml->numberOfRecurring;
	}
	/**
	 * The discount module id that is promoted to the user
	 * @var int
	 */
	public $discountModuleId = null;

	/**
	 * These conditions define the Promotion that applies on
	 * @var array<KalturaCondition>
	 */
	public $conditions;

	/**
	 * the numer of recurring for this promotion
	 * @var int
	 */
	public $numberOfRecurring = null;

}
