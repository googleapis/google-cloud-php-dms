<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A connection profile definition.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.ConnectionProfile</code>
 */
class ConnectionProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of this connection profile resource in the form of
     * projects/{project}/locations/{location}/connectionProfiles/{connectionProfile}.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Output only. The timestamp when the resource was created.
     * A timestamp in RFC3339 UTC "Zulu" format, accurate to nanoseconds.
     * Example: "2014-10-02T15:01:23.045123456Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The timestamp when the resource was last updated.
     * A timestamp in RFC3339 UTC "Zulu" format, accurate to nanoseconds.
     * Example: "2014-10-02T15:01:23.045123456Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * The resource labels for connection profile to use to annotate any related
     * underlying resources such as Compute Engine VMs. An object containing a
     * list of "key": "value" pairs.
     * Example: `{ "name": "wrench", "mass": "1.3kg", "count": "3" }`.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * The current connection profile state (e.g. DRAFT, READY, or FAILED).
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ConnectionProfile.State state = 5;</code>
     */
    protected $state = 0;
    /**
     * The connection profile display name.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     */
    protected $display_name = '';
    /**
     * Output only. The error details in case of state FAILED.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error = null;
    /**
     * The database provider.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseProvider provider = 8;</code>
     */
    protected $provider = 0;
    protected $connection_profile;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of this connection profile resource in the form of
     *           projects/{project}/locations/{location}/connectionProfiles/{connectionProfile}.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp when the resource was created.
     *           A timestamp in RFC3339 UTC "Zulu" format, accurate to nanoseconds.
     *           Example: "2014-10-02T15:01:23.045123456Z".
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The timestamp when the resource was last updated.
     *           A timestamp in RFC3339 UTC "Zulu" format, accurate to nanoseconds.
     *           Example: "2014-10-02T15:01:23.045123456Z".
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The resource labels for connection profile to use to annotate any related
     *           underlying resources such as Compute Engine VMs. An object containing a
     *           list of "key": "value" pairs.
     *           Example: `{ "name": "wrench", "mass": "1.3kg", "count": "3" }`.
     *     @type int $state
     *           The current connection profile state (e.g. DRAFT, READY, or FAILED).
     *     @type string $display_name
     *           The connection profile display name.
     *     @type \Google\Cloud\CloudDms\V1\MySqlConnectionProfile $mysql
     *           A MySQL database connection profile.
     *     @type \Google\Cloud\CloudDms\V1\PostgreSqlConnectionProfile $postgresql
     *           A PostgreSQL database connection profile.
     *     @type \Google\Cloud\CloudDms\V1\OracleConnectionProfile $oracle
     *           An Oracle database connection profile.
     *     @type \Google\Cloud\CloudDms\V1\CloudSqlConnectionProfile $cloudsql
     *           A CloudSQL database connection profile.
     *     @type \Google\Cloud\CloudDms\V1\AlloyDbConnectionProfile $alloydb
     *           An AlloyDB cluster connection profile.
     *     @type \Google\Rpc\Status $error
     *           Output only. The error details in case of state FAILED.
     *     @type int $provider
     *           The database provider.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ClouddmsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of this connection profile resource in the form of
     * projects/{project}/locations/{location}/connectionProfiles/{connectionProfile}.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of this connection profile resource in the form of
     * projects/{project}/locations/{location}/connectionProfiles/{connectionProfile}.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when the resource was created.
     * A timestamp in RFC3339 UTC "Zulu" format, accurate to nanoseconds.
     * Example: "2014-10-02T15:01:23.045123456Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The timestamp when the resource was created.
     * A timestamp in RFC3339 UTC "Zulu" format, accurate to nanoseconds.
     * Example: "2014-10-02T15:01:23.045123456Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when the resource was last updated.
     * A timestamp in RFC3339 UTC "Zulu" format, accurate to nanoseconds.
     * Example: "2014-10-02T15:01:23.045123456Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The timestamp when the resource was last updated.
     * A timestamp in RFC3339 UTC "Zulu" format, accurate to nanoseconds.
     * Example: "2014-10-02T15:01:23.045123456Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The resource labels for connection profile to use to annotate any related
     * underlying resources such as Compute Engine VMs. An object containing a
     * list of "key": "value" pairs.
     * Example: `{ "name": "wrench", "mass": "1.3kg", "count": "3" }`.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The resource labels for connection profile to use to annotate any related
     * underlying resources such as Compute Engine VMs. An object containing a
     * list of "key": "value" pairs.
     * Example: `{ "name": "wrench", "mass": "1.3kg", "count": "3" }`.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * The current connection profile state (e.g. DRAFT, READY, or FAILED).
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ConnectionProfile.State state = 5;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The current connection profile state (e.g. DRAFT, READY, or FAILED).
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ConnectionProfile.State state = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CloudDms\V1\ConnectionProfile\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The connection profile display name.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The connection profile display name.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * A MySQL database connection profile.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.MySqlConnectionProfile mysql = 100;</code>
     * @return \Google\Cloud\CloudDms\V1\MySqlConnectionProfile|null
     */
    public function getMysql()
    {
        return $this->readOneof(100);
    }

    public function hasMysql()
    {
        return $this->hasOneof(100);
    }

    /**
     * A MySQL database connection profile.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.MySqlConnectionProfile mysql = 100;</code>
     * @param \Google\Cloud\CloudDms\V1\MySqlConnectionProfile $var
     * @return $this
     */
    public function setMysql($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\MySqlConnectionProfile::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * A PostgreSQL database connection profile.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.PostgreSqlConnectionProfile postgresql = 101;</code>
     * @return \Google\Cloud\CloudDms\V1\PostgreSqlConnectionProfile|null
     */
    public function getPostgresql()
    {
        return $this->readOneof(101);
    }

    public function hasPostgresql()
    {
        return $this->hasOneof(101);
    }

    /**
     * A PostgreSQL database connection profile.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.PostgreSqlConnectionProfile postgresql = 101;</code>
     * @param \Google\Cloud\CloudDms\V1\PostgreSqlConnectionProfile $var
     * @return $this
     */
    public function setPostgresql($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\PostgreSqlConnectionProfile::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * An Oracle database connection profile.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.OracleConnectionProfile oracle = 104;</code>
     * @return \Google\Cloud\CloudDms\V1\OracleConnectionProfile|null
     */
    public function getOracle()
    {
        return $this->readOneof(104);
    }

    public function hasOracle()
    {
        return $this->hasOneof(104);
    }

    /**
     * An Oracle database connection profile.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.OracleConnectionProfile oracle = 104;</code>
     * @param \Google\Cloud\CloudDms\V1\OracleConnectionProfile $var
     * @return $this
     */
    public function setOracle($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\OracleConnectionProfile::class);
        $this->writeOneof(104, $var);

        return $this;
    }

    /**
     * A CloudSQL database connection profile.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlConnectionProfile cloudsql = 102;</code>
     * @return \Google\Cloud\CloudDms\V1\CloudSqlConnectionProfile|null
     */
    public function getCloudsql()
    {
        return $this->readOneof(102);
    }

    public function hasCloudsql()
    {
        return $this->hasOneof(102);
    }

    /**
     * A CloudSQL database connection profile.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.CloudSqlConnectionProfile cloudsql = 102;</code>
     * @param \Google\Cloud\CloudDms\V1\CloudSqlConnectionProfile $var
     * @return $this
     */
    public function setCloudsql($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\CloudSqlConnectionProfile::class);
        $this->writeOneof(102, $var);

        return $this;
    }

    /**
     * An AlloyDB cluster connection profile.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.AlloyDbConnectionProfile alloydb = 105;</code>
     * @return \Google\Cloud\CloudDms\V1\AlloyDbConnectionProfile|null
     */
    public function getAlloydb()
    {
        return $this->readOneof(105);
    }

    public function hasAlloydb()
    {
        return $this->hasOneof(105);
    }

    /**
     * An AlloyDB cluster connection profile.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.AlloyDbConnectionProfile alloydb = 105;</code>
     * @param \Google\Cloud\CloudDms\V1\AlloyDbConnectionProfile $var
     * @return $this
     */
    public function setAlloydb($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\AlloyDbConnectionProfile::class);
        $this->writeOneof(105, $var);

        return $this;
    }

    /**
     * Output only. The error details in case of state FAILED.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Output only. The error details in case of state FAILED.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * The database provider.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseProvider provider = 8;</code>
     * @return int
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * The database provider.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseProvider provider = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setProvider($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CloudDms\V1\DatabaseProvider::class);
        $this->provider = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getConnectionProfile()
    {
        return $this->whichOneof("connection_profile");
    }

}

