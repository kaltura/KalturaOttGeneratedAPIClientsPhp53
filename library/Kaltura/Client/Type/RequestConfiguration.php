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
 * Define client request optional configurations
 * @package Kaltura
 * @subpackage Client
 */
class RequestConfiguration extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaRequestConfiguration';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->userId))
			$this->userId = (int)$xml->userId;
		if(count($xml->language))
			$this->language = (string)$xml->language;
		if(count($xml->currency))
			$this->currency = (string)$xml->currency;
		if(count($xml->ks))
			$this->ks = (string)$xml->ks;
		if(count($xml->responseProfile) && !empty($xml->responseProfile))
			$this->responseProfile = \Kaltura\Client\ParseUtils::unmarshalObject($xml->responseProfile, "KalturaBaseResponseProfile");
		if(count($xml->abortOnError))
		{
			if(!empty($xml->abortOnError))
				$this->abortOnError = true;
			else
				$this->abortOnError = false;
		}
		if(count($xml->abortAllOnError))
		{
			if(!empty($xml->abortAllOnError))
				$this->abortAllOnError = true;
			else
				$this->abortAllOnError = false;
		}
		if(count($xml->skipCondition) && !empty($xml->skipCondition))
			$this->skipCondition = \Kaltura\Client\ParseUtils::unmarshalObject($xml->skipCondition, "KalturaSkipCondition");
	}
	/**
	 * Impersonated partner id
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * Impersonated user id
	 * @var int
	 */
	public $userId = null;

	/**
	 * Content language
	 * @var string
	 */
	public $language = null;

	/**
	 * Currency to be used
	 * @var string
	 */
	public $currency = null;

	/**
	 * Kaltura API session
	 * @var string
	 */
	public $ks = null;

	/**
	 * Kaltura response profile object
	 * @var \Kaltura\Client\Type\BaseResponseProfile
	 */
	public $responseProfile;

	/**
	 * Abort the Multireuqset call if any error occurs in one of the requests
	 * @var bool
	 */
	public $abortOnError = null;

	/**
	 * Abort all following requests in Multireuqset if current request has an error
	 * @var bool
	 */
	public $abortAllOnError = null;

	/**
	 * Skip current request according to skip condition
	 * @var \Kaltura\Client\Type\SkipCondition
	 */
	public $skipCondition;

}
