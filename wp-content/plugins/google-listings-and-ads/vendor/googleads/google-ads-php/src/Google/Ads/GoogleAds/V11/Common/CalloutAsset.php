<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/common/asset_types.proto

namespace Google\Ads\GoogleAds\V11\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Callout asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.common.CalloutAsset</code>
 */
class CalloutAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>string callout_text = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $callout_text = '';
    /**
     * Start date of when this asset is effective and can begin serving, in
     * yyyy-MM-dd format.
     *
     * Generated from protobuf field <code>string start_date = 2;</code>
     */
    protected $start_date = '';
    /**
     * Last date of when this asset is effective and still serving, in yyyy-MM-dd
     * format.
     *
     * Generated from protobuf field <code>string end_date = 3;</code>
     */
    protected $end_date = '';
    /**
     * List of non-overlapping schedules specifying all time intervals for which
     * the asset may serve. There can be a maximum of 6 schedules per day, 42 in
     * total.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.AdScheduleInfo ad_schedule_targets = 4;</code>
     */
    private $ad_schedule_targets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $callout_text
     *           Required. The callout text.
     *           The length of this string should be between 1 and 25, inclusive.
     *     @type string $start_date
     *           Start date of when this asset is effective and can begin serving, in
     *           yyyy-MM-dd format.
     *     @type string $end_date
     *           Last date of when this asset is effective and still serving, in yyyy-MM-dd
     *           format.
     *     @type \Google\Ads\GoogleAds\V11\Common\AdScheduleInfo[]|\Google\Protobuf\Internal\RepeatedField $ad_schedule_targets
     *           List of non-overlapping schedules specifying all time intervals for which
     *           the asset may serve. There can be a maximum of 6 schedules per day, 42 in
     *           total.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>string callout_text = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCalloutText()
    {
        return $this->callout_text;
    }

    /**
     * Required. The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>string callout_text = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCalloutText($var)
    {
        GPBUtil::checkString($var, True);
        $this->callout_text = $var;

        return $this;
    }

    /**
     * Start date of when this asset is effective and can begin serving, in
     * yyyy-MM-dd format.
     *
     * Generated from protobuf field <code>string start_date = 2;</code>
     * @return string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Start date of when this asset is effective and can begin serving, in
     * yyyy-MM-dd format.
     *
     * Generated from protobuf field <code>string start_date = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date = $var;

        return $this;
    }

    /**
     * Last date of when this asset is effective and still serving, in yyyy-MM-dd
     * format.
     *
     * Generated from protobuf field <code>string end_date = 3;</code>
     * @return string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Last date of when this asset is effective and still serving, in yyyy-MM-dd
     * format.
     *
     * Generated from protobuf field <code>string end_date = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date = $var;

        return $this;
    }

    /**
     * List of non-overlapping schedules specifying all time intervals for which
     * the asset may serve. There can be a maximum of 6 schedules per day, 42 in
     * total.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.AdScheduleInfo ad_schedule_targets = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdScheduleTargets()
    {
        return $this->ad_schedule_targets;
    }

    /**
     * List of non-overlapping schedules specifying all time intervals for which
     * the asset may serve. There can be a maximum of 6 schedules per day, 42 in
     * total.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.AdScheduleInfo ad_schedule_targets = 4;</code>
     * @param \Google\Ads\GoogleAds\V11\Common\AdScheduleInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdScheduleTargets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V11\Common\AdScheduleInfo::class);
        $this->ad_schedule_targets = $arr;

        return $this;
    }

}

