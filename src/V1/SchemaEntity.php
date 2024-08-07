<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Schema typically has no parent entity, but can have a parent entity
 * DatabaseInstance (for database engines which support it).  For some database
 * engines, the terms  schema and user can be used interchangeably when they
 * refer to a namespace or a collection of other database entities. Can store
 * additional information which is schema specific.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.SchemaEntity</code>
 */
class SchemaEntity extends \Google\Protobuf\Internal\Message
{
    /**
     * Custom engine specific features.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 1;</code>
     */
    protected $custom_features = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Struct $custom_features
     *           Custom engine specific features.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Custom engine specific features.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 1;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 1;</code>
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

