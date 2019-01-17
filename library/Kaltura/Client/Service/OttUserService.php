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
namespace Kaltura\Client\Service;

/**
 * @package Kaltura
 * @subpackage Client
 */
class OttUserService extends \Kaltura\Client\ServiceBase
{
	function __construct(\Kaltura\Client\Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * Activate the account by activation token
	 * 
	 * @return \Kaltura\Client\Type\OTTUser
	 */
	function activate($partnerId, $username, $activationToken)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->addParam($kparams, "activationToken", $activationToken);
		$this->client->queueServiceActionCall("ottuser", "activate", "KalturaOTTUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OTTUser");
		return $resultObject;
	}

	/**
	 * Deprecate - use Register or Update actions instead by setting user.roleIds parameter
	 * 
	 * @return bool
	 */
	function addRole($roleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "roleId", $roleId);
		$this->client->queueServiceActionCall("ottuser", "addRole", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Returns tokens (KS and refresh token) for anonymous access
	 * 
	 * @return \Kaltura\Client\Type\LoginSession
	 */
	function anonymousLogin($partnerId, $udid = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("ottuser", "anonymousLogin", "KalturaLoginSession", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLoginSession");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LoginSession");
		return $resultObject;
	}

	/**
	 * Permanently delete a user. User to delete cannot be an exclusive household master, and cannot be default user.
	 * 
	 * @return bool
	 */
	function delete()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Retrieving users&#39; data
	 * 
	 * @return \Kaltura\Client\Type\OTTUser
	 */
	function get()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "get", "KalturaOTTUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OTTUser");
		return $resultObject;
	}

	/**
	 * Returns the identifier of the user encrypted with SHA1 using configured key
	 * 
	 * @return \Kaltura\Client\Type\StringValue
	 */
	function getEncryptedUserId()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "getEncryptedUserId", "KalturaStringValue", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaStringValue");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\StringValue");
		return $resultObject;
	}

	/**
	 * Retrieve user by external identifier or username or if filter is null all user in the master or the user itself
	 * 
	 * @return \Kaltura\Client\Type\OTTUserListResponse
	 */
	function listAction(\Kaltura\Client\Type\OTTUserFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("ottuser", "list", "KalturaOTTUserListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUserListResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OTTUserListResponse");
		return $resultObject;
	}

	/**
	 * login with user name and password.
	 * 
	 * @return \Kaltura\Client\Type\LoginResponse
	 */
	function login($partnerId, $username = null, $password = null, array $extraParams = null, $udid = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->addParam($kparams, "password", $password);
		if ($extraParams !== null)
			foreach($extraParams as $index => $obj)
			{
				$this->client->addParam($kparams, "extraParams:$index", $obj->toParams());
			}
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("ottuser", "login", "KalturaLoginResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLoginResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LoginResponse");
		return $resultObject;
	}

	/**
	 * User sign-in via a time-expired sign-in PIN.
	 * 
	 * @return \Kaltura\Client\Type\LoginResponse
	 */
	function loginWithPin($partnerId, $pin, $udid = null, $secret = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "pin", $pin);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "secret", $secret);
		$this->client->queueServiceActionCall("ottuser", "loginWithPin", "KalturaLoginResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLoginResponse");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\LoginResponse");
		return $resultObject;
	}

	/**
	 * Logout the calling user.
	 * 
	 * @return bool
	 */
	function logout()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "logout", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Sign up a new user.
	 * 
	 * @return \Kaltura\Client\Type\OTTUser
	 */
	function register($partnerId, \Kaltura\Client\Type\OTTUser $user, $password)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("ottuser", "register", "KalturaOTTUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OTTUser");
		return $resultObject;
	}

	/**
	 * Resend the activation token to a user
	 * 
	 * @return bool
	 */
	function resendActivationToken($partnerId, $username)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->queueServiceActionCall("ottuser", "resendActivationToken", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Send an e-mail with URL to enable the user to set new password.
	 * 
	 * @return bool
	 */
	function resetPassword($partnerId, $username, $templateName = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->addParam($kparams, "templateName", $templateName);
		$this->client->queueServiceActionCall("ottuser", "resetPassword", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Renew the user&#39;s password after validating the token that sent as part of URL in e-mail.
	 * 
	 * @return \Kaltura\Client\Type\OTTUser
	 */
	function setInitialPassword($partnerId, $token, $password)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("ottuser", "setInitialPassword", "KalturaOTTUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OTTUser");
		return $resultObject;
	}

	/**
	 * Update user information
	 * 
	 * @return \Kaltura\Client\Type\OTTUser
	 */
	function update(\Kaltura\Client\Type\OTTUser $user, $id = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("ottuser", "update", "KalturaOTTUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OTTUser");
		return $resultObject;
	}

	/**
	 * Update user dynamic data
	 * 
	 * @return \Kaltura\Client\Type\OTTUserDynamicData
	 */
	function updateDynamicData($key, \Kaltura\Client\Type\StringValue $value)
	{
		$kparams = array();
		$this->client->addParam($kparams, "key", $key);
		$this->client->addParam($kparams, "value", $value->toParams());
		$this->client->queueServiceActionCall("ottuser", "updateDynamicData", "KalturaOTTUserDynamicData", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUserDynamicData");
		$this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\OTTUserDynamicData");
		return $resultObject;
	}

	/**
	 * Given a user name and existing password, change to a new password.
	 * 
	 * @return bool
	 */
	function updateLoginData($username, $oldPassword, $newPassword)
	{
		$kparams = array();
		$this->client->addParam($kparams, "username", $username);
		$this->client->addParam($kparams, "oldPassword", $oldPassword);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("ottuser", "updateLoginData", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * Update the user&#39;s existing password.
	 * 
	 */
	function updatePassword($userId, $password)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("ottuser", "updatePassword", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}
}
