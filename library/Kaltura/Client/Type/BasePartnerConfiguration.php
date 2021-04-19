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
 * @package Kaltura
 * @subpackage Client
 */
class BasePartnerConfiguration extends \Kaltura\Client\Type\PartnerConfiguration
{
	public function getKalturaObjectType()
	{
		return 'KalturaBasePartnerConfiguration';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->useStartDate))
		{
			if(!empty($xml->useStartDate) && $xml->useStartDate != 'false')
				$this->useStartDate = true;
			else
				$this->useStartDate = false;
		}
		if(count($xml->getOnlyActiveAssets))
		{
			if(!empty($xml->getOnlyActiveAssets) && $xml->getOnlyActiveAssets != 'false')
				$this->getOnlyActiveAssets = true;
			else
				$this->getOnlyActiveAssets = false;
		}
		if(count($xml->shouldSupportSingleLogin))
		{
			if(!empty($xml->shouldSupportSingleLogin) && $xml->shouldSupportSingleLogin != 'false')
				$this->shouldSupportSingleLogin = true;
			else
				$this->shouldSupportSingleLogin = false;
		}
		if(count($xml->ksExpirationSeconds))
			$this->ksExpirationSeconds = (string)$xml->ksExpirationSeconds;
		if(count($xml->anonymousKSExpirationSeconds))
			$this->anonymousKSExpirationSeconds = (string)$xml->anonymousKSExpirationSeconds;
		if(count($xml->refreshTokenExpirationSeconds))
			$this->refreshTokenExpirationSeconds = (string)$xml->refreshTokenExpirationSeconds;
		if(count($xml->isRefreshTokenExtendable))
		{
			if(!empty($xml->isRefreshTokenExtendable) && $xml->isRefreshTokenExtendable != 'false')
				$this->isRefreshTokenExtendable = true;
			else
				$this->isRefreshTokenExtendable = false;
		}
		if(count($xml->refreshExpirationForPinLoginSeconds))
			$this->refreshExpirationForPinLoginSeconds = (string)$xml->refreshExpirationForPinLoginSeconds;
		if(count($xml->isSwitchingUsersAllowed))
		{
			if(!empty($xml->isSwitchingUsersAllowed) && $xml->isSwitchingUsersAllowed != 'false')
				$this->isSwitchingUsersAllowed = true;
			else
				$this->isSwitchingUsersAllowed = false;
		}
		if(count($xml->tokenKeyFormat))
			$this->tokenKeyFormat = (string)$xml->tokenKeyFormat;
		if(count($xml->appTokenKeyFormat))
			$this->appTokenKeyFormat = (string)$xml->appTokenKeyFormat;
		if(count($xml->appTokenSessionMaxDurationSeconds))
			$this->appTokenSessionMaxDurationSeconds = (int)$xml->appTokenSessionMaxDurationSeconds;
		if(count($xml->appTokenMaxExpirySeconds))
			$this->appTokenMaxExpirySeconds = (int)$xml->appTokenMaxExpirySeconds;
		if(count($xml->userSessionsKeyFormat))
			$this->userSessionsKeyFormat = (string)$xml->userSessionsKeyFormat;
		if(count($xml->revokedKsMaxTtlSeconds))
			$this->revokedKsMaxTtlSeconds = (int)$xml->revokedKsMaxTtlSeconds;
		if(count($xml->mediaPrepAccountId))
			$this->mediaPrepAccountId = (int)$xml->mediaPrepAccountId;
		if(count($xml->fairplayCertificate))
			$this->fairplayCertificate = (string)$xml->fairplayCertificate;
	}
	/**
	 * UseStartDate
	 * @var bool
	 */
	public $useStartDate = null;

	/**
	 * GetOnlyActiveAssets
	 * @var bool
	 */
	public $getOnlyActiveAssets = null;

	/**
	 * ShouldSupportSingleLogin
	 * @var bool
	 */
	public $shouldSupportSingleLogin = null;

	/**
	 * KSExpirationSeconds
	 * @var int
	 */
	public $ksExpirationSeconds = null;

	/**
	 * AnonymousKSExpirationSeconds
	 * @var int
	 */
	public $anonymousKSExpirationSeconds = null;

	/**
	 * RefreshTokenExpirationSeconds
	 * @var int
	 */
	public $refreshTokenExpirationSeconds = null;

	/**
	 * IsRefreshTokenExtendable
	 * @var bool
	 */
	public $isRefreshTokenExtendable = null;

	/**
	 * RefreshExpirationForPinLoginSeconds
	 * @var int
	 */
	public $refreshExpirationForPinLoginSeconds = null;

	/**
	 * IsSwitchingUsersAllowed
	 * @var bool
	 */
	public $isSwitchingUsersAllowed = null;

	/**
	 * TokenKeyFormat
	 * @var string
	 */
	public $tokenKeyFormat = null;

	/**
	 * AppTokenKeyFormat
	 * @var string
	 */
	public $appTokenKeyFormat = null;

	/**
	 * AppTokenSessionMaxDurationSeconds
	 * @var int
	 */
	public $appTokenSessionMaxDurationSeconds = null;

	/**
	 * AppTokenMaxExpirySeconds
	 * @var int
	 */
	public $appTokenMaxExpirySeconds = null;

	/**
	 * UserSessionsKeyFormat
	 * @var string
	 */
	public $userSessionsKeyFormat = null;

	/**
	 * RevokedKsMaxTtlSeconds
	 * @var int
	 */
	public $revokedKsMaxTtlSeconds = null;

	/**
	 * MediaPrepAccountId
	 * @var int
	 */
	public $mediaPrepAccountId = null;

	/**
	 * FairplayCertificate
	 * @var string
	 */
	public $fairplayCertificate = null;

}
