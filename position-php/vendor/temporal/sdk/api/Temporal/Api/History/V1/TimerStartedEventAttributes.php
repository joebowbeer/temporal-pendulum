<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.TimerStartedEventAttributes</code>
 */
class TimerStartedEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string timer_id = 1;</code>
     */
    protected $timer_id = '';
    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_fire_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     */
    protected $start_to_fire_timeout = null;
    /**
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 3;</code>
     */
    protected $workflow_task_completed_event_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $timer_id
     *     @type \Google\Protobuf\Duration $start_to_fire_timeout
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: "to" is used to indicate interval. --)
     *     @type int|string $workflow_task_completed_event_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string timer_id = 1;</code>
     * @return string
     */
    public function getTimerId()
    {
        return $this->timer_id;
    }

    /**
     * Generated from protobuf field <code>string timer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTimerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->timer_id = $var;

        return $this;
    }

    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_fire_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getStartToFireTimeout()
    {
        return isset($this->start_to_fire_timeout) ? $this->start_to_fire_timeout : null;
    }

    public function hasStartToFireTimeout()
    {
        return isset($this->start_to_fire_timeout);
    }

    public function clearStartToFireTimeout()
    {
        unset($this->start_to_fire_timeout);
    }

    /**
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_fire_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartToFireTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_to_fire_timeout = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 3;</code>
     * @return int|string
     */
    public function getWorkflowTaskCompletedEventId()
    {
        return $this->workflow_task_completed_event_id;
    }

    /**
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWorkflowTaskCompletedEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->workflow_task_completed_event_id = $var;

        return $this;
    }

}

