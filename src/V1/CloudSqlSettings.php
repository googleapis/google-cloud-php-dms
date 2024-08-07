<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for creating a Cloud SQL database instance.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.CloudSqlSettings</code>
 */
class CloudSqlSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * The database engine type and version.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.SqlDatabaseVersion database_version = 1;</code>
     */
    protected $database_version = 0;
    /**
     * The resource labels for a Cloud SQL instance to use to annotate any related
     * underlying resources such as Compute Engine VMs.
     * An object containing a list of "key": "value" pairs.
     * Example: `{ "name": "wrench", "mass": "18kg", "count": "3" }`.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 2;</code>
     */
    private $user_labels;
    /**
     * The tier (or machine type) for this instance, for example:
     * `db-n1-standard-1` (MySQL instances) or
     * `db-custom-1-3840` (PostgreSQL instances).
     * For more information, see
     * [Cloud SQL Instance
     * Settings](https://cloud.google.com/sql/docs/mysql/instance-settings).
     *
     * Generated from protobuf field <code>string tier = 3;</code>
     */
    protected $tier = '';
    /**
     * The maximum size to which storage capacity can be automatically increased.
     * The default value is 0, which specifies that there is no limit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value storage_auto_resize_limit = 4;</code>
     */
    protected $storage_auto_resize_limit = null;
    /**
     * The activation policy specifies when the instance is activated; it is
     * applicable only when the instance state is 'RUNNABLE'. Valid values:
     * 'ALWAYS': The instance is on, and remains so even in
     * the absence of connection requests.
     * `NEVER`: The instance is off; it is not activated, even if a
     * connection request arrives.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.SqlActivationPolicy activation_policy = 5;</code>
     */
    protected $activation_policy = 0;
    /**
     * The settings for IP Management. This allows to enable or disable the
     * instance IP and manage which external networks can connect to the instance.
     * The IPv4 address cannot be disabled.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.SqlIpConfig ip_config = 6;</code>
     */
    protected $ip_config = null;
    /**
     * [default: ON] If you enable this setting, Cloud SQL checks your available
     * storage every 30 seconds. If the available storage falls below a threshold
     * size, Cloud SQL automatically adds additional storage capacity. If the
     * available storage repeatedly falls below the threshold size, Cloud SQL
     * continues to add storage until it reaches the maximum of 30 TB.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue auto_storage_increase = 7;</code>
     */
    protected $auto_storage_increase = null;
    /**
     * The database flags passed to the Cloud SQL instance at startup.
     * An object containing a list of "key": value pairs.
     * Example: { "name": "wrench", "mass": "1.3kg", "count": "3" }.
     *
     * Generated from protobuf field <code>map<string, string> database_flags = 8;</code>
     */
    private $database_flags;
    /**
     * The type of storage: `PD_SSD` (default) or `PD_HDD`.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.SqlDataDiskType data_disk_type = 9;</code>
     */
    protected $data_disk_type = 0;
    /**
     * The storage capacity available to the database, in GB.
     * The minimum (and default) size is 10GB.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value data_disk_size_gb = 10;</code>
     */
    protected $data_disk_size_gb = null;
    /**
     * The Google Cloud Platform zone where your Cloud SQL database instance is
     * located.
     *
     * Generated from protobuf field <code>string zone = 11;</code>
     */
    protected $zone = '';
    /**
     * Optional. The Google Cloud Platform zone where the failover Cloud SQL
     * database instance is located. Used when the Cloud SQL database availability
     * type is REGIONAL (i.e. multiple zones / highly available).
     *
     * Generated from protobuf field <code>string secondary_zone = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $secondary_zone = '';
    /**
     * The Database Migration Service source connection profile ID,
     * in the format:
     * `projects/my_project_name/locations/us-central1/connectionProfiles/connection_profile_ID`
     *
     * Generated from protobuf field <code>string source_id = 12;</code>
     */
    protected $source_id = '';
    /**
     * Input only. Initial root password.
     *
     * Generated from protobuf field <code>string root_password = 13 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    protected $root_password = '';
    /**
     * Output only. Indicates If this connection profile root password is stored.
     *
     * Generated from protobuf field <code>bool root_password_set = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $root_password_set = false;
    /**
     * The Cloud SQL default instance level collation.
     *
     * Generated from protobuf field <code>string collation = 15;</code>
     */
    protected $collation = '';
    /**
     * The KMS key name used for the csql instance.
     *
     * Generated from protobuf field <code>string cmek_key_name = 16;</code>
     */
    protected $cmek_key_name = '';
    /**
     * Optional. Availability type. Potential values:
     * *  `ZONAL`: The instance serves data from only one zone. Outages in that
     * zone affect data availability.
     * *  `REGIONAL`: The instance can serve data from more than one zone in a
     * region (it is highly available).
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.SqlAvailabilityType availability_type = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $availability_type = 0;
    /**
     * Optional. The edition of the given Cloud SQL instance.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.Edition edition = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $edition = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $database_version
     *           The database engine type and version.
     *     @type array|\Google\Protobuf\Internal\MapField $user_labels
     *           The resource labels for a Cloud SQL instance to use to annotate any related
     *           underlying resources such as Compute Engine VMs.
     *           An object containing a list of "key": "value" pairs.
     *           Example: `{ "name": "wrench", "mass": "18kg", "count": "3" }`.
     *     @type string $tier
     *           The tier (or machine type) for this instance, for example:
     *           `db-n1-standard-1` (MySQL instances) or
     *           `db-custom-1-3840` (PostgreSQL instances).
     *           For more information, see
     *           [Cloud SQL Instance
     *           Settings](https://cloud.google.com/sql/docs/mysql/instance-settings).
     *     @type \Google\Protobuf\Int64Value $storage_auto_resize_limit
     *           The maximum size to which storage capacity can be automatically increased.
     *           The default value is 0, which specifies that there is no limit.
     *     @type int $activation_policy
     *           The activation policy specifies when the instance is activated; it is
     *           applicable only when the instance state is 'RUNNABLE'. Valid values:
     *           'ALWAYS': The instance is on, and remains so even in
     *           the absence of connection requests.
     *           `NEVER`: The instance is off; it is not activated, even if a
     *           connection request arrives.
     *     @type \Google\Cloud\CloudDms\V1\SqlIpConfig $ip_config
     *           The settings for IP Management. This allows to enable or disable the
     *           instance IP and manage which external networks can connect to the instance.
     *           The IPv4 address cannot be disabled.
     *     @type \Google\Protobuf\BoolValue $auto_storage_increase
     *           [default: ON] If you enable this setting, Cloud SQL checks your available
     *           storage every 30 seconds. If the available storage falls below a threshold
     *           size, Cloud SQL automatically adds additional storage capacity. If the
     *           available storage repeatedly falls below the threshold size, Cloud SQL
     *           continues to add storage until it reaches the maximum of 30 TB.
     *     @type array|\Google\Protobuf\Internal\MapField $database_flags
     *           The database flags passed to the Cloud SQL instance at startup.
     *           An object containing a list of "key": value pairs.
     *           Example: { "name": "wrench", "mass": "1.3kg", "count": "3" }.
     *     @type int $data_disk_type
     *           The type of storage: `PD_SSD` (default) or `PD_HDD`.
     *     @type \Google\Protobuf\Int64Value $data_disk_size_gb
     *           The storage capacity available to the database, in GB.
     *           The minimum (and default) size is 10GB.
     *     @type string $zone
     *           The Google Cloud Platform zone where your Cloud SQL database instance is
     *           located.
     *     @type string $secondary_zone
     *           Optional. The Google Cloud Platform zone where the failover Cloud SQL
     *           database instance is located. Used when the Cloud SQL database availability
     *           type is REGIONAL (i.e. multiple zones / highly available).
     *     @type string $source_id
     *           The Database Migration Service source connection profile ID,
     *           in the format:
     *           `projects/my_project_name/locations/us-central1/connectionProfiles/connection_profile_ID`
     *     @type string $root_password
     *           Input only. Initial root password.
     *     @type bool $root_password_set
     *           Output only. Indicates If this connection profile root password is stored.
     *     @type string $collation
     *           The Cloud SQL default instance level collation.
     *     @type string $cmek_key_name
     *           The KMS key name used for the csql instance.
     *     @type int $availability_type
     *           Optional. Availability type. Potential values:
     *           *  `ZONAL`: The instance serves data from only one zone. Outages in that
     *           zone affect data availability.
     *           *  `REGIONAL`: The instance can serve data from more than one zone in a
     *           region (it is highly available).
     *     @type int $edition
     *           Optional. The edition of the given Cloud SQL instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ClouddmsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The database engine type and version.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.SqlDatabaseVersion database_version = 1;</code>
     * @return int
     */
    public function getDatabaseVersion()
    {
        return $this->database_version;
    }

    /**
     * The database engine type and version.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.SqlDatabaseVersion database_version = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDatabaseVersion($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CloudDms\V1\CloudSqlSettings\SqlDatabaseVersion::class);
        $this->database_version = $var;

        return $this;
    }

    /**
     * The resource labels for a Cloud SQL instance to use to annotate any related
     * underlying resources such as Compute Engine VMs.
     * An object containing a list of "key": "value" pairs.
     * Example: `{ "name": "wrench", "mass": "18kg", "count": "3" }`.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getUserLabels()
    {
        return $this->user_labels;
    }

    /**
     * The resource labels for a Cloud SQL instance to use to annotate any related
     * underlying resources such as Compute Engine VMs.
     * An object containing a list of "key": "value" pairs.
     * Example: `{ "name": "wrench", "mass": "18kg", "count": "3" }`.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUserLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_labels = $arr;

        return $this;
    }

    /**
     * The tier (or machine type) for this instance, for example:
     * `db-n1-standard-1` (MySQL instances) or
     * `db-custom-1-3840` (PostgreSQL instances).
     * For more information, see
     * [Cloud SQL Instance
     * Settings](https://cloud.google.com/sql/docs/mysql/instance-settings).
     *
     * Generated from protobuf field <code>string tier = 3;</code>
     * @return string
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * The tier (or machine type) for this instance, for example:
     * `db-n1-standard-1` (MySQL instances) or
     * `db-custom-1-3840` (PostgreSQL instances).
     * For more information, see
     * [Cloud SQL Instance
     * Settings](https://cloud.google.com/sql/docs/mysql/instance-settings).
     *
     * Generated from protobuf field <code>string tier = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTier($var)
    {
        GPBUtil::checkString($var, True);
        $this->tier = $var;

        return $this;
    }

    /**
     * The maximum size to which storage capacity can be automatically increased.
     * The default value is 0, which specifies that there is no limit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value storage_auto_resize_limit = 4;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getStorageAutoResizeLimit()
    {
        return $this->storage_auto_resize_limit;
    }

    public function hasStorageAutoResizeLimit()
    {
        return isset($this->storage_auto_resize_limit);
    }

    public function clearStorageAutoResizeLimit()
    {
        unset($this->storage_auto_resize_limit);
    }

    /**
     * Returns the unboxed value from <code>getStorageAutoResizeLimit()</code>

     * The maximum size to which storage capacity can be automatically increased.
     * The default value is 0, which specifies that there is no limit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value storage_auto_resize_limit = 4;</code>
     * @return int|string|null
     */
    public function getStorageAutoResizeLimitUnwrapped()
    {
        return $this->readWrapperValue("storage_auto_resize_limit");
    }

    /**
     * The maximum size to which storage capacity can be automatically increased.
     * The default value is 0, which specifies that there is no limit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value storage_auto_resize_limit = 4;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setStorageAutoResizeLimit($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->storage_auto_resize_limit = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The maximum size to which storage capacity can be automatically increased.
     * The default value is 0, which specifies that there is no limit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value storage_auto_resize_limit = 4;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setStorageAutoResizeLimitUnwrapped($var)
    {
        $this->writeWrapperValue("storage_auto_resize_limit", $var);
        return $this;}

    /**
     * The activation policy specifies when the instance is activated; it is
     * applicable only when the instance state is 'RUNNABLE'. Valid values:
     * 'ALWAYS': The instance is on, and remains so even in
     * the absence of connection requests.
     * `NEVER`: The instance is off; it is not activated, even if a
     * connection request arrives.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.SqlActivationPolicy activation_policy = 5;</code>
     * @return int
     */
    public function getActivationPolicy()
    {
        return $this->activation_policy;
    }

    /**
     * The activation policy specifies when the instance is activated; it is
     * applicable only when the instance state is 'RUNNABLE'. Valid values:
     * 'ALWAYS': The instance is on, and remains so even in
     * the absence of connection requests.
     * `NEVER`: The instance is off; it is not activated, even if a
     * connection request arrives.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.SqlActivationPolicy activation_policy = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setActivationPolicy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CloudDms\V1\CloudSqlSettings\SqlActivationPolicy::class);
        $this->activation_policy = $var;

        return $this;
    }

    /**
     * The settings for IP Management. This allows to enable or disable the
     * instance IP and manage which external networks can connect to the instance.
     * The IPv4 address cannot be disabled.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.SqlIpConfig ip_config = 6;</code>
     * @return \Google\Cloud\CloudDms\V1\SqlIpConfig|null
     */
    public function getIpConfig()
    {
        return $this->ip_config;
    }

    public function hasIpConfig()
    {
        return isset($this->ip_config);
    }

    public function clearIpConfig()
    {
        unset($this->ip_config);
    }

    /**
     * The settings for IP Management. This allows to enable or disable the
     * instance IP and manage which external networks can connect to the instance.
     * The IPv4 address cannot be disabled.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.SqlIpConfig ip_config = 6;</code>
     * @param \Google\Cloud\CloudDms\V1\SqlIpConfig $var
     * @return $this
     */
    public function setIpConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\SqlIpConfig::class);
        $this->ip_config = $var;

        return $this;
    }

    /**
     * [default: ON] If you enable this setting, Cloud SQL checks your available
     * storage every 30 seconds. If the available storage falls below a threshold
     * size, Cloud SQL automatically adds additional storage capacity. If the
     * available storage repeatedly falls below the threshold size, Cloud SQL
     * continues to add storage until it reaches the maximum of 30 TB.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue auto_storage_increase = 7;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getAutoStorageIncrease()
    {
        return $this->auto_storage_increase;
    }

    public function hasAutoStorageIncrease()
    {
        return isset($this->auto_storage_increase);
    }

    public function clearAutoStorageIncrease()
    {
        unset($this->auto_storage_increase);
    }

    /**
     * Returns the unboxed value from <code>getAutoStorageIncrease()</code>

     * [default: ON] If you enable this setting, Cloud SQL checks your available
     * storage every 30 seconds. If the available storage falls below a threshold
     * size, Cloud SQL automatically adds additional storage capacity. If the
     * available storage repeatedly falls below the threshold size, Cloud SQL
     * continues to add storage until it reaches the maximum of 30 TB.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue auto_storage_increase = 7;</code>
     * @return bool|null
     */
    public function getAutoStorageIncreaseUnwrapped()
    {
        return $this->readWrapperValue("auto_storage_increase");
    }

    /**
     * [default: ON] If you enable this setting, Cloud SQL checks your available
     * storage every 30 seconds. If the available storage falls below a threshold
     * size, Cloud SQL automatically adds additional storage capacity. If the
     * available storage repeatedly falls below the threshold size, Cloud SQL
     * continues to add storage until it reaches the maximum of 30 TB.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue auto_storage_increase = 7;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setAutoStorageIncrease($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->auto_storage_increase = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * [default: ON] If you enable this setting, Cloud SQL checks your available
     * storage every 30 seconds. If the available storage falls below a threshold
     * size, Cloud SQL automatically adds additional storage capacity. If the
     * available storage repeatedly falls below the threshold size, Cloud SQL
     * continues to add storage until it reaches the maximum of 30 TB.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue auto_storage_increase = 7;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setAutoStorageIncreaseUnwrapped($var)
    {
        $this->writeWrapperValue("auto_storage_increase", $var);
        return $this;}

    /**
     * The database flags passed to the Cloud SQL instance at startup.
     * An object containing a list of "key": value pairs.
     * Example: { "name": "wrench", "mass": "1.3kg", "count": "3" }.
     *
     * Generated from protobuf field <code>map<string, string> database_flags = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDatabaseFlags()
    {
        return $this->database_flags;
    }

    /**
     * The database flags passed to the Cloud SQL instance at startup.
     * An object containing a list of "key": value pairs.
     * Example: { "name": "wrench", "mass": "1.3kg", "count": "3" }.
     *
     * Generated from protobuf field <code>map<string, string> database_flags = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDatabaseFlags($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->database_flags = $arr;

        return $this;
    }

    /**
     * The type of storage: `PD_SSD` (default) or `PD_HDD`.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.SqlDataDiskType data_disk_type = 9;</code>
     * @return int
     */
    public function getDataDiskType()
    {
        return $this->data_disk_type;
    }

    /**
     * The type of storage: `PD_SSD` (default) or `PD_HDD`.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.SqlDataDiskType data_disk_type = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setDataDiskType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CloudDms\V1\CloudSqlSettings\SqlDataDiskType::class);
        $this->data_disk_type = $var;

        return $this;
    }

    /**
     * The storage capacity available to the database, in GB.
     * The minimum (and default) size is 10GB.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value data_disk_size_gb = 10;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getDataDiskSizeGb()
    {
        return $this->data_disk_size_gb;
    }

    public function hasDataDiskSizeGb()
    {
        return isset($this->data_disk_size_gb);
    }

    public function clearDataDiskSizeGb()
    {
        unset($this->data_disk_size_gb);
    }

    /**
     * Returns the unboxed value from <code>getDataDiskSizeGb()</code>

     * The storage capacity available to the database, in GB.
     * The minimum (and default) size is 10GB.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value data_disk_size_gb = 10;</code>
     * @return int|string|null
     */
    public function getDataDiskSizeGbUnwrapped()
    {
        return $this->readWrapperValue("data_disk_size_gb");
    }

    /**
     * The storage capacity available to the database, in GB.
     * The minimum (and default) size is 10GB.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value data_disk_size_gb = 10;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setDataDiskSizeGb($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->data_disk_size_gb = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The storage capacity available to the database, in GB.
     * The minimum (and default) size is 10GB.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value data_disk_size_gb = 10;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setDataDiskSizeGbUnwrapped($var)
    {
        $this->writeWrapperValue("data_disk_size_gb", $var);
        return $this;}

    /**
     * The Google Cloud Platform zone where your Cloud SQL database instance is
     * located.
     *
     * Generated from protobuf field <code>string zone = 11;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The Google Cloud Platform zone where your Cloud SQL database instance is
     * located.
     *
     * Generated from protobuf field <code>string zone = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Optional. The Google Cloud Platform zone where the failover Cloud SQL
     * database instance is located. Used when the Cloud SQL database availability
     * type is REGIONAL (i.e. multiple zones / highly available).
     *
     * Generated from protobuf field <code>string secondary_zone = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSecondaryZone()
    {
        return $this->secondary_zone;
    }

    /**
     * Optional. The Google Cloud Platform zone where the failover Cloud SQL
     * database instance is located. Used when the Cloud SQL database availability
     * type is REGIONAL (i.e. multiple zones / highly available).
     *
     * Generated from protobuf field <code>string secondary_zone = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSecondaryZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->secondary_zone = $var;

        return $this;
    }

    /**
     * The Database Migration Service source connection profile ID,
     * in the format:
     * `projects/my_project_name/locations/us-central1/connectionProfiles/connection_profile_ID`
     *
     * Generated from protobuf field <code>string source_id = 12;</code>
     * @return string
     */
    public function getSourceId()
    {
        return $this->source_id;
    }

    /**
     * The Database Migration Service source connection profile ID,
     * in the format:
     * `projects/my_project_name/locations/us-central1/connectionProfiles/connection_profile_ID`
     *
     * Generated from protobuf field <code>string source_id = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_id = $var;

        return $this;
    }

    /**
     * Input only. Initial root password.
     *
     * Generated from protobuf field <code>string root_password = 13 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getRootPassword()
    {
        return $this->root_password;
    }

    /**
     * Input only. Initial root password.
     *
     * Generated from protobuf field <code>string root_password = 13 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRootPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->root_password = $var;

        return $this;
    }

    /**
     * Output only. Indicates If this connection profile root password is stored.
     *
     * Generated from protobuf field <code>bool root_password_set = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getRootPasswordSet()
    {
        return $this->root_password_set;
    }

    /**
     * Output only. Indicates If this connection profile root password is stored.
     *
     * Generated from protobuf field <code>bool root_password_set = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setRootPasswordSet($var)
    {
        GPBUtil::checkBool($var);
        $this->root_password_set = $var;

        return $this;
    }

    /**
     * The Cloud SQL default instance level collation.
     *
     * Generated from protobuf field <code>string collation = 15;</code>
     * @return string
     */
    public function getCollation()
    {
        return $this->collation;
    }

    /**
     * The Cloud SQL default instance level collation.
     *
     * Generated from protobuf field <code>string collation = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setCollation($var)
    {
        GPBUtil::checkString($var, True);
        $this->collation = $var;

        return $this;
    }

    /**
     * The KMS key name used for the csql instance.
     *
     * Generated from protobuf field <code>string cmek_key_name = 16;</code>
     * @return string
     */
    public function getCmekKeyName()
    {
        return $this->cmek_key_name;
    }

    /**
     * The KMS key name used for the csql instance.
     *
     * Generated from protobuf field <code>string cmek_key_name = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setCmekKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cmek_key_name = $var;

        return $this;
    }

    /**
     * Optional. Availability type. Potential values:
     * *  `ZONAL`: The instance serves data from only one zone. Outages in that
     * zone affect data availability.
     * *  `REGIONAL`: The instance can serve data from more than one zone in a
     * region (it is highly available).
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.SqlAvailabilityType availability_type = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getAvailabilityType()
    {
        return $this->availability_type;
    }

    /**
     * Optional. Availability type. Potential values:
     * *  `ZONAL`: The instance serves data from only one zone. Outages in that
     * zone affect data availability.
     * *  `REGIONAL`: The instance can serve data from more than one zone in a
     * region (it is highly available).
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.SqlAvailabilityType availability_type = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setAvailabilityType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CloudDms\V1\CloudSqlSettings\SqlAvailabilityType::class);
        $this->availability_type = $var;

        return $this;
    }

    /**
     * Optional. The edition of the given Cloud SQL instance.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.Edition edition = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Optional. The edition of the given Cloud SQL instance.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlSettings.Edition edition = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setEdition($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CloudDms\V1\CloudSqlSettings\Edition::class);
        $this->edition = $var;

        return $this;
    }

}

