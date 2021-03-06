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
 * Collection
 * @package Kaltura
 * @subpackage Client
 */
class Collection extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCollection';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->channels))
		{
			if(empty($xml->channels))
				$this->channels = array();
			else
				$this->channels = \Kaltura\Client\ParseUtils::unmarshalArray($xml->channels, "KalturaBaseChannel");
		}
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->discountModule) && !empty($xml->discountModule))
			$this->discountModule = \Kaltura\Client\ParseUtils::unmarshalObject($xml->discountModule, "KalturaDiscountModule");
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->multilingualName))
		{
			if(empty($xml->multilingualName))
				$this->multilingualName = array();
			else
				$this->multilingualName = \Kaltura\Client\ParseUtils::unmarshalArray($xml->multilingualName, "KalturaTranslationToken");
		}
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->multilingualDescription))
		{
			if(empty($xml->multilingualDescription))
				$this->multilingualDescription = array();
			else
				$this->multilingualDescription = \Kaltura\Client\ParseUtils::unmarshalArray($xml->multilingualDescription, "KalturaTranslationToken");
		}
		if(count($xml->usageModule) && !empty($xml->usageModule))
			$this->usageModule = \Kaltura\Client\ParseUtils::unmarshalObject($xml->usageModule, "KalturaUsageModule");
		if(count($xml->couponsGroups))
		{
			if(empty($xml->couponsGroups))
				$this->couponsGroups = array();
			else
				$this->couponsGroups = \Kaltura\Client\ParseUtils::unmarshalArray($xml->couponsGroups, "KalturaCouponsGroup");
		}
		if(count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(count($xml->productCodes))
		{
			if(empty($xml->productCodes))
				$this->productCodes = array();
			else
				$this->productCodes = \Kaltura\Client\ParseUtils::unmarshalArray($xml->productCodes, "KalturaProductCode");
		}
		if(count($xml->priceDetailsId))
			$this->priceDetailsId = (string)$xml->priceDetailsId;
	}
	/**
	 * Collection identifier
	 * @var string
	 */
	public $id = null;

	/**
	 * A list of channels associated with this collection
	 * @var array<KalturaBaseChannel>
	 */
	public $channels;

	/**
	 * The first date the collection is available for purchasing
	 * @var int
	 */
	public $startDate = null;

	/**
	 * The last date the collection is available for purchasing
	 * @var int
	 */
	public $endDate = null;

	/**
	 * The internal discount module for the subscription
	 * @var \Kaltura\Client\Type\DiscountModule
	 */
	public $discountModule;

	/**
	 * Name of the subscription
	 * @var string
	 * @readonly
	 */
	public $name = null;

	/**
	 * Name of the subscription
	 * @var array<KalturaTranslationToken>
	 */
	public $multilingualName;

	/**
	 * description of the subscription
	 * @var string
	 * @readonly
	 */
	public $description = null;

	/**
	 * description of the subscription
	 * @var array<KalturaTranslationToken>
	 */
	public $multilingualDescription;

	/**
	 * Collection usage module
	 * @var \Kaltura\Client\Type\UsageModule
	 */
	public $usageModule;

	/**
	 * List of Coupons group
	 * @var array<KalturaCouponsGroup>
	 */
	public $couponsGroups;

	/**
	 * External ID
	 * @var string
	 */
	public $externalId = null;

	/**
	 * List of Collection product codes
	 * @var array<KalturaProductCode>
	 */
	public $productCodes;

	/**
	 * The ID of the price details associated with this collection
	 * @var int
	 */
	public $priceDetailsId = null;

}
