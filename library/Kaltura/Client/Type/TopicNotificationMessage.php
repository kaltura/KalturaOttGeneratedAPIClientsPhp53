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
class TopicNotificationMessage extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaTopicNotificationMessage';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->message))
			$this->message = (string)$xml->message;
		if(count($xml->imageUrl))
			$this->imageUrl = (string)$xml->imageUrl;
		if(count($xml->topicNotificationId))
			$this->topicNotificationId = (string)$xml->topicNotificationId;
		if(count($xml->trigger) && !empty($xml->trigger))
			$this->trigger = \Kaltura\Client\ParseUtils::unmarshalObject($xml->trigger, "KalturaTrigger");
		if(count($xml->dispatchers))
		{
			if(empty($xml->dispatchers))
				$this->dispatchers = array();
			else
				$this->dispatchers = \Kaltura\Client\ParseUtils::unmarshalArray($xml->dispatchers, "KalturaDispatcher");
		}
		if(count($xml->status))
			$this->status = (string)$xml->status;
	}
	/**
	 * Topic notification message ID
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Topic notification message
	 * @var string
	 */
	public $message = null;

	/**
	 * Topic notification message image URL
	 * @var string
	 */
	public $imageUrl = null;

	/**
	 * Topic notification ID
	 * @var int
	 */
	public $topicNotificationId = null;

	/**
	 * Topic notification message trigger
	 * @var \Kaltura\Client\Type\Trigger
	 */
	public $trigger;

	/**
	 * Topic notification message dispatchers
	 * @var array<KalturaDispatcher>
	 */
	public $dispatchers;

	/**
	 * Message status
	 * @var \Kaltura\Client\Enum\AnnouncementStatus
	 * @readonly
	 */
	public $status = null;

}
