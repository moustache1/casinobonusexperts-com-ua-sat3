<?php
namespace ILABAmazon\Api\Parser\Exception;

use ILABAmazon\HasMonitoringEventsTrait;
use ILABAmazon\MonitoringEventsInterface;
use ILABAmazon\ResponseContainerInterface;

class ParserException extends \RuntimeException implements
    MonitoringEventsInterface,
    ResponseContainerInterface
{
    use HasMonitoringEventsTrait;

    private $response;

    public function __construct($message = '', $code = 0, $previous = null, array $context = [])
    {
        $this->response = isset($context['response']) ? $context['response'] : null;
        parent::__construct($message, $code, $previous);
    }

    /**
     * Get the received HTTP response if any.
     *
     * @return ResponseInterface|null
     */
    public function getResponse()
    {
        return $this->response;
    }
}
