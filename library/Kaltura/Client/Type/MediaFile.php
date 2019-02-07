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
 * Media file details
 * @package Kaltura
 * @subpackage Client
 */
class MediaFile extends \Kaltura\Client\Type\AssetFile
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaFile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->assetId))
			$this->assetId = (int)$xml->assetId;
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->type))
			$this->type = (string)$xml->type;
		if(count($xml->duration))
			$this->duration = (string)$xml->duration;
		if(count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(count($xml->billingType))
			$this->billingType = (string)$xml->billingType;
		if(count($xml->quality))
			$this->quality = (string)$xml->quality;
		if(count($xml->handlingType))
			$this->handlingType = (string)$xml->handlingType;
		if(count($xml->cdnName))
			$this->cdnName = (string)$xml->cdnName;
		if(count($xml->cdnCode))
			$this->cdnCode = (string)$xml->cdnCode;
		if(count($xml->altCdnCode))
			$this->altCdnCode = (string)$xml->altCdnCode;
		if(count($xml->ppvModules) && !empty($xml->ppvModules))
			$this->ppvModules = \Kaltura\Client\ParseUtils::unmarshalObject($xml->ppvModules, "KalturaStringValueArray");
		if(count($xml->productCode))
			$this->productCode = (string)$xml->productCode;
		if(count($xml->fileSize))
			$this->fileSize = (string)$xml->fileSize;
	}
	/**
	 * Unique identifier for the asset
	 * @var int
	 */
	public $assetId = null;

	/**
	 * File unique identifier
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Device types as defined in the system
	 * @var string
	 */
	public $type = null;

	/**
	 * Duration of the media file
	 * @var int
	 */
	public $duration = null;

	/**
	 * External identifier for the media file
	 * @var string
	 */
	public $externalId = null;

	/**
	 * Billing type
	 * @var string
	 */
	public $billingType = null;

	/**
	 * Quality
	 * @var string
	 */
	public $quality = null;

	/**
	 * Handling type
	 * @var string
	 */
	public $handlingType = null;

	/**
	 * CDN name
	 * @var string
	 */
	public $cdnName = null;

	/**
	 * CDN code
	 * @var string
	 */
	public $cdnCode = null;

	/**
	 * Alt CDN code
	 * @var string
	 */
	public $altCdnCode = null;

	/**
	 * PPV Module
	 * @var \Kaltura\Client\Type\StringValueArray
	 */
	public $ppvModules;

	/**
	 * Product code
	 * @var string
	 */
	public $productCode = null;

	/**
	 * File size
	 * @var int
	 */
	public $fileSize = null;

}
