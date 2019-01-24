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
 * TVM geo rule
 * @package Kaltura
 * @subpackage Client
 */
class TvmGeoRule extends \Kaltura\Client\Type\TvmRule
{
	public function getKalturaObjectType()
	{
		return 'KalturaTvmGeoRule';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->onlyOrBut))
		{
			if(!empty($xml->onlyOrBut))
				$this->onlyOrBut = true;
			else
				$this->onlyOrBut = false;
		}
		if(count($xml->countryIds))
			$this->countryIds = (string)$xml->countryIds;
		if(count($xml->proxyRule))
			$this->proxyRule = (int)$xml->proxyRule;
		if(count($xml->proxyLevel))
			$this->proxyLevel = (int)$xml->proxyLevel;
	}
	/**
	 * Indicates if the rule is relevent ONLY for the country ids or except country ids here.
	 * @var bool
	 */
	public $onlyOrBut = null;

	/**
	 * Comma separated list of country Ids.
	 * @var string
	 */
	public $countryIds = null;

	/**
	 * proxyRule - what is that?
	 * @var int
	 */
	public $proxyRule = null;

	/**
	 * proxyLevel - what is that?
	 * @var int
	 */
	public $proxyLevel = null;

}
