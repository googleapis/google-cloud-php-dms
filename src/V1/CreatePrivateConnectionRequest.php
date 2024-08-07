<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message to create a new private connection in the specified project
 * and region.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.CreatePrivateConnectionRequest</code>
 */
class CreatePrivateConnectionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent that owns the collection of PrivateConnections.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The private connection identifier.
     *
     * Generated from protobuf field <code>string private_connection_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $private_connection_id = '';
    /**
     * Required. The private connection resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.PrivateConnection private_connection = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $private_connection = null;
    /**
     * Optional. A unique ID used to identify the request. If the server receives
     * two requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Optional. If set to true, will skip validations.
     *
     * Generated from protobuf field <code>bool skip_validation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $skip_validation = false;

    /**
     * @param string                                      $parent              Required. The parent that owns the collection of PrivateConnections. Please see
     *                                                                         {@see DataMigrationServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\CloudDms\V1\PrivateConnection $privateConnection   Required. The private connection resource to create.
     * @param string                                      $privateConnectionId Required. The private connection identifier.
     *
     * @return \Google\Cloud\CloudDms\V1\CreatePrivateConnectionRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\CloudDms\V1\PrivateConnection $privateConnection, string $privateConnectionId): self
    {
        return (new self())
            ->setParent($parent)
            ->setPrivateConnection($privateConnection)
            ->setPrivateConnectionId($privateConnectionId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent that owns the collection of PrivateConnections.
     *     @type string $private_connection_id
     *           Required. The private connection identifier.
     *     @type \Google\Cloud\CloudDms\V1\PrivateConnection $private_connection
     *           Required. The private connection resource to create.
     *     @type string $request_id
     *           Optional. A unique ID used to identify the request. If the server receives
     *           two requests with the same ID, then the second request is ignored.
     *           It is recommended to always set this value to a UUID.
     *           The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     *           (_), and hyphens (-). The maximum length is 40 characters.
     *     @type bool $skip_validation
     *           Optional. If set to true, will skip validations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent that owns the collection of PrivateConnections.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent that owns the collection of PrivateConnections.
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
     * Required. The private connection identifier.
     *
     * Generated from protobuf field <code>string private_connection_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPrivateConnectionId()
    {
        return $this->private_connection_id;
    }

    /**
     * Required. The private connection identifier.
     *
     * Generated from protobuf field <code>string private_connection_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateConnectionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_connection_id = $var;

        return $this;
    }

    /**
     * Required. The private connection resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.PrivateConnection private_connection = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CloudDms\V1\PrivateConnection|null
     */
    public function getPrivateConnection()
    {
        return $this->private_connection;
    }

    public function hasPrivateConnection()
    {
        return isset($this->private_connection);
    }

    public function clearPrivateConnection()
    {
        unset($this->private_connection);
    }

    /**
     * Required. The private connection resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.PrivateConnection private_connection = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CloudDms\V1\PrivateConnection $var
     * @return $this
     */
    public function setPrivateConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\PrivateConnection::class);
        $this->private_connection = $var;

        return $this;
    }

    /**
     * Optional. A unique ID used to identify the request. If the server receives
     * two requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique ID used to identify the request. If the server receives
     * two requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. If set to true, will skip validations.
     *
     * Generated from protobuf field <code>bool skip_validation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getSkipValidation()
    {
        return $this->skip_validation;
    }

    /**
     * Optional. If set to true, will skip validations.
     *
     * Generated from protobuf field <code>bool skip_validation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipValidation($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_validation = $var;

        return $this;
    }

}

