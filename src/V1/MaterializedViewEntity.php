<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MaterializedView's parent is a schema.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.MaterializedViewEntity</code>
 */
class MaterializedViewEntity extends \Google\Protobuf\Internal\Message
{
    /**
     * The SQL code which creates the view.
     *
     * Generated from protobuf field <code>string sql_code = 1;</code>
     */
    protected $sql_code = '';
    /**
     * Custom engine specific features.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 2;</code>
     */
    protected $custom_features = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sql_code
     *           The SQL code which creates the view.
     *     @type \Google\Protobuf\Struct $custom_features
     *           Custom engine specific features.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The SQL code which creates the view.
     *
     * Generated from protobuf field <code>string sql_code = 1;</code>
     * @return string
     */
    public function getSqlCode()
    {
        return $this->sql_code;
    }

    /**
     * The SQL code which creates the view.
     *
     * Generated from protobuf field <code>string sql_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSqlCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->sql_code = $var;

        return $this;
    }

    /**
     * Custom engine specific features.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 2;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getCustomFeatures()
    {
        return $this->custom_features;
    }

    public function hasCustomFeatures()
    {
        return isset($this->custom_features);
    }

    public function clearCustomFeatures()
    {
        unset($this->custom_features);
    }

    /**
     * Custom engine specific features.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 2;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setCustomFeatures($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->custom_features = $var;

        return $this;
    }

}

