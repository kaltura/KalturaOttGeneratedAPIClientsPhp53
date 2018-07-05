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
 * @package Kaltura
 * @subpackage Client
 */
class AssetStruct extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetStruct';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = \Kaltura\Client\ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->isProtected))
		{
			if(!empty($xml->isProtected))
				$this->isProtected = true;
			else
				$this->isProtected = false;
		}
		if(count($xml->metaIds))
			$this->metaIds = (string)$xml->metaIds;
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
	}
	/**
	 * Asset Struct id
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Asset struct name for the partner
	 * @var string
	 */
	public $name = null;

	/**
	 * Asset struct name for the partner
	 * @var array<KalturaTranslationToken>
	 */
	public $multilingualName;

	/**
	 * Asset Struct system name for the partner
	 * @var string
	 */
	public $systemName = null;

	/**
	 * Is the Asset Struct protected by the system
	 * @var bool
	 */
	public $isProtected = null;

	/**
	 * A list of comma separated meta ids associated with this asset struct, returned according to the order.
	 * @var string
	 */
	public $metaIds = null;

	/**
	 * Specifies when was the Asset Struct was created. Date and time represented as epoch.
	 * @var int
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the Asset Struct last updated. Date and time represented as epoch.
	 * @var int
	 * @readonly
	 */
	public $updateDate = null;

}
