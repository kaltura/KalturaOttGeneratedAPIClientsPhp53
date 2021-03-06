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
 * Meta filter
 * @package Kaltura
 * @subpackage Client
 */
class MetaFilter extends \Kaltura\Client\Type\Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaMetaFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(count($xml->assetStructIdEqual))
			$this->assetStructIdEqual = (string)$xml->assetStructIdEqual;
		if(count($xml->dataTypeEqual))
			$this->dataTypeEqual = (string)$xml->dataTypeEqual;
		if(count($xml->multipleValueEqual))
		{
			if(!empty($xml->multipleValueEqual) && $xml->multipleValueEqual != 'false')
				$this->multipleValueEqual = true;
			else
				$this->multipleValueEqual = false;
		}
	}
	/**
	 * Comma separated identifiers
	 * @var string
	 */
	public $idIn = null;

	/**
	 * Filter Metas that are contained in a specific asset struct
	 * @var int
	 */
	public $assetStructIdEqual = null;

	/**
	 * Meta data type to filter by
	 * @var \Kaltura\Client\Enum\MetaDataType
	 */
	public $dataTypeEqual = null;

	/**
	 * Filter metas by multipleValueEqual value
	 * @var bool
	 */
	public $multipleValueEqual = null;

}
