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
 * If filter properties are empty will return all parameter type permission items
 * @package Kaltura
 * @subpackage Client
 */
class PermissionItemByParameterFilter extends \Kaltura\Client\Type\PermissionItemFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaPermissionItemByParameterFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->parameterEqual))
			$this->parameterEqual = (string)$xml->parameterEqual;
		if(count($xml->objectEqual))
			$this->objectEqual = (string)$xml->objectEqual;
	}
	/**
	 * Parameter name
	 * @var string
	 */
	public $parameterEqual = null;

	/**
	 * Parameter name
	 * @var string
	 */
	public $objectEqual = null;

}
