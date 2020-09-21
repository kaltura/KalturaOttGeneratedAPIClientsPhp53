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
namespace Kaltura\Client;

/**
 * @package Kaltura
 * @subpackage Client
 */
class Client extends Base
{
	/**
	 * @var \Kaltura\Client\Service\AnnouncementService
	 */
	protected $announcement = null;

	/**
	 * @var \Kaltura\Client\Service\AppTokenService
	 */
	protected $appToken = null;

	/**
	 * @var \Kaltura\Client\Service\AssetCommentService
	 */
	protected $assetComment = null;

	/**
	 * @var \Kaltura\Client\Service\AssetService
	 */
	protected $asset = null;

	/**
	 * @var \Kaltura\Client\Service\AssetFileService
	 */
	protected $assetFile = null;

	/**
	 * @var \Kaltura\Client\Service\AssetFilePpvService
	 */
	protected $assetFilePpv = null;

	/**
	 * @var \Kaltura\Client\Service\AssetHistoryService
	 */
	protected $assetHistory = null;

	/**
	 * @var \Kaltura\Client\Service\AssetRuleService
	 */
	protected $assetRule = null;

	/**
	 * @var \Kaltura\Client\Service\AssetStatisticsService
	 */
	protected $assetStatistics = null;

	/**
	 * @var \Kaltura\Client\Service\AssetStructService
	 */
	protected $assetStruct = null;

	/**
	 * @var \Kaltura\Client\Service\AssetStructMetaService
	 */
	protected $assetStructMeta = null;

	/**
	 * @var \Kaltura\Client\Service\AssetUserRuleService
	 */
	protected $assetUserRule = null;

	/**
	 * @var \Kaltura\Client\Service\BookmarkService
	 */
	protected $bookmark = null;

	/**
	 * @var \Kaltura\Client\Service\BulkUploadService
	 */
	protected $bulkUpload = null;

	/**
	 * @var \Kaltura\Client\Service\BusinessModuleRuleService
	 */
	protected $businessModuleRule = null;

	/**
	 * @var \Kaltura\Client\Service\CategoryItemService
	 */
	protected $categoryItem = null;

	/**
	 * @var \Kaltura\Client\Service\CategoryTreeService
	 */
	protected $categoryTree = null;

	/**
	 * @var \Kaltura\Client\Service\CdnAdapterProfileService
	 */
	protected $cdnAdapterProfile = null;

	/**
	 * @var \Kaltura\Client\Service\CdnPartnerSettingsService
	 */
	protected $cdnPartnerSettings = null;

	/**
	 * @var \Kaltura\Client\Service\CDVRAdapterProfileService
	 */
	protected $cDVRAdapterProfile = null;

	/**
	 * @var \Kaltura\Client\Service\ChannelService
	 */
	protected $channel = null;

	/**
	 * @var \Kaltura\Client\Service\CollectionService
	 */
	protected $collection = null;

	/**
	 * @var \Kaltura\Client\Service\CompensationService
	 */
	protected $compensation = null;

	/**
	 * @var \Kaltura\Client\Service\ConfigurationGroupService
	 */
	protected $configurationGroup = null;

	/**
	 * @var \Kaltura\Client\Service\ConfigurationGroupDeviceService
	 */
	protected $configurationGroupDevice = null;

	/**
	 * @var \Kaltura\Client\Service\ConfigurationGroupTagService
	 */
	protected $configurationGroupTag = null;

	/**
	 * @var \Kaltura\Client\Service\ConfigurationsService
	 */
	protected $configurations = null;

	/**
	 * @var \Kaltura\Client\Service\CountryService
	 */
	protected $country = null;

	/**
	 * @var \Kaltura\Client\Service\CouponService
	 */
	protected $coupon = null;

	/**
	 * @var \Kaltura\Client\Service\CouponsGroupService
	 */
	protected $couponsGroup = null;

	/**
	 * @var \Kaltura\Client\Service\CurrencyService
	 */
	protected $currency = null;

	/**
	 * @var \Kaltura\Client\Service\DeviceBrandService
	 */
	protected $deviceBrand = null;

	/**
	 * @var \Kaltura\Client\Service\DeviceFamilyService
	 */
	protected $deviceFamily = null;

	/**
	 * @var \Kaltura\Client\Service\DiscountDetailsService
	 */
	protected $discountDetails = null;

	/**
	 * @var \Kaltura\Client\Service\DrmProfileService
	 */
	protected $drmProfile = null;

	/**
	 * @var \Kaltura\Client\Service\EmailService
	 */
	protected $email = null;

	/**
	 * @var \Kaltura\Client\Service\EngagementAdapterService
	 */
	protected $engagementAdapter = null;

	/**
	 * @var \Kaltura\Client\Service\EngagementService
	 */
	protected $engagement = null;

	/**
	 * @var \Kaltura\Client\Service\EntitlementService
	 */
	protected $entitlement = null;

	/**
	 * @var \Kaltura\Client\Service\EventNotificationActionService
	 */
	protected $eventNotificationAction = null;

	/**
	 * @var \Kaltura\Client\Service\EventNotificationService
	 */
	protected $eventNotification = null;

	/**
	 * @var \Kaltura\Client\Service\ExportTaskService
	 */
	protected $exportTask = null;

	/**
	 * @var \Kaltura\Client\Service\ExternalChannelProfileService
	 */
	protected $externalChannelProfile = null;

	/**
	 * @var \Kaltura\Client\Service\FavoriteService
	 */
	protected $favorite = null;

	/**
	 * @var \Kaltura\Client\Service\FollowTvSeriesService
	 */
	protected $followTvSeries = null;

	/**
	 * @var \Kaltura\Client\Service\HomeNetworkService
	 */
	protected $homeNetwork = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdService
	 */
	protected $household = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdCouponService
	 */
	protected $householdCoupon = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdDeviceService
	 */
	protected $householdDevice = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdLimitationsService
	 */
	protected $householdLimitations = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdPaymentGatewayService
	 */
	protected $householdPaymentGateway = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdPaymentMethodService
	 */
	protected $householdPaymentMethod = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdPremiumServiceService
	 */
	protected $householdPremiumService = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdQuotaService
	 */
	protected $householdQuota = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdSegmentService
	 */
	protected $householdSegment = null;

	/**
	 * @var \Kaltura\Client\Service\HouseholdUserService
	 */
	protected $householdUser = null;

	/**
	 * @var \Kaltura\Client\Service\ImageService
	 */
	protected $image = null;

	/**
	 * @var \Kaltura\Client\Service\ImageTypeService
	 */
	protected $imageType = null;

	/**
	 * @var \Kaltura\Client\Service\InboxMessageService
	 */
	protected $inboxMessage = null;

	/**
	 * @var \Kaltura\Client\Service\IngestProfileService
	 */
	protected $IngestProfile = null;

	/**
	 * @var \Kaltura\Client\Service\IotService
	 */
	protected $iot = null;

	/**
	 * @var \Kaltura\Client\Service\IotProfileService
	 */
	protected $iotProfile = null;

	/**
	 * @var \Kaltura\Client\Service\LanguageService
	 */
	protected $language = null;

	/**
	 * @var \Kaltura\Client\Service\LicensedUrlService
	 */
	protected $licensedUrl = null;

	/**
	 * @var \Kaltura\Client\Service\MediaConcurrencyRuleService
	 */
	protected $mediaConcurrencyRule = null;

	/**
	 * @var \Kaltura\Client\Service\MediaFileService
	 */
	protected $mediaFile = null;

	/**
	 * @var \Kaltura\Client\Service\MediaFileTypeService
	 */
	protected $mediaFileType = null;

	/**
	 * @var \Kaltura\Client\Service\MessageTemplateService
	 */
	protected $messageTemplate = null;

	/**
	 * @var \Kaltura\Client\Service\MetaService
	 */
	protected $meta = null;

	/**
	 * @var \Kaltura\Client\Service\NotificationService
	 */
	protected $notification = null;

	/**
	 * @var \Kaltura\Client\Service\NotificationsPartnerSettingsService
	 */
	protected $notificationsPartnerSettings = null;

	/**
	 * @var \Kaltura\Client\Service\NotificationsSettingsService
	 */
	protected $notificationsSettings = null;

	/**
	 * @var \Kaltura\Client\Service\OssAdapterProfileService
	 */
	protected $ossAdapterProfile = null;

	/**
	 * @var \Kaltura\Client\Service\OttCategoryService
	 */
	protected $ottCategory = null;

	/**
	 * @var \Kaltura\Client\Service\OttUserService
	 */
	protected $ottUser = null;

	/**
	 * @var \Kaltura\Client\Service\ParentalRuleService
	 */
	protected $parentalRule = null;

	/**
	 * @var \Kaltura\Client\Service\PartnerConfigurationService
	 */
	protected $partnerConfiguration = null;

	/**
	 * @var \Kaltura\Client\Service\PartnerService
	 */
	protected $partner = null;

	/**
	 * @var \Kaltura\Client\Service\PasswordPolicyService
	 */
	protected $passwordPolicy = null;

	/**
	 * @var \Kaltura\Client\Service\PaymentGatewayProfileService
	 */
	protected $paymentGatewayProfile = null;

	/**
	 * @var \Kaltura\Client\Service\PaymentMethodProfileService
	 */
	protected $paymentMethodProfile = null;

	/**
	 * @var \Kaltura\Client\Service\PermissionService
	 */
	protected $permission = null;

	/**
	 * @var \Kaltura\Client\Service\PermissionItemService
	 */
	protected $permissionItem = null;

	/**
	 * @var \Kaltura\Client\Service\PersonalFeedService
	 */
	protected $personalFeed = null;

	/**
	 * @var \Kaltura\Client\Service\PersonalListService
	 */
	protected $personalList = null;

	/**
	 * @var \Kaltura\Client\Service\PinService
	 */
	protected $pin = null;

	/**
	 * @var \Kaltura\Client\Service\PlaybackProfileService
	 */
	protected $playbackProfile = null;

	/**
	 * @var \Kaltura\Client\Service\PpvService
	 */
	protected $ppv = null;

	/**
	 * @var \Kaltura\Client\Service\PriceDetailsService
	 */
	protected $priceDetails = null;

	/**
	 * @var \Kaltura\Client\Service\PricePlanService
	 */
	protected $pricePlan = null;

	/**
	 * @var \Kaltura\Client\Service\ProductPriceService
	 */
	protected $productPrice = null;

	/**
	 * @var \Kaltura\Client\Service\PurchaseSettingsService
	 */
	protected $purchaseSettings = null;

	/**
	 * @var \Kaltura\Client\Service\RatioService
	 */
	protected $ratio = null;

	/**
	 * @var \Kaltura\Client\Service\RecommendationProfileService
	 */
	protected $recommendationProfile = null;

	/**
	 * @var \Kaltura\Client\Service\RecordingService
	 */
	protected $recording = null;

	/**
	 * @var \Kaltura\Client\Service\RegionService
	 */
	protected $region = null;

	/**
	 * @var \Kaltura\Client\Service\RegistrySettingsService
	 */
	protected $registrySettings = null;

	/**
	 * @var \Kaltura\Client\Service\ReminderService
	 */
	protected $reminder = null;

	/**
	 * @var \Kaltura\Client\Service\ReportService
	 */
	protected $report = null;

	/**
	 * @var \Kaltura\Client\Service\SearchHistoryService
	 */
	protected $searchHistory = null;

	/**
	 * @var \Kaltura\Client\Service\SegmentationTypeService
	 */
	protected $segmentationType = null;

	/**
	 * @var \Kaltura\Client\Service\SeriesRecordingService
	 */
	protected $seriesRecording = null;

	/**
	 * @var \Kaltura\Client\Service\SessionService
	 */
	protected $session = null;

	/**
	 * @var \Kaltura\Client\Service\SmsAdapterProfileService
	 */
	protected $smsAdapterProfile = null;

	/**
	 * @var \Kaltura\Client\Service\SocialActionService
	 */
	protected $socialAction = null;

	/**
	 * @var \Kaltura\Client\Service\SocialCommentService
	 */
	protected $socialComment = null;

	/**
	 * @var \Kaltura\Client\Service\SocialService
	 */
	protected $social = null;

	/**
	 * @var \Kaltura\Client\Service\SocialFriendActivityService
	 */
	protected $socialFriendActivity = null;

	/**
	 * @var \Kaltura\Client\Service\SsoAdapterProfileService
	 */
	protected $ssoAdapterProfile = null;

	/**
	 * @var \Kaltura\Client\Service\SubscriptionService
	 */
	protected $subscription = null;

	/**
	 * @var \Kaltura\Client\Service\SubscriptionSetService
	 */
	protected $subscriptionSet = null;

	/**
	 * @var \Kaltura\Client\Service\SystemService
	 */
	protected $system = null;

	/**
	 * @var \Kaltura\Client\Service\TagService
	 */
	protected $tag = null;

	/**
	 * @var \Kaltura\Client\Service\TimeShiftedTvPartnerSettingsService
	 */
	protected $timeShiftedTvPartnerSettings = null;

	/**
	 * @var \Kaltura\Client\Service\TopicService
	 */
	protected $topic = null;

	/**
	 * @var \Kaltura\Client\Service\TopicNotificationService
	 */
	protected $topicNotification = null;

	/**
	 * @var \Kaltura\Client\Service\TopicNotificationMessageService
	 */
	protected $topicNotificationMessage = null;

	/**
	 * @var \Kaltura\Client\Service\TransactionService
	 */
	protected $transaction = null;

	/**
	 * @var \Kaltura\Client\Service\TransactionHistoryService
	 */
	protected $transactionHistory = null;

	/**
	 * @var \Kaltura\Client\Service\TvmRuleService
	 */
	protected $tvmRule = null;

	/**
	 * @var \Kaltura\Client\Service\UnifiedPaymentService
	 */
	protected $unifiedPayment = null;

	/**
	 * @var \Kaltura\Client\Service\UploadTokenService
	 */
	protected $uploadToken = null;

	/**
	 * @var \Kaltura\Client\Service\UserAssetRuleService
	 */
	protected $userAssetRule = null;

	/**
	 * @var \Kaltura\Client\Service\UserAssetsListItemService
	 */
	protected $userAssetsListItem = null;

	/**
	 * @var \Kaltura\Client\Service\UserInterestService
	 */
	protected $userInterest = null;

	/**
	 * @var \Kaltura\Client\Service\UserLoginPinService
	 */
	protected $userLoginPin = null;

	/**
	 * @var \Kaltura\Client\Service\UserRoleService
	 */
	protected $userRole = null;

	/**
	 * @var \Kaltura\Client\Service\UserSegmentService
	 */
	protected $userSegment = null;

	/**
	 * Kaltura client constructor
	 *
	 * @param \Kaltura\Client\Configuration $config
	 */
	public function __construct(Configuration $config)
	{
		parent::__construct($config);
		
		$this->setClientTag('php5:20-09-21');
		$this->setApiVersion('5.6.0.28360');
	}
	
	/**
	 * @return \Kaltura\Client\Service\AnnouncementService
	 */
	public function getAnnouncementService()
	{
		if (is_null($this->announcement))
			$this->announcement = new \Kaltura\Client\Service\AnnouncementService($this);
		return $this->announcement;
	}
	/**
	 * @return \Kaltura\Client\Service\AppTokenService
	 */
	public function getAppTokenService()
	{
		if (is_null($this->appToken))
			$this->appToken = new \Kaltura\Client\Service\AppTokenService($this);
		return $this->appToken;
	}
	/**
	 * @return \Kaltura\Client\Service\AssetCommentService
	 */
	public function getAssetCommentService()
	{
		if (is_null($this->assetComment))
			$this->assetComment = new \Kaltura\Client\Service\AssetCommentService($this);
		return $this->assetComment;
	}
	/**
	 * @return \Kaltura\Client\Service\AssetService
	 */
	public function getAssetService()
	{
		if (is_null($this->asset))
			$this->asset = new \Kaltura\Client\Service\AssetService($this);
		return $this->asset;
	}
	/**
	 * @return \Kaltura\Client\Service\AssetFileService
	 */
	public function getAssetFileService()
	{
		if (is_null($this->assetFile))
			$this->assetFile = new \Kaltura\Client\Service\AssetFileService($this);
		return $this->assetFile;
	}
	/**
	 * @return \Kaltura\Client\Service\AssetFilePpvService
	 */
	public function getAssetFilePpvService()
	{
		if (is_null($this->assetFilePpv))
			$this->assetFilePpv = new \Kaltura\Client\Service\AssetFilePpvService($this);
		return $this->assetFilePpv;
	}
	/**
	 * @return \Kaltura\Client\Service\AssetHistoryService
	 */
	public function getAssetHistoryService()
	{
		if (is_null($this->assetHistory))
			$this->assetHistory = new \Kaltura\Client\Service\AssetHistoryService($this);
		return $this->assetHistory;
	}
	/**
	 * @return \Kaltura\Client\Service\AssetRuleService
	 */
	public function getAssetRuleService()
	{
		if (is_null($this->assetRule))
			$this->assetRule = new \Kaltura\Client\Service\AssetRuleService($this);
		return $this->assetRule;
	}
	/**
	 * @return \Kaltura\Client\Service\AssetStatisticsService
	 */
	public function getAssetStatisticsService()
	{
		if (is_null($this->assetStatistics))
			$this->assetStatistics = new \Kaltura\Client\Service\AssetStatisticsService($this);
		return $this->assetStatistics;
	}
	/**
	 * @return \Kaltura\Client\Service\AssetStructService
	 */
	public function getAssetStructService()
	{
		if (is_null($this->assetStruct))
			$this->assetStruct = new \Kaltura\Client\Service\AssetStructService($this);
		return $this->assetStruct;
	}
	/**
	 * @return \Kaltura\Client\Service\AssetStructMetaService
	 */
	public function getAssetStructMetaService()
	{
		if (is_null($this->assetStructMeta))
			$this->assetStructMeta = new \Kaltura\Client\Service\AssetStructMetaService($this);
		return $this->assetStructMeta;
	}
	/**
	 * @return \Kaltura\Client\Service\AssetUserRuleService
	 */
	public function getAssetUserRuleService()
	{
		if (is_null($this->assetUserRule))
			$this->assetUserRule = new \Kaltura\Client\Service\AssetUserRuleService($this);
		return $this->assetUserRule;
	}
	/**
	 * @return \Kaltura\Client\Service\BookmarkService
	 */
	public function getBookmarkService()
	{
		if (is_null($this->bookmark))
			$this->bookmark = new \Kaltura\Client\Service\BookmarkService($this);
		return $this->bookmark;
	}
	/**
	 * @return \Kaltura\Client\Service\BulkUploadService
	 */
	public function getBulkUploadService()
	{
		if (is_null($this->bulkUpload))
			$this->bulkUpload = new \Kaltura\Client\Service\BulkUploadService($this);
		return $this->bulkUpload;
	}
	/**
	 * @return \Kaltura\Client\Service\BusinessModuleRuleService
	 */
	public function getBusinessModuleRuleService()
	{
		if (is_null($this->businessModuleRule))
			$this->businessModuleRule = new \Kaltura\Client\Service\BusinessModuleRuleService($this);
		return $this->businessModuleRule;
	}
	/**
	 * @return \Kaltura\Client\Service\CategoryItemService
	 */
	public function getCategoryItemService()
	{
		if (is_null($this->categoryItem))
			$this->categoryItem = new \Kaltura\Client\Service\CategoryItemService($this);
		return $this->categoryItem;
	}
	/**
	 * @return \Kaltura\Client\Service\CategoryTreeService
	 */
	public function getCategoryTreeService()
	{
		if (is_null($this->categoryTree))
			$this->categoryTree = new \Kaltura\Client\Service\CategoryTreeService($this);
		return $this->categoryTree;
	}
	/**
	 * @return \Kaltura\Client\Service\CdnAdapterProfileService
	 */
	public function getCdnAdapterProfileService()
	{
		if (is_null($this->cdnAdapterProfile))
			$this->cdnAdapterProfile = new \Kaltura\Client\Service\CdnAdapterProfileService($this);
		return $this->cdnAdapterProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\CdnPartnerSettingsService
	 */
	public function getCdnPartnerSettingsService()
	{
		if (is_null($this->cdnPartnerSettings))
			$this->cdnPartnerSettings = new \Kaltura\Client\Service\CdnPartnerSettingsService($this);
		return $this->cdnPartnerSettings;
	}
	/**
	 * @return \Kaltura\Client\Service\CDVRAdapterProfileService
	 */
	public function getCDVRAdapterProfileService()
	{
		if (is_null($this->cDVRAdapterProfile))
			$this->cDVRAdapterProfile = new \Kaltura\Client\Service\CDVRAdapterProfileService($this);
		return $this->cDVRAdapterProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\ChannelService
	 */
	public function getChannelService()
	{
		if (is_null($this->channel))
			$this->channel = new \Kaltura\Client\Service\ChannelService($this);
		return $this->channel;
	}
	/**
	 * @return \Kaltura\Client\Service\CollectionService
	 */
	public function getCollectionService()
	{
		if (is_null($this->collection))
			$this->collection = new \Kaltura\Client\Service\CollectionService($this);
		return $this->collection;
	}
	/**
	 * @return \Kaltura\Client\Service\CompensationService
	 */
	public function getCompensationService()
	{
		if (is_null($this->compensation))
			$this->compensation = new \Kaltura\Client\Service\CompensationService($this);
		return $this->compensation;
	}
	/**
	 * @return \Kaltura\Client\Service\ConfigurationGroupService
	 */
	public function getConfigurationGroupService()
	{
		if (is_null($this->configurationGroup))
			$this->configurationGroup = new \Kaltura\Client\Service\ConfigurationGroupService($this);
		return $this->configurationGroup;
	}
	/**
	 * @return \Kaltura\Client\Service\ConfigurationGroupDeviceService
	 */
	public function getConfigurationGroupDeviceService()
	{
		if (is_null($this->configurationGroupDevice))
			$this->configurationGroupDevice = new \Kaltura\Client\Service\ConfigurationGroupDeviceService($this);
		return $this->configurationGroupDevice;
	}
	/**
	 * @return \Kaltura\Client\Service\ConfigurationGroupTagService
	 */
	public function getConfigurationGroupTagService()
	{
		if (is_null($this->configurationGroupTag))
			$this->configurationGroupTag = new \Kaltura\Client\Service\ConfigurationGroupTagService($this);
		return $this->configurationGroupTag;
	}
	/**
	 * @return \Kaltura\Client\Service\ConfigurationsService
	 */
	public function getConfigurationsService()
	{
		if (is_null($this->configurations))
			$this->configurations = new \Kaltura\Client\Service\ConfigurationsService($this);
		return $this->configurations;
	}
	/**
	 * @return \Kaltura\Client\Service\CountryService
	 */
	public function getCountryService()
	{
		if (is_null($this->country))
			$this->country = new \Kaltura\Client\Service\CountryService($this);
		return $this->country;
	}
	/**
	 * @return \Kaltura\Client\Service\CouponService
	 */
	public function getCouponService()
	{
		if (is_null($this->coupon))
			$this->coupon = new \Kaltura\Client\Service\CouponService($this);
		return $this->coupon;
	}
	/**
	 * @return \Kaltura\Client\Service\CouponsGroupService
	 */
	public function getCouponsGroupService()
	{
		if (is_null($this->couponsGroup))
			$this->couponsGroup = new \Kaltura\Client\Service\CouponsGroupService($this);
		return $this->couponsGroup;
	}
	/**
	 * @return \Kaltura\Client\Service\CurrencyService
	 */
	public function getCurrencyService()
	{
		if (is_null($this->currency))
			$this->currency = new \Kaltura\Client\Service\CurrencyService($this);
		return $this->currency;
	}
	/**
	 * @return \Kaltura\Client\Service\DeviceBrandService
	 */
	public function getDeviceBrandService()
	{
		if (is_null($this->deviceBrand))
			$this->deviceBrand = new \Kaltura\Client\Service\DeviceBrandService($this);
		return $this->deviceBrand;
	}
	/**
	 * @return \Kaltura\Client\Service\DeviceFamilyService
	 */
	public function getDeviceFamilyService()
	{
		if (is_null($this->deviceFamily))
			$this->deviceFamily = new \Kaltura\Client\Service\DeviceFamilyService($this);
		return $this->deviceFamily;
	}
	/**
	 * @return \Kaltura\Client\Service\DiscountDetailsService
	 */
	public function getDiscountDetailsService()
	{
		if (is_null($this->discountDetails))
			$this->discountDetails = new \Kaltura\Client\Service\DiscountDetailsService($this);
		return $this->discountDetails;
	}
	/**
	 * @return \Kaltura\Client\Service\DrmProfileService
	 */
	public function getDrmProfileService()
	{
		if (is_null($this->drmProfile))
			$this->drmProfile = new \Kaltura\Client\Service\DrmProfileService($this);
		return $this->drmProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\EmailService
	 */
	public function getEmailService()
	{
		if (is_null($this->email))
			$this->email = new \Kaltura\Client\Service\EmailService($this);
		return $this->email;
	}
	/**
	 * @return \Kaltura\Client\Service\EngagementAdapterService
	 */
	public function getEngagementAdapterService()
	{
		if (is_null($this->engagementAdapter))
			$this->engagementAdapter = new \Kaltura\Client\Service\EngagementAdapterService($this);
		return $this->engagementAdapter;
	}
	/**
	 * @return \Kaltura\Client\Service\EngagementService
	 */
	public function getEngagementService()
	{
		if (is_null($this->engagement))
			$this->engagement = new \Kaltura\Client\Service\EngagementService($this);
		return $this->engagement;
	}
	/**
	 * @return \Kaltura\Client\Service\EntitlementService
	 */
	public function getEntitlementService()
	{
		if (is_null($this->entitlement))
			$this->entitlement = new \Kaltura\Client\Service\EntitlementService($this);
		return $this->entitlement;
	}
	/**
	 * @return \Kaltura\Client\Service\EventNotificationActionService
	 */
	public function getEventNotificationActionService()
	{
		if (is_null($this->eventNotificationAction))
			$this->eventNotificationAction = new \Kaltura\Client\Service\EventNotificationActionService($this);
		return $this->eventNotificationAction;
	}
	/**
	 * @return \Kaltura\Client\Service\EventNotificationService
	 */
	public function getEventNotificationService()
	{
		if (is_null($this->eventNotification))
			$this->eventNotification = new \Kaltura\Client\Service\EventNotificationService($this);
		return $this->eventNotification;
	}
	/**
	 * @return \Kaltura\Client\Service\ExportTaskService
	 */
	public function getExportTaskService()
	{
		if (is_null($this->exportTask))
			$this->exportTask = new \Kaltura\Client\Service\ExportTaskService($this);
		return $this->exportTask;
	}
	/**
	 * @return \Kaltura\Client\Service\ExternalChannelProfileService
	 */
	public function getExternalChannelProfileService()
	{
		if (is_null($this->externalChannelProfile))
			$this->externalChannelProfile = new \Kaltura\Client\Service\ExternalChannelProfileService($this);
		return $this->externalChannelProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\FavoriteService
	 */
	public function getFavoriteService()
	{
		if (is_null($this->favorite))
			$this->favorite = new \Kaltura\Client\Service\FavoriteService($this);
		return $this->favorite;
	}
	/**
	 * @return \Kaltura\Client\Service\FollowTvSeriesService
	 */
	public function getFollowTvSeriesService()
	{
		if (is_null($this->followTvSeries))
			$this->followTvSeries = new \Kaltura\Client\Service\FollowTvSeriesService($this);
		return $this->followTvSeries;
	}
	/**
	 * @return \Kaltura\Client\Service\HomeNetworkService
	 */
	public function getHomeNetworkService()
	{
		if (is_null($this->homeNetwork))
			$this->homeNetwork = new \Kaltura\Client\Service\HomeNetworkService($this);
		return $this->homeNetwork;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdService
	 */
	public function getHouseholdService()
	{
		if (is_null($this->household))
			$this->household = new \Kaltura\Client\Service\HouseholdService($this);
		return $this->household;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdCouponService
	 */
	public function getHouseholdCouponService()
	{
		if (is_null($this->householdCoupon))
			$this->householdCoupon = new \Kaltura\Client\Service\HouseholdCouponService($this);
		return $this->householdCoupon;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdDeviceService
	 */
	public function getHouseholdDeviceService()
	{
		if (is_null($this->householdDevice))
			$this->householdDevice = new \Kaltura\Client\Service\HouseholdDeviceService($this);
		return $this->householdDevice;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdLimitationsService
	 */
	public function getHouseholdLimitationsService()
	{
		if (is_null($this->householdLimitations))
			$this->householdLimitations = new \Kaltura\Client\Service\HouseholdLimitationsService($this);
		return $this->householdLimitations;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdPaymentGatewayService
	 */
	public function getHouseholdPaymentGatewayService()
	{
		if (is_null($this->householdPaymentGateway))
			$this->householdPaymentGateway = new \Kaltura\Client\Service\HouseholdPaymentGatewayService($this);
		return $this->householdPaymentGateway;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdPaymentMethodService
	 */
	public function getHouseholdPaymentMethodService()
	{
		if (is_null($this->householdPaymentMethod))
			$this->householdPaymentMethod = new \Kaltura\Client\Service\HouseholdPaymentMethodService($this);
		return $this->householdPaymentMethod;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdPremiumServiceService
	 */
	public function getHouseholdPremiumServiceService()
	{
		if (is_null($this->householdPremiumService))
			$this->householdPremiumService = new \Kaltura\Client\Service\HouseholdPremiumServiceService($this);
		return $this->householdPremiumService;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdQuotaService
	 */
	public function getHouseholdQuotaService()
	{
		if (is_null($this->householdQuota))
			$this->householdQuota = new \Kaltura\Client\Service\HouseholdQuotaService($this);
		return $this->householdQuota;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdSegmentService
	 */
	public function getHouseholdSegmentService()
	{
		if (is_null($this->householdSegment))
			$this->householdSegment = new \Kaltura\Client\Service\HouseholdSegmentService($this);
		return $this->householdSegment;
	}
	/**
	 * @return \Kaltura\Client\Service\HouseholdUserService
	 */
	public function getHouseholdUserService()
	{
		if (is_null($this->householdUser))
			$this->householdUser = new \Kaltura\Client\Service\HouseholdUserService($this);
		return $this->householdUser;
	}
	/**
	 * @return \Kaltura\Client\Service\ImageService
	 */
	public function getImageService()
	{
		if (is_null($this->image))
			$this->image = new \Kaltura\Client\Service\ImageService($this);
		return $this->image;
	}
	/**
	 * @return \Kaltura\Client\Service\ImageTypeService
	 */
	public function getImageTypeService()
	{
		if (is_null($this->imageType))
			$this->imageType = new \Kaltura\Client\Service\ImageTypeService($this);
		return $this->imageType;
	}
	/**
	 * @return \Kaltura\Client\Service\InboxMessageService
	 */
	public function getInboxMessageService()
	{
		if (is_null($this->inboxMessage))
			$this->inboxMessage = new \Kaltura\Client\Service\InboxMessageService($this);
		return $this->inboxMessage;
	}
	/**
	 * @return \Kaltura\Client\Service\IngestProfileService
	 */
	public function getIngestProfileService()
	{
		if (is_null($this->IngestProfile))
			$this->IngestProfile = new \Kaltura\Client\Service\IngestProfileService($this);
		return $this->IngestProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\IotService
	 */
	public function getIotService()
	{
		if (is_null($this->iot))
			$this->iot = new \Kaltura\Client\Service\IotService($this);
		return $this->iot;
	}
	/**
	 * @return \Kaltura\Client\Service\IotProfileService
	 */
	public function getIotProfileService()
	{
		if (is_null($this->iotProfile))
			$this->iotProfile = new \Kaltura\Client\Service\IotProfileService($this);
		return $this->iotProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\LanguageService
	 */
	public function getLanguageService()
	{
		if (is_null($this->language))
			$this->language = new \Kaltura\Client\Service\LanguageService($this);
		return $this->language;
	}
	/**
	 * @return \Kaltura\Client\Service\LicensedUrlService
	 */
	public function getLicensedUrlService()
	{
		if (is_null($this->licensedUrl))
			$this->licensedUrl = new \Kaltura\Client\Service\LicensedUrlService($this);
		return $this->licensedUrl;
	}
	/**
	 * @return \Kaltura\Client\Service\MediaConcurrencyRuleService
	 */
	public function getMediaConcurrencyRuleService()
	{
		if (is_null($this->mediaConcurrencyRule))
			$this->mediaConcurrencyRule = new \Kaltura\Client\Service\MediaConcurrencyRuleService($this);
		return $this->mediaConcurrencyRule;
	}
	/**
	 * @return \Kaltura\Client\Service\MediaFileService
	 */
	public function getMediaFileService()
	{
		if (is_null($this->mediaFile))
			$this->mediaFile = new \Kaltura\Client\Service\MediaFileService($this);
		return $this->mediaFile;
	}
	/**
	 * @return \Kaltura\Client\Service\MediaFileTypeService
	 */
	public function getMediaFileTypeService()
	{
		if (is_null($this->mediaFileType))
			$this->mediaFileType = new \Kaltura\Client\Service\MediaFileTypeService($this);
		return $this->mediaFileType;
	}
	/**
	 * @return \Kaltura\Client\Service\MessageTemplateService
	 */
	public function getMessageTemplateService()
	{
		if (is_null($this->messageTemplate))
			$this->messageTemplate = new \Kaltura\Client\Service\MessageTemplateService($this);
		return $this->messageTemplate;
	}
	/**
	 * @return \Kaltura\Client\Service\MetaService
	 */
	public function getMetaService()
	{
		if (is_null($this->meta))
			$this->meta = new \Kaltura\Client\Service\MetaService($this);
		return $this->meta;
	}
	/**
	 * @return \Kaltura\Client\Service\NotificationService
	 */
	public function getNotificationService()
	{
		if (is_null($this->notification))
			$this->notification = new \Kaltura\Client\Service\NotificationService($this);
		return $this->notification;
	}
	/**
	 * @return \Kaltura\Client\Service\NotificationsPartnerSettingsService
	 */
	public function getNotificationsPartnerSettingsService()
	{
		if (is_null($this->notificationsPartnerSettings))
			$this->notificationsPartnerSettings = new \Kaltura\Client\Service\NotificationsPartnerSettingsService($this);
		return $this->notificationsPartnerSettings;
	}
	/**
	 * @return \Kaltura\Client\Service\NotificationsSettingsService
	 */
	public function getNotificationsSettingsService()
	{
		if (is_null($this->notificationsSettings))
			$this->notificationsSettings = new \Kaltura\Client\Service\NotificationsSettingsService($this);
		return $this->notificationsSettings;
	}
	/**
	 * @return \Kaltura\Client\Service\OssAdapterProfileService
	 */
	public function getOssAdapterProfileService()
	{
		if (is_null($this->ossAdapterProfile))
			$this->ossAdapterProfile = new \Kaltura\Client\Service\OssAdapterProfileService($this);
		return $this->ossAdapterProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\OttCategoryService
	 */
	public function getOttCategoryService()
	{
		if (is_null($this->ottCategory))
			$this->ottCategory = new \Kaltura\Client\Service\OttCategoryService($this);
		return $this->ottCategory;
	}
	/**
	 * @return \Kaltura\Client\Service\OttUserService
	 */
	public function getOttUserService()
	{
		if (is_null($this->ottUser))
			$this->ottUser = new \Kaltura\Client\Service\OttUserService($this);
		return $this->ottUser;
	}
	/**
	 * @return \Kaltura\Client\Service\ParentalRuleService
	 */
	public function getParentalRuleService()
	{
		if (is_null($this->parentalRule))
			$this->parentalRule = new \Kaltura\Client\Service\ParentalRuleService($this);
		return $this->parentalRule;
	}
	/**
	 * @return \Kaltura\Client\Service\PartnerConfigurationService
	 */
	public function getPartnerConfigurationService()
	{
		if (is_null($this->partnerConfiguration))
			$this->partnerConfiguration = new \Kaltura\Client\Service\PartnerConfigurationService($this);
		return $this->partnerConfiguration;
	}
	/**
	 * @return \Kaltura\Client\Service\PartnerService
	 */
	public function getPartnerService()
	{
		if (is_null($this->partner))
			$this->partner = new \Kaltura\Client\Service\PartnerService($this);
		return $this->partner;
	}
	/**
	 * @return \Kaltura\Client\Service\PasswordPolicyService
	 */
	public function getPasswordPolicyService()
	{
		if (is_null($this->passwordPolicy))
			$this->passwordPolicy = new \Kaltura\Client\Service\PasswordPolicyService($this);
		return $this->passwordPolicy;
	}
	/**
	 * @return \Kaltura\Client\Service\PaymentGatewayProfileService
	 */
	public function getPaymentGatewayProfileService()
	{
		if (is_null($this->paymentGatewayProfile))
			$this->paymentGatewayProfile = new \Kaltura\Client\Service\PaymentGatewayProfileService($this);
		return $this->paymentGatewayProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\PaymentMethodProfileService
	 */
	public function getPaymentMethodProfileService()
	{
		if (is_null($this->paymentMethodProfile))
			$this->paymentMethodProfile = new \Kaltura\Client\Service\PaymentMethodProfileService($this);
		return $this->paymentMethodProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\PermissionService
	 */
	public function getPermissionService()
	{
		if (is_null($this->permission))
			$this->permission = new \Kaltura\Client\Service\PermissionService($this);
		return $this->permission;
	}
	/**
	 * @return \Kaltura\Client\Service\PermissionItemService
	 */
	public function getPermissionItemService()
	{
		if (is_null($this->permissionItem))
			$this->permissionItem = new \Kaltura\Client\Service\PermissionItemService($this);
		return $this->permissionItem;
	}
	/**
	 * @return \Kaltura\Client\Service\PersonalFeedService
	 */
	public function getPersonalFeedService()
	{
		if (is_null($this->personalFeed))
			$this->personalFeed = new \Kaltura\Client\Service\PersonalFeedService($this);
		return $this->personalFeed;
	}
	/**
	 * @return \Kaltura\Client\Service\PersonalListService
	 */
	public function getPersonalListService()
	{
		if (is_null($this->personalList))
			$this->personalList = new \Kaltura\Client\Service\PersonalListService($this);
		return $this->personalList;
	}
	/**
	 * @return \Kaltura\Client\Service\PinService
	 */
	public function getPinService()
	{
		if (is_null($this->pin))
			$this->pin = new \Kaltura\Client\Service\PinService($this);
		return $this->pin;
	}
	/**
	 * @return \Kaltura\Client\Service\PlaybackProfileService
	 */
	public function getPlaybackProfileService()
	{
		if (is_null($this->playbackProfile))
			$this->playbackProfile = new \Kaltura\Client\Service\PlaybackProfileService($this);
		return $this->playbackProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\PpvService
	 */
	public function getPpvService()
	{
		if (is_null($this->ppv))
			$this->ppv = new \Kaltura\Client\Service\PpvService($this);
		return $this->ppv;
	}
	/**
	 * @return \Kaltura\Client\Service\PriceDetailsService
	 */
	public function getPriceDetailsService()
	{
		if (is_null($this->priceDetails))
			$this->priceDetails = new \Kaltura\Client\Service\PriceDetailsService($this);
		return $this->priceDetails;
	}
	/**
	 * @return \Kaltura\Client\Service\PricePlanService
	 */
	public function getPricePlanService()
	{
		if (is_null($this->pricePlan))
			$this->pricePlan = new \Kaltura\Client\Service\PricePlanService($this);
		return $this->pricePlan;
	}
	/**
	 * @return \Kaltura\Client\Service\ProductPriceService
	 */
	public function getProductPriceService()
	{
		if (is_null($this->productPrice))
			$this->productPrice = new \Kaltura\Client\Service\ProductPriceService($this);
		return $this->productPrice;
	}
	/**
	 * @return \Kaltura\Client\Service\PurchaseSettingsService
	 */
	public function getPurchaseSettingsService()
	{
		if (is_null($this->purchaseSettings))
			$this->purchaseSettings = new \Kaltura\Client\Service\PurchaseSettingsService($this);
		return $this->purchaseSettings;
	}
	/**
	 * @return \Kaltura\Client\Service\RatioService
	 */
	public function getRatioService()
	{
		if (is_null($this->ratio))
			$this->ratio = new \Kaltura\Client\Service\RatioService($this);
		return $this->ratio;
	}
	/**
	 * @return \Kaltura\Client\Service\RecommendationProfileService
	 */
	public function getRecommendationProfileService()
	{
		if (is_null($this->recommendationProfile))
			$this->recommendationProfile = new \Kaltura\Client\Service\RecommendationProfileService($this);
		return $this->recommendationProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\RecordingService
	 */
	public function getRecordingService()
	{
		if (is_null($this->recording))
			$this->recording = new \Kaltura\Client\Service\RecordingService($this);
		return $this->recording;
	}
	/**
	 * @return \Kaltura\Client\Service\RegionService
	 */
	public function getRegionService()
	{
		if (is_null($this->region))
			$this->region = new \Kaltura\Client\Service\RegionService($this);
		return $this->region;
	}
	/**
	 * @return \Kaltura\Client\Service\RegistrySettingsService
	 */
	public function getRegistrySettingsService()
	{
		if (is_null($this->registrySettings))
			$this->registrySettings = new \Kaltura\Client\Service\RegistrySettingsService($this);
		return $this->registrySettings;
	}
	/**
	 * @return \Kaltura\Client\Service\ReminderService
	 */
	public function getReminderService()
	{
		if (is_null($this->reminder))
			$this->reminder = new \Kaltura\Client\Service\ReminderService($this);
		return $this->reminder;
	}
	/**
	 * @return \Kaltura\Client\Service\ReportService
	 */
	public function getReportService()
	{
		if (is_null($this->report))
			$this->report = new \Kaltura\Client\Service\ReportService($this);
		return $this->report;
	}
	/**
	 * @return \Kaltura\Client\Service\SearchHistoryService
	 */
	public function getSearchHistoryService()
	{
		if (is_null($this->searchHistory))
			$this->searchHistory = new \Kaltura\Client\Service\SearchHistoryService($this);
		return $this->searchHistory;
	}
	/**
	 * @return \Kaltura\Client\Service\SegmentationTypeService
	 */
	public function getSegmentationTypeService()
	{
		if (is_null($this->segmentationType))
			$this->segmentationType = new \Kaltura\Client\Service\SegmentationTypeService($this);
		return $this->segmentationType;
	}
	/**
	 * @return \Kaltura\Client\Service\SeriesRecordingService
	 */
	public function getSeriesRecordingService()
	{
		if (is_null($this->seriesRecording))
			$this->seriesRecording = new \Kaltura\Client\Service\SeriesRecordingService($this);
		return $this->seriesRecording;
	}
	/**
	 * @return \Kaltura\Client\Service\SessionService
	 */
	public function getSessionService()
	{
		if (is_null($this->session))
			$this->session = new \Kaltura\Client\Service\SessionService($this);
		return $this->session;
	}
	/**
	 * @return \Kaltura\Client\Service\SmsAdapterProfileService
	 */
	public function getSmsAdapterProfileService()
	{
		if (is_null($this->smsAdapterProfile))
			$this->smsAdapterProfile = new \Kaltura\Client\Service\SmsAdapterProfileService($this);
		return $this->smsAdapterProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\SocialActionService
	 */
	public function getSocialActionService()
	{
		if (is_null($this->socialAction))
			$this->socialAction = new \Kaltura\Client\Service\SocialActionService($this);
		return $this->socialAction;
	}
	/**
	 * @return \Kaltura\Client\Service\SocialCommentService
	 */
	public function getSocialCommentService()
	{
		if (is_null($this->socialComment))
			$this->socialComment = new \Kaltura\Client\Service\SocialCommentService($this);
		return $this->socialComment;
	}
	/**
	 * @return \Kaltura\Client\Service\SocialService
	 */
	public function getSocialService()
	{
		if (is_null($this->social))
			$this->social = new \Kaltura\Client\Service\SocialService($this);
		return $this->social;
	}
	/**
	 * @return \Kaltura\Client\Service\SocialFriendActivityService
	 */
	public function getSocialFriendActivityService()
	{
		if (is_null($this->socialFriendActivity))
			$this->socialFriendActivity = new \Kaltura\Client\Service\SocialFriendActivityService($this);
		return $this->socialFriendActivity;
	}
	/**
	 * @return \Kaltura\Client\Service\SsoAdapterProfileService
	 */
	public function getSsoAdapterProfileService()
	{
		if (is_null($this->ssoAdapterProfile))
			$this->ssoAdapterProfile = new \Kaltura\Client\Service\SsoAdapterProfileService($this);
		return $this->ssoAdapterProfile;
	}
	/**
	 * @return \Kaltura\Client\Service\SubscriptionService
	 */
	public function getSubscriptionService()
	{
		if (is_null($this->subscription))
			$this->subscription = new \Kaltura\Client\Service\SubscriptionService($this);
		return $this->subscription;
	}
	/**
	 * @return \Kaltura\Client\Service\SubscriptionSetService
	 */
	public function getSubscriptionSetService()
	{
		if (is_null($this->subscriptionSet))
			$this->subscriptionSet = new \Kaltura\Client\Service\SubscriptionSetService($this);
		return $this->subscriptionSet;
	}
	/**
	 * @return \Kaltura\Client\Service\SystemService
	 */
	public function getSystemService()
	{
		if (is_null($this->system))
			$this->system = new \Kaltura\Client\Service\SystemService($this);
		return $this->system;
	}
	/**
	 * @return \Kaltura\Client\Service\TagService
	 */
	public function getTagService()
	{
		if (is_null($this->tag))
			$this->tag = new \Kaltura\Client\Service\TagService($this);
		return $this->tag;
	}
	/**
	 * @return \Kaltura\Client\Service\TimeShiftedTvPartnerSettingsService
	 */
	public function getTimeShiftedTvPartnerSettingsService()
	{
		if (is_null($this->timeShiftedTvPartnerSettings))
			$this->timeShiftedTvPartnerSettings = new \Kaltura\Client\Service\TimeShiftedTvPartnerSettingsService($this);
		return $this->timeShiftedTvPartnerSettings;
	}
	/**
	 * @return \Kaltura\Client\Service\TopicService
	 */
	public function getTopicService()
	{
		if (is_null($this->topic))
			$this->topic = new \Kaltura\Client\Service\TopicService($this);
		return $this->topic;
	}
	/**
	 * @return \Kaltura\Client\Service\TopicNotificationService
	 */
	public function getTopicNotificationService()
	{
		if (is_null($this->topicNotification))
			$this->topicNotification = new \Kaltura\Client\Service\TopicNotificationService($this);
		return $this->topicNotification;
	}
	/**
	 * @return \Kaltura\Client\Service\TopicNotificationMessageService
	 */
	public function getTopicNotificationMessageService()
	{
		if (is_null($this->topicNotificationMessage))
			$this->topicNotificationMessage = new \Kaltura\Client\Service\TopicNotificationMessageService($this);
		return $this->topicNotificationMessage;
	}
	/**
	 * @return \Kaltura\Client\Service\TransactionService
	 */
	public function getTransactionService()
	{
		if (is_null($this->transaction))
			$this->transaction = new \Kaltura\Client\Service\TransactionService($this);
		return $this->transaction;
	}
	/**
	 * @return \Kaltura\Client\Service\TransactionHistoryService
	 */
	public function getTransactionHistoryService()
	{
		if (is_null($this->transactionHistory))
			$this->transactionHistory = new \Kaltura\Client\Service\TransactionHistoryService($this);
		return $this->transactionHistory;
	}
	/**
	 * @return \Kaltura\Client\Service\TvmRuleService
	 */
	public function getTvmRuleService()
	{
		if (is_null($this->tvmRule))
			$this->tvmRule = new \Kaltura\Client\Service\TvmRuleService($this);
		return $this->tvmRule;
	}
	/**
	 * @return \Kaltura\Client\Service\UnifiedPaymentService
	 */
	public function getUnifiedPaymentService()
	{
		if (is_null($this->unifiedPayment))
			$this->unifiedPayment = new \Kaltura\Client\Service\UnifiedPaymentService($this);
		return $this->unifiedPayment;
	}
	/**
	 * @return \Kaltura\Client\Service\UploadTokenService
	 */
	public function getUploadTokenService()
	{
		if (is_null($this->uploadToken))
			$this->uploadToken = new \Kaltura\Client\Service\UploadTokenService($this);
		return $this->uploadToken;
	}
	/**
	 * @return \Kaltura\Client\Service\UserAssetRuleService
	 */
	public function getUserAssetRuleService()
	{
		if (is_null($this->userAssetRule))
			$this->userAssetRule = new \Kaltura\Client\Service\UserAssetRuleService($this);
		return $this->userAssetRule;
	}
	/**
	 * @return \Kaltura\Client\Service\UserAssetsListItemService
	 */
	public function getUserAssetsListItemService()
	{
		if (is_null($this->userAssetsListItem))
			$this->userAssetsListItem = new \Kaltura\Client\Service\UserAssetsListItemService($this);
		return $this->userAssetsListItem;
	}
	/**
	 * @return \Kaltura\Client\Service\UserInterestService
	 */
	public function getUserInterestService()
	{
		if (is_null($this->userInterest))
			$this->userInterest = new \Kaltura\Client\Service\UserInterestService($this);
		return $this->userInterest;
	}
	/**
	 * @return \Kaltura\Client\Service\UserLoginPinService
	 */
	public function getUserLoginPinService()
	{
		if (is_null($this->userLoginPin))
			$this->userLoginPin = new \Kaltura\Client\Service\UserLoginPinService($this);
		return $this->userLoginPin;
	}
	/**
	 * @return \Kaltura\Client\Service\UserRoleService
	 */
	public function getUserRoleService()
	{
		if (is_null($this->userRole))
			$this->userRole = new \Kaltura\Client\Service\UserRoleService($this);
		return $this->userRole;
	}
	/**
	 * @return \Kaltura\Client\Service\UserSegmentService
	 */
	public function getUserSegmentService()
	{
		if (is_null($this->userSegment))
			$this->userSegment = new \Kaltura\Client\Service\UserSegmentService($this);
		return $this->userSegment;
	}
	/**
	 * Client tag
	 * 
	 * @param string $clientTag
	 */
	public function setClientTag($clientTag)
	{
		$this->clientConfiguration['clientTag'] = $clientTag;
	}
	
	/**
	 * Client tag
	 * 
	 * @return string
	 */
	public function getClientTag()
	{
		if(isset($this->clientConfiguration['clientTag']))
		{
			return $this->clientConfiguration['clientTag'];
		}
		
		return null;
	}
	
	/**
	 * API Version
	 * 
	 * @param string $apiVersion
	 */
	public function setApiVersion($apiVersion)
	{
		$this->clientConfiguration['apiVersion'] = $apiVersion;
	}
	
	/**
	 * API Version
	 * 
	 * @return string
	 */
	public function getApiVersion()
	{
		if(isset($this->clientConfiguration['apiVersion']))
		{
			return $this->clientConfiguration['apiVersion'];
		}
		
		return null;
	}
	
	/**
	 * Impersonated partner id
	 * 
	 * @param int $partnerId
	 */
	public function setPartnerId($partnerId)
	{
		$this->requestConfiguration['partnerId'] = $partnerId;
	}
	
	/**
	 * Impersonated partner id
	 * 
	 * @return int
	 */
	public function getPartnerId()
	{
		if(isset($this->requestConfiguration['partnerId']))
		{
			return $this->requestConfiguration['partnerId'];
		}
		
		return null;
	}
	
	/**
	 * Impersonated user id
	 * 
	 * @param int $userId
	 */
	public function setUserId($userId)
	{
		$this->requestConfiguration['userId'] = $userId;
	}
	
	/**
	 * Impersonated user id
	 * 
	 * @return int
	 */
	public function getUserId()
	{
		if(isset($this->requestConfiguration['userId']))
		{
			return $this->requestConfiguration['userId'];
		}
		
		return null;
	}
	
	/**
	 * Content language
	 * 
	 * @param string $language
	 */
	public function setLanguage($language)
	{
		$this->requestConfiguration['language'] = $language;
	}
	
	/**
	 * Content language
	 * 
	 * @return string
	 */
	public function getLanguage()
	{
		if(isset($this->requestConfiguration['language']))
		{
			return $this->requestConfiguration['language'];
		}
		
		return null;
	}
	
	/**
	 * Content currency
	 * 
	 * @param string $currency
	 */
	public function setCurrency($currency)
	{
		$this->requestConfiguration['currency'] = $currency;
	}
	
	/**
	 * Content currency
	 * 
	 * @return string
	 */
	public function getCurrency()
	{
		if(isset($this->requestConfiguration['currency']))
		{
			return $this->requestConfiguration['currency'];
		}
		
		return null;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @param string $ks
	 */
	public function setKs($ks)
	{
		$this->requestConfiguration['ks'] = $ks;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @return string
	 */
	public function getKs()
	{
		if(isset($this->requestConfiguration['ks']))
		{
			return $this->requestConfiguration['ks'];
		}
		
		return null;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @param string $sessionId
	 */
	public function setSessionId($sessionId)
	{
		$this->requestConfiguration['ks'] = $sessionId;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @return string
	 */
	public function getSessionId()
	{
		if(isset($this->requestConfiguration['ks']))
		{
			return $this->requestConfiguration['ks'];
		}
		
		return null;
	}
	
	/**
	 * Response profile - this attribute will be automatically unset after every API call
	 * 
	 * @param \Kaltura\Client\Type\BaseResponseProfile $responseProfile
	 */
	public function setResponseProfile(\Kaltura\Client\Type\BaseResponseProfile $responseProfile)
	{
		$this->requestConfiguration['responseProfile'] = $responseProfile;
	}
	
	/**
	 * Response profile - this attribute will be automatically unset after every API call
	 * 
	 * @return \Kaltura\Client\Type\BaseResponseProfile
	 */
	public function getResponseProfile()
	{
		if(isset($this->requestConfiguration['responseProfile']))
		{
			return $this->requestConfiguration['responseProfile'];
		}
		
		return null;
	}
	
	/**
	 * Abort the Multireuqset call if any error occurs in one of the requests
	 * 
	 * @param bool $abortOnError
	 */
	public function setAbortOnError($abortOnError)
	{
		$this->requestConfiguration['abortOnError'] = $abortOnError;
	}
	
	/**
	 * Abort the Multireuqset call if any error occurs in one of the requests
	 * 
	 * @return bool
	 */
	public function getAbortOnError()
	{
		if(isset($this->requestConfiguration['abortOnError']))
		{
			return $this->requestConfiguration['abortOnError'];
		}
		
		return null;
	}
	
	/**
	 * Abort all following requests if current request has an error
	 * 
	 * @param bool $abortAllOnError
	 */
	public function setAbortAllOnError($abortAllOnError)
	{
		$this->requestConfiguration['abortAllOnError'] = $abortAllOnError;
	}
	
	/**
	 * Abort all following requests if current request has an error
	 * 
	 * @return bool
	 */
	public function getAbortAllOnError()
	{
		if(isset($this->requestConfiguration['abortAllOnError']))
		{
			return $this->requestConfiguration['abortAllOnError'];
		}
		
		return null;
	}
	
	/**
	 * Skip current request according to skip condition
	 * 
	 * @param \Kaltura\Client\Type\SkipCondition $skipCondition
	 */
	public function setSkipCondition(\Kaltura\Client\Type\SkipCondition $skipCondition)
	{
		$this->requestConfiguration['skipCondition'] = $skipCondition;
	}
	
	/**
	 * Skip current request according to skip condition
	 * 
	 * @return \Kaltura\Client\Type\SkipCondition
	 */
	public function getSkipCondition()
	{
		if(isset($this->requestConfiguration['skipCondition']))
		{
			return $this->requestConfiguration['skipCondition'];
		}
		
		return null;
	}
	
	/**
	 * Clear all volatile configuration parameters
	 */
	protected function resetRequest()
	{
		parent::resetRequest();
		unset($this->requestConfiguration['responseProfile']);
	}
}
