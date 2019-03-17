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
 * Bulk Upload Result
 * @package Kaltura
 * @subpackage Client
 */
abstract class BulkUploadResult extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadResult';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(count($xml->index))
			$this->index = (int)$xml->index;
		if(count($xml->bulkUploadId))
			$this->bulkUploadId = (string)$xml->bulkUploadId;
		if(count($xml->status))
			$this->status = (string)$xml->status;
		if(count($xml->error) && !empty($xml->error))
			$this->error = \Kaltura\Client\ParseUtils::unmarshalObject($xml->error, "KalturaMessage");
		if(count($xml->warnings))
		{
			if(empty($xml->warnings))
				$this->warnings = array();
			else
				$this->warnings = \Kaltura\Client\ParseUtils::unmarshalArray($xml->warnings, "KalturaMessage");
		}
	}
	/**
	 * the result ObjectId (assetId, userId etc)
	 * @var int
	 * @readonly
	 */
	public $objectId = null;

	/**
	 * result index
	 * @var int
	 * @readonly
	 */
	public $index = null;

	/**
	 * Bulk upload identifier
	 * @var int
	 * @readonly
	 */
	public $bulkUploadId = null;

	/**
	 * status
	 * @var \Kaltura\Client\Enum\BulkUploadResultStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Error details
	 * @var \Kaltura\Client\Type\Message
	 * @readonly
	 */
	public $error;

	/**
	 * A list of warnings
	 * @var array<KalturaMessage>
	 * @readonly
	 */
	public $warnings;

}
