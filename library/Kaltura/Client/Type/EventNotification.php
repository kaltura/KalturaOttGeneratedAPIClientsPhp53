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
 * Household Coupon details
 * @package Kaltura
 * @subpackage Client
 */
class EventNotification extends \Kaltura\Client\Type\CrudObject
{
	public function getKalturaObjectType()
	{
		return 'KalturaEventNotification';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(count($xml->eventObjectType))
			$this->eventObjectType = (string)$xml->eventObjectType;
		if(count($xml->message))
			$this->message = (string)$xml->message;
		if(count($xml->status))
			$this->status = (string)$xml->status;
		if(count($xml->actionType))
			$this->actionType = (string)$xml->actionType;
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
	}
	/**
	 * Identifier
	 * @var string
	 */
	public $id = null;

	/**
	 * Object identifier
	 * @var int
	 */
	public $objectId = null;

	/**
	 * Event object type
	 * @var string
	 */
	public $eventObjectType = null;

	/**
	 * Message
	 * @var string
	 */
	public $message = null;

	/**
	 * Status
	 * @var \Kaltura\Client\Enum\EventNotificationStatus
	 */
	public $status = null;

	/**
	 * Action type
	 * @var string
	 */
	public $actionType = null;

	/**
	 * Create date
	 * @var int
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Update date
	 * @var int
	 * @readonly
	 */
	public $updateDate = null;

}
