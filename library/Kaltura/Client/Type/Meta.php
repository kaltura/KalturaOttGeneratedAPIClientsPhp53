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
 * Asset meta
 * @package Kaltura
 * @subpackage Client
 */
class Meta extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaMeta';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->fieldName))
			$this->fieldName = (string)$xml->fieldName;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->assetType))
			$this->assetType = (string)$xml->assetType;
	}
	/**
	 * Meta name for the partner
	 * @var string
	 */
	public $name = null;

	/**
	 * Meta system field name
	 * @var \Kaltura\Client\Enum\MetaFieldName
	 */
	public $fieldName = null;

	/**
	 * Meta value type
	 * @var \Kaltura\Client\Enum\MetaType
	 */
	public $type = null;

	/**
	 * Asset type this meta is related to
	 * @var \Kaltura\Client\Enum\AssetType
	 */
	public $assetType = null;

}
