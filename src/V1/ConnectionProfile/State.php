<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms_resources.proto

namespace Google\Cloud\CloudDms\V1\ConnectionProfile;

use UnexpectedValueException;

/**
 * The current connection profile state (e.g. DRAFT, READY, or FAILED).
 *
 * Protobuf type <code>google.cloud.clouddms.v1.ConnectionProfile.State</code>
 */
class State
{
    /**
     * The state of the connection profile is unknown.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The connection profile is in draft mode and fully editable.
     *
     * Generated from protobuf enum <code>DRAFT = 1;</code>
     */
    const DRAFT = 1;
    /**
     * The connection profile is being created.
     *
     * Generated from protobuf enum <code>CREATING = 2;</code>
     */
    const CREATING = 2;
    /**
     * The connection profile is ready.
     *
     * Generated from protobuf enum <code>READY = 3;</code>
     */
    const READY = 3;
    /**
     * The connection profile is being updated.
     *
     * Generated from protobuf enum <code>UPDATING = 4;</code>
     */
    const UPDATING = 4;
    /**
     * The connection profile is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 5;</code>
     */
    const DELETING = 5;
    /**
     * The connection profile has been deleted.
     *
     * Generated from protobuf enum <code>DELETED = 6;</code>
     */
    const DELETED = 6;
    /**
     * The last action on the connection profile failed.
     *
     * Generated from protobuf enum <code>FAILED = 7;</code>
     */
    const FAILED = 7;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::DRAFT => 'DRAFT',
        self::CREATING => 'CREATING',
        self::READY => 'READY',
        self::UPDATING => 'UPDATING',
        self::DELETING => 'DELETING',
        self::DELETED => 'DELETED',
        self::FAILED => 'FAILED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\CloudDms\V1\ConnectionProfile_State::class);

