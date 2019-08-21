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
 * Coupon details container
 * @package Kaltura
 * @subpackage Client
 */
class Coupon extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCoupon';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->couponsGroup) && !empty($xml->couponsGroup))
			$this->couponsGroup = \Kaltura\Client\ParseUtils::unmarshalObject($xml->couponsGroup, "KalturaCouponsGroup");
		if(count($xml->status))
			$this->status = (string)$xml->status;
		if(count($xml->totalUses))
			$this->totalUses = (int)$xml->totalUses;
		if(count($xml->leftUses))
			$this->leftUses = (int)$xml->leftUses;
		if(count($xml->couponCode))
			$this->couponCode = (string)$xml->couponCode;
	}
	/**
	 * Coupons group details
	 * @var \Kaltura\Client\Type\CouponsGroup
	 * @readonly
	 */
	public $couponsGroup;

	/**
	 * Coupon status
	 * @var \Kaltura\Client\Enum\CouponStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Total available coupon uses
	 * @var int
	 * @readonly
	 */
	public $totalUses = null;

	/**
	 * Left coupon uses
	 * @var int
	 * @readonly
	 */
	public $leftUses = null;

	/**
	 * Coupon code
	 * @var string
	 * @readonly
	 */
	public $couponCode = null;

}
