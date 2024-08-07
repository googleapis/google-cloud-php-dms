<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Retrieve a list of all mapping rules in a given conversion workspace.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.ListMappingRulesRequest</code>
 */
class ListMappingRulesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the conversion workspace resource whose mapping rules are
     * listed in the form of:
     * projects/{project}/locations/{location}/conversionWorkspaces/{conversion_workspace}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of rules to return. The service may return
     * fewer than this value.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The nextPageToken value received in the previous call to
     * mappingRules.list, used in the subsequent request to retrieve the next
     * page of results. On first call this should be left blank. When paginating,
     * all other parameters provided to mappingRules.list must match the call
     * that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. Name of the conversion workspace resource whose mapping rules are
     *                       listed in the form of:
     *                       projects/{project}/locations/{location}/conversionWorkspaces/{conversion_workspace}. Please see
     *                       {@see DataMigrationServiceClient::conversionWorkspaceName()} for help formatting this field.
     *
     * @return \Google\Cloud\CloudDms\V1\ListMappingRulesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of the conversion workspace resource whose mapping rules are
     *           listed in the form of:
     *           projects/{project}/locations/{location}/conversionWorkspaces/{conversion_workspace}.
     *     @type int $page_size
     *           The maximum number of rules to return. The service may return
     *           fewer than this value.
     *     @type string $page_token
     *           The nextPageToken value received in the previous call to
     *           mappingRules.list, used in the subsequent request to retrieve the next
     *           page of results. On first call this should be left blank. When paginating,
     *           all other parameters provided to mappingRules.list must match the call
     *           that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the conversion workspace resource whose mapping rules are
     * listed in the form of:
     * projects/{project}/locations/{location}/conversionWorkspaces/{conversion_workspace}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the conversion workspace resource whose mapping rules are
     * listed in the form of:
     * projects/{project}/locations/{location}/conversionWorkspaces/{conversion_workspace}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of rules to return. The service may return
     * fewer than this value.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of rules to return. The service may return
     * fewer than this value.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The nextPageToken value received in the previous call to
     * mappingRules.list, used in the subsequent request to retrieve the next
     * page of results. On first call this should be left blank. When paginating,
     * all other parameters provided to mappingRules.list must match the call
     * that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The nextPageToken value received in the previous call to
     * mappingRules.list, used in the subsequent request to retrieve the next
     * page of results. On first call this should be left blank. When paginating,
     * all other parameters provided to mappingRules.list must match the call
     * that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

