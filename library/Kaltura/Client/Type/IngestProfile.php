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
 * Ingest profile
 * @package Kaltura
 * @subpackage Client
 */
class IngestProfile extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaIngestProfile';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(count($xml->assetTypeId))
			$this->assetTypeId = (int)$xml->assetTypeId;
		if(count($xml->transformationAdapterUrl))
			$this->transformationAdapterUrl = (string)$xml->transformationAdapterUrl;
		if(count($xml->transformationAdapterSettings))
			$this->transformationAdapterSettings = (string)$xml->transformationAdapterSettings;
		if(count($xml->transformationAdapterSharedSecret))
			$this->transformationAdapterSharedSecret = (string)$xml->transformationAdapterSharedSecret;
		if(count($xml->defaultAutoFillPolicy))
			$this->defaultAutoFillPolicy = (int)$xml->defaultAutoFillPolicy;
		if(count($xml->defaultOverlapPolicy))
			$this->defaultOverlapPolicy = (int)$xml->defaultOverlapPolicy;
	}
	/**
	 * Ingest profile identifier
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Ingest profile name
	 * @var string
	 */
	public $name = null;

	/**
	 * Ingest profile externalId
	 * @var string
	 */
	public $externalId = null;

	/**
	 * Type of assets that this profile suppose to ingest: 0 - EPG, 1 - MEDIA
	 * @var int
	 */
	public $assetTypeId = null;

	/**
	 * Transformation Adapter URL
	 * @var string
	 */
	public $transformationAdapterUrl = null;

	/**
	 * Transformation Adapter settings
	 * @var string
	 */
	public $transformationAdapterSettings = null;

	/**
	 * Transformation Adapter shared secret
	 * @var string
	 */
	public $transformationAdapterSharedSecret = null;

	/**
	 * Ingest profile default Auto-fill policy
	 * @var int
	 */
	public $defaultAutoFillPolicy = null;

	/**
	 * Ingest profile default Overlap policy
	 * @var int
	 */
	public $defaultOverlapPolicy = null;

}