<?php

namespace Esticade;

class Esticade
{
    /**
     * @var string
     */
    private $serviceName;

    public function __construct($serviceName)
    {
        $this->serviceName = $serviceName;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * @param string   $event
     * @param callable $callback
     * @return Esticade
     */
    public function on($event, $callback)
    {
        return $this;
    }

    /**
     * @param string   $event
     * @param callable $callback
     * @return Esticade
     */
    public function alwaysOn($event, $callback)
    {
        return $this;
    }

    /**
     * @param string $event
     * @param mixed  $payload
     */
    public function emit($event, $payload)
    {
        
    }

    /**
     * @param string $event
     * @param mixed  $payload
     *
     * @return Esticade
     */
    public function emitChain($event, $payload)
    {
        return $this;
    }
    
    public function execute()
    {

    }

    public function shutdown()
    {

    }
}