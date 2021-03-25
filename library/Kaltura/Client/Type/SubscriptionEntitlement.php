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
 * KalturaSubscriptionEntitlement
 * @package Kaltura
 * @subpackage Client
 */
class SubscriptionEntitlement extends \Kaltura\Client\Type\Entitlement
{
	public function getKalturaObjectType()
	{
		return 'KalturaSubscriptionEntitlement';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->nextRenewalDate))
			$this->nextRenewalDate = (string)$xml->nextRenewalDate;
		if(count($xml->isRenewableForPurchase))
		{
			if(!empty($xml->isRenewableForPurchase) && $xml->isRenewableForPurchase != 'false')
				$this->isRenewableForPurchase = true;
			else
				$this->isRenewableForPurchase = false;
		}
		if(count($xml->isRenewable))
		{
			if(!empty($xml->isRenewable) && $xml->isRenewable != 'false')
				$this->isRenewable = true;
			else
				$this->isRenewable = false;
		}
		if(count($xml->isInGracePeriod))
		{
			if(!empty($xml->isInGracePeriod) && $xml->isInGracePeriod != 'false')
				$this->isInGracePeriod = true;
			else
				$this->isInGracePeriod = false;
		}
		if(count($xml->paymentGatewayId))
			$this->paymentGatewayId = (int)$xml->paymentGatewayId;
		if(count($xml->paymentMethodId))
			$this->paymentMethodId = (int)$xml->paymentMethodId;
		if(count($xml->scheduledSubscriptionId))
			$this->scheduledSubscriptionId = (string)$xml->scheduledSubscriptionId;
		if(count($xml->unifiedPaymentId))
			$this->unifiedPaymentId = (string)$xml->unifiedPaymentId;
		if(count($xml->isSuspended))
		{
			if(!empty($xml->isSuspended) && $xml->isSuspended != 'false')
				$this->isSuspended = true;
			else
				$this->isSuspended = false;
		}
	}
	/**
	 * The date of the next renewal (only for subscription)
	 * @var int
	 * @readonly
	 */
	public $nextRenewalDate = null;

	/**
	 * Indicates whether the subscription is renewable in this purchase (only for subscription)
	 * @var bool
	 * @readonly
	 */
	public $isRenewableForPurchase = null;

	/**
	 * Indicates whether a subscription is renewable (only for subscription)
	 * @var bool
	 * @readonly
	 */
	public $isRenewable = null;

	/**
	 * Indicates whether the user is currently in his grace period entitlement
	 * @var bool
	 * @readonly
	 */
	public $isInGracePeriod = null;

	/**
	 * Payment Gateway identifier
	 * @var int
	 */
	public $paymentGatewayId = null;

	/**
	 * Payment Method identifier
	 * @var int
	 */
	public $paymentMethodId = null;

	/**
	 * Scheduled Subscription Identifier
	 * @var int
	 * @readonly
	 */
	public $scheduledSubscriptionId = null;

	/**
	 * Unified payment identifier
	 * @var int
	 * @readonly
	 */
	public $unifiedPaymentId = null;

	/**
	 * Indicates if the subscription suspended
	 * @var bool
	 * @readonly
	 */
	public $isSuspended = null;

}
