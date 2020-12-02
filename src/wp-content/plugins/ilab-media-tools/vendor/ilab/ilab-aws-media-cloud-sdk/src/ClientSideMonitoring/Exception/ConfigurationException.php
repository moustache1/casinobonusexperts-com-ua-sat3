<?php
namespace ILABAmazon\ClientSideMonitoring\Exception;

use ILABAmazon\HasMonitoringEventsTrait;
use ILABAmazon\MonitoringEventsInterface;


/**
 * Represents an error interacting with configuration for client-side monitoring.
 */
class ConfigurationException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
