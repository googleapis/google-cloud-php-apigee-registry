<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/registry_service.proto

namespace Google\Cloud\ApigeeRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for RollbackApiSpec.
 *
 * Generated from protobuf message <code>google.cloud.apigeeregistry.v1.RollbackApiSpecRequest</code>
 */
class RollbackApiSpecRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The spec being rolled back.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The revision ID to roll back to.
     * It must be a revision of the same spec.
     *   Example: `c7cfa2a8`
     *
     * Generated from protobuf field <code>string revision_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $revision_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The spec being rolled back.
     *     @type string $revision_id
     *           Required. The revision ID to roll back to.
     *           It must be a revision of the same spec.
     *             Example: `c7cfa2a8`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeregistry\V1\RegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The spec being rolled back.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The spec being rolled back.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The revision ID to roll back to.
     * It must be a revision of the same spec.
     *   Example: `c7cfa2a8`
     *
     * Generated from protobuf field <code>string revision_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRevisionId()
    {
        return $this->revision_id;
    }

    /**
     * Required. The revision ID to roll back to.
     * It must be a revision of the same spec.
     *   Example: `c7cfa2a8`
     *
     * Generated from protobuf field <code>string revision_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRevisionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->revision_id = $var;

        return $this;
    }

}

