<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Table's parent is a schema.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.TableEntity</code>
 */
class TableEntity extends \Google\Protobuf\Internal\Message
{
    /**
     * Table columns.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.ColumnEntity columns = 1;</code>
     */
    private $columns;
    /**
     * Table constraints.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.ConstraintEntity constraints = 2;</code>
     */
    private $constraints;
    /**
     * Table indices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.IndexEntity indices = 3;</code>
     */
    private $indices;
    /**
     * Table triggers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.TriggerEntity triggers = 4;</code>
     */
    private $triggers;
    /**
     * Custom engine specific features.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 5;</code>
     */
    protected $custom_features = null;
    /**
     * Comment associated with the table.
     *
     * Generated from protobuf field <code>string comment = 6;</code>
     */
    protected $comment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\CloudDms\V1\ColumnEntity>|\Google\Protobuf\Internal\RepeatedField $columns
     *           Table columns.
     *     @type array<\Google\Cloud\CloudDms\V1\ConstraintEntity>|\Google\Protobuf\Internal\RepeatedField $constraints
     *           Table constraints.
     *     @type array<\Google\Cloud\CloudDms\V1\IndexEntity>|\Google\Protobuf\Internal\RepeatedField $indices
     *           Table indices.
     *     @type array<\Google\Cloud\CloudDms\V1\TriggerEntity>|\Google\Protobuf\Internal\RepeatedField $triggers
     *           Table triggers.
     *     @type \Google\Protobuf\Struct $custom_features
     *           Custom engine specific features.
     *     @type string $comment
     *           Comment associated with the table.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Table columns.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.ColumnEntity columns = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Table columns.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.ColumnEntity columns = 1;</code>
     * @param array<\Google\Cloud\CloudDms\V1\ColumnEntity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\CloudDms\V1\ColumnEntity::class);
        $this->columns = $arr;

        return $this;
    }

    /**
     * Table constraints.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.ConstraintEntity constraints = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConstraints()
    {
        return $this->constraints;
    }

    /**
     * Table constraints.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.ConstraintEntity constraints = 2;</code>
     * @param array<\Google\Cloud\CloudDms\V1\ConstraintEntity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConstraints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\CloudDms\V1\ConstraintEntity::class);
        $this->constraints = $arr;

        return $this;
    }

    /**
     * Table indices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.IndexEntity indices = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndices()
    {
        return $this->indices;
    }

    /**
     * Table indices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.IndexEntity indices = 3;</code>
     * @param array<\Google\Cloud\CloudDms\V1\IndexEntity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\CloudDms\V1\IndexEntity::class);
        $this->indices = $arr;

        return $this;
    }

    /**
     * Table triggers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.TriggerEntity triggers = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTriggers()
    {
        return $this->triggers;
    }

    /**
     * Table triggers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.TriggerEntity triggers = 4;</code>
     * @param array<\Google\Cloud\CloudDms\V1\TriggerEntity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTriggers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\CloudDms\V1\TriggerEntity::class);
        $this->triggers = $arr;

        return $this;
    }

    /**
     * Custom engine specific features.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 5;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 5;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setCustomFeatures($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->custom_features = $var;

        return $this;
    }

    /**
     * Comment associated with the table.
     *
     * Generated from protobuf field <code>string comment = 6;</code>
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Comment associated with the table.
     *
     * Generated from protobuf field <code>string comment = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkString($var, True);
        $this->comment = $var;

        return $this;
    }

}

