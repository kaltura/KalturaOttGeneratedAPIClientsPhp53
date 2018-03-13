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
 * Subscription details
 * @package Kaltura
 * @subpackage Client
 */
class Subscription extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSubscription';
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
		if(count($xml->fileTypes))
		{
			if(empty($xml->fileTypes))
				$this->fileTypes = array();
			else
				$this->fileTypes = \Kaltura\Client\ParseUtils::unmarshalArray($xml->fileTypes, "KalturaIntegerValue");
		}
		if(count($xml->isRenewable))
		{
			if(!empty($xml->isRenewable))
				$this->isRenewable = true;
			else
				$this->isRenewable = false;
		}
		if(count($xml->renewalsNumber))
			$this->renewalsNumber = (int)$xml->renewalsNumber;
		if(count($xml->isInfiniteRenewal))
		{
			if(!empty($xml->isInfiniteRenewal))
				$this->isInfiniteRenewal = true;
			else
				$this->isInfiniteRenewal = false;
		}
		if(count($xml->price) && !empty($xml->price))
			$this->price = \Kaltura\Client\ParseUtils::unmarshalObject($xml->price, "KalturaPriceDetails");
		if(count($xml->discountModule) && !empty($xml->discountModule))
			$this->discountModule = \Kaltura\Client\ParseUtils::unmarshalObject($xml->discountModule, "KalturaDiscountModule");
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->multilingualName) && !empty($xml->multilingualName))
			$this->multilingualName = \Kaltura\Client\ParseUtils::unmarshalObject($xml->multilingualName, "KalturaMultilingualString");
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->multilingualDescription) && !empty($xml->multilingualDescription))
			$this->multilingualDescription = \Kaltura\Client\ParseUtils::unmarshalObject($xml->multilingualDescription, "KalturaMultilingualString");
		if(count($xml->mediaId))
			$this->mediaId = (int)$xml->mediaId;
		if(count($xml->prorityInOrder))
			$this->prorityInOrder = (string)$xml->prorityInOrder;
		if(count($xml->pricePlanIds))
			$this->pricePlanIds = (string)$xml->pricePlanIds;
		if(count($xml->previewModule) && !empty($xml->previewModule))
			$this->previewModule = \Kaltura\Client\ParseUtils::unmarshalObject($xml->previewModule, "KalturaPreviewModule");
		if(count($xml->householdLimitationsId))
			$this->householdLimitationsId = (int)$xml->householdLimitationsId;
		if(count($xml->gracePeriodMinutes))
			$this->gracePeriodMinutes = (int)$xml->gracePeriodMinutes;
		if(count($xml->premiumServices))
		{
			if(empty($xml->premiumServices))
				$this->premiumServices = array();
			else
				$this->premiumServices = \Kaltura\Client\ParseUtils::unmarshalArray($xml->premiumServices, "KalturaPremiumService");
		}
		if(count($xml->maxViewsNumber))
			$this->maxViewsNumber = (int)$xml->maxViewsNumber;
		if(count($xml->viewLifeCycle))
			$this->viewLifeCycle = (int)$xml->viewLifeCycle;
		if(count($xml->waiverPeriod))
			$this->waiverPeriod = (int)$xml->waiverPeriod;
		if(count($xml->isWaiverEnabled))
		{
			if(!empty($xml->isWaiverEnabled))
				$this->isWaiverEnabled = true;
			else
				$this->isWaiverEnabled = false;
		}
		if(count($xml->userTypes))
		{
			if(empty($xml->userTypes))
				$this->userTypes = array();
			else
				$this->userTypes = \Kaltura\Client\ParseUtils::unmarshalArray($xml->userTypes, "KalturaOTTUserType");
		}
		if(count($xml->couponsGroups))
		{
			if(empty($xml->couponsGroups))
				$this->couponsGroups = array();
			else
				$this->couponsGroups = \Kaltura\Client\ParseUtils::unmarshalArray($xml->couponsGroups, "KalturaCouponsGroup");
		}
		if(count($xml->productCodes))
		{
			if(empty($xml->productCodes))
				$this->productCodes = array();
			else
				$this->productCodes = \Kaltura\Client\ParseUtils::unmarshalArray($xml->productCodes, "KalturaProductCode");
		}
		if(count($xml->dependencyType))
			$this->dependencyType = (string)$xml->dependencyType;
		if(count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
	}
	/**
	 * Subscription identifier
	 * @var string
	 */
	public $id = null;

	/**
	 * A list of channels associated with this subscription
	 * @var array<KalturaBaseChannel>
	 */
	public $channels;

	/**
	 * The first date the subscription is available for purchasing
	 * @var int
	 */
	public $startDate = null;

	/**
	 * The last date the subscription is available for purchasing
	 * @var int
	 */
	public $endDate = null;

	/**
	 * A list of file types identifiers that are supported in this subscription
	 * @var array<KalturaIntegerValue>
	 */
	public $fileTypes;

	/**
	 * Denotes whether or not this subscription can be renewed
	 * @var bool
	 */
	public $isRenewable = null;

	/**
	 * Defines the number of times this subscription will be renewed
	 * @var int
	 */
	public $renewalsNumber = null;

	/**
	 * Indicates whether the subscription will renew forever
	 * @var bool
	 */
	public $isInfiniteRenewal = null;

	/**
	 * The price of the subscription
	 * @var \Kaltura\Client\Type\PriceDetails
	 */
	public $price;

	/**
	 * The internal discount module for the subscription
	 * @var \Kaltura\Client\Type\DiscountModule
	 */
	public $discountModule;

	/**
	 * Name of the subscription
	 * @var string
	 */
	public $name = null;

	/**
	 * Name of the subscription
	 * @var \Kaltura\Client\Type\MultilingualString
	 */
	public $multilingualName;

	/**
	 * description of the subscription
	 * @var string
	 */
	public $description = null;

	/**
	 * description of the subscription
	 * @var \Kaltura\Client\Type\MultilingualString
	 */
	public $multilingualDescription;

	/**
	 * Identifier of the media associated with the subscription
	 * @var int
	 */
	public $mediaId = null;

	/**
	 * Subscription order (when returned in methods that retrieve subscriptions)
	 * @var int
	 */
	public $prorityInOrder = null;

	/**
	 * Comma separated subscription price plan IDs
	 * @var string
	 */
	public $pricePlanIds = null;

	/**
	 * Subscription preview module
	 * @var \Kaltura\Client\Type\PreviewModule
	 */
	public $previewModule;

	/**
	 * The household limitation module identifier associated with this subscription
	 * @var int
	 */
	public $householdLimitationsId = null;

	/**
	 * The subscription grace period in minutes
	 * @var int
	 */
	public $gracePeriodMinutes = null;

	/**
	 * List of premium services included in the subscription
	 * @var array<KalturaPremiumService>
	 */
	public $premiumServices;

	/**
	 * The maximum number of times an item in this usage module can be viewed
	 * @var int
	 */
	public $maxViewsNumber = null;

	/**
	 * The amount time an item is available for viewing since a user started watching the item
	 * @var int
	 */
	public $viewLifeCycle = null;

	/**
	 * Time period during which the end user can waive his rights to cancel a purchase. When the time period is passed, the purchase can no longer be cancelled
	 * @var int
	 */
	public $waiverPeriod = null;

	/**
	 * Indicates whether or not the end user has the right to waive his rights to cancel a purchase
	 * @var bool
	 */
	public $isWaiverEnabled = null;

	/**
	 * List of permitted user types for the subscription
	 * @var array<KalturaOTTUserType>
	 */
	public $userTypes;

	/**
	 * List of Coupons group
	 * @var array<KalturaCouponsGroup>
	 */
	public $couponsGroups;

	/**
	 * List of Subscription product codes
	 * @var array<KalturaProductCode>
	 */
	public $productCodes;

	/**
	 * Dependency Type
	 * @var \Kaltura\Client\Enum\SubscriptionDependencyType
	 */
	public $dependencyType = null;

	/**
	 * External ID
	 * @var string
	 */
	public $externalId = null;

}
