<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/registry_service.proto

namespace Google\Cloud\ApigeeRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateApi.
 *
 * Generated from protobuf message <code>google.cloud.apigeeregistry.v1.CreateApiRequest</code>
 */
class CreateApiRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent, which owns this collection of APIs.
     * Format: `projects/&#42;&#47;locations/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The API to create.
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.Api api = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $api = null;
    /**
     * Required. The ID to use for the API, which will become the final component of
     * the API's resource name.
     * This value should be 4-63 characters, and valid characters
     * are /[a-z][0-9]-/.
     * Following AIP-162, IDs must not have the form of a UUID.
     *
     * Generated from protobuf field <code>string api_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $api_id = '';

    /**
     * @param string                              $parent Required. The parent, which owns this collection of APIs.
     *                                                    Format: `projects/&#42;/locations/*`
     *                                                    Please see {@see RegistryClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\ApigeeRegistry\V1\Api $api    Required. The API to create.
     * @param string                              $apiId  Required. The ID to use for the API, which will become the final component of
     *                                                    the API's resource name.
     *
     *                                                    This value should be 4-63 characters, and valid characters
     *                                                    are /[a-z][0-9]-/.
     *
     *                                                    Following AIP-162, IDs must not have the form of a UUID.
     *
     * @return \Google\Cloud\ApigeeRegistry\V1\CreateApiRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\ApigeeRegistry\V1\Api $api, string $apiId): self
    {
        return (new self())
            ->setParent($parent)
            ->setApi($api)
            ->setApiId($apiId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent, which owns this collection of APIs.
     *           Format: `projects/&#42;&#47;locations/&#42;`
     *     @type \Google\Cloud\ApigeeRegistry\V1\Api $api
     *           Required. The API to create.
     *     @type string $api_id
     *           Required. The ID to use for the API, which will become the final component of
     *           the API's resource name.
     *           This value should be 4-63 characters, and valid characters
     *           are /[a-z][0-9]-/.
     *           Following AIP-162, IDs must not have the form of a UUID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeregistry\V1\RegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent, which owns this collection of APIs.
     * Format: `projects/&#42;&#47;locations/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent, which owns this collection of APIs.
     * Format: `projects/&#42;&#47;locations/&#42;`
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
     * Required. The API to create.
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.Api api = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApigeeRegistry\V1\Api|null
     */
    public function getApi()
    {
        return $this->api;
    }

    public function hasApi()
    {
        return isset($this->api);
    }

    public function clearApi()
    {
        unset($this->api);
    }

    /**
     * Required. The API to create.
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.Api api = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApigeeRegistry\V1\Api $var
     * @return $this
     */
    public function setApi($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApigeeRegistry\V1\Api::class);
        $this->api = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the API, which will become the final component of
     * the API's resource name.
     * This value should be 4-63 characters, and valid characters
     * are /[a-z][0-9]-/.
     * Following AIP-162, IDs must not have the form of a UUID.
     *
     * Generated from protobuf field <code>string api_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getApiId()
    {
        return $this->api_id;
    }

    /**
     * Required. The ID to use for the API, which will become the final component of
     * the API's resource name.
     * This value should be 4-63 characters, and valid characters
     * are /[a-z][0-9]-/.
     * Following AIP-162, IDs must not have the form of a UUID.
     *
     * Generated from protobuf field <code>string api_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setApiId($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_id = $var;

        return $this;
    }

}

