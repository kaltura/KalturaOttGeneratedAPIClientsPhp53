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
 * Business module condition
 * @package Kaltura
 * @subpackage Client
 */
class BusinessModuleCondition extends \Kaltura\Client\Type\Condition
{
	public function getKalturaObjectType()
	{
		return 'KalturaBusinessModuleCondition';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->businessModuleType))
			$this->businessModuleType = (string)$xml->businessModuleType;
		if(count($xml->businessModuleId))
			$this->businessModuleId = (string)$xml->businessModuleId;
	}
	/**
	 * Business module type
	 * @var \Kaltura\Client\Enum\TransactionType
	 */
	public $businessModuleType = null;

	/**
	 * Business module ID
	 * @var int
	 */
	public $businessModuleId = null;

}
