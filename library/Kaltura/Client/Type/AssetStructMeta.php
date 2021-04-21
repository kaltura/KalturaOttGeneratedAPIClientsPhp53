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
 * Asset statistics
 * @package Kaltura
 * @subpackage Client
 */
class AssetStructMeta extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetStructMeta';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->assetStructId))
			$this->assetStructId = (string)$xml->assetStructId;
		if(count($xml->metaId))
			$this->metaId = (string)$xml->metaId;
		if(count($xml->ingestReferencePath))
			$this->ingestReferencePath = (string)$xml->ingestReferencePath;
		if(count($xml->protectFromIngest))
		{
			if(!empty($xml->protectFromIngest) && $xml->protectFromIngest != 'false')
				$this->protectFromIngest = true;
			else
				$this->protectFromIngest = false;
		}
		if(count($xml->defaultIngestValue))
			$this->defaultIngestValue = (string)$xml->defaultIngestValue;
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(count($xml->isInherited))
		{
			if(!empty($xml->isInherited) && $xml->isInherited != 'false')
				$this->isInherited = true;
			else
				$this->isInherited = false;
		}
	}
	/**
	 * Asset Struct id (template_id)
	 * @var int
	 * @readonly
	 */
	public $assetStructId = null;

	/**
	 * Meta id (topic_id)
	 * @var int
	 * @readonly
	 */
	public $metaId = null;

	/**
	 * IngestReferencePath
	 * @var string
	 */
	public $ingestReferencePath = null;

	/**
	 * ProtectFromIngest
	 * @var bool
	 */
	public $protectFromIngest = null;

	/**
	 * DefaultIngestValue
	 * @var string
	 */
	public $defaultIngestValue = null;

	/**
	 * Specifies when was the Asset Struct Meta was created. Date and time represented as epoch.
	 * @var int
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the Asset Struct Meta last updated. Date and time represented as epoch.
	 * @var int
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * Is inherited
	 * @var bool
	 */
	public $isInherited = null;

}
