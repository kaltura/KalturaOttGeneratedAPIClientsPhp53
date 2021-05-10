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
		if(count($xml->dataType))
			$this->dataType = (string)$xml->dataType;
		if(count($xml->multipleValue))
		{
			if(!empty($xml->multipleValue) && $xml->multipleValue != 'false')
				$this->multipleValue = true;
			else
				$this->multipleValue = false;
		}
		if(count($xml->isProtected))
		{
			if(!empty($xml->isProtected) && $xml->isProtected != 'false')
				$this->isProtected = true;
			else
				$this->isProtected = false;
		}
		if(count($xml->helpText))
			$this->helpText = (string)$xml->helpText;
		if(count($xml->features))
			$this->features = (string)$xml->features;
		if(count($xml->parentId))
			$this->parentId = (string)$xml->parentId;
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(count($xml->dynamicData))
		{
			if(empty($xml->dynamicData))
				$this->dynamicData = array();
			else
				$this->dynamicData = \Kaltura\Client\ParseUtils::unmarshalMap($xml->dynamicData, "KalturaStringValue");
		}
	}
	/**
	 * Meta id
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Meta name for the partner
	 * @var string
	 * @readonly
	 */
	public $name = null;

	/**
	 * Meta name for the partner
	 * @var array<KalturaTranslationToken>
	 */
	public $multilingualName;

	/**
	 * Meta system name for the partner
	 * @var string
	 * @insertonly
	 */
	public $systemName = null;

	/**
	 * Meta data type
	 * @var \Kaltura\Client\Enum\MetaDataType
	 * @insertonly
	 */
	public $dataType = null;

	/**
	 * Does the meta contain multiple values
	 * @var bool
	 */
	public $multipleValue = null;

	/**
	 * Is the meta protected by the system
	 * @var bool
	 * @insertonly
	 */
	public $isProtected = null;

	/**
	 * The help text of the meta to be displayed on the UI.
	 * @var string
	 */
	public $helpText = null;

	/**
	 * List of supported features
	 * @var string
	 */
	public $features = null;

	/**
	 * Parent meta id
	 * @var string
	 */
	public $parentId = null;

	/**
	 * Specifies when was the meta created. Date and time represented as epoch.
	 * @var int
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the meta last updated. Date and time represented as epoch.
	 * @var int
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * Dynamic data
	 * @var array<string, KalturaStringValue>
	 */
	public $dynamicData;

}
