<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A conversion workspace's version.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.ConversionWorkspaceInfo</code>
 */
class ConversionWorkspaceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name (URI) of the conversion workspace.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The commit ID of the conversion workspace.
     *
     * Generated from protobuf field <code>string commit_id = 2;</code>
     */
    protected $commit_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name (URI) of the conversion workspace.
     *     @type string $commit_id
     *           The commit ID of the conversion workspace.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ClouddmsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name (URI) of the conversion workspace.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name (URI) of the conversion workspace.
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
     * The commit ID of the conversion workspace.
     *
     * Generated from protobuf field <code>string commit_id = 2;</code>
     * @return string
     */
    public function getCommitId()
    {
        return $this->commit_id;
    }

    /**
     * The commit ID of the conversion workspace.
     *
     * Generated from protobuf field <code>string commit_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCommitId($var)
    {
        GPBUtil::checkString($var, True);
        $this->commit_id = $var;

        return $this;
    }

}

