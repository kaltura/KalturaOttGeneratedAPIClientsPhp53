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
namespace Kaltura\Client\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class PartnerService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Add a partner with default user
	 * 
	 * @return \Kaltura\Client\Type\Partner
	 */
	function add(\Kaltura\Client\Type\Partner $partner, \Kaltura\Client\Type\PartnerSetup $partnerSetup)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partner", $partner->toParams());
		$this->client->addParam($kparams, "partnerSetup", $partnerSetup->toParams());
		$this->client->queueServiceActionCall("partner", "add", "KalturaPartner", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartner");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\Partner");
		return $resultObject;
	}

	/**
	 * Returns a login session for external system (like OVP)
	 * 
	 * @return \Kaltura\Client\Type\LoginSession
	 */
	function externalLogin()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("partner", "externalLogin", "KalturaLoginSession", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLoginSession");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LoginSession");
		return $resultObject;
	}

	/**
	 * Internal API !!! Returns the list of active Partners
	 * 
	 * @return \Kaltura\Client\Type\PartnerListResponse
	 */
	function listAction(\Kaltura\Client\Type\PartnerFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("partner", "list", "KalturaPartnerListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartnerListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\PartnerListResponse");
		return $resultObject;
	}
}
