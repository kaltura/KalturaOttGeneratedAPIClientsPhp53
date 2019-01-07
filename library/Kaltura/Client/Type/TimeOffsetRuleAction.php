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
// Copyright (C) 2006-2019  Kaltura Inc.
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
 * Time offset action
 * @package Kaltura
 * @subpackage Client
 */
abstract class TimeOffsetRuleAction extends \Kaltura\Client\Type\AssetRuleAction
{
	public function getKalturaObjectType()
	{
		return 'KalturaTimeOffsetRuleAction';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->offset))
			$this->offset = (int)$xml->offset;
		if(count($xml->timeZone))
		{
			if(!empty($xml->timeZone))
				$this->timeZone = true;
			else
				$this->timeZone = false;
		}
	}
	/**
	 * Offset in seconds
	 * @var int
	 */
	public $offset = null;

	/**
	 * Indicates whether to add time zone offset to the time
	 * @var bool
	 */
	public $timeZone = null;

}
