<?php
namespace ILABAmazon\Exception;

use ILABAmazon\HasMonitoringEventsTrait;
use ILABAmazon\MonitoringEventsInterface;

class UnresolvedEndpointException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
