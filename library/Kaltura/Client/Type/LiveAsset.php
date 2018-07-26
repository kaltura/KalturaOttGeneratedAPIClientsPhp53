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
 * Linear media asset info
 * @package Kaltura
 * @subpackage Client
 */
class LiveAsset extends \Kaltura\Client\Type\MediaAsset
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveAsset';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->enableCdvrState))
			$this->enableCdvrState = (string)$xml->enableCdvrState;
		if(count($xml->enableCatchUpState))
			$this->enableCatchUpState = (string)$xml->enableCatchUpState;
		if(count($xml->enableStartOverState))
			$this->enableStartOverState = (string)$xml->enableStartOverState;
		if(count($xml->bufferCatchUp))
			$this->bufferCatchUp = (string)$xml->bufferCatchUp;
		if(count($xml->bufferTrickPlay))
			$this->bufferTrickPlay = (string)$xml->bufferTrickPlay;
		if(count($xml->enableRecordingPlaybackNonEntitledChannelState))
			$this->enableRecordingPlaybackNonEntitledChannelState = (string)$xml->enableRecordingPlaybackNonEntitledChannelState;
		if(count($xml->enableTrickPlayState))
			$this->enableTrickPlayState = (string)$xml->enableTrickPlayState;
		if(count($xml->externalEpgIngestId))
			$this->externalEpgIngestId = (string)$xml->externalEpgIngestId;
		if(count($xml->externalCdvrId))
			$this->externalCdvrId = (string)$xml->externalCdvrId;
		if(count($xml->cdvrEnabled))
		{
			if(!empty($xml->cdvrEnabled))
				$this->cdvrEnabled = true;
			else
				$this->cdvrEnabled = false;
		}
		if(count($xml->catchUpEnabled))
		{
			if(!empty($xml->catchUpEnabled))
				$this->catchUpEnabled = true;
			else
				$this->catchUpEnabled = false;
		}
		if(count($xml->startOverEnabled))
		{
			if(!empty($xml->startOverEnabled))
				$this->startOverEnabled = true;
			else
				$this->startOverEnabled = false;
		}
		if(count($xml->summedCatchUpBuffer))
			$this->summedCatchUpBuffer = (string)$xml->summedCatchUpBuffer;
		if(count($xml->summedTrickPlayBuffer))
			$this->summedTrickPlayBuffer = (string)$xml->summedTrickPlayBuffer;
		if(count($xml->recordingPlaybackNonEntitledChannelEnabled))
		{
			if(!empty($xml->recordingPlaybackNonEntitledChannelEnabled))
				$this->recordingPlaybackNonEntitledChannelEnabled = true;
			else
				$this->recordingPlaybackNonEntitledChannelEnabled = false;
		}
		if(count($xml->trickPlayEnabled))
		{
			if(!empty($xml->trickPlayEnabled))
				$this->trickPlayEnabled = true;
			else
				$this->trickPlayEnabled = false;
		}
		if(count($xml->channelType))
			$this->channelType = (string)$xml->channelType;
	}
	/**
	 * Enable CDVR, configuration only
	 * @var \Kaltura\Client\Enum\TimeShiftedTvState
	 */
	public $enableCdvrState = null;

	/**
	 * Enable catch-up, configuration only
	 * @var \Kaltura\Client\Enum\TimeShiftedTvState
	 */
	public $enableCatchUpState = null;

	/**
	 * Enable start over, configuration only
	 * @var \Kaltura\Client\Enum\TimeShiftedTvState
	 */
	public $enableStartOverState = null;

	/**
	 * buffer Catch-up, configuration only
	 * @var int
	 */
	public $bufferCatchUp = null;

	/**
	 * buffer Trick-play, configuration only
	 * @var int
	 */
	public $bufferTrickPlay = null;

	/**
	 * Enable Recording playback for non entitled channel, configuration only
	 * @var \Kaltura\Client\Enum\TimeShiftedTvState
	 */
	public $enableRecordingPlaybackNonEntitledChannelState = null;

	/**
	 * Enable trick-play, configuration only
	 * @var \Kaltura\Client\Enum\TimeShiftedTvState
	 */
	public $enableTrickPlayState = null;

	/**
	 * External identifier used when ingesting programs for this linear media asset
	 * @var string
	 */
	public $externalEpgIngestId = null;

	/**
	 * External identifier for the CDVR
	 * @var string
	 */
	public $externalCdvrId = null;

	/**
	 * Is CDVR enabled for this asset
	 * @var bool
	 * @readonly
	 */
	public $cdvrEnabled = null;

	/**
	 * Is catch-up enabled for this asset
	 * @var bool
	 * @readonly
	 */
	public $catchUpEnabled = null;

	/**
	 * Is start over enabled for this asset
	 * @var bool
	 * @readonly
	 */
	public $startOverEnabled = null;

	/**
	 * summed Catch-up buffer, the TimeShiftedTvPartnerSettings are also taken into consideration
	 * @var int
	 * @readonly
	 */
	public $summedCatchUpBuffer = null;

	/**
	 * summed Trick-play buffer, the TimeShiftedTvPartnerSettings are also taken into consideration
	 * @var int
	 * @readonly
	 */
	public $summedTrickPlayBuffer = null;

	/**
	 * Is recording playback for non entitled channel enabled for this asset
	 * @var bool
	 * @readonly
	 */
	public $recordingPlaybackNonEntitledChannelEnabled = null;

	/**
	 * Is trick-play enabled for this asset
	 * @var bool
	 * @readonly
	 */
	public $trickPlayEnabled = null;

	/**
	 * channel type, possible values: UNKNOWN, DTT, OTT, DTT_AND_OTT
	 * @var \Kaltura\Client\Enum\LinearChannelType
	 */
	public $channelType = null;

}
