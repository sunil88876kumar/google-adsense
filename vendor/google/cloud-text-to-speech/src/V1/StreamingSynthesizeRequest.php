<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/texttospeech/v1/cloud_tts.proto

namespace Google\Cloud\TextToSpeech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `StreamingSynthesize` method. Multiple
 * `StreamingSynthesizeRequest` messages are sent in one call.
 * The first message must contain a `streaming_config` that
 * fully specifies the request configuration and must not contain `input`. All
 * subsequent messages must only have `input` set.
 *
 * Generated from protobuf message <code>google.cloud.texttospeech.v1.StreamingSynthesizeRequest</code>
 */
class StreamingSynthesizeRequest extends \Google\Protobuf\Internal\Message
{
    protected $streaming_request;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\TextToSpeech\V1\StreamingSynthesizeConfig $streaming_config
     *           StreamingSynthesizeConfig to be used in this streaming attempt. Only
     *           specified in the first message sent in a `StreamingSynthesize` call.
     *     @type \Google\Cloud\TextToSpeech\V1\StreamingSynthesisInput $input
     *           Input to synthesize. Specified in all messages but the first in a
     *           `StreamingSynthesize` call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Texttospeech\V1\CloudTts::initOnce();
        parent::__construct($data);
    }

    /**
     * StreamingSynthesizeConfig to be used in this streaming attempt. Only
     * specified in the first message sent in a `StreamingSynthesize` call.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.StreamingSynthesizeConfig streaming_config = 1;</code>
     * @return \Google\Cloud\TextToSpeech\V1\StreamingSynthesizeConfig|null
     */
    public function getStreamingConfig()
    {
        return $this->readOneof(1);
    }

    public function hasStreamingConfig()
    {
        return $this->hasOneof(1);
    }

    /**
     * StreamingSynthesizeConfig to be used in this streaming attempt. Only
     * specified in the first message sent in a `StreamingSynthesize` call.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.StreamingSynthesizeConfig streaming_config = 1;</code>
     * @param \Google\Cloud\TextToSpeech\V1\StreamingSynthesizeConfig $var
     * @return $this
     */
    public function setStreamingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\TextToSpeech\V1\StreamingSynthesizeConfig::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Input to synthesize. Specified in all messages but the first in a
     * `StreamingSynthesize` call.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.StreamingSynthesisInput input = 2;</code>
     * @return \Google\Cloud\TextToSpeech\V1\StreamingSynthesisInput|null
     */
    public function getInput()
    {
        return $this->readOneof(2);
    }

    public function hasInput()
    {
        return $this->hasOneof(2);
    }

    /**
     * Input to synthesize. Specified in all messages but the first in a
     * `StreamingSynthesize` call.
     *
     * Generated from protobuf field <code>.google.cloud.texttospeech.v1.StreamingSynthesisInput input = 2;</code>
     * @param \Google\Cloud\TextToSpeech\V1\StreamingSynthesisInput $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\TextToSpeech\V1\StreamingSynthesisInput::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getStreamingRequest()
    {
        return $this->whichOneof("streaming_request");
    }

}

