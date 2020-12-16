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
// Copyright (C) 2006-2020  Kaltura Inc.
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
 * Campaign
 * @package Kaltura
 * @subpackage Client
 */
class TriggerCampaign extends \Kaltura\Client\Type\Campaign
{
	public function getKalturaObjectType()
	{
		return 'KalturaTriggerCampaign';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->service))
			$this->service = (string)$xml->service;
		if(count($xml->action))
			$this->action = (string)$xml->action;
		if(count($xml->triggerConditions))
		{
			if(empty($xml->triggerConditions))
				$this->triggerConditions = array();
			else
				$this->triggerConditions = \Kaltura\Client\ParseUtils::unmarshalArray($xml->triggerConditions, "KalturaCondition");
		}
	}
	/**
	 * service
	 * @var \Kaltura\Client\Enum\ApiService
	 */
	public $service = null;

	/**
	 * action
	 * @var \Kaltura\Client\Enum\ApiAction
	 */
	public $action = null;

	/**
	 * List of conditions for the trigger (conditions on the object)
	 * @var array<KalturaCondition>
	 */
	public $triggerConditions;

}