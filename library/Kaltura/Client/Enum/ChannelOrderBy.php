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
namespace Kaltura\Client\Enum;

/**
 * @package Kaltura
 * @subpackage Client
 */
class ChannelOrderBy extends \Kaltura\Client\EnumBase
{
	const ORDER_NUM = "ORDER_NUM";
	const RELEVANCY_DESC = "RELEVANCY_DESC";
	const NAME_ASC = "NAME_ASC";
	const NAME_DESC = "NAME_DESC";
	const VIEWS_DESC = "VIEWS_DESC";
	const RATINGS_DESC = "RATINGS_DESC";
	const VOTES_DESC = "VOTES_DESC";
	const START_DATE_DESC = "START_DATE_DESC";
	const START_DATE_ASC = "START_DATE_ASC";
	const LIKES_DESC = "LIKES_DESC";
	const CREATE_DATE_ASC = "CREATE_DATE_ASC";
	const CREATE_DATE_DESC = "CREATE_DATE_DESC";
}
