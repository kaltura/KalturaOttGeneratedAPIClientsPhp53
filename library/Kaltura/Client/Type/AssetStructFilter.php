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
 * Filtering Asset Structs
 * @package Kaltura
 * @subpackage Client
 */
class AssetStructFilter extends \Kaltura\Client\Type\Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetStructFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(count($xml->metaIdEqual))
			$this->metaIdEqual = (string)$xml->metaIdEqual;
		if(count($xml->isProtectedEqual))
		{
			if(!empty($xml->isProtectedEqual) && $xml->isProtectedEqual != 'false')
				$this->isProtectedEqual = true;
			else
				$this->isProtectedEqual = false;
		}
	}
	/**
	 * Comma separated identifiers, id = 0 is identified as program AssetStruct
	 * @var string
	 */
	public $idIn = null;

	/**
	 * Filter Asset Structs that contain a specific meta id
	 * @var int
	 */
	public $metaIdEqual = null;

	/**
	 * Filter Asset Structs by isProtectedEqual value
	 * @var bool
	 */
	public $isProtectedEqual = null;

}
