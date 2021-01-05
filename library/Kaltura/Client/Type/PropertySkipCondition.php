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
 * Skips current request according to condition on given property
 * @package Kaltura
 * @subpackage Client
 */
class PropertySkipCondition extends \Kaltura\Client\Type\SkipCondition
{
	public function getKalturaObjectType()
	{
		return 'KalturaPropertySkipCondition';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->propertyPath))
			$this->propertyPath = (string)$xml->propertyPath;
		if(count($xml->operator))
			$this->operator = (string)$xml->operator;
		if(count($xml->value))
			$this->value = (string)$xml->value;
	}
	/**
	 * The property path on which the condition is checked
	 * @var string
	 */
	public $propertyPath = null;

	/**
	 * The operator that applies the check to the condition
	 * @var \Kaltura\Client\Enum\SkipOperators
	 */
	public $operator = null;

	/**
	 * The value on which the condition is checked
	 * @var string
	 */
	public $value = null;

}
