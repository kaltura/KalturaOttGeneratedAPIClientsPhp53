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
namespace Kaltura\Client;

/**
 * @package Kaltura
 * @subpackage Client
 */
class TypeMap
{
	private static $map = array(
		'KalturaApiExceptionArg' => 'Kaltura\Client\ApiExceptionArg',
		'KalturaListResponse' => 'Kaltura\Client\Type\ListResponse',
		'KalturaApiExceptionArg' => 'Kaltura\Client\Type\ApiExceptionArg',
		'KalturaSocialComment' => 'Kaltura\Client\Type\SocialComment',
		'KalturaSocialCommentListResponse' => 'Kaltura\Client\Type\SocialCommentListResponse',
		'KalturaSocialNetworkComment' => 'Kaltura\Client\Type\SocialNetworkComment',
		'KalturaTwitterTwit' => 'Kaltura\Client\Type\TwitterTwit',
		'KalturaFacebookPost' => 'Kaltura\Client\Type\FacebookPost',
		'KalturaAssetComment' => 'Kaltura\Client\Type\AssetComment',
		'KalturaSocialAction' => 'Kaltura\Client\Type\SocialAction',
		'KalturaSocialFriendActivity' => 'Kaltura\Client\Type\SocialFriendActivity',
		'KalturaSocialFriendActivityListResponse' => 'Kaltura\Client\Type\SocialFriendActivityListResponse',
		'KalturaSocialActionRate' => 'Kaltura\Client\Type\SocialActionRate',
		'KalturaSocialActionListResponse' => 'Kaltura\Client\Type\SocialActionListResponse',
		'KalturaHouseholdPaymentMethod' => 'Kaltura\Client\Type\HouseholdPaymentMethod',
		'KalturaHouseholdPaymentMethodListResponse' => 'Kaltura\Client\Type\HouseholdPaymentMethodListResponse',
		'KalturaPaymentMethodProfile' => 'Kaltura\Client\Type\PaymentMethodProfile',
		'KalturaPaymentMethodProfileListResponse' => 'Kaltura\Client\Type\PaymentMethodProfileListResponse',
		'KalturaHouseholdPaymentGateway' => 'Kaltura\Client\Type\HouseholdPaymentGateway',
		'KalturaHouseholdPaymentGatewayListResponse' => 'Kaltura\Client\Type\HouseholdPaymentGatewayListResponse',
		'KalturaPaymentGatewayBaseProfile' => 'Kaltura\Client\Type\PaymentGatewayBaseProfile',
		'KalturaValue' => 'Kaltura\Client\Type\Value',
		'KalturaStringValue' => 'Kaltura\Client\Type\StringValue',
		'KalturaPaymentGatewayProfile' => 'Kaltura\Client\Type\PaymentGatewayProfile',
		'KalturaPaymentGatewayProfileListResponse' => 'Kaltura\Client\Type\PaymentGatewayProfileListResponse',
		'KalturaTranslationToken' => 'Kaltura\Client\Type\TranslationToken',
		'KalturaMultilingualString' => 'Kaltura\Client\Type\MultilingualString',
		'KalturaMultilingualStringValue' => 'Kaltura\Client\Type\MultilingualStringValue',
		'KalturaLongValue' => 'Kaltura\Client\Type\LongValue',
		'KalturaDoubleValue' => 'Kaltura\Client\Type\DoubleValue',
		'KalturaBooleanValue' => 'Kaltura\Client\Type\BooleanValue',
		'KalturaIntegerValue' => 'Kaltura\Client\Type\IntegerValue',
		'KalturaPluginData' => 'Kaltura\Client\Type\PluginData',
		'KalturaDrmPlaybackPluginData' => 'Kaltura\Client\Type\DrmPlaybackPluginData',
		'KalturaCustomDrmPlaybackPluginData' => 'Kaltura\Client\Type\CustomDrmPlaybackPluginData',
		'KalturaHouseholdDevice' => 'Kaltura\Client\Type\HouseholdDevice',
		'KalturaHouseholdDeviceListResponse' => 'Kaltura\Client\Type\HouseholdDeviceListResponse',
		'KalturaFairPlayPlaybackPluginData' => 'Kaltura\Client\Type\FairPlayPlaybackPluginData',
		'KalturaHouseholdUser' => 'Kaltura\Client\Type\HouseholdUser',
		'KalturaHouseholdUserListResponse' => 'Kaltura\Client\Type\HouseholdUserListResponse',
		'KalturaHomeNetwork' => 'Kaltura\Client\Type\HomeNetwork',
		'KalturaHomeNetworkListResponse' => 'Kaltura\Client\Type\HomeNetworkListResponse',
		'KalturaConfigurations' => 'Kaltura\Client\Type\Configurations',
		'KalturaConfigurationsListResponse' => 'Kaltura\Client\Type\ConfigurationsListResponse',
		'KalturaConfigurationGroupDevice' => 'Kaltura\Client\Type\ConfigurationGroupDevice',
		'KalturaConfigurationGroupDeviceListResponse' => 'Kaltura\Client\Type\ConfigurationGroupDeviceListResponse',
		'KalturaConfigurationGroupTag' => 'Kaltura\Client\Type\ConfigurationGroupTag',
		'KalturaConfigurationGroupTagListResponse' => 'Kaltura\Client\Type\ConfigurationGroupTagListResponse',
		'KalturaConfigurationIdentifier' => 'Kaltura\Client\Type\ConfigurationIdentifier',
		'KalturaConfigurationGroup' => 'Kaltura\Client\Type\ConfigurationGroup',
		'KalturaConfigurationGroupListResponse' => 'Kaltura\Client\Type\ConfigurationGroupListResponse',
		'KalturaSSOAdapterProfile' => 'Kaltura\Client\Type\SSOAdapterProfile',
		'KalturaSSOAdapterProfileListResponse' => 'Kaltura\Client\Type\SSOAdapterProfileListResponse',
		'KalturaUserInterestTopic' => 'Kaltura\Client\Type\UserInterestTopic',
		'KalturaUserInterest' => 'Kaltura\Client\Type\UserInterest',
		'KalturaUserInterestListResponse' => 'Kaltura\Client\Type\UserInterestListResponse',
		'KalturaMediaImage' => 'Kaltura\Client\Type\MediaImage',
		'KalturaAssetFile' => 'Kaltura\Client\Type\AssetFile',
		'KalturaStringValueArray' => 'Kaltura\Client\Type\StringValueArray',
		'KalturaMediaFile' => 'Kaltura\Client\Type\MediaFile',
		'KalturaBuzzScore' => 'Kaltura\Client\Type\BuzzScore',
		'KalturaAssetStatistics' => 'Kaltura\Client\Type\AssetStatistics',
		'KalturaMultilingualStringValueArray' => 'Kaltura\Client\Type\MultilingualStringValueArray',
		'KalturaFavorite' => 'Kaltura\Client\Type\Favorite',
		'KalturaFavoriteListResponse' => 'Kaltura\Client\Type\FavoriteListResponse',
		'KalturaPlaybackSource' => 'Kaltura\Client\Type\PlaybackSource',
		'KalturaBaseOTTUser' => 'Kaltura\Client\Type\BaseOTTUser',
		'KalturaCountry' => 'Kaltura\Client\Type\Country',
		'KalturaOTTUserType' => 'Kaltura\Client\Type\OTTUserType',
		'KalturaOTTUser' => 'Kaltura\Client\Type\OTTUser',
		'KalturaOTTUserListResponse' => 'Kaltura\Client\Type\OTTUserListResponse',
		'KalturaBaseChannel' => 'Kaltura\Client\Type\BaseChannel',
		'KalturaDiscountModule' => 'Kaltura\Client\Type\DiscountModule',
		'KalturaUsageModule' => 'Kaltura\Client\Type\UsageModule',
		'KalturaCouponsGroup' => 'Kaltura\Client\Type\CouponsGroup',
		'KalturaProductCode' => 'Kaltura\Client\Type\ProductCode',
		'KalturaCollection' => 'Kaltura\Client\Type\Collection',
		'KalturaCollectionListResponse' => 'Kaltura\Client\Type\CollectionListResponse',
		'KalturaAssetGroupBy' => 'Kaltura\Client\Type\AssetGroupBy',
		'KalturaDynamicOrderBy' => 'Kaltura\Client\Type\DynamicOrderBy',
		'KalturaChannelOrder' => 'Kaltura\Client\Type\ChannelOrder',
		'KalturaChannel' => 'Kaltura\Client\Type\Channel',
		'KalturaDynamicChannel' => 'Kaltura\Client\Type\DynamicChannel',
		'KalturaManualChannel' => 'Kaltura\Client\Type\ManualChannel',
		'KalturaAssetMetaOrTagGroupBy' => 'Kaltura\Client\Type\AssetMetaOrTagGroupBy',
		'KalturaAssetFieldGroupBy' => 'Kaltura\Client\Type\AssetFieldGroupBy',
		'KalturaPricePlan' => 'Kaltura\Client\Type\PricePlan',
		'KalturaPrice' => 'Kaltura\Client\Type\Price',
		'KalturaDiscount' => 'Kaltura\Client\Type\Discount',
		'KalturaDiscountDetails' => 'Kaltura\Client\Type\DiscountDetails',
		'KalturaDiscountDetailsListResponse' => 'Kaltura\Client\Type\DiscountDetailsListResponse',
		'KalturaSubscriptionSet' => 'Kaltura\Client\Type\SubscriptionSet',
		'KalturaSubscriptionSetListResponse' => 'Kaltura\Client\Type\SubscriptionSetListResponse',
		'KalturaSubscriptionDependencySet' => 'Kaltura\Client\Type\SubscriptionDependencySet',
		'KalturaSubscriptionSwitchSet' => 'Kaltura\Client\Type\SubscriptionSwitchSet',
		'KalturaProductPrice' => 'Kaltura\Client\Type\ProductPrice',
		'KalturaProductPriceListResponse' => 'Kaltura\Client\Type\ProductPriceListResponse',
		'KalturaCollectionPrice' => 'Kaltura\Client\Type\CollectionPrice',
		'KalturaPpvPrice' => 'Kaltura\Client\Type\PpvPrice',
		'KalturaPPVItemPriceDetails' => 'Kaltura\Client\Type\PPVItemPriceDetails',
		'KalturaSubscriptionPrice' => 'Kaltura\Client\Type\SubscriptionPrice',
		'KalturaCouponsGroupListResponse' => 'Kaltura\Client\Type\CouponsGroupListResponse',
		'KalturaPriceDetails' => 'Kaltura\Client\Type\PriceDetails',
		'KalturaPriceDetailsListResponse' => 'Kaltura\Client\Type\PriceDetailsListResponse',
		'KalturaPricePlanListResponse' => 'Kaltura\Client\Type\PricePlanListResponse',
		'KalturaPreviewModule' => 'Kaltura\Client\Type\PreviewModule',
		'KalturaPremiumService' => 'Kaltura\Client\Type\PremiumService',
		'KalturaSubscription' => 'Kaltura\Client\Type\Subscription',
		'KalturaSubscriptionListResponse' => 'Kaltura\Client\Type\SubscriptionListResponse',
		'KalturaNpvrPremiumService' => 'Kaltura\Client\Type\NpvrPremiumService',
		'KalturaHouseholdPremiumService' => 'Kaltura\Client\Type\HouseholdPremiumService',
		'KalturaProductsPriceListResponse' => 'Kaltura\Client\Type\ProductsPriceListResponse',
		'KalturaPersonalList' => 'Kaltura\Client\Type\PersonalList',
		'KalturaPersonalListListResponse' => 'Kaltura\Client\Type\PersonalListListResponse',
		'KalturaEngagement' => 'Kaltura\Client\Type\Engagement',
		'KalturaEngagementListResponse' => 'Kaltura\Client\Type\EngagementListResponse',
		'KalturaEngagementAdapterBase' => 'Kaltura\Client\Type\EngagementAdapterBase',
		'KalturaEngagementAdapter' => 'Kaltura\Client\Type\EngagementAdapter',
		'KalturaEngagementAdapterListResponse' => 'Kaltura\Client\Type\EngagementAdapterListResponse',
		'KalturaReminder' => 'Kaltura\Client\Type\Reminder',
		'KalturaReminderListResponse' => 'Kaltura\Client\Type\ReminderListResponse',
		'KalturaSeriesReminder' => 'Kaltura\Client\Type\SeriesReminder',
		'KalturaAssetReminder' => 'Kaltura\Client\Type\AssetReminder',
		'KalturaInboxMessage' => 'Kaltura\Client\Type\InboxMessage',
		'KalturaInboxMessageListResponse' => 'Kaltura\Client\Type\InboxMessageListResponse',
		'KalturaFollowDataBase' => 'Kaltura\Client\Type\FollowDataBase',
		'KalturaFollowTvSeries' => 'Kaltura\Client\Type\FollowTvSeries',
		'KalturaFollowTvSeriesListResponse' => 'Kaltura\Client\Type\FollowTvSeriesListResponse',
		'KalturaAnnouncement' => 'Kaltura\Client\Type\Announcement',
		'KalturaAnnouncementListResponse' => 'Kaltura\Client\Type\AnnouncementListResponse',
		'KalturaFeed' => 'Kaltura\Client\Type\Feed',
		'KalturaPersonalFeed' => 'Kaltura\Client\Type\PersonalFeed',
		'KalturaPersonalFeedListResponse' => 'Kaltura\Client\Type\PersonalFeedListResponse',
		'KalturaTopic' => 'Kaltura\Client\Type\Topic',
		'KalturaTopicListResponse' => 'Kaltura\Client\Type\TopicListResponse',
		'KalturaSeriesRecording' => 'Kaltura\Client\Type\SeriesRecording',
		'KalturaSeriesRecordingListResponse' => 'Kaltura\Client\Type\SeriesRecordingListResponse',
		'KalturaHouseholdPremiumServiceListResponse' => 'Kaltura\Client\Type\HouseholdPremiumServiceListResponse',
		'KalturaCDVRAdapterProfile' => 'Kaltura\Client\Type\CDVRAdapterProfile',
		'KalturaCDVRAdapterProfileListResponse' => 'Kaltura\Client\Type\CDVRAdapterProfileListResponse',
		'KalturaRecording' => 'Kaltura\Client\Type\Recording',
		'KalturaRecordingListResponse' => 'Kaltura\Client\Type\RecordingListResponse',
		'KalturaBillingTransaction' => 'Kaltura\Client\Type\BillingTransaction',
		'KalturaBillingTransactionListResponse' => 'Kaltura\Client\Type\BillingTransactionListResponse',
		'KalturaEntitlement' => 'Kaltura\Client\Type\Entitlement',
		'KalturaEntitlementListResponse' => 'Kaltura\Client\Type\EntitlementListResponse',
		'KalturaCollectionEntitlement' => 'Kaltura\Client\Type\CollectionEntitlement',
		'KalturaPpvEntitlement' => 'Kaltura\Client\Type\PpvEntitlement',
		'KalturaSubscriptionEntitlement' => 'Kaltura\Client\Type\SubscriptionEntitlement',
		'KalturaPartnerConfiguration' => 'Kaltura\Client\Type\PartnerConfiguration',
		'KalturaPartnerConfigurationListResponse' => 'Kaltura\Client\Type\PartnerConfigurationListResponse',
		'KalturaConcurrencyPartnerConfig' => 'Kaltura\Client\Type\ConcurrencyPartnerConfig',
		'KalturaPartnerConfigurationHolder' => 'Kaltura\Client\Type\PartnerConfigurationHolder',
		'KalturaBillingPartnerConfig' => 'Kaltura\Client\Type\BillingPartnerConfig',
		'KalturaT' => 'Kaltura\Client\Type\T',
		'KalturaGenericListResponse' => 'Kaltura\Client\Type\GenericListResponse',
		'KalturaIntegerValueListResponse' => 'Kaltura\Client\Type\IntegerValueListResponse',
		'KalturaReport' => 'Kaltura\Client\Type\Report',
		'KalturaReportListResponse' => 'Kaltura\Client\Type\ReportListResponse',
		'KalturaPushParams' => 'Kaltura\Client\Type\PushParams',
		'KalturaDeviceReport' => 'Kaltura\Client\Type\DeviceReport',
		'KalturaAssetStructMeta' => 'Kaltura\Client\Type\AssetStructMeta',
		'KalturaAssetStructMetaListResponse' => 'Kaltura\Client\Type\AssetStructMetaListResponse',
		'KalturaMediaFileType' => 'Kaltura\Client\Type\MediaFileType',
		'KalturaMediaFileTypeListResponse' => 'Kaltura\Client\Type\MediaFileTypeListResponse',
		'KalturaChannelListResponse' => 'Kaltura\Client\Type\ChannelListResponse',
		'KalturaImage' => 'Kaltura\Client\Type\Image',
		'KalturaImageListResponse' => 'Kaltura\Client\Type\ImageListResponse',
		'KalturaRatio' => 'Kaltura\Client\Type\Ratio',
		'KalturaRatioListResponse' => 'Kaltura\Client\Type\RatioListResponse',
		'KalturaTag' => 'Kaltura\Client\Type\Tag',
		'KalturaTagListResponse' => 'Kaltura\Client\Type\TagListResponse',
		'KalturaAsset' => 'Kaltura\Client\Type\Asset',
		'KalturaAssetListResponse' => 'Kaltura\Client\Type\AssetListResponse',
		'KalturaMediaAsset' => 'Kaltura\Client\Type\MediaAsset',
		'KalturaLinearMediaAsset' => 'Kaltura\Client\Type\LinearMediaAsset',
		'KalturaProgramAsset' => 'Kaltura\Client\Type\ProgramAsset',
		'KalturaRecordingAsset' => 'Kaltura\Client\Type\RecordingAsset',
		'KalturaAssetStruct' => 'Kaltura\Client\Type\AssetStruct',
		'KalturaAssetStructListResponse' => 'Kaltura\Client\Type\AssetStructListResponse',
		'KalturaImageType' => 'Kaltura\Client\Type\ImageType',
		'KalturaImageTypeListResponse' => 'Kaltura\Client\Type\ImageTypeListResponse',
		'KalturaAssetCount' => 'Kaltura\Client\Type\AssetCount',
		'KalturaAssetsCount' => 'Kaltura\Client\Type\AssetsCount',
		'KalturaAssetCountListResponse' => 'Kaltura\Client\Type\AssetCountListResponse',
		'KalturaSlimAsset' => 'Kaltura\Client\Type\SlimAsset',
		'KalturaBookmarkPlayerData' => 'Kaltura\Client\Type\BookmarkPlayerData',
		'KalturaBookmark' => 'Kaltura\Client\Type\Bookmark',
		'KalturaBookmarkListResponse' => 'Kaltura\Client\Type\BookmarkListResponse',
		'KalturaAssetCommentListResponse' => 'Kaltura\Client\Type\AssetCommentListResponse',
		'KalturaAssetStatisticsListResponse' => 'Kaltura\Client\Type\AssetStatisticsListResponse',
		'KalturaMediaFileListResponse' => 'Kaltura\Client\Type\MediaFileListResponse',
		'KalturaAssetHistory' => 'Kaltura\Client\Type\AssetHistory',
		'KalturaAssetHistoryListResponse' => 'Kaltura\Client\Type\AssetHistoryListResponse',
		'KalturaBulk' => 'Kaltura\Client\Type\Bulk',
		'KalturaBulkListResponse' => 'Kaltura\Client\Type\BulkListResponse',
		'KalturaDrmProfile' => 'Kaltura\Client\Type\DrmProfile',
		'KalturaDrmProfileListResponse' => 'Kaltura\Client\Type\DrmProfileListResponse',
		'KalturaMediaConcurrencyRule' => 'Kaltura\Client\Type\MediaConcurrencyRule',
		'KalturaMediaConcurrencyRuleListResponse' => 'Kaltura\Client\Type\MediaConcurrencyRuleListResponse',
		'KalturaAssetRuleBase' => 'Kaltura\Client\Type\AssetRuleBase',
		'KalturaCondition' => 'Kaltura\Client\Type\Condition',
		'KalturaAssetCondition' => 'Kaltura\Client\Type\AssetCondition',
		'KalturaRuleAction' => 'Kaltura\Client\Type\RuleAction',
		'KalturaAssetUserRuleAction' => 'Kaltura\Client\Type\AssetUserRuleAction',
		'KalturaAssetUserRule' => 'Kaltura\Client\Type\AssetUserRule',
		'KalturaAssetUserRuleListResponse' => 'Kaltura\Client\Type\AssetUserRuleListResponse',
		'KalturaAssetRuleAction' => 'Kaltura\Client\Type\AssetRuleAction',
		'KalturaAssetRule' => 'Kaltura\Client\Type\AssetRule',
		'KalturaCountryCondition' => 'Kaltura\Client\Type\CountryCondition',
		'KalturaConcurrencyCondition' => 'Kaltura\Client\Type\ConcurrencyCondition',
		'KalturaAssetUserRuleBlockAction' => 'Kaltura\Client\Type\AssetUserRuleBlockAction',
		'KalturaAccessControlBlockAction' => 'Kaltura\Client\Type\AccessControlBlockAction',
		'KalturaTimeOffsetRuleAction' => 'Kaltura\Client\Type\TimeOffsetRuleAction',
		'KalturaEndDateOffsetRuleAction' => 'Kaltura\Client\Type\EndDateOffsetRuleAction',
		'KalturaStartDateOffsetRuleAction' => 'Kaltura\Client\Type\StartDateOffsetRuleAction',
		'KalturaCurrency' => 'Kaltura\Client\Type\Currency',
		'KalturaCurrencyListResponse' => 'Kaltura\Client\Type\CurrencyListResponse',
		'KalturaAssetRuleListResponse' => 'Kaltura\Client\Type\AssetRuleListResponse',
		'KalturaLanguage' => 'Kaltura\Client\Type\Language',
		'KalturaLanguageListResponse' => 'Kaltura\Client\Type\LanguageListResponse',
		'KalturaMeta' => 'Kaltura\Client\Type\Meta',
		'KalturaMetaListResponse' => 'Kaltura\Client\Type\MetaListResponse',
		'KalturaDeviceBrand' => 'Kaltura\Client\Type\DeviceBrand',
		'KalturaDeviceBrandListResponse' => 'Kaltura\Client\Type\DeviceBrandListResponse',
		'KalturaCountryListResponse' => 'Kaltura\Client\Type\CountryListResponse',
		'KalturaOSSAdapterBaseProfile' => 'Kaltura\Client\Type\OSSAdapterBaseProfile',
		'KalturaOSSAdapterProfile' => 'Kaltura\Client\Type\OSSAdapterProfile',
		'KalturaOSSAdapterProfileListResponse' => 'Kaltura\Client\Type\OSSAdapterProfileListResponse',
		'KalturaSearchHistory' => 'Kaltura\Client\Type\SearchHistory',
		'KalturaSearchHistoryListResponse' => 'Kaltura\Client\Type\SearchHistoryListResponse',
		'KalturaDeviceFamilyBase' => 'Kaltura\Client\Type\DeviceFamilyBase',
		'KalturaDeviceFamily' => 'Kaltura\Client\Type\DeviceFamily',
		'KalturaDeviceFamilyListResponse' => 'Kaltura\Client\Type\DeviceFamilyListResponse',
		'KalturaHouseholdDeviceFamilyLimitations' => 'Kaltura\Client\Type\HouseholdDeviceFamilyLimitations',
		'KalturaRegionalChannel' => 'Kaltura\Client\Type\RegionalChannel',
		'KalturaRegion' => 'Kaltura\Client\Type\Region',
		'KalturaRegionListResponse' => 'Kaltura\Client\Type\RegionListResponse',
		'KalturaUserAssetRule' => 'Kaltura\Client\Type\UserAssetRule',
		'KalturaUserAssetRuleListResponse' => 'Kaltura\Client\Type\UserAssetRuleListResponse',
		'KalturaCDNAdapterProfile' => 'Kaltura\Client\Type\CDNAdapterProfile',
		'KalturaCDNAdapterProfileListResponse' => 'Kaltura\Client\Type\CDNAdapterProfileListResponse',
		'KalturaExportTask' => 'Kaltura\Client\Type\ExportTask',
		'KalturaExportTaskListResponse' => 'Kaltura\Client\Type\ExportTaskListResponse',
		'KalturaChannelEnrichmentHolder' => 'Kaltura\Client\Type\ChannelEnrichmentHolder',
		'KalturaExternalChannelProfile' => 'Kaltura\Client\Type\ExternalChannelProfile',
		'KalturaExternalChannelProfileListResponse' => 'Kaltura\Client\Type\ExternalChannelProfileListResponse',
		'KalturaRecommendationProfile' => 'Kaltura\Client\Type\RecommendationProfile',
		'KalturaRecommendationProfileListResponse' => 'Kaltura\Client\Type\RecommendationProfileListResponse',
		'KalturaRegistrySettings' => 'Kaltura\Client\Type\RegistrySettings',
		'KalturaRegistrySettingsListResponse' => 'Kaltura\Client\Type\RegistrySettingsListResponse',
		'KalturaParentalRule' => 'Kaltura\Client\Type\ParentalRule',
		'KalturaParentalRuleListResponse' => 'Kaltura\Client\Type\ParentalRuleListResponse',
		'KalturaPermissionItem' => 'Kaltura\Client\Type\PermissionItem',
		'KalturaPermission' => 'Kaltura\Client\Type\Permission',
		'KalturaUserRole' => 'Kaltura\Client\Type\UserRole',
		'KalturaUserRoleListResponse' => 'Kaltura\Client\Type\UserRoleListResponse',
		'KalturaGroupPermission' => 'Kaltura\Client\Type\GroupPermission',
		'KalturaApiArgumentPermissionItem' => 'Kaltura\Client\Type\ApiArgumentPermissionItem',
		'KalturaApiParameterPermissionItem' => 'Kaltura\Client\Type\ApiParameterPermissionItem',
		'KalturaApiActionPermissionItem' => 'Kaltura\Client\Type\ApiActionPermissionItem',
		'KalturaClientConfiguration' => 'Kaltura\Client\Type\ClientConfiguration',
		'KalturaBaseResponseProfile' => 'Kaltura\Client\Type\BaseResponseProfile',
		'KalturaRequestConfiguration' => 'Kaltura\Client\Type\RequestConfiguration',
		'KalturaFilter' => 'Kaltura\Client\Type\Filter',
		'KalturaDetachedResponseProfile' => 'Kaltura\Client\Type\DetachedResponseProfile',
		'KalturaRelatedObjectFilter' => 'Kaltura\Client\Type\RelatedObjectFilter',
		'KalturaSocialCommentFilter' => 'Kaltura\Client\Type\SocialCommentFilter',
		'KalturaSocialFriendActivityFilter' => 'Kaltura\Client\Type\SocialFriendActivityFilter',
		'KalturaSocialActionFilter' => 'Kaltura\Client\Type\SocialActionFilter',
		'KalturaPaymentMethodProfileFilter' => 'Kaltura\Client\Type\PaymentMethodProfileFilter',
		'KalturaHouseholdDeviceFilter' => 'Kaltura\Client\Type\HouseholdDeviceFilter',
		'KalturaHouseholdUserFilter' => 'Kaltura\Client\Type\HouseholdUserFilter',
		'KalturaConfigurationsFilter' => 'Kaltura\Client\Type\ConfigurationsFilter',
		'KalturaReportFilter' => 'Kaltura\Client\Type\ReportFilter',
		'KalturaDeviceReportFilter' => 'Kaltura\Client\Type\DeviceReportFilter',
		'KalturaConfigurationGroupTagFilter' => 'Kaltura\Client\Type\ConfigurationGroupTagFilter',
		'KalturaConfigurationGroupDeviceFilter' => 'Kaltura\Client\Type\ConfigurationGroupDeviceFilter',
		'KalturaFavoriteFilter' => 'Kaltura\Client\Type\FavoriteFilter',
		'KalturaOTTUserFilter' => 'Kaltura\Client\Type\OTTUserFilter',
		'KalturaCollectionFilter' => 'Kaltura\Client\Type\CollectionFilter',
		'KalturaDiscountDetailsFilter' => 'Kaltura\Client\Type\DiscountDetailsFilter',
		'KalturaPricePlanFilter' => 'Kaltura\Client\Type\PricePlanFilter',
		'KalturaPriceDetailsFilter' => 'Kaltura\Client\Type\PriceDetailsFilter',
		'KalturaSubscriptionSetFilter' => 'Kaltura\Client\Type\SubscriptionSetFilter',
		'KalturaSubscriptionDependencySetFilter' => 'Kaltura\Client\Type\SubscriptionDependencySetFilter',
		'KalturaSubscriptionFilter' => 'Kaltura\Client\Type\SubscriptionFilter',
		'KalturaPersonalListFilter' => 'Kaltura\Client\Type\PersonalListFilter',
		'KalturaEngagementFilter' => 'Kaltura\Client\Type\EngagementFilter',
		'KalturaReminderFilter' => 'Kaltura\Client\Type\ReminderFilter',
		'KalturaAssetReminderFilter' => 'Kaltura\Client\Type\AssetReminderFilter',
		'KalturaSeriesReminderFilter' => 'Kaltura\Client\Type\SeriesReminderFilter',
		'KalturaSeasonsReminderFilter' => 'Kaltura\Client\Type\SeasonsReminderFilter',
		'KalturaFollowTvSeriesFilter' => 'Kaltura\Client\Type\FollowTvSeriesFilter',
		'KalturaInboxMessageFilter' => 'Kaltura\Client\Type\InboxMessageFilter',
		'KalturaAnnouncementFilter' => 'Kaltura\Client\Type\AnnouncementFilter',
		'KalturaPersonalFeedFilter' => 'Kaltura\Client\Type\PersonalFeedFilter',
		'KalturaTopicFilter' => 'Kaltura\Client\Type\TopicFilter',
		'KalturaSeriesRecordingFilter' => 'Kaltura\Client\Type\SeriesRecordingFilter',
		'KalturaProductPriceFilter' => 'Kaltura\Client\Type\ProductPriceFilter',
		'KalturaEntitlementFilter' => 'Kaltura\Client\Type\EntitlementFilter',
		'KalturaTransactionHistoryFilter' => 'Kaltura\Client\Type\TransactionHistoryFilter',
		'KalturaRecordingContextFilter' => 'Kaltura\Client\Type\RecordingContextFilter',
		'KalturaRecordingFilter' => 'Kaltura\Client\Type\RecordingFilter',
		'KalturaPartnerConfigurationFilter' => 'Kaltura\Client\Type\PartnerConfigurationFilter',
		'KalturaAggregationCountFilter' => 'Kaltura\Client\Type\AggregationCountFilter',
		'KalturaPersistedFilter' => 'Kaltura\Client\Type\PersistedFilter',
		'KalturaAssetFilter' => 'Kaltura\Client\Type\AssetFilter',
		'KalturaBaseSearchAssetFilter' => 'Kaltura\Client\Type\BaseSearchAssetFilter',
		'KalturaPersonalListSearchFilter' => 'Kaltura\Client\Type\PersonalListSearchFilter',
		'KalturaSearchAssetFilter' => 'Kaltura\Client\Type\SearchAssetFilter',
		'KalturaSearchAssetListFilter' => 'Kaltura\Client\Type\SearchAssetListFilter',
		'KalturaScheduledRecordingProgramFilter' => 'Kaltura\Client\Type\ScheduledRecordingProgramFilter',
		'KalturaBundleFilter' => 'Kaltura\Client\Type\BundleFilter',
		'KalturaChannelExternalFilter' => 'Kaltura\Client\Type\ChannelExternalFilter',
		'KalturaChannelFilter' => 'Kaltura\Client\Type\ChannelFilter',
		'KalturaRelatedFilter' => 'Kaltura\Client\Type\RelatedFilter',
		'KalturaRelatedExternalFilter' => 'Kaltura\Client\Type\RelatedExternalFilter',
		'KalturaSearchExternalFilter' => 'Kaltura\Client\Type\SearchExternalFilter',
		'KalturaBulkFilter' => 'Kaltura\Client\Type\BulkFilter',
		'KalturaAssetStructMetaFilter' => 'Kaltura\Client\Type\AssetStructMetaFilter',
		'KalturaChannelsFilter' => 'Kaltura\Client\Type\ChannelsFilter',
		'KalturaMediaFileFilter' => 'Kaltura\Client\Type\MediaFileFilter',
		'KalturaImageFilter' => 'Kaltura\Client\Type\ImageFilter',
		'KalturaImageTypeFilter' => 'Kaltura\Client\Type\ImageTypeFilter',
		'KalturaTagFilter' => 'Kaltura\Client\Type\TagFilter',
		'KalturaAssetStructFilter' => 'Kaltura\Client\Type\AssetStructFilter',
		'KalturaAssetCommentFilter' => 'Kaltura\Client\Type\AssetCommentFilter',
		'KalturaBookmarkFilter' => 'Kaltura\Client\Type\BookmarkFilter',
		'KalturaAssetHistoryFilter' => 'Kaltura\Client\Type\AssetHistoryFilter',
		'KalturaAssetRuleFilter' => 'Kaltura\Client\Type\AssetRuleFilter',
		'KalturaAssetUserRuleFilter' => 'Kaltura\Client\Type\AssetUserRuleFilter',
		'KalturaCurrencyFilter' => 'Kaltura\Client\Type\CurrencyFilter',
		'KalturaLanguageFilter' => 'Kaltura\Client\Type\LanguageFilter',
		'KalturaMetaFilter' => 'Kaltura\Client\Type\MetaFilter',
		'KalturaCountryFilter' => 'Kaltura\Client\Type\CountryFilter',
		'KalturaSearchHistoryFilter' => 'Kaltura\Client\Type\SearchHistoryFilter',
		'KalturaRegionFilter' => 'Kaltura\Client\Type\RegionFilter',
		'KalturaUserAssetRuleFilter' => 'Kaltura\Client\Type\UserAssetRuleFilter',
		'KalturaParentalRuleFilter' => 'Kaltura\Client\Type\ParentalRuleFilter',
		'KalturaExportTaskFilter' => 'Kaltura\Client\Type\ExportTaskFilter',
		'KalturaUserRoleFilter' => 'Kaltura\Client\Type\UserRoleFilter',
		'KalturaFilterPager' => 'Kaltura\Client\Type\FilterPager',
		'KalturaAppToken' => 'Kaltura\Client\Type\AppToken',
		'KalturaSession' => 'Kaltura\Client\Type\Session',
		'KalturaSessionInfo' => 'Kaltura\Client\Type\SessionInfo',
		'KalturaPlaybackContextOptions' => 'Kaltura\Client\Type\PlaybackContextOptions',
		'KalturaAccessControlMessage' => 'Kaltura\Client\Type\AccessControlMessage',
		'KalturaPlaybackContext' => 'Kaltura\Client\Type\PlaybackContext',
		'KalturaAdsSource' => 'Kaltura\Client\Type\AdsSource',
		'KalturaAdsContext' => 'Kaltura\Client\Type\AdsContext',
		'KalturaAssetFileContext' => 'Kaltura\Client\Type\AssetFileContext',
		'KalturaAssetStatisticsQuery' => 'Kaltura\Client\Type\AssetStatisticsQuery',
		'KalturaUploadToken' => 'Kaltura\Client\Type\UploadToken',
		'KalturaCDNPartnerSettings' => 'Kaltura\Client\Type\CDNPartnerSettings',
		'KalturaCompensation' => 'Kaltura\Client\Type\Compensation',
		'KalturaContentResource' => 'Kaltura\Client\Type\ContentResource',
		'KalturaUploadedFileTokenResource' => 'Kaltura\Client\Type\UploadedFileTokenResource',
		'KalturaUrlResource' => 'Kaltura\Client\Type\UrlResource',
		'KalturaCouponGenerationOptions' => 'Kaltura\Client\Type\CouponGenerationOptions',
		'KalturaPublicCouponGenerationOptions' => 'Kaltura\Client\Type\PublicCouponGenerationOptions',
		'KalturaRandomCouponGenerationOptions' => 'Kaltura\Client\Type\RandomCouponGenerationOptions',
		'KalturaKeyValue' => 'Kaltura\Client\Type\KeyValue',
		'KalturaEmailMessage' => 'Kaltura\Client\Type\EmailMessage',
		'KalturaEntitlementRenewalBase' => 'Kaltura\Client\Type\EntitlementRenewalBase',
		'KalturaUnifiedPaymentRenewal' => 'Kaltura\Client\Type\UnifiedPaymentRenewal',
		'KalturaNetworkActionStatus' => 'Kaltura\Client\Type\NetworkActionStatus',
		'KalturaUserSocialActionResponse' => 'Kaltura\Client\Type\UserSocialActionResponse',
		'KalturaPaymentGatewayConfiguration' => 'Kaltura\Client\Type\PaymentGatewayConfiguration',
		'KalturaHouseholdQuota' => 'Kaltura\Client\Type\HouseholdQuota',
		'KalturaMessageTemplate' => 'Kaltura\Client\Type\MessageTemplate',
		'KalturaPpv' => 'Kaltura\Client\Type\Ppv',
		'KalturaLicensedUrl' => 'Kaltura\Client\Type\LicensedUrl',
		'KalturaLicensedUrlBaseRequest' => 'Kaltura\Client\Type\LicensedUrlBaseRequest',
		'KalturaLicensedUrlMediaRequest' => 'Kaltura\Client\Type\LicensedUrlMediaRequest',
		'KalturaLicensedUrlEpgRequest' => 'Kaltura\Client\Type\LicensedUrlEpgRequest',
		'KalturaLicensedUrlRecordingRequest' => 'Kaltura\Client\Type\LicensedUrlRecordingRequest',
		'KalturaRegistryResponse' => 'Kaltura\Client\Type\RegistryResponse',
		'KalturaPushMessage' => 'Kaltura\Client\Type\PushMessage',
		'KalturaNotificationsPartnerSettings' => 'Kaltura\Client\Type\NotificationsPartnerSettings',
		'KalturaNotificationsSettings' => 'Kaltura\Client\Type\NotificationsSettings',
		'KalturaTimeShiftedTvPartnerSettings' => 'Kaltura\Client\Type\TimeShiftedTvPartnerSettings',
		'KalturaUserAssetsListItem' => 'Kaltura\Client\Type\UserAssetsListItem',
		'KalturaHouseholdLimitations' => 'Kaltura\Client\Type\HouseholdLimitations',
		'KalturaLoginSession' => 'Kaltura\Client\Type\LoginSession',
		'KalturaHousehold' => 'Kaltura\Client\Type\Household',
		'KalturaDeviceRegistrationStatusHolder' => 'Kaltura\Client\Type\DeviceRegistrationStatusHolder',
		'KalturaDevicePin' => 'Kaltura\Client\Type\DevicePin',
		'KalturaLoginResponse' => 'Kaltura\Client\Type\LoginResponse',
		'KalturaPlayerAssetData' => 'Kaltura\Client\Type\PlayerAssetData',
		'KalturaPin' => 'Kaltura\Client\Type\Pin',
		'KalturaPurchaseSettings' => 'Kaltura\Client\Type\PurchaseSettings',
		'KalturaPinResponse' => 'Kaltura\Client\Type\PinResponse',
		'KalturaCoupon' => 'Kaltura\Client\Type\Coupon',
		'KalturaOTTCategory' => 'Kaltura\Client\Type\OTTCategory',
		'KalturaBillingResponse' => 'Kaltura\Client\Type\BillingResponse',
		'KalturaEntitlementRenewal' => 'Kaltura\Client\Type\EntitlementRenewal',
		'KalturaSocial' => 'Kaltura\Client\Type\Social',
		'KalturaFacebookSocial' => 'Kaltura\Client\Type\FacebookSocial',
		'KalturaSocialUser' => 'Kaltura\Client\Type\SocialUser',
		'KalturaSocialResponse' => 'Kaltura\Client\Type\SocialResponse',
		'KalturaSocialConfig' => 'Kaltura\Client\Type\SocialConfig',
		'KalturaSocialFacebookConfig' => 'Kaltura\Client\Type\SocialFacebookConfig',
		'KalturaActionPermissionItem' => 'Kaltura\Client\Type\ActionPermissionItem',
		'KalturaSocialUserConfig' => 'Kaltura\Client\Type\SocialUserConfig',
		'KalturaPurchaseBase' => 'Kaltura\Client\Type\PurchaseBase',
		'KalturaPurchase' => 'Kaltura\Client\Type\Purchase',
		'KalturaPurchaseSession' => 'Kaltura\Client\Type\PurchaseSession',
		'KalturaExternalReceipt' => 'Kaltura\Client\Type\ExternalReceipt',
		'KalturaTransaction' => 'Kaltura\Client\Type\Transaction',
		'KalturaTransactionStatus' => 'Kaltura\Client\Type\TransactionStatus',
		'KalturaUserLoginPin' => 'Kaltura\Client\Type\UserLoginPin',
		'KalturaOTTUserDynamicData' => 'Kaltura\Client\Type\OTTUserDynamicData',
	);
	
	public static function getZendType($kalturaType)
	{
		if(isset(self::$map[$kalturaType]))
			return self::$map[$kalturaType];
		return null;
	}
}
