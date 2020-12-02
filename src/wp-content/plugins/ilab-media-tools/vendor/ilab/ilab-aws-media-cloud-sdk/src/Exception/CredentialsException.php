<?php
namespace ILABAmazon\Exception;

use ILABAmazon\HasMonitoringEventsTrait;
use ILABAmazon\MonitoringEventsInterface;

class CredentialsException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
