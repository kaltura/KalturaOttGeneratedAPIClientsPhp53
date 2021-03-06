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
 * @package Kaltura
 * @subpackage Client
 */
class CategoryItemSearchFilter extends \Kaltura\Client\Type\CategoryItemFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryItemSearchFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->kSql))
			$this->kSql = (string)$xml->kSql;
		if(count($xml->rootOnly))
		{
			if(!empty($xml->rootOnly) && $xml->rootOnly != 'false')
				$this->rootOnly = true;
			else
				$this->rootOnly = false;
		}
		if(count($xml->typeEqual))
			$this->typeEqual = (string)$xml->typeEqual;
	}
	/**
	 * KSQL expression
	 * @var string
	 */
	public $kSql = null;

	/**
	 * Root only
	 * @var bool
	 */
	public $rootOnly = null;

	/**
	 * Indicates which category to return by their type.
	 * @var string
	 */
	public $typeEqual = null;

}
