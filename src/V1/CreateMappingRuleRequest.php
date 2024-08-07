<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'CreateMappingRule' command.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.CreateMappingRuleRequest</code>
 */
class CreateMappingRuleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent which owns this collection of mapping rules.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The ID of the rule to create.
     *
     * Generated from protobuf field <code>string mapping_rule_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $mapping_rule_id = '';
    /**
     * Required. Represents a [mapping rule]
     * (https://cloud.google.com/database-migration/reference/rest/v1/projects.locations.mappingRules)
     * object.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.MappingRule mapping_rule = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $mapping_rule = null;
    /**
     * A unique ID used to identify the request. If the server receives two
     * requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     */
    protected $request_id = '';

    /**
     * @param string                                $parent        Required. The parent which owns this collection of mapping rules. Please see
     *                                                             {@see DataMigrationServiceClient::conversionWorkspaceName()} for help formatting this field.
     * @param \Google\Cloud\CloudDms\V1\MappingRule $mappingRule   Required. Represents a [mapping rule]
     *                                                             (https://cloud.google.com/database-migration/reference/rest/v1/projects.locations.mappingRules)
     *                                                             object.
     * @param string                                $mappingRuleId Required. The ID of the rule to create.
     *
     * @return \Google\Cloud\CloudDms\V1\CreateMappingRuleRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\CloudDms\V1\MappingRule $mappingRule, string $mappingRuleId): self
    {
        return (new self())
            ->setParent($parent)
            ->setMappingRule($mappingRule)
            ->setMappingRuleId($mappingRuleId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent which owns this collection of mapping rules.
     *     @type string $mapping_rule_id
     *           Required. The ID of the rule to create.
     *     @type \Google\Cloud\CloudDms\V1\MappingRule $mapping_rule
     *           Required. Represents a [mapping rule]
     *           (https://cloud.google.com/database-migration/reference/rest/v1/projects.locations.mappingRules)
     *           object.
     *     @type string $request_id
     *           A unique ID used to identify the request. If the server receives two
     *           requests with the same ID, then the second request is ignored.
     *           It is recommended to always set this value to a UUID.
     *           The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     *           (_), and hyphens (-). The maximum length is 40 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent which owns this collection of mapping rules.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent which owns this collection of mapping rules.
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
     * Required. The ID of the rule to create.
     *
     * Generated from protobuf field <code>string mapping_rule_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMappingRuleId()
    {
        return $this->mapping_rule_id;
    }

    /**
     * Required. The ID of the rule to create.
     *
     * Generated from protobuf field <code>string mapping_rule_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMappingRuleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->mapping_rule_id = $var;

        return $this;
    }

    /**
     * Required. Represents a [mapping rule]
     * (https://cloud.google.com/database-migration/reference/rest/v1/projects.locations.mappingRules)
     * object.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.MappingRule mapping_rule = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CloudDms\V1\MappingRule|null
     */
    public function getMappingRule()
    {
        return $this->mapping_rule;
    }

    public function hasMappingRule()
    {
        return isset($this->mapping_rule);
    }

    public function clearMappingRule()
    {
        unset($this->mapping_rule);
    }

    /**
     * Required. Represents a [mapping rule]
     * (https://cloud.google.com/database-migration/reference/rest/v1/projects.locations.mappingRules)
     * object.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.MappingRule mapping_rule = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CloudDms\V1\MappingRule $var
     * @return $this
     */
    public function setMappingRule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\MappingRule::class);
        $this->mapping_rule = $var;

        return $this;
    }

    /**
     * A unique ID used to identify the request. If the server receives two
     * requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A unique ID used to identify the request. If the server receives two
     * requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

