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
 * Coupons group details
 * @package Kaltura
 * @subpackage Client
 */
class CouponsGroup extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCouponsGroup';
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
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->maxUsesNumber))
			$this->maxUsesNumber = (int)$xml->maxUsesNumber;
		if(count($xml->maxUsesNumberOnRenewableSub))
			$this->maxUsesNumberOnRenewableSub = (int)$xml->maxUsesNumberOnRenewableSub;
		if(count($xml->couponGroupType))
			$this->couponGroupType = (string)$xml->couponGroupType;
		if(count($xml->maxHouseholdUses))
			$this->maxHouseholdUses = (int)$xml->maxHouseholdUses;
		if(count($xml->discountId))
			$this->discountId = (string)$xml->discountId;
	}
	/**
	 * Coupon group identifier
	 * @var string
	 */
	public $id = null;

	/**
	 * Coupon group name
	 * @var string
	 */
	public $name = null;

	/**
	 * The first date the coupons in this coupons group are valid
	 * @var int
	 */
	public $startDate = null;

	/**
	 * The last date the coupons in this coupons group are valid
	 * @var int
	 */
	public $endDate = null;

	/**
	 * Maximum number of uses for each coupon in the group
	 * @var int
	 */
	public $maxUsesNumber = null;

	/**
	 * Maximum number of uses for each coupon in the group on a renewable subscription
	 * @var int
	 */
	public $maxUsesNumberOnRenewableSub = null;

	/**
	 * Type of the coupon group
	 * @var \Kaltura\Client\Enum\CouponGroupType
	 */
	public $couponGroupType = null;

	/**
	 * Maximum number of uses per household for each coupon in the group
	 * @var int
	 */
	public $maxHouseholdUses = null;

	/**
	 * Discount ID
	 * @var int
	 */
	public $discountId = null;

}
