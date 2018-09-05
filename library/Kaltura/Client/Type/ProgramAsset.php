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
 * Program-asset info
 * @package Kaltura
 * @subpackage Client
 */
class ProgramAsset extends \Kaltura\Client\Type\Asset
{
	public function getKalturaObjectType()
	{
		return 'KalturaProgramAsset';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->epgChannelId))
			$this->epgChannelId = (string)$xml->epgChannelId;
		if(count($xml->epgId))
			$this->epgId = (string)$xml->epgId;
		if(count($xml->relatedMediaId))
			$this->relatedMediaId = (string)$xml->relatedMediaId;
		if(count($xml->crid))
			$this->crid = (string)$xml->crid;
		if(count($xml->linearAssetId))
			$this->linearAssetId = (string)$xml->linearAssetId;
		if(count($xml->enableCdvr))
		{
			if(!empty($xml->enableCdvr))
				$this->enableCdvr = true;
			else
				$this->enableCdvr = false;
		}
		if(count($xml->enableCatchUp))
		{
			if(!empty($xml->enableCatchUp))
				$this->enableCatchUp = true;
			else
				$this->enableCatchUp = false;
		}
		if(count($xml->enableStartOver))
		{
			if(!empty($xml->enableStartOver))
				$this->enableStartOver = true;
			else
				$this->enableStartOver = false;
		}
		if(count($xml->enableTrickPlay))
		{
			if(!empty($xml->enableTrickPlay))
				$this->enableTrickPlay = true;
			else
				$this->enableTrickPlay = false;
		}
	}
	/**
	 * EPG channel identifier
	 * @var int
	 */
	public $epgChannelId = null;

	/**
	 * EPG identifier
	 * @var string
	 */
	public $epgId = null;

	/**
	 * Ralated media identifier
	 * @var int
	 */
	public $relatedMediaId = null;

	/**
	 * Unique identifier for the program
	 * @var string
	 */
	public $crid = null;

	/**
	 * Id of linear media asset
	 * @var int
	 */
	public $linearAssetId = null;

	/**
	 * Is CDVR enabled for this asset
	 * @var bool
	 * @readonly
	 */
	public $enableCdvr = null;

	/**
	 * Is catch-up enabled for this asset
	 * @var bool
	 * @readonly
	 */
	public $enableCatchUp = null;

	/**
	 * Is start over enabled for this asset
	 * @var bool
	 * @readonly
	 */
	public $enableStartOver = null;

	/**
	 * Is trick-play enabled for this asset
	 * @var bool
	 * @readonly
	 */
	public $enableTrickPlay = null;

}
