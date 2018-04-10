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
namespace Kaltura\Client\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class CouponsGroupService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Generate a coupon
	 * 
	 * @return \Kaltura\Client\Type\StringValueArray
	 */
	function generate($id, \Kaltura\Client\Type\CouponGenerationOptions $couponGenerationOptions)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "couponGenerationOptions", $couponGenerationOptions->toParams());
		$this->client->queueServiceActionCall("couponsgroup", "generate", "KalturaStringValueArray", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaStringValueArray");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\StringValueArray");
		return $resultObject;
	}

	/**
	 * Returns information about coupons group
	 * 
	 * @return \Kaltura\Client\Type\CouponsGroup
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("couponsgroup", "get", "KalturaCouponsGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCouponsGroup");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\CouponsGroup");
		return $resultObject;
	}

	/**
	 * Update coupons group
	 * 
	 * @return \Kaltura\Client\Type\CouponsGroup
	 */
	function update($id, \Kaltura\Client\Type\CouponsGroup $couponsGroup)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "couponsGroup", $couponsGroup->toParams());
		$this->client->queueServiceActionCall("couponsgroup", "update", "KalturaCouponsGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCouponsGroup");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\CouponsGroup");
		return $resultObject;
	}
}
